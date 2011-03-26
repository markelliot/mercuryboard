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
 * $Id: login.php,v 1.34 2005/04/24 15:16:13 jason Exp $
 **/

/**
 * Allows user to log in and out of their accounts
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class login extends mercuryboard
{
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		switch($this->get['s'])
		{
		case 'off':
			return $this->do_logout();
			break;

		case 'pass':
			return $this->reset_pass();
			break;

		case 'request':
			return $this->request_pass();
			break;

		default: //logon
			return $this->do_login();
		}
	}

	function do_login()
	{
		$this->set_title($this->lang->login_header);
		$this->tree($this->lang->login_header);

		if (!isset($this->post['submit'])) {
			$request_uri = $this->get_uri();

			if (substr($request_uri, -8) == 'register') {
				$request_uri = $this->self;
			}

			return eval($this->template('LOGIN_MAIN'));
		} else {
			$username = str_replace('\\', '&#092;', $this->format(stripslashes($this->post['user']), FORMAT_HTMLCHARS | FORMAT_CENSOR));

			$data  = $this->db->fetch("SELECT user_id, user_password FROM {$this->pre}users WHERE REPLACE(LOWER(user_name), ' ', '')='" . str_replace(' ', '', strtolower($username)) . '\' AND user_id != ' . USER_GUEST_UID . ' LIMIT 1');
			$pass  = $data['user_password'];
			$user  = $data['user_id'];

			$this->post['pass'] = str_replace('$', '', $this->post['pass']);
			$this->post['pass'] = md5($this->post['pass']);

			if ($this->post['pass'] == $pass) {
				if (!setcookie($this->sets['cookie_prefix'] . 'user', $user, $this->time + $this->sets['logintime'], $this->sets['cookie_path'])
				||  !setcookie($this->sets['cookie_prefix'] . 'pass', $pass, $this->time + $this->sets['logintime'], $this->sets['cookie_path'])) {
					return $this->message($this->lang->login_header, $this->lang->login_cookies);
				}

				// Delete guest entry
				$this->db->query("DELETE FROM {$this->pre}active WHERE active_ip='$this->ip' AND active_user_agent='$this->agent'");

				return $this->message($this->lang->login_header, $this->lang->login_logged, $this->lang->main_continue, str_replace('&', '&amp;', $this->post['request_uri']), $this->post['request_uri']);
			} else {
				return $this->message($this->lang->login_header, sprintf($this->lang->login_cant_logged, $this->self));
			}
		}
	}

	function do_logout()
	{
		$this->set_title($this->lang->login_out);
		$this->tree($this->lang->login_out);

		if (!isset($this->get['sure']) && !$this->perms->is_guest) {
			return $this->message($this->lang->login_out, sprintf($this->lang->login_sure, $this->user['user_name']), $this->lang->main_continue, "$this->self?a=login&amp;s=off&amp;sure=1");
		} else {
			$this->db->query("DELETE FROM {$this->pre}active WHERE active_id={$this->user['user_id']}");
			$this->db->query('UPDATE ' . $this->pre . 'users SET user_lastvisit = ' . $this->time . ' WHERE user_id=' . $this->user['user_id']);

			setcookie($this->sets['cookie_prefix'] . 'user', '', $this->time - 9000, $this->sets['cookie_path']);
			setcookie($this->sets['cookie_prefix'] . 'pass', '', $this->time - 9000, $this->sets['cookie_path']);

			$this->perms->is_guest = true;

			return $this->message($this->lang->login_out, sprintf($this->lang->login_now_out, $this->self, $this->self));
		}
	}

	function reset_pass()
	{
		$this->set_title($this->lang->login_pass_reset);
		$this->tree($this->lang->login_pass_reset);

		if (!isset($this->post['submit'])) {
			return eval($this->template('LOGIN_PASS'));
		} else {
			$target = $this->db->fetch("SELECT user_id, user_name, user_password, user_joined, user_email FROM {$this->pre}users WHERE user_name='" . $this->format($this->post['user'], FORMAT_HTMLCHARS | FORMAT_CENSOR) . '\' AND user_id != ' . USER_GUEST_UID . ' LIMIT 1');
			if (!isset($target['user_id'])) {
				return $this->message($this->lang->login_pass_reset, $this->lang->login_pass_no_id);
			}

			include './lib/mailer.php';

			$mailer = new mailer($this->sets['admin_incoming'], $this->sets['admin_outgoing'], $this->sets['forum_name'], false);

			$message  = "{$this->sets['forum_name']}\n\n";
			$message .= "Someone has requested a password reset for your forum account, {$this->post['user']}.\n";
			$message .= "If you do not want to reset your password, please ignore or delete this email.\n\n";
			$message .= "Go to the below URL to continue with the password reset:\n";
			$message .= "{$this->sets['loc_of_board']}$this->self?a=login&s=request&e=" . md5($target['user_email'] . $target['user_name'] . $target['user_password'] . $target['user_joined']) . "\n\n";
			$message .= "Request IP: {$this->ip}";

			$mailer->setSubject("{$this->sets['forum_name']} - Reset Password");
			$mailer->setMessage($message);
			$mailer->setRecipient($target['user_email']);
			$mailer->setServer($this->sets['mailserver']);
			$mailer->doSend();

			return $this->message($this->lang->login_pass_reset, $this->lang->login_pass_request);
		}
	}

	function request_pass()
	{
		$this->set_title($this->lang->login_pass_reset);
		$this->tree($this->lang->login_pass_reset);

		if (!isset($this->get['e'])) {
			$this->get['e'] = null;
		}

		$target = $this->db->fetch("SELECT user_id, user_name, user_email FROM {$this->pre}users WHERE MD5(CONCAT(user_email, user_name, user_password, user_joined))='" . preg_replace('/[^a-z0-9]/', '', $this->get['e']) . '\' AND user_id != ' . USER_GUEST_UID . ' LIMIT 1');
		if (!isset($target['user_id'])) {
			return $this->message($this->lang->login_pass_reset, $this->lang->login_pass_no_id);
		}

		include './lib/mailer.php';

		$mailer = new mailer($this->sets['admin_incoming'], $this->sets['admin_outgoing'], $this->sets['forum_name'], false);

		$newpass = $this->generate_pass(8);

		$message  = "{$this->sets['forum_name']}\n\n";
		$message .= "Your password has been reset to:\n$newpass\n\n";
		$message .= "{$this->sets['loc_of_board']}$this->self?a=login";

		$mailer->setSubject("{$this->sets['forum_name']} - Reset Password");
		$mailer->setMessage($message);
		$mailer->setRecipient($target['user_email']);
		$mailer->setServer($this->sets['mailserver']);
		$mailer->doSend();

		$this->db->query("UPDATE {$this->pre}users SET user_password='" . md5($newpass) . "' WHERE user_id={$target['user_id']}");

		return $this->message($this->lang->login_pass_reset, $this->lang->login_pass_sent);
	}

	function get_uri()
	{
		if (!isset($this->server['HTTP_REFERER'])) {
			return $this->self;
		}

		$url = parse_url($this->server['HTTP_REFERER']);

		if (!isset($url['path'])) {
			return $this->self;
		}

		if (($url['path'] == $this->self)
		&& (($url['host'] . (isset($url['port']) ? ':' . $url['port'] : null)) == $this->server['HTTP_HOST'])
		&& (!empty($url['query']) && !stristr($url['query'], 'login'))) {
			return $this->format($url['path'] . (!empty($url['query']) ? '?' . $url['query'] : null), FORMAT_HTMLCHARS);
		} else {
			return $this->self;
		}
	}
}
?>