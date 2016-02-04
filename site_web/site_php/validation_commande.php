<?php
    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions.php');


validerCommande($connexion, $_GET['idCommande']);
header('Location:mes_commandes.php');



?>