<?php

header('Access-Control-Allow-Origin: *');

/* замените электронную почту на действующую почту,  с которой вам будет приходить письмо  */
$headers = "From: 8239993@mail.ru";​ 
​
$message = print_r($_POST,true);
/* замените электронную почту на вашу действующую почту,  на которую вам будет приходить письмо  */
@mail('8239993@mail.ru', 'Tilda TEST', $message, $headers);

echo "ok";

?>
