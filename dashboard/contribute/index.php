<?php

	session_start();

	if (!isset($_SESSION["name"])) {

		header("location: https://cronicle.space/login/");

	}

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

	<script src = "contribute.js" defer></script>

	<!-- Main CSS -->
	<link rel = "stylesheet" href = "../../main/style.css">

	<link rel = "stylesheet" href = "../../main/dashboard.css">

	<style>

		div.contribute {
			animation: fade-up 0.75s ease-out;
		}

		div.contribute h2 {
			font-size: 1.5em;
			text-align: center;
			margin-bottom: 45px;
		}

		div.contribute form div.form {
			background-color: rgba(55, 58, 82, 0.20);
			box-shadow: 0px 0px 64px 0px rgba(5, 6, 10, 0.25);
			border-radius: 15px;
			padding: 40px 50px;
		}

		div.contribute form input, div.contribute textarea {
			background-color: transparent;
			color: #FFFFFF;
			width: 100%;
			border: none;
			outline: none;
		}

		div.contribute form input {
			font-size: 1.5em;
		}

		div.contribute form input::placeholder {
			color: rgba(255, 255, 255, 0.25);
		}

		div.contribute textarea {
			font-size: 1.15em;
			height: 300px;
			resize: none;
			border: none;
			outline: none;
		}

		div.contribute form div.topics {
			padding: 35px 0;
			margin: 35px 0;
			border-top: 2px solid rgba(255, 255, 255, 0.25);
			border-bottom: 2px solid rgba(255, 255, 255, 0.25);
		}

		div.contribute div.topics div.tbutton {
			background-color: #373A52;
			color: rgba(255, 255, 255, 0.75);
			font-weight: bold;
			font-size: .85em;
			padding: 10px 25px;
			margin: 25px 30px 0 0;
			border-radius: 45px;
			transition: 0.25s ease background-color;
		}

		div.contribute div.topics div.tbutton:hover, div.tbutton:active, div.tbutton:focus {
			background-color: #8C52FF;
			color: #FFFFFF;
			cursor: pointer;
		}

		div.contribute div.topics div.tbutton.active {
			background-color: #FFFFFF;
			color: #8956FF;
		}

		div.contribute div.form-bottom {
			width: 100%;
			text-align: center;
		}

		div.contribute div.form-bottom p.terms {
			font-size: .95em;
			text-align: justify;
			margin: 35px 200px;
		}

		div.contribute div.form-bottom button.primary {
			border-radius: 15px;
			padding: 15px 35px;
		}

		@media (max-width: 1470px) {

			div.contribute div.form-bottom p.terms {
				margin: 35px 100px;
			}

		}

		@media (max-width: 992px) {

			div.contribute form div.form {
				padding: 50px 35px;
			}

			div.contribute div.form-bottom p.terms {
				margin: 35px 25px;
			}

		}

		@media (max-width: 768px) {

			div.tab-content {
				padding: 150px 35px 75px 35px;
			}

		}

		@media (max-width: 576px) {

			div.contribute form div.form {
				padding: 40px 25px;
			}

			div.contribute div.topics div.tbutton {
				font-size: .5em;
			}

			div.contribute div.form-bottom p.terms {
				font-size: .75em;
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

		      	<a class = "nav-link" href = "http://cronicle.space/dashboard/">

		      		My Space

		      	</a>

		      	<a class = "nav-link" href = "http://cronicle.space/dashboard/notes/">

			      	Notes

		      	</a>

		      	<a class = "nav-link active" href = "http://cronicle.space/dashboard/contribute/">

		      		Contribute

		      	</a>
		    
		    </div>

		    <div class = "tab-content">

		  		<div class = "tab-pane contribute active">

		    		<form action = "https://formspree.io/f/xeqbzoke" method = "POST" name = "form">

		    			<h2>Publish Article</h2>

		    			<div class = "form">

			    			<input name = "title" type = "text" placeholder = "Give it a title" required>

			    			<div class = "topics">

			    				<p>Topics</p>

			    				<div class = "row" id = "tbuttons">

										<div class = "tbutton" id = "productivity" onclick = "active('productivity', 0)">

											productivity

										</div>

										<div class = "tbutton" id = "technology" onclick = "active('technology', 1)">

											technology

										</div>

										<div class = "tbutton" id = "marketing" onclick = "active('marketing', 2)">

											marketing

										</div>

										<div class = "tbutton" id = "finance" onclick = "active('finance', 3)">

											finance

										</div>

										<div class = "tbutton" id = "school" onclick = "active('school', 4)">

											school

										</div>

										<div class = "tbutton" id = "community" onclick = "active('community', 5)">

											community
											
										</div>

										<div class = "tbutton" id = "growth" onclick = "active('growth', 6)">

											growth

										</div>

										<div class = "tbutton" id = "leadership" onclick = "active('leadership', 7)">

											leadership

										</div>

										<div class = "tbutton" id = "volunteering" onclick = "active('volunteering', 8)">

											volunteering

										</div>

										<div class = "tbutton" id = "science" onclick = "active('science', 9)">

											science

										</div>

										<div class = "tbutton" id = "history" onclick = "active('history', 10)">

											history
											
										</div>

										<div class = "tbutton" id = "coding" onclick = "active('coding', 11)">

											coding
											
										</div>

									</div>

			    			</div>

			    			<textarea name = "content" placeholder = "Tell us your story" required></textarea>

			    		</div>

			    		<div class = "form-bottom">

			    			<p class = "terms">Get your originally-written article published at Cronicle and support our mission to establish productivity spaces for anyone, anywhere. By submitting an article, you agree to our Terms and Conditions.</p>

			    			<button type = "submit" class = "primary" >Submit Article</button>

			    		</div>

		    		</form>

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