
<?php
    session_start();
    require('authentification.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mes performances</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    
    
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
    <script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    
    
    <script src="js/myscript.js"></script>
    
    
    
     
    <!--==============================Inclusion du code js pour les graphiques =================================-->
    
    <!--========================================================================================================-->
    
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
<body>

<div class="main">
  <div class="bg-img"></div>
<!--==============================header=================================-->
    <header id="header">
        <?php include('header.inc.php'); ?>
    </header> 
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="box-shadow">
              <div class="wrap block-2">
                    
                    <div id="divTitle">
                      <h2 class="p3"><span class="color-1">Mes</span> commandes</h2>
                    </div>
                        
                        <div id="divContent">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                    <th>Suivi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <th scope="row"><a href="#">Suivre ma commande</a></th>
                                  
                                </tr>
                                <tr>
                                  
                                  
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <th scope="row"><a href="#">Suivre ma commande</a></th>
                                  
                                </tr>
                              </tbody>
                            </table>
                            
                        
                        
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
                            
                            
                        <h2 class="p3"><span class="color-1">Mes</span> anciennnes commandes</h2>
                        <table class="table table-hover">
                              <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                  
                                </tr>
                                <tr>
                                  
                                  
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                  
                                </tr>
                              </tbody>
                            </table>
                            
                        
                        
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
        <p>© 2012 Fitness Club</p>
        <p>Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a></p>
    </footer> 
</div>    
<script>
  Cufon.now();
</script>
</body>
</html>



