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
 * $Id: ru.php,v 1.16 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Russian language module
 *
 * @author Alexey Loshkarev <elf@pechkin.ru>
 * @author Polkop <polkop@tut.by>
 * @since 1.1.2
 **/
class ru
{
	function active()
	{
		$this->active_last_action = '��������� ��������';
		$this->active_modules_active = '������������� ������ �������� �������������';
		$this->active_modules_board = '����� �� �������';
		$this->active_modules_cp = '����� � ����������� ������';
		$this->active_modules_forum = '������������� �����: %s';
		$this->active_modules_help = '������ �����';
		$this->active_modules_login = '���������';
		$this->active_modules_members = '������� ������ �������������';
		$this->active_modules_mod = '����������';
		$this->active_modules_pm = '����� ��������� ���������';
		$this->active_modules_post = '����� ���������';
		$this->active_modules_printer = '�������� ����: %s';
		$this->active_modules_profile = '������� �������: %s';
		$this->active_modules_search = '����';
		$this->active_modules_topic = '������� ����: %s';
		$this->active_time = '�����';
		$this->active_user = '������������';
		$this->active_users = '�������� ������������';
	}

	function board()
	{
		$this->board_active_users = '�������� ������������';
		$this->board_birthdays = '����������� ��� ��������';
		$this->board_can_post = '�� ������ �������� � ���� ������.';
		$this->board_can_topics = '�� ������ ������, �� �� ��������� ���� � ���� ������.';
		$this->board_cant_post = '�� �� ������ �������� � ���� ������.';
		$this->board_cant_topics = '�� �� ������ ������ ��� ��������� ���� � ���� ������.';
		$this->board_forum = '�����';
		$this->board_guests = '�����';
		$this->board_last_post = '��������� ���������';
		$this->board_mark = '�������� ��� ��������� ��� �����������';
		$this->board_mark1 = '��� ��������� � ������ ���� �������� ��� �����������.';
		$this->board_members = '������������';
		$this->board_message = '%s ���������';
		$this->board_most_online = '������������ ����� ������������� �� ������ -  %d  ���� %s.';
		$this->board_nobday = '������� ��� ���� �������� ������ ������.';
		$this->board_nobody = '���� ������ ������.';
		$this->board_nopost = '��� ���������';
		$this->board_noview = '� ���� ��� ���� ������������� ��� ������.';
		$this->board_regfirst = '���� �� �� ���������������, �� �� ������ ������� �� ������.';
		$this->board_replies = '�������';
		$this->board_stats = '����������';
		$this->board_stats_string = '%s ������������� ����������������. ������������ ������ ������������, %s.<br />����� %s ��� � %s ������� � %s ����������.';
		$this->board_topics = '���';
		$this->board_topics_new = '� ������ ���� ����� ���������.';
		$this->board_topics_old = '� ������ ��� ����� ���������.';
		$this->board_users = '������������(-��)';
		$this->board_write_topics = '�� ������ ������ � ��������� ���� � ���� ������.';
	}

	function cp()
	{
		$this->cp_aim = '��� � AIM';
		$this->cp_already_member = '��������� ����� ��� ������������ ����� �� ���������������� �������������.';
		$this->cp_apr = '������';
		$this->cp_aug = '������';
		$this->cp_avatar_current = '���� ������� �������';
		$this->cp_avatar_error = '������ ��� ������ � ��������';
		$this->cp_avatar_must_select = '�� ������ ������� �������.';
		$this->cp_avatar_none = '�� ����������� �������';
		$this->cp_avatar_pixels = '��������';
		$this->cp_avatar_select = '������ �������';
		$this->cp_avatar_size_height = '������ ������� ������ ���� ����� 1 �';
		$this->cp_avatar_size_width = '������ ������� ������ ���� ����� 1 �';
		$this->cp_avatar_upload = '��������� ������� � �����';
		$this->cp_avatar_upload_failed = '������ ��� �������� �������. ��������, �� ���������� ����, ������� �� ������.';
		$this->cp_avatar_upload_not_image = '�� ������ ������ ��������� �������� � �������� ����� �������.';
		$this->cp_avatar_upload_too_large = '��������� ������� ������� �������. ������������ ����� - %d ��������.';
		$this->cp_avatar_url = '����� URL � ����� �������';
		$this->cp_avatar_use = '������������ ����������� �������';
		$this->cp_bday = '���� ��������';
		$this->cp_been_updated = '���� ������� ��� ��������.';
		$this->cp_been_updated1 = '���� ������ ���� ���������.';
		$this->cp_been_updated_prefs = '���� ��������� ���� ���������.';
		$this->cp_changing_pass = '��������� ������';
		$this->cp_contact_pm = '��������� ������ ������ ���� ������ ���������?';
		$this->cp_cp = '����������� ������';
		$this->cp_current_avatar = '������� ������';
		$this->cp_current_time = '������ %s.';
		$this->cp_dec = '�������';
		$this->cp_editing_avatar = '�������������� �������';
		$this->cp_editing_profile = '�������������� �������';
		$this->cp_email = '����� Email';
		$this->cp_email_form = '��������� ������ ������ ��� �� ����������� �����?';
		$this->cp_email_invaid = '��������� ����� �������.';
		$this->cp_err_avatar = '������ ���������� �������';
		$this->cp_err_updating = '������ ���������� �������';
		$this->cp_feb = '�������';
		$this->cp_file_type = '��������� ������� ��������. �������, ��� URL ��������� ������ � ��� ����� - gif,jpg ��� png.';
		$this->cp_format = '�������������� �����';
		$this->cp_gmt = '[GMT] ����������� �����';
		$this->cp_gmt_nev1 = '[GMT-1:00] �������� �������, ������� ���';
		$this->cp_gmt_nev10 = '[GMT-10:00] ������';
		$this->cp_gmt_nev11 = '[GMT-11:00] ������ ������,  ������� �����';
		$this->cp_gmt_nev12 = '[GMT-12:00] ������������� �������';
		$this->cp_gmt_nev2 = '[GMT-2:00] ����������� ���������';
		$this->cp_gmt_nev3 = '[GMT-3:00] ������-�����, ������ ����������';
		$this->cp_gmt_nev35 = '[GMT-3:30] ������������';
		$this->cp_gmt_nev4 = '[GMT-4:00] ������������� ����� ������';
		$this->cp_gmt_nev5 = '[GMT-5:00] ��������� ����� ��� � ������';
		$this->cp_gmt_nev6 = '[GMT-6:00] ����������� ����� ��� � ������';
		$this->cp_gmt_nev7 = '[GMT-7:00] ����� ���� ��� � ������';
		$this->cp_gmt_nev8 = '[GMT-8:00] ������������� ����� ��� � ������';
		$this->cp_gmt_nev9 = '[GMT-9:00] ���� ������';
		$this->cp_gmt_pos1 = '[GMT+1:00] ���������, ������, ���, �����';
		$this->cp_gmt_pos10 = '[GMT+10:00] ��������, ������, ����';
		$this->cp_gmt_pos11 = '[GMT+11:00] �������, ����� ���������';
		$this->cp_gmt_pos12 = '[GMT+12:00] ������, �����';
		$this->cp_gmt_pos2 = '[GMT+2:00] �����, ����, ���������, �����';
		$this->cp_gmt_pos3 = '[GMT+3:00] ������, ������, �������';
		$this->cp_gmt_pos35 = '[GMT+3:30] �������';
		$this->cp_gmt_pos4 = '[GMT+4:00] ���-����, ������, �������';
		$this->cp_gmt_pos45 = '[GMT+4:30] �����';
		$this->cp_gmt_pos5 = '[GMT+5:00] ���������, ������';
		$this->cp_gmt_pos55 = '[GMT+5:30] ������, ���������, ���-����';
		$this->cp_gmt_pos6 = '[GMT+6:00] ������, �����';
		$this->cp_gmt_pos7 = '[GMT+7:00] �������, ��������';
		$this->cp_gmt_pos8 = '[GMT+8:00] �����, �������, ��������';
		$this->cp_gmt_pos9 = '[GMT+9:00] �����, ����';
		$this->cp_gmt_pos95 = '[GMT+9:30] ��������, ������';
		$this->cp_header = '����������� ������';
		$this->cp_height = '������';
		$this->cp_icq = '����� ICQ';
		$this->cp_interest = '��������';
		$this->cp_jan = '������';
		$this->cp_july = '����';
		$this->cp_june = '����';
		$this->cp_label_edit_avatar = '�������� �������';
		$this->cp_label_edit_pass = '�������� ������';
		$this->cp_label_edit_prefs = '�������� ���������';
		$this->cp_label_edit_profile = '������������� �������';
		$this->cp_label_edit_subs = '�������� ��������';
		$this->cp_language = '����';
		$this->cp_less_charac = '��� ������ ���� ������ 32-� ��������.';
		$this->cp_location = '��������������';
		$this->cp_login_first = '����� ����������� ����� ������ � ����������� ������.';
		$this->cp_mar = '����';
		$this->cp_may = '���';
		$this->cp_msn = '������������� MSN';
		$this->cp_must_orig = '��� ������ ���� ���������� � ����������. �� ������ �������� ������ ������� ���� � ���������� ����� �������.';
		$this->cp_new_notmatch = '����� ������ �� ���������.';
		$this->cp_new_pass = '����� ������';
		$this->cp_no_flash = '������������� ������� � ��� ���������.';
		$this->cp_not_exist = '��������� ���� (%s) �� ����������!';
		$this->cp_nov = '������';
		$this->cp_oct = '�������';
		$this->cp_old_notmatch = '��������� ������ ������ �� ��������� � ������� � ����.';
		$this->cp_old_pass = '������ ������';
		$this->cp_pass_notvaid = '���� ������ �������. �������, ��� ������������ ������ ���������� �������, ����� ��� �����, �����, ����, ������������� ��� �������.';
		$this->cp_preferences = '��������� ��������';
		$this->cp_privacy = '��������� ������������';
		$this->cp_repeat_pass = '������� ����� ������';
		$this->cp_sept = '��������';
		$this->cp_show_active = '���������� ���� ���������� ��� ��������� �������?';
		$this->cp_show_email = '���������� ����� email � �������?';
		$this->cp_signature = '�������';
		$this->cp_size_max = '������ ��������� ������� ������� �������. ����������� ����������� ������ - %s �� %s ��������.';
		$this->cp_skin = '���� ������';
		$this->cp_sub_change = '��������� ��������';
		$this->cp_sub_delete = '�������';
		$this->cp_sub_expire = '���� �����������';
		$this->cp_sub_name = '�������� ��������';
		$this->cp_sub_no_params = '�� ������ ���������.';
		$this->cp_sub_success = '������ �� �������� �� %s.';
		$this->cp_sub_type = '��� ��������';
		$this->cp_sub_updated = '��������� �������� ���� �������.';
		$this->cp_topic_option = '��������� ���';
		$this->cp_updated = '������� ��������';
		$this->cp_updated1 = '������� ���������';
		$this->cp_updated_prefs = '��������� ���������';
		$this->cp_user_exists = '������������ � ���������� ���������������� ������ ��� ����������.';
		$this->cp_valided = '���� ������ ��� �������� � �������.';
		$this->cp_view_avatar = '���������� �������?';
		$this->cp_view_emoticon = '���������� ������?';
		$this->cp_view_signature = '���������� �������?';
		$this->cp_welcome = '����� ���������� � ����������� ������. ��� �� ������ ��������� ���� �������. ������ ������ �����.';
		$this->cp_width = '������';
		$this->cp_www = '�������� ��������';
		$this->cp_yahoo = '������������� Yahoo';
		$this->cp_zone = '������� ����';
	}

	function email()
	{
		$this->email_blocked = '���� ������������ �� ��������� ��������� email ����� ��� ������.';
		$this->email_email = '����� Email';
		$this->email_msgtext = '���� Email:';
		$this->email_no_fields = '������� � ������� ��� ����.';
		$this->email_no_member = '�� ������ ������������ � ����� ������';
		$this->email_no_perm = '� ���� ��� ���� �������� ��������� ����� ��� ������.';
		$this->email_sent = '��������� email ���� �������.';
		$this->email_subject = '����:';
		$this->email_to = '����:';
	}

	function forum()
	{
		$this->forum_by = '�������';
		$this->forum_can_post = '�� ������ �������� � ���� ������.';
		$this->forum_can_topics = '�� ������ ������ ���� � ���� ������.';
		$this->forum_cant_post = '�� �� ������ �������� � ���� ������.';
		$this->forum_cant_topics = '�� �� ������ ������ ���� � ���� ������.';
		$this->forum_dot = '�����';
		$this->forum_dot_detail = '��������, ��� �� ����� � ���� ����';
		$this->forum_forum = '�����';
		$this->forum_guest = '�����';
		$this->forum_hot = '�������';
		$this->forum_icon = '������ ���������';
		$this->forum_jump = '������� � ���������� ��������� � ����';
		$this->forum_last = '��������� ���������';
		$this->forum_locked = '�������';
		$this->forum_moved = '����������';
		$this->forum_msg = '%s Message'; //Translate
		$this->forum_new = '�����';
		$this->forum_new_poll = '������� �����������';
		$this->forum_new_topic = '������� ����� ����';
		$this->forum_no_topics = '� ���� ������ ��� ��� ��� �����������.';
		$this->forum_noexist = '��������� ����� �� ����������.';
		$this->forum_nopost = '��� ���������';
		$this->forum_not = '��';
		$this->forum_noview = '� ���� ��� ����� ������ ����� ������.';
		$this->forum_pages = '�������';
		$this->forum_pinned = '�����������';
		$this->forum_pinned_topic = '������������� ����';
		$this->forum_poll = '�����������';
		$this->forum_regfirst = '� ������������������ ������������� ��� ����� ��������� �������.';
		$this->forum_replies = '�������';
		$this->forum_starter = '�����';
		$this->forum_sub = '��������';
		$this->forum_sub_last_post = '��������� ���������';
		$this->forum_sub_replies = '�������';
		$this->forum_sub_topics = '���';
		$this->forum_subscribe = '��������� �� e-mail �� ������� � ���� ������';
		$this->forum_topic = '����';
		$this->forum_topics_new = '���� ����� ��������� � ���� ������.';
		$this->forum_topics_old = '��� ����� ��������� � ���� ������.';
		$this->forum_views = '����������';
		$this->forum_write_topics = '�� ������ ��������� ���� � ���� ������.';
	}

	function help()
	{
		$this->help_available_files = '������';
		$this->help_none = '� ���� ������ ��� ������ ������.';
	}

	function login()
	{
		$this->login_cant_logged = '���������� �����. ������� ������������ ����� ����� � ������.<br /><br />��� ��������-��������, ��� ������ ��� \'UsErNaMe\' ���������� �� \'Username\'. ����� �������, ��� � ����� �������� �������� cookie.';
		$this->login_cookies = '��� ����� ��������� ���������� cookies.';
		$this->login_forgot_pass = '����� ������?';
		$this->login_header = '����';
		$this->login_logged = '���� ����������.';
		$this->login_now_out = '����� ����������.';
		$this->login_out = '�����';
		$this->login_pass = '������';
		$this->login_pass_no_id = '������������ � ����� ������ �� ����������.';
		$this->login_pass_request = '�������� ������ � ������, ������������ �� ��� �����, ����� ��������� ��������� ������ ������.';
		$this->login_pass_reset = '�������� ������';
		$this->login_pass_sent = '���� ������ ��� �������. ����� ������ ��� ������ �� ����� email, ��������� ��� �����������.';
		$this->login_sure = '������������� ������ ����� �� \'%s\'?';
		$this->login_user = '��� ������������';
	}

	function main()
	{
		$this->board_by = '�������';
		$this->charset = 'koi8-r';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = '���� ������� ��� �� ��� �������������.';
		$this->main_activate_resend = '������� ������������� ������ ������';
		$this->main_admincp = '�������';
		$this->main_banned = '���� ��� ������� �� ���� �������.';
		$this->main_code = '���';
		$this->main_continue = '����������';
		$this->main_cp = '����������� ������';
		$this->main_full = '������ �����';
		$this->main_help = '������';
		$this->main_load = '��������';
		$this->main_login = '����';
		$this->main_logout = '�����';
		$this->main_max_load = '��������, %s ������ ���������� ��-�� �������� ���������� �����������.';
		$this->main_members = '������������';
		$this->main_messenger = '���������';
		$this->main_new = '�����';
		$this->main_next = '��������';
		$this->main_posts_new = '�����';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = '����������';
		$this->main_queries = '��������';
		$this->main_quote = '������';
		$this->main_register = '�����������';
		$this->main_reminder = '������������';
		$this->main_reminder_closed = '������ ������� � �������� ������ ���������������.';
		$this->main_said = '������';
		$this->main_search = '�����';
		$this->main_seconds = '������';
		$this->main_welcome = '����� ����������';
		$this->main_welcome_guest = '����� ����������!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = '���������';
		$this->today = '�������';
		$this->yesterday = '�����';
	}

	function members()
	{
		$this->members_all = '���';
		$this->members_email = '����� Email';
		$this->members_email_member = '�������� Email';
		$this->members_group = '������';
		$this->members_joined = '�������������';
		$this->members_list = '������ �������������';
		$this->members_member = '������������';
		$this->members_pm = '��������� ���������';
		$this->members_posts = '���������';
		$this->members_send_pm = '������� ��������� ��������� ����� ������������';
		$this->members_title = '���������';
		$this->members_vist_www = '�������� ��������� ����� ������������';
		$this->members_www = '�������� ���������';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = '�� ������������� ������ ������� ��� ���������?';
		$this->mod_confirm_topic_delete = '�� ������������� ������ ������� ��� ����??';
		$this->mod_error_first_post = '���������� ������� ������ ��������� � ����.';
		$this->mod_error_move_category = '����� ����������� ���� � ���������.';
		$this->mod_error_move_create = '� ���� ��� ����� ���������� ���� � ���� �����.';
		$this->mod_error_move_forum = '������ ����������� ���� � �������������� �����.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = '���� ��� ��������� � ���� ������.';
		$this->mod_label_controls = '����� ����������';
		$this->mod_label_description = '��������';
		$this->mod_label_emoticon = '�������� ������ �� ��������?';
		$this->mod_label_global = '���������� ����';
		$this->mod_label_mbcode = '������������ MbCode?';
		$this->mod_label_move_to = '����������� �';
		$this->mod_label_options = '���������';
		$this->mod_label_post_delete = '������� ���������';
		$this->mod_label_post_edit = '�������� ���������';
		$this->mod_label_title = '���������';
		$this->mod_label_title_original = '������������ ���������';
		$this->mod_label_title_split = '��������� ���������';
		$this->mod_label_topic_delete = '������� ����';
		$this->mod_label_topic_edit = '�������� ����';
		$this->mod_label_topic_lock = '������������� ����';
		$this->mod_label_topic_move = '����������� ����';
		$this->mod_label_topic_move_complete = '��������� ����������� ���� � ����� �����';
		$this->mod_label_topic_move_link = '����������� ���� � ����� ����� � �������� ������ �� �ţ � ������ ������.';
		$this->mod_label_topic_pin = '���������� ����';
		$this->mod_label_topic_split = '��������� ����';
		$this->mod_missing_post = '��������� ��������� �� ����������.';
		$this->mod_missing_topic = '��������� ���� �� ����������.';
		$this->mod_no_action = '�� ������� ��������.';
		$this->mod_no_post = '�� ������� ���������.';
		$this->mod_no_topic = '�� ������� ����.';
		$this->mod_perm_post_delete = '� ���� ��� ����� ������� ��� ���������.';
		$this->mod_perm_post_edit = '� ���� ��� ����� �������� ��� ���������.';
		$this->mod_perm_topic_delete = '� ���� ��� ����� ������� ��� ����.';
		$this->mod_perm_topic_edit = '� ���� ��� ����� �������� ��� ����.';
		$this->mod_perm_topic_lock = '� ���� ��� ����� ����������� ��� ����.';
		$this->mod_perm_topic_move = '� ���� ��� ����� ���������� ��� ����.';
		$this->mod_perm_topic_pin = '� ���� ��� ����� ����������� ��� ����.';
		$this->mod_perm_topic_split = '� ���� ��� ����� ��������� ��� ����.';
		$this->mod_perm_topic_unlock = '� ���� ��� ����� �������������� ��� ����.';
		$this->mod_perm_topic_unpin = '� ���� ��� ����� ���������� ��� ����.';
		$this->mod_success_post_delete = '��������� ���� ������� �������.';
		$this->mod_success_post_edit = '��������� ���� ������� ��������.';
		$this->mod_success_split = '���� ���� ������� ���������.';
		$this->mod_success_topic_delete = '���� ���� ������� �������.';
		$this->mod_success_topic_edit = '���� ���� ������� ��������.';
		$this->mod_success_topic_move = '���� ���� ������� ���������� � ����� �����.';
	}

	function new_posts()
	{
		$this->new_posts_dot = '�����';
		$this->new_posts_dot_detail = '��������, ��� �� ����� � ���� ����';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = '�����';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = '�������';
		$this->new_posts_last = '��������� ���������';
		$this->new_posts_locked = '�������';
		$this->new_posts_moved = '����������';
		$this->new_posts_new = '�����';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = '��';
		$this->new_posts_pinned = '�����������';
		$this->new_posts_poll = '�����������';
		$this->new_posts_topic = '����';
	}

	function pm()
	{
		$this->pm_avatar = 'Avatar'; //Translate
		$this->pm_buddy = 'Buddy'; //Translate
		$this->pm_buddy_added = 'This user has been addded to your buddies list'; //Translate
		$this->pm_buddy_already_added = 'This user has already been added to your buddy list'; //Translate
		$this->pm_buddy_drop = 'use the drop down menu to select a Buddy'; //Translate
		$this->pm_buddy_email_member = 'Email this buddy'; //Translate
		$this->pm_buddy_error_id = 'There is no member with that user id. The account may have been deleted.'; //Translate
		$this->pm_buddy_list = 'Buddy List'; //Translate
		$this->pm_buddy_none = 'There are currently no members in your buddy list'; //Translate
		$this->pm_buddy_select = 'Select a Buddy'; //Translate
		$this->pm_buddy_send_pm = 'Send this buddy a personal message'; //Translate
		$this->pm_cant_del = '� ���� ��� ����� �������� ����� ���������.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = '������� ��� ���������';
		$this->pm_delete = '�������';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = '��������� �������.';
		$this->pm_deleted_all = '��������� �������.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = '�� ������� �������� ���� ��������� ��������� �����.<br /><br />��� ������������ �� ����������: %s<br /><br />��� ������������ �� ��������� ������� ���������: %s';
		$this->pm_fields = '���������� ��������� ���� ���������. �������, ��� ��� ����������� ���� ���������.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = '��������';
		$this->pm_folder_new = '%s �����';
		$this->pm_folder_sentbox = '������������';
		$this->pm_from = '��';
		$this->pm_group = '������';
		$this->pm_guest = '�� �� ������ ���������� ��������� ���������������������.';
		$this->pm_joined = '�������������';
		$this->pm_messenger = '���������';
		$this->pm_msgtext = '����� ���������';
		$this->pm_multiple = '����������� ��������� ����� ����� � ������� (;)';
		$this->pm_no_folder = '����� �����.';
		$this->pm_no_member = '�� ������ ������������ � ����� �������.';
		$this->pm_no_number = '�� ������� ��������� � ����� �������.';
		$this->pm_no_title = '��� ����';
		$this->pm_nomsg = '� ���� ����� ��� ���������.';
		$this->pm_noview = '� ���� ��� ���� ��������� ����� ���������.';
		$this->pm_online = '���� ������������ ������ online';
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = '������ ���������';
		$this->pm_personal_msging = '������ ���������';
		$this->pm_pm = '��';
		$this->pm_posts = '���������';
		$this->pm_preview = '��������������� ��������';
		$this->pm_recipients = '����������';
		$this->pm_reply = '��������';
		$this->pm_send = '�������';
		$this->pm_sendamsg = '������� ���������';
		$this->pm_sendingpm = '������� ���������';
		$this->pm_sendon = '�������';
		$this->pm_success = '���� ��������� ���� ������� �������.';
		$this->pm_sure_del = '�� ������������� ������ ������� ��� ���������?';
		$this->pm_sure_delall = '�� ������������� ������ ������� ��� ��������� � ���� �����?';
		$this->pm_title = '���������';
		$this->pm_to = '����';
	}

	function post()
	{
		$this->post_attach = '��������';
		$this->post_attach_add = '�������� ��������';
		$this->post_attach_disrupt = '���������� ��� �������� �������� �� ��������� ���� ���������.';
		$this->post_attach_failed = '������ �������� ��������. ��������� ���� �� ����������.';
		$this->post_attach_not_allowed = '������ ������������ �������� ����� ����.';
		$this->post_attach_remove = '������� ��������';
		$this->post_attach_too_large = '��������� ���� ������� �������. ������������ ������ - %d ��.';
		$this->post_cant_create = '�������������������� ������ ��������� ����.';
		$this->post_cant_create1 = '� ���� ��� ���� �������� ����.';
		$this->post_cant_enter = '����������� �� ���� ���������. ���� �� ��� ��������� ���, ���� � ���� ��� ����� ����������.';
		$this->post_cant_poll = '�������������������� ������ ��������� �����������.';
		$this->post_cant_poll1 = '� ���� ��� ����� ��������� �����������.';
		$this->post_cant_reply = '� ���� ��� ����� �������� � ���� ������.';
		$this->post_cant_reply1 = '�������������������� ������ �������� � ����.';
		$this->post_cant_reply2 = '� ���� ��� ����� �������� � ����.';
		$this->post_closed = '���� �������.';
		$this->post_create_poll = '������� �����������';
		$this->post_create_topic = '������� ����';
		$this->post_creating = '��������� ����';
		$this->post_creating_poll = '��������� �����������';
		$this->post_flood = '�� ������� � ������� ��������� %s ������ � �� ������ ������ ����� ������<br /><br />������� ����� ��������� ������.';
		$this->post_guest = '�����';
		$this->post_icon = '������ ���������';
		$this->post_last_five = '��������� 5 ��������� � �������� �������';
		$this->post_length = '��������� �����';
		$this->post_mbcode_address = '����� �����';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = '�����';
		$this->post_mbcode_bold = '������';
		$this->post_mbcode_bold1 = '�';
		$this->post_mbcode_chocolate = '�������';
		$this->post_mbcode_code = '���';
		$this->post_mbcode_color = '����';
		$this->post_mbcode_coral = '������';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = '�����-�����';
		$this->post_mbcode_darkred = '�����-�������';
		$this->post_mbcode_deepink = '�������';
		$this->post_mbcode_detail = '����� ��������';
		$this->post_mbcode_email = '����� Email';
		$this->post_mbcode_firered = '��������-�������';
		$this->post_mbcode_font = '�����';
		$this->post_mbcode_green = '�������';
		$this->post_mbcode_huge = '��������';
		$this->post_mbcode_image = '��������';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = '������';
		$this->post_mbcode_italic = '���������';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = '�������';
		$this->post_mbcode_length = '����� ���������: "+length+" ��������.';
		$this->post_mbcode_limegreen = '��������';
		$this->post_mbcode_medium = '�������';
		$this->post_mbcode_orange = '���������';
		$this->post_mbcode_orangered = '���������';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = '���������';
		$this->post_mbcode_quote = '������';
		$this->post_mbcode_red = '�������';
		$this->post_mbcode_royalblue = '�����';
		$this->post_mbcode_sandybrown = '����������';
		$this->post_mbcode_seagreen = '�������';
		$this->post_mbcode_sienna = '����';
		$this->post_mbcode_silver = '�����������';
		$this->post_mbcode_size = '������';
		$this->post_mbcode_skyblue = '�������';
		$this->post_mbcode_small = '���������';
		$this->post_mbcode_strike = '�������������';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = '����� ���������';
		$this->post_mbcode_tomato = '�������';
		$this->post_mbcode_underline = '������������';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = '���������';
		$this->post_must_msg = '�� ������ ������ ���������.';
		$this->post_must_options = '�� ������ ������ ������ �����������.';
		$this->post_must_title = '��������� ���������.';
		$this->post_new_poll = '����� �����������';
		$this->post_new_topic = '����� ����';
		$this->post_no_forum = '���� ����� �� ������.';
		$this->post_no_topic = '�� ������� ����.';
		$this->post_no_vote = '�� ������ ������� �����, �� ������� ���������.';
		$this->post_option_emoticons = '������������ ����������� ������?';
		$this->post_option_global = '������� ���� ����������?';
		$this->post_option_mbcode = '������������ MbCode?';
		$this->post_optional = '�����������';
		$this->post_options = '���������';
		$this->post_poll_options = '��������� �����������';
		$this->post_poll_row = '���� �� �������';
		$this->post_posted = '����������';
		$this->post_posting = '���������';
		$this->post_preview = '��������������� ��������';
		$this->post_reply = '��������';
		$this->post_reply_topic = '�������� �� ����';
		$this->post_replying = '������� �� ����';
		$this->post_replying1 = '�������';
		$this->post_smiles = '������������ ������';
		$this->post_too_many_options = '������ ���� �� 2-� �� %d ������� � �����������.';
		$this->post_topic_detail = '�������� ����';
		$this->post_topic_title = '��������� ����';
		$this->post_view_topic = '���������� ��� ����';
		$this->post_voting = '�������';
	}

	function printer()
	{
		$this->printer_back = '�����';
		$this->printer_not_found = '���� �� �������. ��� ����� ���� �������, ���������� ��� ������ ������� �� ������������.';
		$this->printer_not_found_title = '���� �� �������';
		$this->printer_perm_topics = '� ���� ��� ����� �������� ����.';
		$this->printer_perm_topics_guest = '� ���� ��� ����� �������� ����. ���� �����������������, ��������, �����.';
		$this->printer_posted_on = '����������';
		$this->printer_send = '�����������';
	}

	function profile()
	{
		$this->profile_aim_sn = '��� � AIM';
		$this->profile_av_sign = '������� � �������';
		$this->profile_avatar = '�������';
		$this->profile_bday = '���� ��������';
		$this->profile_contact = '�������';
		$this->profile_email_address = '����� email';
		$this->profile_fav = '������� �����';
		$this->profile_fav_forum = '%s (%d%% ��������� ����� ������������)';
		$this->profile_icq_uin = '����� ICQ';
		$this->profile_info = '����������';
		$this->profile_interest = '��������';
		$this->profile_joined = '�������������';
		$this->profile_last_post = '��������� ���������';
		$this->profile_list = '������ �������������';
		$this->profile_location = '��������������';
		$this->profile_member = '������';
		$this->profile_member_title = '���������';
		$this->profile_msn = '������������� MSN';
		$this->profile_must_user = '�� ������ ������� ������������, ��� � �������� �������.';
		$this->profile_no_member = '���� ������������ � ����� �������. ��� ������� ��� ���� ������.';
		$this->profile_none = '[ ��� ]';
		$this->profile_not_post = '��� �� �����.';
		$this->profile_online = '���� ������������ ������ online';
		$this->profile_pm = '��������� ���������';
		$this->profile_postcount = '%s �����, %s � ����';
		$this->profile_posts = '���������';
		$this->profile_private = '[ �������� ]';
		$this->profile_profile = '�������';
		$this->profile_signature = '�������';
		$this->profile_unkown = '[ ���������� ]';
		$this->profile_view_profile = '�������� �������';
		$this->profile_www = '�������� ��������';
		$this->profile_yahoo = '������������� Yahoo';
	}

	function register()
	{
		$this->register_activated = '���� ������� ��� ����������!';
		$this->register_activating = '��������� ��������';
		$this->register_activation_error = '��������� ������ ��� ��������� ��������. �������, �������� �� ������� ������ ����� �� �������������� ������. ���� �������� �� �������, ������� � ��������������� ��� ������������ ������.';
		$this->register_confirm_passwd = '��������� ������';
		$this->register_done = '�� ��� ���������������. ������ �� ������ �����.';
		$this->register_email = '����� email';
		$this->register_email_invalid = '��������� ����� email �������.';
		$this->register_email_used = '��������� ����� email ��� ������������ ����� �� �������������.';
		$this->register_fields = '�� ��� ���� ���������.';
		$this->register_image = '����������, ������� �����, ������������ �� ��������.';
		$this->register_image_invalid = '����� ��������, ��� �� �������, � �� ������� �����, ����� �����, ������������ �� ��������.';
		$this->register_must_activate = '�� �����������������. �� ����� %s ��� ������ email � ������������ �� ����������� ������ ��������. ����� ������� ������ ���������� �������������� �������.';
		$this->register_name_invalid = '������� ������� ���.';
		$this->register_name_taken = '����� ��� ��� ������.';
		$this->register_new_user = '�������� ���';
		$this->register_pass_invalid = '��������� ������ �������. ������ ������ ��������� ������ ���������� �������, ����� ��� �����, �����, ����, ������������� ��� ������, � ���� �� ����� 5 ��������.';
		$this->register_pass_match = '������ �� ���������.';
		$this->register_passwd = '������';
		$this->register_reg = '�����������';
		$this->register_reging = '��������������';
	}

	function search()
	{
		$this->search_advanced = '�������������� ���������';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = '������� �����';
		$this->search_characters = '�������� ���������';
		$this->search_day = '����';
		$this->search_days = '����';
		$this->search_exact_name = '������ ���';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = '������';
		$this->search_forum = '�����';
		$this->search_group = '������';
		$this->search_guest = '�����';
		$this->search_in = '������ �';
		$this->search_in_posts = '������ ������ � ����������';
		$this->search_ip = 'IP-�����';
		$this->search_joined = '�������������';
		$this->search_level = '������� ������������';
		$this->search_match = '������ ����������';
		$this->search_matches = '����������';
		$this->search_month = '�����';
		$this->search_months = '�������';
		$this->search_mysqldoc = '������������ �� MySQL';
		$this->search_newer = '�����';
		$this->search_no_results = '�� ������ ������� ������ �� �������.';
		$this->search_no_words = '�� ������ ������ ������� ������.<br /><br />������ ������� ������ ���� ������� 3-� ��������, ������� �����, �����, ��������� � �������������.';
		$this->search_older = '������';
		$this->search_online = '���� ������������ ������ online';
		$this->search_only_display = '���������� ������';
		$this->search_partial_name = '�������� �����';
		$this->search_post_icon = '������ ���������';
		$this->search_posted_on = '����������';
		$this->search_posts = '���������';
		$this->search_posts_by = '������ � ����������';
		$this->search_regex = '������ � ������� ���������� ���������';
		$this->search_regex_failed = '������ � ���������� ����������. �������� ������������ �� MySQL � ���������� ����������.';
		$this->search_relevance = '������������� ���������: %d%%';
		$this->search_replies = '���������';
		$this->search_result = '���������� ������';
		$this->search_search = '������';
		$this->search_select_all = '�������� �ӣ';
		$this->search_show_posts = '���������� ���������� ���������';
		$this->search_sound = '������ ���������';
		$this->search_starter = '�����';
		$this->search_than = '���';
		$this->search_topic = '����';
		$this->search_unreg = '��������������������';
		$this->search_week = '������';
		$this->search_weeks = '������';
		$this->search_year = '���';
	}

	function topic()
	{
		$this->topic_attached = '��������� ����:';
		$this->topic_attached_downloads = '��� �������';
		$this->topic_attached_perm = '� ���� ��� ���� ��������� ���� ����.';
		$this->topic_attached_title = '��������� ����';
		$this->topic_avatar = '�������';
		$this->topic_create_poll = '����� �����������';
		$this->topic_create_topic = '����� ����';
		$this->topic_delete = '�������';
		$this->topic_delete_post = '������� ��� ���������';
		$this->topic_edit = '��������';
		$this->topic_edit_post = '�������� ��� ���������';
		$this->topic_edited = '��������� ��� ��������������� %s, ������������  %s';
		$this->topic_error = '������';
		$this->topic_group = '������';
		$this->topic_guest = '�����';
		$this->topic_ip = 'IP-�����';
		$this->topic_joined = '�������������';
		$this->topic_level = '������� ������������';
		$this->topic_links_aim = '������� AIM-��������� %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = '������� email %s';
		$this->topic_links_icq = '������� ICQ-��������� %s';
		$this->topic_links_msn = '���������� MSN-������� %s';
		$this->topic_links_pm = '������� ��������� ��������� %s';
		$this->topic_links_web = '�������� �������� ��������� %s';
		$this->topic_links_yahoo = '������� Yahoo-��������� %s';
		$this->topic_lock = '�������������';
		$this->topic_locked = '���� �������������';
		$this->topic_move = '�����������';
		$this->topic_no_votes = '����� �� ���������.';
		$this->topic_not_found = '���� �� �������';
		$this->topic_not_found_message = '���� �� �������. � ����� ������� ��� �����������. ��������, ��� ������� � �� ������������.';
		$this->topic_online = '���� ������������ ������ online';
		$this->topic_options = '��������� ����';
		$this->topic_pages = '��������';
		$this->topic_perm_view = '� ���� ��� ����� �������� ����.';
		$this->topic_perm_view_guest = '� ���� ��� ����� �������� ����. ���� �����������������, �������� � �����';
		$this->topic_pin = '����������';
		$this->topic_posted = '����������';
		$this->topic_posts = '���������';
		$this->topic_print = '������ ��� ������';
		$this->topic_quote = '�������� � ��������������';
		$this->topic_reply = '��������';
		$this->topic_split = '���������';
		$this->topic_split_finish = '��������� ��� ����������';
		$this->topic_split_keep = '�� ���������� ��� ���������';
		$this->topic_split_move = '����������� ��� ���������';
		$this->topic_subscribe = '��������� ���� �� e-mail ��� ������� � ���� ����';
		$this->topic_top = '����� ';
		$this->topic_unlock = '��������������';
		$this->topic_unpin = '���������';
		$this->topic_unreg = '�� ���������������';
		$this->topic_view = '���������� ����������';
		$this->topic_viewing = '�������� ����';
		$this->topic_vote = '�����';
		$this->topic_vote_count_plur = '%d �������';
		$this->topic_vote_count_sing = '%d �����';
		$this->topic_votes = '�����(-��)';
	}
}
?>