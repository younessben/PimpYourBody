<?php
    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions.php');


if (Auth::islog()){
               // echo $_GET['idProduit'].','.$_GET['qteProduit'].','.$_GET['prixUnitaire'].',';
    
    echo $_SESSION['idUtilisateur'];
                ajouterPanier($connexion,$_SESSION['idUtilisateur'],$_GET['idProduit'],$_GET['qteProduit'],$_GET['prixUnitaire']);
    
    //echo $_GET['page'];
                header('Location:'.$_GET['page'].'?idProduit='.$_GET['idProduit']);
}
else{
        header('Location:connexion.php');
    }







?>