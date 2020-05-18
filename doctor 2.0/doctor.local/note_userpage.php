<?php

include "configs/db.php";
include "configs/nastroyki.php";

if($polzovatel_id == null) {

	header("Location: /login_userpage.php");
	
}
			
if(isset($_COOKIE["polzovatel_id"])){		
	$sql = "SELECT * FROM polzovateli WHERE id=" . $_COOKIE["polzovatel_id"];
	$result = mysqli_query($connect, $sql);
	$polzovatel = mysqli_fetch_assoc($result);

}

if(isset($_POST["text"]) && $_POST["text"] != ""){
	
	$sql = "INSERT INTO note (id_user, text, phone) VALUES ('" . $polzovatel["id"] . "', '" . $_POST["text"] . "', '" . $polzovatel["phone"] . "')";

	if(mysqli_query($connect, $sql)) {

		echo "<h2>Заява успешно отправлена</h2>";

	?>

		<a href="/">Вернуться на главную страницу</a>

	<?php	

	}

}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

</head>
<body>

	<?php

	include 'chasty_site/shapka_userpage.php';

	?>

	<div id="content">

		

		<form action="#" method="POST" id="note">
			<h2>Запись на прием</h2>
			<p>
				<?php echo $polzovatel["name"];?>, введите ваши симптомы:<br/> 
				<textarea name="text"></textarea>
			</p>			
				<button type="submit">Отправить жалобу</button>
					
		</form>
		
	</div>	

</body>
</html>