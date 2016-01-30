<?php
session_start();
$_SESSION = array();
session_destroy(); //On détruit la session
header('Location:accueil.php'); //On redirige sur la page de connexion après avoir détruit la session
?>