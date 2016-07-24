<?php

$botToken = "247745730:AAFyXTLBPi1x03mRsisIT6A30P3SmkC2fd4";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];


switch($message) {
 
 case "سلام":
  sendMessage($chatId, "علیک");
  break;
 case "خوبی":
  sendMessage($chatId, "ممنون تو چطوری");
  break;
case "ربات":
  sendMessage($chatId, "بله");
  break;
 case "ارمین":
  sendMessage($chatId, "با باباییم چیکار داری؟");
  break;
case "😐":
  sendMessage($chatId, "زهر");
  break;
 case "کص نگو":
  sendMessage($chatId, "ربطی نداره");
  break;
case "😂":
  sendMessage($chatId, "جون عمت بس کن");
  break;
case "لینک":
  sendMessage($chatId, "کص نگو بابام");
  break;
 case "گم شو":
  sendMessage($chatId, "اوف آبم اومد");
  break;
 default: 
  sendMessage($chatId, "نمیدونم چی میگی");
 
}

function sendMessage ($chatId, $message) {
 
 $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
 file_get_contents($url);
 
}
 




?>
