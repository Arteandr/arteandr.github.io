<?
header('Content-type: text/html; charset=utf-8');
require "/db.php";

$text = $_POST['comment'];
$title = $_POST['title'];
$date = date("Y-m-d H:i:s");
mysqli_query($connection, "INSERT INTO `articles` (`id`, `title`, `text`, `pubdate`, `views`) VALUES (NULL, '$title', '$text', '$date', 0)");