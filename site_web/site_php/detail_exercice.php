<!DOCTYPE html>
<?php
    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions_youness.php');
?>
<html lang="en">
<head>
    <title>Produit</title>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
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
                            <?php
                                                 $req="  SELECT * FROM `exercice` natural join `details_exercice`
                                                 where ID_EXERCICE =".$_GET['idExercice'].";";
                                                 $reponse= $connexion->prepare($req);
                                                 $result = $reponse->execute();
                                                 $donnee= $reponse->fetch();
                        echo'
                    	<h2 class="p3"><span class="color-1">Exercice : </span>'.$donnee['NOM_EXERCICE'].' </span></h2>
                        <p class="p5">'.$donnee['DESC_EXERCICE'].'</p>
                        <div class="wrap box-1">
                            
                                  
                          
                            <img src="'.$donnee['CHEMIN_IMG_EX'].'" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                            <br/> <br/>
                             <div class="form-group">
                                      
                                        <p><strong>Nombre de series</strong><span style="color:red; font-weight:bold;">&nbsp;&nbsp;'.$donnee['NBR_SERIES'].'</span> </p>
                                        <p><strong>Nombre de repetition</strong><span style="color:red; font-weight:bold;">&nbsp;&nbsp;'.$donnee['NBR_REPETITION'].'</span> </p>
                                        <p><strong>Duree de repos</strong><span style="color:red; font-weight:bold;">&nbsp;&nbsp;'.$donnee['DUREE_REPOS'].' secondes </span> </p> 
                                  </div>
                                 
                            </div>
                        </div>
                        <br/>
                                    '.$donnee['LIEN_VIDEO'].'                 
                    </div>

                  <div class="col-2">
              
                       
                        <h2 class="p6"><span class="color-1">Muscles</span> Concernes</h2>
                        <img src="'.$donnee['CHEMIN_IMG_DEMO'].'" alt="" class="img-border">
                        <p class="p2 top-6"><strong>Conseil 1</strong></p>
                        <p class="p4">Boire 3 à 4 gorgées d’eau toutes les 30 minutes d’exercice, à l’entraînement comme en compétition..</p>

                        <p class="p2 top-6"><strong>Conseil 2</strong></p>
                        <p class="p4"> ne jamais fumer pendant l’heure qui précède ni les deux heures qui suivent une pratique sportive.</p>

                        <p class="p2 top-6"><strong>Conseil 3</strong></p>
                        <p class="p4">signaler à votre médecin tout malaise survenant à l’effort ou juste après</p>
                       
                   </div>
                    '
                      ?>
                            
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
    <footer>
        <p>© 2012 Fitness Club</p>
        <p>Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a></p>
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>