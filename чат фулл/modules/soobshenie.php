<ul>							
<?php
			

	if(isset($_GET["user"]) || isset($otpravleno_polzovatel_id)){
		$user_id = null;

			if(isset($_GET["user"])){
				$user_id = $_GET["user"];
			} else {
				$user_id = $otpravleno_polzovatel_id;
			}
		//Получить все сообщения которые были отправелены 1 пользователю 
		$spl = "SELECT * FROM mess " . //выбераем все сообщения 
		 "WHERE (user_id=" . $polzovatel_id . //где id отправ пользователю = $_GET["user"]
		  	" AND user_id_2=" . $user_id .")" . // отправлено то пользователя с id 3
		  		 "OR (user_id=" . $user_id ." AND user_id_2=" . $polzovatel_id .")"; // ИЛИ отправлено пользователю с id 3 от пользователя $_GET["user"]
		$result = mysqli_query($connect, $spl);
		//mysqli_num_rows - получить количество результатов 
		$col_mess = mysqli_num_rows($result);
		// die - прекратить выполнение кода ниже 
		$i = 0;
		while ($i < $col_mess) {
			$messages = mysqli_fetch_assoc($result);	
?>		
				<li>
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
			$i = $i + 1;
		 }
	} else{
		echo "<h2>Пользователь не выбран</h2>";
	}	 	

?>
</ul>
			