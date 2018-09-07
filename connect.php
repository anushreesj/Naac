<?php
error_reporting(0);
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "admin";
$dbname = "part_a";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>