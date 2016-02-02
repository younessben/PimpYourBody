<?php
session_start();
//require('authentification.php');
require('authentification.php');
if (Auth::islog()){
	
}else{
	header('Location:connexion.php');
}
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mes Informations</title>
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
                    <div class="col-1">
                    	<h2 class="p3"><span class="color-1">Bienvenue</span> sur votre espace personnel</h2>
                        <p class="p2"><strong>Voici le résumé de vos informations</strong></p>
                        <?php
                        //var_dump($_SESSION['Auth']['email']); Utilisé pour tester le contenu de la variable
                        $req=$connexion->prepare("SELECT prenom FROM utilisateur WHERE email = :email");
                        $req->execute(array('email' => $_SESSION['Auth']['email']));

                        echo '<h1>'.'Bonjour ';
                        echo '<b>';
                        while ($donnees = $req->fetch())
                            {
                                echo $donnees['prenom'] .'  <br />';
                            }
                        echo '</h1>'.'</b>'.'<br>';
			         if(isset($_SESSION['Auth']['email']) && isset($_SESSION['Auth']['password']))
				{
                    echo '<br>'.'<br>';
                    echo '<br>'.'<br>';
					echo '<b>'.'Votre email :'.'</b>'.'<br>'.$_SESSION['Auth']['email'];
					echo '<br>'.'<br>';
					
					echo '<br>'.'<br>';
                         
                          $q5=array('email'=>$_SESSION['Auth']['email']);
                          $req3='SELECT * FROM utilisateur WHERE email=:email';
                          $reponse= $connexion->prepare($req3);
                          $reponse->execute($q5);
   
    
                            $liste =array();
                                if($reponse->execute())
                            {
                            while ($donnees = $reponse->fetch())
                            {
                                array_push($liste, $tab=array($donnees['NOM'],$donnees['PRENOM'],$donnees['AGE'],$donnees['SEXE'],$donnees['TELEPHONE']));
                                
                                foreach  ($tab as $value ){
                                    echo '<b>'. $value;
                                    echo '<br />';
                                }
                                
                            }
                                
                            
        
                         }
                
                        $req2=$connexion->prepare("SELECT nom FROM utilisateur WHERE email = :email");
                        $req2->execute(array('email' => $_SESSION['Auth']['email']));
                        echo '<b>';
                        while ($donnees = $req2->fetch())
                            {
                                echo $donnees['nom'] .'  <br />';
                            }
				}?>
                        
                        <div class="wrap box-1">
                            <img src="images/page4-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <a href="modification_membre.php">Modification de vos informations</a>
		<br><br>
	
                                <a href="#" class="button top-6">Search</a>
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
        <p>© 2016 PIMPYOURBODY</p>
        <p>Site réalisé par Yoann WOLF, Ahmet IMRE, Youness BEN</p>
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>