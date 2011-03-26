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
 * $Id: php_info.php,v 1.9 2004/01/26 21:48:08 jason Exp $
 **/

require './common.php';

class php_info extends admin
{
	function execute()
	{
		$this->nohtml = true;

		if (!function_exists('phpinfo')) {
			return $this->message('Error', 'phpinfo() can not be executed. It appears that your host has disabled this feature.');
		}

		ob_start();
		phpinfo();
		$phpinfo = ob_get_contents();
		ob_end_clean();

		return $phpinfo;
	}
}
?>