<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/admin/configs/nastroyki.php';

if($polzovatel_id == null) {

	header("Location: /admin/login.php");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nameSite; ?></title>
	<link rel="stylesheet" type="text/css" href="/admin/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	
	<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/admin/chasty_site/shapka.php';
	?>

	<div id="content">

		

			<div id="users">

				<form method="POST" id="poisk" action="http://doctor.local/admin/spisok.php">
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
					include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/soobshenie.php';

					?>
				</div>	
				<?php
				if (isset($_GET['user'])) {
					?>
					<form id="form" action="http://doctor.local/admin/add_soobshenie.php" method="POST">
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
		include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/contacts.php';
	?>


	<script src="/admin/script.js"></script>
</body>
</html>