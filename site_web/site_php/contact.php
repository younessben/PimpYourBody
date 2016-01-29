<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
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
<body oninit="init('liContact');" onload="init('liContact');">
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
                    <div class="col-3">
                    	<h2><span class="color-1">Nos</span> coordonnées</h2>
                        <div class="map img-border">
                          
                          <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="700" height="440" src="https://maps.google.com/maps?hl=fr&q=12 Rue Thierry Mieg, Rue Edouard Branly, 90000 Belfort&ie=UTF8&t=m&z=10&iwloc=B&output=embed"><div><small></iframe>


                        </div>
                        <br/>
                        <dl>
                           
                            <dt class="color-1"><strong>12 Rue Thierry Mieg, Rue Edouard Branly,<br>90000 Belfort</strong></dt>
                            <dd><span>Telephone:</span>03 00 00 00 00</dd>
                            <dd><span>Fax:</span>03 00 00 00 01</dd>
                            <dd><span>E-mail:</span><a href="#" class="link">mail@utbm.fr</a></dd>
                        </dl>
                    </div>
                    <div class="col-4">
                    	<h2><span class="color-1">Formulaire</span> de contact</h2>
                        <form id="form" method="post" >
                            <fieldset>
                              <label><input type="text" value="Name" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Name' ) this.value=''"></label>
                              <label><input type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''"></label>
                              <select width="100%">
                                    <option value="1">azertyuiopqsdfghjklmwxcvbn,</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                  </select>
                                  
                              
                              <label><textarea onBlur="if(this.value==''){this.value='Message'}" onFocus="if(this.value=='Message'){this.value=''}">Message</textarea></label>
                              <div class="btns"><a href="#" class="button" onClick="document.getElementById('form').submit()">Envoyer</a></div>
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