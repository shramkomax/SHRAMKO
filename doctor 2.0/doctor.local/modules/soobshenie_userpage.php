<ul>

<?php

	//Получить все сообщения которые были отправелены 1 пользователю 
	$spl = "SELECT * FROM mess WHERE user_id=" .$_COOKIE["polzovatel_id"]." OR user_id_2=" .$_COOKIE["polzovatel_id"];

	$result = mysqli_query($connect, $spl);
	//mysqli_num_rows - получить количество результатов 
	$col_mess = mysqli_num_rows($result);
	// die - прекратить выполнение кода ниже 
	$i = 0;

	while ($i < $col_mess) {

		$messages = mysqli_fetch_assoc($result);

if($messages["user_id"] == 999){

?>		
		<li class="active" id ="doc">

			<div class="avatar">
				<img img src= "images/user.png";>
			</div>

			<?php

				// Вывести имя конкретного пользователя 
				$sql = "SELECT * FROM polzovateli WHERE id=" . $messages["user_id"];
				
				//Выполняем запрос 
				$polzovatel = mysqli_query($connect, $sql);
				// записываем переменную массив с данными пользователя 
				$polzovatel = mysqli_fetch_assoc($polzovatel);

			?>

			<h2><?php echo $polzovatel["name"]; ?></h2>
			<p><?php echo $messages["message"]; ?></p>
			<div class="time"><?php echo $messages["time"]; ?></div>

		</li> 
			
	<?php

	} else {

	?>				

		<li class="active" id ="pei">

			<div class="avatar">
				<img img src= "images/user.png";>
			</div>

			<?php

				// Вывести имя конкретного пользователя 
				$sql = "SELECT * FROM polzovateli WHERE id=" . $messages["user_id"];
				
				//Выполняем запрос 
				$polzovatel = mysqli_query($connect, $sql);
				// записываем переменную массив с данными пользователя 
				$polzovatel = mysqli_fetch_assoc($polzovatel);

			?>

			<h2><?php echo $polzovatel["name"]; ?></h2>
			<p><?php echo $messages["message"]; ?></p>
			<div class="time"><?php echo $messages["time"]; ?></div>

		</li> 

		<?php

	}

		$i = $i + 1;

		}

		?>
		
</ul>
			