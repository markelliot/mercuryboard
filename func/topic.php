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
 * $Id: topic.php,v 1.79 2006/07/29 12:32:08 jon Exp $
 **/

/**
 * Views a topic
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class topic extends mercuryboard
{
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = '';
		}

		switch($this->get['s']) {
		case 'attach':
			return $this->get_attachment();
			break;

		default:
			return $this->get_topic();
		}
	}

	function get_topic()
	{
		$this->get['min'] = isset($this->get['min']) ? intval($this->get['min']) : 0;
		$this->get['num'] = isset($this->get['num']) ? intval($this->get['num']) : $this->sets['posts_per_page'];
		$this->get['t']   = isset($this->get['t'])   ? intval($this->get['t'])   : 0;

		$topic = $this->db->fetch('
		SELECT
		    t.topic_title, t.topic_description, t.topic_modes, t.topic_starter, t.topic_forum, t.topic_replies, t.topic_poll_options, f.forum_name
		FROM
		    ' . $this->pre . 'topics t, ' . $this->pre . 'forums f
		WHERE
		    t.topic_id=' . $this->get['t'] . ' AND
		    f.forum_id=t.topic_forum');

		if (!$topic) {
			$this->set_title($this->lang->topic_not_found);
			return $this->message($this->lang->topic_error, $this->lang->topic_not_found_message);
		}

		if (!$this->perms->auth('topic_view', $topic['topic_forum'])) {
			return $this->message(
				$this->lang->topic_error,
				($this->perms->is_guest) ? sprintf($this->lang->topic_perm_view_guest, $this->self) : $this->lang->topic_perm_view
			);
		}

		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_views=topic_views+1 WHERE topic_id=' . $this->get['t']);

		$topic['topic_title'] = $this->format($topic['topic_title'], FORMAT_CENSOR);
		$title_html = $this->format($topic['topic_title'], FORMAT_HTMLCHARS);

		if (strlen($topic['topic_title']) > 30) {
			$title_short = substr($topic['topic_title'], 0, 29) . '...';
		} else {
			$title_short = $topic['topic_title'];
		}
		$title_short = $this->format($title_short, FORMAT_HTMLCHARS);

		$this->set_title($this->lang->topic_viewing . ': ' . $title_html);

		$this->tree_forums($topic['topic_forum'], true);
		$this->tree($title_short);

		if (trim($topic['topic_description']) != '') {
			$topic['topic_description'] = ', ' . $this->format($topic['topic_description'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
		} else {
			$topic['topic_description'] = null;
		}

		$user_started_topic = ($this->user['user_id'] == $topic['topic_starter']);
		$opts = array();

		if ($topic['topic_modes'] & TOPIC_LOCKED) {
			$replylink = '<img src="./skins/' . $this->skin . '/images/noreply.gif" alt="' . $this->lang->topic_locked . '" />';

			if ($this->perms->auth('topic_unlock', $topic['topic_forum']) || ($this->perms->auth('topic_unlock_own', $topic['topic_forum']) && $user_started_topic)) {
				$opts[] = '<a href="' . $this->self . '?a=mod&amp;s=lock&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_unlock . '</a>';
			}
		} else {
			$replylink = '<a href="' . $this->self . '?a=post&amp;s=reply&amp;t=' . $this->get['t'] . '"><img src="./skins/' . $this->skin . '/images/addreply.gif" alt="' . $this->lang->topic_reply . '" /></a>';

			if ($this->perms->auth('topic_lock', $topic['topic_forum']) || ($this->perms->auth('topic_lock_own', $topic['topic_forum']) && $user_started_topic)) {
				$opts[] = '<a href="' . $this->self . '?a=mod&amp;s=lock&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_lock . '</a>';
			}
		}

		if ($topic['topic_modes'] & TOPIC_PINNED) {
			if ($this->perms->auth('topic_unpin', $topic['topic_forum']) || ($this->perms->auth('topic_unpin_own', $topic['topic_forum']) && $user_started_topic)) {
				$opts[] = '<a href="' . $this->self . '?a=mod&amp;s=pin&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_unpin . '</a>';
			}
		} else {
			if ($this->perms->auth('topic_pin', $topic['topic_forum']) || ($this->perms->auth('topic_pin_own', $topic['topic_forum']) && $user_started_topic)) {
				$opts[] = '<a href="' . $this->self . '?a=mod&amp;s=pin&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_pin . '</a>';
			}
		}

		if ($this->perms->auth('topic_delete', $topic['topic_forum']) || ($this->perms->auth('topic_delete_own', $topic['topic_forum']) && $user_started_topic)) {
			$opts[] = '<a href="' . $this->self . '?a=mod&amp;s=del_topic&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_delete . '</a>';
		}

		if ($this->perms->auth('topic_move', $topic['topic_forum']) || ($this->perms->auth('topic_move_own', $topic['topic_forum']) && $user_started_topic)) {
			$opts[] = '<a href="' . $this->self . '?a=mod&amp;s=move&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_move . '</a>';
		}

		if ($this->perms->auth('topic_edit', $topic['topic_forum']) || ($this->perms->auth('topic_edit_own', $topic['topic_forum']) && $user_started_topic)) {
			$opts[] = '<a href="' . $this->self . '?a=mod&amp;s=edit_topic&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_edit . '</a>';
		}

		$splitmode = false;

		if ($this->perms->auth('topic_split', $topic['topic_forum']) || ($this->perms->auth('topic_split_own', $topic['topic_forum']) && $user_started_topic)) {
			if ($this->get['s'] == 'split') {
				$this->add_templates('mod');
				$splitmode = true;
				$this->get['min'] = 0;
				$this->get['num'] = $topic['topic_replies'] + 1;
			}

			$opts[] = '<a href="' . $this->self . '?a=topic&amp;s=split&amp;t=' . $this->get['t'] . '">' . $this->lang->topic_split . '</a>';
		}

		if (!$opts) {
			$mod_opts = '&nbsp;';
		} else {
			$mod_opts = $this->lang->topic_options . ': [ ' . implode(' | ', $opts) . ' ]';
		}

		if ($topic['topic_modes'] & TOPIC_POLL) {
			$this->add_templates('poll');
			$PollDisplay = $this->get_poll($this->get['t'], $topic['topic_forum'], $title_html, $topic['topic_modes'], $topic['topic_poll_options']);
		} else {
			$PollDisplay = null;
		}

		$posts = null;

		$query = $this->db->query("
		SELECT
		  a.attach_id, a.attach_name, a.attach_downloads, a.attach_size,
		  p.post_id
		FROM
		  ({$this->pre}posts p, {$this->pre}attach a)
		WHERE
		  p.post_topic = {$this->get['t']} AND
		  a.attach_post = p.post_id");

		$attachments = array();

		while ($attach = $this->db->nqfetch($query))
		{
			if (!isset($attachments[$attach['post_id']])) {
				$attachments[$attach['post_id']] = array();
			}

			$attachments[$attach['post_id']][] = $attach;
		}

		$query = $this->db->query("
		SELECT
		  p.post_emoticons, p.post_mbcode, p.post_time, p.post_text, p.post_author, p.post_id, p.post_ip, p.post_icon, p.post_edited_by, p.post_edited_time,
		  m.user_joined, m.user_signature, m.user_posts, m.user_id, m.user_title, m.user_group, m.user_avatar, m.user_name, m.user_email, m.user_aim,
		  m.user_icq, m.user_yahoo, m.user_homepage, m.user_avatar_type, m.user_avatar_width, m.user_avatar_height, m.user_msn, m.user_pm, m.user_email_show, m.user_email_form,
		  t.membertitle_icon,
		  g.group_name,
		  a.active_time
		FROM
		  ({$this->pre}posts p, {$this->pre}users m, {$this->pre}groups g)
		LEFT JOIN {$this->pre}active a ON a.active_id=m.user_id
		LEFT JOIN {$this->pre}membertitles t ON t.membertitle_id=m.user_level
		WHERE
		  p.post_topic = {$this->get['t']} AND
		  p.post_author = m.user_id AND
		  m.user_group = g.group_id
		GROUP BY p.post_id
		ORDER BY
		  p.post_time
		LIMIT {$this->get['min']}, {$this->get['num']}");

		$i = 0;
		$split = '';
		$oldtime = $this->time - 900;

		while ($post = $this->db->nqfetch($query))
		{
			if ($i % 2 == 0) {
				$class = 'tablelight';
			} else {
				$class = 'tabledark';
			}

			$post['post_time']   = $this->mbdate(DATE_LONG, $post['post_time']);
			$post['user_joined'] = $this->mbdate(DATE_ONLY_LONG, $post['user_joined']);

			$params = FORMAT_HTMLCHARS | FORMAT_BREAKS | FORMAT_CENSOR;

			if ($post['post_mbcode']) {
				$params |= FORMAT_MBCODE;
			}

			if ($post['post_emoticons']) {
				$params |= FORMAT_EMOTICONS;
			}

			$post['post_text'] = $this->format($post['post_text'], $params);

			if ($splitmode && $i) {
				$split = eval($this->template('MOD_SPLIT_SELECT'));
			}

			if (isset($this->get['hl'])) {
				$post['post_text'] = str_replace($this->get['hl'], "<span style='color:#ff0000; font-weight:bold'>{$this->get['hl']}</span>", $post['post_text']);
			}

			$Poster_Icons = null;

			if ($post['post_author'] != USER_GUEST_UID) {
				$online = ($post['active_time'] && ($post['active_time'] > $oldtime));

				$icons = array(
					'user_email' => array(
						'link'   => '',
						'alt'    => '',
						'img'    => '',
						'target' => '_self',
					),
					'user_homepage' => array(
						'link'   => $post['user_homepage'],
						'alt'    => sprintf($this->lang->topic_links_web, $post['user_name']),
						'img'    => 'www.gif',
						'target' => $this->sets['link_target']
					),
					'user_icq' => array(
						'link'   => 'http://wwp.icq.com/scripts/search.dll?to=' . $post['user_icq'],
						'alt'    => sprintf($this->lang->topic_links_icq, $post['user_name']),
						'img'    => 'icq.gif',
						'target' => $this->sets['link_target']
					),
					'user_aim' => array(
						'link'   => 'aim:goim?screenname=' . $post['user_aim'],
						'alt'    => sprintf($this->lang->topic_links_aim, $post['user_name']),
						'img'    => 'aim.gif',
						'target' => '_self'
					),
					'user_yahoo' => array(
						'link'   => 'http://edit.yahoo.com/config/send_webmesg?.target=' . $post['user_yahoo'] . '&amp;.src=pg',
						'alt'    => sprintf($this->lang->topic_links_yahoo, $post['user_name']),
						'img'    => 'yahoo.gif',
						'target' => $this->sets['link_target']
					),
					'user_msn' => array(
						'link'   => 'http://members.msn.com/' . $post['user_msn'],
						'alt'    => sprintf($this->lang->topic_links_msn, $post['user_name']),
						'img'    => 'msn.gif',
						'target' => $this->sets['link_target']
					),
					'user_pm' => array(
						'link'   => $this->self . '?a=pm&amp;s=send&amp;to=' . $post['user_id'],
						'alt'    => sprintf($this->lang->topic_links_pm, $post['user_name']),
						'img'    => 'pm.gif',
						'target' => '_self'
					)
				);

				if (!$post['user_email_show']) {
					if ($post['user_email_form']) {
						$icons['user_email'] = array(
							'link'   => "{$this->self}?a=email&amp;to={$post['user_id']}",
							'alt'    => sprintf($this->lang->topic_links_email, $post['user_name']),
							'img'    => 'email.gif',
							'target' => '_self'
						);
					} else {
						unset($icons['user_email']);
					}
				} else {
					$icons['user_email'] = array(
						'link'   => 'mailto:' . $post['user_email'],
						'alt'    => sprintf($this->lang->topic_links_email, $post['user_name']),
						'img'    => 'email.gif',
						'target' => '_self'
					);
				}
				
				$post['user_posts'] = number_format($post['user_posts'], 0, null, $this->lang->sep_thousands);
				$Poster_Icons = null;
				
				// add buddy
				$alt = sprintf($this->lang->topic_links_buddy, $post['user_name']);
				$Poster_Icons .= "<a href='{$this->self}?a=pm&amp;s=buddies&amp;addbud={$post['user_id']}&amp;t={$this->get['t']}' target='_self'><img src='./skins/$this->skin/images/buddy.gif' alt='{$alt}'/></a> ";
				
				foreach ($icons as $iname => $icon)
				{
					if ($post[$iname]) {
						$Poster_Icons .= "<a href=\"{$icon['link']}\"" . ($icon['target'] ? " onclick=\"window.open(this.href,'{$icon['target']}');return false;\"" : '') . "><img src='./skins/$this->skin/images/{$icon['img']}' alt=\"{$icon['alt']}\" /></a> ";
					}
				}
				
				if (($post['user_avatar_type'] != 'none') && $this->user['user_view_avatars']) {
					if (substr($post['user_avatar'], -4) != '.swf') {
						$post['user_avatar'] = "<img src='{$post['user_avatar']}' alt='{$this->lang->topic_avatar}' width='{$post['user_avatar_width']}' height='{$post['user_avatar_height']}' /><br /><br />";
					} else {
						$post['user_avatar'] = "<object width='{$post['user_avatar_width']}' height='{$post['user_avatar_height']}' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'><param name='movie' value='{$post['user_avatar']}'><param name='play' value='true'><param name='loop' value='true'><param name='quality' value='high'><embed src='{$post['user_avatar']}' width='{$post['user_avatar_width']}' height='{$post['user_avatar_height']}' play='true' loop='true' quality='high'></embed></object><br /><br />";
					}
				} else {
					$post['user_avatar'] = null;
				}

				if ($post['user_signature'] && $this->user['user_view_signatures']) {
					$post['user_signature'] = '.........................<br /><span class=\'sig\'>' . $this->format($post['user_signature'], FORMAT_CENSOR | FORMAT_HTMLCHARS | FORMAT_BREAKS | FORMAT_MBCODE | FORMAT_EMOTICONS) . '</span>';
				} else {
					$post['user_signature'] = null;
				}

				$Poster_Info = eval($this->template('TOPIC_POSTER_MEMBER'));

			} else {
				$Poster_Info = eval($this->template('TOPIC_POSTER_GUEST'));
				$post['user_signature'] = null;
			}

			if ($post['post_icon']) {
				$post['post_icon'] = "<img src='./skins/$this->skin/mbicons/{$post['post_icon']}' alt='*' style='margin-right:5px' />";
			}

			if (!$post['post_edited_by']) {
				$edited = null;
			} else {
				$post['post_edited_time'] = $this->mbdate(DATE_LONG, $post['post_edited_time']);
				$edited = sprintf($this->lang->topic_edited, $post['post_edited_time'], $post['post_edited_by']);
			}

			if ($this->perms->auth('post_viewip', $topic['topic_forum'])) {
				$post['post_ip'] = "{$this->lang->topic_ip}: {$post['post_ip']}";
			} else {
				$post['post_ip'] = null;
			}

			if (isset($attachments[$post['post_id']])) {
				$download_perm = $this->perms->auth('post_attach_download', $topic['topic_forum']);

				foreach ($attachments[$post['post_id']] as $file)
				{
					if ($download_perm) {
						$ext = strtolower(substr($file['attach_name'], -4));

						if (($ext == '.jpg') || ($ext == '.gif') || ($ext == '.png')) {
							$post['post_text'] .= "<br /><br />{$this->lang->topic_attached} {$file['attach_name']} ({$file['attach_downloads']} {$this->lang->topic_attached_downloads})<br /><img src='{$this->self}?a=topic&amp;s=attach&amp;id={$file['attach_id']}' alt='{$file['attach_name']}' />";
							continue;
						}
					}

					$post['post_text'] .= "<br /><br />{$this->lang->topic_attached} <a href='{$this->self}?a=topic&amp;s=attach&amp;id={$file['attach_id']}'>{$file['attach_name']}</a> ({$file['attach_downloads']} {$this->lang->topic_attached_downloads}, " . ceil($file['attach_size'] / 1024) . ' KB)';
				}
			}

			$user_created_post = ($this->user['user_id'] == $post['post_author']);
			$options = null;

			if ($this->perms->auth('post_edit', $topic['topic_forum']) || ($user_created_post && $this->perms->auth('post_edit_own', $topic['topic_forum']))) {
				$options .= '<a href="' . $this->self . '?a=mod&amp;s=edit_post&amp;p=' . $post['post_id'] . '"><img alt="' . $this->lang->topic_edit_post . '" src="./skins/' . $this->skin . '/images/edit.gif" /></a>';
			}

			if ($this->perms->auth('post_delete', $topic['topic_forum']) || ($user_created_post && $this->perms->auth('post_delete_own', $topic['topic_forum']))) {
				$options .= ' <a href="' . $this->self . '?a=mod&amp;s=del_post&amp;p=' . $post['post_id'] . '"><img alt="' . $this->lang->topic_delete_post . '" src="./skins/' . $this->skin . '/images/delete.gif" /></a>';
			}

			$posts .= eval($this->template('TOPIC_POST'));
			$i++;
		}

		$pagelinks = $this->get_pages($topic['topic_replies'] + 1, 'a=topic&amp;t=' . $this->get['t'], $this->get['min'], $this->get['num']);

		return eval($this->template('TOPIC_MAIN'));
	}

	function get_attachment()
	{
		if (!isset($this->get['id'])) {
			return $this->message($this->lang->topic_attached_title, $this->lang->topic_attached_perm);
		}

		$this->get['id'] = intval($this->get['id']);

		$data = $this->db->fetch("
		SELECT
		  a.attach_name, a.attach_file, t.topic_forum
		FROM
		  ({$this->pre}attach a, {$this->pre}posts p, {$this->pre}topics t)
		WHERE
		  a.attach_post = p.post_id AND
		  p.post_topic = t.topic_id AND
		  a.attach_id = {$this->get['id']}");
		  
		if ($this->perms->auth('post_attach_download', $data['topic_forum'])) {
			$this->nohtml = true;
			$this->db->query("UPDATE {$this->pre}attach SET attach_downloads=attach_downloads+1 WHERE attach_id={$this->get['id']}");

			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=\"{$data['attach_name']}\"");
			readfile('./attachments/' . $data['attach_file']);
		} else {
			return $this->message($this->lang->topic_attached_title, $this->lang->topic_attached_perm);
		}
	}

	function get_poll($t, $f, $title_html, $topic_modes, $options)
	{
		$user_voted = $this->db->fetch('SELECT vote_option FROM ' . $this->pre . 'votes WHERE vote_user=' . $this->user['user_id'] . ' AND vote_topic=' . $t);

		if ($user_voted || !$this->perms->auth('poll_vote', $f) || ($topic_modes & TOPIC_LOCKED) || (isset($this->get['results']) && $this->sets['vote_after_results'])) {
			$votes = $this->db->query("SELECT vote_option FROM {$this->pre}votes WHERE vote_topic=$t AND vote_option != -1");

			$results = array();
			$total_votes = 0;

			while ($vote = $this->db->nqfetch($votes))
			{
				if (isset($results[$vote['vote_option']])) {
					$results[$vote['vote_option']]++;
				} else {
					$results[$vote['vote_option']] = 1;
				}

				$total_votes++;
			}

			if (!$total_votes) {
				return $this->message($this->lang->topic_no_votes, $this->lang->topic_no_votes);
			}

			$out = null;

			$options = explode("\n", $options);
			foreach ($options as $i => $option)
			{
				if (trim($option) == '') {
					continue;
				}

				if (!isset($results[$i])) {
					$results[$i] = 0;
				}

				$option = $this->format($option);

				$percent = round($results[$i] / $total_votes * 100, 2);
				$width   = round($results[$i] / $total_votes * 100) * 2;

				if ($results[$i] != 1) {
					$votes = sprintf($this->lang->topic_vote_count_plur, $results[$i]);
				} else {
					$votes = sprintf($this->lang->topic_vote_count_sing, $results[$i]);
				}

				$out .= eval($this->template('POLL_RESULTS_ENTRY'));
			}

			return eval($this->template('POLL_RESULTS_MAIN'));
		} else {
			$pollopts = null;
			$options  = explode("\n", $options);

			foreach ($options as $i => $option)
			{
				if (trim($option) == '') {
					continue;
				}

				$option    = $this->format($option);
				$pollopts .= eval($this->template('POLL_OPTION'));
			}

			return eval($this->template('POLL_MAIN'));
		}
	}
}
?>