<?php

$hostname="localhost";
$user="root";
$password="root";
$database="event";
$db= mysqli_connect($hostname, $user,$password, $database);
if(!$db)
{
    die("cannot connect". mysql_error());
}
mysqli_select_db($db, $database);
