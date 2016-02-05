<?php

    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions_youness.php');

echo $_GET['idProgramme'].'<br/>';


    choixProgramme($connexion,$_GET['idProgramme']);
    
    //header('Location:entrainement.php?idProgramme='.$_GET['idProgramme']);
header('Location:mes_performances.php');
?>