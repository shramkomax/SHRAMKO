<?php
/*
Файл для настройки сайта 
*/

// название сайта 
$nameSite = "Веб чат";

$polzovatel_id = null;

if(isset($_COOKIE["polzovatel_id"])) {
	$polzovatel_id = $_COOKIE["polzovatel_id"];
}

?>