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
 * $Id: email.php,v 1.8 2005/04/24 20:23:55 jason Exp $
 **/

/**
 * Form to email a member
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since RC1
 **/
class email extends mercuryboard
{
	/**
	 * Form to email a member
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since RC1
	 **/
	function execute()
	{
		$this->set_title($this->lang->email_email);
		$this->tree($this->lang->email_email);

		if (!$this->perms->auth('email_use')) {
			return $this->message($this->lang->email_email, $this->lang->email_no_perm);
		}

		if (!isset($this->post['submit'])) {
			$this->get['to'] = isset($this->get['to']) ? intval($this->get['to']) : '';

			if ($this->get['to']) {
				$target = $this->db->fetch("SELECT user_name FROM {$this->pre}users WHERE user_id={$this->get['to']}");

				if (!isset($target['user_name']) || ($this->get['to'] == USER_GUEST_UID)) {
					return $this->message($this->lang->email_email, $this->lang->email_no_member);
				}

				$this->get['to'] = $target['user_name'];
			}

			return eval($this->template('EMAIL_MAIN'));
		} else {
			if (empty($this->post['to']) || empty($this->post['message']) || empty($this->post['subject'])) {
				return $this->message($this->lang->email_email, $this->lang->email_no_fields);
			}

			$target = $this->db->fetch("SELECT user_id, user_email, user_email_form FROM {$this->pre}users WHERE user_name='{$this->post['to']}'");

			if (!$target['user_email_form']) {
				return $this->message($this->lang->email_email, $this->lang->email_blocked);
			}

			if (!isset($target['user_id']) || ($target['user_id'] == USER_GUEST_UID)) {
				return $this->message($this->lang->email_email, $this->lang->email_no_member);
			}

			include './lib/mailer.php';

			$mailer = new mailer($this->sets['admin_incoming'], $this->sets['admin_outgoing'], $this->sets['forum_name'], false);

			$mailer->setSubject("{$this->sets['forum_name']} - {$this->post['subject']}");
			$mailer->setMessage("This mail has been sent by {$this->user['user_name']} via {$this->sets['forum_name']}\n\n" . stripslashes($this->post['message']));
			$mailer->setRecipient($target['user_email']);
			$mailer->setServer($this->sets['mailserver']);

			$mailer->doSend();

			return $this->message($this->lang->email_email, $this->lang->email_sent);
		}
	}
}
?>