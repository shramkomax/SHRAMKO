<?php
// данные для подключение к бд
$server = "localhost";
$username = "root";
$password = "";
$dbname = "medclin";

// подключение к базе данных chat
$connect = mysqli_connect($server, $username, $password, $dbname);
//кодировка базы данных 
mysqli_set_charset($connect, "utf8"); 

?>
