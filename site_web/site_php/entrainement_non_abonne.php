<?php
    session_start();
    require('authentification.php');
include('bibliotheque_fonctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trainings</title>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	<script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/FF-cash.js"></script>
    <script src="js/myscript.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body onload="init('liEntrainement')">
<div class="main">
	<div class="bg-img"></div>
<!--==============================header=================================-->
    <?php include('header.inc.php'); ?> 
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                   
                    <div class="col-4">
                    	<h2 class="p3"><span class="color-1">Programmes de musculation</span> tous niveaux</h2>
                        <p class="p2"><strong>Quand on fait de la musculation, il est important de mettre en place un programme correspondant à votre objectif. Celui-ci peut être de gagner du muscle ou du poids, vous débarrasser de kilos en trop, préparer une saison sportive ou simplement retrouver et maintenir sa forme. </strong></p>
                        <p class="p5">Vous trouverez ici différents programmes de musculation, pour la prise de masse, de force ou la perte de poids. Que vous soyez débutants ou expérimenté, nos programmes et conseils vous aideront à progresser au mieux. Il n'y a plus qu'à vous laisser guider.
                        <a href="inscription.php" style="">CLIQUEZ ICI POUR VOUS CONNECTER</a>
                         </p>
                        <div class="wrap box-1">
                            <img src="images/abdos2.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Abdominaux : 8 minutes en enfer !</strong></p>
                                <p>Obtenir des abdominaux en tablette de chocolat a toujours été une priorité pour la majorité des  pratiquants de musculation. </p>
                                <a href="connexion.php" class="button top-6">Faire exercice</a>
                            </div>
                        </div>
                        <br/>
                        <div class="wrap box-1">
                            <img src="images/page3-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Un dos puissant en "V"</strong></p>
                                <p>Le dos est le groupe musculaire le plus vaste du corps. Il faudra varier les mouvements pour solliciter tous les nombreux muscles qui le composent.</p>
                                <a href="connexion.php" class="button top-6">Faire exercice</a>
                            </div>
                             <br/>
                            <br/>
                             <div class="wrap box-1">
                            <img src="images/bras.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Faites exploser vos bras !</strong></p>
                                <p>Obtenir des gros bras est le souhait de bon nombre de pratiquants de musculation qui squattent les barres et machines à biceps et triceps.</p>
                                <a href="connexion.php" class="button top-6">Faire exercice</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
    <footer>
        <p>© 2016 PimpYourBody Club</p>
        <p>COPYRIGHT FRANCE ® <a class="link" href="" target="_blank" rel="nofollow">www.pimpyourbody.org</a></p>
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>