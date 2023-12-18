<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>All About Biometrics | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Demystifying Biometrics: Advantages, Drawbacks, and Everyday Impact. Explore the world of biometric technology - its unique features like fingerprints, facial recognition, and voice analysis. Discover its working process, applications in airport security, law enforcement, and mobile access. Delve into the pros and cons shaping its role in our lives.">

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

					<h1>All About Biometrics</h1>

					<div class = "row subtitle">

						<img src = "../image/main/author elif.webp" alt = "Elif Oktay" class = "author" width = "50" height = "50">

						<p>Elif Oktay</p>

						<p class = "break">|</p>

						<img src = "../image/main/icon calendar.svg" alt = "calendar" width = "20" height = "20" class = "date">

						<p class = "date">23 June 2022</p>

						<p class = "break date">|</p>

						<img src = "../image/main/icon clock.svg" alt = "clock" width = "20" height = "20">

						<p class = "time">2 Minute Read</p>

					</div>
					
				</div>

				<div class = "content">

					<img src = "image.webp" alt = "Biometrics" class = "full">

					<p>

						The use of biometrics technology is spreading rapidly. This type of technology has its advantages and disadvantages. And undeniably, it dramatically impacts our daily lives and societies. So, what is it? How does it work? And where is it used?

					</p>

					<h2>What is Biometrics?</h2>

					<p>

						Biometrics is a type of technology that identifies people by examining their unique physical and behavioral characteristics. Some of these characteristics are fingerprints, facial features, and voice. These characteristics are also called "biometric identifiers." Without these identifiers, biometric technologies wouldn't exist. 

						<br><br>

						The term "biometrics" is made up of two Greek words: "bio" and "metric." Bio means life, and metric means to measure. (These two words should be helpful reminders for the definition of biometrics!)

						<br><br>

						Biometrics are hard to imitate, easy to use, and fast. However, biometrics are also expensive, imperfect in identification, hackable, and can sometimes change (if an accident or surgery is in question). Users should consider the positive and negative aspects of this type of technology when deciding if they want to use it or not.

					</p>

					<h2>How Does Biometrics Work?</h2>

					<p>

						Biometrics can only work with what the user has (like a key), not with what they know (like a password). All biometric systems are made up of the same 3 steps:
					
					</p>

					<h3>1. Enrollment</h3>

					<p>

						Enrollment is the registration of a unique characteristic to the system. It first records the user's personal details, like the name and identification number. Then, it records or takes a photo of the biometric identifier that is being presented.

					</p>

					<h3>2. Storage</h3>

					<p>

						The recorded biometric identifier is then converted into a code or graph and stored in the system. Some biometric systems even store this information in a smart card, which users can bring anywhere they want.

					</p>


					<h3>3. Comparison</h3>

					<p>

						The system compares the recorded biometric identifiers and the offered biometric identifiers. After this comparison, the system accepts the user if the identifiers match. Otherwise, it rejects the user.

						<br><br>

						For these steps to work, the biometric system should contain these components:
						
					</p>

					<ul>

						<li>

							<b>Sensor</b> : Detects characteristics for identification</b>

						</li>

						<li>

							<b>Computer</b> : Processes and stores information

						</li>

						<li>

							<b>Software</b> : Analyzes characteristics, converts them into code or graph, and executes the comparison

						</li>

					</ul>
					
					<h2>Where Are Biometrics Used?</h2>

					<p>

						The use of biometric technologies has been spreading to more and more workspaces to create security and convenience. The following are some of the most common areas biometric technologies are being used:

					</p>

					<h3>1. Airport Security</h3>

					<p>

						Biometric technologies have been present in airports for a long time. But just in recent years has it been becoming more widespread. For example, at Hartsfield-Jackson Atlanta International Airport, passengers boarding from Terminal F with Delta Airlines or any of its partner airlines can use biometric systems (facial recognition in particular) to move through security.

					</p>

					<h3>2. Law Enforcement</h3>

					<p>

						Over the years, law enforcement has used biometric identifiers such as fingerprints, iris and facial recognition, gait, and voice recognition. The most common use of this technology is in identifying individuals through surveillance footage in criminal cases.

					</p>

					<h3>3. Mobile Access and Authentication</h3>

					<p>

						There are numerous ways to unlock our technological devices. Some are “better” than others. For example, touch ID, facial recognition, and iris recognition. With these ways, mobile access and authentication are made faster and easier.

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