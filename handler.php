<?php
$user_phone = htmlspecialchars($_POST["userphone"]);
$user_name = htmlspecialchars($_POST["username"]);

$token = "6424788138:AAHLXsW_h7ptAHp-Oev158FJmGaDZe95OIM";
$chat_id = "-981121937";

$formData = array(
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A" ;
} 

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}






