<?php
	$serveur ='localhost';
	$user = 'root';
	$pass = '';
	$bdd ='pimpyourbody';

try{
	$connexion = new PDO ('mysql:host='.$serveur.';dbname='.$bdd, $user,$pass);
	}
catch (PDOException $e)
{
	echo $e->getMessage();
}

?>