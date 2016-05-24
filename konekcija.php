<?php

$host='localhost';
$user='root';
$password='';
$database='fakultet';

$mysqli= new mysqli($host, $user, $password, $database);
$mysqli->set_charset("utf8");

if(mysqli_connect_errno())
{
    echo 'Doslo je do pogreske.<br/>';
    echo mysqli_connect_error();
    exit;
}