<?php

define("DB_SERVER", "uroomswap.db.7681913.hostedresource.com");
define("DB_USER", "uroomswap");
define("DB_PASS", "BUcompsci123!");
define("DB_NAME", "uroomswap");

$db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

$q = $db->query("SELECT * FROM `fitbit` WHERE `id` = '1'");
$row = $q->fetch_assoc();
$ret = array();
$ret['steps'] = $row['current'];
$ret['required'] = $row['goal'];
echo json_encode($ret);

?>