<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CAH | Confederaci&oacute;n Argentina de HOCKEY | Argentina | Sitio Oficial</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="cahockey.ico">
		
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <!--[if lt IE 9]>
         <link rel="stylesheet"  href="./new/css/style-site.css"/>
        <![endif]-->
        <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/style-site.css" />
        <link rel="stylesheet" media="screen and (min-width: 767px) and (max-width: 1023px)" href="css/style-medium.css" />
         <link rel="stylesheet" media="screen and (max-width: 766px)" href="css/style-small.css" />
         <link rel="stylesheet"  href="css/style-site.css"/>
        
        <script src="js/modernizr-2.6.2.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>


        <!-- font-family: 'Cabin', sans-serif; -->
    </head>
  <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44716065-1', 'cahockey.org.ar');
  ga('send', 'pageview');

</script>        <!--[if lt IE 7]>
            <p class="chromeframe">Ud. est� usando un navegador <strong>desactualizado</strong>. Por favor, <a href="http://browsehappy.com/">actualice su navegador</a> o <a href="http://www.google.com/chromeframe/?redirect=true">active Google Chrome Frame</a> para mejorar su experiencia.</p>
        <![endif]-->
<header>
   <div id="innerHeader">
   <h1 id="logo"><a href="index.html"><img src="images/CAH_logo2.png" alt="CAH"/></a></h1><!--Finlogo -->
   <div class="maintop">

   <div class="top linea">
   <p class="fecha_top">Mi&eacute;rcoles, 15 de Enero de 2014</p>
   <nav class="redes">
   <ul>
   <li><a href="https://www.facebook.com/pages/Confederaci%C3%B3n-Argentina-de-Hockey-Sobre-C%C3%A9sped-y-Pista/232562376816722?fref=ts" target="_blank" class="f">facebook</a></li>
   <li><a href="http://www.youtube.com/user/cahprensa?feature=watch" target="_blank" class="y"> youtube</a></li>
   </ul>
   </nav>
   </div><!-- FIN TOP -->

   <div class="top">
   <form action="http://www.google.es/custom" method="get">
   <p><input type="text" class="input" name="q"> <input type="submit" class="submit" value="buscar"></p>
     <input name="domains" value="www.cahockey.org.ar" type="hidden">
     <input name="sitesearch" value="www.cahockey.org.ar" type="hidden">
   </form>

   <nav class="navTop">
   <ul>
 
  <li></li>

  </ul>
  </nav>
   </div><!-- FIN TOP -->

   </div><!-- FIN MAINTOP -->
   </div><!-- FIN INNER HEDADER -->

<div id="mainnavbar">
   <div class="navbar">
    <div class="accordionButton">Menu</div>
    <nav id="menu" class="accordionContent">
   <ul class="sf-menu">

       <li class="active" style="width:195px;"><a href="index.html">INICIO</a></li>
  <li style="width:195px;"> <a href="" >POSICIONES</a>
  <ul>
  <li><a href="posiciones_cuarta.php">4ta Categoria</a></li>
  <li><a href="posiciones_quinta.php">5ta Categoria</a></li>
  <li><a href="posiciones_sexta.php">6ta Categoria</a></li>
  </ul>
  </li>
  <li style="width:195px;"><a href="fixture.php">FIXTURE</a>
  <ul>
  <li style="width:195px;"><a href="fixture_cuarta.php">4ta Categoria</a></li>
  <li style="width:195px;"><a href="fixture_quinta.php">5ta Categoria</a></li>
  <li style="width:195px;"><a href="fixture_sexta.php">6ta Categoria</a></li>
  </ul>
  </li>

  <li style="width:195px;"><a href="informacion.php">INFORMACIÓN</a>

  <ul>
  </ul>

  </li>

  <li class="ult" style="width:195px;"><a href="mailto:horaciokellis_04@hotmail.com">CONTACTO</a></li>


  </ul>
  </nav>
   </div><!-- FIN navbar -->



   </header>
   <?php
  require_once("class/class.php");
  $tra=new Trabajo();
  $conn= mysql_connect("localhost", "root", "") or die("No fue posible conectar con el servidor");
  mysql_select_db("hockey") or die("No fue posible selecionar la base de datosss");
  $pro=$tra->get_puntos1();
  ?>
   <div id ="nuevo">
    <div style="width:300px; height:300px;" id= "nuevo2">
    </div>
    <div id="titulo">
    Posiciones Torneo de Hockey Huracan Cuarta Categoria
    </div>
<table class="table">
        <thead>
          <tr>
            <th>Equipo</th>
            <th>Pts</th>
            <th>J</th>
            <th>G</th>
            <th>E</th>
            <th>P</th>
            <th>GF</th>
            <th>GC</th>
            <th>Dif</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $j=1;
          for ($i=0;$i<sizeof($pro);$i++)  
          { if ($j==1) {?>
          <tr class="active">
          <?php } if ($j==3) {?>
          <tr class="sucess">
          <?php } if ($j==5) {?>
          <tr class="warning">
          <?php } if ($j==7) {?>
          <tr class="danger">
          <?php } if ($j==8) { $j=0; ?>
          <?php } if (($j==2)or($j==4)or($j==6)or($j==0)) { ?>
          <tr><?php }?>
            <td><?php echo $pro[$i]["equipo"];?></td>
            <td><?php echo $pro[$i]["pts"];?></td>
            <td><?php echo $pro[$i]["j"];?></td>
            <td><?php echo $pro[$i]["g"];?></td>
            <td><?php echo $pro[$i]["e"];?></td>
            <td><?php echo $pro[$i]["p"];?></td>
            <td><?php echo $pro[$i]["gf"];?></td>
            <td><?php echo $pro[$i]["gc"];?></td>
            <td><?php echo $pro[$i]["dif"];?></td>
          </tr>
          <?php $j=$j+1;}?>
        </tbody>
      </table>
 </div>