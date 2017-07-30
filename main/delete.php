<?
header('Content-type: text/html; charset=utf-8');
require "/db.php";

mysqli_query($connection, "DELETE FROM `users` WHERE `id` > 0");
echo "Все Аккаунты удалены.";