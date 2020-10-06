<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="1234";
$dbname="music";
$conn=mysql_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysql_select_db($dbname,$conn);
?>
