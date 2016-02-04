<?php
require_once 'connexion_bdd.php';
require('authentification.php');
include('bibliotheque_fonctions.php');
?>


<?php
    if(!empty($_POST) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $email = addslashes($_POST['email']);
            //$sql = 'SELECT token FROM utilisateurs WHERE email="' . $email . '"'; //On récupère le token dans la BDD correspondant à l'email pour l'utiliser dans le lien pour la réinitialisation du password
            $token = $connexion -> prepare ($sql);
            $token->execute();
            var_dump ($token);
            $stock=$token->fetch(PDO::FETCH_NUM);
    
			//Envoi d'un email pour la réinitialisation du mot de passe
			$to = $email;
			$sujet = 'Reinitilisation mot de passe';
			$body = 'Merci de cliquer ici pour la reinitialisation du mot de passe -> 
					<a href="http://localhost/pimpyourbody/site_web/site_php/chgt-password.php?email='.$to.'">Réinitialisation mot de passe</a>';
			$entete = "MIME-Version: 1.0\r\n";
			$entete.="Content-type: text/html; charset=UTF-8\r\n";
			$entete.='From: PIMPYOURBODY ::' . "\r\n";
			'Reply-To: pimpyourbody@localhost.com' . "\r\n";
			'X-Mailer: PHP/' . phpversion();
			mail($to,$sujet,$body,$entete);

    header('location:mes_informations.php'); // Redirige sur la page de login après l'envoi de l'email
	}else
		{
            if(!empty($_POST) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
            $error_email = ' Votre email n\'est pas valide';
            }
		}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connexion</title>
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
<body oninit="init('liContact');" onload="init('liContact');">
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
                    <div class="col-4cnnx">
                    	<h2><span class="color-1">Reinitialisation</span> du mot de passe</h2>
                        <form id="form" method="post" >
                            <fieldset>
                              <label><input type="text" name="email" id="email" placeholder="Email"></label>
                                <div class="error">
								    <?php if (isset($error_email))
								        {
								            echo $error_email;
								        }?>
				                </div>  
                             <a class="button" href="#" onClick="document.getElementById('form').submit()"> Reinitialisation</a>  
                            </fieldset>  
                          </form> 
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
        <?php if(isset($actif)){echo $actif;} ?>
														
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>