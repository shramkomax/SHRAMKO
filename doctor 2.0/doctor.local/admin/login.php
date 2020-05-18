<?php

include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

if(
	isset($_POST["name"]) && isset($_POST["password"])
	&& $_POST["name"] != "" && $_POST["password"] != ""
){

	$sql = "SELECT * FROM `doctor` WHERE `name` LIKE '" . $_POST["name"] .  "' AND `pass` LIKE '" . $_POST["password"] .  "'";

	$result = mysqli_query($connect, $sql);
	
	$col_polzovateli = mysqli_num_rows($result);
	

	if($col_polzovateli == 1){
		$polzovatel = mysqli_fetch_assoc($result);
		//создаём куки для хранения данных пользователя 
		setcookie("polzovatel_id", $polzovatel["id"], time() + 60*60*24*30);

		header("Location: http://doctor.local/admin/");
	} else{
		echo "<h2>Логин или пароль введены неверно</h2>";
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>

	<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/admin/chasty_site/shapka.php';
	?>

	<div id="content">
		<h2>Авторизация</h2>
		<form action="/admin/login.php" method="POST">
			<p>
				Введите свой Имя:<br/> 
				<input type="text" name="name">
			</p>		
				
			<p>
				Введите свой пароль:<br/>
				<input type="text" name="password">
			</p>
			<p>
				<button type="submit">Войти</button>
			</p>
				
		</form>
	</div>	

</body>
</html>