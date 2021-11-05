<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
	<link rel="stylesheet" href="css/style_index.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/categories.css">
	<link rel="stylesheet" href="css/login.css">

</head>

<body style="background-color: #ffffff ;">
	<!-- navbar -->
	<nav>
		<div class="logo">
			<h3><a href="merlin.html" class="logo-name">Netflix Merch</a></h3>
		</div>
		<ul class="nav-links">
			<li><a href="login.php">Home</a></li>
			<li><a href="login.php">Products</a></li>
			<li><a href="login.php">Categories</a></li>
			<li><a href="login.php">ContactUs</a></li>
			<li><a href="login.php" id="login">Login</a></li>
		</ul>
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</nav>
	<!-- navbar -->

	<div class="login">
		<img src="images/login-images/login.png" alt="">
		<div class="vl"></div>
		<img src="images/login-images/undraw_empty_cart_co35.png" class="login-image" alt="">
	</div>

	<div class="header">
		<h2>Hello!</h2>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" id="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<div>
			Not yet a member ? <a href="register.php">Sign Up</a>

		</div>

	</form>

	<hr>
	<br>

	<h4 class="other-login-op">Or login with</h4>
	<br>

	<div class="social">
		<a href="https://google.com"><img src="images/icons/icon-google.png" class="other-login-op-img" height="33" width="30" alt=""></a>&nbsp;&nbsp;
		<a href="https://facebook.com"><img src="images/icons/fb.png" class="other-login-op-img" height="30" width="35" alt=""></a>&nbsp;&nbsp;
		<a href="https://google.com"><img src="images/icons/favicon.jpg" class="other-login-op-img" height="32" width="35" alt=""></a>
	</div>

	<script type="text/javascript" src="js/nav.js"></script>
	<script src="js/login.js"></script>
</body>

</html>