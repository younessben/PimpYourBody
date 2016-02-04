<?php
    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions.php');


supprimerPanier($connexion,3,$_GET['idProduit'],$_GET['idCommande']);
header('Location:panier.php');



?>