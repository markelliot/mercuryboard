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
 * $Id: logs.php,v 1.1 2004/02/20 02:13:01 jason Exp $
 **/

require './common.php';

class logs extends admin
{
	function execute()
	{
		$this->set_title('View Moderator Actions');
		$this->tree('View Moderator Actions');

		$data = $this->db->query("SELECT l.*, u.user_name FROM {$this->pre}logs l, {$this->pre}users u WHERE u.user_id=l.log_user ORDER BY l.log_time DESC");

		$this->iterator_init('tablelight', 'tabledark');

		$out = null;
		while ($log = $this->db->nqfetch($data))
		{
			$out .= "
			<tr>
				<td class='" . $this->iterate() . "'>" . $this->mbdate(DATE_LONG, $log['log_time']) . "</td>
				<td class='" . $this->lastValue() . "'>{$log['user_name']}</td>";

			switch ($log['log_action'])
			{
			case 'post_delete':
				$out .= "
				<td class='" . $this->lastValue() . "'>Deleted a post</td>
				<td class='" . $this->lastValue() . "'>Post #{$log['log_data1']}</td>";
				break;

			case 'post_edit':
				$out .= "
				<td class='" . $this->lastValue() . "'>Edited a post</td>
				<td class='" . $this->lastValue() . "'>Post #{$log['log_data1']}</td>";
				break;

			case 'topic_lock':
				$out .= "
				<td class='" . $this->lastValue() . "'>Locked a topic</td>
				<td class='" . $this->lastValue() . "'>Topic #{$log['log_data1']}</td>";
				break;

			case 'topic_unlock':
				$out .= "
				<td class='" . $this->lastValue() . "'>Unlocked a topic</td>
				<td class='" . $this->lastValue() . "'>Topic #{$log['log_data1']}</td>";
				break;

			case 'topic_move':
				$out .= "
				<td class='" . $this->lastValue() . "'>Moved a topic</td>
				<td class='" . $this->lastValue() . "'>Moved topic #{$log['log_data1']} from forum #{$log['log_data2']} to forum #{$log['log_data3']}</td>";
				break;

			case 'topic_edit':
				$out .= "
				<td class='" . $this->lastValue() . "'>Edited a topic</td>
				<td class='" . $this->lastValue() . "'>Topic #{$log['log_data1']}</td>";
				break;

			case 'topic_pin':
				$out .= "
				<td class='" . $this->lastValue() . "'>Pinned a topic</td>
				<td class='" . $this->lastValue() . "'>Topic #{$log['log_data1']}</td>";
				break;

			case 'topic_unpin':
				$out .= "
				<td class='" . $this->lastValue() . "'>Unpinned a topic</td>
				<td class='" . $this->lastValue() . "'>Topic #{$log['log_data1']}</td>";
				break;

			case 'topic_delete':
				$out .= "
				<td class='" . $this->lastValue() . "'>Deleted a topic</td>
				<td class='" . $this->lastValue() . "'>Topic #{$log['log_data1']}</td>";
				break;

			default:
				$out .= "
				<td class='" . $this->lastValue() . "'>{$log['log_action']}</td>
				<td class='" . $this->lastValue() . "'>{$log['log_data1']}</td>";
			}

			$out .= "
			</tr>";
		}

		return "$this->table
		<tr>
			<td class='header' colspan='4'>View Moderator Actions</td>
		</tr>
		<tr>
			<td class='subheader'>Time</td>
			<td class='subheader'>User</td>
			<td class='subheader'>Action</td>
			<td class='subheader'>IDs</td>
		</tr>
		$out
		$this->etable";
	}
}
?>