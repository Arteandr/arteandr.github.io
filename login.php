<?
header('Content-type: text/html; charset=utf-8');
require "/db.php";

$login = $_GET['login'];
$password = $_GET['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");


if(mysqli_num_rows($count) == 0) {
	echo "Вы не зарегестрированы";
} else { ?>

<!DOCTYPE html>
<html>
<head>


	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
 <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
     <script type="text/javascript" src="js/vk.js"></script>

	<div class="container">
		<div class="row" id="bg">
			
				<div class="col-lg-12 ones_col_1">
					<form method="POST" id="text" action="article.php">
						<p><b>Рассказ:</b></p>
            <p><input type="text" name="title" placeholder="Введите заголовок."></p>
  <p><textarea name="comment" required=""></textarea></p>
  <p><input type="submit"></p>
            
					</form>
				</div>
			
		</div>
	</div>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>

<?
}
?>
