<?php
/**
 * MercuryBoard
 * Copyright (c) 2001-2005 The Mercury Development Team
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
 * $Id: perms.php,v 1.44 2005/05/07 16:53:49 jason Exp $
 **/

require './common.php';

class perms extends admin
{
	function execute()
	{
		$perms_obj = new permissions;
		$perms_obj->db  = &$this->db;
		$perms_obj->pre = &$this->pre;

		if (isset($this->get['s']) && ($this->get['s'] == 'user')) {
			if (!isset($this->get['id'])) {
				header("Location: $this->self?a=member&amp;s=perms");
			}

			$this->post['group'] = intval($this->get['id']);

			$mode  = 'user';
			$title = 'User Control';
			$link  = '&amp;s=user&amp;id=' . $this->post['group'];

			$perms_obj->get_perms(-1, $this->post['group']);
		} else {
			if (!isset($this->post['group'])) {
				return $this->message('User Groups', "
				<form action='$this->self?a=perms' method='post'>
					Edit permissions for
					<select name='group'>
					" . $this->select_groups(-1) . "
					</select>
					<input type='submit' value='Submit'>
				</form>");
			}

			$this->post['group'] = intval($this->post['group']);

			$mode  = 'group';
			$title = 'User Group Control';
			$link  = null;

			$perms_obj->get_perms($this->post['group'], -1);
		}

		$this->set_title($title);
		$this->tree($title);

		$forums_only = $this->db->query('SELECT forum_id, forum_name FROM ' . $this->pre . 'forums ORDER BY forum_name');

		$forums_list = array();
		while ($forum = $this->db->nqfetch($forums_only))
		{
			$forums_list[] = $forum;
		}

		$perms = array(
				'board_view' => 'View the board index',
				'board_view_closed' => 'Use MercuryBoard when it is closed',
				'do_anything' => 'Use MercuryBoard',
				'is_admin' => 'Access the admin control panel',
				'email_use' => 'Send emails to members via the board',
				'topic_global' => 'Make a topic visible from all forums',
				'pm_noflood' => 'Exempt from personal messenger flood control',
				'search_noflood' => 'Exempt from search flood control',
				'forum_view' => 'View the forum',
				'post_viewip' => 'View user IP addresses',
				'topic_view' => 'View topics',
				'poll_create' => 'Create polls',
				'poll_vote' => 'Create votes',
				'post_create' => 'Create replies',
				'topic_create' => 'Create topics',
				'post_noflood' => 'Exempt from post flood control',
				'post_delete' => 'Delete any post',
				'post_delete_own' => 'Delete only posts the user has created',
				'topic_delete' => 'Delete any topic',
				'topic_delete_own' => 'Delete only topics the user has created',
				'post_edit' => 'Edit any post',
				'post_edit_own' => 'Edit only posts the user has created',
				'topic_edit' => 'Edit any topic',
				'topic_edit_own' => 'Edit only topics the user has created',
				'topic_lock' => 'Lock any topic',
				'topic_lock_own' => 'Lock topics the user has created',
				'topic_unlock' => 'Unlock any topic',
				'topic_unlock_mod' => 'Unlock a moderator\'s lock',
				'topic_unlock_own' => 'Unlock only topics the user has created',
				'topic_pin' => 'Pin any topic',
				'topic_pin_own' => 'Pin topics the user has created',
				'topic_split' => 'Split any topic into multiple topics',
				'topic_split_own' => 'Split only topics the user has created into multiple topics',
				'topic_unpin' => 'Unpin any topic',
				'topic_unpin_own' => 'Unpin only topics the user has created',
				'topic_move' => 'Move any topic',
				'topic_move_own' => 'Move only topics the user has created',
				'post_attach' => 'Attach uploads to posts',
				'post_attach_download' => 'Download post attachments'
		);

		if (!isset($this->post['submit'])) {
			$count = count($forums_list) + 1;

			if ($mode == 'user') {
				$query = $this->db->fetch("SELECT user_name, user_perms FROM {$this->pre}users WHERE user_id={$this->post['group']}");
				$label = "User '{$query['user_name']}'";
			} else {
				$query = $this->db->fetch("SELECT group_name FROM {$this->pre}groups WHERE group_id={$this->post['group']}");
				$label = "Group '{$query['group_name']}'";
			}

			$out = "
			<script language='javascript'>
			<!--
			function checkrow(element, check)
			{
				var elements = document.forms['form'].elements;
				var count    = elements.length;

				for (var i=0; i<count; i++) {
					var current = elements[i];
					var temp = current.name.split('[');

					if (!temp[1]) continue;
					temp2 = temp[1].split(']');

					if (temp2[0] == element) {
						current.checked = check;
					}
				}
			}

			function changeall(element, check)
			{
				if (!check) {
					checkallbox(element, false);
				} else if (areallchecked(element)) {
					checkallbox(element, true);
				}
			}

			function checkallbox(element, check)
			{
				var elements = document.forms['form'].elements;
				var count    = elements.length;

				var allchecked = true;

				for (var i=0; i<count; i++) {
					var current = elements[i];

					if (current.name == ('perms[' + element + '][-1]')) {
						current.checked = check;
					}
				}
			}

			function areallchecked(element)
			{
				var elements = document.forms['form'].elements;
				var count    = elements.length;

				var allchecked = true;

				for (var i=0; i<count; i++) {
					var current = elements[i];

					if (current.name == ('perms[' + element + '][-1]')) {
						continue;
					}

					var temp = current.name.split('[');

					if (!temp[1]) continue;
					temp2 = temp[1].split(']');

					if (temp2[0] == element) {
						if (!current.checked) {
							allchecked = false;
							break;
						}
					}
				}

				return allchecked;
			}
			//-->
			</script>

			<form name='form' action='$this->self?a=perms$link' method='post'>
			<center><span style='font-size:14px'><b>Permissions For $label</b></span>";

			if ($mode == 'user') {
				$out .= "<br />This will override the group permissions for this user.<br /><br />
				<div style='border:1px dashed #ff0000; width:25%; padding:5px'><input type='checkbox' name='usegroup' id='usegroup' style='vertical-align:middle'" . (!$query['user_perms'] ? ' checked' : '') . "> <label for='usegroup' style='vertical-align:middle'>Use only group permissions for this user</label></div>";
			}

			$out .= "</center><br />" .
			$this->table . "
			<tr>
				<td colspan='" . ($count + 1) . "' class='header'>$label</td>
			</tr>

			<input type='hidden' name='group' value='{$this->post['group']}'>";

			$out .= $this->show_headers($forums_list);

			$this->iterator_init('tablelight', 'tabledark');

			$i = 0;
			foreach ($perms as $perm => $label)
			{
				$out .= "
				<tr>
					<td class='" . $this->iterate() . "'>$label</td>
					<td class='" . $this->lastValue() . "' align='center'>
						<input type='checkbox' name='perms[$perm][-1]' id='perms_{$perm}' onclick='checkrow(\"$perm\", this.checked)'" . ($perms_obj->auth($perm) ? ' checked' : '') . ">All
					</td>";

				if (!isset($perms_obj->globals[$perm])) {
					foreach ($forums_list as $forum)
					{
						if ($perms_obj->auth($perm, $forum['forum_id'])) {
							$checked = ' checked';
						} else {
							$checked = '';
						}

						$out .= "\n<td class='" . $this->lastValue() . "' align='center'><input type='checkbox' name='perms[$perm][{$forum['forum_id']}]' onclick='changeall(\"$perm\", this.checked)'$checked></td>";
					}
				} elseif ($forums_list) {
					$out .= "\n<td class='" . $this->lastValue() . "' colspan='$count' align='center'>N/A</td>";
				}

				$out .= "
				</tr>";

				$i++;
				if (($i % 12) == 0) {
					$out .= $this->show_headers($forums_list);
				}
			}

			return $out . "
			<tr>
				<td colspan='" . ($count + 1) . "' class='footer' align='center'><input type='submit' name='submit' value='Update Permissions'></td>
			</tr>
			</form>" . $this->etable;
		} else {
			if (($mode == 'user') && isset($this->post['usegroup'])) {
				$perms_obj->cube = '';
				$perms_obj->update();
				return $this->message('Permissions', 'The user will inherit the group\'s permissions.');
			}

			$perms_obj->reset_cube(false);

			if (!isset($this->post['perms'])) {
				$this->post['perms'] = array();
			}

			foreach ($this->post['perms'] as $name => $data)
			{
				if (isset($data[-1]) || isset($data['-1']) || (count($data) == count($forums_list))) {
					$perms_obj->set_xy($name, true);
				} else {
					foreach ($data as $forum => $on)
					{
						$perms_obj->set_xyz($name, intval($forum), true);
					}
				}
			}

			$perms_obj->update();

			return $this->message('User Group Control', 'Permissions have been updated.');
		}
	}

	function show_headers($forums_list)
	{
		$out = "<tr>
		<td class='subheader' colspan='2' valign='bottom'>Permission</td>";

		foreach ($forums_list as $forum)
		{
			$out .= "\n<td class='subheader' align='right' valign='middle' style='direction:ltr; writing-mode:tb-rl'>{$forum['forum_name']}</td>";
		}

		return $out . '</tr>';
	}
}
?>