<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>How Banks Can Minimize the Impacts of Recession | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Navigating Financial Institutions: Safeguarding Our Economy Amidst Challenges. Delve into the crucial roles of central banks and their actions to protect economies during crises. Explore strategies such as lowering capital requirements, discount lending, and fostering financial resilience. Understand the significance of these measures and their impact on shaping a stable economic future.">

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
	<div class = "container container-row">

		<div class = "row">

			<div class = "col-md-2"></div>

			<div class = "col-md-8">

				<div class = "top-content">

					<h1>How Banks Can Minimize the Impacts of Recession</h1>

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
					
						Welcome back! I’m super happy to see you all here! Now that we have covered the topics of what we can do to protect our future and that of our parents and extended family, it is high time we paid attention to our esteemed financial institutions: Banks! Do they serve their roles? Can they help in times of crisis? If so, what are possible actions for them to pursue? Even more importantly, does what they do work to safeguard our economy?

					</p>

					<h2>General Roles of Central Banks</h2>

					<p>

						First, we have to understand the primary, more general roles of central banks. To mention them on top of my head (thanks to my econ classes at UCSD), some general roles of the banks include conducting monetary and exchange rate policy, having management of the official International Reserves, and having oversight of the Financial System.

						<br><br>

						The last part deserves much of our attention because it directly connects to what we will be covering here. The Financial System sounds fancy, but where do we go from here?

						<br><br>

						Because financial winter is coming, we need to delve into this Financial System and the possible course of action which can be undertaken by our existing banks. Let’s start with the first one! For one, banks can lower capital requirements against potential debt redemption. This can allow lenders, which is represented by a large segment of the general populace, to have greater flexibility to run their reserves and invest in potential business ventures, which they have on their mind (Hayes, 2022).

						<br><br>

						In spite of the enormous potential to make them more vulnerable, this situation enables more people to have more leeway to explore possible sources of income to stave off the impending financial crisis, a situation which is much needed during the most challenging of times.

					</p>

					<h2>Discount Lending</h2>

					<p>

	                    Another possible course of action is discount lending. At a time when money is exceedingly hard to come by, this action represents a subtle emergency bailout loan and a last resort to protect the interest of lenders, “given the risky nature of the loans” (OliverWyman, 2020).

	                    <br><br>
						
						With reduction in lending, risky loans became less risky and more tempting for people to snatch up. This course of action is usually accompanied by “a host of new lending facilities similar to discount lending, targeted at supporting specific sectors of the economy or the prices of specific asset classes” (Elliott, 2020).

						<br><br>

						Once the rate of inflation is brought down, the banks could repeal this policy. Discount lending is one of the best ways for banks because giving people the ready access to funding, the discount window allows depository institutions to manage their liquidity risks efficiently and prevent actions that can develop adverse consequences for their customers, like withdrawing credit during the period when the market is facing so much pressure.

					</p>

					<h2>Financial Resistance</h2>

					<p>

	                    The next step which banks can take is to prevent financial resilience and develop for growth. One of the ways to do this is by first evaluating plausible impacts on volumes and credit quality. In this regard, they can prepare the ground for repricing of assets and liabilities. This action is crucial to protect the existing assets and liabilities so that they will not pose dangers if the recession is prolonged. 

	                    <br><br>


	                    Next, banks can check inflationary pressure on salaries and other costs,” preparing itself to win over employees through offers of reskilling, location flexibility, and ensuring the possibility to hunt for new gifted people in the correct employment category (Ferreira, 2022). 

	                    <br><br>

						By winning the capital in human resources, half of the battle against the recession is already won too. The important aspect is how to tap into these manpower resources to turn over the situation or survive in the long battle of a protracted financial crisis. Thirdly, banks can fortify their capacity to tackle non-performing assets “by developing innovative client assistance techniques and renegotiation skills” (Ferreira, 2022). 

						<br><br>

						Fourth, banks can increase the robustness of their balance sheets by focusing more on accurate capital and liquidity assessments. By doing so, these financial institutions can have an emergency exit plan to protect themselves when the worst comes to the worst.

						<br><br>

						Why are these important? What do these roles have to do with us? Why do we need to grasp these? Because our institutions need us to understand why they do what they do, because some of us are going to lead in these banks, and because some of us are destined to save the economy of our own nation. 

						<br><br>

						What is a better call than doing these herculean tasks and saving the lives of millions of people? What is a more noble action to take? What is a more meaningful aspiration? Not even Marvel superheroes can do so!

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