<?php
    session_start();
    require('authentification.php');
include('bibliotheque_fonctions.php');
    include('bibliotheque_fonctions_youness.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mes performances</title>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    
    
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
    <script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    
    
    <script src="js/myscript.js"></script>
    
    
    
     
    <!--==============================Inclusion du code js pour les graphiques =================================-->
    
    <!--========================================================================================================-->
    
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
<body>

<div class="main">
  <div class="bg-img"></div>
<!--==============================header=================================-->
    <header id="header">
        <?php include('header.inc.php'); ?>
    </header> 
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="box-shadow">
              <div class="wrap block-2">
                    
                    <div id="divTitle">
                      <h2 class="p3"><span class="color-1">Mon</span> objectif</h2>
                        <!-- 
                            <div id="divContent">
                            <div class="wrap box-1">
                                <img src="images/prise_de_masse.png" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="p2"><strong>Prise de masse</strong></p>
                                    <p>Obtenir des abdominaux en tablette de chocolat a toujours été une priorité pour la majorité des  pratiquants de musculation. </p>
                                    <a href="inscription.php" class="button top-6">Suivre le programme</a>
                                </div>
                            </div>
                            <br/>
                            <div class="wrap box-1">
                                <img src="images/prise_de_masse.png" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="p2"><strong>Sèche</strong></p>
                                    <p>Obtenir des abdominaux en tablette de chocolat a toujours été une priorité pour la majorité des  pratiquants de musculation. </p>
                                    <a href="inscription.php" class="button top-6">Suivre le programme</a>
                                </div>
                            </div>
                            <br/>
                            <div class="wrap box-1">
                                <img src="images/prise_de_masse.png" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="p2"><strong>Minceur</strong></p>
                                    <p>Obtenir des abdominaux en tablette de chocolat a toujours été une priorité pour la majorité des  pratiquants de musculation. </p>
                                    <a href="inscription.php" class="button top-6">Suivre le programme</a>
                                </div>
                            </div>
                            <br/>
                            <div class="wrap box-1">
                                <img src="images/prise_de_masse.png" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="p2"><strong>Cardio-Energie</strong></p>
                                    <p>Obtenir des abdominaux en tablette de chocolat a toujours été une priorité pour la majorité des  pratiquants de musculation. </p>
                                    <a href="inscription.php" class="button top-6">Suivre le programme</a>
                                </div>
                            </div>
                            
                        </div> 
                        -->
                        
                          <!----------------------------- Affichage des programmes ------------------------------------>
                                <?php
                                $liste=listerProgrammes($connexion);
                                if(empty($liste)==true)
                                {
                                    echo '<p>Il n\'y a aucun programme pour le moment</p>';
                                }
                                else
                                {
                                    foreach ($liste as $programme) 
                                    {

                                        affichageProgrammes($connexion,$programme);
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
        <p>© 2012 Fitness Club</p>
        <p>Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a></p>
    </footer> 
</div>    
<script>
  Cufon.now();
</script>
</body>
</html>

