<?php

header('Access-Control-Allow-Origin: *');

$EmailTo = "8239993@gmail.com"; //сюда будут приходить данные из формы
$EmailFrom = '8239993@mail.ru'; //письма будут приходить от этого отправителя
$Subject = "Заполнили форму на сайте";

$message = print_r($_POST,true);

$success = mail($EmailTo, $Subject, $message, "From: <$EmailFrom>");
if($success) { echo "Успешно отправлено"; }
else{  echo "Ошибка!"; }

?>