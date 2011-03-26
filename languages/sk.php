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
 * $Id: sk.php,v 1.15 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Slovak language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class sk
{
	function active()
	{
		$this->active_last_action = 'Posledn� akcia';
		$this->active_modules_active = 'Prezeranie akt�vnych u�ivate�ov';
		$this->active_modules_board = 'Prezeranie indexu';
		$this->active_modules_cp = 'Pou�itie ovl�dacieho panela';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Pou��vanie helpu';
		$this->active_modules_login = 'Logging In/Out';
		$this->active_modules_members = 'Prezeranie zoznamu �lenov';
		$this->active_modules_mod = 'Moderovanie';
		$this->active_modules_pm = 'Pou��vanie odkazova�a';
		$this->active_modules_post = 'Prispievanie';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Vyh�ad�vanie';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = '�as';
		$this->active_user = 'U�ivate�';
		$this->active_users = 'Akt�vni u�ivatelia';
	}

	function board()
	{
		$this->board_active_users = 'Akt�vni u�ivatelia';
		$this->board_birthdays = 'Dnes m� narodeniny:';
		$this->board_can_post = 'V tomto f�re m��ete zasiela� odpovede.';
		$this->board_can_topics = 'V tomto f�re m��ete ��ta� pr�spevky, ale nem��ete zaklada� nov� t�my.';
		$this->board_cant_post = 'V tomto f�re nem��ete zasiela� odpovede.';
		$this->board_cant_topics = 'V tomto f�re nem��ete ani zaklada� t�my, ani ��ta� pr�spevky.';
		$this->board_forum = 'F�rum';
		$this->board_guests = 'hosts';
		$this->board_last_post = 'Najnov�� pr�spevok';
		$this->board_mark = 'Prezna� v�etky pr�spevky na "pre��tan�"';
		$this->board_mark1 = 'V�etky pr�spevky a f�ra boli prezna�en� na "pre��tan�"';
		$this->board_members = '�lenovia';
		$this->board_message = '%s Spr�va';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Dnes nem� �iadny �len narodeniny.';
		$this->board_nobody = 'Moment�lne nie je �iadny �len online.';
		$this->board_nopost = '�iadne pr�spevky';
		$this->board_noview = 'Nem�te povolenie na ��tanie tohoto f�ra.';
		$this->board_regfirst = 'Nem�te povolenie na ��tanie tohoto f�ra. Po zaregistrovan� sa mo�no budete ma�.';
		$this->board_replies = 'Odpovede';
		$this->board_stats = '�tatistika';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'T�my';
		$this->board_topics_new = 'V tomto f�re s� nejak� nov� pr�spevky';
		$this->board_topics_old = 'V tomto f�re nie s� �iadne nov� pr�spevky';
		$this->board_users = 'users'; //Translate
		$this->board_write_topics = 'V tomto f�re m�te pr�vo prezera� t�my a vytv�rat nov� .';
	}

	function cp()
	{
		$this->cp_aim = 'AIM Screen Name'; //Translate
		$this->cp_already_member = 'Emailov� adresa, ktor� ste zadali u� bola pridelen� in�mu �lenovi.';
		$this->cp_apr = 'Apr�l';
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'V�e s��asn� prevtelenie';
		$this->cp_avatar_error = 'Chyba prevtelenia';
		$this->cp_avatar_must_select = 'Mus�te si vybra� prevtelenie.';
		$this->cp_avatar_none = 'Nepo��va� prevtelenie.';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Vyberte si prevtelenie';
		$this->cp_avatar_size_height = 'Va�e prevtelenie mus� ma� ve�kost medzi 1 a';
		$this->cp_avatar_size_width = '��rka Va�eho prevtelenia mus� by� medzi 1 a';
		$this->cp_avatar_upload = 'Uploadova� prevtelenie z local HDD';
		$this->cp_avatar_upload_failed = 'Uploadovanie prevtelenia zlyhalo. S�bor neexistuje.';
		$this->cp_avatar_upload_not_image = 'Uploadova� mo�ete iba obr�zky ptr Va�e prevtelenie.';
		$this->cp_avatar_upload_too_large = 'Prevtelenie, ktor� ste zadali pre upload je prive�k�. Maxim�lna povolen� ve�kos� je %d kB.';
		$this->cp_avatar_url = 'Zadajte URL v�ho prevtelenia';
		$this->cp_avatar_use = 'Pou�i� uploadovan� prevtelenie';
		$this->cp_bday = 'Narodeniny';
		$this->cp_been_updated = 'V� profil bol aktualizovan�.';
		$this->cp_been_updated1 = 'Va�e prevtelenie bolo aktualizovan�.';
		$this->cp_been_updated_prefs = 'Va�e nastavenia boli aktualizovan�.';
		$this->cp_changing_pass = 'Zmena hesla';
		$this->cp_contact_pm = 'Dovol�te ostatn�m, aby V�s kontaktovali cez odkazova�?';
		$this->cp_cp = 'Ovl�dac� panel';
		$this->cp_current_avatar = 'Aktu�lne prevtelenie';
		$this->cp_current_time = 'Teraz je %s.';
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Zmena prevtelenia';
		$this->cp_editing_profile = 'Zmena profilu';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Dovol�te ostatn�m, aby V�s kontaktovali cez email?';
		$this->cp_email_invaid = 'Email, ktor� ste zadali vyzer� by� neplatn�.';
		$this->cp_err_avatar = 'Chyba pri aktualiz�cii prevtelenia.';
		$this->cp_err_updating = 'Chyba pri aktualiz�cii profilu.';
		$this->cp_feb = 'Febru�r';
		$this->cp_file_type = 'Prevtelenie, ktor� ste zadali je neplatn�. Uistite sa, �i m� URL spr�vny form�t a �i je doty�n� s�bor typu gif, jpg alebo png.';
		$this->cp_format = 'Va�e meno sa bude zobrazova� ako';
		$this->cp_gmt = '[GMT] Greenwich Mean Time'; //Translate
		$this->cp_gmt_nev1 = '[GMT-1:00] Azores, Cape Verde'; //Translate
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaii'; //Translate
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Island, Samoa'; //Translate
		$this->cp_gmt_nev12 = '[GMT-12:00] International Date Line West'; //Translate
		$this->cp_gmt_nev2 = '[GMT-2:00] Mid-Atlantic'; //Translate
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenland'; //Translate
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->cp_gmt_nev4 = '[GMT-4:00] Atlantic Time Canada'; //Translate
		$this->cp_gmt_nev5 = '[GMT-5:00] Eastern Time US & Canada'; //Translate
		$this->cp_gmt_nev6 = '[GMT-6:00] Central Time US & Canada'; //Translate
		$this->cp_gmt_nev7 = '[GMT-7:00] Mountain Time US & Canada'; //Translate
		$this->cp_gmt_nev8 = '[GMT-8:00] Pacific Time US & Canada'; //Translate
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaska'; //Translate
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris, Prague, Wien, Bratislava';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, New Caledonia'; //Translate
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->cp_gmt_pos2 = '[GMT+2:00] Athens, Cairo, Jerusalem'; //Translate
		$this->cp_gmt_pos3 = '[GMT+3:00] Baghdad, Moscow, Nairobi'; //Translate
		$this->cp_gmt_pos35 = '[GMT+3:30] Tehran'; //Translate
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Calcutta, New Delhi'; //Translate
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->cp_gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapore'; //Translate
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokyo, Seoul'; //Translate
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Ovl�dac� panel u�ivate�a';
		$this->cp_height = 'V��ka';
		$this->cp_icq = 'ICQ ��slo';
		$this->cp_interest = 'Z�ujmy';
		$this->cp_jan = 'Janu�r';
		$this->cp_july = 'J�l';
		$this->cp_june = 'J�n';
		$this->cp_label_edit_avatar = 'Zmena prevtelenia';
		$this->cp_label_edit_pass = 'Zmena hesla';
		$this->cp_label_edit_prefs = 'Zmena nastaven�';
		$this->cp_label_edit_profile = 'Zmena profilu';
		$this->cp_label_edit_subs = 'Editovanie objedn�vok';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Va�e meno mus� by� krat�ie, ako 32 znakov.';
		$this->cp_location = 'Location'; //Translate
		$this->cp_login_first = 'Pre pr�stup k Va�emu ovl�daciemu panelu sa mus�te nalogova�.';
		$this->cp_mar = 'Marec';
		$this->cp_may = 'M�j';
		$this->cp_msn = 'MSN Identity'; //Translate
		$this->cp_must_orig = 'Va�e meno sa mus� zhodova� s origin�lom. M��ete zmeni� iba ve�kos� a medzery.';
		$this->cp_new_notmatch = 'Nov� hesl�, ktor� ste zadali, sa nezhoduj�.';
		$this->cp_new_pass = 'Nov� heslo';
		$this->cp_no_flash = 'Flash prevtelenia tu nie s� povolen�.';
		$this->cp_not_exist = 'D�tum, ktor� ste zadali (%s), neexistuje!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oct�ber';
		$this->cp_old_notmatch = 'P�vodn� heslo, ktor� ste zadali sa nezhoduje s heslom v datab�ze.';
		$this->cp_old_pass = 'P�vodn� heslo';
		$this->cp_pass_notvaid = 'Va�e heslo je neplatn�. Uistite sa, �e obsahuje len platn� znaky ako s� p�smen�, ��sla, poml�ka, podtr��tko alebo medzera.';
		$this->cp_preferences = 'Zmena nastaven�';
		$this->cp_privacy = 'Priv�tne mo�nosti';
		$this->cp_repeat_pass = 'E�te raz nov� heslo';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Zobrazova� v profile aj email?';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Pevtelenie, ktor� ste zadali, je prive�k�. Maxim�lna ve�kos� je povolen� %s na %s pixlov.';
		$this->cp_skin = 'Skin n�stenky';
		$this->cp_sub_change = 'Zmena objedn�vok';
		$this->cp_sub_delete = 'Zmaza�';
		$this->cp_sub_expire = 'D�tum vypr�ania platnosti';
		$this->cp_sub_name = 'N�zov objedn�vky';
		$this->cp_sub_no_params = 'Neboli zadan� �iadne parametre.';
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Typ objedn�vky';
		$this->cp_sub_updated = 'Ozna�en� objedn�vky boli vymazan�.';
		$this->cp_topic_option = 'Mo�nosti t�my';
		$this->cp_updated = 'Profil bol aktualizovan�';
		$this->cp_updated1 = 'Prevtelenie bolo aktualizovan�';
		$this->cp_updated_prefs = 'Nastavenia boli aktualizovan�';
		$this->cp_user_exists = 'U��vate� s tak�mto menom u� existuje.';
		$this->cp_valided = 'Va�e heslo bolo overen� a zmenen�.';
		$this->cp_view_avatar = 'Uk�za� prevtelenia?';
		$this->cp_view_emoticon = 'Uk�za� smajlikov?';
		$this->cp_view_signature = 'Uk�za� podpisy?';
		$this->cp_welcome = 'Bu�te v�tan� v u�ivate�skom ovl�dacom paneli. Odtia�to mo�no nastavova� Va�e konto. Vyberte si z nasleduj�cich mo�nost�.';
		$this->cp_width = '��rka';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo Identity'; //Translate
		$this->cp_zone = '�asov� z�na';
	}

	function email()
	{
		$this->email_blocked = 'Tento �len neprij�ma email z tohoto formul�ra.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Obsah emailu:';
		$this->email_no_fields = 'Vr�te sa o overte, �i s� v�etky polia vyplnen�.';
		$this->email_no_member = '�iaden �len s tak�mto menom sa nena�iel.';
		$this->email_no_perm = 'Nem�te povolenie posiela� emaily z tohoto f�ra.';
		$this->email_sent = 'V� email bol odoslan�.';
		$this->email_subject = 'Predmet:';
		$this->email_to = 'To:'; //Translate
	}

	function forum()
	{
		$this->forum_by = 'Nap�sal';
		$this->forum_can_post = 'V tomto f�re m��ete odpoveda�.';
		$this->forum_can_topics = 'V tomto f�re si m��ete prezera� t�my.';
		$this->forum_cant_post = 'V tomto f�re nem�te povolenie odpoveda�.';
		$this->forum_cant_topics = 'V tomto f�re nem�te povolenie prezera� t�my.';
		$this->forum_dot = 'dot(to �o je?)';
		$this->forum_dot_detail = 'ukazuje, �e ste pod dan� t�mu prispeli';
		$this->forum_forum = 'F�rum';
		$this->forum_guest = 'Guest'; //Translate
		$this->forum_hot = 'd�le�it�';
		$this->forum_icon = 'Ikona spr�vy';
		$this->forum_jump = 'Hop na najnov�ie pr�spevky pod touto t�mou';
		$this->forum_last = 'Najnov�� pr�spevok';
		$this->forum_locked = 'Zamknut�';
		$this->forum_moved = 'Presunut�';
		$this->forum_msg = '%s Spr�va';
		$this->forum_new = 'nov�';
		$this->forum_new_poll = 'Zalo�i� nov� hlasovanie';
		$this->forum_new_topic = 'Zalo�i� nov� t�mu';
		$this->forum_no_topics = 'V tomto f�re nie s� �iadne t�my.';
		$this->forum_noexist = 'Zadan� f�rum neexistuje.';
		$this->forum_nopost = 'Nie s� pr�spevky';
		$this->forum_not = 'm�lo';
		$this->forum_noview = 'Nem�te povolenie na prezeranie f�r.';
		$this->forum_pages = 'Str�nky';
		$this->forum_pinned = 'Pri�pendlen�';
		$this->forum_pinned_topic = 'Pri�pendlen� t�ma';
		$this->forum_poll = 'Hlasovanie';
		$this->forum_regfirst = 'Nem�te povolenie na prezeranie f�r. Ak sa zaregistrujete, mo�no budete ma�.';
		$this->forum_replies = 'Odpovede';
		$this->forum_starter = 'Zakladate�';
		$this->forum_sub = 'Pod-F�rum';
		$this->forum_sub_last_post = 'Najnov�� pr�spevok';
		$this->forum_sub_replies = 'Odpovede';
		$this->forum_sub_topics = 'T�my';
		$this->forum_subscribe = 'Posla� emailom nov� pr�spovky v tomto f�re';
		$this->forum_topic = 'T�ma';
		$this->forum_topics_new = 'V tomto f�re s� nejak� nov� pr�spevky.';
		$this->forum_topics_old = 'V tomto f�re nie s� �iadne nov� pr�spevky';
		$this->forum_views = 'Viden�';
		$this->forum_write_topics = 'V tomto f�re m�te povolenie zaklada� t�my.';
	}

	function help()
	{
		$this->help_available_files = 'H�lp';
		$this->help_none = 'V datab�ze nie s� �iadne s�bory s helpom';
	}

	function login()
	{
		$this->login_cant_logged = 'Pravdepodobne nie ste prihl�sen�. Sk�ste skontrolova� V� login a heslo.<br /><br />S� citliv� na ve�k� a mal� znaky, tak�e \'UsErNaMe\' nie je to ist�, �o \'Username\'. A taktie� si overte, �i s� vo Va�om prehliada�i povolen� cookies.';
		$this->login_cookies = 'Pre nalogovanie mus�te povoli� cookies.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Logging In'; //Translate
		$this->login_logged = 'Teraz ste nalogovan�.';
		$this->login_now_out = 'Teraz ste odlogovan�.';
		$this->login_out = 'Logging Out'; //Translate
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = '\'%s\', ur�ite sa chcete odhl�si�?';
		$this->login_user = 'Meno u�ivate�a';
	}

	function main()
	{
		$this->board_by = 'Od';
		$this->charset = 'windows-1250';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'V� ��et e�te nebol aktivovan�.';
		$this->main_activate_resend = 'Znovu posla� aktiva�n� email';
		$this->main_admincp = 'nastavenia f�r';
		$this->main_banned = 'V�m bolo �ia� komplet cel� f�rum zatrhnut�.';
		$this->main_code = 'Code'; //Translate
		$this->main_continue = 'Pokra�ova�';
		$this->main_cp = 'ovl�dac� panel';
		$this->main_full = 'Full'; //Translate
		$this->main_help = 'h�lp';
		$this->main_load = 'load'; //Translate
		$this->main_login = 'login'; //Translate
		$this->main_logout = 'logout'; //Translate
		$this->main_max_load = 'Je n�m ��to, ale %s moment�lne nie je dostupn� k�li stra�nej mase online u�ivate�ov.';
		$this->main_members = '�lenovia';
		$this->main_messenger = 'odkazova�';
		$this->main_new = 'nov�';
		$this->main_next = 'nasleduj�ce';
		$this->main_posts_new = 'nov�';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'predo�l�';
		$this->main_queries = 'DB dotazov';
		$this->main_quote = 'Cit�cia';
		$this->main_register = 'registr�cia';
		$this->main_reminder = 'HoSiPa';
		$this->main_reminder_closed = 'F�rum je uzavret� a pr�stupn� len pre adminov.';
		$this->main_said = 'poviedali';
		$this->main_search = 'h�adanie';
		$this->main_seconds = 'sec';
		$this->main_welcome = 'Vitajte';
		$this->main_welcome_guest = 'Vitajte!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'OK';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'v�etko';
		$this->members_email = 'email';
		$this->members_email_member = 'po�li email tomuto �lenovi';
		$this->members_group = 'skupina';
		$this->members_joined = 'registr�cia';
		$this->members_list = 'zoznam �lenov';
		$this->members_member = '�len';
		$this->members_pm = 'odkazova�';
		$this->members_posts = 'pr�spevky';
		$this->members_send_pm = 'posla� tomuto �lenovi odkaz';
		$this->members_title = 'titul';
		$this->members_vist_www = 'nav�t�vi� webstr�nku tohoto �lena';
		$this->members_www = 'webstr�nka';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Ur�ite chcete zmaza� tento pr�spevok?';
		$this->mod_confirm_topic_delete = 'Ur�ite chcete zmaza� t�to t�mu?';
		$this->mod_error_first_post = 'Nem��ete zmaza� prv� pr�spevok pod t�mou.';
		$this->mod_error_move_category = 'Nem��ete presun�� t�mu do kateg�rie.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nem��ete presun�� t�mu do f�ra. ktor� neexistuje.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nem��ete presun�� t�mu do f�ra, v ktorom sa moment�lne nach�dza.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'Konvertova� textov�ch smajlikov na obr�zky?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Presun�� ..';
		$this->mod_label_options = 'Mo�nosti';
		$this->mod_label_post_delete = 'Zmaza� pr�spevok';
		$this->mod_label_post_edit = 'Editova� pr�spevok';
		$this->mod_label_title = 'Nadpis';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Zmaza� t�mu';
		$this->mod_label_topic_edit = 'Editova� t�mu';
		$this->mod_label_topic_lock = 'Zamkn�� t�mu';
		$this->mod_label_topic_move = 'Presun�� t�mu';
		$this->mod_label_topic_move_complete = 'Kompletne presun�� t�mu do nov�ho f�ra';
		$this->mod_label_topic_move_link = 'Presun�� t�mu do nov�ho f�ra a zanecha� link na nov� umiestnenie v p�vodnom f�re.';
		$this->mod_label_topic_pin = 'Pri�pendli� t�mu';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = '�pecifikovan� pr�spevok neexistuje.';
		$this->mod_missing_topic = '�pecifikovan� t�ma neexistuje.';
		$this->mod_no_action = 'Mus�te �pecifikova� �innos�.';
		$this->mod_no_post = 'Mus�te �pecifikova� pr�spevok.';
		$this->mod_no_topic = 'Mus�te �pecifikova� t�mu.';
		$this->mod_perm_post_delete = 'Nem�te povolenie na zmazanie tohoto pr�spevku.';
		$this->mod_perm_post_edit = 'Nem�te povolenie na edit�ciu tohoto pr�spevku.';
		$this->mod_perm_topic_delete = 'Nem�te povolenie na zmazanie tejto t�my.';
		$this->mod_perm_topic_edit = 'Nem�te povolenie na edit�ciu tejto t�my.';
		$this->mod_perm_topic_lock = 'Nem�te povolenie na zamknutie tejto t�my.';
		$this->mod_perm_topic_move = 'Nem�te povolenie na pres�vanie tejto t�my.';
		$this->mod_perm_topic_pin = 'Nem�te povolenie na pri�pendlenie tejto t�my.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Nem�te povolenie na odomknutie tejto t�my.';
		$this->mod_perm_topic_unpin = 'Nem�te povolenie na od�pendlenie tejto t�my.';
		$this->mod_success_post_delete = 'Pr�spevok bol �spe�ne zmazan�.';
		$this->mod_success_post_edit = 'Pr�spevok bol �spe�ne zeditovan�.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'T�ma bola �spe�ne zmazan�';
		$this->mod_success_topic_edit = 'T�ma bola �spe�ne zeditovan�.';
		$this->mod_success_topic_move = 'T�ma bola �spe�ne presunut� do nov�ho f�ra.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'dot(to �o je?)';
		$this->new_posts_dot_detail = 'ukazuje, �e ste pod dan� t�mu prispeli';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'F�rum';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'd�le�it�';
		$this->new_posts_last = 'Najnov�� pr�spevok';
		$this->new_posts_locked = 'Zamknut�';
		$this->new_posts_moved = 'Presunut�';
		$this->new_posts_new = 'nov�';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'm�lo';
		$this->new_posts_pinned = 'Pri�pendlen�';
		$this->new_posts_poll = 'Hlasovanie';
		$this->new_posts_topic = 'T�ma';
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
		$this->pm_cant_del = 'Nem�te povolenie zmaza� tento odkaz.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Zmaza� v�etky odkazy';
		$this->pm_delete = 'Zmaza�';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Odkaz bol zmazan�.';
		$this->pm_deleted_all = 'Odkazy boli zmazan�.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'V� odkaz sa ned� posla�. Uistite sa, �e ster vyplnili v�etky povinn� polia.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inbox'; //Translate
		$this->pm_folder_new = '%s new'; //Translate
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Ako n�v�tevn�k (guest) nem�te povolenie pou��va� odkazova�. Pros�m nalogujte sa alebo sa zaregistrujte.. alebo sa dajte vypcha�.';
		$this->pm_joined = 'Registr�cia';
		$this->pm_messenger = 'Odkazova�';
		$this->pm_msgtext = 'Text odkazu';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Mus�te zada� adres�r.';
		$this->pm_no_member = 'Tak�to ID nem� �iadny �len.';
		$this->pm_no_number = 'Tak�to ��slo nem� �iadny odkaz.';
		$this->pm_no_title = 'Ch�ba predmet';
		$this->pm_nomsg = 'V tomto adres�ri nie s� �iadne odkazy.';
		$this->pm_noview = 'Nem�te povolenie prezera� si tento odkaz.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Odkazova�';
		$this->pm_personal_msging = 'Posielanie odkazu';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Pr�spevky';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Odpoveda�';
		$this->pm_send = 'Posla�';
		$this->pm_sendamsg = 'Posla� odkaz';
		$this->pm_sendingpm = 'Posielanie odkazu';
		$this->pm_sendon = 'Odoslan� v';
		$this->pm_success = 'V� odkaz bol �spe�ne zaslan�.';
		$this->pm_sure_del = 'Ur�ite chcete zmaza� tento odkaz?';
		$this->pm_sure_delall = 'Ur�ite chcete zmaza� v�etky odkazy v tomto adres�ri?';
		$this->pm_title = 'Nadpis';
		$this->pm_to = 'To'; //Translate
	}

	function post()
	{
		$this->post_attach = 'Pr�lohy';
		$this->post_attach_add = 'Prida� pr�lohu';
		$this->post_attach_disrupt = 'Prid�vanie alebo uberanie pr�loh nenaru�� V� pr�spevok.';
		$this->post_attach_failed = 'Upload pr�lohy neuspel. S�bor, ktor� ste �pecifikovali asi neexistuje.';
		$this->post_attach_not_allowed = 'S�bory tohoto typu nemo�no prilo�i�.';
		$this->post_attach_remove = 'Odobra� pr�lohu';
		$this->post_attach_too_large = '�pecifikovan� s�bor je prive�k�. Maxim�lna povolen� ve�kos� je %d kB.';
		$this->post_cant_create = 'Ako n�v�tevn�k (guest) nem�te povolenie zaklada� t�my. Ak sa zaregistrujete, mo�no budete ma�.';
		$this->post_cant_create1 = 'Nem�te povolenie zaklada� t�my.';
		$this->post_cant_enter = 'Va�e hlasovanie je neplatn�. bu� ste o tejto ot�zke u� hlasovali alebo nem�te povolenie hlasova�.';
		$this->post_cant_poll = 'Ako n�v�tevn�k (guest) nem�te povolenie zaklada� hlasovania. Ak sa zaregistrujete, mo�no budete ma�.';
		$this->post_cant_poll1 = 'Nem�te povolenie zaklada� hlasovania.';
		$this->post_cant_reply = 'Nem�te povolenie odpoveda� na t�my pod t�mto f�rom.';
		$this->post_cant_reply1 = 'Ako n�v�tevn�k (guest) nem�te povolenie odpoveda� na t�my. Ak sa zaregistrujete, mo�no budete ma�.';
		$this->post_cant_reply2 = 'Nem�te povolenie odpoveda� na t�my.';
		$this->post_closed = 'T�ma bola uzavret�.';
		$this->post_create_poll = 'Zalo�i� hlasovanie';
		$this->post_create_topic = 'Zalo�i� t�mu';
		$this->post_creating = 'Zalo�enie t�my';
		$this->post_creating_poll = 'Zalo�enie hlasovania';
		$this->post_flood = 'Poslali ste pr�spevok v priebehu uplynul�ch %s sek�nd a pr�ve teraz asi nebude mo�n� znova prispie�.<br /><br />Pros�m, sk�ste to znova za nieko�ko sek�nd.';
		$this->post_guest = 'Guest'; //Translate
		$this->post_icon = 'Ikona pr�spevku';
		$this->post_last_five = 'Posledn�ch p� pr�spevkov v opa�nom porad�';
		$this->post_length = 'Kontrola d�ky';
		$this->post_mbcode_address = 'Zadajte adresu';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blue'; //Translate
		$this->post_mbcode_bold = 'Bold'; //Translate
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Chocolate'; //Translate
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Color'; //Translate
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Dark Blue'; //Translate
		$this->post_mbcode_darkred = 'Dark Red'; //Translate
		$this->post_mbcode_deepink = 'Deep Pink'; //Translate
		$this->post_mbcode_detail = 'Zadajte popis';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Firebrick Red'; //Translate
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Green'; //Translate
		$this->post_mbcode_huge = 'Huge'; //Translate
		$this->post_mbcode_image = 'Image'; //Translate
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Italic'; //Translate
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Large'; //Translate
		$this->post_mbcode_length = 'V� pr�spevok m� "+length+" znakov.';
		$this->post_mbcode_limegreen = 'Lime Green'; //Translate
		$this->post_mbcode_medium = 'Medium'; //Translate
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange Red'; //Translate
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Purple'; //Translate
		$this->post_mbcode_quote = 'Quote'; //Translate
		$this->post_mbcode_red = 'Red'; //Translate
		$this->post_mbcode_royalblue = 'Royal Blue'; //Translate
		$this->post_mbcode_sandybrown = 'Sandy Brown'; //Translate
		$this->post_mbcode_seagreen = 'Sea Green'; //Translate
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Silver'; //Translate
		$this->post_mbcode_size = 'Size'; //Translate
		$this->post_mbcode_skyblue = 'Sky Blue'; //Translate
		$this->post_mbcode_small = 'Small'; //Translate
		$this->post_mbcode_strike = 'Strikethrough'; //Translate
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Tiny'; //Translate
		$this->post_mbcode_tomato = 'Tomato'; //Translate
		$this->post_mbcode_underline = 'Underline'; //Translate
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = 'Pr�spevok';
		$this->post_must_msg = 'Mus�te e�te nap�sa� samotn� odkaz.';
		$this->post_must_options = 'Mus�te zada� mo�n� odpovede pre nov� hlasovanie.';
		$this->post_must_title = 'Mus�te zada� nadpis pre nov� t�mu.';
		$this->post_new_poll = 'Nov� hlasovanie';
		$this->post_new_topic = 'Nov� t�ma';
		$this->post_no_forum = 'Toto f�rum sa nena�lo.';
		$this->post_no_topic = 'Ne�pecifikovali ste t�mu.';
		$this->post_no_vote = 'Ak chcete hlasova�, je vhodn� zvoli� si odpove�.';
		$this->post_option_emoticons = 'Konvertova� textov�ch smajlikov na obr�zky?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'nepovinn�';
		$this->post_options = 'Mo�nosti';
		$this->post_poll_options = 'Moznosti hlasovania';
		$this->post_poll_row = 'Jeden na riadok';
		$this->post_posted = 'Zaslan�: ';
		$this->post_posting = 'Posiela sa';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Odpoveda�';
		$this->post_reply_topic = 'Odpoveda� na t�mu';
		$this->post_replying = 'Odpoved� sa na t�mu';
		$this->post_replying1 = 'Odpoved� sa';
		$this->post_smiles = 'Smajlici (kliknut�m vlo�i�)';
		$this->post_too_many_options = 'Hlasovanie mus� ma� minim�lne 2 a maxim�lne %d mo�n�ch odpoved�.';
		$this->post_topic_detail = 'Popis t�my';
		$this->post_topic_title = 'Nadpis t�my';
		$this->post_view_topic = 'Uk�za� cel� t�mu';
		$this->post_voting = 'Hlasuje sa';
	}

	function printer()
	{
		$this->printer_back = 'Back'; //Translate
		$this->printer_not_found = 'T�ma sa nena�la. Mo�no bola zmazan�, presunut� alebo v�bec nebola.';
		$this->printer_not_found_title = 'T�ma sa nena�la';
		$this->printer_perm_topics = 'Nem�te povolenie na prezeranie t�m.';
		$this->printer_perm_topics_guest = 'Nem�te povolenie na prezeranie t�m. Ak sa zaregistrujete, mo�no budete ma�.';
		$this->printer_posted_on = 'Zaslan�: ';
		$this->printer_send = 'Odosla� na tla�iare�';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name'; //Translate
		$this->profile_av_sign = 'Prevtelenie a podpis';
		$this->profile_avatar = 'Prevtelenie';
		$this->profile_bday = 'Narodeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'Emailov� adresa';
		$this->profile_fav = 'Ob��ben� f�rum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ Number'; //Translate
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Za�uby';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Najnov�� pr�spevok';
		$this->profile_list = 'Zoznam �lenov';
		$this->profile_location = 'Location'; //Translate
		$this->profile_member = 'Skupina �lenov';
		$this->profile_member_title = 'Titul �lena';
		$this->profile_msn = 'MSN Identity'; //Translate
		$this->profile_must_user = 'Ak si chcete prezrie� profil, mus�te �pecifikova� u�ivate�a.';
		$this->profile_no_member = 'S tak�mto ID nem�me �iadneho u�ivate�a. Mo�no bolo toto konto zru�en�.';
		$this->profile_none = '[ None(ni� tu nie je) ]';
		$this->profile_not_post = 'e�te sa to nezaslalo.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Odkazy';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Pr�spevky';
		$this->profile_private = '[ S�kromno ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Nezn�mo ]';
		$this->profile_view_profile = 'Prezeranie profilu';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo Identity'; //Translate
	}

	function register()
	{
		$this->register_activated = 'Va�e konto bolo aktivovan�!';
		$this->register_activating = 'Aktiv�cia konta';
		$this->register_activation_error = 'Aktivovanie Va�eho konta zlyhalo. Skontrolujte, �i je vo Va�om prehliada�i pl� URL cesta z aktiva�n�ho emailu. Ak probl�m zotrv�va, skontaktujte sa s administr�torom f�ra.';
		$this->register_confirm_passwd = 'Potvrdenie hesla';
		$this->register_done = 'Boli ste zaregistrovan�! Teraz sa m��ete nalogova�.';
		$this->register_email = 'Emailov� adresa';
		$this->register_email_invalid = 'Zadan� emailov� adresa je neplatn�.';
		$this->register_email_used = 'Zadan� emailov� adresa u� bola pridelen� in�mu �lenovi.';
		$this->register_fields = 'Neboli vyplnen� v�etky polia.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'Boli ste zaregistrovan�. Na adresu %s bol zaslan� email s inform�ciami oo aktiv�cii Va�eho konta. Va�e konto bude obmedzen�, pokia� si ho neaktivujete.';
		$this->register_name_invalid = 'Zadan� meno je pridlh�.';
		$this->register_name_taken = 'Toto �lensk� meno je u� obsaden�.';
		$this->register_new_user = '�elan� �lensk� meno';
		$this->register_pass_invalid = 'Zadan� heslo je neplatn�. Uistite sa, �e pou��vate len platn� znaky ako s� p�smen�, ��sla, poml�ka, podtr��tko alebo medzera a obsahuje aspo� 5 znakov.';
		$this->register_pass_match = 'Hesl�, ktor� ste zadali sa nezhoduj�.';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Registr�cia';
		$this->register_reging = 'Prebieha registr�cia';
	}

	function search()
	{
		$this->search_advanced = '�al�ie mo�nosti';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Z�kladn� vyh�ad�vanie';
		$this->search_characters = 'znakov z pr�spevku';
		$this->search_day = 'de�';
		$this->search_days = 'dni';
		$this->search_exact_name = 'presn� n�zov';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'H�ada�';
		$this->search_forum = 'F�rum';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Guest'; //Translate
		$this->search_in = 'H�ada� v';
		$this->search_in_posts = 'H�ada� iba v pr�spevkoch';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Registr�cia';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'H�adanie (presn� zhoda)';
		$this->search_matches = 'N�lezy';
		$this->search_month = 'mesiac';
		$this->search_months = 'mesiace';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'nov��ch';
		$this->search_no_results = 'Va�e h�adanie dopadlo bezv�sledne.';
		$this->search_no_words = 'Ak chcete vyh�ad�va�, mus�te zada� nejak� slov�.<br /><br />Ka�d� slovo mus� ma� viac ako 3 znaky vr�tane p�smen, ��siel, apostrofov a podtr��tok.';
		$this->search_older = 'star��ch';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Zobrazi� len prv�ch';
		$this->search_partial_name = '�iasto�n� n�zov name';
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Zaslan�: ';
		$this->search_posts = 'Pr�spevky';
		$this->search_posts_by = 'Len pr�spevky od u��vate�a';
		$this->search_regex = 'H�ada� pomocou regul�rnych v�razov';
		$this->search_regex_failed = 'V� regul�rny v�raz neuspel. Pros�m prezrite si MySQL documentation, sta� o regul�rnych v�razoch.';
		$this->search_relevance = 'Platnos� pr�spevku: %d%%';
		$this->search_replies = 'Pr�spevky';
		$this->search_result = 'V�sledky h�adania';
		$this->search_search = 'Za�a� h�adanie';
		$this->search_select_all = 'ka�dom';
		$this->search_show_posts = 'Zobrazi� odpovedaj�ce pr�spevky';
		$this->search_sound = 'H�ada� pod�a zvuku (sound)';
		$this->search_starter = 'Zakladate�';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'T�ma';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 't��de�';
		$this->search_weeks = 't��dne';
		$this->search_year = 'rok';
	}

	function topic()
	{
		$this->topic_attached = 'Prilo�en� s�bor:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Nem�te povolenie na download tohoto s�boru.';
		$this->topic_attached_title = 'Nadpis prilo�en�ho s�boru';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Zalo�i� nov� hlasovanie';
		$this->topic_create_topic = 'Zalo�i� nov� t�mu';
		$this->topic_delete = 'Zmaza�';
		$this->topic_delete_post = 'Zmaza� tento pr�spevok';
		$this->topic_edit = 'Editova�';
		$this->topic_edit_post = 'Editova� tento pr�spevok';
		$this->topic_edited = 'Naposledy editovan� v %s u�ivate�om %s';
		$this->topic_error = 'Error'; //Translate
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'N�v�tevn�k (Guest)';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Registr�cia';
		$this->topic_level = '�lensk� level';
		$this->topic_links_aim = 'Zasla� AIM spr�vu u�ivate�ovi %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Zasla� email u�ivate�ovi %s';
		$this->topic_links_icq = 'Zasla� ICQ spr�vu u�ivate�ovi %s';
		$this->topic_links_msn = 'Zobrazi�  MSN profil u�ivate�a %s';
		$this->topic_links_pm = 'Zasla� odkaz u�ivate�ovi %s';
		$this->topic_links_web = 'Nav�t�vi� web str�nku u�ivate�a %s';
		$this->topic_links_yahoo = 'Zasla�S spr�vu pomocou Yahoo! Messengera u�ivate�ovi %s';
		$this->topic_lock = 'Zamkn��';
		$this->topic_locked = 'T�ma je zamknut�';
		$this->topic_move = 'Presun��';
		$this->topic_no_votes = 'Tu e�te nikto nehlasoval.';
		$this->topic_not_found = 'T�ma sa nena�la';
		$this->topic_not_found_message = 'T�ma sa nena�la. Mo�no bola zmazan�, presunut� alebo nebola v�bec.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Mo�nosti t�my';
		$this->topic_pages = 'Str�nky';
		$this->topic_perm_view = 'Nem�te povolenie na prezeranie t�m.';
		$this->topic_perm_view_guest = 'Nem�te povolenie na prezeranie t�m. Ak sa zaregistrujete, mo�no budete ma�.';
		$this->topic_pin = 'Pri�pendli�';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Pr�spevky';
		$this->topic_print = 'Zobrazi� vytla�i�n� verziu';
		$this->topic_quote = 'Odpoveda� s cit�ciou z tohoto pr�spevku';
		$this->topic_reply = 'Odpoveda� na t�mu';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Zasielanie emailu s dopove�ami na t�to t�mu';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Odomkn��';
		$this->topic_unpin = 'Od�penli�';
		$this->topic_unreg = 'Neregistrovan�';
		$this->topic_view = 'Zobrazi� v�sledky';
		$this->topic_viewing = 'Prezeranie t�m';
		$this->topic_vote = 'Zahlasova�';
		$this->topic_vote_count_plur = '%d hlasov';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'Hlasovania';
	}
}
?>