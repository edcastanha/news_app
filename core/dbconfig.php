<?php

	$host = '108.179.253.205';
	$port = '3306';
	$base   = 'edrive90_teste';
	$usuario = 'edrive90_news';
	$senha = 'ep4X1!br';

	
try{
	$pdo = new PDO('mysql:host='.$host.';dbname='.$base,$usuario,$senha);

}catch(PDOException $exessao){

	exit('Erro 502 - Erro Gateway MySQL Free');
}


?>