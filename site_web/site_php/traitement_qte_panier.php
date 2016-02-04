<?php

    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions.php');

echo $_GET['idProduit'].','.$_GET['idCommande'].','.$_GET['qteCommande'].','.$_GET['prixUnitaire'].','.$_GET['type'].'<br/>';



if($_GET['type'] != -1)
{
    
    $qteProduit=$_GET['qteCommande']+$_GET['type'];
    echo $qteProduit.'<br/>'; 
    echo $qteProduit*$_GET['prixUnitaire'].'<br/>'; 
    
    
    changeQtePanier($connexion,$_GET['idProduit'],$_GET['idCommande'],intval($qteProduit),floatval($qteProduit*$_GET['prixUnitaire']));
    
}
else if($_GET['qteCommande']!=1)
    
{
    $qteProduit=$_GET['qteCommande']+$_GET['type'];
    changeQtePanier($connexion,$_GET['idProduit'],$_GET['idCommande'],intval($qteProduit),floatval($qteProduit*$_GET['prixUnitaire']));
}



header('Location:panier.php');





?>