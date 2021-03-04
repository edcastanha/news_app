<?php

$host = 'localhost';
$port = '3306';
$db   = 'newsapp';
$user = 'root';
$pass = '';

global $con;

$con = mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	echo 'Base de Dados não Localizada';
	die();
}