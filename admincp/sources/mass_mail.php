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
 * $Id: mass_mail.php,v 1.16 2004/08/15 05:09:34 jason Exp $
 **/

require './common.php';

class mass_mail extends admin
{
	function execute()
	{
		$this->set_title('Mass Mail');
		$this->tree('Mass Mail');

		if (isset($this->post['massmail'])) {
			return $this->send_mail();
		} else {
			$group_list = $this->group_list();

			return "
			<script language='javascript'>
			<!--
			function select_all_groups()
			{
			  opts = document.forms['mailer'].elements['groups[]'].options
			  for (i=0; i<opts.length; i++)
			  {
			    opts[i].selected = true;
			  }
			}
			//-->
			</script>

			$this->table
			<form action='$this->self?a=mass_mail' method='post' name='mailer'>
			<tr>
				<td class='header' colspan='2'>Mail Members</td>
			</tr>
			<tr>
				<td class='tablelight' width='30%'><b>Subject</b></td>
				<td class='tablelight' width='70%' valign='top'><input class='input' type='text' name='subject' size='60' value=\"Announcement From " . $this->format($this->sets['forum_name'], FORMAT_HTMLCHARS) . "\"></td>
			</tr>
			<tr>
				<td class='tabledark' valign='top' width='100'><b>Recipient Groups</b><br />[<a href='#' onClick='select_all_groups()'>Select All</a>]</td>
				<td class='tabledark' valign='top'>
					<select name='groups[]' size='8' multiple>
						$group_list
					</select>
				</td>
			</tr>
			<tr>
				<td class='tablelight' valign='top'><b>Message</b></td>
				<td class='tablelight' valign='top'><textarea name='message' rows='12' cols='60' class='input'></textarea></td>
			</tr>
			<tr>
				<td class='footer' colspan='2' align='center'>
					<input type='submit' name='massmail' value='Send Mail'>
				</td>
			</tr>
			<form>" . $this->etable;
		}
	}

	function group_list()
	{
		$out   = null;
		$query = $this->db->query("SELECT group_id, group_name, group_type FROM {$this->pre}groups ORDER BY group_name");

		while ($group = $this->db->nqfetch($query))
		{
			if ($group['group_type'] != 'GUEST') {
				$out .= "<option value='{$group['group_id']}' selected>{$group['group_name']}</option>\n";
			}
		}

		return $out;
	}

	function group_query($groups)
	{
		$out = array();
		foreach ($groups as $group)
		{
			$out[] = 'user_group=' . $group;
		}

		if ($out) {
			return ' WHERE (' . implode(' OR ', $out) . ')';
		} else {
			return ' WHERE user_id != ' . USER_GUEST_UID;
		}
	}

	function send_mail()
	{
		if (!isset($this->post['groups'])) {
			$this->post['groups'] = array();
		}

		include '../lib/mailer.php';

		$mailer = new mailer($this->sets['admin_incoming'], $this->sets['admin_outgoing'], $this->sets['forum_name'], false);
		$mailer->setSubject($this->post['subject']);

		$message  = stripslashes($this->post['message']) . "\n";
		$message .= '___________________' . "\n";
		$message .= $this->sets['forum_name'] . "\n";
		$message .= $this->sets['loc_of_board'] . "\n";

		$mailer->setMessage($message);
		$mailer->setServer($this->sets['mailserver']);

		$i = 0;
		$members = $this->db->query("SELECT user_email FROM {$this->pre}users" . $this->group_query($this->post['groups']));
		while ($sub = $this->db->nqfetch($members))
		{
			$mailer->setBcc($sub['user_email']);
			$i++;
		}

		$mailer->doSend();

		return $this->message('Mass Mail', 'Your message has been sent to ' . $i . ' members.');
	}
}
?>