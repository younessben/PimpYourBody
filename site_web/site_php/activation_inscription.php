<?php
    require_once 'connexion_bdd.php';
    require('authentification.php');
include('bibliotheque_fonctions.php');
?>

<?php
    //$token = $_GET['token']; //On récupère le token passé dans le lien avec GET
    $email = $_GET['email']; //On récupère l'email passé dans le lien avec GET

    if (!empty ($_GET)){
        $q = array ('email'=>$email);
        $sql='SELECT email FROM utilisateur WHERE email = :email';
        $req = $connexion->prepare($sql);
        $req->execute($q);
        $count = $req -> rowCount($sql);
        if ($count == 1){
            $verif = array('email'=>$email,'actif'=>'1');
            //Verification si le compte est activé
            $sql = 'SELECT email,actif FROM utilisateur WHERE email = :email AND actif = :actif';
            $req = $connexion->prepare($sql);
            $req->execute($verif);
            $dejaactif = $req->rowCount($sql);
            if($dejaactif == 1){
                $error_actif='Compte deja actif';
            }else{
                $u = array('email'=>$email,'actif'=>'1');
                $sql = 'UPDATE utilisateur SET actif = :actif WHERE email = :email';
                $req = $connexion->prepare($sql);
                $req->execute($u);
                $activated='Votre compte vient d\'etre active';

            }
        }else{
            $prob_token = 'Erreur de paramètre dans l\'activation du compte';

        }
    }else{
        header('Location:mes_informations.php');
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
                    	<h2><span class="color-1">Activation</span> compte client</h2>
                        <div class="error"><?php if (isset($error_actif)){echo $error_actif;} ?></div> <!-- Affiche compte déjà actif si le compte est a déjà été activé-->
                        <div class="error"><?php if (isset($activated)){echo $activated;} ?></div><!-- Votre compte a bien été activé       (colonne actif à OUI dans la BDD)-->   
                        
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