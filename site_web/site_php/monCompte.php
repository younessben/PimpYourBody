<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mon compte</title>
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
${demo.css}
    </style>
    <script type="text/javascript">
$(function () {
    $('#containerLine').highcharts({
        title: {
            text: 'Mesures',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Mesures en cm'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Bras',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Poitrine',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Cuisse',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'Tour de taille',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});
        
        
$(function () {
    $('#containerColumn').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Evolution du poids'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Poids'
        },
        series: [{
            name: 'Population',
            data: [
                ['Janvier', 23.7],
                ['Février', 16.1],
                ['Mars', 14.2],
                ['Avril', 14.0],
                ['Mai', 12.5],
                ['Juin', 12.1],
                ['Juillet', 11.8],
                ['Aout', 11.7],
                ['Septembre', 11.1],
                ['Octobre', 11.1],
                ['Novembre', 10.5],
                ['Décembre', 10.4],
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
    </script>
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div class="main">
  <div class="bg-img"></div>
<!--==============================header=================================-->
    <?php include('headerMonCompte.inc.php'); ?> 
<!--==============================content================================-->
    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="box-shadow">
              <div class="wrap block-2">
                    <ul class="nav nav-pills nav-stacked col-3">
                        <li><br/></li> <!-- On met un espace afin de décaler le menu vers le bas  -->
                        <li id="liPerformances" role="presentation" onclick="menuMonCompte('liPerformances','performances')"><a href="#">Mes performances</a></li>  
                        <li id="liProgres" role="presentation" class="active" onclick="menuMonCompte('liProgres','progres')"><a href="#">Mes progrès</a></li>
                      
                        <li id="liCommandes" role="presentation" onclick="menuMonCompte('liCommandes','commandes')"><a href="#">Mes commandes</a></li>
                        <li id="liInfos" role="presentation" onclick="menuMonCompte('liInfos','informations')"><a href="#">Mes informations</a></li>
                    </ul>
                    <div class="col-4" id="divTitle">
                      <h2 class="p3"><span class="color-1">Mes</span> progres</h2>
                        
                        <div id="containerLine" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        <div id="containerColumn" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


                        
                        
                        
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

