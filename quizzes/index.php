<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Quizzes | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Enhance your learning experience using slides. Discover how visual aids, organized content, and interactive elements in presentations can make complex topics easier to understand. Explore the benefits of visual learning, effective note-taking, and engaging with educational material through well-designed slides. Whether you're a student, educator, or lifelong learner, harness the power of slides to grasp concepts more effectively and retain information with greater ease.">

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

		h1 {
			font-size: 2.5em;
		}

		h1 span {
			color: rgba(255, 255, 255, 0.5);
		}

		p {
			font-size: 1.25em;
		}

		div.quizzes {
			text-align: center;
			margin-top: 10%;
		}

		div.quizzes h1 {
			margin-bottom: 50px;
			animation: fade-up 0.75s ease-out;
		}

		div.quizzes div.topic {
			margin-top: 100px;
			margin-bottom: 15px;
			margin-left: 35px;
			animation: fade-right 0.75s ease-out;
		}

		div.quizzes div.topic h2 {
			font-size: 1.15em;
			text-align: left;
			margin-top: 12px;
			margin-left: 25px;
		}

		div.quizzes div.panel-row {
			max-width: 100%;
		}

		div.quizzes div.panel {
			background-color: #373A52;
			border-radius: 25px;
			padding: 15px 20px;
			margin: 50px 5px;
			text-align: center;
			animation: fade-right 0.75s ease-out;
		}

		div.quizzes div.panel div.row {
			width: fit-content;
			margin: auto;
		}

		div.quizzes div.panel img.full {
			border-radius: 15px;
		}

		div.quizzes div.panel h3 {
			color: #FFFFFF;
			font-size: 1.25em;
			line-height: 1.5em;
			min-height: 60px;
			margin: 25px 0;
			user-select: none;
		}

		div.quizzes button {
			background-color: #8C52FF;
			color: #FFFFFF;
			font-size: 1em;
			font-weight: bold;
			width: 100%;
			border: none;
			outline: none;
			border-radius: 15px;
			padding: 15px 0;
			margin-top: 20px;
			transition: 0.5s ease background-color;
		}

		div.quizzes button:hover, div.quizzes button:active, div.quizzes button:focus {
			background-color: #FFFFFF;
			color: #8C52FF;
			cursor: pointer;
		}

		footer {
			margin-top: 100px;
		}

		@media (max-width: 1470px) {

			div.quizzes {
				margin-top: 12%;
			}

		}

		@media (max-width: 1200px) {

			span.purple-gradient, span.blue-gradient {
				display: none;
			}

		}

		@media (max-width: 1200px) and (min-width: 992px) {

			div.quizzes div.panel h3 {
				font-size: 1.15em;
				min-height: 90px;
			}

		}

		@media (max-width: 992px) {
			
			div.quizzes div.panel {
				padding: 15px;
			}

		}

		@media (max-width: 768px) {

			p {
				font-size: 1em;
			}

			div.quizzes {
				margin-top: 25%;
			}

		}

		@media (max-width: 576px) {

			div.quizzes {
				margin-top: 45%;
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

					<img src="../main/image/logo.webp" alt="cronicle logo" width="40" height="40">

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

								<img src = "../main/image/profile.svg" alt = "profile">

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

	<!-- Quizzes -->
	<div class = "container quizzes full">

		<span class = "purple-gradient" style = "position: absolute; right: 0; top: -15%;"></span>

		<span class = "blue-gradient" style = "position: absolute; left: -25%; top: 35%;"></span>

		<div class = "col-sm-12">

			<h1>Play <span>Quizzes</span></h1>

		</div>

		<div class = "col-sm-12">

			<div class = "row topic">

				<img src = "image/icon technology.svg" alt = "technology" width = "45" height = "45">

				<h2>Technology</h2>

			</div>

			<div class = "row panel-row">

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/computer-parts.webp" alt = "computer parts" class = "full">

						<h3>Parts of a Whole: What Computers are Made of</h3>

						<a href = "https://cronicle.space/quizzes/computer-parts/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/social-media.webp" alt = "social media" class = "full">

						<h3>Social Media: Which Platform is Which?</h3>


						<a href = "https://cronicle.space/quizzes/social-media/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/sea-tech-unicorns.webp" alt = "tech unicorns" class = "full">

						<h3>Southeast Asia's Tech Unicorns: The Origin</h3>

						<a href = "https://cronicle.space/quizzes/sea-tech-unicorns/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/web-development.webp" alt = "web development" class = "full">

						<h3>Demystifying Web Development</h3>

						<a href = "https://cronicle.space/quizzes/web-development/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

			</div>

			<div class = "row topic">

				<img src = "image/icon school.svg" alt = "school" width = "45" height = "45">

				<h2>School Related</h2>

			</div>

			<div class = "row panel-row">

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/world-geography.webp" alt = "world geography" class = "full">

						<h3>World Geography Challenge</h3>


						<a href = "https://cronicle.space/quizzes/world-geography/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/elementary-science.webp" alt = "elementary science" class = "full">

						<h3>Elementary Science Assessment</h3>


						<a href = "https://cronicle.space/quizzes/elementary-science/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/prealgebra-foundations.webp" alt = "prealgebra" class = "full">

						<h3>Foundations of Pre-Algebra</h3>

						<a href = "https://cronicle.space/quizzes/prealgebra-foundations/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/american-history.webp" alt = "american history" class = "full">

						<h3>Exploring the Foundations of American History</h3>


						<a href = "https://cronicle.space/quizzes/american-history/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

			</div>

			<div class = "row topic">

				<img src = "image/icon finance.svg" alt = "finance" width = "45" height = "45">

				<h2>Finance</h2>

			</div>

			<div class = "row panel-row">

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/crypto-craze.webp" alt = "crypto" class = "full">

						<h3>Crypto Craze Challenge</h3>

						<a href = "https://cronicle.space/quizzes/crypto-craze/">

							<button>Begin Quiz</button>

						</a>

					</div>

				</div>

				<div class = "col-lg-4">

					<div class = "panel">

						<img src = "image/economics-essentials.webp" alt = "economics" class = "full">

						<h3>Economics Essentials Quiz</h3>


						<a href = "https://cronicle.space/quizzes/economics-essentials/">

							<button>Begin Quiz</button>

						</a>

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

								<img src="../main/image/logo.webp" alt="Cronicle Logo" width="65" height="65">

								<p>Cronicle</p>

							</div>

						</a>

					</div>

					<div class = "col-md-5 right">

						<div class = "row social">

							<h3>Socials</h3>

							<a href = "https://twitter.com/cronicletech" target = "blank">
								<img src = "../main/image/social twitter.webp" alt = "twitter" width = "35" height = "35">
							</a>

							<a href = "https://www.instagram.com/cronicletechnologies/" target = "blank">
								<img src = "../main/image/social instagram.webp" alt = "instagram" width = "35" height = "35">
							</a>

							<a href = "https://www.linkedin.com/company/cronicle/" target = "blank">
								<img src = "../main/image/social linkedin.webp" alt = "linkedin" width = "35" height = "35">
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