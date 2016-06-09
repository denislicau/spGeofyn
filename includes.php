<?php
	$dbc = NULL;
	function dbCon() {
		global $dbc;
		$dbc = mysqli_connect('sql7.freemysqlhosting.net', 'sql7121595', '9sNMlfRDwL', 'sql7121595')
	  or die ('Error connecting to the database server');
	}
?>
