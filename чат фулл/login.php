<?php
/*
1 Дизайн/макап готово
2 Сделать отправки формы готово
3 Обработку данных формы, проверить заполнили ли мейл и пароль готово
4 Сделать проверку есль ли такой пользователь в базе данных 
5 Если нет вывести ошибку Иначе пункт 6
6 Авторизовать пользователя 

*/
include "configs/db.php";

if(
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != ""
){

	$sql = "SELECT * FROM `polzovateli` WHERE `email` LIKE '" . $_POST["email"] .  "' AND `pass` LIKE '" . $_POST["password"] .  "'";

	$result = mysqli_query($connect, $sql);
	
	$col_polzovateli = mysqli_num_rows($result);
	

	if($col_polzovateli == 1){
		$polzovatel = mysqli_fetch_assoc($result);
		//создаём куки для хранения данных пользователя 
		setcookie("polzovatel_id", $polzovatel["id"], time() + 60*60*24*30);

		header("Location: /");
	} else{
		echo "<h2>Логин или пароль введены неверно</h2>";
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
	include 'chasty_site/shapka.php';
	?>

	<div id="content">
		<h2>Авторизация</h2>
		<form action="login.php" method="POST">
			<p>
				Введите свой email:<br/> 
				<input type="text" name="email">
			</p>		
				
			<p>
				Введите свой пароль:<br/>
				<input type="text" name="password">
			</p>
			<p>
				<button type="submit">Войти</button>
			</p>
				
		</form>
		<a href="register.php">Регистрация</a>

	</div>	

</body>
</html>