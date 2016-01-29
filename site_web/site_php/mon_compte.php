<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mon compte</title>
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    <!--==============================header=================================-->
    <?php include('containerChart.inc.php'); ?> 
    <!--==============================content================================-->
    
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
<body oninit="init('liMonCompte');" onload="init('liMonCompte');">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div class="main">
  <div class="bg-img"></div>
<!--==============================header=================================-->
    <?php include('header_mon_compte.inc.php'); ?> 
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="box-shadow">
              <div class="wrap block-2">
                    <ul class="nav nav-pills nav-stacked col-3">
                        <li><br/></li> <!-- On met un espace afin de décaler le menu vers le bas  -->
                        <li id="liPerformances" class="active" role="presentation" onclick="menuMonCompte('liPerformances','performances')"><a href="#">Mes performances</a></li>  
                        <li id="liProgres" role="presentation"  onclick="menuMonCompte('liProgres','progres')"><a href="#">Mes progrès</a></li>
                      
                        <li id="liCommandes" role="presentation" onclick="menuMonCompte('liCommandes','commandes')"><a href="#">Mes commandes</a></li>
                        <li id="liInfos" role="presentation" onclick="menuMonCompte('liInfos','informations')"><a href="#">Mes informations</a></li>
                    </ul>
                    <div class="col-4" id="divTitle">
                      <h2 class="p3"><span class="color-1">Mes</span> progres</h2>
                        
                        <div id="containerLine" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        <div id="containerColumn" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


                        
                        
                        
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

