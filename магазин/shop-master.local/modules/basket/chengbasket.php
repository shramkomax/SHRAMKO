<?php
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
	if(isset($_COOKIE['basket'])) {
		$basket = json_decode($_COOKIE['basket'], true);

		for($i = 0; $i < count($basket["basket"]); $i++) {
			if($basket["basket"][$i]['product_id'] == $_POST['id']) {
				$basket["basket"][$i]['count'] = $_POST['value'];
				+$basket["basket"][$i]['cost_naw'] = +$basket["basket"][$i]['cost'] * +$_POST['value'];
				
			} 
		}

		// Преобразование массива в JSON Формат
		$jsonProduct = json_encode($basket);

		// очищаем куки 
		setcookie("basket", "", 0, "/");	
		//Добавяем куки 		
		setcookie("basket", $jsonProduct, time() +60*60, "/");

	}
	echo json_encode([
		"count" => array_sum(array_column($basket['basket'],'count'))
	]); 	
}


?>