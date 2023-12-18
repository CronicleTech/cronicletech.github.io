<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>All About Quantum Computing | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Dive into the revolutionary world of quantum computing. Discover the principles, applications, and potential of this cutting-edge technology. Learn how quantum computers leverage superposition, entanglement, and interference to perform complex tasks. Explore the exciting realms of quantum cryptography, biology, and machine learning. Uncover the transformative impact quantum computing could have on various industries and the future of computational power.">

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
	<link rel = "stylesheet" href = "../../main/style.css">

	<style>

		h1 {
			font-size: 2.25em;
			text-align: center;
			margin-top: 20%;
			margin-bottom: 100px;
			animation: fade-right 0.75s ease-out;
		}

		div.panel {
			background-color: #373A52;
			border-radius: 25px;
			padding: 25px 20px;
			margin: 50px 20px;
			animation: fade-up 0.75s ease-out;
		}

		div.panel div.row {
			max-width: 100%;
		}

		div.panel div.col-lg-4 {
			padding: 0;
		}

		div.panel div.col-lg-8 {
			padding: 35px 35px 0 35px;
		}

		div.panel img {
			border-radius: 25px;
		}

		div.panel a h3 {
			color: #FFFFFF;
			font-size: 1.35em;
			min-height: 50px;
			margin: 25px 0 50px 0;
		}

		div.panel a h3:hover, div.panel a h3:active, div.panel a h3:focus {
			color: rgba(255, 255, 255, 0.75);
		}

		div.panel p {
			color: rgba(255, 255, 255, 0.5);
			font-weight: bold;
			margin-bottom: 0;
		}

		div.panel div.highlight {
			background-color: #8C52FF;
			color: #FFFFFF;
			font-weight: bold;
			font-size: .85em;
			border-radius: 40px;
			margin-bottom: 15px;
			padding: 7px 15px;
			transition: 0.5s ease background-color;
		}

		div.panel div.highlight:hover, div.highlight:active, div.highlight:focus {
			background-color: #FFFFFF;
			color: #8C52FF;
			cursor: pointer;
		}

		@media (max-width: 1200px) {

			div.panel div.col-lg-8 {
				padding: 15px 25px 0 25px;
			}

		}

		@media (max-width: 992px) {

			h1 {
				margin-top: 25%;
			}

			div.panel div.col-lg-8 {
				padding: 35px 25px;
			}

		}

		@media (max-width: 768px) {

			h1 {
				margin-top: 40%;
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

	<!-- Articles -->
	<div class = "container full">

		<div class = "row">

			<div class = "col-sm-1"></div>

			<div class = "col-sm-10">

				<h1>All About Quantum Computing</h1>

				<div class = "panel">

					<div class = "row">

						<div class = "col-lg-4">

							<img src = "../../articles/image/quantum-computing-principles.webp" alt = "quantum computing" class = "full">

						</div>

						<div class = "col-lg-8">

							<p>ARTICLE 1</p>

							<a href = "https://cronicle.space/articles/quantum-computing-principles/">

								<h3>Quantum Computing Principles in a Nutshell</h3>

							</a>

							<div class = "row">

								<a href = "https://cronicle.space/explore/?p=1&t=stechnology&n=0">

									<div class = "highlight">
										
										technology

									</div>

								</a>

							</div>

						</div>

					</div>

				</div>

				<div class = "panel">

					<div class = "row">

						<div class = "col-lg-4">

							<img src = "../../articles/image/quantum-computing-applications.webp" alt = "quantum apps" class = "full">

						</div>

						<div class = "col-lg-8">

							<p>ARTICLE 2</p>

							<a href = "https://cronicle.space/articles/quantum-computing-applications/">

								<h3>Applications of Quantum Computing</h3>

							</a>

							<div class = "row">

								<a href = "https://cronicle.space/explore/?p=1&t=stechnology&n=0">

									<div class = "highlight">
										
										technology

									</div>

								</a>

							</div>

						</div>

					</div>

				</div>

				<div class = "panel">

					<div class = "row">

						<div class = "col-lg-4">

							<img src = "../../articles/image/quantum-bells-inequality.webp" alt = "quantum inequality" class = "full">

						</div>

						<div class = "col-lg-8">

							<p>ARTICLE 3</p>

							<a href = "https://cronicle.space/articles/quantum-bells-inequality/">

								<h3>Quantum Supremacy Blog on Bell’s Inequality</h3>

							</a>

							<div class = "row">
								
								<a href = "https://cronicle.space/explore/?p=1&t=stechnology&n=0">

									<div class = "highlight">
										
										technology

									</div>

								</a>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Footer -->
	<footer>

		<div class = "container-fluid top">

			<div class = "container">

				<div class = "row">

					<div class = "col-md-1"></div>

					<div class = "col-md-5">

						<h3>Fostering our #CollectiveGenius</h3>

						<a class="footer-brand" href="https://cronicle.space">

							<div class="row">

								<img src="../../main/image/logo.webp" alt="Cronicle Logo" width="65" height="65">

								<p>Cronicle</p>

							</div>

						</a>

					</div>

					<div class = "col-md-5 right">

						<div class = "row social">

							<h3>Socials</h3>

							<a href = "https://twitter.com/cronicletech" target = "blank">
								<img src = "../../main/image/social twitter.webp" alt = "twitter" width = "35" height = "35">
							</a>

							<a href = "https://www.instagram.com/cronicletechnologies/" target = "blank">
								<img src = "../../main/image/social instagram.webp" alt = "instagram" width = "35" height = "35">
							</a>

							<a href = "https://www.linkedin.com/company/cronicle/" target = "blank">
								<img src = "../../main/image/social linkedin.webp" alt = "linkedin" width = "35" height = "35">
							</a>

						</div>

						<br class = "break">
						<br class = "break">
						<br class = "break">
						<br class = "break">

						<a href = "https://www.patreon.com/CronicleTechnologies" target = "blank" class = "link">Donate</a>

						<br>

						<a href = "https://cronicle.space/join/" class = "link">Join Waitlist</a>

						<br>

						<a href = "mailto:admin@cronicle.space" class = "link">Contact Us</a>

					</div>

				</div>

			</div>

		</div>

		<div class = "container-fluid bottom">

			<p>© Cronicle 2023 | All Rights Reserved</p>

		</div>

	</footer>

	<!-- Navigation Scrolling -->
	<script>

		window.addEventListener("scroll", function() {
			var $nav = $("nav");

			if (window.scrollY > 0) {
				$nav.addClass("scrolling-active");
			} else {
				$nav.removeClass("scrolling-active");
			}
		});

	</script>

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>