<?php

	session_start();
	
	$host = "localhost";
	$user = "local";
	$password = "";
	$database = "users";

	$db = mysqli_connect($host, $user, $password, $database);

	if (isset($_POST["login"])) {

		$name = $_POST["name"];
		$email = $_POST["email"];
		$userpassword = $_POST["password"];

		$sql = "SELECT * FROM users WHERE `name` = '$name' AND `email` = '$email' AND `password` = '$userpassword'";

		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) == 1) {

			$_SESSION["name"] = $name;
			$_SESSION["email"] = $email;

			header("location: http://cronicle.space/dashboard/");

		}

	}

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Login | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "viewport" content = "width = device-width, initial-scale = 1">

	<!-- Bootstrap 4.1 CSS Library -->
	<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous">

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7W1M8PDX1X"></script>

	<script>

	  window.dataLayer = window.dataLayer || [];
	  function gtag(){ dataLayer.push(arguments); }
	  gtag('js', new Date());

	  gtag('config', 'G-7W1M8PDX1X');

	</script>
	
	<!-- Main CSS -->
	<link rel = "stylesheet" href = "../main/style.css">

	<style>
		
		nav p.account {
			color: #FFFFFF;
			margin-top: 7px;
			margin-bottom: 0;
			margin-right: 25px;
		}

		div.content {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -44%);
			animation: fade-in 0.75s ease-out;
		}

		form {
			padding: 0 55px;
			width: 90vw;
			max-width: 465px;
		}

		form h2 {
			font-size: 1.85em;
			text-align: center;
			margin-bottom: 50px;
		}

		form p {
			color: #FFFFFF;
			font-size: .8em;
			margin-bottom: 10px;
		}

		form input {
			background-color: #353852;
			color: #FFFFFF;
			width: 100%;
			font-size: .9em;
			margin-bottom: 30px;
			padding: 15px 25px;
			border: none;
			border-radius: 5px;
		}

		form input:focus, form input:active {
			outline: none;
		}

		form input::placeholder {
			color: rgba(255, 255, 255, 0.85);
		}

		form button {
			background-color: #8C52FF;
			color: #FFFFFF;
			font-weight: bold;
			padding: 13px 25px;
			border: none;
			border-radius: 15px;
			width: 100%;
			margin-top: 15px;
			transition: 0.5s ease background-color;
		}

		form button:hover, form button:active, form button:focus {
			background-color: #FFFFFF;
			color: #8C52FF;
			cursor: pointer;
			outline: none;
		}

		form p.fail {
			color: red;
			font-size: 1em;
			margin-bottom: 15px;
		}

		p.additional, p.additional a {
			color: white;
			text-align: center;
			font-size: .9em;
			margin-top: 35px;
		}

		p.additional a {
			text-decoration: underline;
		}

		p.additional a:hover, p.additional a:focus, p.additional a:active {
			color: rgba(255, 255, 255, 0.85);
		}

	</style>

</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg fixed-top">

		<div class="container">

			<a class="navbar-brand" href="https://cronicle.space">

				<div class="row">

					<img src="../main/image/logo.webp" alt="cronicle logo" width="40" height="40">

					<p>Cronicle</p>

				</div>

			</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<span class="navbar-nav ml-auto"></span>

				<span class = "d-flex">

					<p class = "account">Don't have an account?</p>
					
					<a href = "https://cronicle.space/signup/">

						<button class = "primary">Sign Up</button>

					</a>

				</span>

			</div>

		</div>

	</nav>

	<div class = "content">

		<form method = "POST">

			<h2>Log in</h2>

			<p>Full Name</p>

			<input type = "text" name = "name" placeholder = "Enter your name" required>

			<p>Email</p>

			<input type = "email" name = "email" placeholder = "Enter your email" required>

			<p>Password</p>

			<input name = "password" type = "password" placeholder = "Enter your password" required>

			<?php

				if (isset($_POST["login"])) {

					$name = $_POST["name"];
					$email = $_POST["email"];
					$userpassword = $_POST["password"];

					$sql = "SELECT * FROM users WHERE `name` = '$name' AND `email` = '$email' AND `password` = '$userpassword'";

					$result = mysqli_query($db, $sql);

					if (mysqli_num_rows($result) != 1) {

						echo "<p class = 'fail'>Incorrect full name, email, or password.</p>";

					}

				}

			?>

			<button type = "submit" name = "login" value = "Log in">Log In</button>

		</form>

		<p class = "additional">

			Don't have an account? <a href = "https://cronicle.space/signup/">Sign Up</a>
		
		</p>

	</div>

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>