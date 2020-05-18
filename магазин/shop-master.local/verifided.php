<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

if(isset($_GET['u_code'])) {
	$sql = "SELECT * FROM users WHERE confirm_mail='" . $_GET['u_code'] . "'";

	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		$user = mysqli_fetch_assoc($result);
	$sql = "UPDATE users SET verifided = '1' WHERE id =" . $user['id'];
		if($conn->query($sql)) {
			echo "пользователь верифицирован";
		
		}
	}
}

if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
	$u_code = generateRandomString(20);
	$sql = "INSERT INTO users(confirm_mail) VALUES ('$u_code')";
    $code = $conn->query($sql);
}    


if(isset($_POST['email'])){
$link = "<a href='http://shop-master.local/register.php?u_code=$u_code'>Confirm</a>";
mail($_POST['email'], 'Register', $link);
header("Location: /index.php");
	}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Verifided</title>
</head>
<body>
	<form method="POST">
		<p>Email<br/>
			<input type="text" name="email">
		</p>
		<button type="submit">Отправить</button>
	</form>
</body>
</html>