<?php

$hostname="127.0.0.1";
$user="root";
$password="";
$database="event";
$db= mysqli_connect($hostname, $user, $password, $database);
mysqli_select_db($db, $database);
