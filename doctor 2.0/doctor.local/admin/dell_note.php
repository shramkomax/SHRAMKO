<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

$sql = "DELETE FROM note WHERE id =" . $_GET["id"];
	if(mysqli_query($connect, $sql)) {
		header("Location:http://doctor.local/admin/note.php");
	}else {
		echo "<h2>Ошибка</h2>";
	}

?>
