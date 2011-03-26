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
 * $Id: forums.php,v 1.51 2006/06/22 19:23:01 jon Exp $
 **/

require './common.php';

/**
 * Forum Controls
 *
 * @author Mark Elliot <mark.elliot@mercuryboard.com>
 * @since Beta 2.1
 **/
class forums extends admin
{
	/**
	 * Forum Controls
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string HTML
	 **/
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = '';
		}

		$forums_exist = $this->db->fetch('SELECT COUNT(forum_id) AS count FROM ' . $this->pre . 'forums');

		if (!$forums_exist['count'] && ($this->get['s'] != 'add')) {
			return $this->message('Forum Controls', 'There are no forums to manipulate.', 'Add a Forum', "$this->self?a=forums&amp;s=add");
		}

		switch ($this->get['s'])
		{
		case 'edit':
			$this->set_title('Edit a Forum');

			if (isset($this->get['id'])) {
				$f = $this->db->fetch("SELECT forum_name, forum_description, forum_parent FROM {$this->pre}forums WHERE forum_id='{$this->get['id']}'");

				$this->tree('Edit a Forum', "{$this->self}?a=forums&amp;s=edit");
				$this->tree($f['forum_name']);

				if (isset($this->post['editforum'])) {
					return $this->EditForum($this->get['id']);
				} else {
					return "<form action='$this->self?a=forums&amp;s=edit&amp;id={$this->get['id']}' method='post'>
					$this->table
					<tr>
					  <td class='header' colspan='2'>Create a Forum</td>
					</tr>
					<tr>
					  <td class='tablelight' width='30%'><b>Parent Category</b></td>
					  <td class='tabledark'>
					    <select name='parent'>
					      <option value='0'>Create a Category</option>
					      <option value='0'>----------------------------</option>" .
					      $this->select_forums($this->forum_grab(), $f['forum_parent']) . "
					    </select>
					  </td>
					</tr>
					<tr>
					  <td class='tablelight'><b>Name</b></td>
					  <td class='tabledark'><input class='input' name='name' value='{$f['forum_name']}' size='60'></td>
					</tr>
					<tr>
					  <td class='tablelight'><b>Description</b></td>
					  <td class='tabledark'><textarea class='input' name='description' rows='8' cols='60'>{$f['forum_description']}</textarea>
					  </td>
					</tr>
					<tr>
					  <td colspan='2' align='center' class='footer'><input type='submit' name='editforum' value='Submit'></td>
					</tr>
					$this->etable
					</form>";
				}
			} else {
				$this->tree('Edit a Forum');
				return $this->message('Edit a Forum', '<div style="text-align:left">' . $this->Text($this->forum_grab(), "$this->self?a=forums&amp;s=edit&amp;id=") . '</div>');
			}
			break;

		case 'delete':
			$this->set_title('Delete a Forum');

			if (isset($this->get['id'])) {
				$f = $this->db->fetch("SELECT forum_name FROM {$this->pre}forums WHERE forum_id=" . intval($this->get['id']));

				$this->tree('Delete a Forum', "{$this->self}?a=forums&amp;s=delete");
				$this->tree($f['forum_name']);

				if (isset($this->get['confirm'])) {
					return $this->DeleteForum($this->get['id']);
				} else {
					return $this->message('Delete a Forum', "Are you sure you want to delete this forum, its topics, and its posts?<br />
					This action cannot be reversed.", 'Delete the forum', "$this->self?a=forums&s=delete&id={$this->get['id']}&amp;confirm=1");
				}
			} else {
				$this->tree('Delete a Forum');
				return $this->message('Delete a Forum', '<div style="text-align:left">' . $this->Text($this->forum_grab(), "$this->self?a=forums&amp;s=delete&amp;id=") . '</div>');
			}
			break;

		case 'add':
			$this->set_title('Create a Forum');
			$this->tree('Create a Forum');

			if (isset($this->post['addforum'])) {
				return $this->message('Create a Forum', $this->AddForum());
			} else {
				$select = $this->select_forums($this->forum_grab());

				if ($forums_exist['count']) {
					$quickperms = $select;
				} else {
					$quickperms = "<option value='-3' selected='selected'>Default Permissions</option>";
				}

				return "<form action='$this->self?a=forums&amp;s=add' method='post'>
				$this->table
				<tr>
    			  <td class='header' colspan='2'>Create a Forum</td>
    			</tr>
				  <tr>
					<td class='tablelight' width='30%'><b>Parent Category</b><br />Select an existing category to create a forum.</td>
					<td class='tabledark'>
					  <select name='parent'>
						<option value='0'>Create a Category</option>
						<option value='0'>-----------------------------</option>
						$select
					  </select>
					</td>
				  </tr>
				  <tr>
					<td class='tablelight'><b>Name</b></td>
					<td class='tabledark'>
					  <input class='input' name='name' size='60'>
					</td>
				  </tr>
				  <tr>
					<td class='tablelight'><b>Description</b></td>
					<td class='tabledark'>
					  <textarea class='input' name='description' rows='8' cols='60'></textarea>
					</td>
				  </tr>
				  <tr>
					<td class='tablelight'><b>Quick Permissions</b><br />Select an existing forum to copy its permissions.</td>
					<td class='tabledark'>
					  <select name='sync'>
						$quickperms
					  </select>
					</td>
				  </tr>
				  <tr>
					<td colspan='2' align='center' class='footer'>
					  <input type='submit' name='addforum' value='Submit'>
					</td>
				  </tr>
				$this->etable
				</form>";
			}
			break;

		case 'order':
			$this->set_title('Change the Forum Ordering');
			$this->tree('Change the Forum Ordering');

			if (isset($this->post['orderforum'])) {
				return $this->message('Change the Forum Ordering', $this->OrderUpdate());
			}

			return $this->table . "
			<form action='$this->self?a=forums&amp;s=order' method='post'>
			  <tr>
    		    <td class='header'>Change the Forum Ordering</td>
			  </tr>
    		  <tr>
    		    <td bgcolor='#EEEEEE'>
    		      <table width='100%' cellpadding='5' cellspacing='0' border='0'>
    		        <tr>
    		          <td valign='top'>" . $this->InputBox($this->forum_grab()) . "
			            <center><input type='submit' name='orderforum' value='Update'></center>
			          </td>
    		        </tr>
    		      </table>
    		    </td>
    		  </tr>
			</form>" . $this->etable;
			break;

		case 'count':
			$this->set_title('Recount Topics &amp; Replies');
			$this->tree('Recount Topics &amp; Replies');
			return $this->message('Recount Topics &amp; Replies', $this->RecountForums());
			break;
		}
	}

	/**
	 * Returns true if $check is found in the children of $id
	 *
	 * @param array $array Array of forums
	 * @param int $id Used as parent
	 * @param int $check ID of parent to check in list
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return bool True if $check is found amongst the children of $id
	 **/
	function CheckParent($array, $id, $check)
	{
		$arr = $this->forum_array($array, $id);
		if ($arr) {
			foreach ($arr as $val) {
				if ($val['forum_id'] == $check) {
					return true;
				} else {
					return $this->CheckParent($array, $val['forum_id'], $check);
				}
			}
		}
		return false;
	}

	/**
	 * Creates the list of forums preceeding $id in $array
	 *
	 * @param array $array Array of forums
	 * @param int $id Used as reference point for tree construction
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string List of forums preceding $id in $array
	 **/
	function CreateTree($array, $id)
	{
		for ($i = 0; $i < count($array); $i++) {
			if ($array[$i]['forum_id'] == $id) {
				return preg_replace('/^,/', '', $array[$i]['forum_tree'] . ",$id");
			}
		}
	}

	/**
	 * Removes forum $id as well as all posts/topics for $id
	 *
	 * @param int $id ID of forum
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function DeleteForum($id)
	{
		if ($this->forum_array($this->forum_grab(), $id)) {
			return $this->message('Delete a Forum', 'You cannot orphan a forum by deleting its parent.');
		}

		$topics = null;

		$query = $this->db->query("SELECT topic_id FROM {$this->pre}topics WHERE topic_forum=$id");
		while ($data = $this->db->nqfetch($query))
		{
			$topics .= "post_topic={$data['topic_id']} OR ";
		}

		if ($topics) {
			$this->db->query("DELETE FROM {$this->pre}posts WHERE " . substr($topics, 0, -4));
			$this->db->query("DELETE FROM {$this->pre}topics WHERE topic_forum=$id");
		}

		$this->db->query("DELETE FROM {$this->pre}forums WHERE forum_id=$id");

		$perms = new permissions;
		$perms->db = &$this->db;
		$perms->pre = &$this->pre;

		// Groups
		while ($perms->get_group())
		{
			$perms->remove_z($id);
			$perms->update();
		}

		// Users
		while ($perms->get_group(true))
		{
			$perms->remove_z($id);
			$perms->update();
		}

		return $this->message('Delete a Forum', 'The forum has been deleted.');
	}

	/**
	 * Updates forum $id
	 *
	 * @param integer $id ID of forum
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function EditForum($id)
	{
		if (trim($this->post['name']) == '') {
			return $this->message('Edit a Forum', 'The forum name is empty. Please go back and enter a name.');
		}

		$forums = $this->forum_grab();
		if (($this->post['parent'] == $id) || $this->CheckParent($forums, $id, $this->post['parent'])) {
			return $this->message('Edit a Forum', 'You can\'t change a forum\'s parent in that way.');
		}

		$this->db->query("
		UPDATE {$this->pre}forums SET
		  forum_parent={$this->post['parent']},
		  forum_name='{$this->post['name']}',
		  forum_description='{$this->post['description']}'
		WHERE
		  forum_id=$id");
		
		$this->updateForumTrees();

		return $this->message('Edit a Forum', 'The forum was edited successfully.');
	}

	/**
	 * Adds a forum with parameters from $this->post
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function AddForum()
	{
		if (trim($this->post['name']) == '') {
			return "The forum name is empty. (Please press back and enter a name)";
		}

		$forums = $this->forum_grab();

		$forums_arr = $this->forum_array($forums, $this->post['parent']);
		$position   = $forums_arr ? count($forums_arr) : 0;

		$this->db->query("INSERT INTO {$this->pre}forums
		(forum_tree, forum_parent, forum_name, forum_description, forum_position) VALUES
		('" . $this->CreateTree($forums, $this->post['parent']) . "', '{$this->post['parent']}', '{$this->post['name']}', '{$this->post['description']}', '$position')");

		$id = $this->db->insert_id();

		$perms = new permissions;
		$perms->db = &$this->db;
		$perms->pre = &$this->pre;

		while ($perms->get_group())
		{
			// Full permissions (note: the banned group is still false)
			if ($this->post['sync'] == -2) {
				$perms->add_z($id, ($perms->group != USER_BANNED));

			// Default permissions (only works if there are no forums already created)
			} elseif ($this->post['sync'] == -3) {
				$perms->add_z($id);

			// No permissions
			} elseif ($this->post['sync'] == -1) {
				$perms->add_z($id, false);

			// Copy another forum
			} else {
				$perms->add_z($id, false);

				foreach ($perms->standard as $perm => $false)
				{
					if (!isset($perms->globals[$perm])) {
						$perms->set_xyz($perm, $id, $perms->auth($perm, $this->post['sync']));
					}
				}
			}

			$perms->update();
		}

		return 'Forum added!';
	}

	/**
	 * Updates the position of all forums based on $this->post data
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function OrderUpdate()
	{
		$q = $this->db->query("SELECT forum_id FROM {$this->pre}forums ORDER BY forum_id ASC");
		while ($f = $this->db->nqfetch($q))
		{
			$this->db->query("UPDATE {$this->pre}forums SET forum_position='{$this->post["_{$f['forum_id']}"]}' WHERE forum_id='{$f['forum_id']}'");
		}
		return 'Update complete!';
	}

	/**
	 * Used to update topic and reply counts for every forum.
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function RecountForums()
	{
		$q = $this->db->query("SELECT forum_id FROM {$this->pre}forums ORDER BY forum_id ASC");
		$i = 0;
		$this->sets['posts'] = 0;
		$this->sets['topics'] = 0;

		while ($f = $this->db->nqfetch($q))
		{
			$tc = $this->db->fetch('SELECT COUNT(topic_id) as tc FROM ' . $this->pre . 'topics WHERE NOT(topic_modes & ' . TOPIC_MOVED . ') AND topic_forum=' . $f['forum_id']);
			$rc = $this->db->fetch('SELECT COUNT(p.post_id)as rc, max(post_id) as last FROM ' . $this->pre . 'posts p, ' . $this->pre . 'topics t WHERE p.post_topic=t.topic_id AND topic_forum=' . $f['forum_id']);

			$this->db->query("UPDATE {$this->pre}forums SET forum_replies='" . ($rc['rc'] - $tc['tc']) . "', forum_topics='{$tc['tc']}', forum_lastpost='{$rc['last']}' WHERE forum_id='{$f['forum_id']}'");

			$this->sets['posts'] += $rc['rc'];
			$this->sets['topics'] += $tc['tc'];
			$i++;
		}

		$this->write_sets();
		return "Recounted $i forums!";
	}
	/**
     * Update Forum Trees
     *
     * @author Geoffrey Dunn <geoff@warmage.com>
     * @since 1.1.5
     **/
    function updateForumTrees()
    {
        $forums = array();
        $forumTree = array();
        
        // Build tree structure of 'id' => 'parent' structure
        $q = $this->db->query("SELECT forum_id, forum_parent FROM {$this->pre}forums ORDER BY forum_parent");
        
        while ($f = $this->db->nqfetch($q))
        {
            if ($f['forum_parent']) {
                $forums[$f['forum_id']] = $f['forum_parent'];
            }
        }
        
        // Run through group
        $q = $this->db->query("SELECT forum_parent FROM {$this->pre}forums GROUP BY forum_parent");

        while ($f = $this->db->nqfetch($q))
        {
            if ($f['forum_parent']) {
                $tree = $this->buildTree($forums, $f['forum_parent']);
            } else {
                $tree = '';
            }
        
            $this->db->query("UPDATE {$this->pre}forums SET forum_tree='$tree' WHERE forum_parent={$f['forum_parent']}");
        }
    }
    
    function buildTree($forumsArray, $parent)
    {
        $tree = '';
        if (isset($forumsArray[$parent]) && $forumsArray[$parent]) {
            $tree = $this->buildTree($forumsArray, $forumsArray[$parent]);
            $tree .= ',';
        }
        $tree .= $parent;
        return $tree;
    }
}
?>