<?php
/*
1 Дизайн/мокап готов
2 Сделать отправку формы 
3 Проверить если пользователь с таким адресом 
4 Проверить заполнил ли пользователь поля формы 
5 Если все хорошо (3 4) пройдены 
	5.1 Добавить пользователя в бд

*/
include "configs/db.php";

if(
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != ""
){
	//Втавить в таблицу "Название таблицы" ()
	$sql = "INSERT INTO polzovateli (email, pass, name) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "', '" . $_POST["name"] . "')";
	if(mysqli_query($connect, $sql)) {
		echo "<h2>Пользователь добавлен</h2>";
	}else {
		echo "<h2>произошла ошибка</h2>" . mysqli_error($connect);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
	include 'chasty_site/shapka.php';
	?>

	<div id="content">

		<form action="register.php" method="POST">
			<p>
				Введите своё имя:<br/> 
				<input type="text" name="name">
			</p>		
			<p>
				Введите свой email:<br/> 
				<input type="text" name="email">
			</p>		
				
			<p>
				Введите свой пароль:<br/>
				<input type="text" name="password">
			</p>
			<p>
				<button type="submit">Зарегестрироваться</button>
			</p>
				
		</form>
		<a href="login.php">Авторизация</a>
	</div>	

</body>
</html>