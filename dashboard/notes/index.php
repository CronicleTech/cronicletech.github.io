<?php

	session_start();

	if (!isset($_SESSION["name"])) {

		header("location: https://cronicle.space/login/");

	}

	$host = "localhost";
	$user = "u784684099_cronicle";
	$password = "Croniclespace123";
	$database = "u784684099_users";

	/**

	$host = "localhost";
	$user = "local";
	$password = "";
	$database = "users";

	*/

	$db = mysqli_connect($host, $user, $password, $database);

	$table = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Dashboard | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

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
	
	<!-- JavaScript -->
	<script src = "../sidenav.js" defer></script>

	<!-- Main CSS -->
	<link rel = "stylesheet" href = "../../main/style.css">

	<link rel = "stylesheet" href = "../../main/dashboard.css">

	<style>

		button.purple {
			background-color: #8C52FF;
			color: #FFFFFF;
			font-weight: bold;
			border-radius: 15px;
			border: none;
			padding: 13px 25px;
			transition: 0.5s ease background-color;
		}

		button.purple:hover, button.purple:active, button.purple:focus {
			background-color: #FFFFFF;
			color: #8C52FF;
			cursor: pointer;
			outline: none;
		}

		div.notes h2 {
			font-size: 1.25em;
			margin-bottom: 50px;
			animation: fade-up 0.75s ease-out;
		}

		div.notes form {
			background-color: #1A1C2C;
			font-size: .95em;
			border-radius: 15px;
			padding: 35px 50px;
			margin-bottom: 65px;
			box-shadow: 0px 0px 64px 0px rgba(5, 6, 10, 0.25);
			animation: fade-right 0.75s ease-out;
		}

		div.notes form div.row {
			width: 100%;
			padding: 0;
		}

		div.notes form textarea {
			background-color: #353852;
			color: #FFFFFF;
			border-radius: 15px;
			border: none;
			outline: none;
			width: 80%;
			height: 65px;
			resize: none;
			padding: 20px 35px;
			margin-right: 3.5%;
		}

		div.notes form textarea::placeholder {
			color: #FFFFFF;
		}

		div.notes form button {
			width: 16.5%;
			height: 65px;
		}

		div.notes div.empty {
			text-align: center;
			padding: 75px 0;
			border-radius: 15px;
			border: 3px solid #323452;
			box-shadow: 0px 0px 64px 0px rgba(5, 6, 10, 0.25);
			user-select: none;
			animation: fade-up 0.75s ease-out;
		}

		div.notes div.empty p {
			text-align: center;
			font-size: 1.25em;
			margin-top: 40px;
			margin-bottom: 0;
		}

		div.notes div.panels {
			max-width: 100%;
			display: grid;
			grid-template-columns: repeat(4, 25%);
			animation: fade-up 0.75s ease-out;
		}

		div.notes div.panel {
			background-color: #373A52;
			border-radius: 15px;
			padding: 25px 15px;
			margin: 25px 15px;
			height: fit-content;
			min-height: 115px;
		}

		div.notes div.panel p {
			color: #FFFFFF;
			font-size: 1.15em;
			margin-bottom: 0;
			user-select: none;
		}

		div.notes div.panel button {
			font-size: .85em;
			border-radius: 50%;
			opacity: 0;
			width: 30px;
			height: 30px;
			padding: 0;
			margin-bottom: 15px;
		}

		div.notes div.panel:hover button, div.notes div.panel:active button, div.notes div.panel:focus button {
			opacity: 100%;
			transition: 0.75s ease all;
		}

		@media (max-width: 1470px) {

			div.notes div.panels {
				grid-template-columns: repeat(3, 33%);
			}

		}

		@media (max-width: 1100px) {

			div.notes form button.purple {
				font-size: 1.15em;
				padding: 13px 0;
			}

			div.notes div.panels {
				grid-template-columns: repeat(2, 50%);
			}

		}

		@media (max-width: 768px) {

			div.tab-content {
				padding: 150px 35px 75px 35px;
			}

			div.notes h2 {
				text-align: center;
			}

			div.notes div.panels {
				grid-template-columns: repeat(1, 100%);
			}

			div.notes div.panel {
				min-height: 0;
			}

		}

		@media (max-width: 576px) {

			div.notes form textarea {
				width: 100%;
				margin-right: 0;
				margin-bottom: 25px;
			}

			div.notes form button {
				width: 100%
			}

		}

	</style>

</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg fixed-top">

		<div class="container">

			<a class="navbar-brand" href="https://cronicle.space">

				<div class="row">

					<img src="../../main/image/logo.webp" alt="cronicle logo" width="40" height="40">

					<p>Cronicle</p>

				</div>

			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 0; float: right;">

				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav mr-auto">

					<a href = "https://cronicle.space/articles/" class = "text">Articles</a>

					<a href = "https://cronicle.space/slides/" class = "text">Slides</a>

					<a href = "https://cronicle.space/quizzes/" class = "text">Quizzes</a>

				</ul>

			</div>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<span class="navbar-nav ml-auto"></span>

				<span class = "d-flex">

					<a href = "https://cronicle.space/explore/">

						<svg width="25" height="25" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">

							<path d="M32.7081 28H30.6414L29.9089 27.325C32.4726 24.475 34.0161 20.775 34.0161 16.75C34.0161 7.775 26.4035 0.5 17.0119 0.5C7.62043 0.5 0.0078125 7.775 0.0078125 16.75C0.0078125 25.725 7.62043 33 17.0119 33C21.2237 33 25.0954 31.525 28.0777 29.075L28.784 29.775V31.75L41.8641 44.225L45.762 40.5L32.7081 28ZM17.0119 28C10.4981 28 5.23985 22.975 5.23985 16.75C5.23985 10.525 10.4981 5.5 17.0119 5.5C23.5258 5.5 28.784 10.525 28.784 16.75C28.784 22.975 23.5258 28 17.0119 28Z"/>

						</svg>

					</a>

				</span>

				<span class = "d-flex">

					<a href = "https://cronicle.space/explore/" class = "text">Explore</a>

				</span>

				<?php

					if (!isset($_SESSION["name"])) {

				?>

					<span class="d-flex">

						<a href = "https://cronicle.space/login/" class = "cta">

							<button class="secondary">Login</button>

						</a>

					</span>

					<span class="d-flex">

						<a href = "https://cronicle.space/signup/" class = "cta">

							<button class="primary">Sign Up</button>

						</a>

					</span>

				<?php

					} else {

				?>

					<span class="d-flex">

						<a href = "https://cronicle.space/dashboard/" class = "profile">

							<div class = "row">

								<img src = "../../main/image/profile.svg" alt = "profile">

								<p> <?php echo $_SESSION["name"] ?> </p>

							</div>

						</a>

					</span>

					<span class = "d-flex button">

						<a href = "https://cronicle.space/dashboard/">

							<button class = "primary">Dashboard</button>

						</a>

					</span>

				<?php

					}

				?>

			</div>

		</div>

	</nav>

	<!-- Content -->
	<div class = "container-fluid">

		<div class = "wrapper">

			<button class = "sidenav-toggler"> 

    			<img src = "../image/sidenav.svg" alt = "sidenav" width = "20" height = "20">

    		</button>

	    	<div class = "nav flex-column nav-pills" role = "tablist" aria-orientation = "vertical">

		      	<a class = "nav-link" href = "https://cronicle.space/dashboard/">

		      		My Space

		      	</a>

		      	<a class = "nav-link active" href = "https://cronicle.space/dashboard/notes/">

			      	Notes

		      	</a>

		      	<a class = "nav-link" href = "https://cronicle.space/dashboard/contribute/">

		      		Contribute

		      	</a>
		    
		    </div>

		    <div class = "tab-content">

		  		<div class = "tab-pane notes active">

		  			<?php

			    		if (isset($_POST["title"])) {

							$title = $_POST["title"];

							$sqlinsert = "INSERT INTO `$table` (`title`) VALUES('$title')";

							$queryinsert = mysqli_query($db, $sqlinsert);

						}

						$noteselect = "SELECT * FROM `$table` ORDER BY `id` DESC";

						$notes = mysqli_query($db, $noteselect);

			    	?>

					<form action = "" method = "POST" autocomplete = "off">

						<div class = "row">

							<textarea name = "title" placeholder = "Take a note..." required></textarea>

							<button class = "purple" type = "submit">Add</button>

						</div>

					</form>

					<h2>My Notes</h2>

		   			<?php

		   				if (mysqli_num_rows($notes) == 0) {

		   			?>

		   			<div class = "empty">

						<img src = "icon notes.svg" alt = "notes icon" width = "70" height = "70">

						<p>Notes that are added will appear here.</p>

					</div>

					<?php } ?>

					<div class = "panels">

				    	<?php

				    		while ($todo = mysqli_fetch_assoc($notes)) {

				    	?>
				    	
					    	<div class = "panel">

					    		<div class = "row">

						    		<div class = "col-2">

							    		<a href = <?php echo "delete.php?rn=" . $todo['id']; ?> >

							    			<button class = "purple"> ✓ </button>

							    		</a>

							    	</div>

							    	<div class = "col-10">

						    			<p> <?php echo $todo["title"]; ?> </p>

						    		</div>

						    	</div>

					    	</div>

					    <?php } ?>

					</div>

		  		</div>
		    
		    </div>

		</div>

	</div>

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>