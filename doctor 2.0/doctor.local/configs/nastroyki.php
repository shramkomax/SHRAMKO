<?php
/*
Файл для настройки сайта 
*/

// название сайта 
$nameSite = "Мед консультация";

$polzovatel_id = null;

if(isset($_COOKIE["polzovatel_id"])) {
	$polzovatel_id = $_COOKIE["polzovatel_id"];
}

?>