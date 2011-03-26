<?php
/**
 * MercuryBoard
 * Copyright (c) 2001-2004 The Mercury Development Team
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * $Id: groups.php,v 1.26 2004/11/14 05:01:45 jason Exp $
 **/

require './common.php';

/**
 * Group Controls
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 4.0
 **/
class groups extends admin
{
	/**
	 * Group Controls
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string HTML
	 **/
	function execute()
	{
		$this->set_title('Group Controls');

		if (!isset($this->get['s'])) {
			$this->get['s'] = '';
		}

		switch ($this->get['s'])
		{
		case 'add':
			$this->tree('Create a Group');

			if (!isset($this->post['submit'])) {
				return $this->message('Group Controls', "
				<form action='$this->self?a=groups&amp;s=add' method='post'>
					Create a new user group named <input class='input' name='group_name'> based on " . $this->list_groups(USER_MEMBER) . "
					<input type='submit' name='submit' value='Submit'>
				</form>");
			} else {
				if (!isset($this->post['user_group'])) {
					$this->post['user_group'] = USER_MEMBER;
				}

				if (!isset($this->post['group_name'])) {
					$this->post['group_name'] = 'New Group';
				}

				$copying = $this->db->fetch("SELECT group_format, group_perms FROM {$this->pre}groups WHERE group_id={$this->post['user_group']}");

				$this->db->query("INSERT INTO {$this->pre}groups (group_name, group_format, group_perms) VALUES ('" . $this->format($this->post['group_name'], FORMAT_HTMLCHARS) . "', '" . addslashes($copying['group_format']) . "', '" . addslashes($copying['group_perms']) . "')");

				return $this->message('Create a Group', 'Group added.');
			}
			break;

		case 'edit':
			$this->tree('Edit a Group');

			if (!isset($this->post['submit'])) {
				if (!isset($this->post['choose_group'])) {
					return $this->message('Edit a Group', "
					<form action='$this->self?a=groups&amp;s=edit' method='post'>
						Group to edit: " . $this->list_groups(-1, 'group') . "<br /><br />
						<input type='submit' name='choose_group' value='Submit'>
					</form>");
				} else {
					if (!isset($this->post['group'])) {
						return $this->message('Edit a Group', 'No group was specified.');
					}

					$this->post['group'] = intval($this->post['group']);

					$old = $this->db->fetch("SELECT group_name, group_type, group_format FROM {$this->pre}groups WHERE group_id={$this->post['group']}");

					if ($old['group_type'] == '') {
						$old['group_type'] = 'CUSTOM';
					}

					return "
					<form action='$this->self?a=groups&amp;s=edit' method='post'>
					<input type='hidden' name='group' value='{$this->post['group']}'>
					{$this->table}
						<tr>
							<td class='header' colspan='2'>Edit a Group</td>
						</tr>
						<tr>
							<td class='tablelight'>Group Type:</td>
							<td class='tabledark'>{$old['group_type']}</td>
						</tr>
						<tr>
							<td class='tablelight'>Name:</td>
							<td class='tabledark'><input class='input' name='group_name' value='" . $this->format($old['group_name'], FORMAT_HTMLCHARS) . "'></td>
						</tr>
						<tr>
							<td class='tablelight'>Display Formatting:</td>
							<td class='tabledark'><input class='input' name='group_format' value='" . $this->format($old['group_format'], FORMAT_HTMLCHARS) . "'></td>
						</tr>
						<tr>
							<td colspan='2' class='footer' align='center'><input type='submit' name='submit' value='Submit'></td>
						</tr>
					{$this->etable}
					</form>";
				}
			} else {
				if (!isset($this->post['group'])) {
					return $this->message('Edit a Group', 'No group was specified.');
				}

				$this->post['group'] = intval($this->post['group']);

				if (!isset($this->post['group_name']) || (trim($this->post['group_name']) == '')) {
					return $this->message('Edit a Group', 'No new name was given.');
				}

				if (!isset($this->post['group_format']) || (strpos($this->post['group_format'], '%s') === false)) {
					return $this->message('Edit a Group', 'You must use %s in the format, which represents the group name.');
				}

				$this->db->query("UPDATE {$this->pre}groups SET group_name='" . $this->format($this->post['group_name'], FORMAT_HTMLCHARS) . "', group_format='{$this->post['group_format']}' WHERE group_id={$this->post['group']}");

				return $this->message('Edit a Group', 'Group edited.');
			}
			break;

		case 'delete':
			$this->tree('Delete a Group');

			$test = $this->db->fetch("SELECT group_id FROM {$this->pre}groups WHERE group_type=''");

			if (!$test) {
				return $this->message('Group Controls', 'There are no custom groups to delete.<br />The core groups are necessary for MercuryBoard to function, and cannot be deleted.');
			}

			if (!isset($this->post['submit'])) {
				return $this->message('Delete a Group', "
				<form action='$this->self?a=groups&amp;s=delete' method='post'>
					The group " . $this->list_groups(-1, 'old_group', true) . " will be deleted.<br />
					Users from the deleted group will become " . $this->list_groups(USER_MEMBER, 'new_group') . "<br /><br />
					<hr>
					<input type='checkbox' name='confirm' id='confirm'> <label for='confirm'>I confirm that I want to delete this member group.</label>
					<hr><br />
					Note: You can only delete custom member groups. The core groups are necessary for MercuryBoard to function.<br /><br />
					<input type='submit' name='submit' value='Submit'>
				</form>");
			} else {
				if (!isset($this->post['old_group']) || !isset($this->post['confirm'])) {
					return $this->message('Group Controls', 'No action was taken.');
				}

				if (!isset($this->post['new_group'])) {
					$this->post['new_group'] = USER_MEMBER;
				}

				$this->db->query("DELETE FROM {$this->pre}groups WHERE group_id={$this->post['old_group']} AND group_type=''");
				$this->db->query("UPDATE {$this->pre}users SET user_group={$this->post['new_group']} WHERE user_group={$this->post['old_group']}");

				return $this->message('Delete a Group', 'Group deleted.');
			}
			break;
		}
	}
}
?>