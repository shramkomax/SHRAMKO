<?php

include "configs/db.php";
include "configs/nastroyki.php";

if($polzovatel_id == null) {

	header("Location: /login_userpage.php");
	
}

?>

<!DOCTYPE html>
<html>
<head>

	<title><?php echo $nameSite; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">
	
</head>
<body>
	
<?php

include 'chasty_site/shapka_userpage.php';

?>

	<div id="content">

		<div id="soobshenie">

			<div id="spisok-soobsheniy">

				<?php

				include "modules/soobshenie_userpage.php";

				?>

			</div>	

			<form id="form" action="/add_soobshenie_userpage.php" method="POST">
				<textarea name="text"></textarea>
				<button type="submit" name="otpravka" > <img src="images/Sent.png"></button>
			</form>

		</div>	

	</div>
		
	<script src="script.js"></script>

</body>
</html>