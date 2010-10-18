<?php
/**
 * Peoples
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Peoples is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Peoples is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Peoples; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package peoples
 */
/**
 * Displays a list of Users
 *
 * @package peoples
 */
$peoples = $modx->getService('peoples','Peoples',$modx->getOption('peoples.core_path',null,$modx->getOption('core_path').'components/peoples/').'model/peoples/',$scriptProperties);
if (!($peoples instanceof Peoples)) return '';
$output = '';

/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'pplUser');
$active = $modx->getOption('active',$scriptProperties,true);
$usergroups = $modx->getOption('usergroups',$scriptProperties,'');
$limit = $modx->getOption('limit',$scriptProperties,10);
$start = $modx->getOption('start',$scriptProperties,0);
$sortBy = $modx->getOption('sortBy',$scriptProperties,'username');
$sortByAlias = $modx->getOption('sortByAlias',$scriptProperties,'User');
$sortDir = $modx->getOption('sortDir',$scriptProperties,'ASC');
$cls = $modx->getOption('cls',$scriptProperties,'ppl-user');
$altCls = $modx->getOption('altCls',$scriptProperties,'');
$firstCls = $modx->getOption('firstCls',$scriptProperties,'');
$lastCls = $modx->getOption('lastCls',$scriptProperties,'');
$placeholderPrefix = $modx->getOption('placeholderPrefix',$scriptProperties,'peoples.');
$profileAlias = $modx->getOption('profileAlias',$scriptProperties,'Profile');
$userClass = $modx->getOption('userClass',$scriptProperties,'modUser');
$userAlias = $modx->getOption('userAlias',$scriptProperties,'User');

/* build query */
$c = $modx->newQuery($userClass);
$c->setClassAlias($userAlias);
if (is_bool($active) || $active < 2) {
    $c->where(array(
        $userAlias.'.active' => $active,
    ));
}
/* filter by user groups */
if (!empty($usergroups)) {
    $usergroups = explode(',',$usergroups);
    $c->leftJoin('modUserGroupMember','UserGroupMembers',$modx->getSelectColumns($userClass,$userAlias,'',array('id')).' = '.$modx->getSelectColumns('modUserGroupMember','UserGroupMembers','',array('member')));
    $c->leftJoin('modUserGroup','UserGroup',$modx->getSelectColumns('modUserGroupMember','UserGroupMembers','',array('user_group')).' = '.$modx->getSelectColumns('modUserGroup','UserGroup','',array('id')));
    $c->where(array(
        'UserGroup.name:IN' => $usergroups,
    ));
}
$count = $modx->getCount($userClass,$c);
$c->sortby($sortByAlias.'.'.$sortBy,$sortDir);
if (!empty($limit)) {
    $c->limit($limit,$start);
}
$c->bindGraph('{"'.$profileAlias.'":{}}');
$users = $modx->getCollectionGraph($userClass,'{"'.$profileAlias.'":{}}',$c);

/* iterate */
$list = array();
$alt = false;
$iterativeCount = count($users);
$idx = 0;
foreach ($users as $user) {
    if (empty($user->$profileAlias)) continue;
    
    $userArray = $user->get(array('id','username','active','class_key','remote_key','remote_data'));
    $userArray = array_merge($user->$profileAlias->toArray(),$userArray);
    
    $userArray['cls'] = $alt && !empty($altCls) ? $cls.' '.$altCls : $cls;
    if (!empty($firstCls) && $idx == 0) {
        $userArray['cls'] .= ' '.$firstCls;
    }
    if (!empty($lastCls) && $idx == $iterativeCount-1) {
        $userArray['cls'] .= ' '.$lastCls;
    }
    $list[] = $peoples->getChunk($tpl,$userArray);
    $peoples->clearPlaceholders($userArray,'extended');
    $peoples->clearPlaceholders($userArray,'remote_data');
    $alt = !$alt;
    $idx++;
}

/* set total placeholders */
$placeholders = array(
    'total' => $count,
    'start' => $start,
    'limit' => $limit,
);
$modx->setPlaceholders($placeholders,$placeholderPrefix);


/* output */
$outputSeparator = $modx->getOption('outputSeparator',$scriptProperties,"\n");
$output = implode($list,$outputSeparator);
$toPlaceholder = $modx->getOption('toPlaceholder',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return '';
}
return $output;