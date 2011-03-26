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
 * $Id: help.php,v 1.13 2004/01/26 21:53:19 jason Exp $
 **/

class help extends mercuryboard
{
	function execute()
	{
		$this->tree($this->lang->help_available_files);
		$this->set_title($this->lang->help_available_files);

		$h = array();
		$q = $this->db->query("SELECT help_id, help_title, help_article FROM {$this->pre}help ORDER BY help_title");

		while ($r = $this->db->nqfetch($q))
		{
			$h[] = $r;
		}

		if ($h) {
			$top = null;
			foreach ($h as $ar)
			{
				$top .= eval($this->template('HELP_SIMPLE_ENTRY'));
			}

			$desc = null;
			foreach ($h as $ar)
			{
				$desc .= eval($this->template('HELP_DESCRIPTIVE_ENTRY'));
			}

			return eval($this->template('HELP_FULL'));
		} else {
			return $this->message($this->lang->help_available_files, $this->lang->help_none);
		}
	}
}
?>