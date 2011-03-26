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
 * $Id: es.php,v 1.15 2006/07/26 17:56:19 jon Exp $
 **/

/**
 * Spanish language module
 *
 * @author Oscar Puertas <info@sitiosmexico.net>
 * @since 1.1.0
 **/
class es
{
	function active()
	{
		$this->active_last_action = 'Última acción';
		$this->active_modules_active = 'Desplegando usuarios activos';
		$this->active_modules_board = 'Desplegando el íindice';
		$this->active_modules_cp = 'Usando el panel de control';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Usando la ayuda';
		$this->active_modules_login = 'Firmandose o Saliendo';
		$this->active_modules_members = 'Desplegando la lista de miembros';
		$this->active_modules_mod = 'Moderando';
		$this->active_modules_pm = 'Usando mensajero';
		$this->active_modules_post = 'Publicando';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Buscando';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Tiempo';
		$this->active_user = 'Usuario';
		$this->active_users = 'Usuarios activos';
	}

	function board()
	{
		$this->board_active_users = 'Usuarios activos';
		$this->board_birthdays = 'Cumpleaños de Hoy';
		$this->board_can_post = 'Puede contestar en este foro';
		$this->board_can_topics = 'Puede ver, más no crear tópicos en este foro';
		$this->board_cant_post = 'No puede responder en este foro';
		$this->board_cant_topics = 'No puede ver o crear tópicos en este foro';
		$this->board_forum = 'Foro';
		$this->board_guests = 'Invitados';
		$this->board_last_post = 'Último mensaje';
		$this->board_mark = 'Marcar todos los mensajes como leidos';
		$this->board_mark1 = 'Todos los mensajes se han marcado como leidos';
		$this->board_members = 'Miembros';
		$this->board_message = '%s Mensaje';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'No hay cumpleaños de miembros hoy';
		$this->board_nobody = 'No hay miembros en línea';
		$this->board_nopost = 'No hay mensajes';
		$this->board_noview = 'No tiene permiso para ver la lista de mensajes';
		$this->board_regfirst = 'No tiene permiso para ver la lista de mensajes, pero si se registra, podrá tener esa capacidad';
		$this->board_replies = 'Respuestas';
		$this->board_stats = 'Estadísticas';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'tópicos';
		$this->board_topics_new = 'Hay nuevos mensajes en este foro';
		$this->board_topics_old = 'No hay nuevos mensajes en este foro';
		$this->board_users = 'Usuarios';
		$this->board_write_topics = 'Puede ver y crear tópicos en este foro';
	}

	function cp()
	{
		$this->cp_aim = 'AIM Screen Name'; //Translate
		$this->cp_already_member = 'El correo electrónico que ha inscrito ya esta asignado a otro miembro';
		$this->cp_apr = 'Abril';
		$this->cp_aug = 'Agosto';
		$this->cp_avatar_current = 'Su avatar actual';
		$this->cp_avatar_error = 'Error de avatar';
		$this->cp_avatar_must_select = 'Debe de seleccionar un avatar.';
		$this->cp_avatar_none = 'No usar un avatar';
		$this->cp_avatar_pixels = 'pixeles';
		$this->cp_avatar_select = 'seccionar un avatar';
		$this->cp_avatar_size_height = 'La altura de su avatar debe de estar entre 1 y';
		$this->cp_avatar_size_width = 'El Ancho de su avatar debe de estar entre 1 y';
		$this->cp_avatar_upload = 'Cargar un avatar de su disco duro';
		$this->cp_avatar_upload_failed = 'La carga de su avatar fallo. El Archivo no existe';
		$this->cp_avatar_upload_not_image = 'Solo puede cargar imagenes para ser usada como su avatar';
		$this->cp_avatar_upload_too_large = 'El archivo de avatar que especifico es muy grande, el tamaño maximo es de %d kilobytes.';
		$this->cp_avatar_url = 'Especificar un URL para su avatar';
		$this->cp_avatar_use = 'Usar su avatar cargado';
		$this->cp_bday = 'Cumpleaños';
		$this->cp_been_updated = 'Su perfíl ha sido actualizados';
		$this->cp_been_updated1 = 'Su avatar ha sido actualizado';
		$this->cp_been_updated_prefs = 'Sus preferencias han sido actualizadas';
		$this->cp_changing_pass = 'Editanto Password';
		$this->cp_contact_pm = 'Permitir a otros contactarle via mensajero?';
		$this->cp_cp = 'Panel de control';
		$this->cp_current_avatar = 'Avatar actual';
		$this->cp_current_time = 'Son las %s.';
		$this->cp_dec = 'Diciembre';
		$this->cp_editing_avatar = 'Editando Avatar';
		$this->cp_editing_profile = 'Editing Profile'; //Translate
		$this->cp_email = 'Correo electrónico';
		$this->cp_email_form = 'Permitir a otros contactarlo via formulario de correo electrónico?';
		$this->cp_email_invaid = 'La cuenta de correo electrónico que especifico es invalida';
		$this->cp_err_avatar = 'Error al actualizar su avatar';
		$this->cp_err_updating = 'Error al actualizar perfíl';
		$this->cp_feb = 'Febrero';
		$this->cp_file_type = 'El avatar que especifico no es valido, cerciorese del formato. Los formatos validos son gif, jpg, o png';
		$this->cp_format = 'Nombre de usuario';
		$this->cp_gmt = 'Tiempo Internacional de Greenwich [GMT]';
		$this->cp_gmt_nev1 = '[GMT-1:00] I Azores, Cabo Verde';
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaii'; //Translate
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Island, Samoa'; //Translate
		$this->cp_gmt_nev12 = '[GMT-12:00] International Date Line West'; //Translate
		$this->cp_gmt_nev2 = '[GMT-2:00] Mid-Atlantic'; //Translate
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenland'; //Translate
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->cp_gmt_nev4 = '[GMT-4:00] Tiempo del atlantico Canada';
		$this->cp_gmt_nev5 = '[GMT-5:00] Tiempo del Este EEUU & Canada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Tiempo Central EEUU & Canada & Tiempo del Centro de Mexico;';
		$this->cp_gmt_nev7 = '[GMT-7:00] Tiempo de la Monaña EEUU & Canada & Nayarit, Sinaloa';
		$this->cp_gmt_nev8 = '[GMT-8:00] Tiempo del Pacifico EEUU & Canada & Tijuana';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaska'; //Translate
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Roma, Paris';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, New Caledonia'; //Translate
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->cp_gmt_pos2 = '[GMT+2:00] Athens, Cairo, Jerusalem'; //Translate
		$this->cp_gmt_pos3 = '[GMT+3:00] Baghdad, Moscu, Nairobi';
		$this->cp_gmt_pos35 = '[GMT+3:30] Tehran'; //Translate
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Calcutta, New Delhi'; //Translate
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->cp_gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapur';
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokyo, Seoul'; //Translate
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Panel de control del usuario';
		$this->cp_height = 'Altura';
		$this->cp_icq = 'Numero de ICQ';
		$this->cp_interest = 'Intereses o actividades';
		$this->cp_jan = 'Enero';
		$this->cp_july = 'Julio';
		$this->cp_june = 'June'; //Translate
		$this->cp_label_edit_avatar = 'Editar Avatar';
		$this->cp_label_edit_pass = 'Editar Password';
		$this->cp_label_edit_prefs = 'Editar Preferencias';
		$this->cp_label_edit_profile = 'Editar perfíl';
		$this->cp_label_edit_subs = 'Editar Suscripciones';
		$this->cp_language = 'Idioma';
		$this->cp_less_charac = 'Su nOmbre de usuario debe ser menor de 32 caracteres';
		$this->cp_location = 'Ubicación';
		$this->cp_login_first = 'Debe de estar firmado para accesar al panel de control';
		$this->cp_mar = 'Marzo';
		$this->cp_may = 'Mayo';
		$this->cp_msn = 'Identidad de MSN';
		$this->cp_must_orig = 'Su nombre debe de ser identico al original. Puede cambiar a mayusculas o el espaciado';
		$this->cp_new_notmatch = 'Los passwords especificados no coinciden';
		$this->cp_new_pass = 'Nuevo Password';
		$this->cp_no_flash = 'Los avatares en Flash No se permiten';
		$this->cp_not_exist = 'The date you specified (%s) does not exist!'; //Translate
		$this->cp_nov = 'Noviembre';
		$this->cp_oct = 'Octubre';
		$this->cp_old_notmatch = 'El antiguo Password especificano no coincide con el de la base de datos';
		$this->cp_old_pass = 'Password antiguo';
		$this->cp_pass_notvaid = 'Su password no es valido, asegurese que usa caracteres validos como letras, numeros, guiones, guiones bajos, etc.';
		$this->cp_preferences = 'Cambiando Preferencias';
		$this->cp_privacy = 'Opciones de privacidad';
		$this->cp_repeat_pass = 'Repetir el nuevo password';
		$this->cp_sept = 'Septiembre';
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Mostrar correo electrónico en perfíl?';
		$this->cp_signature = 'Firma';
		$this->cp_size_max = 'El avatar especifiaco es muy grande. El tamaño maximo permitido es %s por %s pixeles.';
		$this->cp_skin = 'Esquema de despliegue';
		$this->cp_sub_change = 'Cambiando suscripciones';
		$this->cp_sub_delete = 'Borrar';
		$this->cp_sub_expire = 'Fecha de expiracion';
		$this->cp_sub_name = 'Nombre de suscripcion';
		$this->cp_sub_no_params = 'No fueron dados parametros';
		$this->cp_sub_success = 'Esta ahora suscrito a %s.';
		$this->cp_sub_type = 'Tipo de suscripcion';
		$this->cp_sub_updated = 'Las suscripciones seleccionadas han sido borradas';
		$this->cp_topic_option = 'Opciones de tópico';
		$this->cp_updated = 'perfíl actualizado';
		$this->cp_updated1 = 'Avatar actualizado';
		$this->cp_updated_prefs = 'Preferencias actualizadas';
		$this->cp_user_exists = 'Ese nombre de usuario ya existe previamente';
		$this->cp_valided = 'Su password ha sido validado y cambiado';
		$this->cp_view_avatar = 'Ver avatars?';
		$this->cp_view_emoticon = 'Ver emoticons?';
		$this->cp_view_signature = 'Ver firmas?';
		$this->cp_welcome = 'Bienvenido al panel de control de usuario. Aqui podrá configurar su cuenta. Seleccione de las opciones arriba';
		$this->cp_width = 'Anchura';
		$this->cp_www = 'Pagina Personal';
		$this->cp_yahoo = 'Identidad de Yahoo!';
		$this->cp_zone = 'Zona Horaria';
	}

	function email()
	{
		$this->email_blocked = 'Ese miembro no acepta correo desde este formulario';
		$this->email_email = 'Correo electrónico';
		$this->email_msgtext = 'Cuerpo del mensaje:';
		$this->email_no_fields = 'regrese y asegurese que todos los campos esten completos';
		$this->email_no_member = 'No existe un miembro con ese nombre';
		$this->email_no_perm = 'No tiene permiso de enviar correo a traves de este sistema';
		$this->email_sent = 'Su correo ha sido enviado';
		$this->email_subject = 'Titulo:';
		$this->email_to = 'A:';
	}

	function forum()
	{
		$this->forum_by = 'De';
		$this->forum_can_post = 'Puede contester en este foro';
		$this->forum_can_topics = 'Puede ver tópicos en este foro';
		$this->forum_cant_post = 'No puede responder en este foro';
		$this->forum_cant_topics = 'No puede ver tópicos en este foro';
		$this->forum_dot = 'punto';
		$this->forum_dot_detail = 'Muestra que ha publicado o contestado en este tópico';
		$this->forum_forum = 'Foro';
		$this->forum_guest = 'Invitado';
		$this->forum_hot = 'Activo';
		$this->forum_icon = 'Ícono de Mensaje';
		$this->forum_jump = 'Brincar al tópico más reciente';
		$this->forum_last = 'Ultima publicación';
		$this->forum_locked = 'Bloqueado';
		$this->forum_moved = 'Movido';
		$this->forum_msg = '%s Mensaje';
		$this->forum_new = 'Nuevo';
		$this->forum_new_poll = 'Crear una nueva encuesta';
		$this->forum_new_topic = 'Crear nuevo tópico';
		$this->forum_no_topics = 'No hay tópicos para desplegar en este foro';
		$this->forum_noexist = 'El foro especificado no existe';
		$this->forum_nopost = 'No hay publicaciones';
		$this->forum_not = 'No';
		$this->forum_noview = 'No tiene permiso para ver foros';
		$this->forum_pages = 'Paginas';
		$this->forum_pinned = 'Fijado';
		$this->forum_pinned_topic = 'tópico Fijado';
		$this->forum_poll = 'Encuesta';
		$this->forum_regfirst = 'No tiene permiso para ver los foros, si se registra, podrá hacerlo';
		$this->forum_replies = 'Respuestas';
		$this->forum_starter = 'Iniciador';
		$this->forum_sub = 'Sub-Foro';
		$this->forum_sub_last_post = 'Ultima publicación';
		$this->forum_sub_replies = 'Respuestas';
		$this->forum_sub_topics = 'tópicos';
		$this->forum_subscribe = 'Notificarme via correo electrónico cuando se publique en este foro';
		$this->forum_topic = 'tópico';
		$this->forum_topics_new = 'Hay nuevas publicaciones en este foro';
		$this->forum_topics_old = 'No hay nuevas publicaciones en este foro';
		$this->forum_views = 'Vistas';
		$this->forum_write_topics = 'Puede crear tópicos en este foro';
	}

	function help()
	{
		$this->help_available_files = 'Ayuda';
		$this->help_none = 'No hay archivos de ayuda en la base de datos';
	}

	function login()
	{
		$this->login_cant_logged = 'No pudo firmarse, verifique que su nombre de usuario y/o password sea correcto.<br /><br />Ambos son sensibles a mayusculas y minusculas, por lo que \'UsUARIO\' es diferente de \'Usuario\'. Tambien verifique, que las cookies estén habilitadas en su sistema o navegador.';
		$this->login_cookies = 'Las cookies deben de estar habilitadas para firmarse';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Firmandose';
		$this->login_logged = 'Ahora esta usted firmado';
		$this->login_now_out = 'Ahora esta fuera del sistema';
		$this->login_out = 'Saliendo';
		$this->login_pass = 'Password'; //Translate
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = 'Esta segura que quiere salir de \'%s\'?';
		$this->login_user = 'Nombre de usuario';
	}

	function main()
	{
		$this->board_by = 'Por';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Su cuenta ha sido activada';
		$this->main_activate_resend = 'Reenviar Correo de activacion';
		$this->main_admincp = 'admin cp'; //Translate
		$this->main_banned = 'Le ha sido prohibido ver cualquier parte de este sistema';
		$this->main_code = 'Codigo';
		$this->main_continue = 'Continuar';
		$this->main_cp = 'Panel de control';
		$this->main_full = 'Completo';
		$this->main_help = 'Ayuda';
		$this->main_load = 'Cargar';
		$this->main_login = 'Firmar';
		$this->main_logout = 'Salir';
		$this->main_max_load = 'Lo sentimos pero, %s no esta actualmente disponible debido a la cantidad masiva de usuaruios conectados';
		$this->main_members = 'Miembros';
		$this->main_messenger = 'Mensajero';
		$this->main_new = 'Nuevo';
		$this->main_next = 'Siguiente';
		$this->main_posts_new = 'Nuevo';
		$this->main_powered = 'Sportador por:';
		$this->main_prev = 'Anterior';
		$this->main_queries = 'Busquedas';
		$this->main_quote = 'Quote'; //Translate
		$this->main_register = 'Registar';
		$this->main_reminder = 'Recordatorio';
		$this->main_reminder_closed = 'El sistema esta cerrado y esta solo disponible para administradores';
		$this->main_said = 'Dijo';
		$this->main_search = 'Busqueda';
		$this->main_seconds = 'Segundos';
		$this->main_welcome = 'Bienvenido';
		$this->main_welcome_guest = 'Bienvenido Invitado';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'Enviar';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'Todos';
		$this->members_email = 'Correo electrónico';
		$this->members_email_member = 'enviar correo electrónico a este miembro';
		$this->members_group = 'Grupo';
		$this->members_joined = 'Se unio';
		$this->members_list = 'Lista de Miembros';
		$this->members_member = 'Miembro';
		$this->members_pm = 'PM'; //Translate
		$this->members_posts = 'Publicaciones';
		$this->members_send_pm = 'Enviar a este miembro un mensaje personal';
		$this->members_title = 'Titulo';
		$this->members_vist_www = 'Visitar el sitio web de este miembro';
		$this->members_www = 'sitio Web';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Esta seguro de borrar esta publicación?';
		$this->mod_confirm_topic_delete = 'Esta seguro de borrar este tópico?';
		$this->mod_error_first_post = 'No puede borrar la primera publicación en un tópico';
		$this->mod_error_move_category = 'No puede mover un tópico a una categoria';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'No puede mover un tópico a un foro que no existe';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'No puede mover un tópico al foro al que ya existe';
		$this->mod_label_controls = 'Controles de moderador';
		$this->mod_label_description = 'Descripcion';
		$this->mod_label_emoticon = 'Convertir emoticons a imagenes?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Formatear MbCode?';
		$this->mod_label_move_to = 'Mover a';
		$this->mod_label_options = 'Opciones';
		$this->mod_label_post_delete = 'Borrar publicación';
		$this->mod_label_post_edit = 'Editar publicación';
		$this->mod_label_title = 'Titulo';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Borrar tópico';
		$this->mod_label_topic_edit = 'Editar tópico';
		$this->mod_label_topic_lock = 'Bloquear tópico';
		$this->mod_label_topic_move = 'Mover tópico';
		$this->mod_label_topic_move_complete = 'Transferir completamente el tópico al nuevo foro';
		$this->mod_label_topic_move_link = 'Transferir el tópico la nuevo foro, y dejar una liga a su nueva ubicacion en el foro anterior';
		$this->mod_label_topic_pin = 'Fijar tópico';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'La publicación especificada no existe';
		$this->mod_missing_topic = 'El tópico especificado no existe';
		$this->mod_no_action = 'Debe especificar una acción';
		$this->mod_no_post = 'Debe especificar una publicación';
		$this->mod_no_topic = 'Debe especificar un tópico';
		$this->mod_perm_post_delete = 'No tiene permiso para borrar esta publicación';
		$this->mod_perm_post_edit = 'No tiene permiso de editar esta publicación';
		$this->mod_perm_topic_delete = 'No tiene permiso de borrar este tópico';
		$this->mod_perm_topic_edit = 'No tiene permiso de editar este tópico';
		$this->mod_perm_topic_lock = 'No tiene permiso de bloquear este tópico';
		$this->mod_perm_topic_move = 'No tiene permiso de mover este tópico';
		$this->mod_perm_topic_pin = 'No tiene permiso para fijar este tópico';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'No tiene permiso para desbloquear este tópico';
		$this->mod_perm_topic_unpin = 'No tiene permiso de quitar la fijacion a este tópico';
		$this->mod_success_post_delete = 'La publicación fue borrada satisfactoriamente';
		$this->mod_success_post_edit = 'La publicación fue editada satisfactoriamente';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'El tópico fue borrado satisfactoriamente';
		$this->mod_success_topic_edit = 'El tópico fue editado satisfactoriamente';
		$this->mod_success_topic_move = 'El tópico fue movido satisfactoriamente al nuevo foro';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'punto';
		$this->new_posts_dot_detail = 'Muestra que ha publicado o contestado en este tópico';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Foro';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Activo';
		$this->new_posts_last = 'Ultima publicación';
		$this->new_posts_locked = 'Bloqueado';
		$this->new_posts_moved = 'Movido';
		$this->new_posts_new = 'Nuevo';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'No';
		$this->new_posts_pinned = 'Fijado';
		$this->new_posts_poll = 'Encuesta';
		$this->new_posts_topic = 'tópico';
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
		$this->pm_cant_del = 'No tiene permiso de borrar este mensaje';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Borrar todos los mensajes';
		$this->pm_delete = 'Borrar';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Mensaje Borrado';
		$this->pm_deleted_all = 'Mensajes Borrados';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Su mensaje no pudo ser enviado, asegurese de que todos los campos esten completos';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Bandeja de Entrada';
		$this->pm_folder_new = '%s nuevos';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'De';
		$this->pm_group = 'Grupo';
		$this->pm_guest = 'como invitado no puede usar el mensajero, si lo desea, puede registrarse';
		$this->pm_joined = 'Se unio';
		$this->pm_messenger = 'Mensajero';
		$this->pm_msgtext = 'Texo del mensaje';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Debe especificar una carpeta';
		$this->pm_no_member = 'No se encontraron miembros con esa identificacion';
		$this->pm_no_number = 'No se encontraron mensajes con ese numero';
		$this->pm_no_title = 'Sin Titulo';
		$this->pm_nomsg = 'No hay mensajes en esta carpeta';
		$this->pm_noview = 'No tiene permiso para ver este mensaje';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Mensajero Personal';
		$this->pm_personal_msging = 'Mensajeria Personal';
		$this->pm_pm = 'MP';
		$this->pm_posts = 'Publicaciones';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Respuestas';
		$this->pm_send = 'Enviar';
		$this->pm_sendamsg = 'Enviar Mensaje';
		$this->pm_sendingpm = 'Enviando MP';
		$this->pm_sendon = 'Enviado';
		$this->pm_success = 'Su mensaje fue enviado satisfactoriamente';
		$this->pm_sure_del = 'Esta seguro de borrar este mensaje?';
		$this->pm_sure_delall = 'Esta seguro de borrar todos los mensajes de esta carpeta?';
		$this->pm_title = 'Titulo';
		$this->pm_to = 'A';
	}

	function post()
	{
		$this->post_attach = 'Anexos';
		$this->post_attach_add = 'Agregar Anexos';
		$this->post_attach_disrupt = 'Agregar o borrar anexos no modificara su publicación';
		$this->post_attach_failed = 'La carga del anexo fallo. El archivo especificado puede que no insista';
		$this->post_attach_not_allowed = 'No puede anexar archivos de ese tipo';
		$this->post_attach_remove = 'Remover Anexo';
		$this->post_attach_too_large = 'El archivo es demasiado grande, el tamaño máximo es %d KB.';
		$this->post_cant_create = 'Como Invitado, no tiene permiso de crear tópicos. Si lo desea, puede registrarse para hacerlo';
		$this->post_cant_create1 = 'No tiene permiso para crear tópicos';
		$this->post_cant_enter = 'Su voto no pudo ser incluido, porque ya había votado en esta encuesta o no tiene permiso para votar';
		$this->post_cant_poll = 'As a guest, you do not have permission to create polls. If you register, you may be able to create them.'; //Translate
		$this->post_cant_poll1 = 'No tiene permiso para crear encuestas';
		$this->post_cant_reply = 'No tiene permiso para responder a tópicos en este foro';
		$this->post_cant_reply1 = 'Como Invitado, no tiene permiso para responder a tópicos. Si lo desea, puede registrarse para hacerlo';
		$this->post_cant_reply2 = 'You do not have permission to reply to topics.'; //Translate
		$this->post_closed = 'Este tópico ha sido cerrado';
		$this->post_create_poll = 'Crear encuesta';
		$this->post_create_topic = 'Crear tópico';
		$this->post_creating = 'Creando tópico';
		$this->post_creating_poll = 'Creando Encuesta';
		$this->post_flood = 'Ha hecho una publicación en los pasados %s segundos, y no puede hacerlo ahora mismo.<br /><br />Por favor intente más tarde.';
		$this->post_guest = 'Invitado';
		$this->post_icon = 'Ícono de publicación';
		$this->post_last_five = 'Ultimas cinco publicaciones en orden inverso';
		$this->post_length = 'Revise la longitud';
		$this->post_mbcode_address = 'Teclee una direccion';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Azul';
		$this->post_mbcode_bold = 'Negritas';
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Chocolate'; //Translate
		$this->post_mbcode_code = 'Codigo';
		$this->post_mbcode_color = 'Color'; //Translate
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Dark Blue'; //Translate
		$this->post_mbcode_darkred = 'Rojo Fuerte';
		$this->post_mbcode_deepink = 'Rosa Profundo';
		$this->post_mbcode_detail = 'Teclee una descripción';
		$this->post_mbcode_email = 'Correo Electrónico';
		$this->post_mbcode_firered = 'Rojo Ladrillo';
		$this->post_mbcode_font = 'Fuente';
		$this->post_mbcode_green = 'Verde';
		$this->post_mbcode_huge = 'Muy grande';
		$this->post_mbcode_image = 'Imagen';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Azul Indigo';
		$this->post_mbcode_italic = 'Cursiva';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Grande';
		$this->post_mbcode_length = 'Su publicación contiene "+length+" caracteres.';
		$this->post_mbcode_limegreen = 'Verde Limon';
		$this->post_mbcode_medium = 'Medio';
		$this->post_mbcode_orange = 'Naranja';
		$this->post_mbcode_orangered = 'Rojo naranja';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Morado';
		$this->post_mbcode_quote = 'Comillas';
		$this->post_mbcode_red = 'Rojo';
		$this->post_mbcode_royalblue = 'Azul Marino';
		$this->post_mbcode_sandybrown = 'Cafe arena';
		$this->post_mbcode_seagreen = 'Verde mar';
		$this->post_mbcode_sienna = 'Sepia';
		$this->post_mbcode_silver = 'Plata';
		$this->post_mbcode_size = 'tamaño';
		$this->post_mbcode_skyblue = 'Azul Cielo';
		$this->post_mbcode_small = 'Pequeño';
		$this->post_mbcode_strike = 'Sobrelínea';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Aqua';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Muy pequeño';
		$this->post_mbcode_tomato = 'Jitomate';
		$this->post_mbcode_underline = 'Subrayado';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Beige';
		$this->post_msg = 'Mensaje';
		$this->post_must_msg = 'Debe incluir un mensaje cuando publica';
		$this->post_must_options = 'Debe incluir opciones cuando crea una encuesta';
		$this->post_must_title = 'Debe incluir un titulo cuando crea un tópico';
		$this->post_new_poll = 'Nueva Encuesta';
		$this->post_new_topic = 'Nuevo tópico';
		$this->post_no_forum = 'El foro no fue encontrado';
		$this->post_no_topic = 'No fue especificado ningun tópico';
		$this->post_no_vote = 'Debe escojer una opcion para votar por esta';
		$this->post_option_emoticons = 'Convertir emoticons a imagenes?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Formatear MbCode?';
		$this->post_optional = 'opcional';
		$this->post_options = 'Opciones';
		$this->post_poll_options = 'Opciones de encuesta';
		$this->post_poll_row = 'Uno por línea';
		$this->post_posted = 'Publicado en';
		$this->post_posting = 'Publicando';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Responder';
		$this->post_reply_topic = 'Responder al tópico';
		$this->post_replying = 'Respondiendo a tópico';
		$this->post_replying1 = 'Respondiendo';
		$this->post_smiles = 'Sonrisas seleccionables';
		$this->post_too_many_options = 'Tiene entre 2 y %d opciones para una encuesta';
		$this->post_topic_detail = 'Descripción del tópico';
		$this->post_topic_title = 'Titulo del tópico';
		$this->post_view_topic = 'Ver el tópico completo';
		$this->post_voting = 'Votando';
	}

	function printer()
	{
		$this->printer_back = 'Atras';
		$this->printer_not_found = 'El tópico no fue encontrado, pudo haber sido borrado, movido o pudo nunca haber existido';
		$this->printer_not_found_title = 'tópico no encontrado';
		$this->printer_perm_topics = 'No tiene permiso para ver los tópicos';
		$this->printer_perm_topics_guest = 'No tiene permiso para ver los tópicos, si desea inscribirse, podrá hacerlo';
		$this->printer_posted_on = 'Publicado el';
		$this->printer_send = 'Enviado a la impresora';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name'; //Translate
		$this->profile_av_sign = 'Avatar y Firma';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Cumpleaños';
		$this->profile_contact = 'Contacto';
		$this->profile_email_address = 'Correo electrónico';
		$this->profile_fav = 'Forum Favorito';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'Numero ICQ';
		$this->profile_info = 'Informacion';
		$this->profile_interest = 'Intereses';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Ultima publicación';
		$this->profile_list = 'Lista de Miembros';
		$this->profile_location = 'Ubicacion';
		$this->profile_member = 'Grupo de Miembros';
		$this->profile_member_title = 'Titulo de Miembro';
		$this->profile_msn = 'Identidad MSN';
		$this->profile_must_user = 'Debe de teclear un nombre de usuario para ver su perfíl';
		$this->profile_no_member = 'No hay ningun miembro con esa identificacion de  Usuario. la cuenta pudo haber sido borrada';
		$this->profile_none = '[ Ninguno ]';
		$this->profile_not_post = 'No ha publicado todavia';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'mensajes privados';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Publicaciones';
		$this->profile_private = '[ Privado ]';
		$this->profile_profile = 'perfíl';
		$this->profile_signature = 'Firma';
		$this->profile_unkown = '[ Desconocido ]';
		$this->profile_view_profile = 'Desplegando perfíl';
		$this->profile_www = 'Pagina Personal';
		$this->profile_yahoo = 'Identidad de Yahoo!';
	}

	function register()
	{
		$this->register_activated = 'Su cuenta ha sido activada!';
		$this->register_activating = 'Activacion de cuenta';
		$this->register_activation_error = 'Ha habido un error al activar su cuenta, verifique si su navegador contiene la cadena completa (url) enviada por correo. Si el problema persiste, contacte al administrador del sistema para reenviar el correo.';
		$this->register_confirm_passwd = 'Confirmar Password';
		$this->register_done = 'ya ha sido registrado, ahora se podrá firmar normalmente';
		$this->register_email = 'Correo electrónico';
		$this->register_email_invalid = 'La cuenta de correo electrónico es invalida, por favor verifiquela';
		$this->register_email_used = 'La cuenta de correo electrónico ya esta registrada por otro miembro';
		$this->register_fields = 'No todos los campos estan completos';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'El nombre que tecleo es demasiado largo';
		$this->register_name_taken = 'El Nomre Usuario ya esta en uso por otro miembro';
		$this->register_new_user = 'Nombre de usuario deseado';
		$this->register_pass_invalid = 'El password que tecleo no es valido. Verifique que contiene caracteres validos como letras, numeros, guiones, o espacios, y que tengan por lo menos 5 caracteres';
		$this->register_pass_match = 'Los passwords especificados no coinciden';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Registro';
		$this->register_reging = 'Registrandose';
	}

	function search()
	{
		$this->search_advanced = 'Opciones Advanzadas';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Busqueda Basica';
		$this->search_characters = 'Caracteres de la publicación';
		$this->search_day = 'dia';
		$this->search_days = 'dias';
		$this->search_exact_name = 'Nombre exacto';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Buscar';
		$this->search_forum = 'Foro';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Invitado';
		$this->search_in = 'Buscar en';
		$this->search_in_posts = 'Buscar solo en publicaciones';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Joined'; //Translate
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Buscar por coincidencia';
		$this->search_matches = 'Coincidencias';
		$this->search_month = 'Mes';
		$this->search_months = 'months'; //Translate
		$this->search_mysqldoc = 'Documentacion MySQL';
		$this->search_newer = 'Más reciente';
		$this->search_no_results = 'Su busqueda no produjo resultados';
		$this->search_no_words = 'Debe especificar algunos términos para buscar.<br /><br />Cada uno de los términos de busqueda deberan ser de más de 4 caracteres, incluyendo Letras, Numeros, apostrofes y guiones bajos';
		$this->search_older = 'Más antiguo';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Solo desplegar el primero';
		$this->search_partial_name = 'Nombre parcial';
		$this->search_post_icon = 'Ícono de publicación';
		$this->search_posted_on = 'Publicado en';
		$this->search_posts = 'Publicaciones';
		$this->search_posts_by = 'Solo publicaciones hechas por';
		$this->search_regex = 'Buscar por expresiones regulares';
		$this->search_regex_failed = 'Su expresion regular fallo, por favor revise la documentacion de MySQL para la ayuda de expresiones regulares';
		$this->search_relevance = 'Relevancia de la publicación: %d%%';
		$this->search_replies = 'publicación';
		$this->search_result = 'Resultados de la busqueda';
		$this->search_search = 'Buscar';
		$this->search_select_all = 'Seleccionar todos';
		$this->search_show_posts = 'Mostrar publicaciones coincidentes';
		$this->search_sound = 'Buscar foneticamente';
		$this->search_starter = 'Iniciador';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'tópico';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'Semana';
		$this->search_weeks = 'Semanas';
		$this->search_year = 'Año';
	}

	function topic()
	{
		$this->topic_attached = 'Archivo anexo:';
		$this->topic_attached_downloads = 'Descargas';
		$this->topic_attached_perm = 'Usted no tiene permiso para descargar este archivo.';
		$this->topic_attached_title = 'Archivo anexo';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Crear una nueva encuesta';
		$this->topic_create_topic = 'Crear un nuevo tópico';
		$this->topic_delete = 'Borrar';
		$this->topic_delete_post = 'Borrar esta publicación';
		$this->topic_edit = 'Editar';
		$this->topic_edit_post = 'Editar esta publicación';
		$this->topic_edited = 'La ultima modificacuón fue %s hecha por %s';
		$this->topic_error = 'Error'; //Translate
		$this->topic_group = 'Grupo';
		$this->topic_guest = 'Invitado';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Se unio';
		$this->topic_level = 'Nivel de Miembro';
		$this->topic_links_aim = 'enviar un mensaje AIM a%s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Enviar correo electrónico a %s';
		$this->topic_links_icq = 'Enviar Mensaje ICQ a %s';
		$this->topic_links_msn = 'Ver el peril de MSN de %s';
		$this->topic_links_pm = 'Enviar un mensaje personal a %s';
		$this->topic_links_web = 'Visitar el sitio web de %s';
		$this->topic_links_yahoo = 'Enviar un mensaje a %s con Yahoo! Messenger';
		$this->topic_lock = 'Bloquear';
		$this->topic_locked = 'tópico bloqueado';
		$this->topic_move = 'Mover';
		$this->topic_no_votes = 'No existen votos para esta encuesta';
		$this->topic_not_found = 'tópico No encontrado';
		$this->topic_not_found_message = 'El tópico no fue encontrado, pudo haber sido borrado, movido o pudo nunca haber existido';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Opciones de tópico';
		$this->topic_pages = 'Paginas';
		$this->topic_perm_view = 'No tiene permiso de ver estos tópicos';
		$this->topic_perm_view_guest = 'No tiene permiso de ver estos tópicos, si se registra, podrá hacerlo';
		$this->topic_pin = 'Fijar';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Publicaciones';
		$this->topic_print = 'Ver versión imprimible';
		$this->topic_quote = 'Responder citando a esta publicación';
		$this->topic_reply = 'Responder al tópico';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Enviarme correo electrónico cuando otros respondan a este tópico';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Desbloquear';
		$this->topic_unpin = 'Quitar la fijación';
		$this->topic_unreg = 'No registrado';
		$this->topic_view = 'Ver resultados';
		$this->topic_viewing = 'Desplegando tópico';
		$this->topic_vote = 'Vote'; //Translate
		$this->topic_vote_count_plur = '%d votos';
		$this->topic_vote_count_sing = '%d voto';
		$this->topic_votes = 'Votos';
	}
}
?>