<?php
    session_start();
    require('authentification.php');
include('bibliotheque_fonctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nutrition</title>
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
<body onload="init('liNutrition')">
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
                    <div >
                    	<h2 class="p3"><span class="color-1">Programme de musculation</span> tous niveaux</h2>
                        <p class="p2"><strong>Être mince ou avoir des gros muscles est en partie une question d’entraînement, et en partie une question d’équilibre nutritionnel. Cela implique le choix d’aliments riches en fibres et en eau et ne contenant que peu de graisses (les mauvaises en particulier).</strong></p>
                        <p class="p5">Nous vous proposons une sélection d’aliments ayant bon goût et qui peuvent satisfaire votre palais en apportant peu de calories. 
                        <a href="connexion.php" style="">CLIQUEZ ICI POUR VOUS CONNECTER</a>
                        </p>
                        
                    </div>
                        <div class="wrap box-1">
                            <img src="images/fruits.png" alt="" class="img-border img-indent " style="margin-left: 50px;">
                        </div>
                    <br/>
                        <br/>
                         <div class="wrap box-1">
                            <img src="images/prise_de_masse.png" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>PRISE DE MASSE MAXIMUM</strong></p>
                                <p>OBJECTIF : Consommer fréquemment un maximum de calories de qualité pour favoriser l’anabolisme, gagner en poids de corps et en masse musculaire.</p>
                                <a href="connexion.php" class="button top-6">Acceder au programme</a>
                            </div>
                             <br/>
                            <br/>
                 <div class="wrap box-1">
                            <img src="images/gallery-7.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>MINCEUR CUISSES-FESSES</strong></p>
                                <p>OBJECTIF : Réduire l’apport calorique et drainer l’organisme pour perdre un maximum de masse graisseuse et de cellulite sur les cuisses et les fesses.</p>
                                <a href="connexion.php" class="button top-6">Acceder au programme</a>
                            </div>
            
                 </div>
            </div>  
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
    <footer>
        <?php include('footer.inc.php'); ?> 
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>