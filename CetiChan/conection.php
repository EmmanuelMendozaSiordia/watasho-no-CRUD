<?php

$db_user = 'root';
$db_pass = '';
$db_name = "user_cetichan";

$con = new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con-> setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

?>