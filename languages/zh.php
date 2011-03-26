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
 * $Id: zh.php,v 1.15 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Chinese language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class zh
{
	function active()
	{
		$this->active_last_action = '�����';
		$this->active_modules_active = '�����Ծ�û�';
		$this->active_modules_board = '�����ҳ';
		$this->active_modules_cp = 'ʹ�ÿ������';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'ʹ�ð���';
		$this->active_modules_login = '��¼/�ǳ�';
		$this->active_modules_members = '�鿴��Ա�б�';
		$this->active_modules_mod = '���й���';
		$this->active_modules_pm = 'ʹ�ö���';
		$this->active_modules_post = '����';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = '����';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'ʱ��';
		$this->active_user = '�û�';
		$this->active_users = '��Ծ�û�';
	}

	function board()
	{
		$this->board_active_users = '��Ծ�û�';
		$this->board_birthdays = '����������ǣ�';
		$this->board_can_post = '����̳�����Իظ���';
		$this->board_can_topics = '����̳��ֻ�ܲ鿴���ܻظ���';
		$this->board_cant_post = '����̳�����ܻظ���';
		$this->board_cant_topics = '����̳�����ܲ鿴�ͷ������ӡ�';
		$this->board_forum = '��̳';
		$this->board_guests = 'λ�ο�';
		$this->board_last_post = '�����';
		$this->board_mark = '����Ѷ�';
		$this->board_mark1 = '��������Ѷ���';
		$this->board_members = 'λ��Ա';
		$this->board_message = '%s ����Ϣ';
		$this->board_most_online = '������������� %d ������ %s';
		$this->board_nobday = '����û�л�Ա���ա�';
		$this->board_nobody = '��ǰû�л�Ա���ߡ�';
		$this->board_nopost = 'û������';
		$this->board_noview = '����Ȩ�鿴����̳��';
		$this->board_regfirst = '����Ȩ�鿴����̳�������ע�ᣬ���Ϳ��Բ鿴��';
		$this->board_replies = '�ظ�';
		$this->board_stats = 'ͳ��';
		$this->board_stats_string = '��ǰ����%sλע���û��� ��ӭ���ǵ��»�Ա��%s��<br /> ��ǰ����%s�������%s���ظ�������%s�����ӡ�';
		$this->board_topics = '����';
		$this->board_topics_new = '����̳�������ӡ�';
		$this->board_topics_old = '����̳û�������ӡ�';
		$this->board_users = 'λ�û�����';
		$this->board_write_topics = '����̳�����Բ鿴���������⡣';
	}

	function cp()
	{
		$this->cp_aim = 'AIM';
		$this->cp_already_member = '�������Email��ַ�Ѿ�����ʹ���ˡ�';
		$this->cp_apr = '4��';
		$this->cp_aug = '8��';
		$this->cp_avatar_current = '��ǰͷ��';
		$this->cp_avatar_error = 'ͷ�����';
		$this->cp_avatar_must_select = '������ѡ��һ��ͷ��';
		$this->cp_avatar_none = '��ʹ��ͷ��';
		$this->cp_avatar_pixels = '����';
		$this->cp_avatar_select = 'ѡ��һ��ͷ��';
		$this->cp_avatar_size_height = '��ͷ��ĸ߶ȱ�����1��';
		$this->cp_avatar_size_width = '��ͷ��Ŀ�ȱ�����1��';
		$this->cp_avatar_upload = '������Ӳ��������һ��ͷ��';
		$this->cp_avatar_upload_failed = '����ͷ��ʧ�ܡ���ָ�����ļ������ڡ�';
		$this->cp_avatar_upload_not_image = '��ֻ���ϴ�ͼƬ��������ͷ��';
		$this->cp_avatar_upload_too_large = '��Ҫ�ϴ���ͷ���ļ�̫���ˡ��ϴ�������%dKB';
		$this->cp_avatar_url = 'ָ��һ��ͷ���URL';
		$this->cp_avatar_use = 'ʹ�����ϴ�ͷ��';
		$this->cp_bday = '����';
		$this->cp_been_updated = '���������Ѿ����¡�';
		$this->cp_been_updated1 = '����ͷ���Ѿ����¡�';
		$this->cp_been_updated_prefs = '����ϲ�������Ѿ����¡�';
		$this->cp_changing_pass = '��������';
		$this->cp_contact_pm = '���������û�ͨ������Ϣ��ϵ����';
		$this->cp_cp = '�������';
		$this->cp_current_avatar = '��ǰͷ��';
		$this->cp_current_time = '������%s��';
		$this->cp_dec = '12��';
		$this->cp_editing_avatar = '�༭ͷ��';
		$this->cp_editing_profile = '�༭����';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = '���������û�ͨ��Email��ϵ����';
		$this->cp_email_invaid = '�������Email��ַ��Ч��';
		$this->cp_err_avatar = '����Ͷ������';
		$this->cp_err_updating = '�������ϳ���';
		$this->cp_feb = '2��';
		$this->cp_file_type = '��ͷ���URL��Ч��ȷ��URL��ַ��ʽ����ȷ�ģ�ȷ���ļ���׺����gif��jpg������png��';
		$this->cp_format = '�û���';
		$this->cp_gmt = '[GMT+8:00]��������ۣ��¼���';
		$this->cp_gmt_nev1 = '[GMT-1:00] ��ý�';
		$this->cp_gmt_nev10 = '[GMT-10:00] ������';
		$this->cp_gmt_nev11 = '[GMT-11:00] ��;������Ħ��';
		$this->cp_gmt_nev12 = '[GMT-12:00] �������ڱ���ߣ�����';
		$this->cp_gmt_nev2 = '[GMT-2:00] �д�����';
		$this->cp_gmt_nev3 = '[GMT-3:00] ����ŵ˹����˹����������';
		$this->cp_gmt_nev35 = '[GMT-3:30] Ŧ����';
		$this->cp_gmt_nev4 = '[GMT-4:00] ������ʱ�䣨���ô�';
		$this->cp_gmt_nev5 = '[GMT-5:00] ����&���ô󶫲�ʱ��';
		$this->cp_gmt_nev6 = '[GMT-6:00] ����&���ô��в�ʱ��';
		$this->cp_gmt_nev7 = '[GMT-7:00] ����&���ô�ɽ��ʱ��';
		$this->cp_gmt_nev8 = '[GMT-8:00] ����&���ô�̫ƽ��ʱ��';
		$this->cp_gmt_nev9 = '[GMT-9:00] ����˹��';
		$this->cp_gmt_pos1 = '[GMT+1:00] ��ķ˹�ص������֣���������';
		$this->cp_gmt_pos10 = '[GMT+10:00] ī������Ϥ�ᣬ�ص�';
		$this->cp_gmt_pos11 = '[GMT+11:00] �¿��������';
		$this->cp_gmt_pos12 = '[GMT+12:00] �¿�����쳼�';
		$this->cp_gmt_pos2 = '[GMT+2:00] �ŵ䣬���ޣ�Ү·����';
		$this->cp_gmt_pos3 = '[GMT+3:00] �͸�Ī˹�ƣ����ޱ�';
		$this->cp_gmt_pos35 = '[GMT+3:30] �º���';
		$this->cp_gmt_pos4 = '[GMT+4:00] �������ȣ���˹���أ��ڱ���˹';
		$this->cp_gmt_pos45 = '[GMT+4:30] ������';
		$this->cp_gmt_pos5 = '[GMT+5:00] ��˹������������';
		$this->cp_gmt_pos55 = '[GMT+5:30] ���򣬼Ӷ������µ���';
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] ���ȣ��żӴ�';
		$this->cp_gmt_pos8 = '[GMT] �������α�׼ʱ��';
		$this->cp_gmt_pos9 = '[GMT+9:00] ����������';
		$this->cp_gmt_pos95 = '[GMT+9:30] �������£������';
		$this->cp_header = '�û��������';
		$this->cp_height = '�߶�';
		$this->cp_icq = 'ICQ';
		$this->cp_interest = '��Ȥ����';
		$this->cp_jan = '1��';
		$this->cp_july = '7��';
		$this->cp_june = '6��';
		$this->cp_label_edit_avatar = '�༭ͷ��';
		$this->cp_label_edit_pass = '��������';
		$this->cp_label_edit_prefs = '�༭ƫ������';
		$this->cp_label_edit_profile = '�༭����';
		$this->cp_label_edit_subs = '�༭���Ӷ���';
		$this->cp_language = '����';
		$this->cp_less_charac = '�������ֱ���С��32��';
		$this->cp_location = '����';
		$this->cp_login_first = '�������¼���ܽ��������塣';
		$this->cp_mar = '3��';
		$this->cp_may = '5��';
		$this->cp_msn = 'MSN';
		$this->cp_must_orig = 'Your name must be identical to the original. You may only change the letter case and spacing.'; //Translate
		$this->cp_new_notmatch = '��������������벻һ�¡�';
		$this->cp_new_pass = '������';
		$this->cp_no_flash = '������ʹ��Flashͷ��';
		$this->cp_not_exist = '��ָ�������ڣ�%s������ȷ��';
		$this->cp_nov = '11��';
		$this->cp_oct = '10��';
		$this->cp_old_notmatch = '������ľ����벻��ȷ��';
		$this->cp_old_pass = '������';
		$this->cp_pass_notvaid = '��������Ϊ�Ƿ����롣 ����ֻ������ĸ�����֣�-��_�Ϳո���ɡ�';
		$this->cp_preferences = '���ڸ���ƫ������';
		$this->cp_privacy = '��˽����';
		$this->cp_repeat_pass = '�ظ�������';
		$this->cp_sept = '9��';
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = '����������ʾ����Email��';
		$this->cp_signature = 'ǩ��';
		$this->cp_size_max = '�������ͷ��̫���ˡ��������ߴ���%s��%s���ء�';
		$this->cp_skin = '��̳Ƥ��';
		$this->cp_sub_change = '���ڸ��Ķ���';
		$this->cp_sub_delete = 'ɾ��';
		$this->cp_sub_expire = '����ʧЧ����';
		$this->cp_sub_name = '����';
		$this->cp_sub_no_params = 'û�в�����';
		$this->cp_sub_success = '�������Ѿ��ɹ�����%s��';
		$this->cp_sub_type = '��������';
		$this->cp_sub_updated = '��ѡ�����Ѿ��ӵ����б���ɾ����';
		$this->cp_topic_option = '����ѡ��';
		$this->cp_updated = '�����Ѹ���';
		$this->cp_updated1 = 'ͷ���Ѹ���';
		$this->cp_updated_prefs = 'ƫ�������Ѹ���';
		$this->cp_user_exists = '�Ѿ����ڸ��û�����';
		$this->cp_valided = '���������Ѿ��ɹ����ġ�';
		$this->cp_view_avatar = 'ʹ��ͷ��';
		$this->cp_view_emoticon = 'ʹ�ñ���ת��';
		$this->cp_view_signature = 'ʹ��ǩ��';
		$this->cp_welcome = '��ӭ�����û�������塣';
		$this->cp_width = '���';
		$this->cp_www = '��ҳ';
		$this->cp_yahoo = 'Yahooͨ';
		$this->cp_zone = 'ʱ��';
	}

	function email()
	{
		$this->email_blocked = '�û�Ա������Email';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email���ģ�';
		$this->email_no_fields = '���ز�ȷ���Ƿ����������д���';
		$this->email_no_member = 'û���ҵ����û�';
		$this->email_no_perm = '��û��Ȩ�޷����ʼ���';
		$this->email_sent = '����Email�Ѿ��ɹ����͡�';
		$this->email_subject = '���⣺';
		$this->email_to = '���͵���';
	}

	function forum()
	{
		$this->forum_by = 'By'; //Translate
		$this->forum_can_post = '�������ڸ���̳����ظ���';
		$this->forum_can_topics = '�������������̳���ӡ�';
		$this->forum_cant_post = '�������ڸ���̳����ظ���';
		$this->forum_cant_topics = '�������������̳���ӡ�';
		$this->forum_dot = '��';
		$this->forum_dot_detail = '��ʾ�������˸�����';
		$this->forum_forum = '��̳��Ϣ';
		$this->forum_guest = '�ο�';
		$this->forum_hot = '��';
		$this->forum_icon = '�������';
		$this->forum_jump = '��ת��������';
		$this->forum_last = '��󷢱�';
		$this->forum_locked = '�ر�';
		$this->forum_moved = '�ƶ�';
		$this->forum_msg = '%s��Ϣ';
		$this->forum_new = '��';
		$this->forum_new_poll = '������ͶƱ';
		$this->forum_new_topic = '����������';
		$this->forum_no_topics = '����̳û�����⡣';
		$this->forum_noexist = 'ָ������̳�����ڡ�';
		$this->forum_nopost = 'û������';
		$this->forum_not = '��';
		$this->forum_noview = '��û��Ȩ�޲鿴����̳��';
		$this->forum_pages = 'ҳ';
		$this->forum_pinned = '�ö�';
		$this->forum_pinned_topic = '�ö�����';
		$this->forum_poll = 'ͶƱ';
		$this->forum_regfirst = '��û��Ȩ�޲鿴����̳�������Ҫ�鿴����ע���ȡ�';
		$this->forum_replies = '�ظ�';
		$this->forum_starter = '������';
		$this->forum_sub = '����̳';
		$this->forum_sub_last_post = '��󷢱�';
		$this->forum_sub_replies = '�ظ�';
		$this->forum_sub_topics = '����';
		$this->forum_subscribe = '����̳���������ʼ����ҵ�Email�';
		$this->forum_topic = '����';
		$this->forum_topics_new = '����̳��������';
		$this->forum_topics_old = '����̳û��������';
		$this->forum_views = '���';
		$this->forum_write_topics = '�������ڸ���̳�������⡣';
	}

	function help()
	{
		$this->help_available_files = '����';
		$this->help_none = 'û�а������ݡ�';
	}

	function login()
	{
		$this->login_cant_logged = '���ź�����û�е�¼������û����������Ƿ���ȷ��<br /><br />���������ִ�Сд�ġ���Admin���롰aDmin���ǲ�ͬ�ġ�ͬʱҲ����������������Ƿ��Ѿ�����ciikie�ˡ�';
		$this->login_cookies = '��������cookie���ܵ�¼����̳��';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = '��¼';
		$this->login_logged = '���ѳɹ���¼��';
		$this->login_now_out = '���ѳɹ��ǳ���';
		$this->login_out = '�ǳ�';
		$this->login_pass = '����';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = '%s����ȷ�ϵǳ���';
		$this->login_user = '�û���';
	}

	function main()
	{
		$this->board_by = 'By'; //Translate
		$this->charset = 'GB2312';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = '����δ���';
		$this->main_activate_resend = '�ط������ʼ�';
		$this->main_admincp = '�������';
		$this->main_banned = '���Ѿ�����ֹ�鿴�ͽ��뱾��̳��';
		$this->main_code = '����';
		$this->main_continue = '����';
		$this->main_cp = '�������';
		$this->main_full = '����';
		$this->main_help = '�����ĵ�';
		$this->main_load = '����';
		$this->main_login = '��¼';
		$this->main_logout = '�ǳ�';
		$this->main_max_load = '�Բ��� ���������û����࣬��ǰ%s�����á�';
		$this->main_members = '��Ա�б�';
		$this->main_messenger = '˽����Ϣ';
		$this->main_new = '������Ϣ';
		$this->main_next = '��ҳ';
		$this->main_posts_new = '��';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'ǰҳ';
		$this->main_queries = 'queries'; //Translate
		$this->main_quote = '����';
		$this->main_register = 'ע��';
		$this->main_reminder = '����';
		$this->main_reminder_closed = '��̳�Ѿ��رգ�ֻ�й���Ա���ܽ��롣';
		$this->main_said = '˵';
		$this->main_search = '��̳����';
		$this->main_seconds = '��';
		$this->main_welcome = '��ӭ';
		$this->main_welcome_guest = '��ӭ';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = '';
		$this->submit = '�ύ';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'ȫ��';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = '���û�Ա��Email';
		$this->members_group = '�û���';
		$this->members_joined = 'ע������';
		$this->members_list = '��Ա�б�';
		$this->members_member = '�û���';
		$this->members_pm = '����Ϣ';
		$this->members_posts = '����';
		$this->members_send_pm = '���û�Ա����һ������Ϣ��';
		$this->members_title = '����';
		$this->members_vist_www = '����û�Ա����վ��';
		$this->members_www = '��վ';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = '��ȷ��ɾ����������';
		$this->mod_confirm_topic_delete = '��ȷ��ɾ����������';
		$this->mod_error_first_post = '������ɾ������ĵ�һ�����ӡ�';
		$this->mod_error_move_category = '�������ƶ����⵽һ�����';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = '�����ƶ���Ŀ����̳�����ڡ�';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = '�������ƶ����⵽�Ѿ����ڸ��������̳��ȥ��';
		$this->mod_label_controls = '��������ģʽ';
		$this->mod_label_description = '����';
		$this->mod_label_emoticon = 'ʹ�ñ������ת����';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'ʹ��Mb���룿';
		$this->mod_label_move_to = '�ƶ���';
		$this->mod_label_options = '����ѡ��';
		$this->mod_label_post_delete = 'ɾ������';
		$this->mod_label_post_edit = '�༭����';
		$this->mod_label_title = '����';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'ɾ������';
		$this->mod_label_topic_edit = '�༭����';
		$this->mod_label_topic_lock = '�ر�����';
		$this->mod_label_topic_move = '�ƶ�����';
		$this->mod_label_topic_move_complete = '������ȫ�ƶ�������ԭ��̳�������ӣ�';
		$this->mod_label_topic_move_link = '�ƶ����Ⲣ��ԭ������̳�б���ת��';
		$this->mod_label_topic_pin = '�ö�����';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = '��ָ�������Ӳ����ڡ�';
		$this->mod_missing_topic = '��ָ�������ⲻ���ڡ�';
		$this->mod_no_action = '������ָ��һ��������';
		$this->mod_no_post = '������ָ��һ�����ӡ�';
		$this->mod_no_topic = '������ָ��һ�����⡣';
		$this->mod_perm_post_delete = '����Ȩɾ�������ӡ�';
		$this->mod_perm_post_edit = '����Ȩ�༭�����ӡ�';
		$this->mod_perm_topic_delete = '����Ȩɾ�������⡣';
		$this->mod_perm_topic_edit = '����Ȩ�༭�����⡣';
		$this->mod_perm_topic_lock = '����Ȩ�رո����⡣';
		$this->mod_perm_topic_move = '����Ȩ�ö������⡣';
		$this->mod_perm_topic_pin = '����Ȩ�ö������⡣';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = '����Ȩ���Ÿ����⡣';
		$this->mod_perm_topic_unpin = '����Ȩȡ���������ö���';
		$this->mod_success_post_delete = '�������ѳɹ�ɾ����';
		$this->mod_success_post_edit = '�������ѳɹ��༭��';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = '�������ѳɹ�ɾ����';
		$this->mod_success_topic_edit = '�������ѳɹ��༭��';
		$this->mod_success_topic_move = '�������ѳɹ��ƶ�������̳��';
	}

	function new_posts()
	{
		$this->new_posts_dot = '��';
		$this->new_posts_dot_detail = '��ʾ�������˸�����';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = '��̳��Ϣ';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = '��';
		$this->new_posts_last = '��󷢱�';
		$this->new_posts_locked = '�ر�';
		$this->new_posts_moved = '�ƶ�';
		$this->new_posts_new = '��';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = '��';
		$this->new_posts_pinned = '�ö�';
		$this->new_posts_poll = 'ͶƱ';
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
		$this->pm_cant_del = '����Ȩɾ������Ϣ��';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'ɾ��������Ϣ';
		$this->pm_delete = 'ɾ��';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = '��Ϣ��ɾ����';
		$this->pm_deleted_all = '��Ϣ��ɾ����';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = '������Ϣû�з��ͳɹ�����ȷ�����б�����������ɡ�';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = '�ռ���';
		$this->pm_folder_new = '%s������Ϣ';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = '����';
		$this->pm_group = '�û���';
		$this->pm_guest = '�οͲ���ʹ�ö���Ϣ���ܡ�����ע����¼��';
		$this->pm_joined = 'ע��ʱ��';
		$this->pm_messenger = '����Ϣ';
		$this->pm_msgtext = '��Ϣ����';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = '�������ö�һ���ļ��С�';
		$this->pm_no_member = 'û�з��ָ�id���û���';
		$this->pm_no_number = 'û�и���ŵ���Ϣ��';
		$this->pm_no_title = '����';
		$this->pm_nomsg = '���ļ���û�����ݡ�';
		$this->pm_noview = '����Ȩ�鿴����Ϣ��';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = '����Ϣ';
		$this->pm_personal_msging = '˽����Ϣ';
		$this->pm_pm = '����Ϣ';
		$this->pm_posts = '������';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = '�ظ�';
		$this->pm_send = '����';
		$this->pm_sendamsg = '���Ͷ���Ϣ';
		$this->pm_sendingpm = '���Ͷ���Ϣ';
		$this->pm_sendon = '��Ԥ��';
		$this->pm_success = '������Ϣ�Ѿ��ɹ����͡�';
		$this->pm_sure_del = '��ȷ��Ҫɾ������Ϣ��';
		$this->pm_sure_delall = '��Ҫȷ��ɾ�����ļ��е�����������';
		$this->pm_title = '����';
		$this->pm_to = '���͵�';
	}

	function post()
	{
		$this->post_attach = '����';
		$this->post_attach_add = '��Ӹ���';
		$this->post_attach_disrupt = '��ӻ�ɾ����������Ӱ�������ӵ��������ݡ�';
		$this->post_attach_failed = '�����ϴ�ʧ�ܡ���ָ�����ļ����ܲ����ڡ�';
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = 'ɾ������';
		$this->post_attach_too_large = '��ָ��Ҫ�ϴ��ĸ���̫���ˡ������ϴ����ļ�������%dKB��';
		$this->post_cant_create = '�ο���Ȩ�������⡣�����ע�ᣬ������Է������⡣';
		$this->post_cant_create1 = '����Ȩ�������⡣';
		$this->post_cant_enter = '����ͶƱ��Ч�����Ѿ�Ͷ��Ʊ�˻�������ȨͶƱ��';
		$this->post_cant_poll = '�ο���Ȩ����ͶƱ�������ע�ᣬ������Է���ͶƱ��';
		$this->post_cant_poll1 = '����Ȩ����ͶƱ��';
		$this->post_cant_reply = '����Ȩ�ظ����⡣';
		$this->post_cant_reply1 = '�ο���Ȩ�ظ����⡣�����ע�ᣬ������Է������ӡ�';
		$this->post_cant_reply2 = '����Ȩ�ظ�����';
		$this->post_closed = '�������Ѿ��رա�';
		$this->post_create_poll = '����ͶƱ';
		$this->post_create_topic = '��������';
		$this->post_creating = '��������';
		$this->post_creating_poll = '����ͶƱ';
		$this->post_flood = '���ڹ�ȥ%s�����Ѿ���������ӣ������������޷����������ӡ�<br /><br />���Ժ����ԡ�';
		$this->post_guest = '�ο�';
		$this->post_icon = '�������';
		$this->post_last_five = '�����5��';
		$this->post_length = '��鳤��';
		$this->post_mbcode_address = '����URL��ַ';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = '��ɫ';
		$this->post_mbcode_bold = '�Ӵ�';
		$this->post_mbcode_bold1 = '��';
		$this->post_mbcode_chocolate = '�ɿ���ɫ';
		$this->post_mbcode_code = '����';
		$this->post_mbcode_color = '��ɫ';
		$this->post_mbcode_coral = 'ɺ��ɫ';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = '���';
		$this->post_mbcode_darkblue = '����';
		$this->post_mbcode_darkred = '����';
		$this->post_mbcode_deepink = '����';
		$this->post_mbcode_detail = '����������';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'ש��';
		$this->post_mbcode_font = '����';
		$this->post_mbcode_green = '��ɫ';
		$this->post_mbcode_huge = '�޴�';
		$this->post_mbcode_image = 'ͼƬ';
		$this->post_mbcode_image1 = 'ͼ';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = '����';
		$this->post_mbcode_italic = 'б��';
		$this->post_mbcode_italic1 = 'б';
		$this->post_mbcode_large = '��';
		$this->post_mbcode_length = '���������ֳ�"+length+"���֡�';
		$this->post_mbcode_limegreen = '���';
		$this->post_mbcode_medium = '��';
		$this->post_mbcode_orange = '��ɫ';
		$this->post_mbcode_orangered = '�Ⱥ�';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = '��ɫ';
		$this->post_mbcode_quote = '����';
		$this->post_mbcode_red = '��ɫ';
		$this->post_mbcode_royalblue = 'Ʒ��';
		$this->post_mbcode_sandybrown = 'ɳ��';
		$this->post_mbcode_seagreen = 'ˮ��';
		$this->post_mbcode_sienna = '��ɫ';
		$this->post_mbcode_silver = '��ɫ';
		$this->post_mbcode_size = '��С';
		$this->post_mbcode_skyblue = '����';
		$this->post_mbcode_small = 'С';
		$this->post_mbcode_strike = 'ɾ����';
		$this->post_mbcode_strike1 = 'ɾ';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = '��ɫ';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = '΢С';
		$this->post_mbcode_tomato = '����ɫ';
		$this->post_mbcode_underline = '�»���';
		$this->post_mbcode_underline1 = '��';
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = '��ľɫ';
		$this->post_msg = '����';
		$this->post_must_msg = '������д�����ӵ����ݡ�';
		$this->post_must_options = '��������һ����ͶƱʱ���������ѡ�';
		$this->post_must_title = '��������������ʱ����д�ϱ��⡣';
		$this->post_new_poll = '��ͶƱ';
		$this->post_new_topic = '������';
		$this->post_no_forum = 'û�з��ָ���̳��';
		$this->post_no_topic = 'û��ָ�����⡣';
		$this->post_no_vote = '������ѡ��һ��ѡ�';
		$this->post_option_emoticons = 'ʹ�ñ������ת����';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'ʹ��Mb���룿';
		$this->post_optional = '��ѡ';
		$this->post_options = 'ѡ��';
		$this->post_poll_options = 'ѡ��';
		$this->post_poll_row = 'ÿ��һ��';
		$this->post_posted = '������';
		$this->post_posting = '����';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = '�ظ�';
		$this->post_reply_topic = '�ظ�������';
		$this->post_replying = '�ظ�����';
		$this->post_replying1 = '�ظ�';
		$this->post_smiles = '�������';
		$this->post_too_many_options = '��ѡ�������2��%d��֮�䡣';
		$this->post_topic_detail = '����';
		$this->post_topic_title = '����';
		$this->post_view_topic = '�鿴��������';
		$this->post_voting = 'ͶƱ';
	}

	function printer()
	{
		$this->printer_back = '����';
		$this->printer_not_found = '�������Ҳ����������ܱ�ɾ�����ƶ����߸���û�з������';
		$this->printer_not_found_title = '����û���ҵ�';
		$this->printer_perm_topics = '����Ȩ�鿴���⡣';
		$this->printer_perm_topics_guest = '����Ȩ�鿴���⡣�����ע�ᣬ������Բ鿴��';
		$this->printer_posted_on = '������';
		$this->printer_send = '��ӡ';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'ͷ���ǩ��';
		$this->profile_avatar = 'ͷ��';
		$this->profile_bday = '����';
		$this->profile_contact = '��ϵ';
		$this->profile_email_address = 'Email';
		$this->profile_fav = '�ȥ��̳';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = '��Ϣ';
		$this->profile_interest = '��Ȥ����';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = '��󷢱�';
		$this->profile_list = '��Ա�б�';
		$this->profile_location = '����';
		$this->profile_member = '��Ա��';
		$this->profile_member_title = '��Ա����';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = '����������һ���û������鿴�����ϡ�';
		$this->profile_no_member = 'û�и��û������û������ʺſ����Ѿ�ɾ���ˡ�';
		$this->profile_none = '[ �� ]';
		$this->profile_not_post = 'û�з�������ӡ�';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = '��������';
		$this->profile_private = '[ ��  �� ]';
		$this->profile_profile = '����';
		$this->profile_signature = 'ǩ��';
		$this->profile_unkown = '[ δ  ֪ ]';
		$this->profile_view_profile = '�鿴����';
		$this->profile_www = '��ҳ';
		$this->profile_yahoo = 'Yahooͨ';
	}

	function register()
	{
		$this->register_activated = '�����ʺ��Ѽ��';
		$this->register_activating = '�ʺż���';
		$this->register_activation_error = '�������ʺ�ʱ�������󡣼����������ĵ�ַ�Ƿ���Email�е�������ַ��ȫһ�¡����������Ȼ���ڣ�����ϵ��̳����Ա��ϵ���ط������ʼ���';
		$this->register_confirm_passwd = 'ȷ������';
		$this->register_done = '���Ѿ��ɹ�ע�ᣬ���ڿ������ϵ�¼��';
		$this->register_email = 'Email';
		$this->register_email_invalid = '�������Email��ַ��Ч��';
		$this->register_email_used = '�������Email�Ѿ�����һ����Աʹ���ˡ�';
		$this->register_fields = 'û��������д���б����';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = '���Ѿ��ɹ�ע�ᡣһ�⼤���ʼ����͵� %s �������Ժ����������伤������ʺ�����̳ʹ���л��յ����ơ�';
		$this->register_name_invalid = '��������û���������';
		$this->register_name_taken = '���û����Ѿ�����ʹ�á�';
		$this->register_new_user = '�û���';
		$this->register_pass_invalid = '��������Ϊ�Ƿ����롣 ����ֻ������ĸ�����֣�-��_�Ϳո���ɣ���������5λ��';
		$this->register_pass_match = '��������������벻һ�¡�';
		$this->register_passwd = '����';
		$this->register_reg = 'ע��';
		$this->register_reging = 'ע��';
	}

	function search()
	{
		$this->search_advanced = '�߼�ѡ��';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = '��������';
		$this->search_characters = '��';
		$this->search_day = '��';
		$this->search_days = '��';
		$this->search_exact_name = '��ȷƥ��';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = '�����ؼ���';
		$this->search_forum = '��̳';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = '�ο�';
		$this->search_in = '������Χ';
		$this->search_in_posts = '������';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'ע������';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = '��ƥ��������';
		$this->search_matches = '�������';
		$this->search_month = '��';
		$this->search_months = '��';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = '����';
		$this->search_no_results = 'û���ҵ�������ݡ�';
		$this->search_no_words = '������ָ�����������ݡ�<br /><br />�ؼ�������3���֣��������֣�Ӣ����ĸ���ո����֣�\'��_��';
		$this->search_older = '����';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = '����ʾ�����е�ǰ';
		$this->search_partial_name = 'ģ��ƥ��';
		$this->search_post_icon = '�������';
		$this->search_posted_on = '������';
		$this->search_posts = '������';
		$this->search_posts_by = '������';
		$this->search_regex = '��������������';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = '��ض�: %d%%';
		$this->search_replies = '��������������';
		$this->search_result = '�������';
		$this->search_search = '����';
		$this->search_select_all = 'ȫѡ';
		$this->search_show_posts = '��ʾƥ�������';
		$this->search_sound = '����������';
		$this->search_starter = '������';
		$this->search_than = 'than'; //Translate
		$this->search_topic = '����';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = '��';
		$this->search_weeks = '��';
		$this->search_year = '��';
	}

	function topic()
	{
		$this->topic_attached = '����:';
		$this->topic_attached_downloads = '��';
		$this->topic_attached_perm = '����Ȩ�¸ĸ��ļ���';
		$this->topic_attached_title = '������ļ�';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = '������ͶƱ';
		$this->topic_create_topic = '����������';
		$this->topic_delete = 'ɾ��';
		$this->topic_delete_post = 'ɾ������';
		$this->topic_edit = '�༭';
		$this->topic_edit_post = '�༭����';
		$this->topic_edited = '���༭��%s (by %s) ';
		$this->topic_error = '����';
		$this->topic_group = '�û���';
		$this->topic_guest = '�ο�';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'ע������';
		$this->topic_level = '��Ա����';
		$this->topic_links_aim = '����AIM��Ϣ��%s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = '����Email��%s';
		$this->topic_links_icq = '����ICQ��Ϣ��%s';
		$this->topic_links_msn = '�鿴%s��MSN����';
		$this->topic_links_pm = '���Ͷ���Ϣ��%s';
		$this->topic_links_web = '����%s����վ';
		$this->topic_links_yahoo = '��Yahooͨ����Ϣ��%s';
		$this->topic_lock = '�ر�';
		$this->topic_locked = '�����ѹر�';
		$this->topic_move = '�ƶ�';
		$this->topic_no_votes = 'û����Ͷ��Ʊ��';
		$this->topic_not_found = '����û���ҵ�';
		$this->topic_not_found_message = '����û���ҵ��������ܱ�ɾ�����ƶ����߸���û�з������';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = '����ѡ��';
		$this->topic_pages = 'ҳ';
		$this->topic_perm_view = '����Ȩ�鿴����';
		$this->topic_perm_view_guest = '����Ȩ�鿴���⡣�����ע�ᣬ������Բ鿴��';
		$this->topic_pin = '�ö�';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = '������';
		$this->topic_print = '��ӡ';
		$this->topic_quote = '���ø���������Ϊ���ӵĲ�������';
		$this->topic_reply = '�ظ�������';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = '���ĸ�����';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = '��������';
		$this->topic_unpin = 'ȡ���ö�';
		$this->topic_unreg = 'δע��';
		$this->topic_view = '�鿴���';
		$this->topic_viewing = '�鿴����';
		$this->topic_vote = 'ͶƱ';
		$this->topic_vote_count_plur = '%dƱ';
		$this->topic_vote_count_sing = '%dƱ';
		$this->topic_votes = 'Ʊ';
	}
}
?>