<?php
require_once 'connexion_bdd.php';
require('authentification.php');
include('bibliotheque_fonctions.php');

?>
<?php
    if(!empty($_POST) && strlen($_POST['prenom'])>2 && strlen($_POST['nom'])>2 && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && strlen($_POST['password'])>7 && $_POST['password']==$_POST['confirm_password'] && strlen($_POST['ville'])>1)
		{
            $nom = addslashes($_POST['nom']);
			$prenom = addslashes($_POST['prenom']);
            $age = intval($_POST['age']);
            $sexe = addslashes($_POST['sexe']);
			$email = addslashes($_POST['email']);
            $numRue = addslashes($_POST['numRue']);
            $nomRue = addslashes($_POST['nomRue']);
            $ville = addslashes($_POST['ville']);
            $codePostal = addslashes($_POST['codePostal']);
            $telephone = addslashes($_POST['telephone']);
			$password = sha1($_POST['password']);
            $confirm_password = sha1($_POST['confirm_password']);
			//$token = sha1(uniqid(rand()));
			//test de l'email pour savoir si il y a déjà un utilisateur avec cet email dans la BDD (eviter les doublons)
			$r=array('email'=>$email);
			$sql2 = 'SELECT * FROM utilisateur WHERE email=:email';
			$req2 = $connexion -> prepare($sql2);
			$req2->execute($r);
			$num_rows=$req2->fetch(PDO::FETCH_NUM);
			echo $num_rows[0];
			if($num_rows>=1){
				echo 'Cet email est déjà utilisé';
			}else
				{
				$q = array('nom'=>$nom, 'prenom'=>$prenom, 'age'=>$age, 'sexe'=>$sexe, 'email'=>$email, 'telephone'=>$telephone, 'password'=>$password);
				$sql = 'INSERT INTO utilisateur (nom, prenom, age, sexe, email, telephone, mot_de_passe) VALUES (:nom, :prenom, :age, :sexe, :email, :telephone, :password)';
				$req = $connexion -> prepare ($sql);
				$req->execute($q);
                
                $lastiduser=recupDernierIdUser($connexion);
                
                $q2 = array('iduser'=>$lastiduser,'numRue'=>$numRue, 'nomRue'=>$nomRue, 'ville'=>$ville, 'codePostal'=>$codePostal);
				$sql2 = 'INSERT INTO adresse (id_utilisateur,numero_rue, nom_rue, ville, code_postal) VALUES (:iduser,:numRue, :nomRue, :ville, :codePostal)';
				$req2 = $connexion -> prepare ($sql2);
				$req2->execute($q2);

				//Envoi d'un email
				$to = $email;
				$sujet = 'Activation de votre compte';
				$body = 'Merci de cliquer ici pour l activation -> 
						<a href="http://localhost/Pimpyourbody/site_web/site_php/activation_inscription.php?email='.$to.'">Activation du compte</a>';
				$entete = "MIME-Version: 1.0\r\n";
				$entete.="Content-type: text/html; charset=UTF-8\r\n";
				$entete.='From: PIMPYOURBODY ::' . "\r\n";
				'Reply-To: Pimpyourbody@localhost.com' . "\r\n";
				'X-Mailer: PHP/' . phpversion();
				mail($to,$sujet,$body,$entete);
                
				header('location:connexion.php');
				}
		}else
			{
				if(!empty($_POST) && strlen ($_POST['prenom'])<2)
				{
					$error_prenom = ' Votre prenom doit comporter au minimum 2 caracteres';
				}
        
                if(!empty($_POST) && strlen ($_POST['nom'])<2)
				{
					$error_nom = ' Votre nom doit comporter au minimum 2 caracteres';
				}
				
                if(!empty($_POST) && strlen ($_POST['telephone'])<10)
				{
					$error_telephone = ' Votre numéro de téléphone est invalide';
				}
        
                if(!empty($_POST) && $_POST['age']<16)
				{
					$error_age = ' Vous devez avoir minimum 16 ans pour vous inscrire à notre site';
				}
        
                if(!empty($_POST) && strlen ($_POST['codePostal'])<5)
				{
					$error_codePostal = ' Votre code postal n\'est pas correcte';
				}
        
                 if(!empty($_POST) && strlen ($_POST['ville'])<2)
				{
					$error_ville = ' Votre ville n\'est pas valide';
				}
        
                if(!empty($_POST) && strlen ($_POST['password'])<8)
				{
					$error_password = ' Votre mot de passe doit contenir au moins 8 caractères';
				}
                
                if(!empty($_POST) && $_POST['password']!=$_POST['confirm_password'])
				{
					$error_confirmpass= ' Le mot de passe ne correspond pas';
				}
        
				if(!empty($_POST) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				{
					$error_email = ' Votre email n\'est pas valide';
				}

			}		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    
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
<body >
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
                    	<h2 class="p3"><span class="color-1">Formulaire</span> inscription</h2>
                        <form action="inscription.php" method="post">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="prenom">Prenom:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" label="prenom" id="prenom" name="prenom" placeholder="Prenom" />
                                        </div>
                                        <div class="error">
                                            <?php if (isset($error_prenom)){echo $error_prenom;} ?>
								        </div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="nom" >Nom:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" />
                                        </div>
                                        <div class="error">
                                            <?php if (isset($error_nom)){echo $error_nom;} ?>
								        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="Sexe">Sexe:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="radio" name="sexe" value="H"> Homme
                                            <input type="radio" name="sexe" value="F"> Femme
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="age">Age:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="number" class="form-control" id="age" name="age" placeholder="age">
                                        </div>
                                        <div class="error">
                                            <?php if (isset($error_age)){echo $error_age;} ?>
								        </div>
                                    </div>
                                    <br>
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
                                        <div class="error">
                                            <?php if (isset($error_email)){echo $error_email;} ?>
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
                                        <div class="error">
                                            <?php if (isset($error_ville)){echo $error_ville;} ?>
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
                                        <div class="error">
                                            <?php if (isset($error_codePostal)){echo $error_codePostal;} ?>
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
                                    <br>
                                    <button type="submit" class="button top-6"> Finir inscription</button>
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