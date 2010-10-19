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
 * English language properties topic
 * 
 * @package peoples
 * @subpackage lexicon
 * @language en
 */

/* options */
$_lang['peoples.opt_asc'] = 'Ascending';
$_lang['peoples.opt_desc'] = 'Descending';

/* Peoples */
$_lang['prop_peoples.tpl_desc'] = 'The Chunk to use for each User.';
$_lang['prop_peoples.active_desc'] = '0 to show only inactive Users, 1 to show only active Users, 2 to show all Users.';
$_lang['prop_peoples.usergroups_desc'] = 'Optional. A comma-separated list of User Group names to filter by.';
$_lang['prop_peoples.limit'] = 'The number of users to limit per call. Defaults to 10. Set to 0 to show all.';
$_lang['prop_peoples.start'] = 'The start index to begin with when limiting.';
$_lang['prop_peoples.sortby'] = 'The field name to sort by. (Cannot be an extended field.)';
$_lang['prop_peoples.sortbyalias'] = 'The class to use with the sort field.';
$_lang['prop_peoples.sortdir'] = 'The direction to sort by.';
$_lang['prop_peoples.cls'] = 'Optional. If set, will append this CSS class to each item.';
$_lang['prop_peoples.altcls'] = 'Optional. If set, will append this CSS class to every even item.';
$_lang['prop_peoples.firstcls'] = 'Optional. If set, will append this CSS class to the first item.';
$_lang['prop_peoples.lastcls'] = 'Optional. If set, will append this CSS class to the last item.';
$_lang['prop_peoples.placeholderprefix_desc'] = 'The prefix to use when setting global placeholders, such as total.';
$_lang['prop_peoples.outputseparator_desc'] = 'The separator between each user record.';
$_lang['prop_peoples.toplaceholder_desc'] = 'Optional. If set, will set the output to this placeholder and return empty.';
$_lang['prop_peoples.userclass_desc'] = 'The class name of the Users object.';
$_lang['prop_peoples.useralias_desc'] = 'The class alias of the Users object.';


/* PeopleGroups */
$_lang['prop_peoplegroups.tpl_desc'] = 'The Chunk to use for each User Group.';
$_lang['prop_peoplegroups.user_desc'] = 'Optional. If an ID of a User is specified, will only show User Groups for that User.';
$_lang['prop_peoplegroups.limit'] = 'The number of users to limit per call. Defaults to 10. Set to 0 to show all.';
$_lang['prop_peoplegroups.start'] = 'The start index to begin with when limiting.';
$_lang['prop_peoplegroups.sortby'] = 'The field name to sort by.';
$_lang['prop_peoplegroups.sortbyalias'] = 'The class to use with the sort field.';
$_lang['prop_peoplegroups.sortdir'] = 'The direction to sort by.';
$_lang['prop_peoplegroups.cls'] = 'Optional. If set, will append this CSS class to each item.';
$_lang['prop_peoplegroups.altcls'] = 'Optional. If set, will append this CSS class to every even item.';
$_lang['prop_peoplegroups.firstcls'] = 'Optional. If set, will append this CSS class to the first item.';
$_lang['prop_peoplegroups.lastcls'] = 'Optional. If set, will append this CSS class to the last item.';
$_lang['prop_peoplegroups.placeholderprefix_desc'] = 'The prefix to use when setting global placeholders, such as total.';
$_lang['prop_peoplegroups.outputseparator_desc'] = 'The separator between each user group record.';
$_lang['prop_peoplegroups.toplaceholder_desc'] = 'Optional. If set, will set the output to this placeholder and return empty.';


/* PeopleGroup */
$_lang['prop_peoplegroup.usergroup_desc'] = 'Required. Either the ID or name of the User Group to fetch.';
$_lang['prop_peoplegroup.usertpl_desc'] = 'The Chunk to use for each User in the User Group.';
$_lang['prop_peoplegroup.limit'] = 'The number of users to limit per call. Defaults to 0, which shows all Users.';
$_lang['prop_peoplegroup.start'] = 'The start index to begin with when limiting.';
$_lang['prop_peoplegroup.sortby'] = 'The field name to sort by.';
$_lang['prop_peoplegroup.sortbyalias'] = 'The class to use with the sort field.';
$_lang['prop_peoplegroup.sortdir'] = 'The direction to sort by.';
$_lang['prop_peoplegroup.getprofile'] = 'If true, will also get the Profile for each User. Defaults to false.';
$_lang['prop_peoplegroup.profilealias'] = 'The alias for the Profile class for each User.';
$_lang['prop_peoplegroup.userclass'] = 'The class name for the User object for the Users in the User Group.';
$_lang['prop_peoplegroup.cls'] = 'Optional. If set, will append this CSS class to each item.';
$_lang['prop_peoplegroup.altcls'] = 'Optional. If set, will append this CSS class to every even item.';
$_lang['prop_peoplegroup.firstcls'] = 'Optional. If set, will append this CSS class to the first item.';
$_lang['prop_peoplegroup.lastcls'] = 'Optional. If set, will append this CSS class to the last item.';
$_lang['prop_peoplegroup.placeholderprefix_desc'] = 'The prefix to use when setting global placeholders, such as userCount and the name of the User Group.';
$_lang['prop_peoplegroup.outputseparator_desc'] = 'The separator between each user record.';
$_lang['prop_peoplegroup.toplaceholder_desc'] = 'Optional. If set, will set the output to this placeholder and return empty.';