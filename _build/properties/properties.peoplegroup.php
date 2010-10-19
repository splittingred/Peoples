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
 * Properties for the PeopleGroup snippet.
 *
 * @package peoples
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'usergroup',
        'desc' => 'prop_peoplegroup.usergroup_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'userTpl',
        'desc' => 'prop_peoplegroup.usertpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'pplGroupUser',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_peoplegroup.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'username',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortByAlias',
        'desc' => 'prop_peoplegroup.sortbyalias_desc',
        'type' => 'list',
        'options' => array(
            array('name' => 'User','value' => 'modUser'),
            array('name' => 'Role','value' => 'UserGroupRole'),
        ),
        'value' => 'modUser',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_peoplegroup.sortdir_desc',
        'type' => 'list',
        'options' => array(
            array('name' => 'peoples.opt_asc','value' => 'ASC'),
            array('name' => 'peoples.opt_desc','value' => 'DESC'),
        ),
        'value' => 'ASC',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_peoplegroup.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 0,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'start',
        'desc' => 'prop_peoplegroup.start_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 0,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'getProfile',
        'desc' => 'prop_peoplegroup.getprofile_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'profileAlias',
        'desc' => 'prop_peoplegroup.profilealias_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Profile',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'userClass',
        'desc' => 'prop_peoplegroup.userclass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'modUser',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'cls',
        'desc' => 'prop_peoplegroup.cls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ppl-user',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'altCls',
        'desc' => 'prop_peoplegroup.altcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'firstCls',
        'desc' => 'prop_peoplegroup.firstcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'lastCls',
        'desc' => 'prop_peoplegroup.lastcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'placeholderPrefix',
        'desc' => 'prop_peoplegroup.placeholderprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'peoplegroups.',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_peoplegroup.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_peoplegroup.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_peoplegroup.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    */
);

return $properties;