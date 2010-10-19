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
 * Properties for the PeopleGroups snippet.
 *
 * @package peoples
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_peoplegroups.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'pplUserGroup',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'user',
        'desc' => 'prop_peoplegroups.user_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 0,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_peoplegroups.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 10,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'start',
        'desc' => 'prop_peoplegroups.start_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 0,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_peoplegroups.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'peoples:properties',
    ),/*
    array(
        'name' => 'sortByAlias',
        'desc' => 'prop_peoplegroups.sortbyalias_desc',
        'type' => 'list',
        'options' => array(
            array('name' => 'UserGroup','value' => 'modUserGroup'),
        ),
        'value' => 'modUserGroup',
        'lexicon' => 'peoples:properties',
    ),*/
    array(
        'name' => 'sortDir',
        'desc' => 'prop_peoplegroups.sortdir_desc',
        'type' => 'list',
        'options' => array(
            array('name' => 'peoples.opt_asc','value' => 'ASC'),
            array('name' => 'peoples.opt_desc','value' => 'DESC'),
        ),
        'value' => 'ASC',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'cls',
        'desc' => 'prop_peoplegroups.cls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ppl-usergroup',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'altCls',
        'desc' => 'prop_peoplegroups.altcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'firstCls',
        'desc' => 'prop_peoplegroups.firstcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'lastCls',
        'desc' => 'prop_peoplegroups.lastcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'placeholderPrefix',
        'desc' => 'prop_peoplegroups.placeholderprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'peoplegroups.',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_peoplegroups.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_peoplegroups.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_peoplegroups.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    */
);

return $properties;