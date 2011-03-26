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
 * $Id: fr.php,v 1.40 2006/07/26 17:56:19 jon Exp $
 **/

/**
 * French language module
 *
 * @author Stephane Revel <st_garp98@hotmail.com>
 * @since 1.0.0 Beta 4.0
 **/
class fr
{
	function active()
	{
		$this->active_last_action = 'Derni�re action';
		$this->active_modules_active = 'Consulte les utilisateurs actifs';
		$this->active_modules_board = 'Consulte l\'accueil';
		$this->active_modules_cp = 'Consulte son panneau de contr�le';
		$this->active_modules_forum = 'Consulte un forum: %s';
		$this->active_modules_help = 'Utilise l\'aide';
		$this->active_modules_login = 'Se connecte / d�connecte';
		$this->active_modules_members = 'Consulte la liste des membres';
		$this->active_modules_mod = 'Mod�re';
		$this->active_modules_pm = 'Utilise la messagerie';
		$this->active_modules_post = 'Poste un message';
		$this->active_modules_printer = 'Imprime un sujet: %s';
		$this->active_modules_profile = 'Consulte un profil: %s';
		$this->active_modules_search = 'Cherche';
		$this->active_modules_topic = 'Consulte un sujet: %s';
		$this->active_time = 'Date';
		$this->active_user = 'Utilisateur';
		$this->active_users = 'Utilisateurs actifs';
	}

	function board()
	{
		$this->board_active_users = 'Utilisateurs actifs';
		$this->board_birthdays = 'Anniversaires du jour :';
		$this->board_can_post = 'Vous pouvez r�pondre dans ce forum.';
		$this->board_can_topics = 'Vous pouvez voir les messages de ce forum.';
		$this->board_cant_post = 'Vous ne pouvez pas r�pondre dans ce forum.';
		$this->board_cant_topics = 'Vous ne pouvez pas voir les messages de ce forum.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'invit�s';
		$this->board_last_post = 'Dernier message';
		$this->board_mark = 'Marquer tous les messages comme lus';
		$this->board_mark1 = 'Tous les forums et messages ont �t� marqu�s comme lus.';
		$this->board_members = 'membres';
		$this->board_message = 'Message de %s';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Aucun membre ne f�te son anniversaire aujourd\'hui.';
		$this->board_nobody = 'Actuellement aucun membre n\'est en ligne.';
		$this->board_nopost = 'Aucun message.';
		$this->board_noview = 'Vous n\'avez pas la permission de voir les forums';
		$this->board_regfirst = 'Vous n\'avez pas la permission de voir les forums. Si vous vous enregistrez, vous le pourrez.';
		$this->board_replies = 'R�ponses';
		$this->board_stats = 'Statistiques';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Sujets';
		$this->board_topics_new = 'Il y a des nouveaux messages dans ce forum.';
		$this->board_topics_old = 'Il n\'y a pas de nouveaux messages dans ce forum.';
		$this->board_users = 'utilisateurs';
		$this->board_write_topics = 'Vous pouvez cr�er un fil de discussions dans ce forum.';
	}

	function cp()
	{
		$this->cp_aim = 'Pseudo AIM';
		$this->cp_already_member = 'L\'email que vous avez entr� est d�j� attribu� � un membre.';
		$this->cp_apr = 'Avril';
		$this->cp_aug = 'Ao�t';
		$this->cp_avatar_current = 'Votre avatar actuel';
		$this->cp_avatar_error = 'Erreur d\'avatar';
		$this->cp_avatar_must_select = 'Vous devez choisir un avatar.';
		$this->cp_avatar_none = 'N\'utilisez pas d\'avatar.';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Choisissez un avatar';
		$this->cp_avatar_size_height = 'La hauteur de l\'avatar doit �tre comprise entre 1 et ';
		$this->cp_avatar_size_width = 'La largeur de l\'avatar doit �tre comprise entre 1 et ';
		$this->cp_avatar_upload = 'T�l�charger un avatar depuis votre disque dur';
		$this->cp_avatar_upload_failed = 'Erreur de t�l�chargement de votre avatar. Le fichier n\'existe peut-�tre pas.';
		$this->cp_avatar_upload_not_image = 'Vous ne pouvez envoyer des images que pour votre avatar. ';
		$this->cp_avatar_upload_too_large = 'L\'avatar que vous avez choisi est trop gros. La taille maxiale est %d Ko.';
		$this->cp_avatar_url = 'Indiquez le chemin de votre avatar';
		$this->cp_avatar_use = 'Utilisez l\'avatar que vous avez t�l�charg�';
		$this->cp_bday = 'Anniversaire';
		$this->cp_been_updated = 'Votre profil a �t� mis � jour.';
		$this->cp_been_updated1 = 'Votre avatar a �t� mis � jour. ';
		$this->cp_been_updated_prefs = 'Vos pr�f�rences ont �t� mises � jour. ';
		$this->cp_changing_pass = 'Changer son mot de passe';
		$this->cp_contact_pm = 'Permettre aux autres de vous contacter par le Messenger?';
		$this->cp_cp = 'Profil';
		$this->cp_current_avatar = 'Avatar actuel';
		$this->cp_current_time = 'Il est actuellement %s.';
		$this->cp_dec = 'D�cembre';
		$this->cp_editing_avatar = 'Met � jour son avatar';
		$this->cp_editing_profile = 'Met � jour son profil';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Permettre aux autres membres de vous contacter par email?';
		$this->cp_email_invaid = 'L\'email entr� n\'est pas valide. ';
		$this->cp_err_avatar = 'Erreur en mettant � jour l\'avatar';
		$this->cp_err_updating = 'Erreur en mettant � jour le profil';
		$this->cp_feb = 'F�vrier';
		$this->cp_file_type = 'L\'avatar que vous avez entr� n\'est pas valide. V�rifiez que l\'URL est correcte, et que le fichier choisi est soit gif, jpg or png.';
		$this->cp_format = 'Format du nom';
		$this->cp_gmt = '[GMT] M�ridien de Greenwich';
		$this->cp_gmt_nev1 = '[GMT-1:00] A�ores, Cap Vert';
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
		$this->cp_header = 'Profil';
		$this->cp_height = 'Hauteur';
		$this->cp_icq = 'N� ICQ';
		$this->cp_interest = 'Int�r�ts';
		$this->cp_jan = 'Janvier';
		$this->cp_july = 'Juillet';
		$this->cp_june = 'Juin';
		$this->cp_label_edit_avatar = 'Editer son avatar';
		$this->cp_label_edit_pass = 'Changer son mot de passe';
		$this->cp_label_edit_prefs = 'Change ses pr�f�rences du forum';
		$this->cp_label_edit_profile = 'Editer son profil';
		$this->cp_label_edit_subs = 'Editer ses souscriptions';
		$this->cp_language = 'Langage';
		$this->cp_less_charac = 'Votre nom doit comprendre moins de 32 caract�res.';
		$this->cp_location = 'Localisation';
		$this->cp_login_first = 'Vous devez �tre connect� pour acc�der � votre profil';
		$this->cp_mar = 'Mars';
		$this->cp_may = 'Mai';
		$this->cp_msn = 'Pseudo MSN';
		$this->cp_must_orig = 'Votre nom doit �tre identique � celui que vous avez choisi. Vous ne pouvez changer que la casse et l\'espacement. ';
		$this->cp_new_notmatch = 'Les deux nouveaux mots de passe que vous avez saisis sont diff�rents.';
		$this->cp_new_pass = 'Nouveau mot de passe';
		$this->cp_no_flash = 'Les avatars au format Flash ne sont pas autoris�s sur ce forum.';
		$this->cp_not_exist = 'La date que vous avez sp�cifi�e (%s) n\'existe pas!';
		$this->cp_nov = 'Novembre';
		$this->cp_oct = 'Octobre';
		$this->cp_old_notmatch = 'L\'ancien mot de passe que vous avez saisi est incorrect.';
		$this->cp_old_pass = 'Ancien mot de passe';
		$this->cp_pass_notvaid = 'Votre mot de passe est invalide. Assurez vous que vous utilisez des caract�res corrects.';
		$this->cp_preferences = 'Change ses pr�f�rences';
		$this->cp_privacy = 'Options de vie priv�e';
		$this->cp_repeat_pass = 'Confirmation du nouveau mot de passe';
		$this->cp_sept = 'Septembre';
		$this->cp_show_active = 'Montrer votre activit� pendant l\'utilisation du forum? ';
		$this->cp_show_email = 'Montrer l\'email dans le profil?';
		$this->cp_signature = 'Signature'; //Translate
		$this->cp_size_max = 'La taille de l\'avatar que vous avez choisi est trop importante. La taille maximale permise est %s par %s pixels. ';
		$this->cp_skin = 'Th�me du forum';
		$this->cp_sub_change = 'Changer les Abonnements';
		$this->cp_sub_delete = 'Supprimer';
		$this->cp_sub_expire = 'Date d\'expiration';
		$this->cp_sub_name = 'Nom de souscription';
		$this->cp_sub_no_params = 'Aucun param�tre n\'a �t� donn�.';
		$this->cp_sub_success = 'Vous avez souscrit � %s.';
		$this->cp_sub_type = 'Type de souscription';
		$this->cp_sub_updated = 'Les abonnements s�lectionn�s ont �t� supprim�s.';
		$this->cp_topic_option = 'Options du sujet';
		$this->cp_updated = 'Profil mis � jour';
		$this->cp_updated1 = 'Avatar mis � jour';
		$this->cp_updated_prefs = 'Pr�f�rences mises � jour';
		$this->cp_user_exists = 'Un utilisateur avec le m�me format de nom existe d�j�.';
		$this->cp_valided = 'Votre mot de passe a �t� chang�.';
		$this->cp_view_avatar = 'Voir les avatars?';
		$this->cp_view_emoticon = 'Voir les smileys?';
		$this->cp_view_signature = 'Voir les signatures?';
		$this->cp_welcome = 'Bienvenue dans le panneau de contr�le de l\'utilisateur. D\'ici, vous pouvez configurer votre compte. Merci de choisir parmi les options ci-dessous.';
		$this->cp_width = 'Largeur';
		$this->cp_www = 'Page d\'accueil';
		$this->cp_yahoo = 'Pseudo Yahoo';
		$this->cp_zone = 'Fuseau horaire';
	}

	function email()
	{
		$this->email_blocked = 'Ce membre n\'accepte pas d\'email envoy� depuis ce formulaire. ';
		$this->email_email = 'Courriel';
		$this->email_msgtext = 'Corps du message :';
		$this->email_no_fields = 'Revenez en arri�re et v�rifiez que tous les champs ont �t� remplis.';
		$this->email_no_member = 'Aucun membre ne porte ce nom';
		$this->email_no_perm = 'Vous n\'avez pas la permission d\'envoyer des emails par le forum. ';
		$this->email_sent = 'Votre email a �t� envoy�.';
		$this->email_subject = 'Sujet :';
		$this->email_to = 'A :';
	}

	function forum()
	{
		$this->forum_by = 'Par';
		$this->forum_can_post = 'Vous pouvez r�pondre dans ce forum.';
		$this->forum_can_topics = 'Vous pouvez voir les sujets dans ce forum. ';
		$this->forum_cant_post = 'Vous ne pouvez pas r�pondre dans ce forum. ';
		$this->forum_cant_topics = 'Vous ne pouvez pas voir les sujets dans ce forum. ';
		$this->forum_dot = 'point';
		$this->forum_dot_detail = 'Affiche ce que vous avez post� dans le sujet';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Invit�';
		$this->forum_hot = 'Chaud';
		$this->forum_icon = 'Icone';
		$this->forum_jump = 'Aller au dernier message de ce sujet';
		$this->forum_last = 'Dernier message';
		$this->forum_locked = 'Verrouill�';
		$this->forum_moved = 'D�plac�';
		$this->forum_msg = 'Message de %s';
		$this->forum_new = 'Nouveau';
		$this->forum_new_poll = 'Cr�er un nouveau sondage';
		$this->forum_new_topic = 'Cr�er un nouveau sujet';
		$this->forum_no_topics = 'Il n\'y a aucun sujet dans ce forum';
		$this->forum_noexist = 'Ce forum n\'existe pas.';
		$this->forum_nopost = 'Aucun message';
		$this->forum_not = 'A�e!';
		$this->forum_noview = 'Vous n\'avez pas la permission de voir les forums.';
		$this->forum_pages = 'Pages'; //Translate
		$this->forum_pinned = 'Epingl�';
		$this->forum_pinned_topic = 'Sujet �pingl�';
		$this->forum_poll = 'Sondage';
		$this->forum_regfirst = 'Vous n\'avez pas la permission de voir les forums. Si vous vous enregistrez, vous pourrez le faire.';
		$this->forum_replies = 'R�ponses';
		$this->forum_starter = 'D�but� par';
		$this->forum_sub = 'Sous-Forum';
		$this->forum_sub_last_post = 'Dernier message';
		$this->forum_sub_replies = 'R�ponses';
		$this->forum_sub_topics = 'Sujets';
		$this->forum_subscribe = 'M\envoyer un email en cas de nouveaux posts dans ce forum. ';
		$this->forum_topic = 'Sujet';
		$this->forum_topics_new = 'Il y a de nouveaux messages dans ce forum. ';
		$this->forum_topics_old = 'Il n\'y a pas de nouveaux messages dans ce forum. ';
		$this->forum_views = 'Affichages';
		$this->forum_write_topics = 'Vous pouvez cr�er des sujets dans ce forum. ';
	}

	function help()
	{
		$this->help_available_files = 'Fichiers d\'aide disponibles';
		$this->help_none = 'Il n\'y a aucun fichier d\'aide.';
	}

	function login()
	{
		$this->login_cant_logged = 'La connexion a �chou�. V�rifiez que vos nom d\'utilisateur et mot de passe sont corrects.<br /><br />Ils sont sensibles � la casse, donc \'UtIlIsAtEuR\' est diff�rent de \'utilisateur\'. Merci aussi de v�rifier que les cookies sont activ�s dans votre navigateur.';
		$this->login_cookies = 'Vous devez activer les cookies pour vous connecter.';
		$this->login_forgot_pass = 'Mot de passe oubli�? ';
		$this->login_header = 'Connexion';
		$this->login_logged = 'Vous �tes maintenant connect�.';
		$this->login_now_out = 'Vous �tes maintenant d�connect�.';
		$this->login_out = 'D�connexion';
		$this->login_pass = 'Mot de passe';
		$this->login_pass_no_id = 'Aucun membre ne porte le nom d\'utilisateur entr�.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Votre mot de passe a �t� r�initialis�. Le nouveau mot de passe a �t� envoy� � l\'email associ� � votre compte. ';
		$this->login_sure = 'Etes vous certain de vouloir vous d�connecter de \'%s\' ?';
		$this->login_user = 'Nom d\'utilisateur';
	}

	function main()
	{
		$this->board_by = 'Par';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Votre compte n\'a pas encore �t� activ�. ';
		$this->main_activate_resend = 'Renvoyer l\'email d\'activation';
		$this->main_admincp = 'Administration';
		$this->main_banned = 'Il vous a �t� interdit de consulter cette partie des forums.';
		$this->main_code = 'Code'; //Translate
		$this->main_continue = 'Continuer';
		$this->main_cp = 'Profil';
		$this->main_full = 'Complet';
		$this->main_help = 'Aide';
		$this->main_load = 'charg�';
		$this->main_login = 'Connexion';
		$this->main_logout = 'D�connexion';
		$this->main_max_load = 'Nous sommes d�sol�s, mais %s est actuellement indisponible, � cause d\'un trop grand nombre d\'utilisateurs connect�s.';
		$this->main_members = 'Membres';
		$this->main_messenger = 'Messages persos';
		$this->main_new = 'nouveau';
		$this->main_next = 'suivant';
		$this->main_posts_new = 'Nouveau';
		$this->main_powered = 'Propuls� par ';
		$this->main_prev = 'prr�cent';
		$this->main_queries = 'requ�tes';
		$this->main_quote = 'Citer';
		$this->main_register = 'S\'enregistrer';
		$this->main_reminder = 'Rappel';
		$this->main_reminder_closed = 'Les forums sont ferm�s et consultables uniquement par les administrateurs.';
		$this->main_said = 'a dit';
		$this->main_search = 'Rechercher';
		$this->main_seconds = 'secondes';
		$this->main_welcome = 'Bienvenue';
		$this->main_welcome_guest = 'Bienvenue invit� !';
		$this->sep_decimals = ',';
		$this->sep_thousands = ' ';
		$this->submit = 'Envoyer';
		$this->today = 'Aujourd\'hui';
		$this->yesterday = 'Hier';
	}

	function members()
	{
		$this->members_all = 'tous';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Envoyer un email � ce  membre';
		$this->members_group = 'Groupe';
		$this->members_joined = 'Rejoint';
		$this->members_list = 'Liste des membres';
		$this->members_member = 'Membre';
		$this->members_pm = 'Message Perso';
		$this->members_posts = 'Messages';
		$this->members_send_pm = 'Envoyer un message priv� � ce membre';
		$this->members_title = 'Titre';
		$this->members_vist_www = 'Visiter le site web de ce membre';
		$this->members_www = 'Site Web';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Etes-vous s�r de vouloir effacer ce message?';
		$this->mod_confirm_topic_delete = 'Etes-vous s�r de vouloir effacer ce sujet?';
		$this->mod_error_first_post = 'Vous ne pouvez pas effacer le premier message dans un sujet.';
		$this->mod_error_move_category = 'Vous ne pouvez pas d�placer un sujet dans une cat�gorie.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Vous ne pouvez pas d�placer un sujet vers un forum qui n\'existe pas. ';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Le forum vers lequel vous essayez de d�placer ce sujet est le m�me que celui de d�part.';
		$this->mod_label_controls = 'Contr�les de mod�ration';
		$this->mod_label_description = 'Description'; //Translate
		$this->mod_label_emoticon = 'Convertir les smileys en images?';
		$this->mod_label_global = 'Sujet g�n�ral';
		$this->mod_label_mbcode = 'Formater le MbCode?';
		$this->mod_label_move_to = 'D�placer vers ';
		$this->mod_label_options = 'Options'; //Translate
		$this->mod_label_post_delete = 'Effacer le message';
		$this->mod_label_post_edit = 'Editer le message';
		$this->mod_label_title = 'Titre';
		$this->mod_label_title_original = 'Titre original ';
		$this->mod_label_title_split = 'D�couper le titre';
		$this->mod_label_topic_delete = 'Effacer le sujet';
		$this->mod_label_topic_edit = 'Editer le sujet';
		$this->mod_label_topic_lock = 'Verrouiller le sujet';
		$this->mod_label_topic_move = 'D�placer le sujet';
		$this->mod_label_topic_move_complete = 'Transf�rer int�gralement le sujet vers un nouveau forum';
		$this->mod_label_topic_move_link = 'Transf�rer le sujet vers le nouveau forum, et laisser un lien vers le nouvel emplacement dans l\'ancien forum. ';
		$this->mod_label_topic_pin = 'Epingler le sujet';
		$this->mod_label_topic_split = 'D�couper le sujet';
		$this->mod_missing_post = 'Le message que vous avez choisi n\'existe pas. ';
		$this->mod_missing_topic = 'Le sujet que vous avez choisi n\'existe pas. ';
		$this->mod_no_action = 'Vous devez choisir une action.';
		$this->mod_no_post = 'Vous devez choisir un message.';
		$this->mod_no_topic = 'Vous devez choisir un sujet.';
		$this->mod_perm_post_delete = 'Vous n\'avez pas le droit d\'effacer ce message.';
		$this->mod_perm_post_edit = 'Vous n\'avez pas le droit d\'�diter ce message.';
		$this->mod_perm_topic_delete = 'Vous n\'avez pas le droit d\'effacer ce sujet.';
		$this->mod_perm_topic_edit = 'Vous n\'avez pas le droit d\'�diter ce sujet. ';
		$this->mod_perm_topic_lock = 'Vous n\'avez pas le droit de verrouiller ce sujet. ';
		$this->mod_perm_topic_move = 'Vous n\'avez pas le droit de d�placer ce sujet.';
		$this->mod_perm_topic_pin = 'Vous n\'avez pas le droit d\'�pingler ce sujet. ';
		$this->mod_perm_topic_split = 'Vous n\'avez pas la permission de d�couper ce sujet. ';
		$this->mod_perm_topic_unlock = 'Vous n\'avez pas le droit de d�verrouiller ce sujet.';
		$this->mod_perm_topic_unpin = 'Vous n\'avez pas le droit de \'d�s�pingler\' ce sujet.';
		$this->mod_success_post_delete = 'Le message a �t� effac�.';
		$this->mod_success_post_edit = 'Message �dit�';
		$this->mod_success_split = 'Le sujet a �t� d�coup� avec succ�s. ';
		$this->mod_success_topic_delete = 'Sujet effac�.';
		$this->mod_success_topic_edit = 'Le sujet a �t� �dit� avec succ�s.';
		$this->mod_success_topic_move = 'Le sujet a �t� d�plac� avec succ�s.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'point';
		$this->new_posts_dot_detail = 'Affiche ce que vous avez post� dans le sujet';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Chaud';
		$this->new_posts_last = 'Dernier message';
		$this->new_posts_locked = 'Verrouill�';
		$this->new_posts_moved = 'D�plac�';
		$this->new_posts_new = 'Nouveau';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'A�e!';
		$this->new_posts_pinned = 'Epingl�';
		$this->new_posts_poll = 'Sondage';
		$this->new_posts_topic = 'Sujet';
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
		$this->pm_cant_del = 'Vous n\'avez pas la permission de supprimer ce message.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Supprimer tous les messages';
		$this->pm_delete = 'Supprimer';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Message supprim�.';
		$this->pm_deleted_all = 'Messages supprim�s.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Votre message n\'a pas pu �tre envoy�. V�rifiez que tous les champs requis sont remplis.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Bo�te de r�ception';
		$this->pm_folder_new = '%s nouveaux';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'De';
		$this->pm_group = 'Groupe';
		$this->pm_guest = 'En tant qu\'invit�, vous ne pouvez pas utiliser la messagerie priv�e. Merci de vous connecter ou de vous enregistrer.';
		$this->pm_joined = 'Rejoint';
		$this->pm_messenger = 'Messages persos';
		$this->pm_msgtext = 'Texte du message';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Vous devez choisir un dossier.';
		$this->pm_no_member = 'Aucun membre n\'a �t� trouv� avec l\'id sp�cifi�.';
		$this->pm_no_number = 'Ce message n\'existe pas.';
		$this->pm_no_title = 'Pas de sujet';
		$this->pm_nomsg = 'Il n\'y a aucun message dans ce dossier.';
		$this->pm_noview = 'Vous n\'avez pas la permission de voir ce message.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Messages priv�s';
		$this->pm_personal_msging = 'Messagerie priv�e';
		$this->pm_pm = 'Messages priv�s';
		$this->pm_posts = 'Messages';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'R�pondre';
		$this->pm_send = 'Envoyer';
		$this->pm_sendamsg = 'Envoyer un message';
		$this->pm_sendingpm = 'Vous envoyez un message priv�';
		$this->pm_sendon = 'Envoy�';
		$this->pm_success = 'Votre messgae a �t� envoy� correctement.';
		$this->pm_sure_del = 'Etes vous certain de vouloir supprimer ce message ?';
		$this->pm_sure_delall = 'Etes vous certain de vouloir supprimer tous les messages de ce dossier?';
		$this->pm_title = 'Titre';
		$this->pm_to = 'A';
	}

	function post()
	{
		$this->post_attach = 'Fichiers attach�s';
		$this->post_attach_add = 'Attacher un fichier';
		$this->post_attach_disrupt = 'Ajouter ou enlever des fichiers attach�s ne modifie pas le message en cours d\'�dition.';
		$this->post_attach_failed = 'Le t�l�chargement de la pi�ce jointe a �chou�. V�rifiez que le fichier sp�cifi� existe. ';
		$this->post_attach_not_allowed = 'Des fichiers de ce type ne peuvent pas �tre attach�s.';
		$this->post_attach_remove = 'Enlever le fichier attach�';
		$this->post_attach_too_large = 'La taille du fichier choisi est trop importante. La taille maximum est %d KB.';
		$this->post_cant_create = 'En tant qu\'invit� vous n\'avez pas la permission de cr�er des sujets. Si vous vous enregistrez, vous le pourrez.';
		$this->post_cant_create1 = 'Vous n\'avez pas la permission de cr�er des sujets.';
		$this->post_cant_enter = 'Votre vote n\'a pas �t� pris en compte. Peut �tre avez vous d�j� vot� ou n\'en avez pas la permission.';
		$this->post_cant_poll = 'En tant qu\'invit�, vous n\'avez pas la permission de cr�er des sondages. Si vous vous enregistrez, vous le pourrez.';
		$this->post_cant_poll1 = 'Vous n\'avez pas le droit de cr�er des sondages.';
		$this->post_cant_reply = 'Vous n\'avez pas le droit de participer aux sujets dans ce forum';
		$this->post_cant_reply1 = 'En tant qu\'invit�, vous n\'avez pas la permission de participer aux sujets. Si vous vous enregistrez, vous le pourrez.';
		$this->post_cant_reply2 = 'Vous n\'avez pas la permission de participer aux sujets.';
		$this->post_closed = 'Ce sujet a �t� ferm�.';
		$this->post_create_poll = 'Cr�er un sondage';
		$this->post_create_topic = 'Cr�er un sujet';
		$this->post_creating = 'Cr�er un sujet';
		$this->post_creating_poll = 'Vous cr�ez un sondage';
		$this->post_flood = 'Vous avez d�j� post� un message dans les %s derni�res secondes, et ne pouvez plus en poster maintenant.<br /><br />Merci de r�essayer dans quelques secondes.';
		$this->post_guest = 'Invit�';
		$this->post_icon = 'Ic�ne';
		$this->post_last_five = '5 derniers messages en ordre inverse';
		$this->post_length = 'V�rifier la longueur';
		$this->post_mbcode_address = 'Merci d\'entrer un email';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Bleu';
		$this->post_mbcode_bold = 'Gras';
		$this->post_mbcode_bold1 = 'G';
		$this->post_mbcode_chocolate = 'Chocolat';
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Couleur';
		$this->post_mbcode_coral = 'Corail';
		$this->post_mbcode_courier = 'Courrier';
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Bleu sombre';
		$this->post_mbcode_darkred = 'Rouge sombre';
		$this->post_mbcode_deepink = 'Rose';
		$this->post_mbcode_detail = 'Merci d\'entrer une description';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Rouge brique';
		$this->post_mbcode_font = 'Police';
		$this->post_mbcode_green = 'Vert';
		$this->post_mbcode_huge = 'Enorme';
		$this->post_mbcode_image = 'Image'; //Translate
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Italique';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Grand';
		$this->post_mbcode_length = 'Votre message fait "+length+" caract�res.';
		$this->post_mbcode_limegreen = 'Vert 2';
		$this->post_mbcode_medium = 'Moyen';
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange rouge';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Mauve';
		$this->post_mbcode_quote = 'Citer';
		$this->post_mbcode_red = 'Rouge';
		$this->post_mbcode_royalblue = 'Bleu royal';
		$this->post_mbcode_sandybrown = 'Marron sable';
		$this->post_mbcode_seagreen = 'Vert 3';
		$this->post_mbcode_sienna = 'Sienne';
		$this->post_mbcode_silver = 'Argent';
		$this->post_mbcode_size = 'Taille';
		$this->post_mbcode_skyblue = 'Bleu ciel';
		$this->post_mbcode_small = 'Petit';
		$this->post_mbcode_strike = 'Ray�';
		$this->post_mbcode_strike1 = 'R';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Tiny'; //Translate
		$this->post_mbcode_tomato = 'Tomate';
		$this->post_mbcode_underline = 'Soulign�';
		$this->post_mbcode_underline1 = 'S';
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = 'Message'; //Translate
		$this->post_must_msg = 'Vous devez saisir un message avant de poster.';
		$this->post_must_options = 'Vous devez saisir des choix avant de poster un sondage.';
		$this->post_must_title = 'Vous devez saisir un titre avant de poster.';
		$this->post_new_poll = 'Nouveau sondage';
		$this->post_new_topic = 'Nouveau sujet';
		$this->post_no_forum = 'Ce forum n\'existe pas';
		$this->post_no_topic = 'Aucun sujet n\'a �t� sp�cifi�.';
		$this->post_no_vote = 'Vous devez voter parmi les choix propos�s.';
		$this->post_option_emoticons = 'Convertir les smileys en images ?';
		$this->post_option_global = 'Faire de ce sujet un sujet g�n�ral?';
		$this->post_option_mbcode = 'Formater le MbCode?';
		$this->post_optional = 'facultatif';
		$this->post_options = 'Options'; //Translate
		$this->post_poll_options = 'R�ponses';
		$this->post_poll_row = 'Une par ligne';
		$this->post_posted = 'Post� le';
		$this->post_posting = 'Vous postez';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'R�pondre';
		$this->post_reply_topic = 'R�pondre au sujet';
		$this->post_replying = 'Participe au sujet';
		$this->post_replying1 = 'R�pond';
		$this->post_smiles = 'Smileys';
		$this->post_too_many_options = 'Le sondage doit comprendre entre 2 et %d propositions. ';
		$this->post_topic_detail = 'Description du sujet';
		$this->post_topic_title = 'Titre du sujet';
		$this->post_view_topic = 'Voir le sujet en entier';
		$this->post_voting = 'Vous votez';
	}

	function printer()
	{
		$this->printer_back = 'Retour';
		$this->printer_not_found = 'Ce sujet n\'existe pas. Il peut avoir �t� supprim�, d�plac� ou n\'avoir jamais exist�.';
		$this->printer_not_found_title = 'Ce sujet n\'existe pas';
		$this->printer_perm_topics = 'Vous n\'avez pas la permission de voir les sujets.';
		$this->printer_perm_topics_guest = 'Vous n\'avez pas la permission de voir les sujets. Si vous vous enregisterez, vous le pourrez.';
		$this->printer_posted_on = 'Post� le';
		$this->printer_send = 'Envoyer � l\'auteur';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar et signature';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Anniversaire';
		$this->profile_contact = 'Contact'; //Translate
		$this->profile_email_address = 'Adresse email';
		$this->profile_fav = 'Forum pr�f�r�';
		$this->profile_fav_forum = '%s (%d%% des posts de ce membre)';
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Int�r�ts';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Dernier message';
		$this->profile_list = 'Liste des membres';
		$this->profile_location = 'Localisation';
		$this->profile_member = 'Groupe';
		$this->profile_member_title = 'Titre';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Vous devez entrer un utilisateur pour consulter un profil.';
		$this->profile_no_member = 'Cet utilisateur n\'existe pas. Le compte a certainement �t� supprim�.';
		$this->profile_none = '[ Aucun ]';
		$this->profile_not_post = 'pas encore post�.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Messages priv�s';
		$this->profile_postcount = '%s au total, %s par jour';
		$this->profile_posts = 'Messages';
		$this->profile_private = '[ Priv� ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signature'; //Translate
		$this->profile_unkown = '[ Inconnu ]';
		$this->profile_view_profile = 'Consultation d\'un profil';
		$this->profile_www = 'Page Perso';
		$this->profile_yahoo = 'Yahoo!';
	}

	function register()
	{
		$this->register_activated = 'Votre compte a �t� activ�!';
		$this->register_activating = 'Activation du compte';
		$this->register_activation_error = 'Il y a eu une erreur durant l\'activation su compte. V�rifiez si la barre d\'adresse de votre navigateur contient l\'URL figurant dans l\'email d\'activation. Si le probl�me persiste, contactez l\'administrateur du forum.';
		$this->register_confirm_passwd = 'Confirmation du mot de passe';
		$this->register_done = 'Vous avez �t� correctement enregistr� ! Vous pouvez maintenant vous connecter.';
		$this->register_email = 'Adresse email';
		$this->register_email_invalid = 'Cette adresse email est incorrecte.';
		$this->register_email_used = 'Cette adresse email est d�j� prise par un autre membre.';
		$this->register_fields = 'Certains champs n\'ont pas �t� remplis.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'Le nom d\'utilisateur est incorrect.';
		$this->register_name_taken = 'Le nom d\'utilisateur est d�j� pris.';
		$this->register_new_user = 'Nom d\'utilisateur souhait�';
		$this->register_pass_invalid = 'Le mot de passe entr� est incorrect. Assurez vous que vous utilisez des caract�res autoris�s.';
		$this->register_pass_match = 'Les deux mots de passe entr�s sont diff�rents.';
		$this->register_passwd = 'Mot de passe';
		$this->register_reg = 'Envoyer';
		$this->register_reging = 'Enregistrement';
	}

	function search()
	{
		$this->search_advanced = 'Options avanc�es';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Recherche classique';
		$this->search_characters = 'caract�res d\'un message';
		$this->search_day = 'jour';
		$this->search_days = 'jours';
		$this->search_exact_name = 'nom exact';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Recherche les termes';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Groupe';
		$this->search_guest = 'Invit�';
		$this->search_in = 'Recherche dans';
		$this->search_in_posts = 'Chercher seulement dans les mesages';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Rejoint';
		$this->search_level = 'Niveau du membre';
		$this->search_match = 'Recherche par correspondance';
		$this->search_matches = 'Correspondances';
		$this->search_month = 'mois';
		$this->search_months = 'mois';
		$this->search_mysqldoc = 'Documentation de MySQL';
		$this->search_newer = 'plus r�cent';
		$this->search_no_results = 'Votre recherche n\'a retourn� aucun r�sultat.';
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.'; //Translate
		$this->search_older = 'plus vieux';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Afficher seulement le premier';
		$this->search_partial_name = 'nom partiel';
		$this->search_post_icon = 'Ic�ne de message';
		$this->search_posted_on = 'Post� le';
		$this->search_posts = 'Messages';
		$this->search_posts_by = 'Seulement dans les messages post� par';
		$this->search_regex = 'Rechercher en utilisant des expressions r�guli�res';
		$this->search_regex_failed = 'Votre expression r�guli�re a �chou�e. Merci de consulter la document de MySQL pour l\'aide sur les expressions r�guli�res. ';
		$this->search_relevance = 'Post Relevance: %d%%'; //Translate
		$this->search_replies = 'R�ponses';
		$this->search_result = 'R�sultats de la recherche';
		$this->search_search = 'Recherche';
		$this->search_select_all = 'Tout s�lectionnet';
		$this->search_show_posts = 'Affichez les messages';
		$this->search_sound = 'Mots qui ressemblent �';
		$this->search_starter = 'Auteur';
		$this->search_than = 'que';
		$this->search_topic = 'Sujet';
		$this->search_unreg = 'Non-enregistr�';
		$this->search_week = 'semaine';
		$this->search_weeks = 'semaines';
		$this->search_year = 'ann�e';
	}

	function topic()
	{
		$this->topic_attached = 'Fichier attach� :';
		$this->topic_attached_downloads = 't�l�chargements';
		$this->topic_attached_perm = 'Vous n\'avez pas la permission de t�l�charger ce fichier.';
		$this->topic_attached_title = 'Fichier attach�';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Cr�er un nouveau sondage';
		$this->topic_create_topic = 'Cr�er un nouveau sujet';
		$this->topic_delete = 'Supprimer';
		$this->topic_delete_post = 'Supprimer ce message';
		$this->topic_edit = 'Editer';
		$this->topic_edit_post = 'Editer ce message';
		$this->topic_edited = 'Message �dit� le %s par %s';
		$this->topic_error = 'Erreur';
		$this->topic_group = 'Groupe';
		$this->topic_guest = 'Innvit�';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Rejoint';
		$this->topic_level = 'Niveau du membre';
		$this->topic_links_aim = 'Envoyer un message AIM � %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Envoyer un email � %s';
		$this->topic_links_icq = 'Envoyer un message ICQ � %s';
		$this->topic_links_msn = 'Voir le profil MSN de %s\'s';
		$this->topic_links_pm = 'Envoyer un message priv� � %s';
		$this->topic_links_web = 'Visiter le site web de %s\'s';
		$this->topic_links_yahoo = 'Envoyer un message � %s avec Yahoo! Messenger';
		$this->topic_lock = 'Verrouiller';
		$this->topic_locked = 'Sujet verrouill�';
		$this->topic_move = 'D�placer';
		$this->topic_no_votes = 'Il n\'y a pas de vote pour ce sujet.';
		$this->topic_not_found = 'Le sujet n\'a pas �t� trouv�.';
		$this->topic_not_found_message = 'Le sujet n\'a pas �t� trouv�. Il peut avoir �t� supprim�, d�plac� ou n\'avoir jamais exist�.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Options';
		$this->topic_pages = 'Pages'; //Translate
		$this->topic_perm_view = 'Vous n\'avez pas la permission de voir les sujets.';
		$this->topic_perm_view_guest = 'Vous n\'avez pas la permission de voir les sujets. Si vous vous enregistrez, vous le pourrez.';
		$this->topic_pin = 'Epingler';
		$this->topic_posted = 'Post�';
		$this->topic_posts = 'Messages';
		$this->topic_print = 'Voir une version imprimable';
		$this->topic_quote = 'R�pondre � une citation';
		$this->topic_reply = 'Repondre au sujet';
		$this->topic_split = 'D�couper';
		$this->topic_split_finish = 'Terminer tous les d�coupages';
		$this->topic_split_keep = 'Ne pas d�placer ce sujet';
		$this->topic_split_move = 'D�placer ce sujet';
		$this->topic_subscribe = 'M\'envoyer un email quand des r�ponses sont post�es dans ce sujet.';
		$this->topic_top = 'Aller en haut de la page';
		$this->topic_unlock = 'D�verrouiller';
		$this->topic_unpin = 'D�s�pingler';
		$this->topic_unreg = 'Non enregistr�';
		$this->topic_view = 'Consultation des r�sultats';
		$this->topic_viewing = 'Consultation d\'un sujet ';
		$this->topic_vote = 'Voter';
		$this->topic_vote_count_plur = '%d votes'; //Translate
		$this->topic_vote_count_sing = '%d vote'; //Translate
		$this->topic_votes = 'Votes'; //Translate
	}
}
?>