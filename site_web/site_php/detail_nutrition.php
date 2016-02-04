<?php
    session_start();
    require('authentification.php');
include('bibliotheque_fonctions.php');
    include('bibliotheque_fonctions_youness.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>detail_nutrition</title>
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
    <script src="bootstrap/js/bootstrap.js"></script>
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
<body onload="init('liBoutique')">
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
                    <div class="col-1">
                    	
                             <!----------------------------- Affichage des programme nutrition ------------------------------------>
                                <?php
                                $liste=programmeNutrition($connexion,$_SESSION['idUtilisateur'],1);
                                if(empty($liste)==true)
                                {
                                    echo '<p>Il n\'y a aucun exercice pour le moment</p>';
                                }
                                else
                                {
                                    foreach ($liste as $nutrition) 
                                    {

                                        affichageNutrition($connexion,$nutrition);
                                    }
                                }

                            ?>
                           
                        </div>
                    </div>
                    <div class="col-2">
                        <h2 class="p6"><span class="color-1">Conseils</span> Nutrition</h2>
                        <img src="images/page4-img2.jpg" alt="" class="img-border">
                        <p class="p2 top-6"><strong>ATTENTION A L’ALCOOL !</strong></p>
                        <p class="p4">L’alcool n’est pas recommandé chez les sportifs. Les calories apportées par ce dernier (7kcal / g d’alcool) ne sont pas utilisables pour l’effort musculaire. L’alcool réduit les capacités physiques et va augmenter les toxines que l’organisme devra éliminer</p>

                        <p class="p2 top-6"><strong>OPTIMISER LA RÉCUPÉRATION</strong></p>
                        <p class="p4">Phase incontournable pour reconstituer les réserves et réparer les cellules, nos experts vous disent tout ce qu’il faut savoir. </p>

                        <p class="p2 top-6"><strong>MANGER ÉQUILIBRÉ, C’EST IMPORTANT !</strong></p>
                        <p class="p4">L’alimentation est un facteur clé de la performance.<br/> Manger équilibré doit rester un acte simple. .<br/> Suivez nos principes faciles à respecter. </p>
                        
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