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
        <?php include('header_mon_compte.inc.php'); ?>
    </header> 
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="box-shadow">
              <div class="wrap block-2">
                    
                    <div id="divTitle">
                      <h2 class="p3"><span class="color-1">Mes</span> performances</h2>
                        
                        <div id="divContent">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Poids</th>
                                    <th>Taille</th>
                                    <th>Bras</th>
                                    <th>Epaules</th>
                                    <th>Poitrines</th>
                                    <th>Cuisses</th>
                                    <th>Tour de Taille</th>
                                    <th>Masse graisseuse</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row"><a href="#">Modifier</a></th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row"><a href="#">Modifier</a></th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row"><a href="#">Modifier</a></th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                              </tbody>
                            </table>
                            
                        </div>
                        
                        <form>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="date">Date:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" label="date" id="date" name="date" placeholder="JJ/MM/AAAA" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="poids" >Poids:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" id="poids" name="poids" placeholder="75 kg" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="taille">Taille:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" id="taille" name="taille" placeholder="180 cm">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="bras">Bras:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" id="bras" name="bras" placeholder="40 cm">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="epaules">Epaules:</label>
                                        </div>
                                        <div class="col-ld-3">
				                            <input type="email"  class="form-control" id="epaules" name="epaules" placeholder="100 cm">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <label for="poitrine" >Poitrine:</label>
                                        </div>
                                        <div class="col-ld-3">
                                        <input type="text" class="form-control" id="poitrine" name="poitrine" placeholder="80 cm">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <label for="cuisse" >Cuisse:</label>
                                        </div>
                                        <div class="col-ld-3">
                                        <input type="text" class="form-control" id="cuisse" name="cuisse" placeholder="50 cm">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="trtaille" >Tour de taille:</label>
                                        </div>
                                        <div class="col-ld-3">
                                        <input type="text" class="form-control" id="trtaille" name="trtaille" placeholder="70 cm">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="masseGraisse" >Masse graisseuse:</label>
                                        </div>
                                        <div class="col-ld-3">
                                            <input type="text" class="form-control" id="masseGraisse" name="masseGraisse" placeholder="17.5 %">
                                        </div>
                                    </div>
								<br>
                                    
                                    <br>
						        <a href="#" class="button top-6">Ajouter une performance</a>
                                    
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
        <p>© 2012 Fitness Club</p>
        <p>Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a></p>
    </footer> 
</div>    
<script>
  Cufon.now();
</script>
</body>
</html>

