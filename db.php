<?
$connection = mysqli_connect('127.0.0.1', 'root','','test_db');

if( $connection == false ) 
{
	echo "не удалось подключится к базе данных <br>";
	echo mysqli_connect_error();
	exit();
}
?>