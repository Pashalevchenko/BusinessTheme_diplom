<?php

/* https://api.telegram.org/bot1790871846:AAHDd-xmeWlCgWKmew77K5939DQodKlDQSY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['username'];
$phone = $_POST['phonenumber'];
$email = $_POST['inputEmail'];
$token = "1790871846:AAHDd-xmeWlCgWKmew77K5939DQodKlDQSY";
$chat_id = "-590834138";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>