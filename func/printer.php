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
 * $Id: printer.php,v 1.26 2006/06/23 19:34:35 jon Exp $
 **/

/**
 * Generates a printer-friendly topic
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class printer extends mercuryboard
{
	function execute()
	{
		$this->nohtml = true;

		$this->get['t'] = intval($this->get['t']);

		$topic = $this->db->fetch("
		SELECT
		    t.topic_title, t.topic_description, t.topic_modes, t.topic_starter, t.topic_forum, t.topic_replies
		FROM
		    ({$this->pre}topics t, {$this->pre}forums f)
		WHERE
		    t.topic_id='{$this->get['t']}' AND f.forum_id=t.topic_forum");

		if (!$topic) {
			$this->set_title($this->lang->printer_not_found_title);
			return $this->lang->printer_not_found;
		}

		if (!$this->perms->auth('topic_view', $topic['topic_forum'])) {
			return ($this->perms->is_guest) ? sprintf($this->lang->printer_perm_topics_guest, $this->self) : $this->lang->printer_perm_topics;
		}

		$topic['topic_title'] = $this->format($topic['topic_title'], FORMAT_HTMLCHARS | FORMAT_CENSOR);

		if (!empty($topic['topic_description'])) {
			$topic['topic_description'] = ', ' . $this->format($topic['topic_description'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
		}

		$posts = null;

		$query = $this->db->query("
		SELECT
		    p.post_emoticons, p.post_mbcode, p.post_time, p.post_text, p.post_author, p.post_id,
		    m.user_id, m.user_name, m.user_email, m.user_email_show
		FROM
		    ({$this->pre}posts p, {$this->pre}users m)
		WHERE
			p.post_topic = {$this->get['t']} AND
		    p.post_author = m.user_id
		ORDER BY
		    p.post_time");

		while ($post = $this->db->nqfetch($query))
		{
			$post['post_time'] = $this->mbdate(DATE_LONG, $post['post_time']);

			if ($post['post_author']) {
				if (!$post['user_email_show']) {
					$post['user_email'] = null;
				}
			} else {
				$post['user_name'] = 'Guest';
				$post['user_email'] = null;
			}

			$params = FORMAT_HTMLCHARS | FORMAT_CENSOR | FORMAT_BREAKS;

			if ($post['post_mbcode']) {
				$params |= FORMAT_MBCODE;
			}

			if ($post['post_emoticons']) {
				$params |= FORMAT_EMOTICONS;
			}

			$post['post_text'] = $this->format($post['post_text'], $params);

			$posts .= eval($this->template('PRINTER_POST'));
		}

		return eval($this->template('PRINTER_MAIN'));
	}
}
?>