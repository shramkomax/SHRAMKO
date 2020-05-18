<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

/*
1 Получить товар по которому кликнули done
2 Добавить масив товаров done
3 Добавить масив в куки  done

4 Перебрать прошлый массив done
	4.1 Перебрать JSON с куки в масив 
	4.2 Добавить новый элемент в масив 
	4.3 Прелбразовать масив в правельный json 
	4.4 Добавить в куки 
*/
// Проверяем был ли отправелен пост запрос 
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
	$sql = "SELECT * FROM products WHERE id=" . $_POST['id'];

	$result = $conn->query($sql);

	$product = mysqli_fetch_assoc($result);
// добавление в корзину 
	if(isset($_COOKIE['basket'])) { // Если в корзине что то есть 
		$basket = json_decode($_COOKIE['basket'], true);

		/*
		1 Пройтись по всему масиву done
		2 Проверить если совпадение по ад 	
		3 Если совпадение есть увеличить количество товара 

		*/
		$issetProduct = 0;
		for($i = 0; $i < count($basket["basket"]); $i++) {
			if($basket["basket"][$i]["product_id"] == $product['id'] ) {
				$basket["basket"][$i]['count']++;
				$issetProduct = 1;

			}

		}
		if($issetProduct != 1) {
			$basket["basket"][] = [
			"product_id" => $product['id'],
			"count" => 1, 
			"cost" => $product['cost'],
			"cost_naw" => $product['cost'] 
			];
		}
		

		/*
			product_id: 1,
			count: 3


		*/

	} else { // если корзина пустая 
		$basket = [ "basket" => [
		["product_id" => $product['id'],
		"count" => 1, 
		"cost" => $product['cost'],
		"cost_naw" => $product['cost']
	]
	] ];
	}
	// Преобразование массива в JSON Формат
	$jsonProduct = json_encode($basket);

// очищаем куки 
	setcookie("basket", "", 0, "/");	
//Добавяем куки 		
	setcookie("basket", $jsonProduct, time() +60*60, "/");
	
	echo json_encode([
		"count" => array_sum(array_column($basket['basket'],'count'))
	]);
	
}


?>