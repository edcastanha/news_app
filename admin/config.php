<?php

	$host = 'localhost';
	$port = '3306';
	$base   = 'newsapp';
	$usuario = 'root';
	$senha = '';

	
try{
	$pdo = new PDO('mysql:host='.$host.';dbname='.$base,$usuario,$senha);

}catch(PDOException $exessao){

	exit('Erro 502 - Erro Gateway MySQL Free');
}


?>