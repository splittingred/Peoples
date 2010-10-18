<?php
/**
 * MODxp
 *
 * Copyright 2010 by Shaun McCormick <shaun+modxp@modx.com>
 *
 * MODxp is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * MODxp is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MODxp; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxp
 */
/**
 * Properties for the MODxp snippet.
 *
 * @package modxp
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_modxp.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Item',
        'lexicon' => 'modxp:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_modxp.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'modxp:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_modxp.sortdir_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ASC',
        'lexicon' => 'modxp:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_modxp.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'modxp:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_modxp.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'modxp:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_modxp.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => true,
        'lexicon' => 'modxp:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_modxp.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'modxp:properties',
    ),
    */
);

return $properties;