<?php

function db_connect()
{
	try {
		$PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $PDO;
	} catch(PDOException $e) {
		echo 'ERRO DE CONEX&Atilde;O COM O BANCO DE DADOS: <br/><br/>' . $e->getMessage();
		echo '<br/><br/>Entre em contato com o administrador';
	} 
}

?>