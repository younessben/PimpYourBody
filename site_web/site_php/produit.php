<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produit</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
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
                    	<h2 class="p3"><span class="color-1">Titre du produit </span></h2>
                        <p class="p5">Description du produit : At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
                        <div class="wrap box-1">
                            <img src="images/page4-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                
                                
                                
                                <form>
                                  <div class="form-group">
                                    <p><strong>Prix unitaire</strong></p>
                                    <p style="color:red; font-weight:bold;">150€</p>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="qteTxt">Quantité</label>
                                    <input type="text" class="form-control" id="qteTxt" placeholder="1">
                                  </div>
                                  <div class="form-group">
                                    <p><strong>Prix total</strong></p>
                                    <p style="color:red; font-weight:bold;">150€</p>
                                    
                                  </div>
                                </form>




                                <a href="#" class="button top-6">Ajouter au panier</a>
                            </div>
                        </div>
                        <h2 class="p3 top-2"><span class="color-1">You are</span> in good hands</h2>
                        <p class="p2"><strong>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</strong></p>
                        <p class="p5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    </div>
                    <div class="col-2">
                        <h2 class="p6"><span class="color-1">Conseils</span> d'utilisation</h2>
                        <img src="images/page4-img2.jpg" alt="" class="img-border">
                        <p class="p2 top-6"><strong>Exercice 1</strong></p>
                        <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>

                        <p class="p2 top-6"><strong>Exercice 2</strong></p>
                        <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>

                        <p class="p2 top-6"><strong>Exercice 3</strong></p>
                        <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>
                        
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