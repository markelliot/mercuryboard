<?php
/**
 * MercuryBoard
 * Copyright (c) 2001-2004 The Mercury Development Team
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
 * $Id: home.php,v 1.32 2005/03/25 17:46:54 jason Exp $
 **/

require 'common.php';

class home extends admin
{
	function execute()
	{
		return $this->table . "
			<tr>
				<td class='header'>Admin CP Menu</td>
			</tr>
			<tr>
				<td bgcolor='#EEEEEE'>
					<table width='100%' cellpadding='5' cellspacing='0' border='0'>
						<tr>
							<td colspan='2' style='font-size:17px; font-weight:bold; padding-bottom:15px' align='center'>Choose a task to begin.</td>
						</tr>
						<tr>
							<td valign='top' width='50%'>
								<div class='fieldset'>
									<div class='legend'>Forums &amp; Categories</div><br />
									<a href='$this->self?a=forums&amp;s=add'>Create a forum</a><br />
									<a href='$this->self?a=forums&amp;s=edit'>Edit a forum</a><br />
									<a href='$this->self?a=forums&amp;s=delete'>Delete a forum</a><br />
									<a href='$this->self?a=forums&amp;s=order'>Change the forum ordering</a><br />
									<a href='$this->self?a=forums&amp;s=count'>Recount topics &amp; replies</a>
								</div><br />

								<div class='fieldset'>
									<div class='legend'>Emoticons</div><br />
									<a href='$this->self?a=emot_control&amp;s=import'>Install emoticons</a><br />
									<a href='$this->self?a=emot_control&amp;s=add'>Add emoticons</a><br />
									<a href='$this->self?a=emot_control&amp;s=edit'>Edit or delete emoticons</a>
								</div><br />

								<div class='fieldset'>
									<div class='legend'>Groups</div><br />
									<a href='$this->self?a=groups&amp;s=add'>Create a group</a><br />
									<a href='$this->self?a=groups&amp;s=edit'>Edit a group's name</a><br />
									<a href='$this->self?a=perms'>Edit a group's permissions</a><br />
									<a href='$this->self?a=groups&amp;s=delete'>Delete a group</a>
								</div><br />

								<div class='fieldset'>
									<div class='legend'>Members</div><br />
									<a href='$this->self?a=members&amp;s=profile'>Edit a member</a><br />
									<a href='$this->self?a=members&amp;s=delete'>Delete a member</a><br />
									<a href='$this->self?a=members&amp;s=perms'>Edit a member's permissions</a><br />
									<a href='$this->self?a=titles&amp;s=add'>Add automatic member titles</a><br />
									<a href='$this->self?a=titles'>Edit or delete automatic member titles</a><br />
									<a href='$this->self?a=ban'>Ban IP addresses</a><br />
									<a href='$this->self?a=mass_mail'>Send an email to your members</a><br />
									<a href='$this->self?a=membercount'>Fix the member statistics</a>
								</div>
							</td>
							<td valign='top'>
								<div class='fieldset'>
									<div class='legend'>Database</div><br />
									<a href='$this->self?a=backup&amp;s=create'>Backup the database</a><br />
									<a href='$this->self?a=backup&amp;s=restore'>Restore a backup</a><br />
									<a href='$this->self?a=settings&amp;s=db'>Edit connection settings</a><br />
									<a href='$this->self?a=optimize'>Optimize the database</a><br />
									<a href='$this->self?a=query'>Execute an SQL query</a>
								</div><br />

								<div class='fieldset'>
									<div class='legend'>Skins</div><br />
									<a href='$this->self?a=templates&amp;s=html'>Edit HTML templates</a><br />
									<a href='$this->self?a=templates&amp;s=skin'>Create a skin</a><br />
									<a href='$this->self?a=templates&amp;s=editskin'>Edit or delete a skin</a><br />
									<a href='$this->self?a=templates&amp;s=load'>Install a skin</a><br />
									<a href='$this->self?a=templates&amp;s=export'>Export a skin</a><br />
								</div><br />

								<div class='fieldset'>
									<div class='legend'>Help Articles</div><br />
									<a href='$this->self?a=help&amp;s=new'>Create a help article</a><br />
									<a href='$this->self?a=help&amp;s=edit'>Edit a help article</a><br />
									<a href='$this->self?a=help&amp;s=delete'>Delete a help article</a>
								</div><br />

								<div class='fieldset'>
									<div class='legend'>Settings</div><br />
									<a href='$this->self?a=settings&amp;s=basic'>Edit board settings</a><br />
									<a href='$this->self?a=censoring'>Censor words</a><br />
									<a href='$this->self?a=php_info'>View PHP information</a><br />
									<a href='$this->self?a=logs'>View moderator actions</a><br />
									<a href='$this->self?a=stats'>Statistics center</a>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		" . $this->etable;
	}
}
?>