<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

/*
==============================
Отправка сообщений выбраному пользователю 
*/
if(
	isset($_POST["text"]) && $_POST["text"] != "" 
	&& isset($_POST["user_ot"]) && isset($_POST["user_pol"])
){
	//Втавить в таблицу "Название таблицы" ()
	$sql = "INSERT INTO mess ( user_id, user_id_2, message, time) VALUES ('" . $_POST["user_ot"] . "', '" . $_POST["user_pol"] . "',
	'" . $_POST["text"] . "', current_timestamp())";
	mysqli_query($connect, $sql);
		
}

$otpravleno_polzovatel_id = $_POST["user_pol"];
$polzovatel_id = $_POST["user_ot"];

include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/soobshenie.php';
?>