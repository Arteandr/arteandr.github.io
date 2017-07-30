<?
header('Content-type: text/html; charset=utf-8');
require "/db.php";
$login = $_GET['login'];
$password = $_GET['password'];

mysqli_query($connection, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password') ");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Вы успешно зарегестрированы!</title>
	<link rel="stylesheet" type="text/css" href="/style/style.css">
</head>
<body>
	<center><h1>Вы успешно зарегестрированы!</h1></center>
	<center><h2><a href="index.php">Вернуться на страницу авторизации!</a></h2></center>
</body>
</html>