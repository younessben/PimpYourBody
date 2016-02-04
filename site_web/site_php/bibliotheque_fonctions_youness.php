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
        $req="  SELECT * FROM `programme_entrainement` pe
                 inner join `details_exercice` de
                 on de.`ID_PROG_ENTR`= pe.`ID_PROG_ENTR`
                 inner join exercice ex
                  on de.`ID_EXERCICE`= ex.`ID_EXERCICE`
                     WHERE pe.ID_PROG_ENTR = ".$IdProg.";";

    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['NOM_EXERCICE'],$donnees['DESC_EXERCICE'],$donnees['CHEMIN_IMG_EX'],$donnees['ID_EXERCICE'],$donnees['CHEMIN_IMG_DEMO']));
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
        $req="  SELECT * FROM `programme_nutrition` natural join `utilisateur`
                     WHERE ID_UTILISATEUR = ".$id.";";
    

    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['NOM_PROGN'],$donnees['DUREE_PROGN'],$donnees['PETIT_DEJ'],$donnees['COL_MATIN'],$donnees['DEJEUNER'],$donnees['COL_AM'],$donnees['DINER'],$donnees['COL_SOIR'],$donnees['DESC_PROGN']));
        }
    }
   
    return $liste;
}


function affichageNutrition($cnn,$nutrition) // affiche le titre 
{
    echo 
        '
            <h2 class="p3"><span class="color-1">Programme de nutrition : '.$nutrition[0].'</span></h2>
                        <p class="p5">'.$nutrition[8].'</p>
                        <div class="wrap box-1">
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
function listerProgrammes($cnn)
{
        $req="  SELECT * FROM `programme_entrainement`;";
    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['ID_PROG_ENTR'],$donnees['NOM_PROGE'],$donnees['DESC_PROGE'],$donnees['CHEMIN_IMG_PRG']));
        }
    }
   
    return $liste;
}

function affichageProgrammes($cnn,$programme) // affiche le titre 
{
    echo 
        '
            <div class="wrap box-1">
        ';
            if($programme[3] == null)
            {
                echo '<img src="images/img_vide.jpg" alt="" class="img-border img-indent">';
            }
            else
                echo '<img src="'.$programme[3].'" alt="" class="img-border img-indent">';

            echo'
                                <div class="extra-wrap">
                                    <p class="p2"><strong>'.$programme[1].'</strong></p>
                                    <p>'.$programme[2].'</p>
                                     <a href="traitement_choix_prog.php?idProgramme='.$programme[0].'" class="button top-6">Suivre le programme</a>
                                     
                                </div>
                            </div>
                            <br/>
        ';
}


function listerConseils($cnn,$id,$IdProg)
{
        $req="  SELECT * FROM `programme_entrainement` natural join `exercice`
                     WHERE ID_PROG_ENTR = ".$IdProg.";";
    $reponse= $cnn->prepare($req);
   
    
    $liste =array();
    if($reponse->execute())
    {
         while ($donnees = $reponse->fetch())
        {
            array_push($liste, array($donnees['NOM_EXERCICE'],$donnees['DESC_EXERCICE'],$donnees['CHEMIN_IMG_EX'],$donnees['ID_EXERCICE'],$donnees['CHEMIN_IMG_DEMO']));
        }
    }
   
    return $liste;
}


function affichageConseils($cnn,$conseils) // affiche le titre 
{
    
    echo'
    <div class="col-2">
    
     <h2 class="p6"><span class="color-1">Conseils</span> Exercice</h2>
    ';      
                    if($conseils[4] == null)
                    {
                        echo '<img src="images/img_vide.jpg" alt="" class="img-border">';
                    }
                    else
                echo '<img src="'.$conseils[4].'" alt="" class="img-border">';
    echo'
                        <p class="p2 top-6"><strong>Conseil 1</strong></p>
                        <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>

                        <p class="p2 top-6"><strong>Conseil 2</strong></p>
                        <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>

                        <p class="p2 top-6"><strong>Conseil 3</strong></p>
                        <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>
                        
                    </div>
    ';
}


function choixProgramme($cnn,$idProg)
{
     if($idProg == 1)
     {
            $req="    
               UPDATE utilisateur
               SET  ID_PROG_ENTR = :idProg
	               ,ID_PROG_NUTR = '1'
                WHERE ID_UTILISATEUR = :idUtilisateur;";
     }
     else {
             if($idProg == 2)
             {
            $req="    
               UPDATE utilisateur
               SET  ID_PROG_ENTR = :idProg
	               ,ID_PROG_NUTR = '2'
                WHERE ID_UTILISATEUR = :idUtilisateur;";
             }
             else
             {
                  if($idProg == 3)
                  {
                  $req="    
                   UPDATE utilisateur
                   SET  ID_PROG_ENTR = :idProg
                       ,ID_PROG_NUTR = '3'
                    WHERE ID_UTILISATEUR = :idUtilisateur;";
                    }
                    else
                    {
                            $req="    
                               UPDATE utilisateur
                               SET  ID_PROG_ENTR = :idProg
                                   ,ID_PROG_NUTR = '4'
                                WHERE ID_UTILISATEUR = :idUtilisateur;";
                    }
             }  
     }
    $stmt = $cnn->prepare($req);
    $stmt->bindParam(':idProg', $idProg);
    $stmt->bindParam(':idUtilisateur', $_SESSION['idUtilisateur']);

    $stmt->execute();
}


function recupIdProgEn($cnn,$idUtil)
{
    
    

    $req="  
        SELECT ID_PROG_ENTR
        FROM `utilisateur`
        WHERE `ID_UTILISATEUR`=".$idUtil.";";
        
    $reponse= $cnn->prepare($req);
    $reponse->execute();
    $donnees = $reponse->fetch();
    
    return $donnees[0]; 
    
    
}