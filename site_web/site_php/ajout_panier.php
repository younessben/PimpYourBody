<?php
    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions.php');

echo $_GET['idProduit'].','.$_GET['qteProduit'].','.$_GET['prixUnitaire'].',';
ajouterPanier($connexion,3,$_GET['idProduit'],$_GET['qteProduit'],$_GET['prixUnitaire']);
header('Location:'.$_GET['page']);





?>