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
 * $Id: de.php,v 1.16 2006/07/26 17:56:18 jon Exp $
 **/

/**
 * German language module
 *
 * @author Christian Tietze <c.tietze@art-fx.org>
 * @since 1.1.0
 **/
class de
{
	function active()
	{
		$this->active_last_action = 'Letzte Aktion';
		$this->active_modules_active = 'Aktive User anzeigen';
		$this->active_modules_board = 'Index anzeigen';
		$this->active_modules_cp = 'Benutze Kontrollzentrum';
		$this->active_modules_forum = 'Forum: %s';
		$this->active_modules_help = 'Benutze Hilfe';
		$this->active_modules_login = 'Ein/Ausloggen';
		$this->active_modules_members = 'Zeige Mitgliederliste';
		$this->active_modules_mod = 'Moderieren';
		$this->active_modules_pm = 'Benutze Messenger';
		$this->active_modules_post = 'Beitrag';
		$this->active_modules_printer = 'Thema drucken: %s';
		$this->active_modules_profile = 'Profil: %s';
		$this->active_modules_search = 'Suche';
		$this->active_modules_topic = 'Thema: %s';
		$this->active_time = 'Zeit';
		$this->active_user = 'User'; //Translate
		$this->active_users = 'Aktive User';
	}

	function board()
	{
		$this->board_active_users = 'Aktive User';
		$this->board_birthdays = 'Heutiger Geburtstag';
		$this->board_can_post = 'Du kannst in diesem Forum antworten.';
		$this->board_can_topics = 'Du kannst in diesem Forum Themen sehen aber nicht erstellen.';
		$this->board_cant_post = 'Du kannst in diesem Forum nicht antworten.';
		$this->board_cant_topics = 'Du kannst in diesem Forum keine Themen sehen oder erstellen.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'Gäste';
		$this->board_last_post = 'Letzter Beitrag';
		$this->board_mark = 'Beiträge als gelesen markieren';
		$this->board_mark1 = 'Alle Beiträge und Foren wurden als gelesen markiert.';
		$this->board_members = 'Mitglieder';
		$this->board_message = '%s Nachricht';
		$this->board_most_online = 'Der Rekord liegt bei %d Usern gleichzeitig (%s).';
		$this->board_nobday = 'Kein Mitglied hat heute Geburtstag.';
		$this->board_nobody = 'Momentan sind keine Mitglieder online.';
		$this->board_nopost = 'Keine Beiträge';
		$this->board_noview = 'Du hast nicht die Erlaubnis, dieses Board zu sehen.';
		$this->board_regfirst = 'Du hast nicht die Erlaubnis, dieses Board zu sehen - vielleicht wenn du dich registrierst.';
		$this->board_replies = 'Antworten';
		$this->board_stats = 'Statistiken';
		$this->board_stats_string = '%s User sind registriert. Unser neustes Mitglied ist %s.<br />Es gibt %s Topics und %s Antworten mit einer Gesamtzahl von %s Posts.';
		$this->board_topics = 'Themen';
		$this->board_topics_new = 'Es sind neue Beiträge vorhanden.';
		$this->board_topics_old = 'Es sind keine neuen Beiträge vorhanden.';
		$this->board_users = 'User';
		$this->board_write_topics = 'Du kannst Themen sehen und erstellen.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM Bildschirmname';
		$this->cp_already_member = 'Die eingegebene Emailadresse ist bereits einem Mitglied zugeordnet.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'Dein momentaner Avatar';
		$this->cp_avatar_error = 'Avatarproblem';
		$this->cp_avatar_must_select = 'Du musst einen Avatar auswählen.';
		$this->cp_avatar_none = 'Benutze keinen Avatar';
		$this->cp_avatar_pixels = 'Pixel';
		$this->cp_avatar_select = 'Wähle einen Avatar aus';
		$this->cp_avatar_size_height = 'Die Höhe des Avatars liegt zwischen 1 und';
		$this->cp_avatar_size_width = 'Die Breite des Avatars liegt zwischen 1 und';
		$this->cp_avatar_upload = 'Lade einen Avatar von deiner Festplatte hoch';
		$this->cp_avatar_upload_failed = 'Der Upload ist schiefgegangen.  Die Datei existiert möglicherweise nicht.';
		$this->cp_avatar_upload_not_image = 'Du kannst Bilder nur hochladen um sie als Avatar zu benutzen.';
		$this->cp_avatar_upload_too_large = 'Der Avatar ist zu groß, um ihn hochzuladen. Das Limit beträgt %d kb.';
		$this->cp_avatar_url = 'Wähle eine URL für deinen Avatar';
		$this->cp_avatar_use = 'Benutze deinen hochgeladenen Avatar';
		$this->cp_bday = 'Geburtstag';
		$this->cp_been_updated = 'Dein Profil wurde aktualisiert.';
		$this->cp_been_updated1 = 'Dein Avatar wurde aktualisiert.';
		$this->cp_been_updated_prefs = 'Deine Präferenzen wurden aktualisiert.';
		$this->cp_changing_pass = 'Passwort editieren';
		$this->cp_contact_pm = 'Erlaube es Anderen, dich via Messenger zu kontaktieren?';
		$this->cp_cp = 'Kontrollzentum';
		$this->cp_current_avatar = 'Aktueller Avatar';
		$this->cp_current_time = 'Es ist momentan %s.';
		$this->cp_dec = 'Dezember';
		$this->cp_editing_avatar = 'Editiere Avatar';
		$this->cp_editing_profile = 'Editiere Profil';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Erlaube es Anderen, dich via Email zu kontaktieren?';
		$this->cp_email_invaid = 'Die eingegebene Emailadresse ist inkorrekt.';
		$this->cp_err_avatar = 'Fehler beim Aktualisieren des Avatars';
		$this->cp_err_updating = 'Fehler beim Aktualisieren des Profils';
		$this->cp_feb = 'Februar';
		$this->cp_file_type = 'Der eingebene Avatar ist nicht in Ordnung. Gehe sicher, das die URL richtig eingegeben ist und die Datei entweder die Endung GIF, JPG oder PNG hat.';
		$this->cp_format = 'Namensformatierung';
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
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris'; //Translate
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
		$this->cp_header = 'User Kontrollzentum';
		$this->cp_height = 'Höhe';
		$this->cp_icq = 'ICQ Nummer';
		$this->cp_interest = 'Hobby';
		$this->cp_jan = 'Januar';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Editiere Avatar';
		$this->cp_label_edit_pass = 'Editiere Passwort';
		$this->cp_label_edit_prefs = 'Editiere Einstellungen';
		$this->cp_label_edit_profile = 'Editiere Profil';
		$this->cp_label_edit_subs = 'Editiere Abonnements';
		$this->cp_language = 'Sprache';
		$this->cp_less_charac = 'Dein Name muss kleiner als 32 Zeichen sein.';
		$this->cp_location = 'Ort';
		$this->cp_login_first = 'Du musst dich einloggen, um zu deinem Kontrollzentum zu gelangen.';
		$this->cp_mar = 'März';
		$this->cp_may = 'Mai';
		$this->cp_msn = 'MSN Identität';
		$this->cp_must_orig = 'Dein Name muss identisch mit dem Original sein. Du kannst nur die Klein/Großschreibung sowie den Abstand ändern.';
		$this->cp_new_notmatch = 'Die neuen eingegebenen Passwörter stimmen nicht überein.';
		$this->cp_new_pass = 'Neues Passwort';
		$this->cp_no_flash = 'Flash Avatare sind auf diesem Board nicht erlaubt.';
		$this->cp_not_exist = 'Das spezifizierte Datum (%s) existiert nicht!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Das alte eingegebene Passwort stimmt nicht mit dem in der Datenbank überein.';
		$this->cp_old_pass = 'Altes Passwort';
		$this->cp_pass_notvaid = 'Dein Passwort ist nicht gültig. Gehe sicher, das nur gültige Zeichen benutzt werden wie z.B. Buchstaben, Zahlen, Bindestriche, Unterstriche oder Leerzeichen.';
		$this->cp_preferences = 'Verändere Einstellungen';
		$this->cp_privacy = 'Private Optionen';
		$this->cp_repeat_pass = 'Wiederhole das neue Passwort';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Deine Aktionen anzeigen, wenn du im Forum bist?';
		$this->cp_show_email = 'Email Adresse im Profil anzeigen?';
		$this->cp_signature = 'Signatur';
		$this->cp_size_max = 'Die eingegebene Größe des Avatars ist zu groß. Die maximale Größe beträgt %s x %s Pixel.';
		$this->cp_skin = 'Forenskin';
		$this->cp_sub_change = 'Verändere Abonnements';
		$this->cp_sub_delete = 'Löschen';
		$this->cp_sub_expire = 'Verfallsdatum';
		$this->cp_sub_name = 'Abonnementname';
		$this->cp_sub_no_params = 'Keine Parameter angegeben.';
		$this->cp_sub_success = 'Du hast nun %s abonniert.';
		$this->cp_sub_type = 'Abonnementtyp';
		$this->cp_sub_updated = 'Ausgewählte Abonnements wurden gelöscht.';
		$this->cp_topic_option = 'Themen Optionen';
		$this->cp_updated = 'Profile aktualisiert';
		$this->cp_updated1 = 'Avatar aktualisiert';
		$this->cp_updated_prefs = 'Einstellungen aktualisiert';
		$this->cp_user_exists = 'Ein User mit diesem Namen existiert bereits.';
		$this->cp_valided = 'Dein Passwort war gültig und wurde geändert.';
		$this->cp_view_avatar = 'Avatare anzeigen?';
		$this->cp_view_emoticon = 'Smilies anzeigen?';
		$this->cp_view_signature = 'Signaturen anzeigen?';
		$this->cp_welcome = 'Willkommen im User-Kontrollzentrum. Hier kannst du deinen Account konfigurieren. Bitte wähle von den oberen Optionen aus.';
		$this->cp_width = 'Länge';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = 'Zeitzone';
	}

	function email()
	{
		$this->email_blocked = 'Das Mitglied akzeptiert über dieses Board keine Emails.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Emailtext:';
		$this->email_no_fields = 'Geh zurück und gehe sicher, das Felder ausgefüllt sind.';
		$this->email_no_member = 'Es wurde kein Mitglied mit diesem Namen gefunden';
		$this->email_no_perm = 'Du hast keine Erlaubnis in diesem Board Emails zu schreiben.';
		$this->email_sent = 'Deine Email wurde verschickt.';
		$this->email_subject = 'Betreff:';
		$this->email_to = 'An:';
	}

	function forum()
	{
		$this->forum_by = 'Von';
		$this->forum_can_post = 'Du kannst in diesem Forum antworten.';
		$this->forum_can_topics = 'Du kannst in diesem Forum Themen sehen.';
		$this->forum_cant_post = 'Du kannst in diesem Forum nicht antworten.';
		$this->forum_cant_topics = 'Du kannst in diesem Forum keine Themen sehen.';
		$this->forum_dot = 'Punkt';
		$this->forum_dot_detail = 'zeigt, das du im Thema beigetragen hast';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gast';
		$this->forum_hot = 'Heiß';
		$this->forum_icon = 'Nachrichtsymbol';
		$this->forum_jump = 'Springe zum neuestem Beitrag im Thema';
		$this->forum_last = 'Letzter Beitrag';
		$this->forum_locked = 'Gesperrt';
		$this->forum_moved = 'Verschoben';
		$this->forum_msg = '%s Nachricht';
		$this->forum_new = 'Neu';
		$this->forum_new_poll = 'Erstelle neue Umfrage';
		$this->forum_new_topic = 'Erstelle neues Thema';
		$this->forum_no_topics = 'Es gibt keine Themen in diesem Forum anzuzeigen.';
		$this->forum_noexist = 'Das ausgewählte Forum existiert nicht.';
		$this->forum_nopost = 'Keine Beiträge';
		$this->forum_not = 'Nicht';
		$this->forum_noview = 'Du hast nicht die Erlaubnis Foren zu sehen.';
		$this->forum_pages = 'Seiten';
		$this->forum_pinned = 'Genagelt';
		$this->forum_pinned_topic = 'Genageltes Thema';
		$this->forum_poll = 'Umfrage';
		$this->forum_regfirst = 'Du hast nicht die Erlaubnis Foren zu sehen – vielleicht wenn du dich registrierst.';
		$this->forum_replies = 'Antworten';
		$this->forum_starter = 'Ersteller';
		$this->forum_sub = 'Unterforum';
		$this->forum_sub_last_post = 'Letzter Beitrag';
		$this->forum_sub_replies = 'Antworten';
		$this->forum_sub_topics = 'Themen';
		$this->forum_subscribe = 'Benachrichtige mich per Email wenn Beiträge in diesem Forum geschrieben wurden';
		$this->forum_topic = 'Thema';
		$this->forum_topics_new = 'Es gibt neue Beiträge in diesem Forum.';
		$this->forum_topics_old = 'Es gibt keine neuen Beiträge in diesem Forum.';
		$this->forum_views = 'Gesehen';
		$this->forum_write_topics = 'Du kannst in diesem Forum Themen erstellen.';
	}

	function help()
	{
		$this->help_available_files = 'Hilfe';
		$this->help_none = 'Es gibt keine Hilfedateien in der Datenbank.';
	}

	function login()
	{
		$this->login_cant_logged = 'Du konntest dich nicht anmelden. Überprüfe die Richtigkeit deines Usernamens und des Passworts.<br /><br />Sie sind Zeichensensibel, so \'UsErNaMe\' ist anders als \'Username\'. Überprüfe weiterhin das Cookies im Browser aktiviert sind.';
		$this->login_cookies = 'Cookies müssen zum Anmelden aktiviert sein.';
		$this->login_forgot_pass = 'Passwort vergessen?';
		$this->login_header = 'Angemeldet';
		$this->login_logged = 'Du bist nun angemeldet.';
		$this->login_now_out = 'Du bist nun abgemeldet.';
		$this->login_out = 'Abmelden';
		$this->login_pass = 'Passwort';
		$this->login_pass_no_id = 'Es gibt kein Mitglied mit dem eingegebenen Usernamen.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Passwort zurücksetzen';
		$this->login_pass_sent = 'Dein Passwort wurde zurückgesetzt. Das neue Passwort wurde an die angegebene Emailaddresse verschickt.';
		$this->login_sure = 'Bist du dir sicher das du dich von \'%s\' abmelden willst?';
		$this->login_user = 'Username';
	}

	function main()
	{
		$this->board_by = 'Von';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Dein Account wurde noch nicht aktiviert.';
		$this->main_activate_resend = 'Sende Aktivationsemail erneut';
		$this->main_admincp = 'Admin Kontrollzentrum';
		$this->main_banned = 'Du wurdest vom Board gebannt.';
		$this->main_code = 'Code'; //Translate
		$this->main_continue = 'Weiter';
		$this->main_cp = 'Kontrollzentrum';
		$this->main_full = 'Voll';
		$this->main_help = 'Hilfe';
		$this->main_load = 'Lade';
		$this->main_login = 'Anmelden';
		$this->main_logout = 'Abmelden';
		$this->main_max_load = 'Es tut uns leid, aber %s ist momentan nicht erreichbar, weil uz viele User online sind.';
		$this->main_members = 'Mitglieder';
		$this->main_messenger = 'Nachrichtenzentrale';
		$this->main_new = 'Neu';
		$this->main_next = 'Nächste';
		$this->main_posts_new = 'Neu';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'Vorherige';
		$this->main_queries = 'Anfragen';
		$this->main_quote = 'Zitat';
		$this->main_register = 'Registriere';
		$this->main_reminder = 'Erinnere';
		$this->main_reminder_closed = 'Das Board ist geschlossen und kann nur von Admins eingesehen werden.';
		$this->main_said = 'schrieb';
		$this->main_search = 'Suche';
		$this->main_seconds = 'Sekunden';
		$this->main_welcome = 'Willkommen';
		$this->main_welcome_guest = 'Willkommen!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Abschicken';
		$this->today = 'Heute ';
		$this->yesterday = 'Gestern ';
	}

	function members()
	{
		$this->members_all = 'Alle';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Miglied Email senden?';
		$this->members_group = 'Gruppe';
		$this->members_joined = 'Teilgenommen';
		$this->members_list = 'Mitgliederliste';
		$this->members_member = 'Mitglied';
		$this->members_pm = 'PN';
		$this->members_posts = 'Beiträge';
		$this->members_send_pm = 'Schicke dem User eine persönliche Nachricht';
		$this->members_title = 'Titel';
		$this->members_vist_www = 'Besuche des Mitglied\'s Webseite';
		$this->members_www = 'Webseite';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Bist du dir sicher, das du diesen Beitrag löschen willst?';
		$this->mod_confirm_topic_delete = 'Bist du dir sicher, das du dieses Thema löschen willst?';
		$this->mod_error_first_post = 'Du kannst den ersten Beitrag eines Themas nicht löschen.';
		$this->mod_error_move_category = 'Du kannst ein Thema nicht zu einer Kategorie verschieben.';
		$this->mod_error_move_create = 'Du hast keine erlaubnis, Themen in dem Forum zu verschieben.';
		$this->mod_error_move_forum = 'Du kannst das Thema nicht zu einem nicht existierendem Forum verschieben.';
		$this->mod_error_move_global = 'Du kannst kein globales Thema vershcieben. Editiere es vorher!';
		$this->mod_error_move_same = 'Du kannst das Thema nicht in ein Forum verschieben, indem es sich schon befindet.';
		$this->mod_label_controls = 'Moderator Kontrolle';
		$this->mod_label_description = 'Beschreibung';
		$this->mod_label_emoticon = 'Konvertiere Smilies in Bilder?';
		$this->mod_label_global = 'Globales Thema';
		$this->mod_label_mbcode = 'Formatiere MbCode?';
		$this->mod_label_move_to = 'Verschiebe zu';
		$this->mod_label_options = 'Optionen';
		$this->mod_label_post_delete = 'Lösche Beitrag';
		$this->mod_label_post_edit = 'Editiere Beitrag';
		$this->mod_label_title = 'Titel';
		$this->mod_label_title_original = 'Urpsrünglicher Titel';
		$this->mod_label_title_split = 'Spaltungstitel';
		$this->mod_label_topic_delete = 'Lösche Thema';
		$this->mod_label_topic_edit = 'Editiere Thema';
		$this->mod_label_topic_lock = 'Sperre Thema';
		$this->mod_label_topic_move = 'Verschiebe Thema';
		$this->mod_label_topic_move_complete = 'Verschiebe das komplette Thema in das neue Forum';
		$this->mod_label_topic_move_link = 'Verschiebe das Thema in das neue Forum und hinterlasse im alten Forum ein Link zum neuen Ort.';
		$this->mod_label_topic_pin = 'Nagel das Thema';
		$this->mod_label_topic_split = 'Geteiltes Thema';
		$this->mod_missing_post = 'Der ausgewählte Beitrag exisitert nicht.';
		$this->mod_missing_topic = 'Das ausgewählte Thema exisitiert nicht.';
		$this->mod_no_action = 'Du musst eine Handlung auswählen.';
		$this->mod_no_post = 'Du musst einen Beitrag auswählen.';
		$this->mod_no_topic = 'Du musst ein Thema auswählen.';
		$this->mod_perm_post_delete = 'Du hast nicht die Erlaubnis diesen Beitrag zu löschen.';
		$this->mod_perm_post_edit = 'Du hast nicht die Erlaubnis diesen Beitrag zu editieren.';
		$this->mod_perm_topic_delete = 'Du hast nicht die Erlaubnis dieses Thema zu löschen.';
		$this->mod_perm_topic_edit = 'Du hast nicht die Erlaubnis dieses Them zu editieren.';
		$this->mod_perm_topic_lock = 'Du hast nicht die Erlaubnis dieses Thema zu sperren.';
		$this->mod_perm_topic_move = 'Du hast nicht die Erlaubnis dieses Thema zu verschieben.';
		$this->mod_perm_topic_pin = 'Du hast nicht die Erlaubnis dieses Thema zu pinnen.';
		$this->mod_perm_topic_split = 'Du hast nicht die Erlaubnis dieses Thema zu teilen.';
		$this->mod_perm_topic_unlock = 'Du hast nicht die Erlaubnis dieses Thema zu entsperren.';
		$this->mod_perm_topic_unpin = 'Du hast nicht die Erlaubnis dieses Thema zu entnageln.';
		$this->mod_success_post_delete = 'Der Beitrag wurde erfolgreich gelöscht.';
		$this->mod_success_post_edit = 'Der Beitrag wurde erfolgreich editiert.';
		$this->mod_success_split = 'Das Thema wurde werfolgreich geteilt.';
		$this->mod_success_topic_delete = 'Das Thema wurde erfolgreich gelöscht.';
		$this->mod_success_topic_edit = 'Das Thema wurde erfolgreich editiert.';
		$this->mod_success_topic_move = 'Das Thema wurde erfolgreich in ein neues Forum verschoben.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'Punkt';
		$this->new_posts_dot_detail = 'zeigt, das du im Thema beigetragen hast';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Heiß';
		$this->new_posts_last = 'Letzter Beitrag';
		$this->new_posts_locked = 'Gesperrt';
		$this->new_posts_moved = 'Verschoben';
		$this->new_posts_new = 'Neu';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Nicht';
		$this->new_posts_pinned = 'Genagelt';
		$this->new_posts_poll = 'Umfrage';
		$this->new_posts_topic = 'Thema';
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
		$this->pm_cant_del = 'Du hast nicht die Erlaubnis diese Nachricht zu löschen.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Alle Nachrichten löschen';
		$this->pm_delete = 'Löschen';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Nachricht gelöscht.';
		$this->pm_deleted_all = 'Nachrichten gelöscht.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'Es tauchten Probleme beim schicken der Nachricht an die Mitglieder auf.<br /><br />Folgende User gibt es nicht: %s<br /><br />Folgende User wollen keine Nachrichten empfangen: %s';
		$this->pm_fields = 'Nachricht wurde nicht verschickt. Gehe sicher, das alle benötigten Felder ausgefüllt wurden.';
		$this->pm_flood = 'Du hast in den letzten %s Sekunden schon eine Nachricht verschickt und kannst jetzt noch keine neue senden<br /><br />Versuche es in ein paar Sekunden nochmal';
		$this->pm_folder_inbox = 'Eingang';
		$this->pm_folder_new = '%s neu';
		$this->pm_folder_sentbox = 'Gesendet';
		$this->pm_from = 'Von';
		$this->pm_group = 'Gruppe';
		$this->pm_guest = 'Als Gast kannst du die Nachrichtenzentrale  nicht benutzen. Bitte log dich ein oder registrier dich.';
		$this->pm_joined = 'Teilgenommen';
		$this->pm_messenger = 'Nachrichtenzentrale';
		$this->pm_msgtext = 'Nachrichtentext';
		$this->pm_multiple = 'Trenne mehrere Empfänger mit ;';
		$this->pm_no_folder = 'Du musst einen Ordner auswählen.';
		$this->pm_no_member = 'Kein Mitglied mit dieser ID wurde gefunden.';
		$this->pm_no_number = 'Keine Nachricht mit dieser Nummer wurde gefunden.';
		$this->pm_no_title = 'Kein Betreff';
		$this->pm_nomsg = 'In diesem Ordner sind keine Nachrichten.';
		$this->pm_noview = 'Du hast nicht die Erlaubnis diese Nachricht zu lesen.';
		$this->pm_online = 'Dieser User ist grade online';
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Private Nachrichtenzentrale';
		$this->pm_personal_msging = 'Private Nachrichten';
		$this->pm_pm = 'PN';
		$this->pm_posts = 'Post';
		$this->pm_preview = 'Vorschau';
		$this->pm_recipients = 'Empfänger';
		$this->pm_reply = 'Antworten';
		$this->pm_send = 'Senden';
		$this->pm_sendamsg = 'Nachricht senden';
		$this->pm_sendingpm = 'PN senden';
		$this->pm_sendon = 'Gesendet';
		$this->pm_success = 'Deine Nachricht wurde erfolgreich verschickt.';
		$this->pm_sure_del = 'Bist du sicher, das du diese Nachricht löschen willst?';
		$this->pm_sure_delall = 'Bist du dir sicher, das du alle Nachrichten in diesem Ordner löschen willst?';
		$this->pm_title = 'Titel';
		$this->pm_to = 'An';
	}

	function post()
	{
		$this->post_attach = 'Anhänge';
		$this->post_attach_add = 'Anhang beifügen';
		$this->post_attach_disrupt = 'Hinzufügen oder löschen wird deine Nachricht nicht stören.';
		$this->post_attach_failed = 'Der Upload des Anhangs schlug fehl. Die eingegeben Datei existiert vielleicht nicht.';
		$this->post_attach_not_allowed = 'Du kannst solche Dateitypen nicht anhängen.';
		$this->post_attach_remove = 'Entferne Anhang';
		$this->post_attach_too_large = 'Die eingegeben Datei ist zu groß. Die maximale Größe beträgt %d KB.';
		$this->post_cant_create = 'Als Gast hast du keine Erlaubnis ein Thema zu erstellen – vielleicht wenn du dich registrierst.';
		$this->post_cant_create1 = 'Du hast nicht die Erlaubnis ein Thema zu erstellen.';
		$this->post_cant_enter = 'Dein Auswahl konnte nicht eingegeben werden. Entweder hast du schon ausgewählt oder du hast keine Erlaubnis.';
		$this->post_cant_poll = 'Als Gast hast du keine Erlaubnis eine Umfrage zu starten – vielleicht wenn du dich registrierst.';
		$this->post_cant_poll1 = 'Du hast keine Erlaubnis eine Umfrage zu starten.';
		$this->post_cant_reply = 'Du hast keine Erlaubnis zu Themen in diesem Forum zu antworten.';
		$this->post_cant_reply1 = 'Als Gast hast du keine Erlaubnis auf Themen zu antworten – vielleicht wenn du dich registrierst.';
		$this->post_cant_reply2 = 'Du hast keine Erlaubnis auf Themen zu antworten.';
		$this->post_closed = 'Dieses Thema wurde geschlossen.';
		$this->post_create_poll = 'Erstelle Umfrage';
		$this->post_create_topic = 'Erstelle Thema';
		$this->post_creating = 'Erstelle Thema';
		$this->post_creating_poll = 'Erstelle Umfrage';
		$this->post_flood = 'Du hast in den letzten %s Sekunden gepostet und darfst im Moment nicht mehr.<br /><br />Versuche es später nochmal.';
		$this->post_guest = 'Gast';
		$this->post_icon = 'Beitragssymbol';
		$this->post_last_five = 'Letzten 5 Beiträge abwärts';
		$this->post_length = 'Überprüfe Länge';
		$this->post_mbcode_address = 'Gib eine Adresse ein';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blau';
		$this->post_mbcode_bold = 'Fett';
		$this->post_mbcode_bold1 = 'F';
		$this->post_mbcode_chocolate = 'Schokolade';
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Farbe';
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Dunkelblau';
		$this->post_mbcode_darkred = 'Dunkelrot';
		$this->post_mbcode_deepink = 'Deep Pink'; //Translate
		$this->post_mbcode_detail = 'Beschreibung eingeben';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Ziegelsteinrot';
		$this->post_mbcode_font = 'Schriftart';
		$this->post_mbcode_green = 'Grün';
		$this->post_mbcode_huge = 'Riesig';
		$this->post_mbcode_image = 'Bild';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursiv';
		$this->post_mbcode_italic1 = 'K';
		$this->post_mbcode_large = 'Groß';
		$this->post_mbcode_length = 'Deine Nachricht hat "+length+" Zeichen.';
		$this->post_mbcode_limegreen = 'Limettengrün';
		$this->post_mbcode_medium = 'Mittel';
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange-Rot';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Lila';
		$this->post_mbcode_quote = 'Zitat';
		$this->post_mbcode_red = 'Rot';
		$this->post_mbcode_royalblue = 'Königsblau';
		$this->post_mbcode_sandybrown = 'Sandy Braun';
		$this->post_mbcode_seagreen = 'Seegrün';
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Silber';
		$this->post_mbcode_size = 'Größe';
		$this->post_mbcode_skyblue = 'Himmelsblau';
		$this->post_mbcode_small = 'Klein';
		$this->post_mbcode_strike = 'Durchgestrichen';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Winzig';
		$this->post_mbcode_tomato = 'Tomato'; //Translate
		$this->post_mbcode_underline = 'Unterstrichen';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Wurzelholz';
		$this->post_msg = 'Nachricht';
		$this->post_must_msg = 'Du musst eine Nachricht einfügen wenn du einen Beitrag schreibst.';
		$this->post_must_options = 'Du musst Optinen einfügen wenn du eine Umfrage erstellst.';
		$this->post_must_title = 'Du musst einen Titel einfügen wenn du ein Thema erstellst.';
		$this->post_new_poll = 'Neue Umfrage';
		$this->post_new_topic = 'Neues Thema';
		$this->post_no_forum = 'Dieses Forum wurde nicht gefunden.';
		$this->post_no_topic = 'Kein Thema ausgewählt.';
		$this->post_no_vote = 'Du musst eine Option zum Abstimmen auswählen.';
		$this->post_option_emoticons = 'Konvertiere Smilies zu Bildern?';
		$this->post_option_global = 'Thema globalisieren?';
		$this->post_option_mbcode = 'Formatiere MbCode?';
		$this->post_optional = 'optional'; //Translate
		$this->post_options = 'Optionen';
		$this->post_poll_options = 'Umfrage Optionen';
		$this->post_poll_row = 'Eins pro Zeile';
		$this->post_posted = 'Geschrieben am';
		$this->post_posting = 'Schreiben';
		$this->post_preview = 'Vorschau';
		$this->post_reply = 'Antworten';
		$this->post_reply_topic = 'Thema antworten';
		$this->post_replying = 'Thema antworten';
		$this->post_replying1 = 'Antworten';
		$this->post_smiles = 'Klickbare Symbole';
		$this->post_too_many_options = 'Du brauchst zwischen 2 und %d Optionen für eine Umfrage.';
		$this->post_topic_detail = 'Thema Beschreibung';
		$this->post_topic_title = 'Thema Titel';
		$this->post_view_topic = 'Zeige ganzes Thema';
		$this->post_voting = 'Wählen';
	}

	function printer()
	{
		$this->printer_back = 'Zurück';
		$this->printer_not_found = 'Das Thema konnte nicht gefunden werden. Es wurde vielleicht gelöscht, verschoben oder existierte niemals.';
		$this->printer_not_found_title = 'Thema nicht gefunden';
		$this->printer_perm_topics = 'Du hast keine Erlaubnis Themen zu sehen.';
		$this->printer_perm_topics_guest = 'Du hast keine Erlaubnis Themen zu sehen – vielleicht wenn du dich registrierst.';
		$this->printer_posted_on = 'Geschrieben am';
		$this->printer_send = 'An Drucker senden';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name'; //Translate
		$this->profile_av_sign = 'Avatar und Signatur';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Geburtstag';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'Email Addresse';
		$this->profile_fav = 'Favorisiertes Forum';
		$this->profile_fav_forum = '%s (%d%% der Posts sind dort)';
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Informationen';
		$this->profile_interest = 'Hobbies';
		$this->profile_joined = 'Angemeldet seit';
		$this->profile_last_post = 'Letzter Beitrag';
		$this->profile_list = 'Mitgliederliste';
		$this->profile_location = 'Wohnort';
		$this->profile_member = 'Mitgliedsgruppe';
		$this->profile_member_title = 'Mitgliedstitel';
		$this->profile_msn = 'MSN Identität';
		$this->profile_must_user = 'Du musst einen Benutzer eintragen um das Profil zu sehen.';
		$this->profile_no_member = 'Es gibt kein Mitglied mit dieser ID. Der Account wurde vielleicht.';
		$this->profile_none = '[ Keiner ]';
		$this->profile_not_post = 'hat noch keinen Beitrag geschrieben.';
		$this->profile_online = 'Dieser User ist grade online';
		$this->profile_pm = 'Private Nachrichten';
		$this->profile_postcount = '%s insgesamt, %s pro Tag';
		$this->profile_posts = 'Nachrichten';
		$this->profile_private = '[ Privat ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signatur';
		$this->profile_unkown = '[ Unbekannt ]';
		$this->profile_view_profile = 'Profil anzeigen';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo Identität';
	}

	function register()
	{
		$this->register_activated = 'Dein Account wurde aktiviert!';
		$this->register_activating = 'Account Aktivierung';
		$this->register_activation_error = 'Es gab ein Problem während der Aktivierung deines Accounts. Überprüfe, ob der Browser die komplette URL der Aktivierungsemail beinhaltet. Wenn das Problem weiterhin besteht kontaktiere den Boardadministrator um die Email erneut zu verschicken.';
		$this->register_confirm_passwd = 'Bestätige Passwort';
		$this->register_done = 'Du bist nun registriert! Du kannst dich nun anmelden.';
		$this->register_email = 'Emailadresse';
		$this->register_email_invalid = 'Die eingegeben Emailadresse ist ungültig.';
		$this->register_email_used = 'Die eingegebene Emailadresse ist schon einem Mitglied zugeordnet.';
		$this->register_fields = 'Nicht alle Felder wurden ausgefüllt.';
		$this->register_image = 'Bitte tipp den Text vom Bild ein.';
		$this->register_image_invalid = 'Um zu überprüfen, ob du ein menschlicher User bist, musst du den Text vom Bild eintippen.';
		$this->register_must_activate = 'Du bist nun registriert. Eine Email wurde verschickt zu %s mit Informationen wie du deinen Account aktivieren kannst. Dein Account wird bis zur Aktivierung limitiert.';
		$this->register_name_invalid = 'Der eingegebene Name ist zu lang.';
		$this->register_name_taken = 'Der Mitgliedsname ist bereits vergeben.';
		$this->register_new_user = 'Benötigter Username';
		$this->register_pass_invalid = 'Das eingegebene Passwort ist nicht gültig. Gehe sicher, das nur gültige Zeichen wie z.B. Buchstaben, Nummern, Striche, Unterstriche oder Leerzeichen sowie mindestens 5 Zeichen verwendet wurden.';
		$this->register_pass_match = 'Die eingegebenen Passwörter stimmen nicht überein.';
		$this->register_passwd = 'Passwort';
		$this->register_reg = 'Registrierung';
		$this->register_reging = 'Registrierung';
	}

	function search()
	{
		$this->search_advanced = 'Erweitere Optionen';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Einfache Suche';
		$this->search_characters = 'Zeichen eines Beitrags';
		$this->search_day = 'Tag';
		$this->search_days = 'Tage';
		$this->search_exact_name = 'Exakter Name';
		$this->search_flood = 'Du hast in den letzten %s Sekunden bereits eine Suchanfrage gestartet und kannst noch nicht wieder suchen.<br /><br />Versuche es in ein paar Sekunden wieder.';
		$this->search_for = 'Suche nach';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Gruppe';
		$this->search_guest = 'Gast';
		$this->search_in = 'Suche in';
		$this->search_in_posts = 'Suche nur in Beiträgen';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Angemeldet seit';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Suche nach Treffern';
		$this->search_matches = 'Treffer';
		$this->search_month = 'Monat';
		$this->search_months = 'Monate';
		$this->search_mysqldoc = 'MySQL Dokumentation';
		$this->search_newer = 'neuer';
		$this->search_no_results = 'Deine Suche brachte keine Ergebnisse.';
		$this->search_no_words = 'Du musst Suchbegriffe definieren.<br /><br />Jeder Begriff muss länger als 3 Zeichen sein, inklusive Buchstaben, Nummern, Apostrophen und Unterstriche.';
		$this->search_older = 'älter';
		$this->search_online = 'Dieser User ist grade online';
		$this->search_only_display = 'Nur Erste anzeigen';
		$this->search_partial_name = 'Teil des Namen';
		$this->search_post_icon = 'Nachrichtensymbol';
		$this->search_posted_on = 'Geschrieben am';
		$this->search_posts = 'Beiträge';
		$this->search_posts_by = 'Nur Beiträge von';
		$this->search_regex = 'Suche nach regulären Ausdrücken';
		$this->search_regex_failed = 'Die regulären Audrücke schlufgen fehl. Bitte schau in der MySQL Dokumentation für Hilfe bei regulären Ausdrücken.';
		$this->search_relevance = 'Nachrichtrelevanz: %d%%';
		$this->search_replies = 'Beiträge';
		$this->search_result = 'Suchergebnis';
		$this->search_search = 'Suche';
		$this->search_select_all = 'Wähle alle aus';
		$this->search_show_posts = 'Zeige übereinstimmende Beiträge';
		$this->search_sound = 'Suche nach Sounds';
		$this->search_starter = 'Ersteller';
		$this->search_than = 'als';
		$this->search_topic = 'Thema';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'Woche';
		$this->search_weeks = 'Wochen';
		$this->search_year = 'Jahr';
	}

	function topic()
	{
		$this->topic_attached = 'Angehangene Datei:';
		$this->topic_attached_downloads = 'Downloads';
		$this->topic_attached_perm = 'Du hast keine Erlaubnis diese Datei runterzuladen.';
		$this->topic_attached_title = 'Angehangene Datei';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Erstelle neue Umfrage';
		$this->topic_create_topic = 'Erstelle neues Thema';
		$this->topic_delete = 'Löschen';
		$this->topic_delete_post = 'Lösche diesen Beitrag';
		$this->topic_edit = 'Editiere';
		$this->topic_edit_post = 'Editiere diesen Beitrag';
		$this->topic_edited = 'Zuletzt editiert: %s von %s';
		$this->topic_error = 'Fehler';
		$this->topic_group = 'Gruppe';
		$this->topic_guest = 'Gast';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Teilgenommen';
		$this->topic_level = 'Mitgliedslevel';
		$this->topic_links_aim = 'Sende eine AIM Nachricht an %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Sende eine Email an %s';
		$this->topic_links_icq = 'Sende eine ICQ Nachricht an %s';
		$this->topic_links_msn = 'Zeige %s\'s MSN Profil';
		$this->topic_links_pm = 'Sende eine persönliche Nachricht an %s';
		$this->topic_links_web = 'Besuche %s\'s Webseite';
		$this->topic_links_yahoo = 'Sende eine Nachricht an %s mit Yahoo! Messenger';
		$this->topic_lock = 'Sperren';
		$this->topic_locked = 'Thema gesperrt';
		$this->topic_move = 'Verschiebe';
		$this->topic_no_votes = 'Es gibt keine Abstimmungen für diese Umfrage.';
		$this->topic_not_found = 'Thema nicht gefunden';
		$this->topic_not_found_message = 'Das Thema konnte nicht gefunden werden. Es wurde vielleicht gelöscht, verschoben oder existierte nie.';
		$this->topic_online = 'Dieser User ist grade online';
		$this->topic_options = 'Thema Optionen';
		$this->topic_pages = 'Seiten';
		$this->topic_perm_view = 'Du hast keine Erlaubnis Themen zu sehen.';
		$this->topic_perm_view_guest = 'Du hast keine Erlaubnis Themen zu sehen – vielleicht wenn du dich registrierst.';
		$this->topic_pin = 'Pin'; //Translate
		$this->topic_posted = 'Geschrieben: ';
		$this->topic_posts = 'Beiträge';
		$this->topic_print = 'Zeige Druckversion';
		$this->topic_quote = 'Antworte mit einem Zitat von dem Beitrag';
		$this->topic_reply = 'Thema antworten';
		$this->topic_split = 'Geteilt';
		$this->topic_split_finish = 'Teilen abschließen';
		$this->topic_split_keep = 'Diesen Post nicht verschieben';
		$this->topic_split_move = 'Diesen Post verschieben';
		$this->topic_subscribe = 'Benachrichte mich per Email wenn in diesem Thema geantwortet wurde';
		$this->topic_top = 'Gehe zum Anfang der Seite';
		$this->topic_unlock = 'Entsperren';
		$this->topic_unpin = 'Entnageln';
		$this->topic_unreg = 'Unregistriert';
		$this->topic_view = 'Zeige Ergebnisse';
		$this->topic_viewing = 'Zeige Thema';
		$this->topic_vote = 'Wähle';
		$this->topic_vote_count_plur = '%d Stimmen';
		$this->topic_vote_count_sing = '%d Stimme';
		$this->topic_votes = 'Stimmen';
	}
}
?>