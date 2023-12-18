<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Bank Indonesia: What It Has Done and Can Do for the Impending Recession | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Exploring Bank Indonesia's Economic Role: Navigating Challenges and Ensuring Stability. Join us in uncovering the pivotal role of Indonesia's central bank, Bank Indonesia, in maintaining economic stability. Discover insights into its efforts to counter external factors, foster private consumption, and drive industry growth. Gain a deeper understanding of the measures taken to safeguard the nation's economy for a promising future.">

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

	<link rel = "stylesheet" href = "../../main/article.css">

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

		<div class = "row container-row">

			<div class = "col-md-2"></div>

			<div class = "col-md-8">

				<div class = "top-content">

					<h1>Bank Indonesia: What It Has Done and Can Do for the Impending Recession</h1>

					<div class = "row subtitle">

						<img src = "../image/main/author austin.webp" alt = "Astin Lityo" class = "author" width = "50" height = "50">

						<p>Austin Lityo</p>

						<p class = "break">|</p>

						<img src = "../image/main/icon calendar.svg" alt = "calendar" width = "20" height = "20" class = "date">

						<p class = "date">3 February 2023</p>

						<p class = "break date">|</p>

						<img src = "../image/main/icon clock.svg" alt = "clock" width = "20" height = "20">

						<p class = "time">4 Minute Read</p>

					</div>
				</div>

				<!-- Content -->
				<div class = "content">

					<img src = "image.webp" alt = "bank recession" class = "full">

					<p>
					
						Hi, everyone! Thank you for making it so far! 

						<br><br>

						Since you all know I’m Indonesian, let me get back to my roots and share the information with you all about our Indonesia’s central bank, Bank Indonesia. 
						
						<br><br>

						Since 1953, Bank Indonesia has wielded relatively enormous power over the stability of the national economy, but whether it has exerted its influence on the overall economy remains a question we need to ask ourselves today.

						<br><br>

						Well, first of all, we have to admit that a strong US dollar and an upcoming crisis are definitely going to affect us adversely. The logic is that, and this statement is supported by data, “strong US dollar causes imported inflation into Indonesia” (Indonesia Investment, 2022). According to the experts, “Accelerating Indonesian inflation limits Indonesian consumers’ purchasing power, and therefore consumption should weaken as a consequence, thereby dragging down the pace of national economic growth (domestic consumption accounts for about 53-55 percent of the country’s total economic growth)” (Indonesia Investment, 2022). What these mean is that Indonesia’s trade balance can weaken in the face of a worldwide economic crisis.

						<br><br>

						One prominent example is what happened to the world’s global workshop: China. Currently, the country is recording its lowest position against the US dollar, which may translate into a reduction in the demand of Chinese importers. Since China presents an economic impact on literally any country on the planet, its meltdown is going to reverberate globally, impacting even our country, believe it or not.

					</p>

					<h2>Endeavors Made</h2>

					<p>

						So, what has Bank Indonesia done? According to Thee Kian Wie, the Indonesian government has emphasized solid macro-centric policies, “including putting a maximum cap of 3 percent on its budget deficit, and Bank Indonesia has pursued monetary policy aimed at preventing inflation” (Wie, 2010). When the inflation rate is checked, the prices of goods and services can be controlled. If so, people will still be able to afford goods and services, aiding the national economy even further despite whether the recession occurs or not. 

						<br><br>

						It has also solidified its external balances, dramatically enhanced its foreign exchange reserve to alleviate upcoming impact, cut down governmental debt to stabilize fiscal situation, and supervise the practice of banks more thoroughly (Wie, 2010). These moves are made to ensure that not only are the internal national affairs in place, but the economic relationship between countries, including liabilities, is something that can be managed if the worst comes to the worst. 

						<br><br>

						Otherwise, international debt can weigh down the country and become an adverse external factor down the lane of the recession later. Lastly, Bank Indonesia has made the banking regulations more strict to ensure that the existing banks are healthier to cushion the blow (Wie, 2010). Because the country has experienced four economic crises, Indonesia has been wiser in tackling the economic threat that can shake its stability.

					</p>

					<h2>The Promising Future</h2>

					<p>

	                    In the future, Bank Indonesia would have to ensure that Indonesia keeps spending its money to keep the industry rolling. This action needs to center on private consumption, especially by the lower segments of the society. According to Chatib Basri, the Minister of Finance Republic of Indonesia 2013-2014, if the country could maintain private consumption at 50 percent of Gross Domestic Product,” the country will be able to fight back against the impending recession (The Ministry of State-owned Enterprise, PR-192/S.MBU.B/10/2022). 

						<br><br>

						When individuals consume goods and services, this situation is good to keep the industry moving forward, so no matter what happens, the government needs to ensure the retention of such consumptive behavior. Another action to propel this factor is for the government to spur the growth and development of private consumption. This can be done through various policies that provide financial assistance. 
						
						<br><br>

						According to the Minister, the forms of such financial aid can come in the form of “Direct Cash Aid [Bantuan Langsung Tunai] and the Family Hope Program [Program Keluarga Harapan]” (https://bumn.go.id/media/press-conference/,2022). It is hoped that these programs will hasten the track of people’s “affordability to spend money.”

						<br><br>

						In conclusion, Bank Indonesia has gone the extra mile to emphasize solid macro-centric policies. In the future, Bank Indonesia needs more private spending on consumption to ensure that the industry keeps rolling. 

						<br><br>
						
						Thank you so much everyone for reading this article. See you in the next chapter.

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