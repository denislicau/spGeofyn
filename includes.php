<?php
	$dbc = NULL;
	function dbCon() {
		global $dbc;
		$dbc = mysqli_connect('localhost', 'root', '', 'geofyn')
		or die ('Error connecting to the database server');
	}
?>
