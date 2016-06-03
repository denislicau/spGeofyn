<?php
	$dbc = NULL;
	function dbCon() {
		global $dbc;
		$servername = "sql7.freemysqlhosting.net";
		$username = "sql7121595";
		$password = "9sNMlfRDwL";
		$database = "sql7121595";
		$dbc = mysqli_connect($servername, $username, $password,$database)
		or die ('Error connecting to the database server');
	}

?>
