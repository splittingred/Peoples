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
 * Add snippets to build
 * 
 * @package peoples
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'Peoples',
    'description' => 'Displays a list of Users.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.peoples.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.peoples.php';
$snippets[0]->setProperties($properties);
unset($properties);

$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'PeopleGroups',
    'description' => 'Displays a list of User Groups.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.peoplegroups.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.peoplegroups.php';
$snippets[1]->setProperties($properties);
unset($properties);

$snippets[2]= $modx->newObject('modSnippet');
$snippets[2]->fromArray(array(
    'id' => 2,
    'name' => 'PeopleGroup',
    'description' => 'Displays a list of Users in a User Group.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.peoplegroup.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.peoplegroup.php';
$snippets[2]->setProperties($properties);
unset($properties);

return $snippets;