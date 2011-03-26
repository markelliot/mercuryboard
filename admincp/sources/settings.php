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
 * $Id: settings.php,v 1.42 2006/07/08 20:22:42 jon Exp $
 **/

require './common.php';

class settings extends admin
{
	function execute()
	{
		$this->iterator_init('light', 'dark');

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		switch($this->get['s'])
		{
		case 'db':
			$this->set_title('Edit Connection Settings');
			$this->tree('Edit Connection Settings');

			return "
			$this->table
			<form action='$this->self?a=settings&amp;s=update&db=1' method='post'>
				<tr>
					<td colspan='2' class='header'>Edit Connection Settings</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' width='50%'><b>Database Host</b></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='db_host' value='{$this->sets['db_host']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'><b>Database Name</b></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='db_name' value='{$this->sets['db_name']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'><b>Database Username</b></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='db_user' value='{$this->sets['db_user']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'><b>Database Password</b></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='password' name='db_pass' value='{$this->sets['db_pass']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'><b>Database Port</b></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='db_port' value='{$this->sets['db_port']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'><b>Database Socket</b><br /><span class='tiny'>Leave blank for none.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='db_socket' value='{$this->sets['db_socket']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'><b>Table Prefix</b><br /><span class='tiny'>For installing multiple boards on one database.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='prefix' value='{$this->sets['prefix']}' size='40'></td>
				</tr>
				<tr>
					<td colspan='2' align='center' class='footer'><input type='submit' value='Update'></td>
				</tr>
			</form>
			$this->etable";
			break;

		case 'basic':
			$this->set_title('Edit Board Settings');
			$this->tree('Edit Board Settings');

			$this->sets['closedtext'] = $this->format($this->sets['closedtext'], FORMAT_HTMLCHARS);
			$this->sets['forum_name'] = $this->format($this->sets['forum_name'], FORMAT_HTMLCHARS);

			$this->lang->cp(); //For $this->select_timezones()

			$group = $this->db->fetch("SELECT group_name FROM {$this->pre}groups WHERE group_id=" . USER_AWAIT);

			return "
			<form action='$this->self?a=settings&amp;s=update' method='post'>
			$this->table
				<tr>
					<td colspan='2' class='header'>General Settings</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Board Enabled</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='closed' value='0'" . (!$this->sets['closed'] ? ' checked' : null) . " id='closed2'><label for='closed2'>Enabled</label><br />
						<input type='radio' name='closed' value='1'" . ($this->sets['closed']  ? ' checked' : null) . " id='closed1'><label for='closed1'>Disabled</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Disabled Notice<br /><span class='tiny'>Shown when the board is disabled</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='closedtext' value=\"{$this->sets['closedtext']}\" size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' width='50%'>Forum Name</td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='forum_name' value='{$this->sets['forum_name']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Location of Board<br /><span class='tiny'>URL</span></td>
					<td class='table" . $this->lastValue() . "' nowrap><input class='input' type='text' name='loc_of_board' value='{$this->sets['loc_of_board']}' size='40'>" . str_replace('admincp/', '', $this->self) . "</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Clickable Smilies Per Row</td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='clickable_per_row' value='{$this->sets['clickable_per_row']}' size='40' maxlength='5'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Attachments - Maximum File Size<br /><span class='tiny'>Kilobytes</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='attach_upload_size' value='" . ($this->sets['attach_upload_size'] / 1024) . "' size='40' maxlength='5'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' valign='top'>Attachments - File Extensions<br /><span class='tiny'>One per line. No periods.</span></td>
					<td class='table" . $this->lastValue() . "'><textarea class='input' name='attach_types' rows='5' cols='37'>" . implode("\r\n", $this->sets['attach_types']) . "</textarea></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Topics Per Forum Page</td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='topics_per_page' value='{$this->sets['topics_per_page']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Posts Per Topic Page</td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='posts_per_page' value='{$this->sets['posts_per_page']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Posts for a Hot Topic</td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='hot_limit' value='{$this->sets['hot_limit']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Foreign Link Target<br /><span class='tiny'>Use <i>_blank</i> for a new window.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='link_target' value='{$this->sets['link_target']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Anti-Robot Registration</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='register_image' value='1'" . ($this->sets['register_image']  ? ' checked' : null) . " id='register_image1'><label for='register_image1'>Enabled</label><br />
						<input type='radio' name='register_image' value='0'" . (!$this->sets['register_image'] ? ' checked' : null) . " id='register_image2'><label for='register_image2'>Disabled</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Template comments included<br/><span class='tiny'>Example: < !-- START:MAIN --></span></td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='html_comments' value='1'" . ($this->sets['html_comments'] ? ' checked' : null) . " id='html_comments2'><label for='html_comments2'>Enabled</label><br />
						<input type='radio' name='html_comments' value='0'" . (!$this->sets['html_comments'] ? ' checked' : null) . " id='html_comments1'><label for='html_comments1'>Disabled</label>
					</td>
				</tr>
			$this->etable
			<br /><br />

			$this->table
				<tr>
					<td colspan='2' class='header'>Member Settings</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' width='50%'>Default Skin</td>
					<td class='table" . $this->lastValue() . "'><select name='default_skin'>" . $this->select_skins($this->sets['default_skin']) . "</select></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Default Language</td>
					<td class='table" . $this->lastValue() . "'><select name='default_lang'>" . $this->select_langs($this->sets['default_lang'], '..') . "</select></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Group After Registration</td>
					<td class='table" . $this->lastValue() . "'><select name='default_group'>" . $this->select_groups($this->sets['default_group']) . "</select></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Time Zone</td>
					<td class='table" . $this->lastValue() . "'><select name='default_timezone'>" . $this->select_timezones($this->sets['default_timezone']) . "</select></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Show Avatars</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='default_view_avatars' value='1'" . ($this->sets['default_view_avatars']  ? ' checked' : null) . " id='default_view_avatars1'><label for='default_view_avatars1'>Default Yes</label><br />
						<input type='radio' name='default_view_avatars' value='0'" . (!$this->sets['default_view_avatars'] ? ' checked' : null) . " id='default_view_avatars2'><label for='default_view_avatars2'>Default No</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Show Signatures</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='default_view_sigs' value='1'" . ($this->sets['default_view_sigs']  ? ' checked' : null) . " id='default_view_sigs1'><label for='default_view_sigs1'>Default Yes</label><br />
						<input type='radio' name='default_view_sigs' value='0'" . (!$this->sets['default_view_sigs'] ? ' checked' : null) . " id='default_view_sigs2'><label for='default_view_sigs2'>Default No</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Show Emoticons</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='default_view_emots' value='1'" . ($this->sets['default_view_emots']  ? ' checked' : null) . " id='default_view_emots1'><label for='default_view_emots1'>Default Yes</label><br />
						<input type='radio' name='default_view_emots' value='0'" . (!$this->sets['default_view_emots'] ? ' checked' : null) . " id='default_view_emots2'><label for='default_view_emots2'>Default No</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Accept Personal Messages</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='default_pm' value='1'" . ($this->sets['default_pm']  ? ' checked' : null) . " id='default_pm1'><label for='default_pm1'>Default Yes</label><br />
						<input type='radio' name='default_pm' value='0'" . (!$this->sets['default_pm'] ? ' checked' : null) . " id='default_pm2'><label for='default_pm2'>Default No</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Show Email Address</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='default_email_shown' value='1'" . ($this->sets['default_email_shown']  ? ' checked' : null) . " id='default_email_shown1'><label for='default_email_shown1'>Default Yes</label><br />
						<input type='radio' name='default_email_shown' value='0'" . (!$this->sets['default_email_shown'] ? ' checked' : null) . " id='default_email_shown2'><label for='default_email_shown2'>Default No</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Polls</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='vote_after_results' value='1'" . ($this->sets['vote_after_results']  ? ' checked' : null) . " id='vote_after_results1'><label for='vote_after_results1'>Users can vote in a poll after viewing its results</label><br />
						<input type='radio' name='vote_after_results' value='0'" . (!$this->sets['vote_after_results'] ? ' checked' : null) . " id='vote_after_results2'><label for='vote_after_results2'>Users cannot vote in a poll after viewing its results</label>
					</td>
				</tr>
			$this->etable
			<br /><br />

			$this->table
				<tr>
					<td colspan='2' class='header'>E-Mail Settings</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' width='50%'>E-mail Reply-To Address<br /><span class='tiny'>Should be a real e-mail address.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='admin_incoming' value='{$this->sets['admin_incoming']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>SMTP Mail Server</td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='mailserver' value='{$this->sets['mailserver']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>E-mail From Address<br /><span class='tiny'>For display only. Should not be a real e-mail address.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='admin_outgoing' value='{$this->sets['admin_outgoing']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>New Member E-mail Validation</td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='emailactivation' value='1'" . ($this->sets['emailactivation']  ? ' checked' : null) . " id='emailactivation1'><label for='emailactivation1'>Place members in the <i>{$group['group_name']}</i> group until they verify their e-mail</label><br />
						<input type='radio' name='emailactivation' value='0'" . (!$this->sets['emailactivation'] ? ' checked' : null) . " id='emailactivation2'><label for='emailactivation2'>Do not require e-mail activation</label>
					</td>
				</tr>
			$this->etable
			<br /><br />

			$this->table
				<tr>
					<td colspan='2' class='header'>Cookie and Flood Settings</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' width='50%'>Time to Remain Logged In<br /><span class='tiny'>Seconds</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='logintime' value='{$this->sets['logintime']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Post Flood Control<br /><span class='tiny'>Seconds. Minimum time between posts.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='flood_time' value='{$this->sets['flood_time']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Personal Messenger Flood Control<br /><span class='tiny'>Seconds. Minimum time between messages.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='flood_time_pm' value='{$this->sets['flood_time_pm']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Search Flood Control<br /><span class='tiny'>Seconds. Minimum time between searches.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='flood_time_search' value='{$this->sets['flood_time_search']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Cookie Prefix</td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='cookie_prefix' value='{$this->sets['cookie_prefix']}' size='40'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Cookie Path</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='cookie_path' value='{$this->sets['cookie_path']}' size='40'></td>
				</tr>
			$this->etable
			<br /><br />

			$this->table
				<tr>
					<td colspan='2' class='header'>Avatar Settings</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' width='50%'>Flash Avatars<br /><span class='tiny'>.swf</span></td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='flash_avs' value='1'" . ($this->sets['flash_avs']  ? ' checked' : null) . " id='flash_avs1'><label for='flash_avs1'>Allow</label><br />
						<input type='radio' name='flash_avs' value='0'" . (!$this->sets['flash_avs'] ? ' checked' : null) . " id='flash_avs2'><label for='flash_avs2'>Do Not Allow</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Maximum Avatar Width<br /><span class='tiny'>Pixels</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='avatar_width' value='{$this->sets['avatar_width']}' size='40' maxlength='5'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Maximum Avatar Height<br /><span class='tiny'>Pixels</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='avatar_height' value='{$this->sets['avatar_height']}' size='40' maxlength='5'></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Uploaded Avatars - Max File Size<br /><span class='tiny'>Kilobytes</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='avatar_upload_size' value='" . ($this->sets['avatar_upload_size'] / 1024) . "' size='40' maxlength='5'></td>
				</tr>
			$this->etable
			<br /><br />

			$this->table
				<tr>
					<td colspan='2' class='header'>Server Settings</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "' width='50%'>GZIP Compression<br /><span class='tiny'>Improves speed. Disable if the board appears jumbled or blank.</span></td>
					<td class='table" . $this->lastValue() . "'>
						<input type='radio' name='output_buffer' value='1'" . ($this->sets['output_buffer']  ? ' checked' : null) . " id='output_buffer1'><label for='output_buffer1'>Enabled</label><br />
						<input type='radio' name='output_buffer' value='0'" . (!$this->sets['output_buffer'] ? ' checked' : null) . " id='output_buffer2'><label for='output_buffer2'>Disabled</label>
					</td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Server Time Zone</td>
					<td class='table" . $this->lastValue() . "'><select name='servertime'>" . $this->select_timezones($this->sets['servertime']) . "</select></td>
				</tr>
				<tr>
					<td class='label" . $this->iterate() . "'>Maximum Server Load<br /><span class='tiny'>Disables board under excessive server strain. Enter 0 to disable.</span></td>
					<td class='table" . $this->lastValue() . "'><input class='input' type='text' name='max_load' value='{$this->sets['max_load']}' size='40'></td>
				</tr>
			$this->etable
			<br />

			<center><input type='submit' value='Update'></center>
			</form>";
			break;

		case 'update':
			if (!$this->post) {
				return $this->message('Settings', 'No data was sent from POST');
				break;
			}

			$vartypes = array(
				'db_host' => 'string',
				'db_name' => 'string',
				'db_user' => 'string',
				'db_pass' => 'string',
				'db_port' => 'string',
				'db_socket' => 'string',
				'prefix' => 'string',

				'forum_name' => 'string',
				'loc_of_board' => 'string',
				'closed' => 'bool',
				'closedtext' => 'string',
				'clickable_per_row' => 'int',
				'attach_upload_size' => 'kilobytes',
				'attach_types' => 'array',
				'topics_per_page' => 'int',
				'posts_per_page' => 'int',
				'hot_limit' => 'int',
				'default_skin' => 'string',
				'default_email_shown' => 'bool',
				'default_lang' => 'string',
				'default_group' => 'int',
				'default_timezone' => 'float',
				'default_pm' => 'bool',
				'default_view_avatars' => 'bool',
				'default_view_sigs' => 'bool',
				'default_view_emots' => 'bool',
				'link_target' => 'string',
				'vote_after_results' => 'bool',
				'register_image' => 'bool',
				'admin_incoming' => 'string',
				'mailserver' => 'string',
				'admin_outgoing' => 'string',
				'emailactivation' => 'bool',
				'logintime' => 'int',
				'flood_time' => 'int',
				'flood_time_pm' => 'int',
				'flood_time_search' => 'int',
				'cookie_prefix' => 'string',
				'cookie_path' => 'string',
				'flash_avs' => 'bool',
				'avatar_width' => 'int',
				'avatar_height' => 'int',
				'avatar_upload_size' => 'kilobytes',
				'output_buffer' => 'bool',
				'servertime' => 'float',
				'max_load' => 'float',
				'html_comments' => 'bool'
			);

			foreach ($this->post as $var => $val)
			{
				if (($vartypes[$var] == 'int') || ($vartypes[$var] == 'bool')) {
					$val = intval($val);
				} elseif ($vartypes[$var] == 'float') {
					$val = (float)$val;
				} elseif ($vartypes[$var] == 'kilobytes') {
					$val = intval($val) * 1024;
				} elseif ($vartypes[$var] == 'array') {
					$val = explode("\n", $val);
					$count = count($val);

					for ($i = 0; $i < $count; $i++)
					{
						$val[$i] = trim($val[$i]);
					}
				} elseif ($vartypes[$var] == 'string') {
					$val = stripslashes($val);
				}

				$this->sets[$var] = $val;
			}

			if (isset($this->get['db'])) {
				$this->write_db_sets('../settings.php');
			} else {
				$this->db->query("UPDATE {$this->pre}users SET user_language='{$this->post['default_lang']}', user_skin='{$this->post['default_skin']}' WHERE user_id=" . USER_GUEST_UID);
				$this->write_sets();
			}

			return $this->message('Settings', 'Settings have been updated.');
			break;
		}
	}
}
?>