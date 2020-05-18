<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/admin/configs/nastroyki.php';

if(isset($_GET['id'])) {
$sql = "DELETE FROM polzovateli WHERE id =" . $_GET['id'] ;
mysqli_query($connect, $sql);
$sql = "DELETE FROM polzovateli WHERE id =" . $_GET['id'] ;
mysqli_query($connect, $sql);
$sql = "DELETE FROM note WHERE id_user =" . $_GET['id'] ;	
	if(mysqli_query($connect, $sql)) {
		include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/user_list.php';
	}


}

?>
