<?php
	// Include file for database connectivity
	$db_server = "localhost"; 
	$db_user = "root";
	$db_pass = "root";
	$db_name = "tgsakhir"; 
	/* Connects to database system */
	function db_connect(){
		global $db_server;
		global $db_user;
		global $db_pass;
		global $db_name;
		$dbcnx = mysql_connect($db_server, $db_user, $db_pass) or die("Error connecting to database: " . mysql_error());
		$dbsel = mysql_select_db($db_name, $dbcnx) or die("Error reading from database table: " . mysql_error());
	}

?>