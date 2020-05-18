<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

$sql = "UPDATE `orders` SET `statys`='1' WHERE id=" . $_GET['statys'];
		//UPDATE `orders` SET `statys` = '1' WHERE `orders`.`id` = 112;


if(mysqli_query($conn, $sql)) {

        header("Location: /admin/order_admin.php");
 }    

?>