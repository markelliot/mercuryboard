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
 * $Id: mysql.php,v 1.5 2005/03/30 04:25:03 jason Exp $
 **/

/**
 * MySQL Abstraction Class
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class database
{
	var $connection = false; // Connection link identifier @var resource
	var $querytime  = 0;     // Time spent executing queries @var int
	var $querycount = 0;     // Number of executed queries @var int
	var $get;                // Alias for $_GET @var array
	var $post;               // Alias for $_POST @var array
	var $host;               // Database Server @var string
	var $user;               // Database User Name @var string
	var $pass;               // Database Password @var string
	var $db;                 // Database Name @var string
	var $socket;             // Database Socket @var string
	var $port = 3306;        // Database Port @var int

	/**
	 * Constructor; sets up variables and connection
	 *
	 * @param string $db_host Server
	 * @param string $db_user User Name
	 * @param string $db_pass Password
	 * @param string $db_name Database Name
	 * @param int $db_port Database Port
	 * @param string $db_socket Database Socket
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function database($db_host, $db_user, $db_pass, $db_name, $db_port = 3306, $db_socket = '')
	{
		$this->get    = $_GET;
		$this->post   = $_POST;
		$this->host   = $db_host;
		$this->user   = $db_user;
		$this->pass   = $db_pass;
		$this->db     = $db_name;
		$this->port   = $db_port;
		$this->socket = $db_socket;

		$this->connection = @mysql_connect("$db_host:$db_port" . (!$this->socket ? '' : ":$db_socket"), $db_user, $db_pass);

		if (!@mysql_select_db($db_name, $this->connection)) {
			$this->connection = false;
		}
	}

	/**
	 * Retrieves debug information about a query
	 *
	 * @param string $query Query to debug
	 * @access protected
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function debug($query)
	{
		$this->querylog[]   = $query;

		$mtime              = explode(' ', microtime());
		$starttime          = $mtime[1] + $mtime[0];

		if (substr(trim(strtoupper($query)), 0, 6) == 'SELECT') {
			$data = mysql_fetch_array(mysql_query("EXPLAIN $query", $this->connection), MYSQL_ASSOC);
		} else {
			$data = array();
		}

		$mtime              = explode(' ', microtime());
		$querytime          = ($mtime[1] + $mtime[0]) - $starttime;
		$this->querytime   += $querytime;

		$data['querytime']  = $querytime;
		$data['query']      = $query;
		$this->querydebug[] = $data;
	}

	/**
	 * Retrieves the insert ID of the last executed query
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return int Insert ID
	 **/
	function insert_id()
	{
		return mysql_insert_id($this->connection);
	}

	/**
	 * Executes a query
	 *
	 * @param string $query SQL query
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return resource Executed query
	 **/
	function query($query)
	{
		$this->querycount++;

		if (isset($this->get['debug'])) {
			$this->debug($query);
		}

		$result = mysql_query($query, $this->connection) or error(MERCURY_QUERY_ERROR, mysql_error($this->connection), $query, mysql_errno($this->connection));
		return $result;
	}

	/**
	 * Executes a query and fetches it into an array
	 *
	 * @param string $query SQL query
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return array Fetched rows
	 **/
	function fetch($query)
	{
		return $this->nqfetch($this->query($query));
	}

	/**
	 * Fetches an executed query into an array
	 *
	 * @param resource $query Executed SQL query
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return array Fetched rows
	 **/
	function nqfetch($query)
	{
		return mysql_fetch_array($query, MYSQL_ASSOC);
	}

	/**
	 * Gets the number of rows retrieved by a SELECT
	 *
	 * @param resource $query Executed SQL query
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return int Number of retrieved rows
	 **/
	function num_rows($query)
	{
		return mysql_num_rows($query);
	}

	/**
	 * Clones a row
	 *
	 * @param string $table MySQL table to select from
	 * @param string $unique_col Name of a unique column by which to find the row. This column is not given an explicit value in the cloned row.
	 * @param string $unique_id The value of $unique_col in the original row
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return void
	 */
	function clone_row($table, $unique_col, $unique_id)
	{
		$cols = null;
		$vals = null;

		$result = $this->fetch('SELECT * FROM ' . $table . ' WHERE ' . $unique_col . '=' . $unique_id);
		foreach ($result as $col => $val)
		{
			if ($col == $unique_col) {
				continue;
			}

			$cols .= $col . ', ';
			$vals .= '"' . addslashes($val) . '", ';
		}

		$this->query('INSERT INTO ' . $table . ' (' . substr($cols, 0, -2) . ') VALUES (' . substr($vals, 0, -2) . ')');
	}

	/**
	 * Gets the number of rows affected by the last executed UPDATE
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return int Number of affected rows
	 **/
	function aff_rows()
	{
		return mysql_affected_rows($this->connection);
	}
}
?>