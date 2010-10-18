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
        'desc' => 'prop_pplusers.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'pplUser',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_pplusers.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_pplusers.sortdir_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ASC',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_pplusers.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_pplusers.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_pplusers.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => true,
        'lexicon' => 'peoples:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_pplusers.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'peoples:properties',
    ),
    */
);

return $properties;