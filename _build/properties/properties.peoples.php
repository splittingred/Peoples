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
 * Properties for the pplUsers snippet.
 *
 * @package peoples
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_peoples.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'pplUser',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'active',
        'desc' => 'prop_peoples.active_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 1,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'usergroups',
        'desc' => 'prop_peoples.usergroups_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_peoples.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 10,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'start',
        'desc' => 'prop_peoples.start_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 0,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_peoples.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'username',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortByAlias',
        'desc' => 'prop_peoples.sortbyalias_desc',
        'type' => 'list',
        'options' => array(
            array('name' => 'User','value' => 'User'),
            array('name' => 'Profile','value' => 'Profile'),
        ),
        'value' => 'User',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_peoples.sortdir_desc',
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
        'desc' => 'prop_peoples.cls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ppl-user',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'altCls',
        'desc' => 'prop_peoples.altcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'firstCls',
        'desc' => 'prop_peoples.firstcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'lastCls',
        'desc' => 'prop_peoples.lastcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'placeholderPrefix',
        'desc' => 'prop_peoples.placeholderprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'peoples.',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_peoples.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_peoples.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'userClass',
        'desc' => 'prop_peoples.userclass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'userAlias',
        'desc' => 'prop_peoples.useralias_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_peoples.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    */
);

return $properties;