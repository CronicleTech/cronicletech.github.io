<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Introduction to HTML & CSS | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Begin your journey into web development with our comprehensive guide to HTML and CSS. Learn the basics of structuring web content using HTML and styling it with CSS. Explore step-by-step tutorials, practical examples, and hands-on exercises to create visually appealing and responsive web pages. Whether you're a beginner or looking to refresh your skills, our guide will help you build a strong foundation in web design and development.">

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

	<link rel = "stylesheet" href = "../../main/slide.css">

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
	<div class = "container">

		<div class = "row" style = "max-width: 100%;">

			<div class = "col-sm-1"></div>

			<div class = "col-sm-10 content">

				<div id = "carousel" class = "carousel slide" data-ride = "carousel" data-interval = "15000">

					<ol class = "carousel-indicators">

					    <li data-target = "#carousel" data-slide-to = "0" class = "active"></li>
					    <li data-target = "#carousel" data-slide-to = "1"></li>
					    <li data-target = "#carousel" data-slide-to = "2"></li>
					    <li data-target = "#carousel" data-slide-to = "3"></li>
					    <li data-target = "#carousel" data-slide-to = "4"></li>
					    <li data-target = "#carousel" data-slide-to = "5"></li>
					    <li data-target = "#carousel" data-slide-to = "6"></li>
					    <li data-target = "#carousel" data-slide-to = "7"></li>
					    <li data-target = "#carousel" data-slide-to = "8"></li>
					    <li data-target = "#carousel" data-slide-to = "9"></li>
					    <li data-target = "#carousel" data-slide-to = "10"></li>
					    <li data-target = "#carousel" data-slide-to = "11"></li>
					    <li data-target = "#carousel" data-slide-to = "12"></li>
					    <li data-target = "#carousel" data-slide-to = "13"></li>
					    <li data-target = "#carousel" data-slide-to = "14"></li>
					    <li data-target = "#carousel" data-slide-to = "15"></li>

				  	</ol>

				  	<div class = "carousel-inner">
				    	
				    	<div class = "carousel-item active">

				    		<img class = "d-block w-100" src = "image/1.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/2.svg">

				    	</div>

						<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/3.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/4.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/5.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/6.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/7.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/8.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/9.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/10.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/11.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/12.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/13.svg">

				    	</div>

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/14.svg">

				    	</div>				    	

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/15.svg">

				    	</div>	

				    	<div class = "carousel-item">

				      		<img class = "d-block w-100" src = "image/16.svg">

				    	</div>	

				  	</div>

				</div>

				<div class = "desc">

					<h1>Introduction to HTML & CSS</h1>

					<div class = "row subtitle">

						<img src = "../../articles/image/main/author kevin.webp" alt = "Kevin Wijaya" class = "author" width = "50" height = "50">

						<p>Kevin Wijaya</p>

						<p class = "break info">|</p>

						<img src = "../../articles/image/main/icon calendar.svg" alt = "calendar" width = "20" height = "20" class = "info">

						<p class = "info">31 August 2023</p>

						<p class = "break info">|</p>

						<img src = "../../articles/image/main/icon clock.svg" alt = "clock" width = "20" height = "20" class = "info">

						<p class = "info">5 Minute View</p>

					</div>

					<p class = "caption">
						
						HTML and CSS are fundamental languages for web development. HTML structures content, using elements like headings, paragraphs, and images to define a webpage's layout and elements, whereas CSS controls the visual presentation, allowing designers to style HTML elements with colors, fonts, spacing, and more. 

						<br><br>

						Separating structure (HTML) from presentation (CSS) enhances web design's flexibility and efficiency. Modern web development often involves frameworks and libraries, but a solid grasp of HTML and CSS remains essential for understanding how websites are built and styled, providing a foundation for more advanced coding and design practices.

					</p>

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

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>