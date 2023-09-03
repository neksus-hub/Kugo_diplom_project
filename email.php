<?php
$user_email = htmlspecialchars($_POST["useremail"]);

$token = "5832527841:AAGBjZXqhanx8pT7MXrMorCQmG9pq8LC-To";
$chat_id = "-904296570";

$formData = array(
  "E-mail клиента: " => $user_email
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