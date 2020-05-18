
<div id="shapka">
		
		<div id="logo">
			<img src="/images/logo.png"> <span>ADMINISTRATION</span>
		</div>

		<div id="menu">
			<a href=".">Главная</a>
			<a href="#" id="open-content">Пользователи</a>
			<a href="note.php">Запись на приём</a>

			<?php
			if(isset($_COOKIE["polzovatel_id"])){		
				$sql = "SELECT * FROM doctor WHERE id=" . $_COOKIE["polzovatel_id"];
 				$result = mysqli_query($connect, $sql);
 				$polzovatel = mysqli_fetch_assoc($result);
				?>
				<a href="exit.php" id="open-exit"><?php echo $polzovatel["name"];?>&#187;</a>

			<?php	
			} else {
			?>
		
				<a href="login.php" id="open-exit">Войти</a> <!-- Выйти -->
		<?php	
			}
			?>
		</div>

	</div>