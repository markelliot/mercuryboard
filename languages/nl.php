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
 * $Id: nl.php,v 1.36 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Dutch language module
 *
 * @author Daniël Rokven <rokven@gmail.com>
 * @author Sander Knape <hetisik@gmail.com>
 * @since 1.0.0 Beta 4.0
 **/
class nl
{
	function active()
	{
		$this->active_last_action = 'Laatste actie';
		$this->active_modules_active = 'Bekijkt actieve gebruikers';
		$this->active_modules_board = 'Bekijkt index';
		$this->active_modules_cp = 'Gebruikt control panel';
		$this->active_modules_forum = 'Het bekijken van een forum: %s';
		$this->active_modules_help = 'Gebruikt help';
		$this->active_modules_login = 'Logt in/uit';
		$this->active_modules_members = 'Bekijkt member lijst';
		$this->active_modules_mod = 'Modereren';
		$this->active_modules_pm = 'Gebruikt messenger';
		$this->active_modules_post = 'Bezig met plaatsen';
		$this->active_modules_printer = 'Onderwerp afdrukken %s';
		$this->active_modules_profile = 'Het bekijken van profiel: %s';
		$this->active_modules_search = 'Zoekt';
		$this->active_modules_topic = 'Het bekijken van onderwerp: %s';
		$this->active_time = 'Tijd';
		$this->active_user = 'Gebruiker';
		$this->active_users = 'Actieve gebruikers';
	}

	function board()
	{
		$this->board_active_users = 'Actieve gebruikers';
		$this->board_birthdays = 'Verjaardagen voor vandaag:';
		$this->board_can_post = 'Je mag reageren in dit forum.';
		$this->board_can_topics = 'Je mag onderwerpen bekijken in dit forum.';
		$this->board_cant_post = 'Je mag niet reageren in dit forum.';
		$this->board_cant_topics = 'Je mag geen onderwerpen bekijken in dit forum.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'Gasten';
		$this->board_last_post = 'Laatst geplaatst op';
		$this->board_mark = 'Markeer berichten als gelezen';
		$this->board_mark1 = 'Alle berichten en forums zijn gemerkt zoals gelezen.';
		$this->board_members = 'Leden';
		$this->board_message = '%s bericht';
		$this->board_most_online = 'De meeste gebruikers ooit online was %d op %s.';
		$this->board_nobday = 'Er is geen gebruiker jarig vandaag';
		$this->board_nobody = 'Er zijn geen gebruikers online';
		$this->board_nopost = 'Geen Onderwerpen';
		$this->board_noview = 'Je hebt geen permissie om de berichten op dit forum te bekijken.';
		$this->board_regfirst = 'Je hebt geen toestemming om het forum te bekijken. Als u zich registreert, kunt u het wel.';
		$this->board_replies = 'Antwoorden';
		$this->board_stats = 'Statistieken';
		$this->board_stats_string = '%s gebruikers hebben zich geregistreerd. Ons nieuwste lid is, %s.<br />Er zijn %s Onderwerpen en %s antwoorden in een totaal van %s berichten.';
		$this->board_topics = 'Onderwerpen';
		$this->board_topics_new = 'Er zijn nieuwe berichten in dit forum.';
		$this->board_topics_old = 'Er zijn geen nieuwe berichten in dit forum.';
		$this->board_users = 'Gebruikers';
		$this->board_write_topics = 'Je mag onderwerpen plaatsen in dit forum.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM bijnaam:';
		$this->cp_already_member = 'Het opgegeven E-Mail adres bestaat al.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'Augustus';
		$this->cp_avatar_current = 'Je huidige avatar';
		$this->cp_avatar_error = 'Avatar fout';
		$this->cp_avatar_must_select = 'Je moet een avatar kiezen.';
		$this->cp_avatar_none = 'Gebruik geen avatar';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Selecteer een avatar';
		$this->cp_avatar_size_height = 'Je avatar hoogte moet zijn tussen 1 en';
		$this->cp_avatar_size_width = 'Je avatar breedte moet zijn tussen 1 en';
		$this->cp_avatar_upload = 'Upload een avatar vanaf je harde schijf';
		$this->cp_avatar_upload_failed = 'Het uploaden van uw avatar mislukte. Het gegeven bestand bestaat misschien niet.';
		$this->cp_avatar_upload_not_image = 'Je kunt alleen afbeeldingen gebruiken als avatar.';
		$this->cp_avatar_upload_too_large = 'De door jou gegeven avatar is te groot. Het maximum is %d kilobytes.';
		$this->cp_avatar_url = 'Geef een URL van jouw avatar';
		$this->cp_avatar_use = 'Gebruik jouw opgestuurde avatar.';
		$this->cp_bday = 'Verjaardag:';
		$this->cp_been_updated = 'Jouw profiel is gewijzigd.';
		$this->cp_been_updated1 = 'Jouw avatar is gewijzigd.';
		$this->cp_been_updated_prefs = 'Jouw opties zijn gewijzigd.';
		$this->cp_changing_pass = 'Wijzig wachtwoord';
		$this->cp_contact_pm = 'Sta je anderen jouw toe om jou prive berichten te sturen?';
		$this->cp_cp = 'Controlle paneel';
		$this->cp_current_avatar = 'Huidige avatar';
		$this->cp_current_time = 'Het is nu %s.';
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Verander je avatar';
		$this->cp_editing_profile = 'Wijzigen van profiel';
		$this->cp_email = 'E-mail:';
		$this->cp_email_form = 'Anderen toestaan om contact met je te zoeken via het E-mail-formulier.';
		$this->cp_email_invaid = 'Het ingevoerde E-mailadres is ongeldig.';
		$this->cp_err_avatar = 'Er is een fout opgetreden tijdens het uploaden van uw avatar.';
		$this->cp_err_updating = 'Er is een fout opgetreden tijdens het updaten van uw profiel.';
		$this->cp_feb = 'Februari';
		$this->cp_file_type = 'De avatar die je hebt opgegeven is ongeldig. Controleer of je het adres goed hebt ingevoerd. Het mag alleen een .gif, .jpg of een .png bestand zijn.';
		$this->cp_format = 'Gebruikersnaam:';
		$this->cp_gmt = '[GMT] Greenwich betekent Tijd';
		$this->cp_gmt_nev1 = '[GMT-1:00] De Azoren, Kaapverdië';
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaï';
		$this->cp_gmt_nev11 = '[GMT-11:00] Centraal Eiland, Samoa';
		$this->cp_gmt_nev12 = '[GMT-12:00] Westlijke datumgrens';
		$this->cp_gmt_nev2 = '[GMT-2:00] Midden-Atlantisch';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos aires, Groenland';
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->cp_gmt_nev4 = '[GMT-4:00] Atlantische Tijd Canada';
		$this->cp_gmt_nev5 = '[GMT-5:00] Oost VS & Canada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Midden VS & Canada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Berg tijd van de V.S. & Canada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Pacific tijd US & Canada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaska'; //Translate
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlijn, Rome, Parijs';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, Nieuw-Caledonië';
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->cp_gmt_pos2 = '[GMT+2:00] Athene, Cairo, Jeruzalem';
		$this->cp_gmt_pos3 = '[GMT+3:00] Baghdad, Moskou, Nairobi';
		$this->cp_gmt_pos35 = '[GMT+3:30] Teheran';
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscateldruif, Tbilisi';
		$this->cp_gmt_pos45 = '[GMT+4:30] Kaboel';
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Calcutta, New Delhi'; //Translate
		$this->cp_gmt_pos6 = '[GMT+6:00] Alma Ata, Dhaka';
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, jakarta';
		$this->cp_gmt_pos8 = '[GMT+8:00] Peking, Hong Kong, Singapore';
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokyo, Seoel';
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Persoonlijke instellingen';
		$this->cp_height = 'Hoogte';
		$this->cp_icq = 'ICQ Nummer:';
		$this->cp_interest = 'Hobby:';
		$this->cp_jan = 'Januari';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Verander je avatar';
		$this->cp_label_edit_pass = 'Wijzig WachtWoord';
		$this->cp_label_edit_prefs = 'Verander je forum instellingen';
		$this->cp_label_edit_profile = 'Wijzig Profiel';
		$this->cp_label_edit_subs = 'Wijzig Abonnement';
		$this->cp_language = 'Taal';
		$this->cp_less_charac = 'Je naam mag niet langer zijn dan 32 tekens.';
		$this->cp_location = 'Locatie:';
		$this->cp_login_first = 'Je moet ingelogd zijn om toegang te krijgen tot uw instellingen.';
		$this->cp_mar = 'Maart';
		$this->cp_may = 'Mei';
		$this->cp_msn = 'MSN-adres:';
		$this->cp_must_orig = 'Je naam moet indentiek aan het origineel zijn. Je mag alleen gewone letters veranderen naar hoofdletters en cijfers toevoegen.';
		$this->cp_new_notmatch = 'Het nieuwe wachtwoord dat je hebt ingegeven komt niet overeen.';
		$this->cp_new_pass = 'Nieuw wachtwoord';
		$this->cp_no_flash = 'Flash-avatars zijn niet toegestaan.';
		$this->cp_not_exist = 'De datum die u hebt ingevoerd: (%s) bestaat niet!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Het oude wachtwoord dat je hebt ingegeven komt niet overeen met het wachtwoord in onze database.';
		$this->cp_old_pass = 'Oude wachtwoord';
		$this->cp_pass_notvaid = 'Je wachtwoord is ongeldig. zorg ervoor dat je alleen de toegestane leestekens zoals letters, nummers, verbindingsstreepjes, onderstreeptekens of spaties gebruikt.';
		$this->cp_preferences = 'Verander je forum instellingen';
		$this->cp_privacy = 'Privacy Opties';
		$this->cp_repeat_pass = 'Herhaal het nieuwe wachtwoord';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Toon uw activiteiten wanneer u het forum gebruikt?';
		$this->cp_show_email = 'E-mailadres laten zien in profiel?';
		$this->cp_signature = 'Handtekening:';
		$this->cp_size_max = 'De ingevoerde afmetingen voor uw avatar zijn te groot. De maximaal toegestane grootte is %s bij %s pixels.';
		$this->cp_skin = 'Uiterlijk Forum';
		$this->cp_sub_change = 'Wijzig Abonnement';
		$this->cp_sub_delete = 'Verwijder';
		$this->cp_sub_expire = 'Verloop datum';
		$this->cp_sub_name = 'Abonnement naam';
		$this->cp_sub_no_params = 'Geen parameters werden ingegeven.';
		$this->cp_sub_success = 'Je bent nu geabonnemeerd op %s.';
		$this->cp_sub_type = 'Abonnements type';
		$this->cp_sub_updated = 'De geselecteerde abonnementen zijn verwijderd.';
		$this->cp_topic_option = 'De Opties van het onderwerp';
		$this->cp_updated = 'Profiel bijgewerkt';
		$this->cp_updated1 = 'Avatar bijgewerkt';
		$this->cp_updated_prefs = 'Instellingen bijgewerkt';
		$this->cp_user_exists = 'Er is al een gebruiker met deze naam.';
		$this->cp_valided = 'Je wachtwoord is bevestigd en werd veranderd.';
		$this->cp_view_avatar = 'Laat Avatars zien?';
		$this->cp_view_emoticon = 'Laat smilies zien?';
		$this->cp_view_signature = 'Laat handtekening zien?';
		$this->cp_welcome = 'Welkom in het instellingen menu. Hier kun je je account naar wens bijstellen. Kies uit een van bovenstaande opties.';
		$this->cp_width = 'Breedte';
		$this->cp_www = 'Homepage:';
		$this->cp_yahoo = 'Yahoo adres:';
		$this->cp_zone = 'Tijd Zone';
	}

	function email()
	{
		$this->email_blocked = 'Deze gebruiker wil geen e-mail ontvangen door dit forumulier.';
		$this->email_email = 'E-mail:';
		$this->email_msgtext = 'E-mail uiterlijk:';
		$this->email_no_fields = 'Ga terug en controleer of alle velden ingevuld zijn.';
		$this->email_no_member = 'Er is geen gebruiker gevonden met deze naam';
		$this->email_no_perm = 'Je hebt geen toestemming om E-mail te sturen via dit forum.';
		$this->email_sent = 'Je E-mail is verstuurd.';
		$this->email_subject = 'Onderwerp:';
		$this->email_to = 'Naar:';
	}

	function forum()
	{
		$this->forum_by = 'Door';
		$this->forum_can_post = 'Je kunt reageren op de berichten in dit forum.';
		$this->forum_can_topics = 'Je kunt de onderwerpen in dit forum bekijken.';
		$this->forum_cant_post = 'Je kunt niet reageren op berichten in dit forum.';
		$this->forum_cant_topics = 'Je kunt geen onderwerpen in dit forum bekijken.';
		$this->forum_dot = 'punt';
		$this->forum_dot_detail = 'Laat je bericht zien in dit onderwerp';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gast';
		$this->forum_hot = 'Hot item';
		$this->forum_icon = 'Berichten icoontje';
		$this->forum_jump = 'Ga naar het laatste bericht van dit onderwerp';
		$this->forum_last = 'Laatste bericht';
		$this->forum_locked = 'Gesloten';
		$this->forum_moved = 'Verplaatst';
		$this->forum_msg = '%s bericht';
		$this->forum_new = 'Nieuw';
		$this->forum_new_poll = 'Creeër een stembus';
		$this->forum_new_topic = 'Start nieuw onderwerp';
		$this->forum_no_topics = 'Er zijn geen onderwerpen om weer te geven op dit forum.';
		$this->forum_noexist = 'Het gekozen forum bestaat niet.';
		$this->forum_nopost = 'Geen bericht';
		$this->forum_not = 'Niet';
		$this->forum_noview = 'Je hebt geen rechten de berichten op dit forum te bekijken.';
		$this->forum_pages = 'Pagina';
		$this->forum_pinned = 'Sticky';
		$this->forum_pinned_topic = 'Sticky onderwerp';
		$this->forum_poll = 'Stembus';
		$this->forum_regfirst = 'Je hebt geen toestemming om het forum te bekijken. Als je je registreert, kunt je dit wel.';
		$this->forum_replies = 'Antwoord';
		$this->forum_starter = 'Auteur';
		$this->forum_sub = 'Sub-forum';
		$this->forum_sub_last_post = 'Laatste bericht';
		$this->forum_sub_replies = 'Antwoorden';
		$this->forum_sub_topics = 'Onderwerpen';
		$this->forum_subscribe = 'Stuur een e-mail als er berichten geplaatst zijn in dit onderwerp';
		$this->forum_topic = 'Onderwerp';
		$this->forum_topics_new = 'Er zijn nieuwe berichten in dit forum.';
		$this->forum_topics_old = 'Er zijn geen nieuwe berichten in dit forum.';
		$this->forum_views = 'Bekeken';
		$this->forum_write_topics = 'Je kan onderwerpen aanmaken in dit forum.';
	}

	function help()
	{
		$this->help_available_files = 'Beschikbare help onderwerpen';
		$this->help_none = 'Er zijn geen help onderwerpen in de database';
	}

	function login()
	{
		$this->login_cant_logged = 'Je kon niet worden ingelogd. Controleer of je gebruikersnaam en wachtwoord.<br /><br />Ze zijn hoofdletter gevoelig, dus \'UsErNaMe\' is anders dan \'Username\'. ben er zeker van dat cookies ingeschakeld staan in je browser.';
		$this->login_cookies = 'Je browser moet cookies accepteren om in te kunnen loggen.';
		$this->login_forgot_pass = 'Vergat u uw wachtwoord?';
		$this->login_header = 'Inloggen';
		$this->login_logged = 'Je bent nu ingelogd.';
		$this->login_now_out = 'Je bent nu uitgelogd.';
		$this->login_out = 'Uitloggen';
		$this->login_pass = 'Wachtwoord';
		$this->login_pass_no_id = 'Er is geen gebruiker met de gebruikersnaam u op gaf.';
		$this->login_pass_request = 'Om het resetten van uw wachtwoord te voltooien, moet u op de link klikken in de email die naar u is verzonden.';
		$this->login_pass_reset = 'Zet wachtwoord terug';
		$this->login_pass_sent = 'Uw wachtwoord is gereset. Het nieuwe wachtwoord is verzonden naar het E-mailadres dat verbonden is aan uw gebruikersnaam.';
		$this->login_sure = 'Ben je je zeker dat je uit wilt loggen in \'%s\'?';
		$this->login_user = 'Gebruikersnaam';
	}

	function main()
	{
		$this->board_by = 'Door';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Je account is nog niet geactiveerd.';
		$this->main_activate_resend = 'Verstuur activatie E-mail opnieuw';
		$this->main_admincp = 'Beheerder instellingen';
		$this->main_banned = 'Je bent geblokkeerd van dit forum.';
		$this->main_code = 'Code'; //Translate
		$this->main_continue = 'Ga verder';
		$this->main_cp = 'Instellingen';
		$this->main_full = 'Vol';
		$this->main_help = 'Help';
		$this->main_load = 'Laad';
		$this->main_login = 'Log in';
		$this->main_logout = 'Log uit';
		$this->main_max_load = 'Onze excuses, maar %s is nu niet beschikbaar, door een te groot aantal ingelogde gebruikers.';
		$this->main_members = 'Leden';
		$this->main_messenger = 'Privé berichten';
		$this->main_new = 'Nieuw';
		$this->main_next = 'Volgende';
		$this->main_posts_new = 'Nieuw';
		$this->main_powered = 'Aangedreven door';
		$this->main_prev = 'Vorige';
		$this->main_queries = 'Wachtrijen';
		$this->main_quote = 'Citaat';
		$this->main_register = 'Registreren';
		$this->main_reminder = 'Attentie';
		$this->main_reminder_closed = 'Het forum is gesloten en alleen te zien door beheerders.';
		$this->main_said = 'Gezegd';
		$this->main_search = 'Zoeken';
		$this->main_seconds = 'Seconden';
		$this->main_welcome = 'Welkom';
		$this->main_welcome_guest = 'Welkom gast!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Verzend';
		$this->today = 'Vandaag';
		$this->yesterday = 'Gisteren';
	}

	function members()
	{
		$this->members_all = 'Alles';
		$this->members_email = 'E-mail:';
		$this->members_email_member = 'Stuur E-mail naar deze gebruiker';
		$this->members_group = 'Groep';
		$this->members_joined = 'Lid sinds';
		$this->members_list = 'Ledenlijst';
		$this->members_member = 'gebruiker';
		$this->members_pm = 'PB';
		$this->members_posts = 'Antwoorden';
		$this->members_send_pm = 'Stuur deze gebruiker een PB';
		$this->members_title = 'Titel';
		$this->members_vist_www = 'Bezoek de website van deze gebruiker';
		$this->members_www = 'Website:';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Weet je zeker dat je dit bericht wil verwijderen?';
		$this->mod_confirm_topic_delete = 'Weet je zeker dat je dit onderwerp wil verwijderen?';
		$this->mod_error_first_post = 'Je kan het eerste bericht in een onderwerp niet verwijderen.';
		$this->mod_error_move_category = 'Je kan een onderwerp niet verplaatsen naar een categorie';
		$this->mod_error_move_create = 'Je hebt geen toestemming om de topics naar dat forum te verplaatsen.';
		$this->mod_error_move_forum = 'Je kan een onderwerp niet verplaatsen naar een forum dat niet bestaat.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Je kan een onderwerp niet verplaatsen naar het forum waar het al staat.';
		$this->mod_label_controls = 'Moderator Beheer';
		$this->mod_label_description = 'Omschrijving';
		$this->mod_label_emoticon = 'Smilies omzetten naar afbeeldingen?';
		$this->mod_label_global = 'Globaal Onderwerp';
		$this->mod_label_mbcode = 'Formaat MbCode?';
		$this->mod_label_move_to = 'Verplaats naar';
		$this->mod_label_options = 'Opties';
		$this->mod_label_post_delete = 'Verwijder bericht';
		$this->mod_label_post_edit = 'Bewerk bericht';
		$this->mod_label_title = 'Titel';
		$this->mod_label_title_original = 'Oorspronkelijke Titel';
		$this->mod_label_title_split = 'Gespleten Titel';
		$this->mod_label_topic_delete = 'Verwijder onderwerp';
		$this->mod_label_topic_edit = 'Bewerk onderwerp';
		$this->mod_label_topic_lock = 'Sluit onderwerp';
		$this->mod_label_topic_move = 'Verplaats onderwerp';
		$this->mod_label_topic_move_complete = 'Breng het onderwerp volledig over naar het nieuwe forum';
		$this->mod_label_topic_move_link = 'Breng het onderwerp naar het nieuwe forum over, en laat een link in zijn nieuwe plaats in het oude forum.';
		$this->mod_label_topic_pin = 'Zet onderwerp vast';
		$this->mod_label_topic_split = 'Gespleten Onderwerp';
		$this->mod_missing_post = 'Het bericht dat je omschreef kan niet worden gevonden.';
		$this->mod_missing_topic = 'Het onderwerp dat je omschreef kan niet worden gevonden.';
		$this->mod_no_action = 'Je moet een actie kiezen.';
		$this->mod_no_post = 'Je moet een bericht specificeren.';
		$this->mod_no_topic = 'Je moet een onderwerp specificeren.';
		$this->mod_perm_post_delete = 'Je hebt geen toestemming om dit bericht te verwijderen.';
		$this->mod_perm_post_edit = 'Je hebt geen toestemming om dit bericht te bewerken.';
		$this->mod_perm_topic_delete = 'Je hebt geen toestemming om dit onderwerp te verwijderen.';
		$this->mod_perm_topic_edit = 'Je hebt geen toestemming om dit onderwerp te bewerken.';
		$this->mod_perm_topic_lock = 'Je hebt geen toestemming om dit onderwerp te sluiten.';
		$this->mod_perm_topic_move = 'Je hebt geen toestemming om dit onderwerp te verplaatsen.';
		$this->mod_perm_topic_pin = 'Je hebt geen toestemming om dit onderwerp vast te zetten.';
		$this->mod_perm_topic_split = 'Je hebt geen toestemming om dit onderwerp te verdelen.';
		$this->mod_perm_topic_unlock = 'Je hebt geen toestemming om dit onderwerp te openen.';
		$this->mod_perm_topic_unpin = 'Je hebt geen toestemming om dit onderwerp los te zetten.';
		$this->mod_success_post_delete = 'Het bericht is verwijderd.';
		$this->mod_success_post_edit = 'Bericht gewijzigd';
		$this->mod_success_split = 'Het onderwerp is met succes opgedeeld.';
		$this->mod_success_topic_delete = 'Onderwerp verwijderd.';
		$this->mod_success_topic_edit = 'Het onderwerp is succesvol gewijzigd.';
		$this->mod_success_topic_move = 'Het onderwerp is succesvol verplaatst.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'punt';
		$this->new_posts_dot_detail = 'Laat je bericht zien in dit onderwerp';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Hot item';
		$this->new_posts_last = 'Laatste bericht';
		$this->new_posts_locked = 'Gesloten';
		$this->new_posts_moved = 'Verplaatst';
		$this->new_posts_new = 'Nieuw';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Niet';
		$this->new_posts_pinned = 'Sticky';
		$this->new_posts_poll = 'Stembus';
		$this->new_posts_topic = 'Onderwerp';
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
		$this->pm_cant_del = 'Je hebt geen rechten om dit bericht te verwijderen';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Verwijder alle berichten';
		$this->pm_delete = 'Verwijder';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Bericht verwijderd.';
		$this->pm_deleted_all = 'Berichten verwijderd.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'Er waren problemen met het versturen van je bericht naar sommige ontvangers.<br /><br />De volgende gebruikers bestaan niet: %s<br /><br />The volgende gebruikers accepteren persoonlijke berichten niet: %s';
		$this->pm_fields = 'Je bericht kon niet worden verstuurd, zorg ervoor dat alle velden ingevuld zijn.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Postvak In';
		$this->pm_folder_new = '%s nieuw';
		$this->pm_folder_sentbox = 'Verstuurd';
		$this->pm_from = 'Van';
		$this->pm_group = 'Groep';
		$this->pm_guest = 'Als gast, kunt u geen privé berichten versturen. Login of Registreer, aub.';
		$this->pm_joined = 'Lid sinds';
		$this->pm_messenger = 'Privé berichten';
		$this->pm_msgtext = 'Bericht:';
		$this->pm_multiple = 'Scheid verschillende ontvangers met een ;';
		$this->pm_no_folder = 'U moet een map kiezen.';
		$this->pm_no_member = 'Er is geen gebruiker met dat id gevonden.';
		$this->pm_no_number = 'er is geen bericht gevonden met dat nummer';
		$this->pm_no_title = 'Geen onderwerp';
		$this->pm_nomsg = 'Er zijn geen berichten in je Postvak In';
		$this->pm_noview = 'Je hebt geen rechten om dit bericht te bekijken';
		$this->pm_online = 'Deze gebruiker is momenteel online';
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Persoonlijke messenger';
		$this->pm_personal_msging = 'PB sturen';
		$this->pm_pm = 'PB';
		$this->pm_posts = 'Antwoorden';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Ontvangers';
		$this->pm_reply = 'Beantwoord';
		$this->pm_send = 'Verstuur';
		$this->pm_sendamsg = 'Stuur een bericht';
		$this->pm_sendingpm = 'Stuur een PB';
		$this->pm_sendon = 'Verstuurd op';
		$this->pm_success = 'Je privé bericht is met succes verstuurd';
		$this->pm_sure_del = 'Weet je zeker dat u dit bericht wilt verwijderen?';
		$this->pm_sure_delall = 'Weet je zeker dat je alle berichten wilt verwijderen in deze map??';
		$this->pm_title = 'Titel:';
		$this->pm_to = 'Aan:';
	}

	function post()
	{
		$this->post_attach = 'Bijlagen';
		$this->post_attach_add = 'Bijlage toevoegen';
		$this->post_attach_disrupt = 'Het toevoegen of verwijderen van bijlagen zal je bericht niet verstoren.';
		$this->post_attach_failed = 'Het uploaden van de bijlage is mislukt. Het bestand bestaat misschien niet.';
		$this->post_attach_not_allowed = 'Je kunt dit type bestand niet als bijlage toevoegen.';
		$this->post_attach_remove = 'Bijlage verwijderen';
		$this->post_attach_too_large = 'Het bestand is te groot. De maximum grootte is %d KB.';
		$this->post_cant_create = 'Als gast, hebt je geen toestemming om onderwerpen tot stand te brengen. Als je je registreert, kun je je onderwerp plaatsen.';
		$this->post_cant_create1 = 'Je hebt geen rechten om een onderwerp aan te maken.';
		$this->post_cant_enter = 'Je stem kon niet worden verwerkt, of je hebt al gestemd of je heeft geen rechten om te stemmen';
		$this->post_cant_poll = 'Als gast, heb je geen toestemming om een stembus te plaatsen. Als je je registreert, kun je je stembus plaatsen.';
		$this->post_cant_poll1 = 'Je hebt geen rechten om een stembus aan te maken.';
		$this->post_cant_reply = 'Je hebt geen rechten om te reageren op dit onderwerp';
		$this->post_cant_reply1 = 'Als gast, heb je geen toestemming om op onderwerpen te antwoorden. Als u registreert, kunt u berichten plaatsen.';
		$this->post_cant_reply2 = 'Je hebt geen rechten om op onderwerpen te reageren';
		$this->post_closed = 'Dit onderwerp is gesloten';
		$this->post_create_poll = 'Maak een stembus';
		$this->post_create_topic = 'Maak onderwerp';
		$this->post_creating = 'Maak onderwerp';
		$this->post_creating_poll = 'Creeër stembus';
		$this->post_flood = 'Je hebt een bericht geplaatst in de afgelopen %s seconden, en je kunt op dit ogenblik geen bericht plaatsen<br /><br />probeer aub nog eens over een paar seconden.';
		$this->post_guest = 'Gast';
		$this->post_icon = 'Bericht Icoontje';
		$this->post_last_five = 'Laatste 5 berichten in omgekeerde volgorde';
		$this->post_length = 'Controleer lengte';
		$this->post_mbcode_address = 'Geef adres op';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blauw';
		$this->post_mbcode_bold = 'Vet';
		$this->post_mbcode_bold1 = 'V';
		$this->post_mbcode_chocolate = 'Chocolade';
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Kleur';
		$this->post_mbcode_coral = 'Koraal';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Karmozijnrood';
		$this->post_mbcode_darkblue = 'Donker Blauw';
		$this->post_mbcode_darkred = 'Donker Rood';
		$this->post_mbcode_deepink = 'Roze';
		$this->post_mbcode_detail = 'Geef een beschrijving';
		$this->post_mbcode_email = 'E-mail';
		$this->post_mbcode_firered = 'Baksteen Rood';
		$this->post_mbcode_font = 'Lettertype';
		$this->post_mbcode_green = 'Groen';
		$this->post_mbcode_huge = 'Heel groot';
		$this->post_mbcode_image = 'Afbeelding';
		$this->post_mbcode_image1 = 'AFB';
		$this->post_mbcode_impact = 'Effect';
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Cursief';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Groot';
		$this->post_mbcode_length = 'Je bericht heeft "+length+" lettertekens.';
		$this->post_mbcode_limegreen = 'Limoen Groen';
		$this->post_mbcode_medium = 'Normaal';
		$this->post_mbcode_orange = 'Oranje';
		$this->post_mbcode_orangered = 'Oranje Rood';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Paars';
		$this->post_mbcode_quote = 'Citeer';
		$this->post_mbcode_red = 'Rood';
		$this->post_mbcode_royalblue = 'Royal Blauw';
		$this->post_mbcode_sandybrown = 'Zand Bruin';
		$this->post_mbcode_seagreen = 'Zee Groen';
		$this->post_mbcode_sienna = 'Bruin';
		$this->post_mbcode_silver = 'Zilver';
		$this->post_mbcode_size = 'Grootte';
		$this->post_mbcode_skyblue = 'Lucht Blauw';
		$this->post_mbcode_small = 'Klein';
		$this->post_mbcode_strike = 'Doorstrepen';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Heel Klein';
		$this->post_mbcode_tomato = 'Tomaten Rood';
		$this->post_mbcode_underline = 'Onderstreept';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Lichtbruin';
		$this->post_msg = 'Bericht';
		$this->post_must_msg = 'Je moet een bericht ingeven als je deze wilt plaatsen.';
		$this->post_must_options = 'Je moet de opties ingeven bij het maken van een nieuwe stembus.';
		$this->post_must_title = 'Je moet een titel ingeven bij het maken van een nieuw onderwerp.';
		$this->post_new_poll = 'Nieuwe stembus';
		$this->post_new_topic = 'Nieuw onderwerp';
		$this->post_no_forum = 'Het betreffende forum kon niet gevonden worden.';
		$this->post_no_topic = 'Er werd geen onderwerp gespecificeerd.';
		$this->post_no_vote = 'Je moet een keuze maken om te stemmen.';
		$this->post_option_emoticons = 'Zet smilies om naar plaatjes';
		$this->post_option_global = 'Maak dit onderwerp globaal?';
		$this->post_option_mbcode = 'formaat MbCode?';
		$this->post_optional = 'Opties';
		$this->post_options = 'Opties';
		$this->post_poll_options = 'stembus Opties';
		$this->post_poll_row = 'Een per rij';
		$this->post_posted = 'Geplaatst op';
		$this->post_posting = 'Plaats';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Beantwoorden';
		$this->post_reply_topic = 'Antwoord op onderwerp';
		$this->post_replying = 'Reageer op onderwerp';
		$this->post_replying1 = 'Reageer';
		$this->post_smiles = 'Klikbare Smilies';
		$this->post_too_many_options = 'Je moet tussen de 2 en %d keuzemogelijkheden aanmaken bij een stembus.';
		$this->post_topic_detail = 'Beschrijving van onderwerp';
		$this->post_topic_title = 'Titel van onderwerp';
		$this->post_view_topic = 'Bekijk gehele onderwerp';
		$this->post_voting = 'Stemmen';
	}

	function printer()
	{
		$this->printer_back = 'Terug';
		$this->printer_not_found = 'Het onderwerp kon niet worden gevonden.het kan zijn dat het is verwijderd, verplaatst of nooit bestaan heeft';
		$this->printer_not_found_title = 'Onderwerp niet gevonden';
		$this->printer_perm_topics = 'Je hebt geen rechten om de onderwerpen te bekijken.';
		$this->printer_perm_topics_guest = 'Je hebt geen toestemming om onderwerpen te bekijken. Als je je registreert, kun je hem wel bekijken.';
		$this->printer_posted_on = 'Geplaatst op';
		$this->printer_send = 'Stuur naar printer';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM:';
		$this->profile_av_sign = 'Avatar and handtekening';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Verjaardag:';
		$this->profile_contact = 'Contact'; //Translate
		$this->profile_email_address = 'E-mail:';
		$this->profile_fav = 'Favoriete forum:';
		$this->profile_fav_forum = '%s (%d%% van de berichten van deze gebruiker)';
		$this->profile_icq_uin = 'ICQ:';
		$this->profile_info = 'Informatie';
		$this->profile_interest = 'Wat ik kwijt wil:';
		$this->profile_joined = 'Aangemeld';
		$this->profile_last_post = 'Laatste bericht';
		$this->profile_list = 'Gebruikers Lijst';
		$this->profile_location = 'Locatie:';
		$this->profile_member = 'Groep:';
		$this->profile_member_title = 'Titel:';
		$this->profile_msn = 'MSN:';
		$this->profile_must_user = 'Je moet een gebruiker invullen voordat je een profiel kunt bekijken.';
		$this->profile_no_member = 'Er is geen gebruiker met dit ID. Het kan zijn dat zijn account verwijderd is.';
		$this->profile_none = '[ Geen ]';
		$this->profile_not_post = 'Heeft nog niets geplaatst.';
		$this->profile_online = 'Deze gebruiker is momenteel online';
		$this->profile_pm = 'Privé Berichten';
		$this->profile_postcount = '%s totaal, %s per dag';
		$this->profile_posts = 'Berichten:';
		$this->profile_private = '[ Prive ]';
		$this->profile_profile = 'Profiel';
		$this->profile_signature = 'Handtekening:';
		$this->profile_unkown = '[ Onbekend ]';
		$this->profile_view_profile = 'Bekijk Profiel van';
		$this->profile_www = 'Homepage:';
		$this->profile_yahoo = 'Yahoo:';
	}

	function register()
	{
		$this->register_activated = 'Je aanmelding is voltooid!';
		$this->register_activating = 'Account activatie';
		$this->register_activation_error = 'Er was een fout geconstateerd tijdens het activeren van je registratie. Kijk in je browser na of er het hele adres uit je activatie e-mail staat. Mocht dit probleem zich voor blijven doen, neem dan contact op met de beheerder van dit forum om het mailtje opnieuw gestuurd te krijgen.';
		$this->register_confirm_passwd = 'Bevestig wachtwoord';
		$this->register_done = 'Je bent geregistreerd! Je kunt nu inloggen.';
		$this->register_email = 'E-mail';
		$this->register_email_invalid = 'Je hebt een ongeldig E-mail adres ingevoerd.';
		$this->register_email_used = 'Het door jou ingegeven E-mail adres is al aan een andere gebruiker toegewezen.';
		$this->register_fields = 'Je hebt niet alle velden ingevuld.';
		$this->register_image = 'Gelieve de tekst in te geven die in het beeld wordt getoond.';
		$this->register_image_invalid = 'Om te verifiëren dat je een menselijke registrant bent en geen robot, moet je de tekst zoals aangetoond in het beeld typen.';
		$this->register_must_activate = 'Je bent geregistreerd. Er is een e-mail gestuurd naar %s met de activerings-informatie. Je account heeft beperkte mogelijkheden tot je account geactiveerd is.';
		$this->register_name_invalid = 'Je hebt een ongeldige naam ingevoerd.';
		$this->register_name_taken = 'Die gebruikersnaam is al bezet.';
		$this->register_new_user = 'gewenste gebruikersnaam';
		$this->register_pass_invalid = 'Het ingegeven wachtwoord is niet juist. Controleer of je alleen geldige leestekens zoals letters, nummers, streepjes, onderstreeptekens of spaties hebt gebruikt, en het op zijn minst uit 5 leestekens bestaat.';
		$this->register_pass_match = 'De wachtwoorden komen niet overeen.';
		$this->register_passwd = 'Wachtwoord';
		$this->register_reg = 'Registreer';
		$this->register_reging = 'Aan het registreren';
	}

	function search()
	{
		$this->search_advanced = 'Geavanceerd';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Normaal';
		$this->search_characters = 'Karakters van bericht';
		$this->search_day = 'Dag';
		$this->search_days = 'Dagen';
		$this->search_exact_name = 'Nauwkeurige naam';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Zoeken op';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Groep';
		$this->search_guest = 'Gast';
		$this->search_in = 'Zoeken in';
		$this->search_in_posts = 'Zoek ALLEEN in berichten';
		$this->search_ip = 'IP-Adres';
		$this->search_joined = 'Geregistreerd:';
		$this->search_level = 'Gebruikers level';
		$this->search_match = 'Zoek naar overeenkomsten';
		$this->search_matches = 'Overeenkomsten';
		$this->search_month = 'Maand';
		$this->search_months = 'Maanden';
		$this->search_mysqldoc = 'MySQL Documentatie';
		$this->search_newer = 'Nieuwer';
		$this->search_no_results = 'Geen zoekresultaten.';
		$this->search_no_words = 'Je moet een zoekterm invullen.<br /><br />Elke term moet langer zijn dan 3 karakters, letters, nummers, apostrof en onderstrepingen ook meegeteld.';
		$this->search_older = 'Ouder';
		$this->search_online = 'Deze gebruiker is momenteel online.';
		$this->search_only_display = 'Toon alleen eerste';
		$this->search_partial_name = 'Gedeelte naam';
		$this->search_post_icon = 'Bericht pictogram';
		$this->search_posted_on = 'Geplaatst op';
		$this->search_posts = 'berichten';
		$this->search_posts_by = 'Alleen in berichten van';
		$this->search_regex = 'Zoeken op regelmatige uitdrukkingen';
		$this->search_regex_failed = 'Uw regelmatige ontbroken uitdrukking. Gelieve te zien de MySQL- documentatie voor regelmatige uitdrukking helpen.';
		$this->search_relevance = 'Bericht Relevantie: %d%%';
		$this->search_replies = 'Antwoorden';
		$this->search_result = 'Zoek resultaten';
		$this->search_search = 'Zoeken';
		$this->search_select_all = 'Selecteer alles';
		$this->search_show_posts = 'Toon overeenkomende berichten';
		$this->search_sound = 'Hoort zich aan als';
		$this->search_starter = 'Gestart door';
		$this->search_than = 'dan';
		$this->search_topic = 'Onderwerp';
		$this->search_unreg = 'Niet geregistreerd';
		$this->search_week = 'Week';
		$this->search_weeks = 'Weken';
		$this->search_year = 'Jaar';
	}

	function topic()
	{
		$this->topic_attached = 'Bijgesloten bestand:';
		$this->topic_attached_downloads = 'Downloads';
		$this->topic_attached_perm = 'Je hebt geen toestemming om dit bestand te downloaden.';
		$this->topic_attached_title = 'Bijgesloten bestand';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Start nieuwe stembus';
		$this->topic_create_topic = 'Start nieuw onderwerp';
		$this->topic_delete = 'Verwijder';
		$this->topic_delete_post = 'Delete dit onderwerp';
		$this->topic_edit = 'Bewerk';
		$this->topic_edit_post = 'Bewerk dit onderwerp';
		$this->topic_edited = 'Laatst bewerkt op %s door %s';
		$this->topic_error = 'Fout';
		$this->topic_group = 'Groep';
		$this->topic_guest = 'Gast';
		$this->topic_ip = 'IP-Adres';
		$this->topic_joined = 'Lid sinds';
		$this->topic_level = 'Leden afdeling';
		$this->topic_links_aim = 'Stuur een AIM bericht naar %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Stuur een E-mail aan %s';
		$this->topic_links_icq = 'Stuur een ICQ bericht naar %s';
		$this->topic_links_msn = 'Bekijk %s\'s MSN profiel';
		$this->topic_links_pm = 'Stuur een persoonlijk bericht naar %s';
		$this->topic_links_web = 'Bezoek %s\'s website';
		$this->topic_links_yahoo = 'Stuur een bericht naar %s met Yahoo! Messenger';
		$this->topic_lock = 'Sluiten';
		$this->topic_locked = 'Onderwerp gesloten';
		$this->topic_move = 'Verplaats';
		$this->topic_no_votes = 'Er zijn nog geen stemmen in deze stembus.';
		$this->topic_not_found = 'Onderwerp niet gevonden';
		$this->topic_not_found_message = 'Het onderwerp kan niet gevonden worden. mogelijk is het verwijderd';
		$this->topic_online = 'Deze gebruiker is momenteel online';
		$this->topic_options = 'Onderwerp opties';
		$this->topic_pages = 'Bladzijden';
		$this->topic_perm_view = 'Je hebt geen rechten om dit onderwerp bekijken.';
		$this->topic_perm_view_guest = 'Je hebt geen toestemming om onderwerpen te bekijken. Als je je registreert, kun je deze wel bekijken.';
		$this->topic_pin = 'Sticky';
		$this->topic_posted = 'Geplaatst';
		$this->topic_posts = 'berichten';
		$this->topic_print = 'Printervriendelijk';
		$this->topic_quote = 'Citeer';
		$this->topic_reply = 'Antwoord op onderwerp';
		$this->topic_split = 'Verdeel';
		$this->topic_split_finish = 'Beëindig Al het Verdelen';
		$this->topic_split_keep = 'Verplaats dit bericht niet';
		$this->topic_split_move = 'Verplaats dit bericht';
		$this->topic_subscribe = 'Stuur me een E-mail wanneer er gereageerd is op dit onderwerp';
		$this->topic_top = 'Ga naar de bovenkant van de pagina';
		$this->topic_unlock = 'Heropenen';
		$this->topic_unpin = 'Unsticky';
		$this->topic_unreg = 'Ongeregistreerd';
		$this->topic_view = 'Bekijk resultaten';
		$this->topic_viewing = 'Bekijk onderwerp';
		$this->topic_vote = 'Stem';
		$this->topic_vote_count_plur = '%d stemmen';
		$this->topic_vote_count_sing = '%d stem';
		$this->topic_votes = 'Stemmen';
	}
}
?>