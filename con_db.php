<?php 
error_reporting(0);
$con = mysql_connect('localhost','root','');

if (!$con) 
{
	# code...
	die(mysql_error());
}

mysql_select_db("atttribe_1",$con);
?>