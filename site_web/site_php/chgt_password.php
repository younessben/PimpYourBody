<?php
require_once 'connexion_bdd.php';
require('authentification.php');
include('bibliotheque_fonctions.php');
?>


<?php
            $email = $_GET['email'];
       
            if(!empty ($_POST['new_password']))
                {
                    if($_POST['new_password']=$_POST['confirm_password'])
                    {
                        $new_password = sha1($_POST['new_password']);//On crypte le mot de passe pour ne pas l'avoir en clair dans la BDD
                        //Mis à jour Password
                        $q = array('new_password'=>$new_password,'email'=>$email);
                        $sql = 'UPDATE utilisateur SET password=:new_password WHERE email=:email' ;
                        $req = $connexion -> prepare ($sql);
                        $req->execute($q);
                        header('Location:connexion.php');
                    }elseif($_POST['new_password']!=$_POST['confirm_password'])
                        {
                            $error_password="Il faut correctement rentrer le mot de passe dans les 2 champs"; 
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
                              <div class="row">
                                        <div class="col-sm-3">
                                            <label for="password" >Nouveau mot de passe:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="password" class="form-control" id="password" name="new_password" placeholder="Mot de passe">
                                        </div>
                                        <div class="error">
                                            <?php if (isset($error_password)){echo $error_password;} ?>
								        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="password" >Confirmer mot de passe:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="password" class="form-control" id="password" name="confirm_password" placeholder="Répéter mot de passe">
                                        </div>
                                        <div class="error">
                                            <?php if (isset($error_confirmpass)){echo $error_confirmpass;} ?>
								        </div>
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
        <?php include('footer.inc.php'); ?> 											
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>