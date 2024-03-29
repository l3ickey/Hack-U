<?php
session_start();
require('dbconnect.php');

if (isset($_SESSION['id']) /*&& $_SESSION['time'] + 3600 > time()*/) {
	//ログインしている
	$_SESSION['time'] = time();

	$members = $db -> prepare('SELECT * FROM members WHERE id=?');
	$members -> execute(array($_SESSION['id']));
	$members = $members -> fetch();
} else {
	//ログインしていない
	// header('Location: login.php');
	// exit();
}

 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ホーム</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
		integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body id="option">
		<!-- header-->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<ul class="nav navbar-nav" id="headerNav">
						<li class="col-xs-1 footerNav"></li>
						<li class="col-xs-10 footerNav">ホーム</li>
						<li class="col-xs-1 footerNav"></li>
					</ul>
				</div>
			</nav>
		<!-- main -->
		<div class="container">
			<div class="row">
				<div class="thumbnail" id="slide">
				<ul>
					<li><img src="img/img_01_01kare-raisu.jpg" id="img1"></li>
					<li><img src="img/img_02_01kare-nannbannudon.jpg" id="img2"></li>
					<li><img src="img/img_04_01oyakodon.jpg" id="img3"></li>
				</ul>

					<div class="caption">
						<p>今日の日替わりメニュー</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="thumbnail">
					<img src="img/shinMenu.jpg">
					<p>新メニュー</p>
				</div>
			</div>
		</div>

		<!-- footer -->
		<nav class="navbar navbar-inverse navbar-fixed-bottom footer nav">
			<div class="container">
				<ul class="nav navbar-nav footer">
					<li class="col-xs-3 footerNav active"><a href="index.php"><i class="fas fa-home"></i></a></li>
					<li class="col-xs-3 footerNav"><a href="kare.php"><i class="fas fa-book-open"></i></a></li>
					<li class="col-xs-3 footerNav"><a href="shoppingCart.php"><i class="fas fa-shopping-cart"></i></a></li>
					<li class="col-xs-3 footerNav"><a href="option.php"><i class="fas fa-cog"></i></a></li>
				</ul>
			</div>
		</nav>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
	</body>
</html>
