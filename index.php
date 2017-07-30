<?php
header('Content-type: text/html; charset=utf-8');
require "/db.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>123</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style/style.css">
</head>
<body>
<div class="header">
<h1>Зарегестрироваться</h1>
<form method="GET" action="/signup.php" id="signup">
	<input type="text" name="login" placeholder="Введите свой Логин" required minlength="6">
	<input type="text" name="password" placeholder="Введите свой Пароль" required minlength="6">
	<input type="submit" value="Зарегестрироваться" >
</form>
<hr>
<h1>Авторизоваться</h1>
<form method="GET" action="/login.php" id="login" minlength="2" required>
	<input type="text" name="login" placeholder="login" minlength="2" required>
	<input type="text" name="password" placeholder="password">
	<input type="submit" value="Авторизоваться">
</form>
</div>
<form method="GET" action="/delete.php">
	<input type="submit" value="Удалить все аккаунты" id="delete"></form>
</body>
</html>