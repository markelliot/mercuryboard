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
 * $Id: it.php,v 1.32 2006/07/26 17:56:19 jon Exp $
 **/

/**
 * Italian language module
 *
 * @author Filippo Bovo <ikari@ctonet.it>
 * @since 1.0.0 RC1
 **/
class it
{
	function active()
	{
		$this->active_last_action = 'Ultima Attività';
		$this->active_modules_active = 'Visualizza Attività Utenti';
		$this->active_modules_board = 'Visualizza Indice';
		$this->active_modules_cp = 'Usa Pannello di Controllo';
		$this->active_modules_forum = 'Visita il forum: %s';
		$this->active_modules_help = 'Usa Help';
		$this->active_modules_login = 'In Connessione o Disconnessione';
		$this->active_modules_members = 'Visualizza Lista Iscritti';
		$this->active_modules_mod = 'Modera';
		$this->active_modules_pm = 'Usa Messaggi Privati';
		$this->active_modules_post = 'Scrive un Messaggio';
		$this->active_modules_printer = 'Stampa la discussione: %s';
		$this->active_modules_profile = 'Visualizza il profilo di: %s';
		$this->active_modules_search = 'Cerca';
		$this->active_modules_topic = 'Legge la discussione: %s';
		$this->active_time = 'Ora';
		$this->active_user = 'Utente';
		$this->active_users = 'Attività Utenti';
	}

	function board()
	{
		$this->board_active_users = 'Attività Utenti';
		$this->board_birthdays = 'Compleanni di Oggi:';
		$this->board_can_post = 'Puoi ripondere alle discussioni.';
		$this->board_can_topics = 'Puoi leggere ma non creare discussioni.';
		$this->board_cant_post = 'Non puoi rispondere alle discussioni.';
		$this->board_cant_topics = 'Non puoi leggere o creare discussioni.';
		$this->board_forum = 'Argomenti';
		$this->board_guests = 'ospiti';
		$this->board_last_post = 'Ultima Discussione';
		$this->board_mark = 'Segna tutti le discussioni come già lette';
		$this->board_mark1 = 'Tutte le discussioni e gli argomenti sono segnati come già letti.';
		$this->board_members = 'iscritti';
		$this->board_message = '%s Messaggio';
		$this->board_most_online = 'Il più alto numero di utenti online è stato di %d il giorno %s.';
		$this->board_nobday = 'Non ci sono compleanni oggi.';
		$this->board_nobody = 'Non ci sono utenti online.';
		$this->board_nopost = 'Nessuna Discussione';
		$this->board_noview = 'Non puoi leggere la bacheca.';
		$this->board_regfirst = 'Non puoi leggere la bacheca. Lo puoi fare solo registrandoti.';
		$this->board_replies = 'Risposte';
		$this->board_stats = 'Statistiche';
		$this->board_stats_string = '%s utenti si sono registrati. Diamo il benvenuto al nostro più recente iscritto: %s.<br /> Ci sono %s discussioni e %s risposte, per un totale di %s messaggi.';
		$this->board_topics = 'Discussioni';
		$this->board_topics_new = 'Ci sono nuovi messaggi in questo forum.';
		$this->board_topics_old = 'Non ci sono nuovi messaggi in questo forum.';
		$this->board_users = 'utenti';
		$this->board_write_topics = 'Puoi leggere ed inviare nuovi messaggi.';
	}

	function cp()
	{
		$this->cp_aim = 'Nome AIM';
		$this->cp_already_member = 'L\'indirizzo email che hai inserito è già utilizzato da un iscritto.';
		$this->cp_apr = 'Aprile';
		$this->cp_aug = 'Agosto';
		$this->cp_avatar_current = 'Avatar in uso';
		$this->cp_avatar_error = 'Errore Avatar';
		$this->cp_avatar_must_select = 'Devi selezionare un avatar.';
		$this->cp_avatar_none = 'Nessun avatar';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Seleziona un avatar';
		$this->cp_avatar_size_height = 'L\'altezza del tuo avatar deve essere tra 1 e';
		$this->cp_avatar_size_width = 'La larghezza del tuo avatar deve essere tra 1 e';
		$this->cp_avatar_upload = 'Trasferisci un avatar dal tuo computer';
		$this->cp_avatar_upload_failed = 'Trasferimento avatar Fallito. Il file specificato sembra non esistere.';
		$this->cp_avatar_upload_not_image = 'Poi trasferire solo immagini da usare come avatar.';
		$this->cp_avatar_upload_too_large = 'L\'avatar che hai specificato è troppo pesante. La dimensione massima consentita è %d kilobytes.';
		$this->cp_avatar_url = 'Inserisci l\'URL del tuo avatar';
		$this->cp_avatar_use = 'Usa avatar trasferito';
		$this->cp_bday = 'Compleanno';
		$this->cp_been_updated = 'Il tuo profilo è stato aggiornato.';
		$this->cp_been_updated1 = 'Il tuo avatar è stato traferito.';
		$this->cp_been_updated_prefs = 'Le tue preferenze sono state aggiornate.';
		$this->cp_changing_pass = 'Modifica Password';
		$this->cp_contact_pm = 'Permetti agli altri iscritti di contattarti via messenger?';
		$this->cp_cp = 'Pannello di Controllo';
		$this->cp_current_avatar = 'Avatar Attuale';
		$this->cp_current_time = 'Attualmente sono le %s.';
		$this->cp_dec = 'Dicembre';
		$this->cp_editing_avatar = 'Modifica Avatar';
		$this->cp_editing_profile = 'Modifica Profile';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Vuoi ricevere email da altri utenti tramite forum?';
		$this->cp_email_invaid = 'L\'indirizzo email che hai inserito non è valido.';
		$this->cp_err_avatar = 'Errore Aggiornamento Avatar';
		$this->cp_err_updating = 'Errore Aggiornamento Profilo';
		$this->cp_feb = 'Febbraio';
		$this->cp_file_type = 'L\'avatar che hai inserito non è valido. Assicurati che l\'URL sia corretta, e che l\'estensione del file sia: gif, jpg, o png.';
		$this->cp_format = 'Nome';
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
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Roma, Paris';
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
		$this->cp_header = 'Pannello di Controllo Utente';
		$this->cp_height = 'Altezza';
		$this->cp_icq = 'Numero ICQ';
		$this->cp_interest = 'Interessi';
		$this->cp_jan = 'Gennaio';
		$this->cp_july = 'Luglio';
		$this->cp_june = 'Giugno';
		$this->cp_label_edit_avatar = 'Modifica Avatar';
		$this->cp_label_edit_pass = 'Modifica Password';
		$this->cp_label_edit_prefs = 'Modifica Preferenze';
		$this->cp_label_edit_profile = 'Modifica Profilo';
		$this->cp_label_edit_subs = 'Modifica Sottoscrizioni';
		$this->cp_language = 'Lingua';
		$this->cp_less_charac = 'Il tuo nome deve essere al massimo di 32 caratteri.';
		$this->cp_location = 'Località';
		$this->cp_login_first = 'Devi essere riconosciuto dal sistema (login) per accedere al pannello di controllo.';
		$this->cp_mar = 'Marzo';
		$this->cp_may = 'Maggio';
		$this->cp_msn = 'Identità MSN';
		$this->cp_must_orig = 'Il tuo nome deve essere identico all\'originale. Puoi cambiare solamente le lettere maiscole/minuscole e gli spazi.';
		$this->cp_new_notmatch = 'Le nuove passwords che hai inserito non corrispondono.';
		$this->cp_new_pass = 'Nuova Password';
		$this->cp_no_flash = 'Gli avatar flash non sono permessi su questa bacheca.';
		$this->cp_not_exist = 'La data che hai inserito (%s) non esiste!';
		$this->cp_nov = 'Novembre';
		$this->cp_oct = 'Ottobre';
		$this->cp_old_notmatch = 'La vecchia password che hai inserito non combacia con quella nel nostro database.';
		$this->cp_old_pass = 'Vecchia Password';
		$this->cp_pass_notvaid = 'La tua password non è valida. Assicurati di aver usato solo caratteri validi come lettere, numeri, trattini (-), underscore (_), o spazi.';
		$this->cp_preferences = 'Modifica Preferenze';
		$this->cp_privacy = 'Opzioni Privacy';
		$this->cp_repeat_pass = 'Riscrivi Nuova Password';
		$this->cp_sept = 'Settembre';
		$this->cp_show_active = 'Mostra la tua attività quando navighi nei forum?';
		$this->cp_show_email = 'Mostra l\'indirizzo email nel profilo?';
		$this->cp_signature = 'Firma';
		$this->cp_size_max = 'L\'avatar che hai inserito è troppo grande. La dimensione massima ammessa è %s x %s pixels.';
		$this->cp_skin = 'Skin Bacheca';
		$this->cp_sub_change = 'Cambia Sottoscrizioni';
		$this->cp_sub_delete = 'Cancella';
		$this->cp_sub_expire = 'Data di Termine';
		$this->cp_sub_name = 'Nome Sottoscrizione';
		$this->cp_sub_no_params = 'Nessun parametro inserito.';
		$this->cp_sub_success = 'Ora sei sottoscritto a questo %s.';
		$this->cp_sub_type = 'Tipo Sottoscrizione';
		$this->cp_sub_updated = 'Le sottoscrizioni alle discussioni selezionate sono stati eliminati.';
		$this->cp_topic_option = 'Opzioni Discussione';
		$this->cp_updated = 'Profilo Aggiornato';
		$this->cp_updated1 = 'Avatar Aggiornato';
		$this->cp_updated_prefs = 'Preferenze Aggiornate';
		$this->cp_user_exists = 'Esiste già un utente con questo nome.';
		$this->cp_valided = 'La tua password è stata convalidata ed aggiornata.';
		$this->cp_view_avatar = 'Visualizza Avatars nelle discussioni?';
		$this->cp_view_emoticon = 'Visualizza Emoticons nelle discussioni?';
		$this->cp_view_signature = 'Visualizza Signatures nelle discussioni?';
		$this->cp_welcome = 'Benvenuto nel pannello di controllo utenti. Da qui puoi configurare il tuo account selezionando una delle opzioni che vedi qui sopra.';
		$this->cp_width = 'Larghezza';
		$this->cp_www = 'Sito Web';
		$this->cp_yahoo = 'Identità Yahoo';
		$this->cp_zone = 'Fuso Orario';
	}

	function email()
	{
		$this->email_blocked = 'Questo utente non vuole ricevere email dal forum.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Corpo Email:';
		$this->email_no_fields = 'Torna indietro ed assicurati che tutti i campi siano completi.';
		$this->email_no_member = 'Nessun utente trovato con questo nome';
		$this->email_no_perm = 'Non ti è concesso inviare email tramite questo form.';
		$this->email_sent = 'La tua email è stata inviata.';
		$this->email_subject = 'Titolo:';
		$this->email_to = 'A:';
	}

	function forum()
	{
		$this->forum_by = 'Di';
		$this->forum_can_post = 'Puoi rispondere alle discussioni.';
		$this->forum_can_topics = 'Puoi leggere le discussioni.';
		$this->forum_cant_post = 'Non puoi rispodere alle discussioni.';
		$this->forum_cant_topics = 'Non puoi leggere le discussoni.';
		$this->forum_dot = 'punto';
		$this->forum_dot_detail = 'significa che hai partecipato a questa discussione.';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Visitatore';
		$this->forum_hot = 'Caldo';
		$this->forum_icon = 'Icone Messaggi';
		$this->forum_jump = 'Vai al nuovo messaggio della discussione';
		$this->forum_last = 'Ultimo messaggio';
		$this->forum_locked = 'Bloccato';
		$this->forum_moved = 'Spostato';
		$this->forum_msg = '%s Messaggi';
		$this->forum_new = 'Nuovo';
		$this->forum_new_poll = 'Crea Nuovo Sondaggio';
		$this->forum_new_topic = 'Crea Nuova Discussione';
		$this->forum_no_topics = 'Non ci sono discussioni in questo forum.';
		$this->forum_noexist = 'Il forum specificato non esiste.';
		$this->forum_nopost = 'Nessun Messaggio';
		$this->forum_not = 'Nessun';
		$this->forum_noview = 'Non hai il permesso di leggere questo forum.';
		$this->forum_pages = 'Pagine';
		$this->forum_pinned = 'Importante';
		$this->forum_pinned_topic = 'Discussione Importante';
		$this->forum_poll = 'Sondaggio';
		$this->forum_regfirst = 'Non hai il permesso di leggere questo forum. Lo potrai fare solo registrandoti.';
		$this->forum_replies = 'Risposte';
		$this->forum_starter = 'Autore';
		$this->forum_sub = 'Sotto-Forum';
		$this->forum_sub_last_post = 'Ultimo Messaggio';
		$this->forum_sub_replies = 'Risposta';
		$this->forum_sub_topics = 'Argomenti';
		$this->forum_subscribe = 'Mandami una e-mail quando qualcuno apre una nuova discussione';
		$this->forum_topic = 'Discussioni';
		$this->forum_topics_new = 'Ci sono nuovi messaggi in questo forum.';
		$this->forum_topics_old = 'Non ci sono nuovi messaggi in questo forum.';
		$this->forum_views = 'Visite';
		$this->forum_write_topics = 'Puoi aprire nuove discussioni in questo forum.';
	}

	function help()
	{
		$this->help_available_files = 'Aiuto';
		$this->help_none = 'Non ci sono file d\'aiuto nel database.';
	}

	function login()
	{
		$this->login_cant_logged = 'Non sei autenticato. Controlla di aver inserito Nome Utente e Password corretti.<br /><br />Sono case sensitive, quindi \'UsErNaMe\' è diverso da \'Username\'. Controlla anche che i cookies siano abilitati nel tuo bowser.';
		$this->login_cookies = 'I Cookies devono essere abilitati se vuoi connetterti.';
		$this->login_forgot_pass = 'Password dimenticata?';
		$this->login_header = 'Connessione';
		$this->login_logged = 'Ora sei connesso.';
		$this->login_now_out = 'Ora sei disconnesso.';
		$this->login_out = 'Disconnessione';
		$this->login_pass = 'Password'; //Translate
		$this->login_pass_no_id = 'Non esiste alcun iscritto con il nome che hai inserito.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Resetta Password';
		$this->login_pass_sent = 'La tua password è stata sostituita con una casuale. La nuova password è stata spedita all\' indirizzo email associato a questo account.';
		$this->login_sure = 'Sicuro di vorlerti disconnettere da \'%s\'?';
		$this->login_user = 'Nome Utente';
	}

	function main()
	{
		$this->board_by = 'Di';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Il tuo account non è ancora stato attivato.';
		$this->main_activate_resend = 'Rispedisci Email di Attivazione';
		$this->main_admincp = 'amministrazione';
		$this->main_banned = 'Sei stato bannato da questo forum.';
		$this->main_code = 'Codice';
		$this->main_continue = 'Continua';
		$this->main_cp = 'pannello di controllo';
		$this->main_full = 'Completo';
		$this->main_help = 'aiuto';
		$this->main_load = 'carico';
		$this->main_login = 'connettiti';
		$this->main_logout = 'disconnetti';
		$this->main_max_load = 'Siamo spiacenti, ma %s è momentaneamente non disponibile, a causa del numero elevato di utenti connessi.';
		$this->main_members = 'iscritti';
		$this->main_messenger = 'messaggistica';
		$this->main_new = 'nuovo';
		$this->main_next = 'avanti';
		$this->main_posts_new = 'Nuovo';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'indietro';
		$this->main_queries = 'queries'; //Translate
		$this->main_quote = 'Citazione';
		$this->main_register = 'registrati';
		$this->main_reminder = 'Promemoria';
		$this->main_reminder_closed = 'La bacheca è chiusa e visibile solo agli amministratori.';
		$this->main_said = 'ha scritto';
		$this->main_search = 'cerca';
		$this->main_seconds = 'secondi';
		$this->main_welcome = 'Benvenuto';
		$this->main_welcome_guest = 'Benvenuto!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Invia';
		$this->today = 'Oggi';
		$this->yesterday = 'Ieri';
	}

	function members()
	{
		$this->members_all = 'tutti';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Scrivi Email a questo utente';
		$this->members_group = 'Gruppo';
		$this->members_joined = 'Iscritto il';
		$this->members_list = 'Lista Iscritti';
		$this->members_member = 'Iscritti';
		$this->members_pm = 'MP';
		$this->members_posts = 'Messaggi';
		$this->members_send_pm = 'Scrivi messaggio privato a questo utente';
		$this->members_title = 'Titolo';
		$this->members_vist_www = 'Visita il sito web di questo utente';
		$this->members_www = 'Sito web';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Vuoi veramente cancellare questo messaggio?';
		$this->mod_confirm_topic_delete = 'Vuoi veramente cancellare questa discussione?';
		$this->mod_error_first_post = 'Non puoi cancellare il primo messaggio di una discussione.';
		$this->mod_error_move_category = 'Non puoi spostare una discussione in una categoria.';
		$this->mod_error_move_create = 'Non hai il permesso di muovere le discussioni da questo forum.';
		$this->mod_error_move_forum = 'Non puoi spostare una discussione in forum che non esiste.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Non puoi muovere una discussione nello stesso forum.';
		$this->mod_label_controls = 'Controlli Moderatore';
		$this->mod_label_description = 'Descrizione';
		$this->mod_label_emoticon = 'Converti emoticons in immagini?';
		$this->mod_label_global = 'Discussione Globale';
		$this->mod_label_mbcode = 'Formatta MbCode?';
		$this->mod_label_move_to = 'Muovi in';
		$this->mod_label_options = 'Opzioni';
		$this->mod_label_post_delete = 'Cancella Messaggio';
		$this->mod_label_post_edit = 'Modifica Messaggio';
		$this->mod_label_title = 'Titolo';
		$this->mod_label_title_original = 'Titolo Originale';
		$this->mod_label_title_split = 'Dividi Titolo';
		$this->mod_label_topic_delete = 'Elimina Discussione';
		$this->mod_label_topic_edit = 'Modifica Discussione';
		$this->mod_label_topic_lock = 'Blocca Discussione';
		$this->mod_label_topic_move = 'Sposta Discussione';
		$this->mod_label_topic_move_complete = 'Sposta l\'intera discussione nel nuovo forum';
		$this->mod_label_topic_move_link = 'Sposta la discussione nel nuovo forum, e lascia il collegamento alla discussione nel vecchio forum.';
		$this->mod_label_topic_pin = 'Pin Discussione';
		$this->mod_label_topic_split = 'Dividi Discussione';
		$this->mod_missing_post = 'Il messaggio specificato non esiste.';
		$this->mod_missing_topic = 'La discussione specificata non esiste.';
		$this->mod_no_action = 'Devi specificare un\'azione.';
		$this->mod_no_post = 'Devi speficare un messaggio.';
		$this->mod_no_topic = 'Devi specifare una discussione.';
		$this->mod_perm_post_delete = 'Non hai il permesso per eliminare questo messaggio.';
		$this->mod_perm_post_edit = 'Non hai il permesso per moficare questo messaggio.';
		$this->mod_perm_topic_delete = 'Non hai il permesso per eliminare questa discussione.';
		$this->mod_perm_topic_edit = 'Non hai il permesso per modificare questa discussione.';
		$this->mod_perm_topic_lock = 'Non hai il permesso per bloccare questa discussione.';
		$this->mod_perm_topic_move = 'Non hai il permesso per spostare questa discussione.';
		$this->mod_perm_topic_pin = 'Non hai il permesso per pin questa discussione.';
		$this->mod_perm_topic_split = 'Non hai il permesso per dividere questa discussione.';
		$this->mod_perm_topic_unlock = 'Non hai il permesso per sbloccare questa discussione.';
		$this->mod_perm_topic_unpin = 'non hai il permesso per unpin questa discussione.';
		$this->mod_success_post_delete = 'Il messaggio è stato eliminato.';
		$this->mod_success_post_edit = 'Il messaggio è stato modificato.';
		$this->mod_success_split = 'La discussione è stata divisa.';
		$this->mod_success_topic_delete = 'La discussione è stata eliminata.';
		$this->mod_success_topic_edit = 'La discussione è stata modificata.';
		$this->mod_success_topic_move = 'La discussione è stata spostata nel nuovo forum.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'punto';
		$this->new_posts_dot_detail = 'significa che hai partecipato a questa discussione.';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Caldo';
		$this->new_posts_last = 'Ultimo messaggio';
		$this->new_posts_locked = 'Bloccato';
		$this->new_posts_moved = 'Spostato';
		$this->new_posts_new = 'Nuovo';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Nessun';
		$this->new_posts_pinned = 'Importante';
		$this->new_posts_poll = 'Sondaggio';
		$this->new_posts_topic = 'Discussioni';
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
		$this->pm_cant_del = 'Non hai il permesso per eliminare questo messaggio.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Elimina tutti i messaggi';
		$this->pm_delete = 'Elimina';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Messaggio eliminato.';
		$this->pm_deleted_all = 'Messaggi eliminati.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'Ci sono stati dei problemi a spedire il tuo messaggio.<br /><br />I seguenti destinatari non esistono: %s<br /><br />I seguenti destinatari non desiderano ricevere messaggi: %s';
		$this->pm_fields = 'Il tuo messaggio non è stato inviato. Controlla che di aver compilato tutti i campi necessari.';
		$this->pm_flood = 'Hai già inviato un messaggio negli ultimi %s secondi, devi aspettare un pò.<br /><br />';
		$this->pm_folder_inbox = 'In arrivo';
		$this->pm_folder_new = '%s nuovi';
		$this->pm_folder_sentbox = 'Inviati';
		$this->pm_from = 'Da';
		$this->pm_group = 'Gruppo';
		$this->pm_guest = 'Come visitatore, non puoi usare la messaggistica. Per favore autenticati o registrati.';
		$this->pm_joined = 'Registrato il';
		$this->pm_messenger = 'Messaggistica';
		$this->pm_msgtext = 'Testo messaggio';
		$this->pm_multiple = 'Separa destinari multipli con ; (punto e virgola)';
		$this->pm_no_folder = 'Devi specificare una cartella.';
		$this->pm_no_member = 'Nessun utente trovato con questo id.';
		$this->pm_no_number = 'Nessun messaggio trovato con questo numero.';
		$this->pm_no_title = 'Nessun Titolo';
		$this->pm_nomsg = 'Non ci sono messaggi in questa cartella.';
		$this->pm_noview = 'Non hai il permesso per leggere questo messaggio.';
		$this->pm_online = 'Questo utente è online';
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Messaggistica personale';
		$this->pm_personal_msging = 'Messaggi Personali';
		$this->pm_pm = 'MP';
		$this->pm_posts = 'Messaggi';
		$this->pm_preview = 'Anteprima';
		$this->pm_recipients = 'Destinario/i';
		$this->pm_reply = 'Rispondi';
		$this->pm_send = 'Invia';
		$this->pm_sendamsg = 'Invia un Messaggio';
		$this->pm_sendingpm = 'Invio un PM';
		$this->pm_sendon = 'Inviato il';
		$this->pm_success = 'Il tuo messaggio è stato inviato.';
		$this->pm_sure_del = 'Vuoi veramente eliminare questo messaggio?';
		$this->pm_sure_delall = 'Vuoi veramente eliminare tutti i messaggi in questa cartella?';
		$this->pm_title = 'Titolo';
		$this->pm_to = 'A';
	}

	function post()
	{
		$this->post_attach = 'Allegati';
		$this->post_attach_add = 'Aggiungi Allegato';
		$this->post_attach_disrupt = 'Aggiungendo o togliendo allegati non perderai il contenuto del messaggio.';
		$this->post_attach_failed = 'Trasferimento allegati fallito. Il file specificato sembra non esistere.';
		$this->post_attach_not_allowed = 'Non puoi allegare file di questo tipo.';
		$this->post_attach_remove = 'Rimuovi allegato';
		$this->post_attach_too_large = 'Il file è troppo grande. La dimensione massima consentita è %d kilobytes.';
		$this->post_cant_create = 'Come visitatore, Non hai il permesso per creare nuove discussioni. Lo potrai fare solo registrandoti.';
		$this->post_cant_create1 = 'Non hai il permesso per creare nuove discussioni.';
		$this->post_cant_enter = 'Il tuo voto non è stato considerato. Probabilmente perchè hai già votato, o non hai il permesso per votare.';
		$this->post_cant_poll = 'Come visitatore, Non hai il permesso per creare sondaggi. Lo puoi fare solo registrandoti.';
		$this->post_cant_poll1 = 'Non hai il permesso per creare sondaggi.';
		$this->post_cant_reply = 'Non hai il permesso per rispondere alle discussioni di questo forum.';
		$this->post_cant_reply1 = 'Come visitatore, Non hai il permesso per rispondere alle discussioni. Lo potrai fare solo registrandoti..';
		$this->post_cant_reply2 = 'Non hai il permesso per rispondere alle discussioni.';
		$this->post_closed = 'Questa discussione è stata chiusa.';
		$this->post_create_poll = 'Crea Sondaggio';
		$this->post_create_topic = 'Crea Discussione';
		$this->post_creating = 'Creazione Discussione';
		$this->post_creating_poll = 'Creazione Sondaggio';
		$this->post_flood = 'Hai già inviato messaggi negli ultimi %s secondi, non puoi ancora inviarne altri.<br /><br />Per favore ritrova fra qualche secondo.';
		$this->post_guest = 'Visitatore';
		$this->post_icon = 'Icona Messaggio';
		$this->post_last_five = 'Ultimi Cinque Messaggi In Ordine Inverso';
		$this->post_length = 'Controlla Lunghezza';
		$this->post_mbcode_address = 'Inserisci un indirizzo';
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
		$this->post_mbcode_detail = 'Enter a description'; //Translate
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
		$this->post_mbcode_length = 'Il tuo messaggio contiene "+length+" caratteri.';
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
		$this->post_msg = 'Messaggio';
		$this->post_must_msg = 'Devi scrivere qualcosa quando invii un messaggio.';
		$this->post_must_options = 'Devi inserire delle opzioni quando crei un sondaggio.';
		$this->post_must_title = 'Devi scrivere un titolo quando crei una discussione.';
		$this->post_new_poll = 'Nuovo sondaggio';
		$this->post_new_topic = 'Nuova discussione';
		$this->post_no_forum = 'Questo forum non è stato trovato.';
		$this->post_no_topic = 'Nessuna discussione specificata.';
		$this->post_no_vote = 'Devi scegliere un\'opzione da votare.';
		$this->post_option_emoticons = 'Converti emoticons in immagini?';
		$this->post_option_global = 'Imposta come Discussione Globale?';
		$this->post_option_mbcode = 'Formatta MbCode?';
		$this->post_optional = 'facoltativa';
		$this->post_options = 'Opzioni';
		$this->post_poll_options = 'Opzioni Sondaggio';
		$this->post_poll_row = 'Una opzione per riga';
		$this->post_posted = 'Inviato il';
		$this->post_posting = 'Invio';
		$this->post_preview = 'Anteprima';
		$this->post_reply = 'Rispondi';
		$this->post_reply_topic = 'Rispondi alla discussione';
		$this->post_replying = 'Rispondi Alla Discussione';
		$this->post_replying1 = 'Rispondi';
		$this->post_smiles = 'Smilies Cliccabili';
		$this->post_too_many_options = 'Devono essere presenti da 2 a %d opzioni per un sondaggio.';
		$this->post_topic_detail = 'Descrizione Discussione';
		$this->post_topic_title = 'Titolo Discussione';
		$this->post_view_topic = 'Visualizza l\'intera Discussione';
		$this->post_voting = 'Vota';
	}

	function printer()
	{
		$this->printer_back = 'Indietro';
		$this->printer_not_found = 'La discussione non è stata trovata. Potrebbe essere stata spostata, eliminata o potrebbe non essere mai esistita.';
		$this->printer_not_found_title = 'Discussione Non Trovata';
		$this->printer_perm_topics = 'Non hai il permesso per visualizzare la discussione.';
		$this->printer_perm_topics_guest = 'Non hai il permesso per leggere la discussione. Lo potrai fare solo registrandoti.';
		$this->printer_posted_on = 'Inviato il';
		$this->printer_send = 'Invia alla stampante';
	}

	function profile()
	{
		$this->profile_aim_sn = 'Nome AIM';
		$this->profile_av_sign = 'Avatar e Firma';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Compleanno';
		$this->profile_contact = 'Contatto';
		$this->profile_email_address = 'Indirizzo Email';
		$this->profile_fav = 'Forum Preferito';
		$this->profile_fav_forum = '%s (%d%% sono messaggi di questo utente)';
		$this->profile_icq_uin = 'Numero ICQ';
		$this->profile_info = 'Informazioni';
		$this->profile_interest = 'Interessi';
		$this->profile_joined = 'Iscritto il';
		$this->profile_last_post = 'Ultimo Messaggio';
		$this->profile_list = 'Lista Utenti';
		$this->profile_location = 'Località';
		$this->profile_member = 'Gruppo';
		$this->profile_member_title = 'Titolo';
		$this->profile_msn = 'Identità MSN';
		$this->profile_must_user = 'Devi specificare un utente per vederne il profilo.';
		$this->profile_no_member = 'Non ci sono iscritti con questo user id. L\'account potrebbe essere stato cancellato.';
		$this->profile_none = '[ Nessuno ]';
		$this->profile_not_post = 'non ha ancora inviato messaggi.';
		$this->profile_online = 'Questo utente è online';
		$this->profile_pm = 'Messaggi Privati';
		$this->profile_postcount = '%s totali, %s al giorno';
		$this->profile_posts = 'Messaggi';
		$this->profile_private = '[ Privato ]';
		$this->profile_profile = 'Profilo';
		$this->profile_signature = 'Firma';
		$this->profile_unkown = '[ Sconosciuto ]';
		$this->profile_view_profile = 'Visualizza Profilo';
		$this->profile_www = 'Sito Web';
		$this->profile_yahoo = 'Identità Yahoo';
	}

	function register()
	{
		$this->register_activated = 'Il tuo account è stato attivato!';
		$this->register_activating = 'Attivazione Account';
		$this->register_activation_error = 'C\'è stato un errore durante l\'attivazione del tuo account. Controlla che nella barra indirizzi del tuo browser ci sia l\'intera url contenuta nell\'email che hai ricevuto. Se il problema persiste contatta l\'amministratore.';
		$this->register_confirm_passwd = 'Conferma Password';
		$this->register_done = 'Sei registrato! Ora puoi autenticarti.';
		$this->register_email = 'Indirizzo Email';
		$this->register_email_invalid = 'L\'indirizzo email che hai inserito non è valido.';
		$this->register_email_used = 'L\'indirizzo email che hai inserito risulta già usato da un altro utente.';
		$this->register_fields = 'Non hai completato tutti i campi.';
		$this->register_image = 'Per favore scrivi il testo che vedi nell\'immagine.';
		$this->register_image_invalid = 'Per verificare che tua sia un utente umano, devi inserire il testo che vedi nell\'immagine.';
		$this->register_must_activate = 'Sei stato registrato. Un\' email di attivazione è stata spedita a %s con le informazioni necessarie ad attivare il tuo account. Il tuo account sarà limitato finchè non lo attiverai.';
		$this->register_name_invalid = 'Il nome che hai inserito è troppo lungo.';
		$this->register_name_taken = 'Questo nome utente è già in uso.';
		$this->register_new_user = 'Nome Utente Desiderato';
		$this->register_pass_invalid = 'La password che hai inserito non è valida. Assicurati di aver usato solo caratteri validi come lettere, numeri, trattini, underscores, o spazi, e che sia di almeno 5 caratteri.';
		$this->register_pass_match = 'Le passwords inserite non corrispondono.';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Registrati';
		$this->register_reging = 'Registrazione';
	}

	function search()
	{
		$this->search_advanced = 'Opzioni Avanzate';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Ricerca Semplice';
		$this->search_characters = 'caratteri di un post';
		$this->search_day = 'giorno';
		$this->search_days = 'giorni';
		$this->search_exact_name = 'nome esatto';
		$this->search_flood = 'Hai già eseguito una ricerca negli ultimi %s secondi, devi aspettare un pò.<br /><br />';
		$this->search_for = 'Cerca Per';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Gruppo';
		$this->search_guest = 'Visitatore';
		$this->search_in = 'Cerca In';
		$this->search_in_posts = 'Cerca solo nei messaggi';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Iscritto il';
		$this->search_level = 'Livello Utente';
		$this->search_match = 'Cerca Parole Esatte';
		$this->search_matches = 'Corrispondenze';
		$this->search_month = 'mese';
		$this->search_months = 'mesi';
		$this->search_mysqldoc = 'Documentazione MySQL';
		$this->search_newer = 'recenti';
		$this->search_no_results = 'La tua ricerca non ha dato risultati.';
		$this->search_no_words = 'Devi specificare dei termini di ricerca.<br /><br />Ogni termine deve essere più lungo di 3 caratteri, incluse lettere, numeri, apostrofi, e underscore.';
		$this->search_older = 'datati';
		$this->search_online = 'Questo utente è online';
		$this->search_only_display = 'Visualizza solo i primi';
		$this->search_partial_name = 'nome parziale';
		$this->search_post_icon = 'Icona Messaggio';
		$this->search_posted_on = 'Scritto il';
		$this->search_posts = 'Messaggi';
		$this->search_posts_by = 'Solo scritti da';
		$this->search_regex = 'Cerca per Espressioni Regolari';
		$this->search_regex_failed = 'La tua espressione regolare non è valida. Per favore consulta la documentazione MySQL.';
		$this->search_relevance = 'Rilevanza Messaggio: %d%%';
		$this->search_replies = 'Messaggi';
		$this->search_result = 'Risultati Ricerca';
		$this->search_search = 'Cerca';
		$this->search_select_all = 'Seleziona Tutto';
		$this->search_show_posts = 'Mostra direttamente i messaggi';
		$this->search_sound = 'Cerca per Assonanza';
		$this->search_starter = 'Autore';
		$this->search_than = 'di';
		$this->search_topic = 'Discussione';
		$this->search_unreg = 'Non registrato';
		$this->search_week = 'settimana';
		$this->search_weeks = 'settimane';
		$this->search_year = 'anno';
	}

	function topic()
	{
		$this->topic_attached = 'File allegato:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Non hai il permesso per il download di questo file.';
		$this->topic_attached_title = 'File Allegato';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Crea Nuovo Sondaggio';
		$this->topic_create_topic = 'Crea Nuova Discussione';
		$this->topic_delete = 'Elimina';
		$this->topic_delete_post = 'Elimina questo messaggio';
		$this->topic_edit = 'Modifica';
		$this->topic_edit_post = 'Modifica questo messaggio';
		$this->topic_edited = 'Ultima modifica %s by %s';
		$this->topic_error = 'Errore';
		$this->topic_group = 'Gruppo';
		$this->topic_guest = 'Visualizza';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Iscritto il';
		$this->topic_level = 'Livello Utente';
		$this->topic_links_aim = 'Invia un messaggio AIM a %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Invia una email a %s';
		$this->topic_links_icq = 'Invia un messaggio ICQ a %s';
		$this->topic_links_msn = 'Visualizza il profilo MSN di %s';
		$this->topic_links_pm = 'Invia un Messaggio Privato %s';
		$this->topic_links_web = 'Visita il sito web di %s';
		$this->topic_links_yahoo = 'Invia un messaggio a %s con Yahoo! Messenger';
		$this->topic_lock = 'Blocca';
		$this->topic_locked = 'Discussione Bloccata';
		$this->topic_move = 'Sposta';
		$this->topic_no_votes = 'Non ci sono voti per questo sondaggio.';
		$this->topic_not_found = 'Discussione Non Trovata';
		$this->topic_not_found_message = 'La discussione non è stata trovata. Potrebbe essere stata spostata, cancellata o potrebbe non essere mai esistita.';
		$this->topic_online = 'Questo utente è online';
		$this->topic_options = 'Opzioni Discussione';
		$this->topic_pages = 'Pagine';
		$this->topic_perm_view = 'Non hai il permesso per leggere le discussioni.';
		$this->topic_perm_view_guest = 'Non hai il permesso per leggere le discussioni. Lo potrai fare solo registrandoti.';
		$this->topic_pin = 'In Rilievo';
		$this->topic_posted = 'Inviato';
		$this->topic_posts = 'Messaggi';
		$this->topic_print = 'Visualizza Stampabile';
		$this->topic_quote = 'Rispondi riportando questa discussione';
		$this->topic_reply = 'Rispondi alla Discussione';
		$this->topic_split = 'Dividi';
		$this->topic_split_finish = 'Esegui la divisione';
		$this->topic_split_keep = 'Non muovere';
		$this->topic_split_move = 'Dividi e Muovi';
		$this->topic_subscribe = 'Inviami una email quando qualcuno risponde a questa discussione';
		$this->topic_top = 'Vai all\'inizio della pagina';
		$this->topic_unlock = 'Sblocca';
		$this->topic_unpin = 'Non in Rilievo';
		$this->topic_unreg = 'Non Registrato';
		$this->topic_view = 'Visualizza Risultati';
		$this->topic_viewing = 'Visualizza Discussioni';
		$this->topic_vote = 'Vota';
		$this->topic_vote_count_plur = '%d voti';
		$this->topic_vote_count_sing = '%d voto';
		$this->topic_votes = 'Voti';
	}
}
?>