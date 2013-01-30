<?php 
include ('db_connect.php');
	$_SESSION = array(); 
	session_destroy(); 
	close_connection();
?>
<meta http-equiv="refresh" content=".1; login.html">
