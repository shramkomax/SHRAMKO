<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

$sql = "DELETE FROM products WHERE id =" . $_GET["id"];
	if(mysqli_query($conn, $sql)) {
		header("Location:http://shop-master.local/admin/products.php");
	}else {
		echo "<h2>Ошибка</h2>";
	}



?>
