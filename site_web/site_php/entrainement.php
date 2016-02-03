<?php
    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions_youness.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trainings</title>
    <meta charset="utf-8">
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
                    	<h2 class="p3"><span class="color-1">Programmes de musculation</span> TITRE du PROGRAMME CHOISI</h2>
                         </p>
                        <div class="wrap box-1">
                             <!----------------------------- Affichage des exercices ------------------------------------>
                                <?php
                                $liste=listerExercices($connexion,1,1);
                                if(empty($liste)==true)
                                {
                                    echo '<p>Il n\'y a aucun exercice pour le moment</p>';
                                }
                                else
                                {
                                    foreach ($liste as $exercice) 
                                    {

                                        affichageExercices($connexion,$exercice);
                                    }
                                }

                            ?>
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