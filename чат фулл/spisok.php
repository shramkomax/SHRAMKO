<?php
include "configs/db.php";
include "configs/nastroyki.php";
$sql = "SELECT * FROM polzovateli WHERE id!=" . $polzovatel_id;
//выполнить sql запрос бд
$result = mysqli_query($connect, $sql);
// //mysqli_num_rows - получить количество результатов 
$col_polzovateli = mysqli_num_rows($result);
?>


<div id="spisok">
	<ul>
		<?php
		// i счётчик подсчёта пользователей
		$i = 0;


		if(isset($_POST["poisk-text"])) {
			// пока в перемен i храниться значение меньше чем количество пользов, то мы вывоим инфу
			$sql = "SELECT * FROM polzovateli WHERE name LIKE '%" . $_POST["poisk-text"] . "%'";
				$result = mysqli_query($connect, $sql);
				$col_polzovateli = mysqli_num_rows($result);
			while ($i < $col_polzovateli) {
				//mysqli_fetch_assoc преобразовать получ данные в масив
				$polzovatel = mysqli_fetch_assoc($result);
				?>
				<li>
					<a href='/index.php?user= <?php echo $polzovatel["id"]; ?>'>
						<div class="avatar">
								<img src= '<?php echo $polzovatel["photo"]; ?>'>
							</div>
						<h2><?php echo $polzovatel["name"]; ?></h2>
						<p>ok</p>
						<div class="time">09:00</div>
					</a>		
				</li>

				<?php
				$i = $i + 1;
			}


		} else{		

			// пока в перемен i храниться значение меньше чем количество пользов, то мы вывоим инфу
			while ($i < $col_polzovateli) {
				//mysqli_fetch_assoc преобразовать получ данные в масив
				$polzovatel = mysqli_fetch_assoc($result);
				?>
				<li>
					<a href='/index.php?user= <?php echo $polzovatel["id"]; ?>'>
						<div class="avatar">
								<img src= '<?php echo $polzovatel["photo"]; ?>'>
							</div>
						<h2><?php echo $polzovatel["name"]; ?></h2>
						<p>ok</p>
						<div class="time">09:00</div>
					</a>		
				</li>

				<?php
				$i = $i + 1;
			}
		}	
			
		?>
	</ul>
</div>