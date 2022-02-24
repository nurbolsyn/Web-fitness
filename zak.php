<?php
	//Устанавливаем доступы к базе данных:
		$host = 'db'; //имя хоста
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = '12345'; //пароль, по умолчанию пустой
		$db_name = 'fin'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name);

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");

	//Формируем тестовый запрос:
		$query = "REPLACE zarvki SET Name = '".$_POST['name']."',
		Pasport = '".$_POST['pasport']."',
		Tel = '".$_POST['tel']."',
		Mail = '".$_POST['mail']."',
		Abon = '".$_POST['abon']."'";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($result);
?>

<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>
	<form action="index.php" method="post">
	<input value="Главная страница" type="submit">
	</form>	
</body>
</html>	