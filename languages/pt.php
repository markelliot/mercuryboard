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
 * $Id: pt.php,v 1.43 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Portuguese language module
 *
 * @author Miguel Garcia <info@cisiodon.com.br>
 * @since 1.0.0 Beta 4.0
 **/
class pt
{
	function active()
	{
		$this->active_last_action = '�ltima A��o';
		$this->active_modules_active = 'Viewing Active Users';
		$this->active_modules_board = 'Vendo �ndice';
		$this->active_modules_cp = 'Usando Painel de controle';
		$this->active_modules_forum = 'Vendo Forum: %s';
		$this->active_modules_help = 'usando Help';
		$this->active_modules_login = 'Logando';
		$this->active_modules_members = 'Vendo Lista';
		$this->active_modules_mod = 'Moderando';
		$this->active_modules_pm = 'Using Messenger';
		$this->active_modules_post = 'Postando';
		$this->active_modules_printer = 'Imprimindo t�pico: %s';
		$this->active_modules_profile = 'Vendo Profile: %s';
		$this->active_modules_search = 'Procurando';
		$this->active_modules_topic = 'Vendo T�pico: %s';
		$this->active_time = 'Hora';
		$this->active_user = 'Usu�rio';
		$this->active_users = 'Usu�rios ativos';
	}

	function board()
	{
		$this->board_active_users = 'Usu�rios ativos';
		$this->board_birthdays = 'Aniversariantes:';
		$this->board_can_post = 'Voc� pode responder neste forum.';
		$this->board_can_topics = 'Voc� pode ver t�picos neste forum.';
		$this->board_cant_post = 'Voc� n�o pode responder neste forum.';
		$this->board_cant_topics = 'Voc� n�o pode ver t�picos neste forum.';
		$this->board_forum = 'Rela��o de Foruns e Descri��o';
		$this->board_guests = 'convidados';
		$this->board_last_post = '�ltimas';
		$this->board_mark = 'Marcando como lidas';
		$this->board_mark1 = 'Todas foram marcadas como lidas.';
		$this->board_members = 'membros';
		$this->board_message = '%s Mensagem';
		$this->board_most_online = 'Usu�rios on line: %d at %s';
		$this->board_nobday = 'Nenhum aniversariante hoje.';
		$this->board_nobody = 'Nenhum usu�rio on line.';
		$this->board_nopost = 'Sem postagens';
		$this->board_noview = 'Voc� n�o tem permiss�o.';
		$this->board_regfirst = 'Voc� n�o tem permiss�o para isto. Se voc� se registrar, voc� poder� v�-lo.';
		$this->board_replies = 'Respostas';
		$this->board_stats = 'Estat�sticas';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Topicos';
		$this->board_topics_new = 'Existem novos t�picos neste forum.';
		$this->board_topics_old = 'Nenhuma postagem neste forum.';
		$this->board_users = 'usu�rios';
		$this->board_write_topics = 'Voc� pode criar t�picos neste forum.';
	}

	function cp()
	{
		$this->cp_aim = 'Nome da tela AIM';
		$this->cp_already_member = 'O email que voc� digitou j� � de uso de outra pessoa.';
		$this->cp_apr = 'Abril';
		$this->cp_aug = 'Agosto';
		$this->cp_avatar_current = 'Sua figura corente';
		$this->cp_avatar_error = 'Erro de figura';
		$this->cp_avatar_must_select = 'Voc� precisa selecionar uma figura.';
		$this->cp_avatar_none = 'Nenhuma figura utilizada';
		$this->cp_avatar_pixels = 'pontos';
		$this->cp_avatar_select = 'Selecione a figura';
		$this->cp_avatar_size_height = 'A altura da figura deve ser entre 1 e';
		$this->cp_avatar_size_width = 'A largura da figura deve ser entre 1 e';
		$this->cp_avatar_upload = 'Fa�a upload da sua figura';
		$this->cp_avatar_upload_failed = 'Falha de upload.Verifique se est� correta ou nela n�o existe';
		$this->cp_avatar_upload_not_image = 'Voc� s� pode fazer upload de figura para seu pr�prio uso.';
		$this->cp_avatar_upload_too_large = 'Tamanho da figura excedeu limite. M�ximo tamanho � %d kbytes.';
		$this->cp_avatar_url = 'Especifique uma URL para sua figura';
		$this->cp_avatar_use = 'Use seu pr�prio avatar';
		$this->cp_bday = 'Nascimento';
		$this->cp_been_updated = 'Seus dados j� foram alterados.';
		$this->cp_been_updated1 = 'Sua figura j� foi alterada.';
		$this->cp_been_updated_prefs = 'Prefer�ncias ajustadas.';
		$this->cp_changing_pass = 'Trocando senha';
		$this->cp_contact_pm = 'Permitir contato de outros via mensageiro ?';
		$this->cp_cp = 'Painel de controle';
		$this->cp_current_avatar = 'Figura atual';
		$this->cp_current_time = 'Atualmente %s.';
		$this->cp_dec = 'Dezembro';
		$this->cp_editing_avatar = 'Corrigindo figura';
		$this->cp_editing_profile = 'Corrigindo seus dados';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Permite contatos via email?';
		$this->cp_email_invaid = 'Voc� entrou emdere�o de email inv�lido.';
		$this->cp_err_avatar = 'Erro alterando figura';
		$this->cp_err_updating = 'Erro alterando seus dados pessoais';
		$this->cp_feb = 'Fevereiro';
		$this->cp_file_type = 'Figura inv�lida. Tenha certeza de que a URL est� certa, e com extens�es gif, jpg, or png.';
		$this->cp_format = 'Formatando nome';
		$this->cp_gmt = '[GMT] Hor�rio de Grenwich';
		$this->cp_gmt_nev1 = '[GMT-1:00] A�ores, Cabo Verde';
		$this->cp_gmt_nev10 = '[GMT-10:00] Havai';
		$this->cp_gmt_nev11 = '[GMT-11:00] Western Samoa';
		$this->cp_gmt_nev12 = '[GMT-12:00] Data internacional Oeste';
		$this->cp_gmt_nev2 = '[GMT-2:00] Centro Atl�ntico';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Groenl�ndia';
		$this->cp_gmt_nev35 = '[GMT-3:30] Ilhas Newfoundland';
		$this->cp_gmt_nev4 = '[GMT-4:00] Canad� Atl�ntico';
		$this->cp_gmt_nev5 = '[GMT-5:00] Fuso Leste US & Canada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Central US & Canada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Montanhas  & Canada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Hor�rio pac�fido & Canada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alasca';
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterd�, Berlin, Roma, Paris';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, Nova CAled�nia';
		$this->cp_gmt_pos12 = '[GMT+12:00] Ilhas Auckland, Fiji';
		$this->cp_gmt_pos2 = '[GMT+2:00] Atenas, Cairo, Jerusalem';
		$this->cp_gmt_pos3 = '[GMT+3:00] Bagd�, Moscou, Nairobi';
		$this->cp_gmt_pos35 = '[GMT+3:30] Teeran';
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombaim, Calcutta, Nova Deli';
		$this->cp_gmt_pos6 = '[GMT+6:00] Almate, Dhaka';
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->cp_gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapura';
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokio, Seul';
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Painel de controle de usu�rios';
		$this->cp_height = 'Altura';
		$this->cp_icq = 'N�mero do ICQ';
		$this->cp_interest = 'Interesses';
		$this->cp_jan = 'Janeiro';
		$this->cp_july = 'julho';
		$this->cp_june = 'Junho';
		$this->cp_label_edit_avatar = 'Editar Avatar';
		$this->cp_label_edit_pass = 'Trocar senha';
		$this->cp_label_edit_prefs = 'Troca prefer�ncias';
		$this->cp_label_edit_profile = 'Editar perfil';
		$this->cp_label_edit_subs = 'Editar subscri��es';
		$this->cp_language = 'Linguagem';
		$this->cp_less_charac = 'Seu nome precisa ter menos que 32 caracteres.';
		$this->cp_location = 'Localiza��o';
		$this->cp_login_first = 'Voc� prrecisa entrar no sistema para acessar o Painel de controle.';
		$this->cp_mar = 'mar�o';
		$this->cp_may = 'Maio';
		$this->cp_msn = 'Identidade MSN';
		$this->cp_must_orig = 'Seu nome precisa ser id�ntico ao original. Voc� pode trocar mai�scula/min�scula e espa�amento.';
		$this->cp_new_notmatch = 'Novas senhas n�o combinam.';
		$this->cp_new_pass = 'Nova senha';
		$this->cp_no_flash = 'Figuras em Flash n�o permitidas.';
		$this->cp_not_exist = 'A data especificada (%s) n�o existe!';
		$this->cp_nov = 'Novembro';
		$this->cp_oct = 'Outubro';
		$this->cp_old_notmatch = 'Sua antiga senha n�o coincide com as do banco de dados.';
		$this->cp_old_pass = 'Senha antiga';
		$this->cp_pass_notvaid = 'Sua senha n�o � v�lida.';
		$this->cp_preferences = 'Trocando prefer�ncias';
		$this->cp_privacy = 'Op��es de privacidade';
		$this->cp_repeat_pass = 'Repita';
		$this->cp_sept = 'Setembro';
		$this->cp_show_active = 'Ver suas atividades enquanto on line no forum?';
		$this->cp_show_email = 'Ver email nos dados pessoais ?';
		$this->cp_signature = 'Assinatura';
		$this->cp_size_max = 'Figura muito grande. M�ximo permitido � %s por %s pixels.';
		$this->cp_skin = 'Capa do Board ( Skin )';
		$this->cp_sub_change = 'alterando inscri��es';
		$this->cp_sub_delete = 'apagar';
		$this->cp_sub_expire = 'Data de expira��o';
		$this->cp_sub_name = 'Nome de inscri��o';
		$this->cp_sub_no_params = 'N�o foi dado nenhum par�metro.';
		$this->cp_sub_success = 'Voc� est� inscrito neste %s.';
		$this->cp_sub_type = 'Tipo de inscri��o';
		$this->cp_sub_updated = 'Inscri��es selecionadas apagadas.';
		$this->cp_topic_option = 'Op��es de t�pico';
		$this->cp_updated = 'Dados atualizados';
		$this->cp_updated1 = 'Figura atualizada';
		$this->cp_updated_prefs = 'Prefer�ncias ajustadas';
		$this->cp_user_exists = 'J� existe um usu�rio com este nome.';
		$this->cp_valided = 'Senha atualizada e validada.';
		$this->cp_view_avatar = 'Ver figuras ?';
		$this->cp_view_emoticon = 'Ver emoticons ?';
		$this->cp_view_signature = 'Ver assinaturas ?';
		$this->cp_welcome = 'Benvindo ao seu painel de controle. Aqui voc� faz seus ajustes.';
		$this->cp_width = 'Largura';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Identidade Yahoo';
		$this->cp_zone = 'Fuso hor�rio';
	}

	function email()
	{
		$this->email_blocked = 'Este usu�rio n�o aceita email via forum.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Corpo do email:';
		$this->email_no_fields = 'Volte e esteja certo que todos os campos est�o preenchidos.';
		$this->email_no_member = 'Nenhum membro encontrado com este nome';
		$this->email_no_perm = 'sem permiss�o para enviar email via forum.';
		$this->email_sent = 'Seu email foi enviado.';
		$this->email_subject = 'Assunto:';
		$this->email_to = 'Para:';
	}

	function forum()
	{
		$this->forum_by = 'Por';
		$this->forum_can_post = 'Voc� pode responder neste forum.';
		$this->forum_can_topics = 'Voc� pode ver t�picos neste forum.';
		$this->forum_cant_post = 'Voc� n�o pode responder neste forum.';
		$this->forum_cant_topics = 'Voc� n�o pode ver t�picos neste forum.';
		$this->forum_dot = 'ponto';
		$this->forum_dot_detail = 'mostra o que voc� inseriu';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Convidado';
		$this->forum_hot = 'Quente';
		$this->forum_icon = '�cone de mensagem';
		$this->forum_jump = 'Ir 1a nova mensagem do t�pico';
		$this->forum_last = '�ltima postagem';
		$this->forum_locked = 'Fechado';
		$this->forum_moved = 'Movida';
		$this->forum_msg = '%s Mensagens';
		$this->forum_new = 'Nova';
		$this->forum_new_poll = 'Criar nova enquete';
		$this->forum_new_topic = 'Criar novo t�pico';
		$this->forum_no_topics = 'Nenhum t�pico neste forum.';
		$this->forum_noexist = 'Este forum n�o existe.';
		$this->forum_nopost = 'Sem postagens';
		$this->forum_not = 'N�o';
		$this->forum_noview = 'Sem permiss�o.';
		$this->forum_pages = 'P�ginas';
		$this->forum_pinned = 'Afixada';
		$this->forum_pinned_topic = 'T�pico afixado';
		$this->forum_poll = 'Enquete';
		$this->forum_regfirst = 'Voc� n�o tem permiss�o para ver. Se voc� se registrar, poder� faz�-lo';
		$this->forum_replies = 'Respostas';
		$this->forum_starter = 'Iniciado por';
		$this->forum_sub = 'Sub-Forum'; //Translate
		$this->forum_sub_last_post = '�ltima';
		$this->forum_sub_replies = 'Respostas';
		$this->forum_sub_topics = 'Topicos';
		$this->forum_subscribe = 'Enviar email quando tiverem postagens';
		$this->forum_topic = 'Topico';
		$this->forum_topics_new = 'Existem mensgens neste forum.';
		$this->forum_topics_old = 'N�o existe novas mensagens neste forum.';
		$this->forum_views = 'Visualiza��es';
		$this->forum_write_topics = 'Voc� pode criar t�picos neste forum.';
	}

	function help()
	{
		$this->help_available_files = 'Arquivos dispon�veis';
		$this->help_none = 'Sem ajuda no banco de dados';
	}

	function login()
	{
		$this->login_cant_logged = 'Voc� n�o pode ser inserido no sistema. Cheque se nome e senha est�o corretos.<br /><br />Lembre-se que s�o case sensitives.';
		$this->login_cookies = 'Cookies must be enabled to login.'; //Translate
		$this->login_forgot_pass = 'Esqueceu sua senha ?';
		$this->login_header = 'Entrando no sistema';
		$this->login_logged = 'Voc� est� entrando no sistema.';
		$this->login_now_out = 'Voc� saiu do sistema.';
		$this->login_out = 'Saindo';
		$this->login_pass = 'Senha';
		$this->login_pass_no_id = 'N�o existe usu�rio com este nome.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'ajustar a senha';
		$this->login_pass_sent = 'sua senha foi alterada . a nova senha ser� enviada via email.';
		$this->login_sure = 'Tem certeza que vai sair  \'%s\'?';
		$this->login_user = 'Seu login';
	}

	function main()
	{
		$this->board_by = 'Por';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'sua conta ainda n�o foi ativada.';
		$this->main_activate_resend = 'REenviar minha ativa��o via email';
		$this->main_admincp = 'painel de controle administrativo';
		$this->main_banned = 'Voc� foi banido deste forum.';
		$this->main_code = 'c�digo';
		$this->main_continue = 'Continue'; //Translate
		$this->main_cp = 'Seus dados';
		$this->main_full = 'Cheio';
		$this->main_help = 'Ajuda';
		$this->main_load = 'carrega';
		$this->main_login = 'Entrar';
		$this->main_logout = 'Sair';
		$this->main_max_load = 'Desculpe, mas %s n�o est� disponivel, por causa do excessivo n�mero de usu�rios.';
		$this->main_members = 'Usu�rios';
		$this->main_messenger = 'Mensageiro';
		$this->main_new = 'novo';
		$this->main_next = 'Pr�ximo';
		$this->main_posts_new = 'Nova';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'Anterior';
		$this->main_queries = 'pesquisas';
		$this->main_quote = 'Aspas';
		$this->main_register = 'Registre';
		$this->main_reminder = 'Lembrete';
		$this->main_reminder_closed = 'Forum fechado. Vis�vel somente para administrador.';
		$this->main_said = 'disse';
		$this->main_search = 'Procura';
		$this->main_seconds = 'segundos';
		$this->main_welcome = 'Ol�';
		$this->main_welcome_guest = 'Ol� convidado!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'Enviar';
		$this->today = 'Hoje';
		$this->yesterday = 'Ontem';
	}

	function members()
	{
		$this->members_all = 'todos';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Email para ele';
		$this->members_group = 'Grupo';
		$this->members_joined = 'Desde';
		$this->members_list = 'Lista de usu�rios';
		$this->members_member = 'Usu�rio';
		$this->members_pm = 'IM';
		$this->members_posts = 'Postagens';
		$this->members_send_pm = 'Enviar mensagem pessoal';
		$this->members_title = 'T�tulo';
		$this->members_vist_www = 'Visite o site deste usu�rio';
		$this->members_www = 'Web Site'; //Translate
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Tem certeza que quer apagar ?';
		$this->mod_confirm_topic_delete = 'Tem certeza que quer apagar ?';
		$this->mod_error_first_post = 'Voc� n�o pode apagar o primeiro t�pico.';
		$this->mod_error_move_category = 'Voc� n�o pode mover t�pico para categoria.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Voc� n�o pode mover um t�pico para um forum que n�o existe.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Voc� n�o pode mover um t�pico para o mesmo forum.';
		$this->mod_label_controls = 'Controles de moderadores';
		$this->mod_label_description = 'Descri��o';
		$this->mod_label_emoticon = 'Converter emoticons para imagens ?';
		$this->mod_label_global = 'T�pico global';
		$this->mod_label_mbcode = 'Formatar c�digo MB ?';
		$this->mod_label_move_to = 'Mover para';
		$this->mod_label_options = 'Op��es';
		$this->mod_label_post_delete = 'Apagar ';
		$this->mod_label_post_edit = 'Corrigir';
		$this->mod_label_title = 'T�tulo';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Quebrar t�tulo';
		$this->mod_label_topic_delete = 'Apagar t�pico';
		$this->mod_label_topic_edit = 'Corrige Topico';
		$this->mod_label_topic_lock = 'Bloqueia T�pico';
		$this->mod_label_topic_move = 'Mover Topico';
		$this->mod_label_topic_move_complete = 'T�pico movido para o novo forum';
		$this->mod_label_topic_move_link = 'Move t�pico para novo forum e mant�m o Link no forum antigo.';
		$this->mod_label_topic_pin = 'Afixa t�pico';
		$this->mod_label_topic_split = 'Quebrar t�pico';
		$this->mod_missing_post = 'N�o existe este conte�do.';
		$this->mod_missing_topic = 'T�pico especificado n�o existe.';
		$this->mod_no_action = 'Especifique uma a��o.';
		$this->mod_no_post = 'Voc� precisa especificar um topico.';
		$this->mod_no_topic = 'Especifique um t�pico.';
		$this->mod_perm_post_delete = 'Voc� n�o tem permiss�o para apagar';
		$this->mod_perm_post_edit = 'Voc� n�o tem permiss�o para corrigir.';
		$this->mod_perm_topic_delete = 'Sem permiss�o para apagar o t�pico.';
		$this->mod_perm_topic_edit = 'Sem permiss�o para corrigir o t�pico.';
		$this->mod_perm_topic_lock = 'Sem permiss�o para travar o t�pico.';
		$this->mod_perm_topic_move = 'Sem permiss�o para mover o t�pico.';
		$this->mod_perm_topic_pin = 'Sem permiss�o para afixar o t�pico.';
		$this->mod_perm_topic_split = 'Sem permiss�o para quebrar o t�pico.';
		$this->mod_perm_topic_unlock = 'Sem permiss�o para destravar o t�pico.';
		$this->mod_perm_topic_unpin = 'Sem permiss�o para desafixar o t�pico.';
		$this->mod_success_post_delete = 'Esta mensagem foi deletada.';
		$this->mod_success_post_edit = 'Editado';
		$this->mod_success_split = 'O t�pico foi quebrado com sucesso.';
		$this->mod_success_topic_delete = 'T�pico apagado.';
		$this->mod_success_topic_edit = 'O t�pico foi corrigido com sucesso.';
		$this->mod_success_topic_move = 'T�pico movido com sucesso.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'ponto';
		$this->new_posts_dot_detail = 'mostra o que voc� inseriu';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Quente';
		$this->new_posts_last = '�ltima postagem';
		$this->new_posts_locked = 'Fechado';
		$this->new_posts_moved = 'Movida';
		$this->new_posts_new = 'Nova';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'N�o';
		$this->new_posts_pinned = 'Afixada';
		$this->new_posts_poll = 'Enquete';
		$this->new_posts_topic = 'Topico';
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
		$this->pm_cant_del = 'Voc� n�o tem permiss�o para apagar esta mensagem.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Apagar mensagens';
		$this->pm_delete = 'Apaga';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Mensagem apagada.';
		$this->pm_deleted_all = 'Mensagens apagadas.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'N�o p�de ser enviada. Prencheu todos os campos ?';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Caixa de entrada';
		$this->pm_folder_new = '%s Nova';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'De';
		$this->pm_group = 'Grupo';
		$this->pm_guest = 'Como convidado voc� n�o pode utilizar. Por favor Fa�a o Login ou Registro.';
		$this->pm_joined = 'Agregado';
		$this->pm_messenger = 'Mensageiro';
		$this->pm_msgtext = 'Texto da mensagem';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Especifique uma pasta.';
		$this->pm_no_member = 'Nenhum membro com esta identifica��o.';
		$this->pm_no_number = 'N�o encontrada.';
		$this->pm_no_title = 'Sem assunto';
		$this->pm_nomsg = 'Sem mensagens nesta pasta.';
		$this->pm_noview = 'Sem permiss�o para ver esta mensagem.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Mensageiro pessoal';
		$this->pm_personal_msging = 'Mensagens pessoais';
		$this->pm_pm = 'IM';
		$this->pm_posts = 'Mensagens';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Responder';
		$this->pm_send = 'Envia';
		$this->pm_sendamsg = 'Envia mensagem';
		$this->pm_sendingpm = 'Enviando mensagem privativa';
		$this->pm_sendon = 'Sent on';
		$this->pm_success = 'Mensagem enviada.';
		$this->pm_sure_del = 'Tem certeza que quer apagar ?';
		$this->pm_sure_delall = 'Apagar todas as mensagens da caixa de entrada ?';
		$this->pm_title = 'T�tulo';
		$this->pm_to = 'Para';
	}

	function post()
	{
		$this->post_attach = 'Anexos';
		$this->post_attach_add = 'Adicionar anexos';
		$this->post_attach_disrupt = 'Adicionando ou emovendo anexos n�o alterar� nada.';
		$this->post_attach_failed = 'Falhou !!! O arquivos n�o existe.';
		$this->post_attach_not_allowed = 'N�o pode anexar este tipo de arquivo.';
		$this->post_attach_remove = 'Remover anexos ';
		$this->post_attach_too_large = 'Anexo muito grande. M�ximo permitido � %d KB.';
		$this->post_cant_create = 'Como convidado voc� n�o pode criar t�pico. Se voc� se registrar, voc� poder� criar t�picos.';
		$this->post_cant_create1 = 'Sem permiss�o para criar t�picos.';
		$this->post_cant_enter = 'Voto n�o computado. Ou voc� j� votou ou n�o tem permiss�o.';
		$this->post_cant_poll = 'Como convidado voc� n�o pode criar enquetes. Se voc� se registrar, poder� criar.';
		$this->post_cant_poll1 = 'Sem permiss�o para criar enquetes.';
		$this->post_cant_reply = 'Voc� n�o tem permiss�o para responder neste forum';
		$this->post_cant_reply1 = 'Como convidado voc� n�o tem permiss�o. Se voc� se registrar, voc� ter� permiss�o.';
		$this->post_cant_reply2 = 'Voc� n�o tem permiss�o.';
		$this->post_closed = 'Este t�pico est� fechado.';
		$this->post_create_poll = 'Criar enquete';
		$this->post_create_topic = 'Criar t�pico';
		$this->post_creating = 'Criando t�pico';
		$this->post_creating_poll = 'Criando enquete';
		$this->post_flood = 'Voc� postou em %s segundos, ae n�o pode postar ainda.<br /><br />Tente daqui alguns segundos.';
		$this->post_guest = 'Convidado';
		$this->post_icon = 'Por icon';
		$this->post_last_five = '�ltimos em ordem reversa';
		$this->post_length = 'Cheque comprimento';
		$this->post_mbcode_address = 'Digite o endere�o';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Azul';
		$this->post_mbcode_bold = 'Negrito';
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Chocolate'; //Translate
		$this->post_mbcode_code = 'C�digo';
		$this->post_mbcode_color = 'Cor';
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Azul escuro';
		$this->post_mbcode_darkred = 'Vermelho escuro';
		$this->post_mbcode_deepink = 'Rosa choque';
		$this->post_mbcode_detail = 'Descri��o';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Vermelho suave';
		$this->post_mbcode_font = 'Fonte';
		$this->post_mbcode_green = 'Verde';
		$this->post_mbcode_huge = 'Huge'; //Translate
		$this->post_mbcode_image = 'Imagem';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impacto';
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Italico';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Largo';
		$this->post_mbcode_length = 'Comprimento de "+length+" caracteres.';
		$this->post_mbcode_limegreen = 'Verde oliva';
		$this->post_mbcode_medium = 'Medio';
		$this->post_mbcode_orange = 'Laranja';
		$this->post_mbcode_orangered = 'VErmelho alaranjado';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Roxo';
		$this->post_mbcode_quote = 'Aspas';
		$this->post_mbcode_red = 'Vermelho';
		$this->post_mbcode_royalblue = 'Azul real';
		$this->post_mbcode_sandybrown = 'marron claro';
		$this->post_mbcode_seagreen = 'Verde mar';
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Prata';
		$this->post_mbcode_size = 'largura';
		$this->post_mbcode_skyblue = 'Azul c�u';
		$this->post_mbcode_small = 'Pequeno';
		$this->post_mbcode_strike = 'Strikethrough'; //Translate
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Tiny'; //Translate
		$this->post_mbcode_tomato = 'Tomato'; //Translate
		$this->post_mbcode_underline = 'Sublinhado';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = 'Mensagem';
		$this->post_must_msg = 'Voc� deve incluir uma mensagem.';
		$this->post_must_options = 'Inclua op��es.';
		$this->post_must_title = 'Voc� deve por um t�tulo.';
		$this->post_new_poll = 'Nova enquete';
		$this->post_new_topic = 'Novo t�pico';
		$this->post_no_forum = 'Forum n�o encontrado.';
		$this->post_no_topic = 'Nenhum t�pico foi especificado.';
		$this->post_no_vote = 'Escolha uma op��o para votar.';
		$this->post_option_emoticons = 'Converter emoticons em imagens ?';
		$this->post_option_global = 'FAzer este t�pico global?';
		$this->post_option_mbcode = 'Formata MBc�digo ?';
		$this->post_optional = 'opcional';
		$this->post_options = 'Op��es';
		$this->post_poll_options = 'Op��es';
		$this->post_poll_row = 'Um por linha';
		$this->post_posted = 'Inserido em';
		$this->post_posting = 'Postando';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Responde';
		$this->post_reply_topic = 'Responder t�pico';
		$this->post_replying = 'Respondendo ao t�pico';
		$this->post_replying1 = 'Respondendo';
		$this->post_smiles = '�cones clic�veis';
		$this->post_too_many_options = 'Voce tem que ter entre 2 e %d op��es para a enquete.';
		$this->post_topic_detail = 'Descri��o do t�pico';
		$this->post_topic_title = 'T�tulo do t�pico';
		$this->post_view_topic = 'Ver t�pico inteiro';
		$this->post_voting = 'Votar';
	}

	function printer()
	{
		$this->printer_back = 'Voltar';
		$this->printer_not_found = 'O t�pico n�o pode ser encontrado. Ou foi movido, deletado ou n�o existe.';
		$this->printer_not_found_title = 'T�pico n�o encontrado';
		$this->printer_perm_topics = 'Sem permiss�o para ver t�picos.';
		$this->printer_perm_topics_guest = 'Sem permiss�o para ver t�picos. Se voc� se registrar, poder� faz�-lo.';
		$this->printer_posted_on = 'Inserido em';
		$this->printer_send = 'Imprimir';
	}

	function profile()
	{
		$this->profile_aim_sn = 'Nome AIM';
		$this->profile_av_sign = 'Figura e assinatura';
		$this->profile_avatar = 'Figura';
		$this->profile_bday = 'Nascimento';
		$this->profile_contact = 'Contato';
		$this->profile_email_address = 'Endere�o de emai';
		$this->profile_fav = 'Forum favorito';
		$this->profile_fav_forum = '%s (%d%% de postagens do usu�rio)';
		$this->profile_icq_uin = 'ICQ Numero';
		$this->profile_info = 'Informa��o';
		$this->profile_interest = 'Interesses';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = '�ltima postagem';
		$this->profile_list = 'Lista de membros';
		$this->profile_location = 'Local';
		$this->profile_member = 'Grupo membro';
		$this->profile_member_title = 'T�tulo do membro';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Qual o usu�rio que voc� quer ver os dados?';
		$this->profile_no_member = 'N�o existe usu�rio com esta especifica��o. Sua conta pode ter sido desabilitada.';
		$this->profile_none = '[ Nenhum ]';
		$this->profile_not_post = 'ainda n�o postou nada.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s por dia';
		$this->profile_posts = 'Postagens';
		$this->profile_private = '[ Privativo ]';
		$this->profile_profile = 'Dados pessoais';
		$this->profile_signature = 'Assinatura';
		$this->profile_unkown = '[ Desconhecido ]';
		$this->profile_view_profile = 'Vendo seus dados';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo';
	}

	function register()
	{
		$this->register_activated = 'Sua conta j� est� ativada!';
		$this->register_activating = 'Ativa��o de conta';
		$this->register_activation_error = 'H� algum erro ao ativar sua conta. Cheque se voc� inseriu a URL inteira fornecida no email.';
		$this->register_confirm_passwd = 'Confirme a senha';
		$this->register_done = 'Voc� j� est� registrado ! Pode fazewr agora o login.';
		$this->register_email = 'Email';
		$this->register_email_invalid = 'endere�o de email inv�lido.';
		$this->register_email_used = 'J� tem usu�rio com este email.';
		$this->register_fields = 'N�o preencheu todos os campos.';
		$this->register_image = 'SElecione o texto que voc� ve na imagem.';
		$this->register_image_invalid = 'Para verificar se realmente � voc�, � preciso digitar o texto que se v� na imagem.';
		$this->register_must_activate = 'Voc� est� sendo registrado. Voc� receber� um email, para %s com a informa��o para ativar sua conta. Ser� necess�rio ativ�-la.';
		$this->register_name_invalid = 'Nome inv�lido.';
		$this->register_name_taken = 'Este nome j� existe.';
		$this->register_new_user = 'Nome de usu�rio';
		$this->register_pass_invalid = 'Senha inv�lida....deve ter caracteres reais e no m�nimo 5 caracteres.';
		$this->register_pass_match = 'Senhas n�o coincidem.';
		$this->register_passwd = 'Senha';
		$this->register_reg = 'Registrar';
		$this->register_reging = 'Registrando';
	}

	function search()
	{
		$this->search_advanced = 'Op��es avan�adas';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Procura simples';
		$this->search_characters = 'caracteres de postagens';
		$this->search_day = 'dia';
		$this->search_days = 'dias';
		$this->search_exact_name = 'nome exato';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Procurar por';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Convidado';
		$this->search_in = 'Procurar em';
		$this->search_in_posts = 'Procurar somente em postagens';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Juntado';
		$this->search_level = 'N�vel de usu�rio';
		$this->search_match = 'Procura por crit�rio';
		$this->search_matches = 'Coincid�ncias';
		$this->search_month = 'mes';
		$this->search_months = 'meses';
		$this->search_mysqldoc = 'Documenta��o do MySQL';
		$this->search_newer = 'novos';
		$this->search_no_results = 'Sem resultados na procura.';
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.'; //Translate
		$this->search_older = 'antigos';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Mostrar primeiro';
		$this->search_partial_name = 'nome parcial';
		$this->search_post_icon = 'Icones Post';
		$this->search_posted_on = 'Posto em';
		$this->search_posts = 'postagens';
		$this->search_posts_by = 'Somente em t�picos por';
		$this->search_regex = 'Procura por express�es regulares';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Relevantes: %d%%';
		$this->search_replies = 'Respostas';
		$this->search_result = 'Resultado da procura';
		$this->search_search = 'Procura';
		$this->search_select_all = 'Selecionar tudo';
		$this->search_show_posts = 'Ver resultados';
		$this->search_sound = 'palavras iguais a';
		$this->search_starter = 'Iniciado por';
		$this->search_than = 'do que';
		$this->search_topic = 'Topico';
		$this->search_unreg = 'N�o registrado';
		$this->search_week = 'semana';
		$this->search_weeks = 'semanas';
		$this->search_year = 'ano';
	}

	function topic()
	{
		$this->topic_attached = 'Arquivo anexado:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Sem permiss�o para baixar este arquivo.';
		$this->topic_attached_title = 'Arquivo anexado';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Criar nova enquete';
		$this->topic_create_topic = 'Criar novo t�pico';
		$this->topic_delete = 'Apagar';
		$this->topic_delete_post = 'Deletar este topico';
		$this->topic_edit = 'Corrigir';
		$this->topic_edit_post = 'Editar este t�pico';
		$this->topic_edited = 'Ultima modifica��o em %s por %s';
		$this->topic_error = 'Erro';
		$this->topic_group = 'Grupo';
		$this->topic_guest = 'Convidado';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Juntado';
		$this->topic_level = 'N�vel de usu�rio';
		$this->topic_links_aim = 'Enviar AIM para %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Enviar email para %s';
		$this->topic_links_icq = 'Enviar ICQ para %s';
		$this->topic_links_msn = 'Vista %s\'s MSN profile';
		$this->topic_links_pm = 'Enviar mensagem pessoal para %s';
		$this->topic_links_web = 'Visita %s\'s web site';
		$this->topic_links_yahoo = 'Enviar  %s with Yahoo! Messenger';
		$this->topic_lock = 'Fechar';
		$this->topic_locked = 'T�pico fechado';
		$this->topic_move = 'Mover';
		$this->topic_no_votes = 'Sem votos na enquete.';
		$this->topic_not_found = 'T�pico n�o encontrado';
		$this->topic_not_found_message = 'T�pico n�o encontrado.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Op��es de t�pico';
		$this->topic_pages = 'P�ginas';
		$this->topic_perm_view = 'Sem permiss�o para ver os t�picos.';
		$this->topic_perm_view_guest = 'Voc� n�o tem permiss�o para ver t�picos. Se voc� se registrar, poder� faz�-lo.';
		$this->topic_pin = 'Afixar';
		$this->topic_posted = 'Inserido';
		$this->topic_posts = 'Postagens';
		$this->topic_print = 'Ver modo de impress�o';
		$this->topic_quote = 'Responder com Aspas ( quote )';
		$this->topic_reply = 'Responder no t�pico';
		$this->topic_split = 'Quebrar';
		$this->topic_split_finish = 'TErminado a quebra';
		$this->topic_split_keep = 'N�o mova este t�pico';
		$this->topic_split_move = 'Mover este t�pico';
		$this->topic_subscribe = 'Me envie email quando houver respostas a este t�pico';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Abrir';
		$this->topic_unpin = 'Desafixar';
		$this->topic_unreg = 'N�o registrado';
		$this->topic_view = 'Ver resultados';
		$this->topic_viewing = 'Vendo t�pico';
		$this->topic_vote = 'Vote'; //Translate
		$this->topic_vote_count_plur = '%d votos';
		$this->topic_vote_count_sing = '%d voto';
		$this->topic_votes = 'Votos';
	}
}
?>