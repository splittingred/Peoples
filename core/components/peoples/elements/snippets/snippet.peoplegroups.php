<?php
/**
 * PeopleGroups
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
 * Displays a list of User Groups
 *
 * @package peoples
 */
$peoples = $modx->getService('peoples','Peoples',$modx->getOption('peoples.core_path',null,$modx->getOption('core_path').'components/peoples/').'model/peoples/',$scriptProperties);
if (!($peoples instanceof Peoples)) return '';
$output = '';

/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'pplUserGroup');
$user = $modx->getOption('user',$scriptProperties,false);
$limit = $modx->getOption('limit',$scriptProperties,10);
$start = $modx->getOption('start',$scriptProperties,0);
$sortBy = $modx->getOption('sortBy',$scriptProperties,'name');
$sortByAlias = $modx->getOption('sortByAlias',$scriptProperties,'modUserGroup');
$sortDir = $modx->getOption('sortDir',$scriptProperties,'ASC');
$cls = $modx->getOption('cls',$scriptProperties,'ppl-usergroup');
$altCls = $modx->getOption('altCls',$scriptProperties,'');
$firstCls = $modx->getOption('firstCls',$scriptProperties,'');
$lastCls = $modx->getOption('lastCls',$scriptProperties,'');
$placeholderPrefix = $modx->getOption('placeholderPrefix',$scriptProperties,'peoplegroups.');

/* build query */
$c = $modx->newQuery('modUserGroup');
/* filter by user if specified */
if (!empty($user)) {
    $c->innerJoin('modUserGroupMember','UserGroupMembers');
    $c->where(array(
        'UserGroupMembers.member' => $user,
    ));
}
$count = $modx->getCount('modUserGroup',$c);
$c->select($modx->getSelectColumns('modUserGroup','modUserGroup'));

/* build users count subquery */
$subc = $modx->newQuery('modUser');
$subc->innerJoin('modUserGroupMember','UserGroupMembers');
$mupk = $modx->getSelectColumns('modUser','modUser','',array('id'));
$subc->select('COUNT('.$mupk.')');
$subc->where(array(
    $modx->getSelectColumns('modUserGroup','modUserGroup','',array('id')).' = '.$modx->getSelectColumns('modUserGroupMember','UserGroupMembers','',array('user_group')),
));
$subc->prepare();
$c->select('('.$subc->toSql().') AS '.$modx->escape('children'));
$c->sortby($modx->escape($sortByAlias).'.'.$modx->escape($sortBy),$sortDir);
$usergroups = $modx->getCollection('modUserGroup',$c);

/* iterate */
$idx = 0;
$alt = false;
$list = array();
$iterativeCount = count($usergroups);
foreach ($usergroups as $usergroup) {
    $usergroupArray = $usergroup->toArray();

    $usergroupArray['cls'] = $alt && !empty($altCls) ? $cls.' '.$altCls : $cls;
    if (!empty($firstCls) && $idx == 0) {
        $usergroupArray['cls'] .= ' '.$firstCls;
    }
    if (!empty($lastCls) && $idx == $iterativeCount-1) {
        $usergroupArray['cls'] .= ' '.$lastCls;
    }
    $list[] = $peoples->getChunk($tpl,$usergroupArray);
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