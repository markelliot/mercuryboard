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
 * $Id: bg.php,v 1.15 2006/07/26 17:56:18 jon Exp $
 **/

/**
 * Bulgarian language module
 *
 * @author Vratza Online <info@vratza.com>
 * @since 1.1.0
 **/
class bg
{
	function active()
	{
		$this->active_last_action = 'Последно действие';
		$this->active_modules_active = 'Преглежда активните потребители';
		$this->active_modules_board = 'Преглежда Главната страница';
		$this->active_modules_cp = 'Използва контролния си панел';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Използва Помощ';
		$this->active_modules_login = 'Влиза/Излиза';
		$this->active_modules_members = 'Преглежда списъка с потребителите';
		$this->active_modules_mod = 'Модерира';
		$this->active_modules_pm = 'Използва Messenger';
		$this->active_modules_post = 'Пише мнение';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Търси из форума';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Време';
		$this->active_user = 'Потребител';
		$this->active_users = 'Потребители онлайн';
	}

	function board()
	{
		$this->board_active_users = 'Потребители онлайн';
		$this->board_birthdays = 'Днес рожден ден има:';
		$this->board_can_post = 'Можете да отговаряте в този форум';
		$this->board_can_topics = 'Можете да четете, но не можете да създавате нова тема в този форум.';
		$this->board_cant_post = 'Не можете да отговаряте в този форум.';
		$this->board_cant_topics = 'Не можете да четете и да пускате мнение в този форум.';
		$this->board_forum = 'Форум';
		$this->board_guests = 'Гости';
		$this->board_last_post = 'Последно мнение';
		$this->board_mark = 'Маркирайте мненията като прочетени';
		$this->board_mark1 = 'ВСИЧКИ мнения и форуми са маркирани като прочетени.';
		$this->board_members = 'Потребители';
		$this->board_message = '%s Съобщение';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Няма потребители с рожден ден днес.';
		$this->board_nobody = 'Няма регистрирани потребители онлайн.';
		$this->board_nopost = 'Няма мнения';
		$this->board_noview = 'Нямате разрешение да преглеждате този форум.';
		$this->board_regfirst = 'Нямате разрешение да преглеждате този форум, Ако се регистрирате, може да получите такова.';
		$this->board_replies = 'Отговори';
		$this->board_stats = 'Статистика';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Теми';
		$this->board_topics_new = 'Няма нови теми в този форум.';
		$this->board_topics_old = 'Няма нови мнения.';
		$this->board_users = 'Потребители';
		$this->board_write_topics = 'Можете да четете и да пускате мнения в този форум.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM потребителско име';
		$this->cp_already_member = 'Има регистриран потребител с email адреса, който си въвел.';
		$this->cp_apr = 'Април';
		$this->cp_aug = 'Август';
		$this->cp_avatar_current = 'Вашият текущ аватар';
		$this->cp_avatar_error = 'Грешка в аватара';
		$this->cp_avatar_must_select = 'Изберете аватар.';
		$this->cp_avatar_none = 'Няма да използвам аватар';
		$this->cp_avatar_pixels = 'пиксела';
		$this->cp_avatar_select = 'Избери аватар';
		$this->cp_avatar_size_height = 'Височината на аватара трябва да е между 1 и ';
		$this->cp_avatar_size_width = 'Широчината на аватара трябва да е между 1 и';
		$this->cp_avatar_upload = 'Качи аватар от компютъра си';
		$this->cp_avatar_upload_failed = 'Грешка при качване на аватар. Файлът, който се опитвате да добавите може би не съществува.';
		$this->cp_avatar_upload_not_image = 'Можете да добавяте картинки, които да използвате само за аватар.';
		$this->cp_avatar_upload_too_large = 'Аватарът, който искате е твърде голям. Максималният размер е %d KB.';
		$this->cp_avatar_url = 'URL  адрес за аватар';
		$this->cp_avatar_use = 'Използвай аватара, който си качил';
		$this->cp_bday = 'Рожден ден';
		$this->cp_been_updated = 'Профилът ти беше обновен успешно.';
		$this->cp_been_updated1 = 'Аватарът беше сменен успешно.';
		$this->cp_been_updated_prefs = 'Настройките бяха обновени успешно.';
		$this->cp_changing_pass = 'Редакция на парола';
		$this->cp_contact_pm = 'Позволяваш ли другите потребители да се свързват с теб посредством месинджър?';
		$this->cp_cp = 'Контролен панел';
		$this->cp_current_avatar = 'Сегашен аватар';
		$this->cp_current_time = 'В момента е %s.';
		$this->cp_dec = 'Декември';
		$this->cp_editing_avatar = 'Редактиране на аватар';
		$this->cp_editing_profile = 'Редактиране на профил';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Позволяваш ли на останалите потребители да се звързват с теб, посредтством email?';
		$this->cp_email_invaid = 'email адресът, кйто си въвел е невалиден.';
		$this->cp_err_avatar = 'Грешка при промяна на аватар.';
		$this->cp_err_updating = 'Грешка при промяна на профил';
		$this->cp_feb = 'Февруари';
		$this->cp_file_type = 'Аватарът, който си въвел не е валиден. Увери се, че си въвел правилно URL  адрес или, че форматът е  gif, jpg, или png.';
		$this->cp_format = 'Потребителско име';
		$this->cp_gmt = '[GMT] ';
		$this->cp_gmt_nev1 = '[GMT-1:00] ';
		$this->cp_gmt_nev10 = '[GMT-10:00] ';
		$this->cp_gmt_nev11 = '[GMT-11:00] ';
		$this->cp_gmt_nev12 = '[GMT-12:00] ';
		$this->cp_gmt_nev2 = '[GMT-2:00] ';
		$this->cp_gmt_nev3 = '[GMT-3:00] ';
		$this->cp_gmt_nev35 = '[GMT-3:30] ';
		$this->cp_gmt_nev4 = '[GMT-4:00] ';
		$this->cp_gmt_nev5 = '[GMT-5:00] ';
		$this->cp_gmt_nev6 = '[GMT-6:00] ';
		$this->cp_gmt_nev7 = '[GMT-7:00] ';
		$this->cp_gmt_nev8 = '[GMT-8:00] ';
		$this->cp_gmt_nev9 = '[GMT-9:00] ';
		$this->cp_gmt_pos1 = '[GMT+1:00] ';
		$this->cp_gmt_pos10 = '[GMT+10:00] ';
		$this->cp_gmt_pos11 = '[GMT+11:00] ';
		$this->cp_gmt_pos12 = '[GMT+12:00] ';
		$this->cp_gmt_pos2 = '[GMT+2:00] ';
		$this->cp_gmt_pos3 = '[GMT+3:00] ';
		$this->cp_gmt_pos35 = '[GMT+3:30] ';
		$this->cp_gmt_pos4 = '[GMT+4:00] ';
		$this->cp_gmt_pos45 = '[GMT+4:30] ';
		$this->cp_gmt_pos5 = '[GMT+5:00] ';
		$this->cp_gmt_pos55 = '[GMT+5:30] ';
		$this->cp_gmt_pos6 = '[GMT+6:00] ';
		$this->cp_gmt_pos7 = '[GMT+7:00] ';
		$this->cp_gmt_pos8 = '[GMT+8:00] ';
		$this->cp_gmt_pos9 = '[GMT+9:00] ';
		$this->cp_gmt_pos95 = '[GMT+9:30] ';
		$this->cp_header = 'Потребителски контролен панел';
		$this->cp_height = 'Височина';
		$this->cp_icq = 'ICQ номер';
		$this->cp_interest = 'Интереси';
		$this->cp_jan = 'Януари';
		$this->cp_july = 'Юли';
		$this->cp_june = 'Юни';
		$this->cp_label_edit_avatar = 'Редакция на аватар';
		$this->cp_label_edit_pass = 'Редакция на парола';
		$this->cp_label_edit_prefs = 'Редакция на настройки';
		$this->cp_label_edit_profile = 'Редакция на профил';
		$this->cp_label_edit_subs = 'Редакция на записването';
		$this->cp_language = 'Език';
		$this->cp_less_charac = 'Потребителското име трябва да е по-малко от 32 символа.';
		$this->cp_location = 'Местоположение';
		$this->cp_login_first = 'Трябва да влезете регистриран, за да може да използвате контролния си панел.';
		$this->cp_mar = 'Март';
		$this->cp_may = 'Май';
		$this->cp_msn = 'MSN Id';
		$this->cp_must_orig = 'Моля използвайте същото име.';
		$this->cp_new_notmatch = 'Паролите не съвпадат.';
		$this->cp_new_pass = 'Нова парола';
		$this->cp_no_flash = 'Flash аватари не са разрешени.';
		$this->cp_not_exist = 'дата, която сте въвели  (%s)е невалидна !';
		$this->cp_nov = 'Ноември';
		$this->cp_oct = 'Октомври';
		$this->cp_old_notmatch = 'Паролата, която сте въвели е грешна.';
		$this->cp_old_pass = 'Стара парола';
		$this->cp_pass_notvaid = 'Грешна парола.';
		$this->cp_preferences = 'Промяна на настойки';
		$this->cp_privacy = 'Privacy Options'; //Translate
		$this->cp_repeat_pass = 'Повтори паролата';
		$this->cp_sept = 'Септември';
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Покажи моя email?';
		$this->cp_signature = 'Подпис';
		$this->cp_size_max = 'Размерът на аватара е твърде голям. Максималният рарешен разме е  %s на %s пиксела.';
		$this->cp_skin = 'Board Skin'; //Translate
		$this->cp_sub_change = 'Changing Subscriptions'; //Translate
		$this->cp_sub_delete = 'Изтрий';
		$this->cp_sub_expire = 'Дата на изтичане';
		$this->cp_sub_name = 'Име';
		$this->cp_sub_no_params = 'Няма зададени параметри.';
		$this->cp_sub_success = 'Вече си записан %s.';
		$this->cp_sub_type = 'Тип на записване';
		$this->cp_sub_updated = 'Избраните записи за изтрити.';
		$this->cp_topic_option = 'Опции';
		$this->cp_updated = 'Профилът е променен';
		$this->cp_updated1 = 'Аватрът е обновен';
		$this->cp_updated_prefs = 'Настройките с обновени';
		$this->cp_user_exists = 'Има потребител с такова потребителско име.';
		$this->cp_valided = 'Паролата беше променена.';
		$this->cp_view_avatar = 'Искаш ли да виждаш аватарите??';
		$this->cp_view_emoticon = 'Искаш ли да виждаш усмивките?';
		$this->cp_view_signature = 'Искаш ли да виждаш подписите?';
		$this->cp_welcome = 'Добре дошъл в твоя потребителски контролен панел. От тук можеш да настроииш своя акаунт. Моля, избери от опциите горе.';
		$this->cp_width = 'Широчина';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo Id';
		$this->cp_zone = 'Часова зона';
	}

	function email()
	{
		$this->email_blocked = 'Не можете да изпращте email на топзи потребител посредство формата.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email текст:';
		$this->email_no_fields = 'Върнете с еобратно и се уверете, че всички полета са попълнени.';
		$this->email_no_member = 'Няма намерени потребители с такова име';
		$this->email_no_perm = 'Нямате право да изпращате email през този форум.';
		$this->email_sent = 'Твоят email беше изпратен.';
		$this->email_subject = 'Тена:';
		$this->email_to = 'До:';
	}

	function forum()
	{
		$this->forum_by = 'На';
		$this->forum_can_post = 'Можете да отговаряте в този форум.';
		$this->forum_can_topics = 'Можете да разглеждате теми в този форум.';
		$this->forum_cant_post = 'Не можете да отговаряте в този форум.';
		$this->forum_cant_topics = 'Не можете да разглеждате теми в този форум.';
		$this->forum_dot = 'dot'; //Translate
		$this->forum_dot_detail = 'показва, че сте писали в този форум';
		$this->forum_forum = 'Форум';
		$this->forum_guest = 'Гост';
		$this->forum_hot = 'Гореща тема';
		$this->forum_icon = 'Икона на съобщението';
		$this->forum_jump = 'Иди на най-новото мнение';
		$this->forum_last = 'Последно мнение';
		$this->forum_locked = 'Заключена';
		$this->forum_moved = 'Преместена';
		$this->forum_msg = '%s съобщение';
		$this->forum_new = 'Нови мнения';
		$this->forum_new_poll = 'Създай нова анкета';
		$this->forum_new_topic = 'Създай нова тема';
		$this->forum_no_topics = 'Няма теми в този форум.';
		$this->forum_noexist = 'Този форум не съществува.';
		$this->forum_nopost = 'Няма мнения';
		$this->forum_not = 'Няма';
		$this->forum_noview = 'Намате разрешение да преглеждате този форум.';
		$this->forum_pages = 'Страници';
		$this->forum_pinned = 'Забодена';
		$this->forum_pinned_topic = 'Забодена тема';
		$this->forum_poll = 'Анкета';
		$this->forum_regfirst = 'Нямате разрешение да преглеждате този форум, Ако се регистрирате, може да получите такова.';
		$this->forum_replies = 'Отговори';
		$this->forum_starter = 'Starter'; //Translate
		$this->forum_sub = 'Подфорум';
		$this->forum_sub_last_post = 'Последно мнение';
		$this->forum_sub_replies = 'Отговори';
		$this->forum_sub_topics = 'Теми';
		$this->forum_subscribe = 'Уведоми ме, когато някой напише ново мнение';
		$this->forum_topic = 'Тема';
		$this->forum_topics_new = 'Има нови мнения.';
		$this->forum_topics_old = 'Няма нови мнения.';
		$this->forum_views = 'Прегледа';
		$this->forum_write_topics = 'Можете да пускате нова тема.';
	}

	function help()
	{
		$this->help_available_files = 'Помощ';
		$this->help_none = 'Няма help файлове';
	}

	function login()
	{
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.'; //Translate
		$this->login_cookies = 'Cookies трябва да са разрешени.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Влез';
		$this->login_logged = 'Не сте влезли.';
		$this->login_now_out = 'Излязохте успешно.';
		$this->login_out = 'Logging Out'; //Translate
		$this->login_pass = 'Парола';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = 'Сигурен ли си, че искаш да излезеш \'%s\'?';
		$this->login_user = 'Потребителско име';
	}

	function main()
	{
		$this->board_by = 'От';
		$this->charset = 'windows-1251';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Акаунта ти не е активиран.';
		$this->main_activate_resend = 'Изпрати отново Email за активация';
		$this->main_admincp = 'Администраторски контролен панел';
		$this->main_banned = 'Имаш забрана да влизаш във форум.';
		$this->main_code = 'Code'; //Translate
		$this->main_continue = 'Продължи';
		$this->main_cp = 'Контролен панел';
		$this->main_full = 'Пълен';
		$this->main_help = 'help'; //Translate
		$this->main_load = 'зареждане';
		$this->main_login = 'login'; //Translate
		$this->main_logout = 'logout'; //Translate
		$this->main_max_load = 'Много съжаляваме, но,  %s временно е недостъпен, защото има има голям брой потребители онлайн.';
		$this->main_members = 'потребители';
		$this->main_messenger = 'messenger'; //Translate
		$this->main_new = 'нов';
		$this->main_next = 'Следваща';
		$this->main_posts_new = 'Нови мнения';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'Предишна';
		$this->main_queries = 'queries'; //Translate
		$this->main_quote = 'Цитат';
		$this->main_register = 'Регистрирай се';
		$this->main_reminder = 'Напомняне';
		$this->main_reminder_closed = 'Форумът е затворен.';
		$this->main_said = 'каза';
		$this->main_search = 'Търсене';
		$this->main_seconds = 'секунди';
		$this->main_welcome = 'Добре дошъл';
		$this->main_welcome_guest = 'Добре дошъл!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'Изпрати';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'всички';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Изпрати Email на този потребител';
		$this->members_group = 'Група';
		$this->members_joined = 'Присъединил се на';
		$this->members_list = 'Списък с потребителите';
		$this->members_member = 'Потребител';
		$this->members_pm = 'ЛС';
		$this->members_posts = 'Мнения';
		$this->members_send_pm = 'Изпрати лично съобщение на този потребител';
		$this->members_title = 'Заглавие';
		$this->members_vist_www = 'Посети страницата на този потребител\'';
		$this->members_www = 'Web Site'; //Translate
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Сигурен ли си, че искаш да изтриеш това мнение?';
		$this->mod_confirm_topic_delete = 'Сигурен ли си, че искаш да изтриеш тази тема?';
		$this->mod_error_first_post = 'Не можеш да изтриеш първото мнение в тема.';
		$this->mod_error_move_category = 'Не можеш да преместиш тема в друга категория.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Не можеш да преместиш тема във форум, който не съществува.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Не можеш да преместиш тема във форум, в който тя вече същестува.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Описание';
		$this->mod_label_emoticon = 'Превърни емотиконите в картинки?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Премести в';
		$this->mod_label_options = 'Опции';
		$this->mod_label_post_delete = 'Изтрий мнение';
		$this->mod_label_post_edit = 'Редактирай мнение';
		$this->mod_label_title = 'Заглавие';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Изтрий тема';
		$this->mod_label_topic_edit = 'Редактирай тема';
		$this->mod_label_topic_lock = 'Заключи тема';
		$this->mod_label_topic_move = 'Премести тема';
		$this->mod_label_topic_move_complete = 'Изцяло прехвърли темата в нов форум';
		$this->mod_label_topic_move_link = 'Прехвърли темата в нов форум и остави линк към нея в стария.';
		$this->mod_label_topic_pin = 'Закована тема';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'Няма таково мнение.';
		$this->mod_missing_topic = 'Няма такава тема.';
		$this->mod_no_action = 'Трябва да избереш действие.';
		$this->mod_no_post = 'Трябва да избереш мнение .';
		$this->mod_no_topic = 'Трябва да избереш тема.';
		$this->mod_perm_post_delete = 'Нямаш разрешение да изтриеш това мнение.';
		$this->mod_perm_post_edit = 'Нямаш разрешение да редактираш това мнение.';
		$this->mod_perm_topic_delete = 'Нямаш разрешение да изтриеш тази тема.';
		$this->mod_perm_topic_edit = 'Нямаш разрешение да редактираш това мнение.';
		$this->mod_perm_topic_lock = 'Нямаш разрешение да заключиш тази тема.';
		$this->mod_perm_topic_move = 'Нямаш разрешение да преместваш тази тема.';
		$this->mod_perm_topic_pin = 'Нямаш разрешение да заковаваш теми.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Нямаш разрешение да отключваш темата.';
		$this->mod_perm_topic_unpin = 'нямаш разрешение да откачаш темата.';
		$this->mod_success_post_delete = 'Мнението беше успешно изтрито.';
		$this->mod_success_post_edit = 'Мнението беше успешно редактирано.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'Темата беше успешно изтрита.';
		$this->mod_success_topic_edit = 'Темата беше успешно изтрита.';
		$this->mod_success_topic_move = 'Темата беше успешно преместена в нов форум.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'dot'; //Translate
		$this->new_posts_dot_detail = 'показва, че сте писали в този форум';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Форум';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Гореща тема';
		$this->new_posts_last = 'Последно мнение';
		$this->new_posts_locked = 'Заключена';
		$this->new_posts_moved = 'Преместена';
		$this->new_posts_new = 'Нови мнения';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Няма';
		$this->new_posts_pinned = 'Забодена';
		$this->new_posts_poll = 'Анкета';
		$this->new_posts_topic = 'Теми';
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
		$this->pm_cant_del = 'Нямате разрешение да изтриете това съобщение.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Изтрий всички съобщения';
		$this->pm_delete = 'Изтрий';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Съобщението е изтрито.';
		$this->pm_deleted_all = 'Съобщенията са изтрити.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Съобщението не може да бъде изпратено.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inbox'; //Translate
		$this->pm_folder_new = '%s нови';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'От';
		$this->pm_group = 'Група';
		$this->pm_guest = 'Тъй като си гост, не можеш да използваш месинджъра. Влез или се регистрирай.';
		$this->pm_joined = 'Присъединил се на';
		$this->pm_messenger = 'Messenger'; //Translate
		$this->pm_msgtext = 'текст на съобщението';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Трябва да избереш папка.';
		$this->pm_no_member = 'Няма намерен такъв потребител.';
		$this->pm_no_number = 'Не е намерено такова съобщение.';
		$this->pm_no_title = 'Няма тема';
		$this->pm_nomsg = 'Няма съобщения в тази папка.';
		$this->pm_noview = 'Нямате разрешение да видите тези съобщения.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Personal Messenger'; //Translate
		$this->pm_personal_msging = 'Personal Messaging'; //Translate
		$this->pm_pm = 'ЛС';
		$this->pm_posts = 'Мнения';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Отговори';
		$this->pm_send = 'Изпрати';
		$this->pm_sendamsg = 'Изпрати съобщение';
		$this->pm_sendingpm = 'Изпрати ЛС';
		$this->pm_sendon = 'Изпратено';
		$this->pm_success = 'Съобщението е изпратено успешно.';
		$this->pm_sure_del = 'Сигурен ли си, че искаш да изтриеш това съобщение?';
		$this->pm_sure_delall = 'Сигурен ли си, че искаш да изтриеш всички съощения в тази папка?';
		$this->pm_title = 'Заглавие';
		$this->pm_to = 'До';
	}

	function post()
	{
		$this->post_attach = 'Прикачени файлове';
		$this->post_attach_add = 'Добави прикачен файл';
		$this->post_attach_disrupt = 'Добавянето или изтриването на прикачени файлове няма да попречи на писането на мнение.';
		$this->post_attach_failed = 'Прикачването на файл беше неуспешно.';
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = 'Изтрий прикачения файл';
		$this->post_attach_too_large = 'The specified file is too large. The maximum size is %d KB.'; //Translate
		$this->post_cant_create = 'Ти си гост  и нямаш право да пускаш мнение';
		$this->post_cant_create1 = 'Нямаш право да пускаш нова тема.';
		$this->post_cant_enter = 'Гласът ти не беше приет. Или си гласувал вече за тази анкета или нямаш право да гласуваш в нея.';
		$this->post_cant_poll = 'Ти си гост и нямаш право да пускаш нова анкета.';
		$this->post_cant_poll1 = 'You do not have permission to create polls.'; //Translate
		$this->post_cant_reply = 'Нямаш разрешение да пускаш нова тема в този форум.';
		$this->post_cant_reply1 = 'Ти си гост и нямаш право да отговаряш';
		$this->post_cant_reply2 = 'Ти си гост и нямаш право да отговаряш в темите.';
		$this->post_closed = 'Тази тема е затворена.';
		$this->post_create_poll = 'Създай анкета';
		$this->post_create_topic = 'Напиши тема';
		$this->post_creating = 'Писане на тема';
		$this->post_creating_poll = 'Създаване на анкета';
		$this->post_flood = 'Написал си съобщение преди  %s секунди, не можеш да пуснеш ново толкова скоро.<br /><br />Опитай след няколко секунди.';
		$this->post_guest = 'Гост';
		$this->post_icon = 'Икона на съобщението';
		$this->post_last_five = 'Последните 5 мнения в обратен ред';
		$this->post_length = 'Провери дължината';
		$this->post_mbcode_address = 'въвежда адрес';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Син';
		$this->post_mbcode_bold = 'Bold'; //Translate
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Шоколадов';
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Цвят';
		$this->post_mbcode_coral = 'Коралов';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Тъмно оранжев';
		$this->post_mbcode_darkblue = 'Тъмно син';
		$this->post_mbcode_darkred = 'Тъмно червен';
		$this->post_mbcode_deepink = 'Розов';
		$this->post_mbcode_detail = 'въведи описание';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Керемидено червен';
		$this->post_mbcode_font = 'Шрифт';
		$this->post_mbcode_green = 'Зелен';
		$this->post_mbcode_huge = 'Огромен';
		$this->post_mbcode_image = 'Картинка';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Индигов';
		$this->post_mbcode_italic = 'Italic'; //Translate
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Голям';
		$this->post_mbcode_length = 'Постингът ти е "+length+" символа.';
		$this->post_mbcode_limegreen = 'Линмоново зелен';
		$this->post_mbcode_medium = 'Среден';
		$this->post_mbcode_orange = 'Оранжев';
		$this->post_mbcode_orangered = 'Оранжево-червен ';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Виолетов';
		$this->post_mbcode_quote = 'Цитат';
		$this->post_mbcode_red = 'Червен';
		$this->post_mbcode_royalblue = 'Кралски син';
		$this->post_mbcode_sandybrown = 'Пясъчно кафяв';
		$this->post_mbcode_seagreen = 'Морско зелен';
		$this->post_mbcode_sienna = 'Кафеникав';
		$this->post_mbcode_silver = 'Сребрист';
		$this->post_mbcode_size = 'Размер';
		$this->post_mbcode_skyblue = 'Небесно син';
		$this->post_mbcode_small = 'малък';
		$this->post_mbcode_strike = 'Strikethrough'; //Translate
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Синьозелем';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Tiny'; //Translate
		$this->post_mbcode_tomato = 'Оранжеовчервен';
		$this->post_mbcode_underline = 'Underline'; //Translate
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Светло кафяв';
		$this->post_msg = 'Съобщение';
		$this->post_must_msg = 'Трябва да напишеш съобщение, когато пускаш нова тема.';
		$this->post_must_options = 'Трябва да изброиш отговори, когато пускаш нова анкета.';
		$this->post_must_title = 'трябва да напиешеш заглавие, когато пускаш нова тема.';
		$this->post_new_poll = 'Нова анкета';
		$this->post_new_topic = 'Нова тема';
		$this->post_no_forum = 'Няма такъв форум.';
		$this->post_no_topic = 'Няма избрана тема.';
		$this->post_no_vote = 'Трябва да избереш отговор, за да гласуваш.';
		$this->post_option_emoticons = 'Превърни емотиконите в картинки?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'optional'; //Translate
		$this->post_options = 'Опции';
		$this->post_poll_options = 'Опции на анкетата';
		$this->post_poll_row = 'По един на ред';
		$this->post_posted = 'Пуснат на';
		$this->post_posting = 'Мнение';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Отговор';
		$this->post_reply_topic = 'Отговор на темата';
		$this->post_replying = 'Отговори на темата';
		$this->post_replying1 = 'Отговаря';
		$this->post_smiles = 'Смайлита';
		$this->post_too_many_options = 'Трава д аима между два и %d отговора на анкета.';
		$this->post_topic_detail = 'Описание на темата';
		$this->post_topic_title = 'Заглавие на темата';
		$this->post_view_topic = 'Виж цялата тема';
		$this->post_voting = 'Гласуване';
	}

	function printer()
	{
		$this->printer_back = 'Обратно';
		$this->printer_not_found = 'не може да бъде намерена такава тема.';
		$this->printer_not_found_title = 'Не е намерена темата';
		$this->printer_perm_topics = 'Нямаш разрешение да видиш тази тема.';
		$this->printer_perm_topics_guest = 'Нямаш разрешение да видиш тази тема.';
		$this->printer_posted_on = 'Пусната на';
		$this->printer_send = 'Изпринтирай';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM потребителско име';
		$this->profile_av_sign = 'Аватар и подпис';
		$this->profile_avatar = 'Аватар';
		$this->profile_bday = 'Рожден ден';
		$this->profile_contact = 'Контакт';
		$this->profile_email_address = 'Email адрес';
		$this->profile_fav = 'Любим форум';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ номер';
		$this->profile_info = 'Информация';
		$this->profile_interest = 'Интреси';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Последно мнение';
		$this->profile_list = 'Списък с потребители';
		$this->profile_location = 'Място';
		$this->profile_member = 'Потребителска група';
		$this->profile_member_title = 'Ранг на потребителя';
		$this->profile_msn = 'MSN Id';
		$this->profile_must_user = 'трябва да въведеш потребителско име, за да видиш профила.';
		$this->profile_no_member = 'Няма такъв потребител.';
		$this->profile_none = '[ Няма ]';
		$this->profile_not_post = 'не е писал мнение все още.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Мнения';
		$this->profile_private = '[ Скрит ]';
		$this->profile_profile = 'Профил';
		$this->profile_signature = 'Подпис';
		$this->profile_unkown = '[ Непознат ]';
		$this->profile_view_profile = 'Преглежда профил';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo Id';
	}

	function register()
	{
		$this->register_activated = 'Акаунта беше активиран!';
		$this->register_activating = 'Активиране на акаунт';
		$this->register_activation_error = 'Има грешка при активиране на акаунта. Провери дали това е пълния URL адрес от email-а, който получи. Ако проблемът продължи, моля свържи се с администратора на форума.';
		$this->register_confirm_passwd = 'Потвърди парола';
		$this->register_done = 'Регистрира се успешно, можеш да влезеш.';
		$this->register_email = 'Email адрес';
		$this->register_email_invalid = 'email адресът, който въведе е неуспешен.';
		$this->register_email_used = 'Има регистриран потребител с email адреса, който си въвел.';
		$this->register_fields = 'Не всички задължителни полета са попълнени.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'Името е твърде дълго.';
		$this->register_name_taken = 'Има регистриран потребител с това име.';
		$this->register_new_user = 'Желано потребителско име';
		$this->register_pass_invalid = 'невалидна парола. Паролата трябва да е поне 5 симовла дължина.';
		$this->register_pass_match = 'паролите не съвпадат.';
		$this->register_passwd = 'Парола';
		$this->register_reg = 'Регистрирай';
		$this->register_reging = 'Регистриране';
	}

	function search()
	{
		$this->search_advanced = 'Разширени опции';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Основно търсене';
		$this->search_characters = 'Символите в мнение';
		$this->search_day = 'ден';
		$this->search_days = 'дни';
		$this->search_exact_name = 'точно съвпадение';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Търсене за';
		$this->search_forum = 'Форум';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Гост';
		$this->search_in = 'Търсене в';
		$this->search_in_posts = 'Търси само в мнения';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Присъединил се на';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Търсене по съвпадение';
		$this->search_matches = 'съвпадение';
		$this->search_month = 'месец';
		$this->search_months = 'месеци';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'по-нови';
		$this->search_no_results = 'Няма резултати от зададеното търсене.';
		$this->search_no_words = 'Трябва да зададеш думи за търсене.<br /><br />Всяка дума трябва да е с най-малко три символа.';
		$this->search_older = 'по-стари';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Покажи само първото';
		$this->search_partial_name = 'частично';
		$this->search_post_icon = 'Икона на мнение';
		$this->search_posted_on = 'Пуснато на';
		$this->search_posts = 'Мнения';
		$this->search_posts_by = 'Само в съобщения на';
		$this->search_regex = 'Търсене в обичайни изрази';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Връзка в мнение: %d%%';
		$this->search_replies = 'Мнения';
		$this->search_result = 'Резултати от търсене';
		$this->search_search = 'Търси';
		$this->search_select_all = 'Избери всички';
		$this->search_show_posts = 'Покажи мненията, които съвпадат';
		$this->search_sound = 'Търсене по смисъл';
		$this->search_starter = 'Започващ';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'Тема';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'седмица';
		$this->search_weeks = 'седмици';
		$this->search_year = 'година';
	}

	function topic()
	{
		$this->topic_attached = 'Прикачи фай:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Нямаш разрешение да свалиш този файл.';
		$this->topic_attached_title = 'Прикачен файл';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Създай нова анкета';
		$this->topic_create_topic = 'Създай нова тема';
		$this->topic_delete = 'Изтрий';
		$this->topic_delete_post = 'Изтрий това мнение';
		$this->topic_edit = 'Редактирай';
		$this->topic_edit_post = 'Редактирай това мнение';
		$this->topic_edited = 'Последна редакция на %s от %s';
		$this->topic_error = 'Грешка';
		$this->topic_group = 'Група';
		$this->topic_guest = 'Гост';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Присъединил се на';
		$this->topic_level = 'Ниво на потребителя';
		$this->topic_links_aim = 'Изпрати AIM съобщение на %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Изпрати email на %s';
		$this->topic_links_icq = 'Изпрати  ICQ съобщение на %s';
		$this->topic_links_msn = 'Виж %s\'s MSN профила на потребителя';
		$this->topic_links_pm = 'Изпрати лично съобщение на %s';
		$this->topic_links_web = 'Посети страницата на потребителя %s\'';
		$this->topic_links_yahoo = 'изпрати съобщение на %s през Yahoo! Messenger';
		$this->topic_lock = 'Заключи';
		$this->topic_locked = 'Темата е заключена';
		$this->topic_move = 'Премести';
		$this->topic_no_votes = 'Няма гласове за тази анкета.';
		$this->topic_not_found = 'Няма намерена тема';
		$this->topic_not_found_message = 'Няма такава тема.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Опция на темата';
		$this->topic_pages = 'страници';
		$this->topic_perm_view = 'Нямаш разрешение да преглеждаш тази тема.';
		$this->topic_perm_view_guest = 'Нямаш разрешение да преглеждаш тази тема.';
		$this->topic_pin = 'Закови';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Мнения';
		$this->topic_print = 'Виж във версия за принтиране';
		$this->topic_quote = 'Отговори с цитат от това мнение';
		$this->topic_reply = 'Отговори на темата';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Уведоми ме, когато някой отговори по темата';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Отключи';
		$this->topic_unpin = 'Освободи';
		$this->topic_unreg = 'Нерегистриран';
		$this->topic_view = 'Виж резултати';
		$this->topic_viewing = 'Виж тема';
		$this->topic_vote = 'Гласувай';
		$this->topic_vote_count_plur = '%d гласа';
		$this->topic_vote_count_sing = '%d глас';
		$this->topic_votes = 'Гласове';
	}
}
?>