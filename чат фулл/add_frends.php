<?php
include "configs/db.php";
include "configs/nastroyki.php";

/*
1 Создать таблицу для друзей готово
2 Ссылку на добавление в друзья готова
3 Сделать страницу обработчик где добавляем в бд выбраного пользователя 
4 Перенаправляем пользователя на главную страницу 

*/
if(isset($_GET['user_id'])) {
$sql = "INSERT INTO frends (user_1, user_2) VALUES ('" . $polzovatel_id . "', '" . $_GET['user_id'] . "')";
	if(mysqli_query($connect, $sql)) {
		include "modules/frend_list.php";
	} else {
		echo "<h2>Ошибка</h2>";
	}
}

?>,
