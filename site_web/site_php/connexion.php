<?php
session_start();
require_once 'connexion_bdd.php';
require('authentification.php');
include('bibliotheque_fonctions.php');
if (Auth::islog()){
	header('Location:mes_informations.php');
}
?>

<?php
    if(!empty($_POST))
		{
			$email=$_POST['email'];
			$password=sha1($_POST['password']);
			$q = array('email'=>$email,'password'=>$password);
			$sql = 'SELECT email,mot_de_passe FROM utilisateur WHERE email = :email AND mot_de_passe = :password';
			$req = $connexion->prepare($sql);
			$req->execute($q);
			$count = $req -> rowCount($sql);
				if ($count == 1)
					{
					$sql = 'SELECT email,actif FROM utilisateur WHERE email = :email AND mot_de_passe = :password AND actif = 1';
					$req = $connexion->prepare($sql);
					$req->execute($q);
					$dejaactif = $req->rowCount($sql);
						if($dejaactif==1)
						{
							$_SESSION['Auth'] = array(
								'email'=> $email,
								'password'=>$password);
                                    $sql = 'SELECT ID_UTILISATEUR FROM utilisateur WHERE email like :email ';
                                    $req = $connexion->prepare($sql);
                                    $req->bindParam(':email', $email);
                                    $req->execute();
                                    $donnee = $req->fetch();
                                    
                            $_SESSION['idUtilisateur']=$donnee[0];
                            
							header('Location:mes_informations.php');
						}else
							{
								$actif ='Votre compte n\'a pas encore ete active';
							}
					}else
						{
							$error_utilisateur='Utilisateur inconnu';
						}
		}
		if(isset($actif))
			{
				echo $actif;
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
                    	<h2><span class="color-1">Connexion</span> client</h2>
                        <form id="form" method="post" >
                            <fieldset>
                              <label><input type="text" name="email" id="email" placeholder="Email"></label>
                                <div class="error">
								    <?php if (isset($error_utilisateur))
								        {
								            echo $error_utilisateur;
								        }?>
				                </div>
                              <label><input type="password" id="password" name="password" placeholder="Password"></label>
                              
                              <div class="passwordmissing"><a href="reinit_password.php">Mot de passe oublié ?</a></div>
                                <a class="button" href="#" onClick="document.getElementById('form').submit()"> Se connecter</a>
                            <?php if(isset($actif)){echo $actif;} ?>
                                
                            </fieldset>  
                          </form> 
                    </div>
                    <div class="col-4inscr">
                    	<h2><span class="color-1">Nouveau </span> client?</h2>
                        
                            <div class="inscript">
                                  <a href="inscription.php" class="button" onClick="document.getElementById('form').submit()">S'inscrire</a>
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
        <?php include('footer.inc.php'); ?> 
														
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>