<?php 
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'portfolio';
	$connection = mysql_connect($host,$user,$pass) or die("Error connecting to database " . mysql_error($connection));
	mysql_select_db($db);
?>