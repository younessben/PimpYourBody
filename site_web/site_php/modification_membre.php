<?php
session_start();
require_once 'connexion_bdd.php';
require('authentification.php');
include('bibliotheque_fonctions.php');
if (Auth::islog()){
	
}else{
	header('Location:connexion.php');
}
?>

<?php
    if(!empty($_POST))
		{
                $new_email = addslashes($_POST['email']);
                $new_numRue = addslashes($_POST['numRue']);
                $new_nomRue = addslashes($_POST['nomRue']);
                $new_ville = addslashes($_POST['ville']);
                $new_codePostal = addslashes($_POST['codePostal']);
                $new_telephone = addslashes($_POST['telephone']);
                $new_password = sha1($_POST['password']);
			if(strlen($_POST['password'])>7)
            {
            //Mis à jour Password
              $q = array('password'=>$new_password);
              $sql = 'UPDATE utilisateur SET password=:password WHERE email="' . $_SESSION['Auth']['email'] . '"' ;
              $req = $connexion -> prepare ($sql);
              $req->execute($q);
            }
            if(!empty($_POST) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
		    //Mis à jour Email 
              $q = array('email'=>$new_email);
              $sql = 'UPDATE utilisateur SET email=:email WHERE email="' . $_SESSION['Auth']['email'] . '"';
              $req = $connexion -> prepare ($sql);
              $req->execute($q);
              if($new_email!=$_SESSION['Auth']['email'])
			     {
				//Envoi d'un email
				$to = $new_email;
				$sql2 = 'UPDATE utilisateur SET actif="0" WHERE email="' . $new_email . '"';
				$req = $connexion -> prepare ($sql2);
				$req->execute();
				$sujet = 'Modification email';
				$body = 'Merci de cliquer ici pour valider la modification de l email -> 
						<a href="http://localhost/Pimpyourbody/site_web/site_php/activation_inscription.php?email='.$to.'">Modification email</a>';
				$entete = "MIME-Version: 1.0\r\n";
				$entete.="Content-type: text/html; charset=UTF-8\r\n";
				$entete.='From: PIMPYOURBODY ::' . "\r\n";
				'Reply-To: PIMPYOURBODY@localhost.com' . "\r\n";
				'X-Mailer: PHP/' . phpversion();
				mail($to,$sujet,$body,$entete);
                header('Location:mes_informations.php');
			  }
            }
            if(strlen($_POST['ville'])>1)
            {
            //Mis à jour Ville
              $q = array('ville'=>$new_ville);
              $sql = 'UPDATE adresse SET ville=:ville WHERE id_utilisateur="' . $_SESSION['idUtilisateur'] . '"';
              $req = $connexion -> prepare ($sql);
              $req->execute($q);
            }
            if(strlen($_POST['numRue'])>1)
            {
            //Mis à jour N° Rue
              $q = array('numRue'=>$new_numRue);
              $sql = 'UPDATE adresse SET numero_rue=:numRue WHERE id_utilisateur="' . $_SESSION['idUtilisateur'] . '"';
              $req = $connexion -> prepare ($sql);
              $req->execute($q);
            }
            if(strlen($_POST['nomRue'])>1)
            {
            //Mis à jour Nom rue
              $q = array('nomRue'=>$new_nomRue);
              $sql = 'UPDATE adresse SET nom_rue=:nomRue WHERE id_utilisateur="' . $_SESSION['idUtilisateur'] . '"';
              $req = $connexion -> prepare ($sql);
              $req->execute($q);
            }
            if(strlen($_POST['codePostal'])>3)
            {
            //Mis à jour Code Postal
              $q = array('codePostal'=>$new_codePostal);
              $sql = 'UPDATE adresse SET codePostal=:codePostal WHERE id_utilisateur="' . $_SESSION['idUtilisateur'] . '"';
              $req = $connexion -> prepare ($sql);
              $req->execute($q);
            }
            if(strlen($_POST['telephone'])>9)
            {
            //Mis à jour telephone 
              $q = array('telephone'=>$new_telephone);
              $sql = 'UPDATE utilisateur SET telephone=:telephone WHERE email="' . $_SESSION['Auth']['email'] . '"';
              $req = $connexion -> prepare ($sql);
              $req->execute($q);
            }else
			{
					
				if(!empty($_POST) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				{
					$error_email = ' Votre email n\'est pas valide';
				}

			}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modification</title>
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
                    <div class="col-4">
                    	<h2 class="p3"><span class="color-1">Formulaire</span> modification</h2>
                        <form action="modification_membre.php" method="post">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="telephone">Telephone:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Téléphone">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="email">Email:</label>
                                        </div>
                                        <div class="col-ld-3">
				                            <input type="email"  class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <label for="numero_rue" >N° de rue:</label>
                                        </div>
                                        <div class="col-ld-3">
                                        <input type="text" class="form-control" id="numero_rue" name="numRue" placeholder="numero_rue">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <label for="nom_rue" >Nom de rue:</label>
                                        </div>
                                        <div class="col-ld-3">
                                        <input type="text" class="form-control" id="nom_rue" name="nomRue" placeholder="Nom de rue">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="ville" >Ville:</label>
                                        </div>
                                        <div class="col-ld-3">
                                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="code_postal" >Code postal:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" id="code_postal" name="codePostal" placeholder="Code postal">
                                        </div>
                                    </div>
								<br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="password" >Mot de passe:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="password" >Confirmer mot de passe:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Répéter mot de passe">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="button top-6">Appliquer les modifications</button>
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