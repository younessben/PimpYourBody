

<header>
        <h1><a href="accueil.php">Pimp<strong>Your Body</strong></a></h1>
        <nav>
        	<div class="social-icons">
                <?php
                    if (Auth::islog()){
                        echo
                        '
                        <a href="deconnexion.php"><span class="glyphicon glyphicon-off"></span>Déconnexion</a>
                        ';
                    }
                
                ?>
                
                
                
                
                
            	
                
            </div>
            <div class="social-icons">
                <a href="panier.php"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge">3</span></a>
                <a href="connexion.php"><span class="glyphicon glyphicon-user"></span>Mon compte</a>
            </div>
            
           
            
            <ul class="menu">
                
                
                <?php   
                   
                    
                    if (Auth::islog()){
                        echo
                        '
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="mon_objectif.php">Mon objectif</a></li>
                            <li><a href="mes_performances.php">Mes performances</a></li>
                            <li><a href="mes_progres.php">Mes progres</a></li>
                            <li><a href="mes_commandes.php">Mes commandes</a></li>
                            <li><a href="mes_informations.php">Mes informations</a></li>
                          </ul>
                        </li>
                        ';
                    }else{
                        echo '<li id="liAccueil"><a href="accueil.php">Accueil</a></li>';
                    }
                
                ?>
                
                
                
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Boutique <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="machines.php">Machines</a></li>
                    <li><a href="poids_libres.php">Poids libres</a></li>
                    <li><a href="complements_alimentaires.php">Complements alimentaires</a></li>
                  </ul>
                </li>
                <li id="liEntrainement"><a href="entrainement.php">Entrainement</a></li>
                
                
                <?php   
                   
                    
                    if (Auth::islog()){
                        echo
                        '
                            <li id="liNutrition"><a href="detail_nutrition.php">Nutrition</a></li>
                        
                        ';
                    }else{
                        echo '<li id="liNutrition"><a href="nutrition.php">Nutrition</a></li>';
                    }
                
                ?>
                
                <li id="liContact"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
</header>
