<?php



/*
ID_PRODUIT          -> 0
NOM_PDT             -> 1
DESC_PDT            -> 2
PRIX                -> 3
CHEMIN_IMG_PDT      -> 4
STOCK               -> 5
LIEN_EXERCICE       -> 6
MUSCLE_CONCERNE     -> 7
*/







// Fonction appelé dans les pages: machines.php; poids_libres.php; complementd_alimentaires.php
// Liste tous les produits en fonction de la catégorie : 1 --> Machines ; 2 --> Poids libres ; 3 --> Complements alimentaires
// Apres avoir lister tous les produits, les ajoute dans un tableau puis renvoie le tableau
function listerProduits($cnn,$id)
{
    
    
    $req="  SELECT *
            FROM `produit`
            WHERE `ID_CATEGORIE` = ".$id.";";
    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['ID_PRODUIT'],$donnees['NOM_PDT'],$donnees['DESC_PDT'],$donnees['PRIX'],$donnees['CHEMIN_IMG_PDT'],$donnees['STOCK'],$donnees['LIEN_EXERCICE']));
        }
       
        
    }
   
    return $liste;
}

// Fonction appelé dans les pages: machines.php; poids_libres.php; complementd_alimentaires.php
// Affiche les informations sur le produit passé en paramètre dans les pages concernées
function affichageProduit($cnn,$produit) // affiche le titre 
{
    echo 
        '
            <div class="wrap box-1 top-4"> 
        ';
            if($produit[4] == null)
            {
                echo '<img src="images/img_vide.jpg" alt="" class="img-border img-indent">';
            }
            else
                echo '<img src="'.$produit[4].'" alt="" class="img-border img-indent">';

            echo'
                <div class="row">
                    <div class="col-md-4">

                        <p class="p2"><strong>'.$produit[1].'</strong></p>
                        <p>'.$produit[2].' </p>

                        <p style="color:red; font-weight:bold; width:5px;">Prix: '.$produit[3].'€ </p>
                    </div>
                    <div class="col-md-3">
                        <br/><br/><br/><br/>
                        <button type="button" class="btn btn-primary" >Ajouter au panier</button><br/>
                        <a href="produit.php?idProduit='.$produit[0].'" > Plus de détails >></a>
                    </div>


                </div>
            </div>

        ';


}


function listerDetailsProduit($cnn, $idProduit)
{
    $req="  SELECT *
            FROM `produit`
            WHERE `ID_PRODUIT` = ".$idProduit.";";
    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['ID_PRODUIT'],$donnees['NOM_PDT'],$donnees['DESC_PDT'],$donnees['PRIX'],$donnees['CHEMIN_IMG_PDT'],$donnees['STOCK'],$donnees['LIEN_EXERCICE'],$donnees['MUSCLE_CONCERNE']  ));
        }
       
        
    }
   
    return $liste;
}

function afficheDetailsProduit($cnn,$produit)
{
    
    /*
    ID_PRODUIT          -> 0
    NOM_PDT             -> 1
    DESC_PDT            -> 2
    PRIX                -> 3
    CHEMIN_IMG_PDT      -> 4
    STOCK               -> 5
    LIEN_EXERCICE       -> 6
    */
    echo
        '
            <div class="col-1">
                <h2 class="p3"><span class="color-1">'.$produit[1].' </span></h2>
                <p class="p5">Description du produit : '.$produit[2].'</p>
                <div class="wrap box-1">';

                if($produit[4] == null)
                    echo '<img src="images/img_vide.jpg" alt="" class="img-border img-indent">';
                else
                    echo'<img src="'.$produit[4].'" alt="" class="img-border img-indent">';
                   
    
                echo'
                    <div class="extra-wrap">

                        <form>
                          <div class="form-group">
                            <p><strong>Prix unitaire</strong></p>
                            <p style="color:red; font-weight:bold;">'.$produit[3].'€</p>

                          </div>
                          <div class="form-group">
                            <label for="qteTxt">Quantité</label>
                            <input type="text" class="form-control" id="qteTxt" placeholder="1">
                          </div>
                          <div class="form-group">
                            <p><strong>Prix total</strong></p>
                            <p style="color:red; font-weight:bold;">'.$produit[3].'€</p>

                          </div>
                        </form>




                        <a href="#" class="button top-6">Ajouter au panier</a>
                    </div>



                </div>

            </div>
            <div class="col-2">
                <h2 class="p6"><span class="color-1">Conseils</span> d\'utilisation</h2>';
                
                if($produit[7] == null)
                    echo '<img src="images/img_vide.jpg" alt="" class="img-border img-indent">';
                else
                    echo'<img src="'.$produit[7].'" alt="" class="img-border">';
                    
                echo'    
                <p class="p2 top-6"><strong>Lien:</strong></p>';
                    
                if($produit[6] == null)
                    echo '<p>Nous sommes désolés, nous n\'avons pas de lien pour le moment.</p>';
                else
                    echo' <a href="'.$produit[6].'">'.$produit[6].'</a>';
                    
                    
            echo'

                

            </div>
        ';
}

/*
function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return (bool)($d && $d->format($format) == $date);
}
*/


function listerPerformances($cnn,$id)
{
    
    
    $req="  SELECT *
            FROM `performances`
            WHERE `ID_UTILISATEUR` = ".$id.";";

    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste,array($donnees['ID_PERFORMANCE'],$donnees['ID_UTILISATEUR'],$donnees['POIDS'],$donnees['TAILLE'],$donnees['BRAS']
                                    ,$donnees['EPAULES'],$donnees['POITRINES'],$donnees['CUISSES'],$donnees['TOUR_TAILLE'],$donnees['DATE_SAISIE'],$donnees['MASSE_GRAISSEUSE']));
        }
       
        
    }
   
    return $liste;
}


function affichagePerformance($cnn,$perf) // affiche le titre 
{
    
    
    echo'
            <tr>
              <th scope="row"><a href="#">Modifier</a></th>
              <td>'.$perf[9].'</td>
              <td>'.$perf[2].'</td>
              <td>'.$perf[3].'</td>
              <td>'.$perf[4].'</td>
              <td>'.$perf[5].'</td>
              <td>'.$perf[6].'</td>
              <td>'.$perf[7].'</td>
              <td>'.$perf[8].'</td>
              <td>'.$perf[10].'</td>
            </tr>
            
    ';


}








?>