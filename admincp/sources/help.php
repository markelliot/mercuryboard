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
 * $Id: help.php,v 1.4 2005/03/25 15:47:37 jason Exp $
 **/

require './common.php';

/**
 * Help Article Control
 *
 * @author Jared Kuolt <icenine@networkstoday.com>
 * @since 1.1.0
 **/

class help extends admin
{
	function execute()
	{
		$this->set_title('Help Article Control');
		$this->tree('Help Article Control');

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		$ret = null;

		if ($this->get['s'] == 'new') {
			$link = 'a=help&amp;s=new';
		} elseif ($this->get['s'] == 'edit') {
			$link = 'a=help&amp;s=edit';
		} elseif ($this->get['s'] == 'delete') {
			$link = 'a=help&amp;s=delete';
		} else {
			$link = 'a=help';
		}

		switch($this->get['s'])
		{
		case 'new':
			if (!isset($this->post['submit'])) {
				return $this->message('Add a Help Article',"
				<form action='$this->self?a=help&amp;s=new&amp;' method='post'>
				<b>Title:</b><br />
				<input name='title' type='text' size='40' class='input'><br /><br />
				<b>Article content</b>
				<textarea name='article' cols='100' rows='15' id='article' class='input'></textarea><br /><br />
				<input type='submit' name='submit' value='Insert Article'>
				</form>");
			} else {
				if (trim($this->post['title']) == '') {
					return $this->message('Add a Help Article', 'You can\'t create a help article without a title.');
				}

				$query = $this->db->query("INSERT INTO {$this->pre}help VALUES ('', '{$this->post['title']}', '{$this->post['article']}')");

				return $this->message('Add a Help Article', 'Article inserted into the database.');
			}
			break;

		case 'edit':
			if (!isset($this->get['id'])) {
				$query = $this->db->query("SELECT help_id, help_title FROM {$this->pre}help ORDER by help_title DESC");

				if (!$this->db->num_rows($query)) {
					return $this->message('Edit a Help Article', 'No help articles were found in the database.');
				} else {
					while ($file = $this->db->nqfetch($query))
					{
						$title = $this->format($file['help_title'], FORMAT_HTMLCHARS);
						$ret .= "<a href='$this->self?$link&amp;id=" . $file['help_id'] . "'>{$title}</a><br />";
					}

					return $this->message('Edit a Help Article', "Please select a help article to edit:<br /><br />$ret");
				}
			} else {
				if (!isset($this->post['submit'])) {
					$id = intval($this->get['id']);

					$query = $this->db->query("SELECT * FROM {$this->pre}help WHERE help_id=$id");

					if (!$this->db->num_rows($query)) {
						return $this->message('Edit a Help Article', 'That help article does not exist.');
					} else {
						$content = $this->db->nqfetch($query);

						$title   = $this->format($content['help_title'], FORMAT_HTMLCHARS);
						$article = $this->format($content['help_article'], FORMAT_HTMLCHARS);

						return $this->message('Edit a Help Article', "
						<form action='{$this->self}?a=help&amp;s=edit&amp;id={$id}' method='post'>
						<b>Title:</b><br />
						<input name='title' type='text' value='{$title}' size='40' class='input'><br /><br />
						<b>Article content:</b><br />
						<textarea name='article' cols='100' rows='15' id='article' class='input'>{$article}</textarea>
						<input type='submit' name='submit' value='Edit Article'></b>
						</form>");
					}
				} else {
					$id = intval($this->get['id']);

					if (trim($this->post['title']) == '') {
						return $this->message('Add a Help Article', 'You can\'t create a help article without a title.');
					}

					$query = $this->db->query("UPDATE {$this->pre}help SET help_title='{$this->post['title']}', help_article='{$this->post['article']}' WHERE help_id=$id");

					return $this->message('Edit a Help Article', 'Help article updated.');
				}
			}
			break;

		case 'delete':
			if (!isset($this->post['submit'])) {
				if(!isset($this->get['id'])){
					$query = $this->db->query("SELECT help_id, help_title FROM {$this->pre}help ORDER by help_title DESC");

					if (!$this->db->num_rows($query)) {
						return $this->message('Delete a Help Article', 'No help articles were found in the database.');
					} else {
						while ($file = $this->db->nqfetch($query))
						{
							$ret .= "<a href='$this->self?$link&amp;id=" . $file['help_id'] . "'>{$file['help_title']}</a><br />";
						}

						return $this->message('Delete a Help Article', "Please select a help article to delete:<br /><br />$ret");
					}
				} else {
					$query   = $this->db->query("SELECT help_id, help_title FROM {$this->pre}help WHERE help_id=" . intval($this->get['id']));
					$content = $this->db->nqfetch($query);

					$ret = "Are you sure you want to delete <b>{$content['help_title']}</b>?<br /><br />
							<form action='{$this->self}?a=help&amp;s=delete&amp;id={$this->get['id']}' method='post'>
							<input type='submit' name='submit' value='Delete Article'></b>
							</form>";

					return $this->message('Delete a Help Article', $ret);
				}

			} else {
				$query = $this->db->query("DELETE FROM {$this->pre}help WHERE help_id=" . intval($this->get['id']));
				return $this->message('Delete a Help Article', 'Article successfully deleted.');
			}
			break;
		}
	}
}
