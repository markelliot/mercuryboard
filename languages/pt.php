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
		$this->active_last_action = 'Última Ação';
		$this->active_modules_active = 'Viewing Active Users';
		$this->active_modules_board = 'Vendo índice';
		$this->active_modules_cp = 'Usando Painel de controle';
		$this->active_modules_forum = 'Vendo Forum: %s';
		$this->active_modules_help = 'usando Help';
		$this->active_modules_login = 'Logando';
		$this->active_modules_members = 'Vendo Lista';
		$this->active_modules_mod = 'Moderando';
		$this->active_modules_pm = 'Using Messenger';
		$this->active_modules_post = 'Postando';
		$this->active_modules_printer = 'Imprimindo tópico: %s';
		$this->active_modules_profile = 'Vendo Profile: %s';
		$this->active_modules_search = 'Procurando';
		$this->active_modules_topic = 'Vendo Tópico: %s';
		$this->active_time = 'Hora';
		$this->active_user = 'Usuário';
		$this->active_users = 'Usuários ativos';
	}

	function board()
	{
		$this->board_active_users = 'Usuários ativos';
		$this->board_birthdays = 'Aniversariantes:';
		$this->board_can_post = 'Você pode responder neste forum.';
		$this->board_can_topics = 'Você pode ver tópicos neste forum.';
		$this->board_cant_post = 'Você não pode responder neste forum.';
		$this->board_cant_topics = 'Você não pode ver tópicos neste forum.';
		$this->board_forum = 'Relação de Foruns e Descrição';
		$this->board_guests = 'convidados';
		$this->board_last_post = 'Últimas';
		$this->board_mark = 'Marcando como lidas';
		$this->board_mark1 = 'Todas foram marcadas como lidas.';
		$this->board_members = 'membros';
		$this->board_message = '%s Mensagem';
		$this->board_most_online = 'Usuários on line: %d at %s';
		$this->board_nobday = 'Nenhum aniversariante hoje.';
		$this->board_nobody = 'Nenhum usuário on line.';
		$this->board_nopost = 'Sem postagens';
		$this->board_noview = 'Você não tem permissão.';
		$this->board_regfirst = 'Você não tem permissão para isto. Se você se registrar, você poderá vê-lo.';
		$this->board_replies = 'Respostas';
		$this->board_stats = 'Estatísticas';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Topicos';
		$this->board_topics_new = 'Existem novos tópicos neste forum.';
		$this->board_topics_old = 'Nenhuma postagem neste forum.';
		$this->board_users = 'usuários';
		$this->board_write_topics = 'Você pode criar tópicos neste forum.';
	}

	function cp()
	{
		$this->cp_aim = 'Nome da tela AIM';
		$this->cp_already_member = 'O email que você digitou já é de uso de outra pessoa.';
		$this->cp_apr = 'Abril';
		$this->cp_aug = 'Agosto';
		$this->cp_avatar_current = 'Sua figura corente';
		$this->cp_avatar_error = 'Erro de figura';
		$this->cp_avatar_must_select = 'Você precisa selecionar uma figura.';
		$this->cp_avatar_none = 'Nenhuma figura utilizada';
		$this->cp_avatar_pixels = 'pontos';
		$this->cp_avatar_select = 'Selecione a figura';
		$this->cp_avatar_size_height = 'A altura da figura deve ser entre 1 e';
		$this->cp_avatar_size_width = 'A largura da figura deve ser entre 1 e';
		$this->cp_avatar_upload = 'Faça upload da sua figura';
		$this->cp_avatar_upload_failed = 'Falha de upload.Verifique se está correta ou nela não existe';
		$this->cp_avatar_upload_not_image = 'Você só pode fazer upload de figura para seu próprio uso.';
		$this->cp_avatar_upload_too_large = 'Tamanho da figura excedeu limite. Máximo tamanho é %d kbytes.';
		$this->cp_avatar_url = 'Especifique uma URL para sua figura';
		$this->cp_avatar_use = 'Use seu próprio avatar';
		$this->cp_bday = 'Nascimento';
		$this->cp_been_updated = 'Seus dados já foram alterados.';
		$this->cp_been_updated1 = 'Sua figura já foi alterada.';
		$this->cp_been_updated_prefs = 'Preferências ajustadas.';
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
		$this->cp_email_invaid = 'Você entrou emdereço de email inválido.';
		$this->cp_err_avatar = 'Erro alterando figura';
		$this->cp_err_updating = 'Erro alterando seus dados pessoais';
		$this->cp_feb = 'Fevereiro';
		$this->cp_file_type = 'Figura inválida. Tenha certeza de que a URL está certa, e com extensões gif, jpg, or png.';
		$this->cp_format = 'Formatando nome';
		$this->cp_gmt = '[GMT] Horário de Grenwich';
		$this->cp_gmt_nev1 = '[GMT-1:00] Açores, Cabo Verde';
		$this->cp_gmt_nev10 = '[GMT-10:00] Havai';
		$this->cp_gmt_nev11 = '[GMT-11:00] Western Samoa';
		$this->cp_gmt_nev12 = '[GMT-12:00] Data internacional Oeste';
		$this->cp_gmt_nev2 = '[GMT-2:00] Centro Atlântico';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Groenlândia';
		$this->cp_gmt_nev35 = '[GMT-3:30] Ilhas Newfoundland';
		$this->cp_gmt_nev4 = '[GMT-4:00] Canadá Atlântico';
		$this->cp_gmt_nev5 = '[GMT-5:00] Fuso Leste US & Canada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Central US & Canada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Montanhas  & Canada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Horário pacífido & Canada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alasca';
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdã, Berlin, Roma, Paris';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, Nova CAledônia';
		$this->cp_gmt_pos12 = '[GMT+12:00] Ilhas Auckland, Fiji';
		$this->cp_gmt_pos2 = '[GMT+2:00] Atenas, Cairo, Jerusalem';
		$this->cp_gmt_pos3 = '[GMT+3:00] Bagdá, Moscou, Nairobi';
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
		$this->cp_header = 'Painel de controle de usuários';
		$this->cp_height = 'Altura';
		$this->cp_icq = 'Número do ICQ';
		$this->cp_interest = 'Interesses';
		$this->cp_jan = 'Janeiro';
		$this->cp_july = 'julho';
		$this->cp_june = 'Junho';
		$this->cp_label_edit_avatar = 'Editar Avatar';
		$this->cp_label_edit_pass = 'Trocar senha';
		$this->cp_label_edit_prefs = 'Troca preferências';
		$this->cp_label_edit_profile = 'Editar perfil';
		$this->cp_label_edit_subs = 'Editar subscrições';
		$this->cp_language = 'Linguagem';
		$this->cp_less_charac = 'Seu nome precisa ter menos que 32 caracteres.';
		$this->cp_location = 'Localização';
		$this->cp_login_first = 'Você prrecisa entrar no sistema para acessar o Painel de controle.';
		$this->cp_mar = 'março';
		$this->cp_may = 'Maio';
		$this->cp_msn = 'Identidade MSN';
		$this->cp_must_orig = 'Seu nome precisa ser idêntico ao original. Você pode trocar maiúscula/minúscula e espaçamento.';
		$this->cp_new_notmatch = 'Novas senhas não combinam.';
		$this->cp_new_pass = 'Nova senha';
		$this->cp_no_flash = 'Figuras em Flash não permitidas.';
		$this->cp_not_exist = 'A data especificada (%s) não existe!';
		$this->cp_nov = 'Novembro';
		$this->cp_oct = 'Outubro';
		$this->cp_old_notmatch = 'Sua antiga senha não coincide com as do banco de dados.';
		$this->cp_old_pass = 'Senha antiga';
		$this->cp_pass_notvaid = 'Sua senha não é válida.';
		$this->cp_preferences = 'Trocando preferências';
		$this->cp_privacy = 'Opções de privacidade';
		$this->cp_repeat_pass = 'Repita';
		$this->cp_sept = 'Setembro';
		$this->cp_show_active = 'Ver suas atividades enquanto on line no forum?';
		$this->cp_show_email = 'Ver email nos dados pessoais ?';
		$this->cp_signature = 'Assinatura';
		$this->cp_size_max = 'Figura muito grande. Máximo permitido é %s por %s pixels.';
		$this->cp_skin = 'Capa do Board ( Skin )';
		$this->cp_sub_change = 'alterando inscrições';
		$this->cp_sub_delete = 'apagar';
		$this->cp_sub_expire = 'Data de expiração';
		$this->cp_sub_name = 'Nome de inscrição';
		$this->cp_sub_no_params = 'Não foi dado nenhum parâmetro.';
		$this->cp_sub_success = 'Você está inscrito neste %s.';
		$this->cp_sub_type = 'Tipo de inscrição';
		$this->cp_sub_updated = 'Inscrições selecionadas apagadas.';
		$this->cp_topic_option = 'Opções de tópico';
		$this->cp_updated = 'Dados atualizados';
		$this->cp_updated1 = 'Figura atualizada';
		$this->cp_updated_prefs = 'Preferências ajustadas';
		$this->cp_user_exists = 'Já existe um usuário com este nome.';
		$this->cp_valided = 'Senha atualizada e validada.';
		$this->cp_view_avatar = 'Ver figuras ?';
		$this->cp_view_emoticon = 'Ver emoticons ?';
		$this->cp_view_signature = 'Ver assinaturas ?';
		$this->cp_welcome = 'Benvindo ao seu painel de controle. Aqui você faz seus ajustes.';
		$this->cp_width = 'Largura';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Identidade Yahoo';
		$this->cp_zone = 'Fuso horário';
	}

	function email()
	{
		$this->email_blocked = 'Este usuário não aceita email via forum.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Corpo do email:';
		$this->email_no_fields = 'Volte e esteja certo que todos os campos estão preenchidos.';
		$this->email_no_member = 'Nenhum membro encontrado com este nome';
		$this->email_no_perm = 'sem permissão para enviar email via forum.';
		$this->email_sent = 'Seu email foi enviado.';
		$this->email_subject = 'Assunto:';
		$this->email_to = 'Para:';
	}

	function forum()
	{
		$this->forum_by = 'Por';
		$this->forum_can_post = 'Você pode responder neste forum.';
		$this->forum_can_topics = 'Você pode ver tópicos neste forum.';
		$this->forum_cant_post = 'Você não pode responder neste forum.';
		$this->forum_cant_topics = 'Você não pode ver tópicos neste forum.';
		$this->forum_dot = 'ponto';
		$this->forum_dot_detail = 'mostra o que você inseriu';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Convidado';
		$this->forum_hot = 'Quente';
		$this->forum_icon = 'Ícone de mensagem';
		$this->forum_jump = 'Ir 1a nova mensagem do tópico';
		$this->forum_last = 'Última postagem';
		$this->forum_locked = 'Fechado';
		$this->forum_moved = 'Movida';
		$this->forum_msg = '%s Mensagens';
		$this->forum_new = 'Nova';
		$this->forum_new_poll = 'Criar nova enquete';
		$this->forum_new_topic = 'Criar novo tópico';
		$this->forum_no_topics = 'Nenhum tópico neste forum.';
		$this->forum_noexist = 'Este forum não existe.';
		$this->forum_nopost = 'Sem postagens';
		$this->forum_not = 'Não';
		$this->forum_noview = 'Sem permissão.';
		$this->forum_pages = 'Páginas';
		$this->forum_pinned = 'Afixada';
		$this->forum_pinned_topic = 'Tópico afixado';
		$this->forum_poll = 'Enquete';
		$this->forum_regfirst = 'Você não tem permissão para ver. Se você se registrar, poderã fazê-lo';
		$this->forum_replies = 'Respostas';
		$this->forum_starter = 'Iniciado por';
		$this->forum_sub = 'Sub-Forum'; //Translate
		$this->forum_sub_last_post = 'Última';
		$this->forum_sub_replies = 'Respostas';
		$this->forum_sub_topics = 'Topicos';
		$this->forum_subscribe = 'Enviar email quando tiverem postagens';
		$this->forum_topic = 'Topico';
		$this->forum_topics_new = 'Existem mensgens neste forum.';
		$this->forum_topics_old = 'Não existe novas mensagens neste forum.';
		$this->forum_views = 'Visualizações';
		$this->forum_write_topics = 'Você pode criar tópicos neste forum.';
	}

	function help()
	{
		$this->help_available_files = 'Arquivos disponíveis';
		$this->help_none = 'Sem ajuda no banco de dados';
	}

	function login()
	{
		$this->login_cant_logged = 'Você não pode ser inserido no sistema. Cheque se nome e senha estão corretos.<br /><br />Lembre-se que são case sensitives.';
		$this->login_cookies = 'Cookies must be enabled to login.'; //Translate
		$this->login_forgot_pass = 'Esqueceu sua senha ?';
		$this->login_header = 'Entrando no sistema';
		$this->login_logged = 'Você está entrando no sistema.';
		$this->login_now_out = 'Você saiu do sistema.';
		$this->login_out = 'Saindo';
		$this->login_pass = 'Senha';
		$this->login_pass_no_id = 'Não existe usuário com este nome.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'ajustar a senha';
		$this->login_pass_sent = 'sua senha foi alterada . a nova senha será enviada via email.';
		$this->login_sure = 'Tem certeza que vai sair  \'%s\'?';
		$this->login_user = 'Seu login';
	}

	function main()
	{
		$this->board_by = 'Por';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'sua conta ainda não foi ativada.';
		$this->main_activate_resend = 'REenviar minha ativação via email';
		$this->main_admincp = 'painel de controle administrativo';
		$this->main_banned = 'Você foi banido deste forum.';
		$this->main_code = 'código';
		$this->main_continue = 'Continue'; //Translate
		$this->main_cp = 'Seus dados';
		$this->main_full = 'Cheio';
		$this->main_help = 'Ajuda';
		$this->main_load = 'carrega';
		$this->main_login = 'Entrar';
		$this->main_logout = 'Sair';
		$this->main_max_load = 'Desculpe, mas %s não está disponivel, por causa do excessivo número de usuários.';
		$this->main_members = 'Usuários';
		$this->main_messenger = 'Mensageiro';
		$this->main_new = 'novo';
		$this->main_next = 'Próximo';
		$this->main_posts_new = 'Nova';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'Anterior';
		$this->main_queries = 'pesquisas';
		$this->main_quote = 'Aspas';
		$this->main_register = 'Registre';
		$this->main_reminder = 'Lembrete';
		$this->main_reminder_closed = 'Forum fechado. Visível somente para administrador.';
		$this->main_said = 'disse';
		$this->main_search = 'Procura';
		$this->main_seconds = 'segundos';
		$this->main_welcome = 'Olá';
		$this->main_welcome_guest = 'Olá convidado!';
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
		$this->members_list = 'Lista de usuários';
		$this->members_member = 'Usuário';
		$this->members_pm = 'IM';
		$this->members_posts = 'Postagens';
		$this->members_send_pm = 'Enviar mensagem pessoal';
		$this->members_title = 'Título';
		$this->members_vist_www = 'Visite o site deste usuário';
		$this->members_www = 'Web Site'; //Translate
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Tem certeza que quer apagar ?';
		$this->mod_confirm_topic_delete = 'Tem certeza que quer apagar ?';
		$this->mod_error_first_post = 'Você não pode apagar o primeiro tópico.';
		$this->mod_error_move_category = 'Você não pode mover tópico para categoria.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Você não pode mover um tópico para um forum que não existe.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Você não pode mover um tópico para o mesmo forum.';
		$this->mod_label_controls = 'Controles de moderadores';
		$this->mod_label_description = 'Descrição';
		$this->mod_label_emoticon = 'Converter emoticons para imagens ?';
		$this->mod_label_global = 'Tópico global';
		$this->mod_label_mbcode = 'Formatar código MB ?';
		$this->mod_label_move_to = 'Mover para';
		$this->mod_label_options = 'Opções';
		$this->mod_label_post_delete = 'Apagar ';
		$this->mod_label_post_edit = 'Corrigir';
		$this->mod_label_title = 'Título';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Quebrar título';
		$this->mod_label_topic_delete = 'Apagar tópico';
		$this->mod_label_topic_edit = 'Corrige Topico';
		$this->mod_label_topic_lock = 'Bloqueia Tópico';
		$this->mod_label_topic_move = 'Mover Topico';
		$this->mod_label_topic_move_complete = 'Tópico movido para o novo forum';
		$this->mod_label_topic_move_link = 'Move tópico para novo forum e mantém o Link no forum antigo.';
		$this->mod_label_topic_pin = 'Afixa tópico';
		$this->mod_label_topic_split = 'Quebrar tópico';
		$this->mod_missing_post = 'Não existe este conteúdo.';
		$this->mod_missing_topic = 'Tópico especificado não existe.';
		$this->mod_no_action = 'Especifique uma ação.';
		$this->mod_no_post = 'Você precisa especificar um topico.';
		$this->mod_no_topic = 'Especifique um tópico.';
		$this->mod_perm_post_delete = 'Você não tem permissão para apagar';
		$this->mod_perm_post_edit = 'Você não tem permissão para corrigir.';
		$this->mod_perm_topic_delete = 'Sem permissão para apagar o tópico.';
		$this->mod_perm_topic_edit = 'Sem permissão para corrigir o tópico.';
		$this->mod_perm_topic_lock = 'Sem permissão para travar o tópico.';
		$this->mod_perm_topic_move = 'Sem permissão para mover o tópico.';
		$this->mod_perm_topic_pin = 'Sem permissão para afixar o tópico.';
		$this->mod_perm_topic_split = 'Sem permissão para quebrar o tópico.';
		$this->mod_perm_topic_unlock = 'Sem permissão para destravar o tópico.';
		$this->mod_perm_topic_unpin = 'Sem permissão para desafixar o tópico.';
		$this->mod_success_post_delete = 'Esta mensagem foi deletada.';
		$this->mod_success_post_edit = 'Editado';
		$this->mod_success_split = 'O tópico foi quebrado com sucesso.';
		$this->mod_success_topic_delete = 'Tópico apagado.';
		$this->mod_success_topic_edit = 'O tópico foi corrigido com sucesso.';
		$this->mod_success_topic_move = 'Tópico movido com sucesso.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'ponto';
		$this->new_posts_dot_detail = 'mostra o que você inseriu';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Quente';
		$this->new_posts_last = 'Última postagem';
		$this->new_posts_locked = 'Fechado';
		$this->new_posts_moved = 'Movida';
		$this->new_posts_new = 'Nova';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Não';
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
		$this->pm_cant_del = 'Você não tem permissão para apagar esta mensagem.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Apagar mensagens';
		$this->pm_delete = 'Apaga';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Mensagem apagada.';
		$this->pm_deleted_all = 'Mensagens apagadas.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Não pôde ser enviada. Prencheu todos os campos ?';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Caixa de entrada';
		$this->pm_folder_new = '%s Nova';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'De';
		$this->pm_group = 'Grupo';
		$this->pm_guest = 'Como convidado você não pode utilizar. Por favor Faça o Login ou Registro.';
		$this->pm_joined = 'Agregado';
		$this->pm_messenger = 'Mensageiro';
		$this->pm_msgtext = 'Texto da mensagem';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Especifique uma pasta.';
		$this->pm_no_member = 'Nenhum membro com esta identificação.';
		$this->pm_no_number = 'Não encontrada.';
		$this->pm_no_title = 'Sem assunto';
		$this->pm_nomsg = 'Sem mensagens nesta pasta.';
		$this->pm_noview = 'Sem permissão para ver esta mensagem.';
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
		$this->pm_title = 'Título';
		$this->pm_to = 'Para';
	}

	function post()
	{
		$this->post_attach = 'Anexos';
		$this->post_attach_add = 'Adicionar anexos';
		$this->post_attach_disrupt = 'Adicionando ou emovendo anexos não alterará nada.';
		$this->post_attach_failed = 'Falhou !!! O arquivos não existe.';
		$this->post_attach_not_allowed = 'Não pode anexar este tipo de arquivo.';
		$this->post_attach_remove = 'Remover anexos ';
		$this->post_attach_too_large = 'Anexo muito grande. Máximo permitido é %d KB.';
		$this->post_cant_create = 'Como convidado você não pode criar tópico. Se você se registrar, você poderá criar tópicos.';
		$this->post_cant_create1 = 'Sem permissão para criar tópicos.';
		$this->post_cant_enter = 'Voto não computado. Ou você já votou ou não tem permissão.';
		$this->post_cant_poll = 'Como convidado você não pode criar enquetes. Se você se registrar, poderá criar.';
		$this->post_cant_poll1 = 'Sem permissão para criar enquetes.';
		$this->post_cant_reply = 'Você não tem permissão para responder neste forum';
		$this->post_cant_reply1 = 'Como convidado você não tem permissão. Se você se registrar, você terá permissão.';
		$this->post_cant_reply2 = 'Você não tem permissão.';
		$this->post_closed = 'Este tópico está fechado.';
		$this->post_create_poll = 'Criar enquete';
		$this->post_create_topic = 'Criar tópico';
		$this->post_creating = 'Criando tópico';
		$this->post_creating_poll = 'Criando enquete';
		$this->post_flood = 'Você postou em %s segundos, ae não pode postar ainda.<br /><br />Tente daqui alguns segundos.';
		$this->post_guest = 'Convidado';
		$this->post_icon = 'Por icon';
		$this->post_last_five = 'Últimos em ordem reversa';
		$this->post_length = 'Cheque comprimento';
		$this->post_mbcode_address = 'Digite o endereço';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Azul';
		$this->post_mbcode_bold = 'Negrito';
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Chocolate'; //Translate
		$this->post_mbcode_code = 'Código';
		$this->post_mbcode_color = 'Cor';
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Azul escuro';
		$this->post_mbcode_darkred = 'Vermelho escuro';
		$this->post_mbcode_deepink = 'Rosa choque';
		$this->post_mbcode_detail = 'Descrição';
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
		$this->post_mbcode_skyblue = 'Azul céu';
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
		$this->post_must_msg = 'Você deve incluir uma mensagem.';
		$this->post_must_options = 'Inclua opções.';
		$this->post_must_title = 'Você deve por um título.';
		$this->post_new_poll = 'Nova enquete';
		$this->post_new_topic = 'Novo tópico';
		$this->post_no_forum = 'Forum não encontrado.';
		$this->post_no_topic = 'Nenhum tópico foi especificado.';
		$this->post_no_vote = 'Escolha uma opção para votar.';
		$this->post_option_emoticons = 'Converter emoticons em imagens ?';
		$this->post_option_global = 'FAzer este tópico global?';
		$this->post_option_mbcode = 'Formata MBcódigo ?';
		$this->post_optional = 'opcional';
		$this->post_options = 'Opções';
		$this->post_poll_options = 'Opções';
		$this->post_poll_row = 'Um por linha';
		$this->post_posted = 'Inserido em';
		$this->post_posting = 'Postando';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Responde';
		$this->post_reply_topic = 'Responder tópico';
		$this->post_replying = 'Respondendo ao tópico';
		$this->post_replying1 = 'Respondendo';
		$this->post_smiles = 'Ícones clicáveis';
		$this->post_too_many_options = 'Voce tem que ter entre 2 e %d opções para a enquete.';
		$this->post_topic_detail = 'Descrição do tópico';
		$this->post_topic_title = 'Título do tópico';
		$this->post_view_topic = 'Ver tópico inteiro';
		$this->post_voting = 'Votar';
	}

	function printer()
	{
		$this->printer_back = 'Voltar';
		$this->printer_not_found = 'O tópico não pode ser encontrado. Ou foi movido, deletado ou não existe.';
		$this->printer_not_found_title = 'Tópico não encontrado';
		$this->printer_perm_topics = 'Sem permissão para ver tópicos.';
		$this->printer_perm_topics_guest = 'Sem permissão para ver tópicos. Se você se registrar, poderá fazê-lo.';
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
		$this->profile_email_address = 'Endereço de emai';
		$this->profile_fav = 'Forum favorito';
		$this->profile_fav_forum = '%s (%d%% de postagens do usuário)';
		$this->profile_icq_uin = 'ICQ Numero';
		$this->profile_info = 'Informação';
		$this->profile_interest = 'Interesses';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Última postagem';
		$this->profile_list = 'Lista de membros';
		$this->profile_location = 'Local';
		$this->profile_member = 'Grupo membro';
		$this->profile_member_title = 'Título do membro';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Qual o usuário que você quer ver os dados?';
		$this->profile_no_member = 'Não existe usuário com esta especificação. Sua conta pode ter sido desabilitada.';
		$this->profile_none = '[ Nenhum ]';
		$this->profile_not_post = 'ainda não postou nada.';
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
		$this->register_activated = 'Sua conta já está ativada!';
		$this->register_activating = 'Ativação de conta';
		$this->register_activation_error = 'Há algum erro ao ativar sua conta. Cheque se você inseriu a URL inteira fornecida no email.';
		$this->register_confirm_passwd = 'Confirme a senha';
		$this->register_done = 'Você já está registrado ! Pode fazewr agora o login.';
		$this->register_email = 'Email';
		$this->register_email_invalid = 'endereço de email inválido.';
		$this->register_email_used = 'Já tem usuário com este email.';
		$this->register_fields = 'Não preencheu todos os campos.';
		$this->register_image = 'SElecione o texto que você ve na imagem.';
		$this->register_image_invalid = 'Para verificar se realmente é você, é preciso digitar o texto que se vê na imagem.';
		$this->register_must_activate = 'Você está sendo registrado. Você receberá um email, para %s com a informação para ativar sua conta. Será necessário ativá-la.';
		$this->register_name_invalid = 'Nome inválido.';
		$this->register_name_taken = 'Este nome já existe.';
		$this->register_new_user = 'Nome de usuário';
		$this->register_pass_invalid = 'Senha inválida....deve ter caracteres reais e no mínimo 5 caracteres.';
		$this->register_pass_match = 'Senhas não coincidem.';
		$this->register_passwd = 'Senha';
		$this->register_reg = 'Registrar';
		$this->register_reging = 'Registrando';
	}

	function search()
	{
		$this->search_advanced = 'Opções avançadas';
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
		$this->search_level = 'Nível de usuário';
		$this->search_match = 'Procura por critério';
		$this->search_matches = 'Coincidências';
		$this->search_month = 'mes';
		$this->search_months = 'meses';
		$this->search_mysqldoc = 'Documentação do MySQL';
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
		$this->search_posts_by = 'Somente em tópicos por';
		$this->search_regex = 'Procura por expressões regulares';
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
		$this->search_unreg = 'Não registrado';
		$this->search_week = 'semana';
		$this->search_weeks = 'semanas';
		$this->search_year = 'ano';
	}

	function topic()
	{
		$this->topic_attached = 'Arquivo anexado:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Sem permissão para baixar este arquivo.';
		$this->topic_attached_title = 'Arquivo anexado';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Criar nova enquete';
		$this->topic_create_topic = 'Criar novo tópico';
		$this->topic_delete = 'Apagar';
		$this->topic_delete_post = 'Deletar este topico';
		$this->topic_edit = 'Corrigir';
		$this->topic_edit_post = 'Editar este tópico';
		$this->topic_edited = 'Ultima modificação em %s por %s';
		$this->topic_error = 'Erro';
		$this->topic_group = 'Grupo';
		$this->topic_guest = 'Convidado';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Juntado';
		$this->topic_level = 'Nível de usuário';
		$this->topic_links_aim = 'Enviar AIM para %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Enviar email para %s';
		$this->topic_links_icq = 'Enviar ICQ para %s';
		$this->topic_links_msn = 'Vista %s\'s MSN profile';
		$this->topic_links_pm = 'Enviar mensagem pessoal para %s';
		$this->topic_links_web = 'Visita %s\'s web site';
		$this->topic_links_yahoo = 'Enviar  %s with Yahoo! Messenger';
		$this->topic_lock = 'Fechar';
		$this->topic_locked = 'Tópico fechado';
		$this->topic_move = 'Mover';
		$this->topic_no_votes = 'Sem votos na enquete.';
		$this->topic_not_found = 'Tópico não encontrado';
		$this->topic_not_found_message = 'Tópico não encontrado.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Opções de tópico';
		$this->topic_pages = 'Páginas';
		$this->topic_perm_view = 'Sem permissão para ver os tópicos.';
		$this->topic_perm_view_guest = 'Você não tem permissão para ver tópicos. Se você se registrar, poderá fazê-lo.';
		$this->topic_pin = 'Afixar';
		$this->topic_posted = 'Inserido';
		$this->topic_posts = 'Postagens';
		$this->topic_print = 'Ver modo de impressão';
		$this->topic_quote = 'Responder com Aspas ( quote )';
		$this->topic_reply = 'Responder no tópico';
		$this->topic_split = 'Quebrar';
		$this->topic_split_finish = 'TErminado a quebra';
		$this->topic_split_keep = 'Não mova este tópico';
		$this->topic_split_move = 'Mover este tópico';
		$this->topic_subscribe = 'Me envie email quando houver respostas a este tópico';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Abrir';
		$this->topic_unpin = 'Desafixar';
		$this->topic_unreg = 'Não registrado';
		$this->topic_view = 'Ver resultados';
		$this->topic_viewing = 'Vendo tópico';
		$this->topic_vote = 'Vote'; //Translate
		$this->topic_vote_count_plur = '%d votos';
		$this->topic_vote_count_sing = '%d voto';
		$this->topic_votes = 'Votos';
	}
}
?>