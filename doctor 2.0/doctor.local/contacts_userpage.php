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
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

</head>
<body>
	
	<?php

	include 'chasty_site/shapka_userpage.php';

	?>

	<div id="content">

		<h2>Какой-то информационный блок с картами и контактами</h2>

	</div>
		
	<?php

		include "modules/contacts.php";

	?>

	<script src="script.js"></script>
	
</body>
</html>