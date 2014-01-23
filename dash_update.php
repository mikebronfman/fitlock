<?php
define("DB_SERVER", "uroomswap.db.7681913.hostedresource.com");
define("DB_USER", "uroomswap");
define("DB_PASS", "BUcompsci123!");
define("DB_NAME", "uroomswap");

$db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
$db->query("UPDATE `fitbit` SET `goal` = '".$_POST['goal']."' WHERE `id` = '1'");

?>