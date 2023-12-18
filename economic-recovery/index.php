<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Five Lessons from the Global Pre-and Post-Economic Situation and Recovery | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Learn from History: Valuable Lessons for Economic Survival. Explore five crucial lessons from past global economic situations and recoveries to navigate the present and future challenges. From over-preparation to supporting job growth and controlling prices, uncover strategies to enhance national resilience. Boost disposable income, launch relief programs, and ensure stable economic conditions. Discover timeless insights to secure a prosperous future in an uncertain world.">

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

					<h1>Five Lessons from the Global Pre-and Post-Economic Situation and Recovery</h1>

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

				<div class = "content">

					<img src = "image.webp" alt = "bank recession" class = "full">

					<p>
						
						“Learn by hindsight, live by foresight.”

						<br><br>

						People say this tenet all the time, and I totally agree. History can teach us invaluable lessons useful to navigate the treacherous journey into the future. Whoever does not heed the gems of the lessons contained in the past, it is often said, is cursed to repeat the pain and suffering of the future. 

						<br><br>

						Let’s assume that the recession 2023 is not going to be the only recession that will happen in the future, we need to put ourselves in a backward gear and travel to the past to glean five important lessons that may help us in the present and foreseeable future. Let’s dive into five precious lessons coming from the highlights of history.

					</p>

					<h3>1. Always, Always Over Prepare</h3>

					<p>

						During the Great Recession in 2007-2009, the American government eased bank lending to prevent the worsening of a burst housing bubble and banking crisis on households’ income and wealth, which successfully stimulated consumer spending and business investment (Barnes, 2021). 

						<br><br>

						This is definitely the first and foremost part to tackle any impending recession. By taking action on monetary policies and financial areas that need to be improved, updated, and revised, the country can be better prepared for the inevitable, no matter how adverse the repercussion can be.

					</p>

					<h3>2. Support Job Growth</h3>

					<p>

	                	The American government tackled the Great Recession by paying utmost attention to the Troubled Asset Relief Program (TARP) and the 2009 Recovery Act, both of which were substantial in “arresting an even sharper downturn,” leading to a rapid recovery (Barnes, 2021). 

	                	<br><br>

						Let’s admit this fact: The population represents the biggest force, which can mean the greatest threat or the greatest opportunity. If the population has very little income and very few savings, it cannot contribute much to the turning of the wheel of the national economy. 

						<br><br>

						Moreover, the recent impact of the recession also shows that “unemployment fell faster than expected as the economy began to recover” and that “early in the pandemic, joblessness was even worse than the official statistics indicated” (Barnes,2021). As can be seen, every recession will impact the economy’s first frontline, which is the employment sector. 

						<br><br>

						Any risk to the national economy will impact the working professionals as a whole. This statement carries a very powerful message for all the government and policy makers.

					</p>

					<h3>3. Control the Trends in Prices and Wages</h3>

					<p>

	                	Nothing in the world can worsen the impact of inflation more than prices and wages. According to Barnes, since the war of Russia vs Ukraine, the changes of prices and wages were impacting the domestic situations of their countries, which had tremendous knock-on effects on those of the globe (Barnes, 2021). 

	                	<br><br>

						Learning from this wisdom, we can understand the fact that because recession will make the inflation soar, any government can cope with this lethal blow by countering the prices of goods and services and the income of the people. When these two areas are addressed accordingly, we can have a relatively stable national economy that is only little impacted by any crisis.

						<br><br>

						This situation prompted the Federal Reserve to maintain “a level of aggregate demand for goods and services consistent with a high level of employment, and it has been taking steps to address inflation since late 2021” (Barnes, 2021).

						<br><br>

						In general, this can be seen in the discontent brewing in England and the rest of Europe, which manifests in the nation-wide strike of Border Force personnels, NHS nurses, and ambulance drivers as well as ground handlers. 

						<br><br>

						Any wise government will most definitely address this issue first because they are the invisible hands that shape the economy of the nation.

					</p>

					<h3>4. Boost Disposable Personal Income (DPI) to Prevent the Rise of Poverty</h3>

					<p>
						
						Facing the crisis early on, the government dedicated much of its budget on social benefits to households in January and March in 2021, boosting the DPI by around “$115 billion each month since January than if it had grown at its trend pace” (Barnes,2021). 

						<br><br>

						The social benefits are enormously crucial to help the first group of people first to be impacted by the crushing impact of the recession. 

					</p>
					
					<h3>5. Launch Relief Programs on Delinquent Rent and Mortgage Payments</h3>

					<p>

	                	The efficacy of this action has been conducted in the United States with great success. To assist the American population struggling to pay for their mortgage and rent payment because of the much lower labor income, policymakers instigated a number of relief programs. 

	                	<br><br>

			            For example, Barnes reports that “the federal government has allocated $46.5 billion in relief to help renters make their back payments and to help landlords who are owed those payments” (Barnes, 2021).

			            <br><br>

						This action has played a tremendous role in successfully tackling the recent recession. These five gems of lessons remain timeless and highly practicable for the Indonesian government and that of any other country. 

						<br><br>

						Thank you for reading, guys! See you in the next article.

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