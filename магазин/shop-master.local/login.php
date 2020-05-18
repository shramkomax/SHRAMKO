<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
	$password = md5($_POST['pass']);
	$sql = "SELECT * FROM users WHERE login='" . $_POST['username'] . "' AND password='$password'";

	$result = $conn->query($sql);
	$col_polzovateli = mysqli_num_rows($result);

	if($result->num_rows > 0) {
		echo "Позльзователь найдет";

	
	if($col_polzovateli == 1){
		$polzovatel = mysqli_fetch_assoc($result);
		if($polzovatel['verifided'] == 1){
		
			//создаём куки для хранения данных пользователя 
			setcookie("polzovatel_id", $polzovatel["id"], time() + 60*60*24*30);

			header("Location: /index.php");
		} else {
			header("Location: /verifided.php");
		}
	}
	
	} else {
		echo "Error";
	}
}




/*
1 Сделать форму регистрации done
2 Сделать отправку формы done
3 сделать отправку письма со ссылкой на подтверждение регистрации 
4 Сделать страницу с подтверждением регистрации 
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST">
		<p>Username<br/>
			<input type="text" name="username">
		</p>
		<p>Password<br/>
			<input type="password" name="pass">
		</p>
		<button type="submit">Login</button>
	</form>
	<a href="register.php">Регистрация</a>
</body>
</html>
