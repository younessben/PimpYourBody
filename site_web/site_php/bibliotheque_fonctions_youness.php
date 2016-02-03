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
function listerExercices($cnn,$id,$IdProg)
{
        $req="  SELECT * FROM `programme_entrainement` natural join `exercice`
                     WHERE ID_PROG_ENTR = '$IdProg';";
    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['NOM_EXERCICE'],$donnees['DESC_EXERCICE'],$donnees['CHEMIN_IMG_EX'],$donnees['ID_EXERCICE']));
        }
    }
   
    return $liste;
}

// Fonction appelé dans les pages: machines.php; poids_libres.php; complementd_alimentaires.php
// Affiche les informations sur le produit passé en paramètre dans les pages concernées
function affichageExercices($cnn,$exercice) // affiche le titre 
{
    echo 
        '
            <div class="wrap box-1 top-4"> 
        ';
            if($exercice[2] == null)
            {
                echo '<img src="images/img_vide.jpg" alt="" class="img-border img-indent">';
            }
            else
                echo '<img src="'.$exercice[2].'" alt="" class="img-border img-indent">';

            echo'
                 <div class="wrap box-1">
                            <div class="extra-wrap">
                                <p class="p2"><strong>'.$exercice[0].'</strong></p>
                                <p>'.$exercice[1].'</p>
                                <a href="detail_exercice.php?idExercice='.$exercice[3].'" class="button top-6">Faire exercice</a>
                            </div>
               </div>
            </div>

        ';
}

function programmeNutrition($cnn,$id,$IdProgN)
{
        $req="  SELECT * FROM `programme_nutrition`
                     WHERE ID_PROG_NUTR = '$IdProgN';";
    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['NOM_PROGN'],$donnees['DUREE_PROGN'],$donnees['PETIT_DEJ'],$donnees['COL_MATIN'],$donnees['DEJEUNER'],$donnees['COL_AM'],$donnees['DINER'],$donnees['COL_SOIR']));
        }
    }
   
    return $liste;
}


function affichageNutrition($cnn,$nutrition) // affiche le titre 
{
    echo 
        '
            <div class="wrap box-1 top-4"> 
        ';
            echo'
                 <div class="extra-wrap">
                                <h5 class="p3"><span class="color-5">Repas / Collation MATIN </span></h5>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th style="width:10%;">Petit Dejeuner</th>
                                        <th style="width:10%;">Collation matin</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>'.$nutrition[2].'</td>
                                        <td>'.$nutrition[3].'</td>
                                      </tr>
                                    </tbody>
                                </table>  
                                <h5 class="p3"><span  class="color-5">Repas / Collation MIDI & AM </span></h5>
                                 <table class="table">
                                    <thead>
                                      <tr>
                                        <th style="width:10%;">Dejeuner</th>
                                        <th style="width:10%;">Collation apres midi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>'.$nutrition[4].'</td>
                                        <td>'.$nutrition[5].'</td>
                                      </tr>
                                    </tbody>
                                </table>  
                                <h5 class="p3"><span class="color-5">Repas / Collation SOIR </span></h5>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th style="width:10%;"> Dîner</th>
                                        <th style="width:10%;">Collation soir</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>'.$nutrition[6].'</td>
                                        <td>'.$nutrition[7].'</td>
                                      </tr>
                                    </tbody>
                                </table>  
                            </div>
            </div>

        ';
}
