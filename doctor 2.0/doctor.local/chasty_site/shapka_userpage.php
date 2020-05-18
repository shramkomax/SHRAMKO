<div id="shapka">
		
	<div id="logo">
		<img src="/images/logo.png"> <span>CLINICS</span>
	</div>

	<div id="menu">
		
		<a href="/index.php">Главная</a>
		<a href="/consulting_userpage.php">Онлайн-консультация</a>
		<a href="/note_userpage.php">Запись на приём</a>
		<!-- <a href="/contacts_userpage.php">Контакты</a> -->
		
		<?php

		if(isset($_COOKIE["polzovatel_id"])){	

			$sql = "SELECT * FROM polzovateli WHERE id=" . $_COOKIE["polzovatel_id"];
			$result = mysqli_query($connect, $sql);
			$polzovatel = mysqli_fetch_assoc($result);

		?>

			<a href="exit_userpage.php" id="open-exit"><?php echo $polzovatel["name"];?>&#187;</a>

		<?php

		} else {

		?>

			<a href="login_userpage.php" id="open-exit">Войти</a> <!-- Выйти -->

		<?php

		}

		?>

	</div>

</div>