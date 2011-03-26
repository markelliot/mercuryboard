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
 * $Id: templates.php,v 1.54 2006/07/29 12:23:02 jon Exp $
 **/

require './common.php';

class templates extends admin
{
	function execute()
	{
		$sections = array(
			'board'     => 'Board Index',
			'active'    => 'Active Users Detail',
			'email'     => 'Email A Member',
			'forum'     => 'Forums',
			'login'     => 'Logging In/Out',
			'Main'      => '<b>Universal</b>',
			'members'   => 'Member List',
			'help'      => 'Help',
			'topic'     => 'Topics',
			'profile'   => 'Profile Viewing',
			'cp'        => 'Control Panel',
			'register'  => 'Registration',
			'mod'       => 'Moderator Controls',
			'new_posts' => 'New Posts',
			'poll'      => 'Polls',
			'post'      => 'Posting',
			'printer'   => 'Printer-Friendly Topics',
			'pm'        => 'Messenger & Buddies',
			'search'    => 'Search',
		);

		if (!isset($this->get['skin'])) {
			$this->get['skin'] = $this->skin;
		}

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		$skins = array();

		$query = $this->db->query("SELECT * FROM {$this->pre}skins");
		while ($s = $this->db->nqfetch($query))
		{
			$skins[$s['skin_dir']] = $s['skin_name'];
		}

		if (!isset($skins[$this->get['skin']])) {
			$this->get['skin'] = $this->skin;
		}

		switch($this->get['s'])
		{
		case 'edit':
			$this->tree('Edit HTML Templates', "{$this->self}?a=templates&amp;s=html");
			return $this->edit_section($sections, $skins, $this->get['skin']);
			break;

		case 'skin':
			$this->set_title('Create a Skin');
			$this->tree('Create a Skin');
			return $this->add_skin();
			break;

		case 'editskin':
			$this->set_title('Edit a Skin');
			$this->tree('Edit a Skin');
			return $this->edit_skin();
			break;

		case 'load':
			$this->set_title('Install a Skin');
			$this->tree('Install a Skin');
			return $this->install_skin();
			break;

		case 'export':
			$this->set_title('Export a Skin');
			$this->tree('Export a Skin');
			return $this->export_skin();
			break;

		default:
			$this->set_title('Edit HTML Templates');
			$this->tree('Edit HTML Templates');
			return $this->template_list($sections, $skins, $this->get['skin']);
		}
	}

	function install_skin()
	{
		if (!isset($this->post['submit']) && !isset($this->get['temp'])) {
			$skin_box = '';

			$dp = opendir('../');
			while (($file = readdir($dp)) !== false)
			{
				$ext = strtolower(substr($file, -4));

				if ($ext == '.mbs') {
					$skin_box .= "<option value='../$file'>" . substr($file, 0, -4) . "</option>\n";
				}
			}
			closedir($dp);

			return $this->message('Install a Skin', "
			<form action='$this->self?a=templates&amp;s=load' method='post'>
				The following skins were found in the MercuryBoard directory:<br /><br />
				<select name='install'>
					$skin_box
				</select>
				<input type='submit' name='submit' value='Install Skin'>
			</form>");
		} else {
			if (!isset($this->get['temp'])) {
				include '../lib/zip.php';

				$dir = md5(microtime());

				$zip = new zip;
				$zip->extract($this->post['install'], "../skins/$dir");

				include "../skins/$dir/info.php";

				if (is_dir("../skins/{$skin['dir']}")) {
					return $this->message('Install a Skin', "It appears that the skin <b>{$skin['name']}</b> is already installed.", 'Overwrite', "$this->self?a=templates&amp;s=load&amp;s=load&amp;temp=$dir");
				}

				$this->get['temp'] = $dir;
			}

			$dir = $this->get['temp'];

			include "../skins/$dir/info.php";

			if (is_dir("../skins/{$skin['dir']}")) {
				$this->remove_dir("../skins/{$skin['dir']}");
			}

			rename("../skins/$dir", "../skins/{$skin['dir']}");

			$dir = $skin['dir'];

			$queries = array();
			$pre = $this->pre;

			include "../skins/$dir/templates.php";

			$this->db->query("DELETE FROM {$this->pre}skins WHERE skin_dir='$dir'");
			$this->db->query("INSERT INTO {$this->pre}skins (skin_name, skin_dir) VALUES ('{$skin['name']}', '$dir')");
			$this->db->query("DELETE FROM {$this->pre}templates WHERE template_skin='$dir'");

			$this->execute_queries($queries);

			return $this->message('Install a Skin', 'The skin has been installed successfully.');
		}
	}

	function export_skin()
	{
		if (!isset($this->post['skin'])) {
			$skin_box = $this->select_skins($this->skin);

			return $this->message('Export a skin', "
			Select a skin to export:<br /><br />
			<form action='$this->self?a=templates&amp;s=export' method='post'>
				<select name='skin'>
					$skin_box
				</select>
				<input type='submit' value='Export Skin'>
			</form>");
		} else {
			$templates = $this->dump_database(array('templates' => "template_skin='{$this->post['skin']}'"));

			$skin = $this->db->fetch("SELECT * FROM {$this->pre}skins WHERE skin_dir='{$this->post['skin']}'");
			$info =
"<?php
\$skin['name'] = \"" . addslashes($skin['skin_name']) . "\";
\$skin['dir'] = \"" . addslashes($skin['skin_dir']) . "\";
?>";

			if (file_exists("../skins/{$this->post['skin']}/info.php")) {
				unlink("../skins/{$this->post['skin']}/info.php");
			}

			if (file_exists("../skins/{$this->post['skin']}/templates.php")) {
				unlink("../skins/{$this->post['skin']}/templates.php");
			}

			include '../lib/zip.php';

			$this->chmod('..', 0777);

			$zip = new zip;
			$zip->add("../skins/{$this->post['skin']}");
			$zip->add_file($info, 'info.php');
			$zip->add_file($templates, 'templates.php');
			$zip->write_zip("../{$this->post['skin']}.mbs");

			return $this->message('Export a Skin', 'Skin exported to the main MercuryBoard directory.', "{$this->post['skin']}.mbs", "../{$this->post['skin']}.mbs");
		}
	}

	function edit_skin()
	{
		if (!isset($this->post['skin'])) {
			$skin_box = $this->select_skins($this->skin);

			return $this->message('Select a Skin', "
			<form action='$this->self?a=templates&amp;s=editskin' method='post'>
				Select a skin to edit:<br /><br />
				<select name='skin'>
					$skin_box
				</select>
				<input type='submit' value='Edit Skin'>
			</form>");
		} else {
			if (!isset($this->post['submit'])) {
				$skin = $this->db->fetch("SELECT skin_name, skin_dir FROM {$this->pre}skins WHERE skin_dir='{$this->post['skin']}'");

				return "
				<form action='$this->self?a=templates&amp;s=editskin' method='post'>
				<input type='hidden' name='skin' value='{$this->post['skin']}'>
				$this->table
					<tr>
						<td class='header' colspan='2'>Edit a Skin</td>
					</tr>
					<tr>
						<td class='tablelight' width='30%'>Display Name</td>
						<td class='tabledark'><input type='text' name='skin_name' value='{$skin['skin_name']}' size='50' class='input'></td>
					</tr>
					<tr>
						<td class='tablelight'>Directory</td>
						<td class='tabledark'><input type='text' name='skin_dir' value='{$skin['skin_dir']}' size='50' class='input'></td>
					</tr>
					<tr>
						<td class='tablelight'>Delete</td>
						<td class='tabledark'><input type='checkbox' name='deleteskin'></td>
					</tr>
					<tr>
						<td class='footer' colspan='2' align='center'><input type='submit' name='submit' value='Edit Skin'></td>
					</tr>
				$this->etable
				</form>";
			} else {
				if (isset($this->post['deleteskin'])) {
					$existing = $this->db->fetch("SELECT skin_dir FROM {$this->pre}skins WHERE skin_dir!='{$this->post['skin']}' LIMIT 1");
					if (!isset($existing['skin_dir'])) {
						return $this->message('Edit a Skin', 'There is only one skin installed. You may not delete this skin.');
					}

					$this->db->query("DELETE FROM {$this->pre}skins WHERE skin_dir='{$this->post['skin']}'");
					$this->db->query("DELETE FROM {$this->pre}templates WHERE template_skin='{$this->post['skin']}'");
					$this->db->query("UPDATE {$this->pre}users SET user_skin='{$existing['skin_dir']}' WHERE user_skin='{$this->post['skin']}'");

					$this->remove_dir("../skins/{$this->post['skin']}");

					return $this->message('Edit a Skin', 'Skin successfully deleted.');
				} else {
					if ((trim($this->post['skin_name']) == '') || (trim($this->post['skin_dir']) == '')) {
						return $this->message('user_skins', 'You must enter a skin name and directory name.');
					}

					$dup = false;

					// If we're changing the skin directory
					if ($this->post['skin_dir'] != $this->post['skin']) {
						$this->post['skin_dir'] = preg_replace('/[^a-zA-Z0-9]/', '', $this->post['skin_dir']);

						while (file_exists("../skins/{$this->post['skin_dir']}"))
						{
							$dup = true;
							$this->post['skin_dir'] .= '1';
						}

						$this->db->query("UPDATE {$this->pre}templates SET template_skin='{$this->post['skin_dir']}' WHERE template_skin='{$this->post['skin']}'");
						$this->db->query("UPDATE {$this->pre}users SET user_skin='{$this->post['skin_dir']}' WHERE user_skin='{$this->post['skin']}'");

						rename("../skins/{$this->post['skin']}", "../skins/{$this->post['skin_dir']}");
					}

					$this->db->query("UPDATE {$this->pre}skins SET skin_name='{$this->post['skin_name']}', skin_dir='{$this->post['skin_dir']}' WHERE skin_dir='{$this->post['skin']}'");

					if (!$dup) {
						return $this->message('Edit a Skin', 'Skin successfully edited.');
					} else {
						return $this->message('Edit a Skin', "A skin with a duplicate directory name was found. The skin's directory was changed to <b>{$this->post['skin_dir']}</b>.");
					}
				}
			}
		}
	}

	function remove_dir($dir)
	{
		$dp = opendir($dir);

		while (($file = readdir($dp)) !== false)
		{
			if (($file == '.') || ($file == '..')) {
				continue;
			}

			if (is_dir("$dir/$file")) {
				$this->remove_dir("$dir/$file");
			} else {
				unlink("$dir/$file");
			}
		}

		closedir($dp);
		rmdir($dir);
	}

	function template_list($sections, $skins, $template)
	{
		$skin_box = $this->select_skins($template);

		$out = "
		$this->table
			<tr>
				<td class='header'>Select a template section to edit</td>
			</tr>
			<tr>
				<td class='tabledark'>
					<span class='med'>1. Choose a skin:</span><br /><br />
					<form action='$this->self' method='get'>
						<input type='hidden' name='a' value='templates'>
						<input type='hidden' name='s' value='html'>
						<select name='skin'>
							$skin_box
						</select>
						<input type='submit' value='Edit Skin'>
					</form>
				</td>
			</tr>
			<tr>
				<td class='tablelight'>
				<span class='med'>2. Choose a template set:</span><br />
				<ul style='line-height:150%'>";

		$query = $this->db->query("SELECT DISTINCT(template_set) as temp_set FROM {$this->pre}templates WHERE template_skin='$template'");
		while ($data = $this->db->nqfetch($query))
		{
			if (!isset($sections[$data['temp_set']])) {
				$sections[$data['temp_set']] = $data['temp_set'];
			}

			$out .= "\n<li><a href='$this->self?a=templates&amp;s=edit&amp;section={$data['temp_set']}&amp;skin=$template'>{$sections[$data['temp_set']]}</a></li>";
		}

		return $out . '
			</ul>
			</td>
		</tr>' . $this->etable;
	}

	function edit_section($sections, $skins, $template)
	{
		$title = isset($sections[$this->get['section']]) ? $sections[$this->get['section']] : $this->get['section'];
		$this->tree($title);

		if (!isset($this->post['submitTemps'])) {
			$query = $this->db->query("SELECT template_displayname, template_description, template_name, template_html FROM {$this->pre}templates WHERE template_skin='$template' AND template_set='{$this->get['section']}' ORDER BY template_position ASC");

			$out = "
			<script user_language='javascript'>
			<!--
			changed = false;

			function savechanges()
			{
				if (changed) {
					var answer = confirm('You have made changes to the templates. Do you want to save your changes?');

					if (answer) {
						document.templates.submit();
						return false;
					}
				}
			}

			//window.onunload = savechanges;
			//-->
			</script>

			$this->table
			<form name='templates' action='$this->self?a=templates&amp;s=edit&amp;section={$this->get['section']}&amp;skin=$template' method='post'>
				<tr>
					<td class='header'>Editing Templates</td>
				</tr>
				<tr>
					<td class='tabledark'>
						<b>About Variables</b><br />
						Variables are pieces of text that are replaced with dynamic data. Variables always begin with a dollar sign, and are sometimes enclosed in {braces}.<br /><br />
						<b>Universal Variables</b><br />
						Some variables can be used in any template, while others can only be used in a single
						template. Properties of the object \$this can be used anywhere.<br /><br /><br />
					</td>
				</tr>";

			$this->iterator_init('tablelight', 'tabledark');

			while ($data = $this->db->nqfetch($query))
			{
				/*
				$data['template_html'] = preg_replace('/\{\$this->lang->(.+?)\}/', '{lang.\\1}', $data['template_html']);
				$data['template_html'] = preg_replace('/\{\$this->(.+?)\}/', '{this.\\1}', $data['template_html']);
				$data['template_html'] = preg_replace('/\{\$(.+?)\[\'(.+?)\'\]\}/', '{\\1.\\2}', $data['template_html']);
				$data['template_html'] = preg_replace('/\{\$(.+?)\}/', '{local.\\1}', $data['template_html']);
				*/

				$data['template_html'] = $this->format($data['template_html'], FORMAT_HTMLCHARS);

				$out .= "
				<tr>
					<td class='" . $this->iterate() . "'>
						<span style='font-weight:bold; font-size:14px'>{$data['template_displayname']}</span><br /><br />
						{$data['template_name']}
						<input type='submit' name='submitTemps' value='Edit Templates' style='float:right'><br />
						{$data['template_description']}<br /><br />
						<textarea onchange=\"this.style.backgroundColor='#ffffee'; changed=true\" name='code[{$data['template_name']}]' style='background-color:#FFFFFF; font-family: courier new, courier, monospaced, serif; font-size:12px; width:100%' rows='18' wrap='off'>{$data['template_html']}</textarea>
					</td>
				</tr>";
			}

			$out .= "
				<tr><td align='center' class='footer'></td></tr>
			</form>
			$this->etable";
		} else {
			$evil = 0;

			foreach ($this->post['code'] as $var => $val)
			{
				if ($var == 'Copyright') {
					if (!preg_match('/MercuryBoard/i', $val)) {
						$evil = 1;
						continue;
					}
				}

				//$val = preg_replace('/\{lang-(.+?)\}/', '{$this->lang->\\1}', $val);

				$this->db->query("UPDATE {$this->pre}templates SET template_html='$val' WHERE template_skin='$template' AND template_name='$var' AND template_set='{$this->get['section']}'");
			}

			if (!$evil) {
				$out = $this->message('Templates', 'Template updated.', 'Continue', "$this->self?a=templates&amp;skin=$template");
			} else {
				$out = $this->message('Templates', 'Please do not remove our only credit!');
			}
		}
		return $out;
	}

	function add_skin()
	{
		if (!isset($this->post['submit'])) {
			$skin_box = $this->select_skins(0);

			return $this->message('Create Skin', "
			<form action='$this->self?a=templates&amp;s=skin' method='post'>
				Create a new skin named <input type='text' name='new_name' size='24' maxlength='32' class='input'> based on
				<select name='new_based'>
					$skin_box
				</select>.<br /><br />
				<input type='submit' name='submit' value='Create Skin'>
			</form>");
		} else {
			if (trim($this->post['new_name']) == '') {
				return $this->message('user_skins', 'You must enter a skin name.');
			}

			$name = preg_replace('/[^a-zA-Z0-9]/', '', $this->post['new_name']);
			while (file_exists("../skins/$name"))
			{
				$name .= '1';
			}

			if (!$this->dir_copy("../skins/{$this->post['new_based']}/", "../skins/$name/")) {
				return $this->message('Skins', 'A new directory could not be created for the skin. Try to CHMOD the skins directory to 755.');
			}

			$this->db->query("INSERT INTO {$this->pre}skins (skin_name, skin_dir) VALUES ('" . addslashes($this->post['new_name']) . "', '$name')");

			$query = $this->db->query("SELECT * FROM {$this->pre}templates WHERE template_skin='{$this->post['new_based']}'");
			while ($r = $this->db->nqfetch($query))
			{
				$r['template_skin'] = addslashes($r['template_skin']);
				$r['template_set'] = addslashes($r['template_set']);
				$r['template_name'] = addslashes($r['template_name']);
				$r['template_html'] = addslashes($r['template_html']);
				$r['template_displayname'] = addslashes($r['template_displayname']);
				$r['template_description'] = addslashes($r['template_description']);
				$r['template_position'] = addslashes($r['template_position']);
				$this->db->query("INSERT INTO {$this->pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('$name', '{$r['template_set']}', '{$r['template_name']}', '{$r['template_html']}', '{$r['template_displayname']}', '{$r['template_description']}', '{$r['template_position']}')");
			}

			return $this->message('Skins', 'Skin created.', 'Continue', "$this->self?a=templates&amp;s=html&amp;skin=$name");
		}
	}
}
?>