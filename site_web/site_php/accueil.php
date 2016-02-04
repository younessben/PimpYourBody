<?php
    session_start();
    require('authentification.php');
    include('bibliotheque_fonctions.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>

    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        

    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
    
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.3.js"></script>
	<script src="js/tms_presets.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	<script src="js/Kozuka_M_500.font.js"></script>
 <!-- <script src="js/cufon-replace.js"></script> -->
    <script src="js/FF-cash.js"></script>
    <script src="js/myscript.js"></script>
    <script>
		$(window).load(function(){
			$('.slider')._TMS({
			prevBu:'.prev',
			nextBu:'.next',
			pauseOnHover:true,
			pagNums:false,
			duration:800,
			easing:'easeOutQuad',
			preset:'Fade',
			slideshow:7000,
			pagination:'.pagination',
			waitBannerAnimation:false,
			banners:'fade'
			})
		}) 	
    </script>
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
<body oninit="init('liAccueil');" onload="init('liAccueil');">
<div class="main">
	<div class="bg-img"></div>
<!--==============================header=================================-->
    <?php include('header.inc.php'); ?> 
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="slider">
              <ul class="items">
                 <li><img src="images/hercules.png" alt="">
                    <div class="banner">
                        <p class="font-1">Entrainez<span>Vous</span></p>
                        <p class="font-2">Découvrez nos exercices de musculation, classés par zones musculaires et expliqués par le coach. Tous les exercices sont accompagnés d'une vidéo....</p>
                        <a href="entrainement.php">Savoir plus</a>
                    </div>
                </li>
                <li><img src="images/ahmet.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Bien Etre</p>
                        <p class="font-2">Fitness, bien-être, beauté, détente... notre site  vous propose une multitude d'exercices et conseils qui s’adressent à tous le monde y compris les moins sportifs !</p>
                        <a href="nutrition.php">Savoir plus</a>
                    </div>
                </li>
                <li><img src="images/Gros-muscles.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Plus<span>de muscles</span></p>
                        <p class="font-2">Être mince ou avoir des gros muscles est en partie une question d’entraînement, et en partie une question d’équilibre nutritionnel.</p>
                        <a href="entrainement.php">Savoir plus</a>
                    </div>
                </li>
              </ul>
              <div class="pagination">
                  <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
              </div>  
            </div>
          </div>	
          <div class="grid_12 top-1">
          	<div class="block-1 box-shadow">
            	<p class="font-3"> PimpYourBody est une plateforme web gratuite qui pour objectif de vous accomagner et vous proposer des programmes de sport et de nutrition afin de garder la forme et la bonne humeur, PimpYourBody propose des programmmes pour les débutants et exprimentés en fonctions de vos objectifs, n'hésitez pas à vos inscrire pour beneficier des programmes et cours gratuits.</p>
            </div>
          </div>
          <div class="grid_12 top-1">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-1">
                    	<h2 class="p3"><span class="color-1">Latest</span> events</h2>
                        <div class="wrap box-1">
                            <img src="images/test.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Ut wisi enim ad minim veniamis nostrud</strong> </p>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                            </div>
                        </div>
                        <div class="wrap box-1 top-2">
                            <img src="images/page1-img2.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p><strong>Duis autem vel eum iriure dolor</strong></p>
                                <p>Hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilis lorem ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h2 class="p3"><span class="color-1">Services</span> list</h2>
                        <ul class="list-1">
                        	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consetetur sadipscing elitr sed</a></li>
                            <li><a href="#">Diam nonumy eirmod tempor</a></li>
                            <li><a href="#">Invidunt ut labore dolore</a></li>
                            <li><a href="#">Magna aliquyam erat sed</a></li>
                        </ul>
                       
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
    <?php include('footer.inc.php'); ?> 
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>