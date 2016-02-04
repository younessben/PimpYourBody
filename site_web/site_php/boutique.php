<?php
    session_start();
    require('authentification.php');
include('bibliotheque_fonctions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boutique</title>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
    
    
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
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
<body oninit="init('liBoutique');" onload="init('liBoutique');">
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
                    <ul class="nav nav-pills nav-stacked col-3">
                      <li><br/></li> <!-- On met un espace afin de décaler le menu vers le bas  -->
                      <li id="liMachines" role="presentation" class="active" onclick="menuBoutique('liMachines','machines')"><a href="#">Machines</a></li>
                      <li id="liPL" role="presentation" onclick="menuBoutique('liPL','poids libres')"><a href="#">Poids libres</a></li>
                      <li id="liCA" role="presentation" onclick="menuBoutique('liCA','compléments alimentaires')"><a href="#">Compléments alimentaires</a></li>
                    </ul>
                    <div class="col-4" id="divTitle">
                      <h2 class="p3"><span class="color-1">Nos</span> machines</h2>
                        
                        <?php
                            $liste=listerProduits($connexion);
                            if(empty($liste)==true)
                            {
                                echo '<p>Il n\'y a aucun produit pour le moment</p>';
                            }
                            else
                            {
                                foreach ($liste as $produit) 
                                {
                                    
                                    affichageArticle($connexion,$produit);
                                }
                            }


                        ?>		
                        
                        
                        
                        
                        
                        <div class="wrap box-1 top-4"> <!-- top-4 laisse un grand espace entre la div courante et l'élément du dessus' -->
                            <img src="images/page2-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Duis autem vel eum iriure dolor</strong></p>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex sgzgz zet </p>
                                
                                <p style="color:red; font-weight:bold;">Prix: 150€ <button type="button" class="btn btn-primary" style="margin-left:42%" >Ajouter au panier</button></p>
                                <a href="produit.php" style="margin-left:67%">Plus de détails >></a>
                               
                            </div>
                        </div>
                        
                        
                        <div class="wrap box-1 top-2"> <!-- top-4 laisse un grand espace entre la div courante et l'élément du dessus' -->
                            <img src="images/page2-img2.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Duis autem vel eum iriure dolor</strong></p>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex sgzgz zet </p>
                                
                                <p style="color:red; font-weight:bold;">Prix: 150€ <button type="button" class="btn btn-primary" style="margin-left:42%" >Ajouter au panier</button></p>
                                <a href="produit.php" style="margin-left:67%">Plus de détails >></a>
                               
                            </div>
                        </div>
                        <div class="wrap box-1 top-2"> <!-- top-4 laisse un grand espace entre la div courante et l'élément du dessus' -->
                            <img src="images/page2-img2.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Duis autem vel eum iriure dolor</strong></p>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex sgzgz zet </p>
                                
                                <p style="color:red; font-weight:bold;">Prix: 150€ <button type="button" class="btn btn-primary" style="margin-left:42%" >Ajouter au panier</button></p>
                                <a href="produit.php" style="margin-left:67%">Plus de détails >></a>
                               
                            </div>
                        </div>
                        <div class="wrap box-1 top-2"> <!-- top-4 laisse un grand espace entre la div courante et l'élément du dessus' -->
                            <img src="images/page2-img2.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Duis autem vel eum iriure dolor</strong></p>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex sgzgz zet </p>
                                
                                <p style="color:red; font-weight:bold;">Prix: 150€ <button type="button" class="btn btn-primary" style="margin-left:42%" >Ajouter au panier</button></p>
                                <a href="produit.php" style="margin-left:67%">Plus de détails >></a>
                               
                            </div>
                        </div>

                        
                        
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
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

<?php


function listerProduits($cnn)
{
    
    $req="  SELECT `NOM_PDT`, `PRIX`, `CHEMIN_IMG_PDT`, `STOCK`, `DESC_PDT`, `LIEN_EXERCICE` 
            FROM `produit`
            WHERE `ID_CATEGORIE` = 1;";
    $reponse= $cnn->prepare($req);
    
    $liste =array();
    while ($donnees = $reponse->fetch())
    {
        array_push($liste, array($donnees['NOM_PDT'],$donnees['PRIX'],$donnees['CHEMIN_IMG_PDT'],$donnees['STOCK'],$donnees['DESC_PDT'],$donnees['LIEN_EXERCICE']));
    }
    return $liste;
}


function affichageProduit($cnn,$produit) // affiche le titre 
	{
        echo 
            '
                <div class="wrap box-1 top-4"> 
                    <img src="images/page2-img1.jpg" alt="" class="img-border img-indent">
                    <div class="extra-wrap">
                        <p class="p2"><strong>'.$produit['NOM_PDT'].'</strong></p>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex sgzgz zet </p>

                        <p style="color:red; font-weight:bold;">Prix: 150€ <button type="button" class="btn btn-primary" style="margin-left:42%" >Ajouter au panier</button></p>
                        <a href="produit.php" style="margin-left:67%">Plus de détails >></a>

                    </div>
                </div>

            ';
		
		echo
		'
			<div>
				<img src="'.$logo.'" alt="Logo" width=70px height=70px/>
				<h2>'.$article[1].'</h1>
				<h3>'.$article[3].'</h3>
				<p>'.substr($article[2], 0, 300).'</p>
				<a href="creationArticle.php?idArticle='.$article[0].'">Lire la suite...</a><br/>
				<input type="button" value="Modifier"/>
				<input type="button" value="Déplacer"/>
				<form action="suppressionArticle.php" method="post">
					<button name="Supprimer" type="submit" value="'.$article[0].'">Supprimer</button>
				</form>
				
				
			</div>
		
		';
		
	}

?>
