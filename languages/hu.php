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
 * @author Szász Attila <helpdesk@maximedia.hu>
 * @since 1.0.0
 **/
class hu
{
	function active()
	{
		$this->active_last_action = 'Utolsó mûvelet';
		$this->active_modules_active = 'Aktív tagok';
		$this->active_modules_board = 'Index';
		$this->active_modules_cp = 'Beállítások megjelenítése';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Segítség';
		$this->active_modules_login = 'Ki/Bejelentkezés';
		$this->active_modules_members = 'Tagok listája';
		$this->active_modules_mod = 'Moderálás';
		$this->active_modules_pm = 'Üzenetküldõ';
		$this->active_modules_post = 'Beírás';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Keresés';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Idõ';
		$this->active_user = 'Tag';
		$this->active_users = 'Aktív tagok';
	}

	function board()
	{
		$this->board_active_users = 'Aktív felhasználók';
		$this->board_birthdays = 'Szülinapok:';
		$this->board_can_post = 'Válaszolhatsz ebben a fórumban.';
		$this->board_can_topics = 'Belenézhetsz, de nem írhatsz ebbe a fórumba.';
		$this->board_cant_post = 'Nem válaszolhatsz ebben a fórumban.';
		$this->board_cant_topics = 'Nem nézheted meg, és nem írhatsz ebbe a fórumba.';
		$this->board_forum = 'Fórum';
		$this->board_guests = 'vendég';
		$this->board_last_post = 'Utolsó beírás';
		$this->board_mark = 'Beírás olvasottként jelölése';
		$this->board_mark1 = 'Minden beírás olvasottként van jelölve.';
		$this->board_members = 'tag';
		$this->board_message = '%s üzenet';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Ma senkinek sincs szülinapja.';
		$this->board_nobody = 'Egyetlen tag sincs bejelentkezve.';
		$this->board_nopost = 'Nincs beírás';
		$this->board_noview = 'Nincs jogod ide benézni.';
		$this->board_regfirst = 'Nincs jogod ide benézni. HA regisztrálod magad, akkor igen.';
		$this->board_replies = 'Válaszok';
		$this->board_stats = 'Statisztikák';
		$this->board_stats_string = '%s regisztrált tag. Üdvözöljük legújabb tagunkat, %s -t.<br /> Összesen %s téma és %s válasz a(z) %s beírásra.';
		$this->board_topics = 'Témák';
		$this->board_topics_new = 'Nincs új téma ebben a fórumban.';
		$this->board_topics_old = 'Nincs új beírás ebben a fórumban.';
		$this->board_users = 'tag';
		$this->board_write_topics = 'Jogod van témát nyitni ebben a fórumban.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM név';
		$this->cp_already_member = 'Az általad megadott email címet már valaki használja.';
		$this->cp_apr = 'Április';
		$this->cp_aug = 'Augusztus';
		$this->cp_avatar_current = 'Kiskép';
		$this->cp_avatar_error = 'Kiskép hiba';
		$this->cp_avatar_must_select = 'Ki kell választanod egy kisképet.';
		$this->cp_avatar_none = 'Ne használjon kisképet.';
		$this->cp_avatar_pixels = 'pixel';
		$this->cp_avatar_select = 'Válassz egy kisképet';
		$this->cp_avatar_size_height = 'A kisképed magassága: 1 - ';
		$this->cp_avatar_size_width = 'A kisképed szélessége: 1 - ';
		$this->cp_avatar_upload = 'Tölts fel egy kisképet a gépedrõl';
		$this->cp_avatar_upload_failed = 'A kiskép feltöltése nem sikerült. Az általad megadott fájl talán nem létezik.';
		$this->cp_avatar_upload_not_image = 'Csak saját használatra tölthetsz fel kisképet.';
		$this->cp_avatar_upload_too_large = 'A feltöltésre váró kiskép túl nagy. A maximum méret: %d kilobyte.';
		$this->cp_avatar_url = 'Add meg az URL címet a kisképhez';
		$this->cp_avatar_use = 'Feltöltött kiskép használata';
		$this->cp_bday = 'Szülinap';
		$this->cp_been_updated = 'Az adatlapd frissítve lett.';
		$this->cp_been_updated1 = 'A kisképed felülírva.';
		$this->cp_been_updated_prefs = 'Beállításaid frissítve.';
		$this->cp_changing_pass = 'Jelszó szerkesztése';
		$this->cp_contact_pm = 'Megengeded, hogy a többiek priviben felkeressenek?';
		$this->cp_cp = 'Beállítópult';
		$this->cp_current_avatar = 'Aktuális kiskép';
		$this->cp_current_time = 'Most %s.';
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Kiskép szerkesztése';
		$this->cp_editing_profile = 'Adatlap szerkesztése';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Küldhetnek emailt neked a többi tagok?';
		$this->cp_email_invaid = 'A beírt email cím nem helyes.';
		$this->cp_err_avatar = 'Kiskép feltöltési hiba';
		$this->cp_err_updating = 'Adatlap frissítési hiba';
		$this->cp_feb = 'Február';
		$this->cp_file_type = 'A megadott URL alatt nics meg a kép. Elfogadott terjesztések: gif, jpg, png.';
		$this->cp_format = 'Név szerkesztése';
		$this->cp_gmt = '[GMT] Greenwich Idõ';
		$this->cp_gmt_nev1 = '[GMT-1:00] Azori szigetek, Zöld Fok';
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaii'; //Translate
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Szigetek, Samoa';
		$this->cp_gmt_nev12 = '[GMT-12:00] Nemzetközi nyugati idõsáv';
		$this->cp_gmt_nev2 = '[GMT-2:00] Közép-Atlanti idõ';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenland'; //Translate
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->cp_gmt_nev4 = '[GMT-4:00] Kanada, Atlanti idõ';
		$this->cp_gmt_nev5 = '[GMT-5:00] Keleti idõ EÁ & Kanada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Központi idõ EÁ & Kanada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Hegyvídéki idõ EÁ & Kanada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Csendes-óceáni idõ EÁ & Kanada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaszka';
		$this->cp_gmt_pos1 = '[GMT+1:00] Amszterdam, Berlin, Róma, Párizs';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, Új Caledonia';
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->cp_gmt_pos2 = '[GMT+2:00] Athén, Kairó, Jeruzsálem';
		$this->cp_gmt_pos3 = '[GMT+3:00] Bagdad, Moszkva, Nairobi';
		$this->cp_gmt_pos35 = '[GMT+3:30] Teherán';
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Kalkutta, Új Delhi';
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->cp_gmt_pos8 = '[GMT+8:00] Peking, Hong Kong, Szingapúr';
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokió, Szöul';
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Felhasználói vezérlõpult';
		$this->cp_height = 'Magasság';
		$this->cp_icq = 'ICQ szám';
		$this->cp_interest = 'Érdeklõdés';
		$this->cp_jan = 'Január';
		$this->cp_july = 'Július';
		$this->cp_june = 'Június';
		$this->cp_label_edit_avatar = 'Kiskép szerkesztése';
		$this->cp_label_edit_pass = 'Jelszó szerkesztése';
		$this->cp_label_edit_prefs = 'Testreszabás';
		$this->cp_label_edit_profile = 'Adatlap szerkesztése';
		$this->cp_label_edit_subs = 'Beiratkozások szerkesztése';
		$this->cp_language = 'Nyelv';
		$this->cp_less_charac = 'A neved 32 karakternél rövidebb kell legyen.';
		$this->cp_location = 'Lakhely';
		$this->cp_login_first = 'Be kell jelentkezned!';
		$this->cp_mar = 'Március';
		$this->cp_may = 'Május';
		$this->cp_msn = 'MSN név';
		$this->cp_must_orig = 'A nevednek egyeznie kell az eredetivel. Csak kis-nagybetût változtathatsz.';
		$this->cp_new_notmatch = 'Az új jelszavak nem találnak.';
		$this->cp_new_pass = 'Új jelszó';
		$this->cp_no_flash = 'Tiltottak kisképe villog.';
		$this->cp_not_exist = 'A megadott (%s) dátum nem létezik!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Október';
		$this->cp_old_notmatch = 'A régi jelszó nem egyezik az általunk tárolttal.';
		$this->cp_old_pass = 'Régi jelszó';
		$this->cp_pass_notvaid = 'A megadott jelszó nem helyes formátumban van.';
		$this->cp_preferences = 'Testreszabás';
		$this->cp_privacy = 'Személyes opciók';
		$this->cp_repeat_pass = 'Új jelszó újra';
		$this->cp_sept = 'Szeptember';
		$this->cp_show_active = 'Mutassuk a tevékenységeid, miközben az oldalt használod?';
		$this->cp_show_email = 'Megjeleníted az email címet az adatlapon?';
		$this->cp_signature = 'Aláírás';
		$this->cp_size_max = 'A megadott kiskép túl nagy. A maximális méret: %s - %s pixel.';
		$this->cp_skin = 'Asztal huzat';
		$this->cp_sub_change = 'Feliratkozások megváltoztatása';
		$this->cp_sub_delete = 'Töröl';
		$this->cp_sub_expire = 'Lejárati dátum';
		$this->cp_sub_name = 'Feliratkozási név';
		$this->cp_sub_no_params = 'Nem adtál meg paramétert.';
		$this->cp_sub_success = 'Feliratkoztál erre: %s.';
		$this->cp_sub_type = 'Feliratkozás típusa';
		$this->cp_sub_updated = 'A kiválasztott feliratkozásokat töröltük.';
		$this->cp_topic_option = 'Téma beállításai';
		$this->cp_updated = 'Adatlap frissítve';
		$this->cp_updated1 = 'Kiskép frissítve';
		$this->cp_updated_prefs = 'Beállítások frissítve';
		$this->cp_user_exists = 'Már van ilyen nevû felhasználó.';
		$this->cp_valided = 'A jelszavad sikeresen frissítve.';
		$this->cp_view_avatar = 'Kisképek megtekintése?';
		$this->cp_view_emoticon = 'Emotikonok megtekintése?';
		$this->cp_view_signature = 'Aláírások megtekintése?';
		$this->cp_welcome = 'Üdvözölünk a vezérlõpulton. Itt beállíthatod az adataid. Válassz az alábbi lehetõségekbõl.';
		$this->cp_width = 'Szélesség';
		$this->cp_www = 'Honlap';
		$this->cp_yahoo = 'Yahoo név';
		$this->cp_zone = 'Idõzóna';
	}

	function email()
	{
		$this->email_blocked = 'A kiválasztott tag nem fogad emailt ezen a felületen keresztül';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email test:';
		$this->email_no_fields = 'Menj vissza és tölts ki minden adatot.';
		$this->email_no_member = 'Nincs ilyen nevû tag';
		$this->email_no_perm = 'Nincs jogod emailt küldeni errõl a felületrõl.';
		$this->email_sent = 'Az emailed elküldtük.';
		$this->email_subject = 'Téma:';
		$this->email_to = 'Címzett:';
	}

	function forum()
	{
		$this->forum_by = 'Feladó';
		$this->forum_can_post = 'Válaszolhatsz ebben a fórumban.';
		$this->forum_can_topics = 'Megtekintheted a témákat ebben a fórumban.';
		$this->forum_cant_post = 'Nem válaszolhatsz ebben a fórumban.';
		$this->forum_cant_topics = 'Nem nézhetsz ide be.';
		$this->forum_dot = 'pont';
		$this->forum_dot_detail = 'megmutatja, ha írtál ide';
		$this->forum_forum = 'Fórum';
		$this->forum_guest = 'Vendég';
		$this->forum_hot = 'Forró';
		$this->forum_icon = 'Üzenet ikonja';
		$this->forum_jump = 'Ugrás a legújabb bejegyzésre';
		$this->forum_last = 'Utolsó bejegyzés';
		$this->forum_locked = 'Zárolva';
		$this->forum_moved = 'Áthelyezve';
		$this->forum_msg = '%s üzenet';
		$this->forum_new = 'Új';
		$this->forum_new_poll = 'Új szavazógép';
		$this->forum_new_topic = 'Új téma nyitása';
		$this->forum_no_topics = 'Nincsenek témák ebben a fórumban.';
		$this->forum_noexist = 'A megadott fórum nem létezik.';
		$this->forum_nopost = 'Nincs beírás';
		$this->forum_not = 'Nem';
		$this->forum_noview = 'Nincs jogod ide benézni.';
		$this->forum_pages = 'oldal';
		$this->forum_pinned = 'Kitûzött';
		$this->forum_pinned_topic = 'Tiltott téma';
		$this->forum_poll = 'Szavazógép';
		$this->forum_regfirst = 'Nincs jogod ide benézni. HA regisztrálod magad, akkor igen.';
		$this->forum_replies = 'Válaszok';
		$this->forum_starter = 'Témanyitó';
		$this->forum_sub = 'Altéma';
		$this->forum_sub_last_post = 'Utolsó bejegyzés';
		$this->forum_sub_replies = 'Válaszok';
		$this->forum_sub_topics = 'Témák';
		$this->forum_subscribe = 'E-mail küldése új bejegyzéskor';
		$this->forum_topic = 'Téma';
		$this->forum_topics_new = 'Új bejegyzések a fórumban.';
		$this->forum_topics_old = 'Nincs új bejegyzés a fórumban.';
		$this->forum_views = 'Megjelenítések';
		$this->forum_write_topics = 'Nyithatsz témákat ebben a fórumban.';
	}

	function help()
	{
		$this->help_available_files = 'Segítség';
		$this->help_none = 'A Segítség nem elérhetõ. Sajnáljuk.';
	}

	function login()
	{
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.'; //Translate
		$this->login_cookies = 'A Cookie-k engedélyezve kell legyenek a belépéshez.';
		$this->login_forgot_pass = 'Elfeletetted a jelszavad?';
		$this->login_header = 'Bejelentkezés...';
		$this->login_logged = 'Be vagy jelentkezve.';
		$this->login_now_out = 'Ki vagy jelentkezve.';
		$this->login_out = 'Kijelentkezés...';
		$this->login_pass = 'Jelszó';
		$this->login_pass_no_id = 'Nincs ilyen nevû tagunk.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Jelszó nullázása';
		$this->login_pass_sent = 'A jelszavad nulláztuk. Az új jelszót elküldtük az email címedre.';
		$this->login_sure = 'Biztos kijelentkezik \'%s\'?';
		$this->login_user = 'Név';
	}

	function main()
	{
		$this->board_by = 'Feladó';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'A fiókod még nem aktív.';
		$this->main_activate_resend = 'Aktiváló email újraküldése';
		$this->main_admincp = 'admin felület';
		$this->main_banned = 'A moderátorok kitiltottak innen.';
		$this->main_code = 'Kód';
		$this->main_continue = 'Tovább';
		$this->main_cp = 'Vezérlõpult';
		$this->main_full = 'Teljes';
		$this->main_help = 'segítség';
		$this->main_load = 'betöltés';
		$this->main_login = 'bejelentkezés';
		$this->main_logout = 'kijelentkezés';
		$this->main_max_load = 'Sajnáljuk, de %s nem elérhetõ, túl sok a bejelentkezett felhasználó.';
		$this->main_members = 'tagok';
		$this->main_messenger = 'üzenõ';
		$this->main_new = 'új';
		$this->main_next = 'következõ';
		$this->main_posts_new = 'Új';
		$this->main_powered = 'Szolgáltató';
		$this->main_prev = 'elõzõ';
		$this->main_queries = 'kérés';
		$this->main_quote = 'Idézet';
		$this->main_register = 'regisztráció';
		$this->main_reminder = 'Emlékeztetõ';
		$this->main_reminder_closed = 'Az oldal zárva vanr és csak a karbantartók láthatják.';
		$this->main_said = 'mondta';
		$this->main_search = 'keresés';
		$this->main_seconds = 'másodperc';
		$this->main_welcome = 'Üdvözölünk';
		$this->main_welcome_guest = 'Üdvözölünk!';
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
		$this->members_email_member = 'Email küldése ennek a tagnak';
		$this->members_group = 'Csoport';
		$this->members_joined = 'Belépett';
		$this->members_list = 'Tagok listája';
		$this->members_member = 'Tag';
		$this->members_pm = 'Privi';
		$this->members_posts = 'Beírások';
		$this->members_send_pm = 'Privát üzenet küldése';
		$this->members_title = 'Cím';
		$this->members_vist_www = 'A tag honlapjának meglátogatása';
		$this->members_www = 'Honlap';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Biztos, hogy törölni akarod ezt a beírást?';
		$this->mod_confirm_topic_delete = 'Biztos, hogy törölni akarod ezt a témát?';
		$this->mod_error_first_post = 'Nem törölheted az elsõ beírást.';
		$this->mod_error_move_category = 'Nem helyezhetsz át egy témát egy kategóriába.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nem helyezhetsz át egy témát egy nemlétezõ fórumba.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nem helyezhetsz át egy témát ugyanabba a fórumba.';
		$this->mod_label_controls = 'Moderátor beállításai';
		$this->mod_label_description = 'Leírás';
		$this->mod_label_emoticon = 'Konvertáljuk az emotikonokat képekké?';
		$this->mod_label_global = 'Globális téma';
		$this->mod_label_mbcode = 'MbKód formázás?';
		$this->mod_label_move_to = 'Áthelyezés';
		$this->mod_label_options = 'Opciók';
		$this->mod_label_post_delete = 'Beírás törlése';
		$this->mod_label_post_edit = 'Beírás szerkesztése';
		$this->mod_label_title = 'Cím';
		$this->mod_label_title_original = 'Eredeti cím';
		$this->mod_label_title_split = 'Cím darabolása';
		$this->mod_label_topic_delete = 'Téma törlése';
		$this->mod_label_topic_edit = 'Téma szerkesztése';
		$this->mod_label_topic_lock = 'Téma zárolása';
		$this->mod_label_topic_move = 'Téma áthelyezése';
		$this->mod_label_topic_move_complete = 'Téma teljes áthelyezése az új fórumba';
		$this->mod_label_topic_move_link = 'Téma teljes áthelyezése az új fórumba, és link hagyása a régiben.';
		$this->mod_label_topic_pin = 'Téma kitûzése';
		$this->mod_label_topic_split = 'Téma darabolása';
		$this->mod_missing_post = 'Az illetõ beírás nem létezik.';
		$this->mod_missing_topic = 'Az illetõ téma nem létezik.';
		$this->mod_no_action = 'Meg kell adni egy mûveletet.';
		$this->mod_no_post = 'Meg kell adni egy beírást.';
		$this->mod_no_topic = 'Meg kell adni egy témát.';
		$this->mod_perm_post_delete = 'Nincs jogod törölni ezt a beírást.';
		$this->mod_perm_post_edit = 'Nincs jogod szerkeszteni ezt a beírást.';
		$this->mod_perm_topic_delete = 'Nincs jogod törölni ezt a témát.';
		$this->mod_perm_topic_edit = 'Nincs jogod szerkeszteni ezt a témát.';
		$this->mod_perm_topic_lock = 'Nincs jogod zárolni ezt a témát.';
		$this->mod_perm_topic_move = 'Nincs jogod áthelyezni ezt a témát.';
		$this->mod_perm_topic_pin = 'Nincs jogod kitûzni ezt a témát.';
		$this->mod_perm_topic_split = 'Nincs jogod darabolni a témát.';
		$this->mod_perm_topic_unlock = 'Nincs jogod kioldani ezt a témát.';
		$this->mod_perm_topic_unpin = 'Nincs jogod levenni a kitûzést errõl a témáról.';
		$this->mod_success_post_delete = 'A beírás sikeresen törölve.';
		$this->mod_success_post_edit = 'A beírás sikeresen szerkesztve.';
		$this->mod_success_split = 'A témát sikeresen daraboltuk.';
		$this->mod_success_topic_delete = 'A téma sikeresen törölve.';
		$this->mod_success_topic_edit = 'A téma sikeresen szerkesztve.';
		$this->mod_success_topic_move = 'A téma sikeresen át lett helyezve.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'pont';
		$this->new_posts_dot_detail = 'megmutatja, ha írtál ide';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Fórum';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Forró';
		$this->new_posts_last = 'Utolsó bejegyzés';
		$this->new_posts_locked = 'Zárolva';
		$this->new_posts_moved = 'Áthelyezve';
		$this->new_posts_new = 'Új';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Nem';
		$this->new_posts_pinned = 'Kitûzött';
		$this->new_posts_poll = 'Szavazógép';
		$this->new_posts_topic = 'Téma';
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
		$this->pm_cant_del = 'Nincs jogod törölni ezt az üzenetet.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Minden üzenet törlése';
		$this->pm_delete = 'Töröl';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Üzenet törölve.';
		$this->pm_deleted_all = 'Üzenetek törölve.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Az üzenetet nem lehet elküldeni. Minen kért mezõ ki van töltve?';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Beérkezett üzenetek';
		$this->pm_folder_new = '%s új';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Feladó';
		$this->pm_group = 'Csoport';
		$this->pm_guest = 'Látogatóként nem használhatod az üzenõt. Jelentkezz be, vagy regisztrálj';
		$this->pm_joined = 'regisztrálva';
		$this->pm_messenger = 'Üzenõ';
		$this->pm_msgtext = 'Üzenet szövege';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Meg kell adni egy mappát.';
		$this->pm_no_member = 'nincs ilyen tag.';
		$this->pm_no_number = 'Nincs ilyen számú üzenet.';
		$this->pm_no_title = 'Nincs téma';
		$this->pm_nomsg = 'Nincs üzenet ebben a mappában.';
		$this->pm_noview = 'Nincs jogod megnézni ezt az üzenenetet.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Privát üzenõ';
		$this->pm_personal_msging = 'Privát üzenet küldése';
		$this->pm_pm = 'PÜ';
		$this->pm_posts = 'Beírás';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Válasz';
		$this->pm_send = 'Küldés';
		$this->pm_sendamsg = 'Üzenet küldése';
		$this->pm_sendingpm = 'Privát üzenet küldése';
		$this->pm_sendon = 'Elküldve';
		$this->pm_success = 'Sikeres küldés.';
		$this->pm_sure_del = 'Biztos, hogy törölni akarod ezt az üzenetet?';
		$this->pm_sure_delall = 'Biztos, hogy törölni akarsz minden üzenetet?';
		$this->pm_title = 'Téma';
		$this->pm_to = 'Címzett';
	}

	function post()
	{
		$this->post_attach = 'Csatolások';
		$this->post_attach_add = 'Csatolás hozzáadása';
		$this->post_attach_disrupt = 'A csatolás hozzáadása vagy megszakítása nem tünteti el az üzeneted.';
		$this->post_attach_failed = 'A csatolás feltöltése nem sikerült.';
		$this->post_attach_not_allowed = 'Nem csatolhatsz ilyen fájltípust.';
		$this->post_attach_remove = 'Csatolás eltávolítása';
		$this->post_attach_too_large = 'Túl nagy a megadott fájl. Maximális méret: %d kilobyte.';
		$this->post_cant_create = 'Vendégként nincs jogod témát nyitni. Regisztrálj!';
		$this->post_cant_create1 = 'Nincs jogod témát nyitni.';
		$this->post_cant_enter = 'Nem szavazhatsz. Lehet, hogy már szavaztál, vagy nincs jogod hozzá.';
		$this->post_cant_poll = 'Vendégként nem hozhatsz létre szavazógépet. Regisztrálj!';
		$this->post_cant_poll1 = 'nincs jogod szavazógépet indítani.';
		$this->post_cant_reply = 'Nincs jogod válaszolni ebben a fórumban.';
		$this->post_cant_reply1 = 'Vendégként nem válaszolhatsz ebben a fórumban. Regisztrálj!';
		$this->post_cant_reply2 = 'Nnics jogod válaszolni a témára.';
		$this->post_closed = 'A téma zárva van.';
		$this->post_create_poll = 'Szavazógép létrehozása';
		$this->post_create_topic = 'Téma nyitása';
		$this->post_creating = 'Téma nyitása';
		$this->post_creating_poll = 'Szavazógép létrehozása';
		$this->post_flood = 'Az elmúlt %s másodpercben már írtál.<br /><br />Próbáld újra pár másodperc múlva.';
		$this->post_guest = 'Vendég';
		$this->post_icon = 'Ikon küldése';
		$this->post_last_five = 'Utolsó öt beírás fordított sorrendben';
		$this->post_length = 'Méret ellenõrzése';
		$this->post_mbcode_address = 'Adj meg egy címet';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Kék';
		$this->post_mbcode_bold = 'Félkövér';
		$this->post_mbcode_bold1 = 'F';
		$this->post_mbcode_chocolate = 'Csokoládé';
		$this->post_mbcode_code = 'Kód';
		$this->post_mbcode_color = 'Szín';
		$this->post_mbcode_coral = 'Korall';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Sötétkék';
		$this->post_mbcode_darkred = 'Sötét piros';
		$this->post_mbcode_deepink = 'Sötét rózsaszín';
		$this->post_mbcode_detail = 'Leírás';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Téglavörös';
		$this->post_mbcode_font = 'Betûtípus';
		$this->post_mbcode_green = 'Zöld';
		$this->post_mbcode_huge = 'Hatalmas';
		$this->post_mbcode_image = 'Kép';
		$this->post_mbcode_image1 = 'KÉP';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigó';
		$this->post_mbcode_italic = 'Dõlt';
		$this->post_mbcode_italic1 = 'D';
		$this->post_mbcode_large = 'Széles';
		$this->post_mbcode_length = 'A beírásod "+length+" karaktert tartalmaz.';
		$this->post_mbcode_limegreen = 'Zöld citrom';
		$this->post_mbcode_medium = 'Közepes';
		$this->post_mbcode_orange = 'Narancs';
		$this->post_mbcode_orangered = 'Vérnarancs';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Lila';
		$this->post_mbcode_quote = 'Idézet';
		$this->post_mbcode_red = 'Vörös';
		$this->post_mbcode_royalblue = 'Királykék';
		$this->post_mbcode_sandybrown = 'Homokbarna';
		$this->post_mbcode_seagreen = 'Tengerzöld';
		$this->post_mbcode_sienna = 'Szienna';
		$this->post_mbcode_silver = 'Ezüst';
		$this->post_mbcode_size = 'Méret';
		$this->post_mbcode_skyblue = 'Égszínkék';
		$this->post_mbcode_small = 'Kicsi';
		$this->post_mbcode_strike = 'Áthúzás';
		$this->post_mbcode_strike1 = 'Á';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Mélyzöld';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Apró';
		$this->post_mbcode_tomato = 'Paradicsom';
		$this->post_mbcode_underline = 'Aláhúzott';
		$this->post_mbcode_underline1 = 'A';
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Égett fa';
		$this->post_msg = 'Üzenet';
		$this->post_must_msg = 'Be kell írni egy üzenetet.';
		$this->post_must_options = 'Meg kell adni választási lehetõségeket.';
		$this->post_must_title = 'Meg kell adni egy címet.';
		$this->post_new_poll = 'Új szavazógép';
		$this->post_new_topic = 'Új téma';
		$this->post_no_forum = 'Az illetõ fórum nincs meg.';
		$this->post_no_topic = 'Nincs megadva téma.';
		$this->post_no_vote = 'Válassz, mire szavazol.';
		$this->post_option_emoticons = 'Emotikonok képpé alakítása?';
		$this->post_option_global = 'Globálissá tesszük a témát?';
		$this->post_option_mbcode = 'MbKód formázás?';
		$this->post_optional = 'választható';
		$this->post_options = 'Opciók';
		$this->post_poll_options = 'Szavazógép opciók';
		$this->post_poll_row = 'Soronként egy';
		$this->post_posted = 'Feladva';
		$this->post_posting = 'Feladás';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Válasz';
		$this->post_reply_topic = 'Témára válaszol';
		$this->post_replying = 'Témára válaszol';
		$this->post_replying1 = 'Válaszol';
		$this->post_smiles = 'Kattintással behelyezhetõ emotikonok';
		$this->post_too_many_options = 'A szavazógép 2 és %d közötti opciókból áll.';
		$this->post_topic_detail = 'Téma leírása';
		$this->post_topic_title = 'Téma címe';
		$this->post_view_topic = 'Tejles megjelenítés';
		$this->post_voting = 'Szavazás';
	}

	function printer()
	{
		$this->printer_back = 'Vissza';
		$this->printer_not_found = 'A téma nem található. Lehet, hogy épp törölték, vagy áthelyezték.';
		$this->printer_not_found_title = 'Nincs meg a téma';
		$this->printer_perm_topics = 'Nincs jogod megnézni a témákat.';
		$this->printer_perm_topics_guest = 'Nincs jogod megnézni a témákat. Regisztrálj!';
		$this->printer_posted_on = 'Feladva';
		$this->printer_send = 'Nyomtatás';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM név';
		$this->profile_av_sign = 'Kiskép és aláírás';
		$this->profile_avatar = 'Kiskép';
		$this->profile_bday = 'Szül. dátum';
		$this->profile_contact = 'Elérés';
		$this->profile_email_address = 'Email cím';
		$this->profile_fav = 'Kedvenc fórum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ szám';
		$this->profile_info = 'Információ';
		$this->profile_interest = 'Érdeklõdés';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Utolsó beírás';
		$this->profile_list = 'Tagok listája';
		$this->profile_location = 'Lakhely';
		$this->profile_member = 'Tagok csoportja';
		$this->profile_member_title = 'Tag szintje';
		$this->profile_msn = 'MSN név';
		$this->profile_must_user = 'Meg kell adni egy tagot.';
		$this->profile_no_member = 'Nincs ilyen tag. Lehet, hogy törölték.';
		$this->profile_none = '[ Üres ]';
		$this->profile_not_post = 'még nem írt sehová.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Privát üzenetek';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Hozzászólás';
		$this->profile_private = '[ Privi ]';
		$this->profile_profile = 'Adatlap';
		$this->profile_signature = 'Aláírás';
		$this->profile_unkown = '[ Ismeretlen ]';
		$this->profile_view_profile = 'Adatlap megtekintése';
		$this->profile_www = 'Honlap';
		$this->profile_yahoo = 'Yahoo név';
	}

	function register()
	{
		$this->register_activated = 'Regisztrációd aktiválva!';
		$this->register_activating = 'Regisztráció aktiválása';
		$this->register_activation_error = 'Hiba történt aktiválás közben. Az aktiválási emailt ellenõrizd. Ha a probléma továbbra is fennáll, írj az adminnak, hogy még egyszer küldje el az emailt.';
		$this->register_confirm_passwd = 'Jelszó újra';
		$this->register_done = 'sikeres regisztráció! Most már beléphetsz.';
		$this->register_email = 'Email cím';
		$this->register_email_invalid = 'A megadott email cím hibás.';
		$this->register_email_used = 'A megadott email címen már valaki regisztrált.';
		$this->register_fields = 'Nincs kitöltve minden mezõ.';
		$this->register_image = 'Kérlek, írd be a képen látható szöveget.';
		$this->register_image_invalid = 'Annak érdekében, hogy ellenõrizni lehessen a feliratkozó emberi mivoltát, be kell írni a képen látható szöveget.';
		$this->register_must_activate = 'Sikeresen feliratkozotál. Elküldtünk egy emailt a %s címre a szükséges aktiválási részletekkel. A fiókod korlátozott lesz, amíg nincs aktiválva.';
		$this->register_name_invalid = 'A megadott név túl hosszú.';
		$this->register_name_taken = 'Ez a név már foglalt.';
		$this->register_new_user = 'Tag név';
		$this->register_pass_invalid = 'A megadott jelszó nem helyes formátumú, vagy rövidebb, mint 5 karakter.';
		$this->register_pass_match = 'A beírt jelszavak nem találnak.';
		$this->register_passwd = 'Jelszó';
		$this->register_reg = 'Regisztrálás';
		$this->register_reging = 'Regisztráció';
	}

	function search()
	{
		$this->search_advanced = 'További lehetõségek';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Alapkeresés';
		$this->search_characters = 'karakter egy beírásban';
		$this->search_day = 'nap';
		$this->search_days = 'nap';
		$this->search_exact_name = 'pontos név';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Keresés';
		$this->search_forum = 'Fórum';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Vendég';
		$this->search_in = 'Keresés';
		$this->search_in_posts = 'Csak a beírásokban keress.';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'belépett';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Találatok alapján keress';
		$this->search_matches = 'Találatok';
		$this->search_month = 'hónap';
		$this->search_months = 'hónap';
		$this->search_mysqldoc = 'MySQL Dokumentáció';
		$this->search_newer = 'soha';
		$this->search_no_results = 'Nincs találat.';
		$this->search_no_words = 'Meg kell adni pár keresési kritériumot.<br /><br />Mindenik legalább 3 karakter hosszú kell legyen.';
		$this->search_older = 'régebbi';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Csak az elsõt jeleníti meg';
		$this->search_partial_name = 'részleges név';
		$this->search_post_icon = 'Ikon beírása';
		$this->search_posted_on = 'Feladva';
		$this->search_posts = 'Beírások';
		$this->search_posts_by = 'Csak a beírásokban';
		$this->search_regex = 'Közönséges kifejezés';
		$this->search_regex_failed = 'A szabványos kifejezés hibás. Olvasd el a MySQL dokumentációt, ahol többet megtudhatsz a szabványos kifejezésekrõl.';
		$this->search_relevance = 'Beírás fontossága: %d%%';
		$this->search_replies = 'Beírás';
		$this->search_result = 'Keresés eredménye';
		$this->search_search = 'Keresés';
		$this->search_select_all = 'Mindent kijelöl';
		$this->search_show_posts = 'Talált beírások';
		$this->search_sound = 'Keresés hang alapján';
		$this->search_starter = 'Témanyitó';
		$this->search_than = 'mint';
		$this->search_topic = 'Téma';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'hét';
		$this->search_weeks = 'hét';
		$this->search_year = 'év';
	}

	function topic()
	{
		$this->topic_attached = 'Csatolt fájl:';
		$this->topic_attached_downloads = 'letöltés';
		$this->topic_attached_perm = 'Nincs jogod letölteni ezt a fájlt.';
		$this->topic_attached_title = 'Csatolt fájl';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Új szavazógép létrehozása';
		$this->topic_create_topic = 'Új téma indítása';
		$this->topic_delete = 'Törlés';
		$this->topic_delete_post = 'Beírás törlése';
		$this->topic_edit = 'Szerkesztés';
		$this->topic_edit_post = 'Beírás szerkesztése';
		$this->topic_edited = 'Utoljára szerkesztve: %s, %s által.';
		$this->topic_error = 'Hiba';
		$this->topic_group = 'Csoport';
		$this->topic_guest = 'Vendég';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'belépett';
		$this->topic_level = 'Tag szintje';
		$this->topic_links_aim = 'AIM üzenet elküldve %s részére.';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Email elküldve %s részére.';
		$this->topic_links_icq = 'ICQ üzenet elküldve %s részére.';
		$this->topic_links_msn = '%s MSN adatlapja';
		$this->topic_links_pm = 'Privát üzenet küldése %s részére';
		$this->topic_links_web = '%s honlapjának meglátogatása';
		$this->topic_links_yahoo = 'Yahoo! Messenger üzenet küldése %s részére';
		$this->topic_lock = 'Zárol';
		$this->topic_locked = 'Téma lezárva';
		$this->topic_move = 'Áthelyez';
		$this->topic_no_votes = 'Itt még nem szavazott senki.';
		$this->topic_not_found = 'Téma nem található';
		$this->topic_not_found_message = 'Nem találom a témát.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Téma beállításai';
		$this->topic_pages = 'Oldal';
		$this->topic_perm_view = 'Nincs jogod megnézni a témákat.';
		$this->topic_perm_view_guest = 'Nnics jogod megnézni a témákat. Regisztrálj!';
		$this->topic_pin = 'Kitûzve';
		$this->topic_posted = 'Feladva';
		$this->topic_posts = 'Beírás';
		$this->topic_print = 'Nyomtatható változat';
		$this->topic_quote = 'Idézve válaszol';
		$this->topic_reply = 'Válasz erre';
		$this->topic_split = 'Darabol';
		$this->topic_split_finish = 'Minden darabolás kész';
		$this->topic_split_keep = 'Ne mozdítsd el ezt a beírást';
		$this->topic_split_move = 'Mozdítsd el a beírást';
		$this->topic_subscribe = 'Email küldése, ha itt hozzászólnak a témához.';
		$this->topic_top = 'Oldal tetejére ugrás';
		$this->topic_unlock = 'Felold';
		$this->topic_unpin = 'Kitûzést levesz';
		$this->topic_unreg = 'Nem regisztrált';
		$this->topic_view = 'Eredmények megtekintése';
		$this->topic_viewing = 'Téma megtekintése';
		$this->topic_vote = 'Szavazás';
		$this->topic_vote_count_plur = '%d szavazat';
		$this->topic_vote_count_sing = '%d szavazat';
		$this->topic_votes = 'Szavazatok';
	}
}
?>