<?php
include "configs/db.php";
include "configs/nastroyki.php";

if($polzovatel_id == null) {

	header("Location: /login.php");
}



/*
==============================
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nameSite; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php
	include 'chasty_site/shapka.php';
	?>

	<div id="content">

		<div id="users">

			<form method="POST" id="poisk" action="http://chats.local/spisok.php">
				<input type="text" name="poisk-text">

				<button type="submit">
					<img src="images/search.png">
				</button>
			</form>
			<div id="spis1">
			<?php
			/*
			Список плльзователей
			*/
			// include подключить файл 

			include "spisok.php";
			?>
		</div>
		</div>

		<div id="soobshenie">

			<div id="spisok-soobsheniy">
				<?php
				include "modules/soobshenie.php";

				?>
			</div>	
			<?php
			if (isset($_GET['user'])) {
				?>
				<form id="form" action="http://chats.local/add_soobshenie.php" method="POST">
					<input type="hidden" name="user_ot" value="<?php echo $polzovatel_id ?>">
					<input type="hidden" name="user_pol" value="<?php echo $_GET["user"] ?>">
					<textarea name="text"></textarea>
					<button type="submit" name="otpravka" > <img src="images/Sent.png"></button>
				</form>
			<?php	
			}
			?>
		</div>	
	</div>
		
	<?php
		include "modules/contacts.php";
	?>


	<!-- <div class="modal" id="exit-modal">
		<div class="close">X</div>
		<h2>Email</h2>
		<input type="text" name="email">
		<h2>Pass</h2>
		<input type="text" name="pass">
		<button>
			<img src="images/exit.png">
		</button>
	</div> -->


	<script src="script.js"></script>
</body>
</html>