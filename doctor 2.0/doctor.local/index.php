<?php

include "configs/db.php";
include "configs/nastroyki.php";

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

		<div id="background">

			<h1>Фармацевтическая компания Umbrella CLINICS</h1>
			<div id="main-photo">
				
				<img src="images/logo.jpg">	

			</div>

			<p id="description">
				
				Главный актив для каждого человека – его здоровье. Мы работаем ради того, чтобы, в случае необходимости, Вы могли обратиться к нам для решения проблем здоровья или же заранее предупредить наступления нежелательных состояний.<br><br>

				Клиника семейной медицины Umbrella предлагает широкий спектр медицинских услуг для детей и взрослых. Мы применяем новейшее медицинское оборудование из Европы и Америки, что позволяет нам осуществлять качественное диагностирование и дальнейшее лечение.<br><br>

				Медицинские сотрудники клиники Umbrella — опытные врачи, высококвалифицированные профессионалы, имеют большой опыт в медицинской практике и постоянно работают над совершенствованием своих знаний и методов лечения.<br><br>

				Мы позаботились о том, чтобы в клинике Umbrella царила уютная атмосфера, а доброжелательное и заботливое отношение персонала способствовало комфортному пребыванию взрослых и маленьких пациентов в клинике.<br>

			</p>

			<h1>Наше местоположение</h1>

			<div id="main-photo">
				
				<img src="images/geo.jpg">	

			</div>

			<h1>Наши контакты</h1>

			<p id="description">
			
			г.РаккунСити, ул.Молодежная, 32а<br>
			umbrella@gmail.com<br><br>

			044-11-111-11<br><br>
			066-22-222-22 (Viber)<br><br>
			068-33-333-33 (Telegram)<br>

			</p>

		</div>

	</div>

<script src="script.js"></script>
	
</body>
</html>