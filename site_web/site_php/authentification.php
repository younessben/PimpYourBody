<?php
require_once 'connexion_bdd.php';
?>

<?php
//Page/fonction permettant de gérer la connexion des utilisateurs (islog)
class Auth{
	static function islog(){
		global $connexion; 	//On récupère la connexion à la base de donnée du fichier connexion.php(global)
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['email']) && isset($_SESSION['Auth']['password'])){
			$q=array('email'=>$_SESSION['Auth']['email'],'password'=>$_SESSION['Auth']['password']);
			$sql = 'SELECT email,mot_de_passe FROM utilisateur WHERE email = :email AND mot_de_passe = :password';
            $req = $connexion->prepare($sql);
            $req->execute($q);
            $count = $req->rowCount($sql);
            	if($count == 1){
            		return true;
				}else{
					return false;
				}
		}else{
		return false;
		}
	}
}


?>