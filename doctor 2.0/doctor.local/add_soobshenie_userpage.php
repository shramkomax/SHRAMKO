<?php

include "configs/db.php";

if(isset($_POST["text"]) && $_POST["text"] != "") {

	$sql = "SELECT * FROM doctor WHERE id='999'";
	$result = mysqli_query($connect, $sql);
	$doctor = mysqli_fetch_assoc($result);

	$sql = "INSERT INTO mess ( user_id, user_id_2, message, time) VALUES ('".$_COOKIE["polzovatel_id"]."', '" . $doctor["id"] . "',
	'" . $_POST["text"] . "', current_timestamp())";
	mysqli_query($connect, $sql);

	header("Location: /consulting_userpage.php");
		
}

?>