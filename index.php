<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Tap into your hidden genius Croicle is an open source learning platform providing topics you actually care about.">

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
	<link rel = "stylesheet" href = "main/style.css">

	<style>

		h2 {
			font-size: 2.65em;
		}

		h3 {
			font-size: 2.05em;
		}

		p {
			font-size: 1.25em;
		}

		span.line-break {
			display: block; 
			width: 30%; 
			margin-left: 35%;  
			border: 1px solid rgba(255, 255, 255, 0.75);
		}

		header {
			margin-top: 10%;
			min-height: 100vh;
		}

		header h1 {
			font-size: 3.5em;
			margin-top: 15%;
			margin-bottom: 35px;
		}

		header p {
			font-size: 1.35em;
			margin-bottom: 50px;
		}

		header button.primary {
			margin-right: 20px;
		}

		header h1, header p, header button {
			animation: fade-right 0.75s ease-out;
		}

		header img {
			animation: fade-up 0.75s ease-out;
		}

		header img.small {
			width: 32vw; 
			margin-top: -125px; 
			margin-left: -115px;
		}

		div.genius {
			background: rgba(94, 100, 153, 0.60);
			padding: 75px 0;
		}

		div.genius h2 {
			font-size: 2.5em;
			margin-bottom: 45px;
		}

		div.genius p {
			font-size: 1.15em;
		}

		div.genius div.def {
			margin-bottom: 25px;
		}

		div.collab {
			text-align: center;
			padding-top: 15%;
		}

		div.collab h2 {
			margin-bottom: 50px;
		}

		div.features p.highlight {
			color: #8C52FF;
			font-size: 1.15em;
		}

		div.features h3 {
			color: rgba(255, 255, 255, 0.75);
			margin-bottom: 35px;
		}

		div.features div.col-sm-5.mobile {
			display: none;
		}

		div.reading {
			background: rgba(94, 100, 153, 0.60);
			text-align: center;
			padding: 10% 0;
		}

		div.reading h2 {
			margin-bottom: 50px;
		}

		div.reading div.panel {
			background-color: #373A52;
			border-radius: 25px;
			padding: 20px 15px;
			margin: 50px 20px 0 20px;
		}

		div.reading div.panel.center {
			margin-top: 85px;
		}

		div.reading div.panel img {
			border-radius: 25px;
		}

		div.reading div.panel h3 {
			font-size: 1.25em;
			margin: 25px 0;
			min-height: 75px;
		}

		div.reading div.panel div.row {
			width: fit-content;
			margin: auto;
		}

		div.reading div.panel div.row div.highlight {
			background-color: #8C52FF;
			font-weight: bold;
			border-radius: 40px;
			margin-bottom: 15px;
			padding: 5px 15px;
		}

		div.reading div.panel div.row div.highlight p {
			color: white;
			font-size: .9em;
			margin-bottom: 0;
		}
		
		div.waitlist {
			text-align: center;
			padding-top: 17.5%;
		}

		div.waitlist p {
			margin: 50px 0;
		}

		@media (max-width: 1360px) {

			header h1 {
				margin-top: 20%;
				font-size: 3em;
			}

			header p {
				font-size: 1.15em;
			}

			header img.prototype {
				margin-top: 5%;
			}

		}

		@media (max-width: 1200px) {

			div.reading div.col-md-4 {
				padding: 0;
			}

			div.reading div.panel {
				margin: 50px 10px 0 10px;
				padding: 15px;
			}

		}

		@media (max-width: 1195px) {

			header h1 {
				margin-top: 30%;
			}

			header img.prototype {
				margin-top: 20%;
			}

		}

		@media (max-width: 1070px) {

			header h1 {
				margin-top: 40%;
			}
			
			header img.prototype {
				margin-top: 30%;
			}

		}

		@media (max-width: 1040px) and (min-width: 768px) {

			div.reading div.panel h3 {
				font-size: 1.05em;
				min-height: 65px;
			}

		}

		@media (max-width: 992px) {

			header {
				text-align: center;
			}

			header h1 {
				margin-top: 5%;
				font-size: 2.5em;
			}

			header br {
				display: none;
			}

			header div.row {
				width: fit-content;
				margin: auto;
			}

			header div.image {
				text-align: center;
			}

			header img.prototype {
				content: url("image/header prototype.svg");
				width: 85%;
				max-width: 600px;
				margin: 75px 0;
			}

			header img.small {
				display: none;
			}

		}

		@media (max-width: 768px) {

			header h1 {
				margin-top: 20%;
			}

			h2, div.genius h2 {
				font-size: 2em;
			}

			h3 {
				font-size: 1.75em;
			}

			p, div.genius p {
				font-size: 1em;
			}

		}

		@media (max-width: 695px) {

			header br {
				display: initial;
			}

		}

		@media (max-width: 576px) {

			header {
				margin-top: 15%;
			}

			div.full {
				min-height: 85vh;
			}

			div.collab, div.waitlist {
				padding-top: 50%;
			}

			div.features div.col-sm-5.pc {
				display: none;
			}

			div.features div.col-sm-5.mobile {
				display: initial;
			}

			div.features img.full {
				width: 55%;
				margin: 50px 0;
			}

			div.features p.highlight {
				margin-top: 50px;
			}

			div.reading div.panel {
				margin: 50px 35px 0 35px;
			}

			div.reading div.panel.center {
				margin-top: 50px;
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

					<img src="main/image/logo.webp" alt="cronicle logo" width="40" height="40">

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

								<img src = "main/image/profile.svg" alt = "profile">

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

	<!-- Header Content -->
	<header>

		<span class = "purple-gradient" style = "position: absolute; right: 0; top: -15%;"></span>

		<span class = "blue-gradient" style = "position: absolute; left: -25%; top: 35%;"></span>

		<div class = "container-fluid full">

			<div class = "row">

				<div class = "col-lg-1"></div>

				<div class = "col-lg-5">

					<h1>Tap into your <br> <span class = "text-gradient">Hidden genius</span></h1>

					<p>open source learning in topics you actually <b>care</b> about.</p>

					<div class = "row">

						<a href = "https://cronicle.space/signup/">
							<button class = "primary">Sign Up</button>
						</a>

						<a href = "https://cronicle.space/login/">
							<button class = "secondary">Login</button>
						</a>

					</div>

				</div>

				<div class = "col-lg-1"></div>

				<div class = "col-lg-5 image" style = "padding: 0;">

					<img src = "image/header prototype cut.svg" alt = "cronicle prototype" class = "full prototype">

					<img src = "image/header progress.webp" alt = "progress" class = "small">

				</div>

			</div>

		</div>

	</header>

	<!-- Collective Genius -->
	<div class = "container-fluid genius">

		<div class = "container">

			<div class = "row">

				<div class = "col-sm-2"></div>

				<div class = "col-sm-8">

					<h2>Collective Genius</h2>

					<div class = "row def">

						<p style = "margin-right: 50px;">/kəˈlɛktɪv ˈdʒiniəs/</p>

						<p>noun.</p>

					</div>

					<p>The act of cultivating innovation, achieved by harnessing the brilliance of a group of extraordinary individuals</p>

				</div>

			</div>

		</div>

	</div>

	<!-- Collaborative -->
	<div class = "container collab full">

		<span class = "blue-gradient" style = "position: absolute; right: 0; top: 200%;"></span>

		<div class = "row">

			<div class = "col-sm-2"></div>

			<div class = "col-sm-8">

				<h2>Making Learning <br> <span class = "text-gradient">Collaborative Again</span></h2>
				
				<p>
					The Pandemic messed up collaborative learning; We’re here to bring that <span class = "highlight">back and better than ever.</span>

					<br><br>

					You’re getting a diverse knowledge bank all curated by your peers — <b>no more useless or unrelatable information</b>.
				</p>

			</div>

		</div>

	</div>

	<!-- Features -->
	<div class = "container features">

		<span class = "purple-gradient" style = "position: absolute; left: -20%; top: 350%;"></span>

		<span class = "blue-gradient" style = "position: absolute; right: 0; top: 450%;"></span>

		<span class = "line-break" style = "margin-bottom: 250px;"></span>

		<!-- Diversification -->
		<div class = "row semi-full">

			<div class = "col-sm-1"></div>

			<div class = "col-sm-5">

				<p class = "highlight">DIVERSIFICATION</p>

				<h3><b>Invest in Skills</b> tailored for <b>Gen Z</b></h3>

				<p>As a platform <span class = "highlight">built by Gen Z for Gen Z</span>, we know that the skills market is diversifying. We only focus on skills you actually need.</p>

			</div>

			<div class = "col-sm-5" style = "text-align: center;">

				<img src = "image/features-1.webp" alt = "" class = "full">

			</div>

		</div>

		<!-- Open Source -->
		<div class = "row semi-full">

			<div class = "col-sm-1"></div>

			<div class = "col-sm-5 pc" style = "text-align: center;">
				
				<img src = "image/features-2.webp" alt = "" class = "full">

			</div>

			<div class = "col-sm-5">

				<p class = "highlight">OPEN SOURCE</p>

				<h3><b>Share your wisdom</b> with your peers</h3>

				<p>All resources are curated by your peers, and you. Share insights, videos, articles, or honestly anything, anywhere, anytime; <span class = "highlight">No publishing bureaucracy.</span></p>

			</div>

			<div class = "col-sm-5 mobile" style = "text-align: center;">
				
				<img src = "image/features-2.webp" alt = "" class = "full">

			</div>

		</div>

		<div class = "row semi-full">

			<div class = "col-sm-1"></div>

			<div class = "col-sm-5">

				<p class = "highlight">GAMIFICATION</p>

				<h3><b>Learning</b> turned into <b>a Game</b></h3>

				<p>Set actionable goals, track your progress with custom <span class = "highlight">data visualization and earn gems</span> by sharing high-quality content and resources.</p>

			</div>

			<div class = "col-sm-5" style = "text-align: center;">

				<img src = "image/features-3.webp" alt = "" class = "full">

			</div>

		</div>

	</div>

	<!-- Reading Made Fun -->
	<div class = "container-fluid reading full">

		<div class = "container">

			<div class = "row">

				<div class = "col-md-3"></div>

				<div class = "col-md-6">

					<h2>Reading Made <span class = "text-gradient">Fun</span></h2>

					<p>Using AI and Machine Learning, we’ve transformed our articles into <span class = "highlight">fun, rapid, and easy-to-digest</span> pieces that you can skim through in <span class = "highlight">under 5 minutes.</span></p>

				</div>

			</div>

			<div class = "col-sm-12">

				<div class = "row">

					<div class = "col-md-4">

						<div class = "panel">

							<img src = "image/reading-1.webp" alt = "" class = "full">

							<h3>How to Stay Consistent</h3>

							<div class = "row">

								<div class = "highlight" style = "margin-right: 5px;">
									<p>productivity</p>
								</div>

								<div class = "highlight">
									<p>growth</p>
								</div>

							</div> 

						</div>

					</div>

					<div class = "col-md-4">

						<div class = "panel center">

							<img src = "image/reading-2.webp" alt = "" class = "full">

							<h3>The Realization that Changed my Life</h3>

							<div class = "row">

								<div class = "highlight" style = "margin-right: 5px;">
									<p>inspiration</p>
								</div>

								<div class = "highlight">
									<p>growth</p>
								</div>

							</div> 

						</div>

					</div>

					<div class = "col-md-4">

						<div class = "panel">

							<img src = "image/reading-3.webp" alt = "" class = "full">

							<h3>My 1 hour study Routine: Deep Work</h3>

							<div class = "row">

								<div class = "highlight" style = "margin-right: 5px;">
									<p>productivity</p>
								</div>

								<div class = "highlight">
									<p>growth</p>
								</div>

							</div> 

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Sign Up -->
	<div class = "container waitlist full">

		<span class = "blue-gradient" style = "position: absolute; left: -25%; top: 595%;"></span>

		<span class = "purple-gradient" style = "position: absolute; right: 0; top: 665%;"></span>

		<div class = "row">

			<div class = "col-sm-2"></div>

			<div class = "col-sm-8">

				<h2>Ready to Cultivate <br> <span class = "text-gradient">Your Genius?</span></h2>

				<p>Join our community of teen innovators, builders, and creators — because we know that <b>real collaboration</b> is key.</p>

				<a href = "https://cronicle.space/signup/">

					<button class = "primary">Sign Up</button>
					
				</a>

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

								<img src="main/image/logo.webp" alt="Cronicle Logo" width="65" height="65">

								<p>Cronicle</p>

							</div>

						</a>

					</div>

					<div class = "col-md-5 right">

						<div class = "row social">

							<h3>Socials</h3>

							<a href = "https://twitter.com/cronicletech" target = "blank">
								<img src = "main/image/social twitter.webp" alt = "twitter" width = "35" height = "35">
							</a>

							<a href = "https://www.instagram.com/cronicletechnologies/" target = "blank">
								<img src = "main/image/social instagram.webp" alt = "instagram" width = "35" height = "35">
							</a>

							<a href = "https://www.linkedin.com/company/cronicle/" target = "blank">
								<img src = "main/image/social linkedin.webp" alt = "linkedin" width = "35" height = "35">
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