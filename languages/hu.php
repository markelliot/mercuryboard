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
 * $Id: hu.php,v 1.27 2006/07/26 17:56:19 jon Exp $
 **/

/**
 * Hungarian language module
 *
 * @author Sz�sz Attila <helpdesk@maximedia.hu>
 * @since 1.0.0
 **/
class hu
{
	function active()
	{
		$this->active_last_action = 'Utols� m�velet';
		$this->active_modules_active = 'Akt�v tagok';
		$this->active_modules_board = 'Index';
		$this->active_modules_cp = 'Be�ll�t�sok megjelen�t�se';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Seg�ts�g';
		$this->active_modules_login = 'Ki/Bejelentkez�s';
		$this->active_modules_members = 'Tagok list�ja';
		$this->active_modules_mod = 'Moder�l�s';
		$this->active_modules_pm = '�zenetk�ld�';
		$this->active_modules_post = 'Be�r�s';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Keres�s';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Id�';
		$this->active_user = 'Tag';
		$this->active_users = 'Akt�v tagok';
	}

	function board()
	{
		$this->board_active_users = 'Akt�v felhaszn�l�k';
		$this->board_birthdays = 'Sz�linapok:';
		$this->board_can_post = 'V�laszolhatsz ebben a f�rumban.';
		$this->board_can_topics = 'Belen�zhetsz, de nem �rhatsz ebbe a f�rumba.';
		$this->board_cant_post = 'Nem v�laszolhatsz ebben a f�rumban.';
		$this->board_cant_topics = 'Nem n�zheted meg, �s nem �rhatsz ebbe a f�rumba.';
		$this->board_forum = 'F�rum';
		$this->board_guests = 'vend�g';
		$this->board_last_post = 'Utols� be�r�s';
		$this->board_mark = 'Be�r�s olvasottk�nt jel�l�se';
		$this->board_mark1 = 'Minden be�r�s olvasottk�nt van jel�lve.';
		$this->board_members = 'tag';
		$this->board_message = '%s �zenet';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Ma senkinek sincs sz�linapja.';
		$this->board_nobody = 'Egyetlen tag sincs bejelentkezve.';
		$this->board_nopost = 'Nincs be�r�s';
		$this->board_noview = 'Nincs jogod ide ben�zni.';
		$this->board_regfirst = 'Nincs jogod ide ben�zni. HA regisztr�lod magad, akkor igen.';
		$this->board_replies = 'V�laszok';
		$this->board_stats = 'Statisztik�k';
		$this->board_stats_string = '%s regisztr�lt tag. �dv�z�lj�k leg�jabb tagunkat, %s -t.<br /> �sszesen %s t�ma �s %s v�lasz a(z) %s be�r�sra.';
		$this->board_topics = 'T�m�k';
		$this->board_topics_new = 'Nincs �j t�ma ebben a f�rumban.';
		$this->board_topics_old = 'Nincs �j be�r�s ebben a f�rumban.';
		$this->board_users = 'tag';
		$this->board_write_topics = 'Jogod van t�m�t nyitni ebben a f�rumban.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM n�v';
		$this->cp_already_member = 'Az �ltalad megadott email c�met m�r valaki haszn�lja.';
		$this->cp_apr = '�prilis';
		$this->cp_aug = 'Augusztus';
		$this->cp_avatar_current = 'Kisk�p';
		$this->cp_avatar_error = 'Kisk�p hiba';
		$this->cp_avatar_must_select = 'Ki kell v�lasztanod egy kisk�pet.';
		$this->cp_avatar_none = 'Ne haszn�ljon kisk�pet.';
		$this->cp_avatar_pixels = 'pixel';
		$this->cp_avatar_select = 'V�lassz egy kisk�pet';
		$this->cp_avatar_size_height = 'A kisk�ped magass�ga: 1 - ';
		$this->cp_avatar_size_width = 'A kisk�ped sz�less�ge: 1 - ';
		$this->cp_avatar_upload = 'T�lts fel egy kisk�pet a g�pedr�l';
		$this->cp_avatar_upload_failed = 'A kisk�p felt�lt�se nem siker�lt. Az �ltalad megadott f�jl tal�n nem l�tezik.';
		$this->cp_avatar_upload_not_image = 'Csak saj�t haszn�latra t�lthetsz fel kisk�pet.';
		$this->cp_avatar_upload_too_large = 'A felt�lt�sre v�r� kisk�p t�l nagy. A maximum m�ret: %d kilobyte.';
		$this->cp_avatar_url = 'Add meg az URL c�met a kisk�phez';
		$this->cp_avatar_use = 'Felt�lt�tt kisk�p haszn�lata';
		$this->cp_bday = 'Sz�linap';
		$this->cp_been_updated = 'Az adatlapd friss�tve lett.';
		$this->cp_been_updated1 = 'A kisk�ped fel�l�rva.';
		$this->cp_been_updated_prefs = 'Be�ll�t�said friss�tve.';
		$this->cp_changing_pass = 'Jelsz� szerkeszt�se';
		$this->cp_contact_pm = 'Megengeded, hogy a t�bbiek priviben felkeressenek?';
		$this->cp_cp = 'Be�ll�t�pult';
		$this->cp_current_avatar = 'Aktu�lis kisk�p';
		$this->cp_current_time = 'Most %s.';
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Kisk�p szerkeszt�se';
		$this->cp_editing_profile = 'Adatlap szerkeszt�se';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'K�ldhetnek emailt neked a t�bbi tagok?';
		$this->cp_email_invaid = 'A be�rt email c�m nem helyes.';
		$this->cp_err_avatar = 'Kisk�p felt�lt�si hiba';
		$this->cp_err_updating = 'Adatlap friss�t�si hiba';
		$this->cp_feb = 'Febru�r';
		$this->cp_file_type = 'A megadott URL alatt nics meg a k�p. Elfogadott terjeszt�sek: gif, jpg, png.';
		$this->cp_format = 'N�v szerkeszt�se';
		$this->cp_gmt = '[GMT] Greenwich Id�';
		$this->cp_gmt_nev1 = '[GMT-1:00] Azori szigetek, Z�ld Fok';
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaii'; //Translate
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Szigetek, Samoa';
		$this->cp_gmt_nev12 = '[GMT-12:00] Nemzetk�zi nyugati id�s�v';
		$this->cp_gmt_nev2 = '[GMT-2:00] K�z�p-Atlanti id�';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenland'; //Translate
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->cp_gmt_nev4 = '[GMT-4:00] Kanada, Atlanti id�';
		$this->cp_gmt_nev5 = '[GMT-5:00] Keleti id� E� & Kanada';
		$this->cp_gmt_nev6 = '[GMT-6:00] K�zponti id� E� & Kanada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Hegyv�d�ki id� E� & Kanada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Csendes-�ce�ni id� E� & Kanada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaszka';
		$this->cp_gmt_pos1 = '[GMT+1:00] Amszterdam, Berlin, R�ma, P�rizs';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, �j Caledonia';
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->cp_gmt_pos2 = '[GMT+2:00] Ath�n, Kair�, Jeruzs�lem';
		$this->cp_gmt_pos3 = '[GMT+3:00] Bagdad, Moszkva, Nairobi';
		$this->cp_gmt_pos35 = '[GMT+3:30] Teher�n';
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Kalkutta, �j Delhi';
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->cp_gmt_pos8 = '[GMT+8:00] Peking, Hong Kong, Szingap�r';
		$this->cp_gmt_pos9 = '[GMT+9:00] Toki�, Sz�ul';
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Felhaszn�l�i vez�rl�pult';
		$this->cp_height = 'Magass�g';
		$this->cp_icq = 'ICQ sz�m';
		$this->cp_interest = '�rdekl�d�s';
		$this->cp_jan = 'Janu�r';
		$this->cp_july = 'J�lius';
		$this->cp_june = 'J�nius';
		$this->cp_label_edit_avatar = 'Kisk�p szerkeszt�se';
		$this->cp_label_edit_pass = 'Jelsz� szerkeszt�se';
		$this->cp_label_edit_prefs = 'Testreszab�s';
		$this->cp_label_edit_profile = 'Adatlap szerkeszt�se';
		$this->cp_label_edit_subs = 'Beiratkoz�sok szerkeszt�se';
		$this->cp_language = 'Nyelv';
		$this->cp_less_charac = 'A neved 32 karaktern�l r�videbb kell legyen.';
		$this->cp_location = 'Lakhely';
		$this->cp_login_first = 'Be kell jelentkezned!';
		$this->cp_mar = 'M�rcius';
		$this->cp_may = 'M�jus';
		$this->cp_msn = 'MSN n�v';
		$this->cp_must_orig = 'A nevednek egyeznie kell az eredetivel. Csak kis-nagybet�t v�ltoztathatsz.';
		$this->cp_new_notmatch = 'Az �j jelszavak nem tal�lnak.';
		$this->cp_new_pass = '�j jelsz�';
		$this->cp_no_flash = 'Tiltottak kisk�pe villog.';
		$this->cp_not_exist = 'A megadott (%s) d�tum nem l�tezik!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Okt�ber';
		$this->cp_old_notmatch = 'A r�gi jelsz� nem egyezik az �ltalunk t�rolttal.';
		$this->cp_old_pass = 'R�gi jelsz�';
		$this->cp_pass_notvaid = 'A megadott jelsz� nem helyes form�tumban van.';
		$this->cp_preferences = 'Testreszab�s';
		$this->cp_privacy = 'Szem�lyes opci�k';
		$this->cp_repeat_pass = '�j jelsz� �jra';
		$this->cp_sept = 'Szeptember';
		$this->cp_show_active = 'Mutassuk a tev�kenys�geid, mik�zben az oldalt haszn�lod?';
		$this->cp_show_email = 'Megjelen�ted az email c�met az adatlapon?';
		$this->cp_signature = 'Al��r�s';
		$this->cp_size_max = 'A megadott kisk�p t�l nagy. A maxim�lis m�ret: %s - %s pixel.';
		$this->cp_skin = 'Asztal huzat';
		$this->cp_sub_change = 'Feliratkoz�sok megv�ltoztat�sa';
		$this->cp_sub_delete = 'T�r�l';
		$this->cp_sub_expire = 'Lej�rati d�tum';
		$this->cp_sub_name = 'Feliratkoz�si n�v';
		$this->cp_sub_no_params = 'Nem adt�l meg param�tert.';
		$this->cp_sub_success = 'Feliratkozt�l erre: %s.';
		$this->cp_sub_type = 'Feliratkoz�s t�pusa';
		$this->cp_sub_updated = 'A kiv�lasztott feliratkoz�sokat t�r�lt�k.';
		$this->cp_topic_option = 'T�ma be�ll�t�sai';
		$this->cp_updated = 'Adatlap friss�tve';
		$this->cp_updated1 = 'Kisk�p friss�tve';
		$this->cp_updated_prefs = 'Be�ll�t�sok friss�tve';
		$this->cp_user_exists = 'M�r van ilyen nev� felhaszn�l�.';
		$this->cp_valided = 'A jelszavad sikeresen friss�tve.';
		$this->cp_view_avatar = 'Kisk�pek megtekint�se?';
		$this->cp_view_emoticon = 'Emotikonok megtekint�se?';
		$this->cp_view_signature = 'Al��r�sok megtekint�se?';
		$this->cp_welcome = '�dv�z�l�nk a vez�rl�pulton. Itt be�ll�thatod az adataid. V�lassz az al�bbi lehet�s�gekb�l.';
		$this->cp_width = 'Sz�less�g';
		$this->cp_www = 'Honlap';
		$this->cp_yahoo = 'Yahoo n�v';
		$this->cp_zone = 'Id�z�na';
	}

	function email()
	{
		$this->email_blocked = 'A kiv�lasztott tag nem fogad emailt ezen a fel�leten kereszt�l';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email test:';
		$this->email_no_fields = 'Menj vissza �s t�lts ki minden adatot.';
		$this->email_no_member = 'Nincs ilyen nev� tag';
		$this->email_no_perm = 'Nincs jogod emailt k�ldeni err�l a fel�letr�l.';
		$this->email_sent = 'Az emailed elk�ldt�k.';
		$this->email_subject = 'T�ma:';
		$this->email_to = 'C�mzett:';
	}

	function forum()
	{
		$this->forum_by = 'Felad�';
		$this->forum_can_post = 'V�laszolhatsz ebben a f�rumban.';
		$this->forum_can_topics = 'Megtekintheted a t�m�kat ebben a f�rumban.';
		$this->forum_cant_post = 'Nem v�laszolhatsz ebben a f�rumban.';
		$this->forum_cant_topics = 'Nem n�zhetsz ide be.';
		$this->forum_dot = 'pont';
		$this->forum_dot_detail = 'megmutatja, ha �rt�l ide';
		$this->forum_forum = 'F�rum';
		$this->forum_guest = 'Vend�g';
		$this->forum_hot = 'Forr�';
		$this->forum_icon = '�zenet ikonja';
		$this->forum_jump = 'Ugr�s a leg�jabb bejegyz�sre';
		$this->forum_last = 'Utols� bejegyz�s';
		$this->forum_locked = 'Z�rolva';
		$this->forum_moved = '�thelyezve';
		$this->forum_msg = '%s �zenet';
		$this->forum_new = '�j';
		$this->forum_new_poll = '�j szavaz�g�p';
		$this->forum_new_topic = '�j t�ma nyit�sa';
		$this->forum_no_topics = 'Nincsenek t�m�k ebben a f�rumban.';
		$this->forum_noexist = 'A megadott f�rum nem l�tezik.';
		$this->forum_nopost = 'Nincs be�r�s';
		$this->forum_not = 'Nem';
		$this->forum_noview = 'Nincs jogod ide ben�zni.';
		$this->forum_pages = 'oldal';
		$this->forum_pinned = 'Kit�z�tt';
		$this->forum_pinned_topic = 'Tiltott t�ma';
		$this->forum_poll = 'Szavaz�g�p';
		$this->forum_regfirst = 'Nincs jogod ide ben�zni. HA regisztr�lod magad, akkor igen.';
		$this->forum_replies = 'V�laszok';
		$this->forum_starter = 'T�manyit�';
		$this->forum_sub = 'Alt�ma';
		$this->forum_sub_last_post = 'Utols� bejegyz�s';
		$this->forum_sub_replies = 'V�laszok';
		$this->forum_sub_topics = 'T�m�k';
		$this->forum_subscribe = 'E-mail k�ld�se �j bejegyz�skor';
		$this->forum_topic = 'T�ma';
		$this->forum_topics_new = '�j bejegyz�sek a f�rumban.';
		$this->forum_topics_old = 'Nincs �j bejegyz�s a f�rumban.';
		$this->forum_views = 'Megjelen�t�sek';
		$this->forum_write_topics = 'Nyithatsz t�m�kat ebben a f�rumban.';
	}

	function help()
	{
		$this->help_available_files = 'Seg�ts�g';
		$this->help_none = 'A Seg�ts�g nem el�rhet�. Sajn�ljuk.';
	}

	function login()
	{
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.'; //Translate
		$this->login_cookies = 'A Cookie-k enged�lyezve kell legyenek a bel�p�shez.';
		$this->login_forgot_pass = 'Elfeletetted a jelszavad?';
		$this->login_header = 'Bejelentkez�s...';
		$this->login_logged = 'Be vagy jelentkezve.';
		$this->login_now_out = 'Ki vagy jelentkezve.';
		$this->login_out = 'Kijelentkez�s...';
		$this->login_pass = 'Jelsz�';
		$this->login_pass_no_id = 'Nincs ilyen nev� tagunk.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Jelsz� null�z�sa';
		$this->login_pass_sent = 'A jelszavad null�ztuk. Az �j jelsz�t elk�ldt�k az email c�medre.';
		$this->login_sure = 'Biztos kijelentkezik \'%s\'?';
		$this->login_user = 'N�v';
	}

	function main()
	{
		$this->board_by = 'Felad�';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'A fi�kod m�g nem akt�v.';
		$this->main_activate_resend = 'Aktiv�l� email �jrak�ld�se';
		$this->main_admincp = 'admin fel�let';
		$this->main_banned = 'A moder�torok kitiltottak innen.';
		$this->main_code = 'K�d';
		$this->main_continue = 'Tov�bb';
		$this->main_cp = 'Vez�rl�pult';
		$this->main_full = 'Teljes';
		$this->main_help = 'seg�ts�g';
		$this->main_load = 'bet�lt�s';
		$this->main_login = 'bejelentkez�s';
		$this->main_logout = 'kijelentkez�s';
		$this->main_max_load = 'Sajn�ljuk, de %s nem el�rhet�, t�l sok a bejelentkezett felhaszn�l�.';
		$this->main_members = 'tagok';
		$this->main_messenger = '�zen�';
		$this->main_new = '�j';
		$this->main_next = 'k�vetkez�';
		$this->main_posts_new = '�j';
		$this->main_powered = 'Szolg�ltat�';
		$this->main_prev = 'el�z�';
		$this->main_queries = 'k�r�s';
		$this->main_quote = 'Id�zet';
		$this->main_register = 'regisztr�ci�';
		$this->main_reminder = 'Eml�keztet�';
		$this->main_reminder_closed = 'Az oldal z�rva vanr �s csak a karbantart�k l�thatj�k.';
		$this->main_said = 'mondta';
		$this->main_search = 'keres�s';
		$this->main_seconds = 'm�sodperc';
		$this->main_welcome = '�dv�z�l�nk';
		$this->main_welcome_guest = '�dv�z�l�nk!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Mehet';
		$this->today = 'Ma';
		$this->yesterday = 'Tegnap';
	}

	function members()
	{
		$this->members_all = 'minden';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Email k�ld�se ennek a tagnak';
		$this->members_group = 'Csoport';
		$this->members_joined = 'Bel�pett';
		$this->members_list = 'Tagok list�ja';
		$this->members_member = 'Tag';
		$this->members_pm = 'Privi';
		$this->members_posts = 'Be�r�sok';
		$this->members_send_pm = 'Priv�t �zenet k�ld�se';
		$this->members_title = 'C�m';
		$this->members_vist_www = 'A tag honlapj�nak megl�togat�sa';
		$this->members_www = 'Honlap';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Biztos, hogy t�r�lni akarod ezt a be�r�st?';
		$this->mod_confirm_topic_delete = 'Biztos, hogy t�r�lni akarod ezt a t�m�t?';
		$this->mod_error_first_post = 'Nem t�r�lheted az els� be�r�st.';
		$this->mod_error_move_category = 'Nem helyezhetsz �t egy t�m�t egy kateg�ri�ba.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nem helyezhetsz �t egy t�m�t egy neml�tez� f�rumba.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nem helyezhetsz �t egy t�m�t ugyanabba a f�rumba.';
		$this->mod_label_controls = 'Moder�tor be�ll�t�sai';
		$this->mod_label_description = 'Le�r�s';
		$this->mod_label_emoticon = 'Konvert�ljuk az emotikonokat k�pekk�?';
		$this->mod_label_global = 'Glob�lis t�ma';
		$this->mod_label_mbcode = 'MbK�d form�z�s?';
		$this->mod_label_move_to = '�thelyez�s';
		$this->mod_label_options = 'Opci�k';
		$this->mod_label_post_delete = 'Be�r�s t�rl�se';
		$this->mod_label_post_edit = 'Be�r�s szerkeszt�se';
		$this->mod_label_title = 'C�m';
		$this->mod_label_title_original = 'Eredeti c�m';
		$this->mod_label_title_split = 'C�m darabol�sa';
		$this->mod_label_topic_delete = 'T�ma t�rl�se';
		$this->mod_label_topic_edit = 'T�ma szerkeszt�se';
		$this->mod_label_topic_lock = 'T�ma z�rol�sa';
		$this->mod_label_topic_move = 'T�ma �thelyez�se';
		$this->mod_label_topic_move_complete = 'T�ma teljes �thelyez�se az �j f�rumba';
		$this->mod_label_topic_move_link = 'T�ma teljes �thelyez�se az �j f�rumba, �s link hagy�sa a r�giben.';
		$this->mod_label_topic_pin = 'T�ma kit�z�se';
		$this->mod_label_topic_split = 'T�ma darabol�sa';
		$this->mod_missing_post = 'Az illet� be�r�s nem l�tezik.';
		$this->mod_missing_topic = 'Az illet� t�ma nem l�tezik.';
		$this->mod_no_action = 'Meg kell adni egy m�veletet.';
		$this->mod_no_post = 'Meg kell adni egy be�r�st.';
		$this->mod_no_topic = 'Meg kell adni egy t�m�t.';
		$this->mod_perm_post_delete = 'Nincs jogod t�r�lni ezt a be�r�st.';
		$this->mod_perm_post_edit = 'Nincs jogod szerkeszteni ezt a be�r�st.';
		$this->mod_perm_topic_delete = 'Nincs jogod t�r�lni ezt a t�m�t.';
		$this->mod_perm_topic_edit = 'Nincs jogod szerkeszteni ezt a t�m�t.';
		$this->mod_perm_topic_lock = 'Nincs jogod z�rolni ezt a t�m�t.';
		$this->mod_perm_topic_move = 'Nincs jogod �thelyezni ezt a t�m�t.';
		$this->mod_perm_topic_pin = 'Nincs jogod kit�zni ezt a t�m�t.';
		$this->mod_perm_topic_split = 'Nincs jogod darabolni a t�m�t.';
		$this->mod_perm_topic_unlock = 'Nincs jogod kioldani ezt a t�m�t.';
		$this->mod_perm_topic_unpin = 'Nincs jogod levenni a kit�z�st err�l a t�m�r�l.';
		$this->mod_success_post_delete = 'A be�r�s sikeresen t�r�lve.';
		$this->mod_success_post_edit = 'A be�r�s sikeresen szerkesztve.';
		$this->mod_success_split = 'A t�m�t sikeresen daraboltuk.';
		$this->mod_success_topic_delete = 'A t�ma sikeresen t�r�lve.';
		$this->mod_success_topic_edit = 'A t�ma sikeresen szerkesztve.';
		$this->mod_success_topic_move = 'A t�ma sikeresen �t lett helyezve.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'pont';
		$this->new_posts_dot_detail = 'megmutatja, ha �rt�l ide';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'F�rum';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Forr�';
		$this->new_posts_last = 'Utols� bejegyz�s';
		$this->new_posts_locked = 'Z�rolva';
		$this->new_posts_moved = '�thelyezve';
		$this->new_posts_new = '�j';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Nem';
		$this->new_posts_pinned = 'Kit�z�tt';
		$this->new_posts_poll = 'Szavaz�g�p';
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
		$this->pm_cant_del = 'Nincs jogod t�r�lni ezt az �zenetet.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Minden �zenet t�rl�se';
		$this->pm_delete = 'T�r�l';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = '�zenet t�r�lve.';
		$this->pm_deleted_all = '�zenetek t�r�lve.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Az �zenetet nem lehet elk�ldeni. Minen k�rt mez� ki van t�ltve?';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Be�rkezett �zenetek';
		$this->pm_folder_new = '%s �j';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Felad�';
		$this->pm_group = 'Csoport';
		$this->pm_guest = 'L�togat�k�nt nem haszn�lhatod az �zen�t. Jelentkezz be, vagy regisztr�lj';
		$this->pm_joined = 'regisztr�lva';
		$this->pm_messenger = '�zen�';
		$this->pm_msgtext = '�zenet sz�vege';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Meg kell adni egy mapp�t.';
		$this->pm_no_member = 'nincs ilyen tag.';
		$this->pm_no_number = 'Nincs ilyen sz�m� �zenet.';
		$this->pm_no_title = 'Nincs t�ma';
		$this->pm_nomsg = 'Nincs �zenet ebben a mapp�ban.';
		$this->pm_noview = 'Nincs jogod megn�zni ezt az �zenenetet.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Priv�t �zen�';
		$this->pm_personal_msging = 'Priv�t �zenet k�ld�se';
		$this->pm_pm = 'P�';
		$this->pm_posts = 'Be�r�s';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'V�lasz';
		$this->pm_send = 'K�ld�s';
		$this->pm_sendamsg = '�zenet k�ld�se';
		$this->pm_sendingpm = 'Priv�t �zenet k�ld�se';
		$this->pm_sendon = 'Elk�ldve';
		$this->pm_success = 'Sikeres k�ld�s.';
		$this->pm_sure_del = 'Biztos, hogy t�r�lni akarod ezt az �zenetet?';
		$this->pm_sure_delall = 'Biztos, hogy t�r�lni akarsz minden �zenetet?';
		$this->pm_title = 'T�ma';
		$this->pm_to = 'C�mzett';
	}

	function post()
	{
		$this->post_attach = 'Csatol�sok';
		$this->post_attach_add = 'Csatol�s hozz�ad�sa';
		$this->post_attach_disrupt = 'A csatol�s hozz�ad�sa vagy megszak�t�sa nem t�nteti el az �zeneted.';
		$this->post_attach_failed = 'A csatol�s felt�lt�se nem siker�lt.';
		$this->post_attach_not_allowed = 'Nem csatolhatsz ilyen f�jlt�pust.';
		$this->post_attach_remove = 'Csatol�s elt�vol�t�sa';
		$this->post_attach_too_large = 'T�l nagy a megadott f�jl. Maxim�lis m�ret: %d kilobyte.';
		$this->post_cant_create = 'Vend�gk�nt nincs jogod t�m�t nyitni. Regisztr�lj!';
		$this->post_cant_create1 = 'Nincs jogod t�m�t nyitni.';
		$this->post_cant_enter = 'Nem szavazhatsz. Lehet, hogy m�r szavazt�l, vagy nincs jogod hozz�.';
		$this->post_cant_poll = 'Vend�gk�nt nem hozhatsz l�tre szavaz�g�pet. Regisztr�lj!';
		$this->post_cant_poll1 = 'nincs jogod szavaz�g�pet ind�tani.';
		$this->post_cant_reply = 'Nincs jogod v�laszolni ebben a f�rumban.';
		$this->post_cant_reply1 = 'Vend�gk�nt nem v�laszolhatsz ebben a f�rumban. Regisztr�lj!';
		$this->post_cant_reply2 = 'Nnics jogod v�laszolni a t�m�ra.';
		$this->post_closed = 'A t�ma z�rva van.';
		$this->post_create_poll = 'Szavaz�g�p l�trehoz�sa';
		$this->post_create_topic = 'T�ma nyit�sa';
		$this->post_creating = 'T�ma nyit�sa';
		$this->post_creating_poll = 'Szavaz�g�p l�trehoz�sa';
		$this->post_flood = 'Az elm�lt %s m�sodpercben m�r �rt�l.<br /><br />Pr�b�ld �jra p�r m�sodperc m�lva.';
		$this->post_guest = 'Vend�g';
		$this->post_icon = 'Ikon k�ld�se';
		$this->post_last_five = 'Utols� �t be�r�s ford�tott sorrendben';
		$this->post_length = 'M�ret ellen�rz�se';
		$this->post_mbcode_address = 'Adj meg egy c�met';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'K�k';
		$this->post_mbcode_bold = 'F�lk�v�r';
		$this->post_mbcode_bold1 = 'F';
		$this->post_mbcode_chocolate = 'Csokol�d�';
		$this->post_mbcode_code = 'K�d';
		$this->post_mbcode_color = 'Sz�n';
		$this->post_mbcode_coral = 'Korall';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'S�t�tk�k';
		$this->post_mbcode_darkred = 'S�t�t piros';
		$this->post_mbcode_deepink = 'S�t�t r�zsasz�n';
		$this->post_mbcode_detail = 'Le�r�s';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'T�glav�r�s';
		$this->post_mbcode_font = 'Bet�t�pus';
		$this->post_mbcode_green = 'Z�ld';
		$this->post_mbcode_huge = 'Hatalmas';
		$this->post_mbcode_image = 'K�p';
		$this->post_mbcode_image1 = 'K�P';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indig�';
		$this->post_mbcode_italic = 'D�lt';
		$this->post_mbcode_italic1 = 'D';
		$this->post_mbcode_large = 'Sz�les';
		$this->post_mbcode_length = 'A be�r�sod "+length+" karaktert tartalmaz.';
		$this->post_mbcode_limegreen = 'Z�ld citrom';
		$this->post_mbcode_medium = 'K�zepes';
		$this->post_mbcode_orange = 'Narancs';
		$this->post_mbcode_orangered = 'V�rnarancs';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Lila';
		$this->post_mbcode_quote = 'Id�zet';
		$this->post_mbcode_red = 'V�r�s';
		$this->post_mbcode_royalblue = 'Kir�lyk�k';
		$this->post_mbcode_sandybrown = 'Homokbarna';
		$this->post_mbcode_seagreen = 'Tengerz�ld';
		$this->post_mbcode_sienna = 'Szienna';
		$this->post_mbcode_silver = 'Ez�st';
		$this->post_mbcode_size = 'M�ret';
		$this->post_mbcode_skyblue = '�gsz�nk�k';
		$this->post_mbcode_small = 'Kicsi';
		$this->post_mbcode_strike = '�th�z�s';
		$this->post_mbcode_strike1 = '�';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'M�lyz�ld';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Apr�';
		$this->post_mbcode_tomato = 'Paradicsom';
		$this->post_mbcode_underline = 'Al�h�zott';
		$this->post_mbcode_underline1 = 'A';
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = '�gett fa';
		$this->post_msg = '�zenet';
		$this->post_must_msg = 'Be kell �rni egy �zenetet.';
		$this->post_must_options = 'Meg kell adni v�laszt�si lehet�s�geket.';
		$this->post_must_title = 'Meg kell adni egy c�met.';
		$this->post_new_poll = '�j szavaz�g�p';
		$this->post_new_topic = '�j t�ma';
		$this->post_no_forum = 'Az illet� f�rum nincs meg.';
		$this->post_no_topic = 'Nincs megadva t�ma.';
		$this->post_no_vote = 'V�lassz, mire szavazol.';
		$this->post_option_emoticons = 'Emotikonok k�pp� alak�t�sa?';
		$this->post_option_global = 'Glob�liss� tessz�k a t�m�t?';
		$this->post_option_mbcode = 'MbK�d form�z�s?';
		$this->post_optional = 'v�laszthat�';
		$this->post_options = 'Opci�k';
		$this->post_poll_options = 'Szavaz�g�p opci�k';
		$this->post_poll_row = 'Soronk�nt egy';
		$this->post_posted = 'Feladva';
		$this->post_posting = 'Felad�s';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'V�lasz';
		$this->post_reply_topic = 'T�m�ra v�laszol';
		$this->post_replying = 'T�m�ra v�laszol';
		$this->post_replying1 = 'V�laszol';
		$this->post_smiles = 'Kattint�ssal behelyezhet� emotikonok';
		$this->post_too_many_options = 'A szavaz�g�p 2 �s %d k�z�tti opci�kb�l �ll.';
		$this->post_topic_detail = 'T�ma le�r�sa';
		$this->post_topic_title = 'T�ma c�me';
		$this->post_view_topic = 'Tejles megjelen�t�s';
		$this->post_voting = 'Szavaz�s';
	}

	function printer()
	{
		$this->printer_back = 'Vissza';
		$this->printer_not_found = 'A t�ma nem tal�lhat�. Lehet, hogy �pp t�r�lt�k, vagy �thelyezt�k.';
		$this->printer_not_found_title = 'Nincs meg a t�ma';
		$this->printer_perm_topics = 'Nincs jogod megn�zni a t�m�kat.';
		$this->printer_perm_topics_guest = 'Nincs jogod megn�zni a t�m�kat. Regisztr�lj!';
		$this->printer_posted_on = 'Feladva';
		$this->printer_send = 'Nyomtat�s';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM n�v';
		$this->profile_av_sign = 'Kisk�p �s al��r�s';
		$this->profile_avatar = 'Kisk�p';
		$this->profile_bday = 'Sz�l. d�tum';
		$this->profile_contact = 'El�r�s';
		$this->profile_email_address = 'Email c�m';
		$this->profile_fav = 'Kedvenc f�rum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ sz�m';
		$this->profile_info = 'Inform�ci�';
		$this->profile_interest = '�rdekl�d�s';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Utols� be�r�s';
		$this->profile_list = 'Tagok list�ja';
		$this->profile_location = 'Lakhely';
		$this->profile_member = 'Tagok csoportja';
		$this->profile_member_title = 'Tag szintje';
		$this->profile_msn = 'MSN n�v';
		$this->profile_must_user = 'Meg kell adni egy tagot.';
		$this->profile_no_member = 'Nincs ilyen tag. Lehet, hogy t�r�lt�k.';
		$this->profile_none = '[ �res ]';
		$this->profile_not_post = 'm�g nem �rt sehov�.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Priv�t �zenetek';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Hozz�sz�l�s';
		$this->profile_private = '[ Privi ]';
		$this->profile_profile = 'Adatlap';
		$this->profile_signature = 'Al��r�s';
		$this->profile_unkown = '[ Ismeretlen ]';
		$this->profile_view_profile = 'Adatlap megtekint�se';
		$this->profile_www = 'Honlap';
		$this->profile_yahoo = 'Yahoo n�v';
	}

	function register()
	{
		$this->register_activated = 'Regisztr�ci�d aktiv�lva!';
		$this->register_activating = 'Regisztr�ci� aktiv�l�sa';
		$this->register_activation_error = 'Hiba t�rt�nt aktiv�l�s k�zben. Az aktiv�l�si emailt ellen�rizd. Ha a probl�ma tov�bbra is fenn�ll, �rj az adminnak, hogy m�g egyszer k�ldje el az emailt.';
		$this->register_confirm_passwd = 'Jelsz� �jra';
		$this->register_done = 'sikeres regisztr�ci�! Most m�r bel�phetsz.';
		$this->register_email = 'Email c�m';
		$this->register_email_invalid = 'A megadott email c�m hib�s.';
		$this->register_email_used = 'A megadott email c�men m�r valaki regisztr�lt.';
		$this->register_fields = 'Nincs kit�ltve minden mez�.';
		$this->register_image = 'K�rlek, �rd be a k�pen l�that� sz�veget.';
		$this->register_image_invalid = 'Annak �rdek�ben, hogy ellen�rizni lehessen a feliratkoz� emberi mivolt�t, be kell �rni a k�pen l�that� sz�veget.';
		$this->register_must_activate = 'Sikeresen feliratkozot�l. Elk�ldt�nk egy emailt a %s c�mre a sz�ks�ges aktiv�l�si r�szletekkel. A fi�kod korl�tozott lesz, am�g nincs aktiv�lva.';
		$this->register_name_invalid = 'A megadott n�v t�l hossz�.';
		$this->register_name_taken = 'Ez a n�v m�r foglalt.';
		$this->register_new_user = 'Tag n�v';
		$this->register_pass_invalid = 'A megadott jelsz� nem helyes form�tum�, vagy r�videbb, mint 5 karakter.';
		$this->register_pass_match = 'A be�rt jelszavak nem tal�lnak.';
		$this->register_passwd = 'Jelsz�';
		$this->register_reg = 'Regisztr�l�s';
		$this->register_reging = 'Regisztr�ci�';
	}

	function search()
	{
		$this->search_advanced = 'Tov�bbi lehet�s�gek';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Alapkeres�s';
		$this->search_characters = 'karakter egy be�r�sban';
		$this->search_day = 'nap';
		$this->search_days = 'nap';
		$this->search_exact_name = 'pontos n�v';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Keres�s';
		$this->search_forum = 'F�rum';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Vend�g';
		$this->search_in = 'Keres�s';
		$this->search_in_posts = 'Csak a be�r�sokban keress.';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'bel�pett';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Tal�latok alapj�n keress';
		$this->search_matches = 'Tal�latok';
		$this->search_month = 'h�nap';
		$this->search_months = 'h�nap';
		$this->search_mysqldoc = 'MySQL Dokument�ci�';
		$this->search_newer = 'soha';
		$this->search_no_results = 'Nincs tal�lat.';
		$this->search_no_words = 'Meg kell adni p�r keres�si krit�riumot.<br /><br />Mindenik legal�bb 3 karakter hossz� kell legyen.';
		$this->search_older = 'r�gebbi';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Csak az els�t jelen�ti meg';
		$this->search_partial_name = 'r�szleges n�v';
		$this->search_post_icon = 'Ikon be�r�sa';
		$this->search_posted_on = 'Feladva';
		$this->search_posts = 'Be�r�sok';
		$this->search_posts_by = 'Csak a be�r�sokban';
		$this->search_regex = 'K�z�ns�ges kifejez�s';
		$this->search_regex_failed = 'A szabv�nyos kifejez�s hib�s. Olvasd el a MySQL dokument�ci�t, ahol t�bbet megtudhatsz a szabv�nyos kifejez�sekr�l.';
		$this->search_relevance = 'Be�r�s fontoss�ga: %d%%';
		$this->search_replies = 'Be�r�s';
		$this->search_result = 'Keres�s eredm�nye';
		$this->search_search = 'Keres�s';
		$this->search_select_all = 'Mindent kijel�l';
		$this->search_show_posts = 'Tal�lt be�r�sok';
		$this->search_sound = 'Keres�s hang alapj�n';
		$this->search_starter = 'T�manyit�';
		$this->search_than = 'mint';
		$this->search_topic = 'T�ma';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'h�t';
		$this->search_weeks = 'h�t';
		$this->search_year = '�v';
	}

	function topic()
	{
		$this->topic_attached = 'Csatolt f�jl:';
		$this->topic_attached_downloads = 'let�lt�s';
		$this->topic_attached_perm = 'Nincs jogod let�lteni ezt a f�jlt.';
		$this->topic_attached_title = 'Csatolt f�jl';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = '�j szavaz�g�p l�trehoz�sa';
		$this->topic_create_topic = '�j t�ma ind�t�sa';
		$this->topic_delete = 'T�rl�s';
		$this->topic_delete_post = 'Be�r�s t�rl�se';
		$this->topic_edit = 'Szerkeszt�s';
		$this->topic_edit_post = 'Be�r�s szerkeszt�se';
		$this->topic_edited = 'Utolj�ra szerkesztve: %s, %s �ltal.';
		$this->topic_error = 'Hiba';
		$this->topic_group = 'Csoport';
		$this->topic_guest = 'Vend�g';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'bel�pett';
		$this->topic_level = 'Tag szintje';
		$this->topic_links_aim = 'AIM �zenet elk�ldve %s r�sz�re.';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Email elk�ldve %s r�sz�re.';
		$this->topic_links_icq = 'ICQ �zenet elk�ldve %s r�sz�re.';
		$this->topic_links_msn = '%s MSN adatlapja';
		$this->topic_links_pm = 'Priv�t �zenet k�ld�se %s r�sz�re';
		$this->topic_links_web = '%s honlapj�nak megl�togat�sa';
		$this->topic_links_yahoo = 'Yahoo! Messenger �zenet k�ld�se %s r�sz�re';
		$this->topic_lock = 'Z�rol';
		$this->topic_locked = 'T�ma lez�rva';
		$this->topic_move = '�thelyez';
		$this->topic_no_votes = 'Itt m�g nem szavazott senki.';
		$this->topic_not_found = 'T�ma nem tal�lhat�';
		$this->topic_not_found_message = 'Nem tal�lom a t�m�t.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'T�ma be�ll�t�sai';
		$this->topic_pages = 'Oldal';
		$this->topic_perm_view = 'Nincs jogod megn�zni a t�m�kat.';
		$this->topic_perm_view_guest = 'Nnics jogod megn�zni a t�m�kat. Regisztr�lj!';
		$this->topic_pin = 'Kit�zve';
		$this->topic_posted = 'Feladva';
		$this->topic_posts = 'Be�r�s';
		$this->topic_print = 'Nyomtathat� v�ltozat';
		$this->topic_quote = 'Id�zve v�laszol';
		$this->topic_reply = 'V�lasz erre';
		$this->topic_split = 'Darabol';
		$this->topic_split_finish = 'Minden darabol�s k�sz';
		$this->topic_split_keep = 'Ne mozd�tsd el ezt a be�r�st';
		$this->topic_split_move = 'Mozd�tsd el a be�r�st';
		$this->topic_subscribe = 'Email k�ld�se, ha itt hozz�sz�lnak a t�m�hoz.';
		$this->topic_top = 'Oldal tetej�re ugr�s';
		$this->topic_unlock = 'Felold';
		$this->topic_unpin = 'Kit�z�st levesz';
		$this->topic_unreg = 'Nem regisztr�lt';
		$this->topic_view = 'Eredm�nyek megtekint�se';
		$this->topic_viewing = 'T�ma megtekint�se';
		$this->topic_vote = 'Szavaz�s';
		$this->topic_vote_count_plur = '%d szavazat';
		$this->topic_vote_count_sing = '%d szavazat';
		$this->topic_votes = 'Szavazatok';
	}
}
?>