<?php

header('Access-Control-Allow-Origin: *');

/* замените электронную почту на действующую почту,  с которой вам будет приходить письмо  */
$headers = "From: from@webhookservesite.ru";​ 
​
$message = print_r($_POST,true);
/* замените электронную почту на вашу действующую почту,  на которую вам будет приходить письмо  */
@mail('to@mail.ru', 'Tilda TEST', $message, $headers);

echo "ok";

?>