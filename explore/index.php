<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Explore | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Whether you're seeking to stay informed, gain expertise, or simply explore new ideas, search through our valuable source of informative articles, series, and slides.">

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

	<!-- Search Engine -->
	<script src = "search.js" defer></script>
	
	<!-- Main CSS -->
	<link rel = "stylesheet" href = "../main/style.css">

	<style>

		p {
			font-size: 1.25em;
		}

		div.top {
			margin-top: 7%;
		}

		div.select {
			background-color: #1A1C2C;
			padding: 25px 15px 15px 15px;
			border-radius: 15px;
			height: fit-content;
			box-shadow: 0px 0px 64px 0px rgba(5, 6, 10, 0.25);
			animation: fade-right 0.75s ease-out;
		}

		div.select button.type {
			background-color: transparent;
			color: #FFFFFF;
			font-weight: bold;
			text-align: left;
			border-radius: 15px;
			border: none;
			outline: none;
			width: 100%;
			margin-bottom: 10px;
			padding: 15px 0 15px 30px;
			transition: 0.25s ease background-color;
		}

		div.select button.type:hover, button.type:focus, button.type:active {
			background-color: #353852;
			cursor: pointer;
		}

		div.select button.type.active {
			background-color: #353852;
		}

		div.page {
			display: none;
		}

		div.page.active {
			display: initial;
		}

		div.search {
			margin-bottom: 25px;
			text-align: center;
			animation: fade-right 0.75s ease-out;
		}

		div.search div.col-sm-12 {
			padding: 0 35px;
		}

		div.search div.search-bar {
			background-color: #353852;
			width: 100%;
			padding: 0 50px;
			border-radius: 15px;
			margin-bottom: 25px;
		}

		div.search div.search-bar svg {
			margin: 20px 15px 20px 0;
		}

		div.search div.search-bar input {
			background-color: #353852;
			color: #FFFFFF;
			font-size: 1.25em;
			padding: 20px;
			width: 80%;
			line-height: 100%;
			outline: none;
			border: none;
		}

		div.search div.tbutton {
			background-color: #373A52;
			color: rgba(255, 255, 255, 0.75);
			font-weight: bold;
			font-size: .85em;
			padding: 10px 25px;
			margin: 25px 30px 0 0;
			border-radius: 45px;
			transition: 0.25s ease background-color;
		}

		div.search div.tbutton:hover, div.tbutton:active, div.tbutton:focus {
			background-color: #8C52FF;
			color: #FFFFFF;
			cursor: pointer;
		}

		div.search div.active {
			background-color: #FFFFFF;
			color: #8956FF;
		}

		div.search div.active:hover, div.active:active, div.active:focus {
			background-color: #FFFFFF;
			color: #8956FF;
		}

		div.content {
			text-align: center;
			margin-bottom: 100px;
			animation: fade-up 0.75s ease-out;
		}

		div.content div.panels {
			max-width: 100%;
			display: grid;
			grid-template-columns: repeat(3, 33%);
		}

		div.content div.panel {
			background-color: #373A52;
			border-radius: 25px;
			padding: 20px 15px;
			margin: 50px 20px;
		}

		div.content div.panel img {
			border-radius: 15px;
		}

		div.content div.panel a h3 {
			color: #FFFFFF;
			font-size: 1.25em;
			margin: 25px 0;
			min-height: 85px;
		}

		div.content div.panel a h3:hover, div.content a h3:active, div.content a h3:focus {
			color: rgba(255, 255, 255, 0.75);
		}

		div.content div.panel div.row {
			width: fit-content;
			margin: auto;
		}

		div.content div.panel div.highlight {
			background-color: #8C52FF;
			color: #FFFFFF;
			font-weight: bold;
			font-size: .85em;
			border-radius: 40px;
			margin-bottom: 15px;
			padding: 7px 15px;
			width: fit-content;
			transition: 0.5s ease background-color;
		}

		div.content div.panel div.highlight:hover {
			cursor: pointer;
		}

		div.content div.panel div.highlight:hover, div.highlight:active, div.highlight:focus {
			background-color: #FFFFFF;
			color: #8C52FF;
		}

		div.content div.panel div.highlight span {
			display: none;
		}

		div.content div.dpanels {
			max-width: 100%;
			display: grid;
			grid-template-columns: repeat(2, 50%);
		}

		div.content div.dpanel {
			background-color: #373A52;
			border-radius: 25px;
			padding: 15px 20px;
			margin: 50px 35px;
			text-align: left;
		}

		div.content div.dpanel div.row {
			width: 100%;
		}

		div.content div.dpanel div.col-lg-6.img {
			padding: 0;
		}

		div.content div.dpanel div.col-lg-6.text {
			padding: 0 25px;
		}

		div.content div.dpanel a h3 {
			color: #FFFFFF;
			font-size: 1.35em;
			line-height: 1.75em;
			min-height: 100px;
			margin: 0;
		}

		div.content div.dpanel div.highlight {
			width: fit-content;
		}

		div.content div.dpanel p {
			color: rgba(255, 255, 255, 0.75);
			font-size: 1em;
			margin-top: 35px;
			margin-bottom: 0;
		}

		div.content div.qpanels {
			max-width: 100%;
			display: grid;
			grid-template-columns: repeat(3, 33%);
		}

		div.content div.qpanel {
			padding: 15px;
			text-align: center;
		}

		div.content div.qpanel div.row {
			width: fit-content;
			margin: auto;
		}

		div.content div.qpanel a h3 {
			color: #FFFFFF;
			font-size: 1.25em;
			line-height: 1.5em;
			min-height: 60px;
			margin: 25px 0;
		}

		@media (min-width: 1665px) {

			div.top {
				margin-top: 10%;
			}

			div.content-container {
				padding: 0 10%;
			}

		}

		@media (max-width: 1470px) {

			div.top {
				margin-top: 11.5%;
			}

		}

		@media (max-width: 1420px) {

			div.content div.dpanels {
				grid-template-columns: repeat(1, 100%);
			}

			div.content div.dpanel div.col-lg-6.img {
				padding: 0 75px;
			}

			div.content div.dpanel div.col-lg-6.text {
				padding: 25px;
			}

			div.content div.dpanel a h3 {
				min-height: 100px;
			}

		}

		@media (max-width: 1270px) {

			div.content div.qpanels {
				grid-template-columns: repeat(2, 50%);
			}

		}

		@media (max-width: 1250px) {

			div.search div.col-sm-12 {
				padding: 0;
			}

			div.content div.panels {
				grid-template-columns: repeat(2, 50%);
			}

			div.content div.panel {
				margin: 50px 30px;
			}

			div.content div.dpanel div.col-lg-6.img {
				padding: 0 25px;
			}

		}

		@media (max-width: 1040px) and (min-width: 768px) {

			div.content div.panel h3 {
				font-size: 1.05em;
				min-height: 65px;
			}

		}

		@media (max-width: 1040px) {

			div.top {
				margin-top: 15%;
			}

			div.content div.panel {
				margin: 50px 20px;
			}

		}

		@media (max-width: 992px) {

			div.select button.type {
				padding: 15px 0 15px 20px;
			}

			div.content div.dpanel {
				margin: 50px 35px;
			}

			div.content div.dpanel div.col-lg-6.img {
				padding: 0;
			}

		}

		@media (max-width: 870px) {

			div.content div.panels {
				grid-template-columns: repeat(1, 100%);
			}

			div.select button.type {
				padding: 15px 0 15px 15px;
			}

		}

		@media (max-width: 768px) {

			p {
				font-size: 1em;
			}

			div.top {
				margin-top: 20%;
			}

			div.select button.type {
				padding: 15px 0 15px 30px;
			}

			div.search div.search-bar {
				margin-top: 50px;
			}

			div.search div.tbutton.second {
				display: none;
			}

			div.search div.tbutton.second.active {
				display: initial;
			}

			div.content div.qpanels {
				grid-template-columns: repeat(1, 100%);
			}

		}

		@media (max-width: 576px) {

			div.top {
				margin-top: 30%;
			}

			div.search div.search-bar input {
				width: 60%;
			}

			div.search div.tbutton {
				font-size: .75em;
				padding: 10px 20px;
				margin: 25px 10px 0 0;
			}

			div.content div.col-sm-12 {
				padding: 0;
			}

			div.content div.panel {
				margin: 50px 0 0 0;
			}

			div.content div.panel.center {
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

	<div class = "container-fluid content-container">

		<div class = "col-sm-12 top">

			<div class = "row" style = "max-width: 100%;">

				<div class = "col-lg-2 select">
					
					<button class = "type active" onclick = "page(0)">Articles</button>

					<button class = "type" onclick = "page(1)">Series</button>

					<button class = "type" onclick = "page(2)">Slides</button>

					<button class = "type" onclick = "page(3)">Quizzes</button>

				</div>

				<div class = "col-lg-10">

					<div class = "page active">

						<!-- Search -->
						<div class = "search">

							<div class = "col-sm-12">

								<div class = "search-bar">

									<div class = "row">

										<svg width="30" height="30" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">

											<path d="M32.7081 28H30.6414L29.9089 27.325C32.4726 24.475 34.0161 20.775 34.0161 16.75C34.0161 7.775 26.4035 0.5 17.0119 0.5C7.62043 0.5 0.0078125 7.775 0.0078125 16.75C0.0078125 25.725 7.62043 33 17.0119 33C21.2237 33 25.0954 31.525 28.0777 29.075L28.784 29.775V31.75L41.8641 44.225L45.762 40.5L32.7081 28ZM17.0119 28C10.4981 28 5.23985 22.975 5.23985 16.75C5.23985 10.525 10.4981 5.5 17.0119 5.5C23.5258 5.5 28.784 10.525 28.784 16.75C28.784 22.975 23.5258 28 17.0119 28Z" fill="white" fill-opacity="0.5"/>

										</svg>

										<input type = "search" id = "search" placeholder = "search articles" autocomplete = "off" onkeyup = "search()">

									</div>

								</div>

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

									<div class = "tbutton second" id = "growth" onclick = "active('growth', 6)">

										growth

									</div>

									<div class = "tbutton second" id = "leadership" onclick = "active('leadership', 7)">

										leadership

									</div>

									<div class = "tbutton second" id = "volunteering" onclick = "active('volunteering', 8)">

										volunteering

									</div>

									<div class = "tbutton second" id = "science" onclick = "active('science', 9)">

										science

									</div>

									<div class = "tbutton second" id = "history" onclick = "active('history', 10)">

										history
										
									</div>

									<div class = "tbutton second" id = "coding" onclick = "active('coding', 11)">

										coding
										
									</div>

								</div>

							</div>

						</div>

						<!-- Articles -->
						<div class = "content full">

							<div class = "col-sm-12 panels">

								<div class = "panel apanel">

									<img src = "../articles/image/information-sharing.webp" alt = "sharing information" class = "full">

									<a href = "https://cronicle.space/articles/information-sharing/">

										<h3>Is Sharing Information for Scientific and Academic Behalf Crucial?</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('productivity', 0)">productivity</div>

										<div class = "highlight" onclick = "topic('growth', 6)">growth</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/why-teens-volunteer.webp" alt = "teens volunteer" class = "full">

									<a href = "https://cronicle.space/articles/why-teens-volunteer/">

										<h3>3 Reasons Why Teens Should Volunteer</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('community', 5)">community</div>

										<div class = "highlight" onclick = "topic('volunteering', 8)">volunteering</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/blackholes-and-wormholes.webp" alt = "blackholes and wormholes" class = "full">

									<a href = "https://cronicle.space/articles/blackholes-and-wormholes/">
										
										<h3>Black Holes and Wormholes</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('school', 4)">school</div>


										<div class = "highlight" onclick = "topic('science', 9)">science</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/benefits-of-female-leaders.webp" alt = "female leaders" class = "full">

									<a href = "https://cronicle.space/articles/benefits-of-female-leaders/">

										<h3>The Greater Benefits of Having More Female Representations</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('leadership', 7)">leadership</div>

										<div class = "highlight" onclick = "topic('growth', 6)">growth</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/cybersecurity-safety.webp" alt = "cybersecurity" class = "full">

									<a href = "https://cronicle.space/articles/cybersecurity-safety/">

										<h3>Cybersecurity - How to Keep Yourself Safe in the Digital World</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('technology', 1)">technology</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/effects-of-competition.webp" alt = "competition" class = "full">

									<a href = "https://cronicle.space/articles/effects-of-competition/">

										<h3>The Surprising Effects of Establishing Competition Among Youngsters</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('productivity', 0)">productivity</div>

										<div class = "highlight" onclick = "topic('growth', 6)">growth</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/effectiveness-of-advertisements.webp" alt = "advertisements" class = "full">

									<a href = "https://cronicle.space/articles/effectiveness-of-advertisements/">

										<h3>Are Advertisements Effective in Driving Corporate Goals?</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('marketing', 2)">marketing</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/2d-vs-3d-printers.webp" alt = "3D printers" class = "full">

									<a href = "https://cronicle.space/articles/2d-vs-3d-printers/">

										<h3>What are 3D Printers and How are They Different From 2D Printers?</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('technology', 1)">technology</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/ways-to-beat-procrastination.webp" alt = "procrastination" class = "full">

									<a href = "https://cronicle.space/articles/ways-to-beat-procrastination/">

										<h3>3 Ways of Beating Procrastination</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('productivity', 0)">productivity</div>

										<div class = "highlight" onclick = "topic('growth', 6)">growth</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/bakiak-slippers.webp" alt = "bakiak slippers" class = "full">

									<a href = "https://cronicle.space/articles/bakiak-slippers/">

										<h3>Hidden Gems of the “Bakiak Slippers Project”</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('community', 5)">community</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/imperialism-on-india.webp" alt = "imperialism" class = "full">

									<a href = "https://cronicle.space/articles/imperialism-on-india/">

										<h3>Imperialism: Effects on India</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('school', 4)">school</div>

										<div class = "highlight" onclick = "topic('history', 10)">history</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/excellent-presentation-tips.webp" alt = "presentation" class = "full">

									<a href = "https://cronicle.space/articles/excellent-presentation-tips/">

										<h3>5 Tips: How To Create an Excellent Presentation</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('school', 4)">school</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/pr-vs-marketing.webp" alt = "marketing strategies" class = "full">

									<a href = "https://cronicle.space/articles/pr-vs-marketing/">

										<h3>Public Relations vs Marketing Strategies</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('marketing', 2)">marketing</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/the-metaverse.webp" alt = "metaverse" class = "full">

									<a href = "https://cronicle.space/articles/the-metaverse/">

										<h3>Our Future: The Metaverse</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('technology', 1)">technology</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/study-for-hours.webp" alt = "long hours study" class = "full">

									<a href = "https://cronicle.space/articles/study-for-hours/">

										<h3>Ways to Study For Long Hours Without Getting Bored</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('productivity', 0)">productivity</div>

										<div class = "highlight" onclick = "topic('growth', 6)">growth</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/pomodoro-technique.webp" alt = "pomodoro" class = "full">

									<a href = "https://cronicle.space/articles/pomodoro-technique/">

										<h3>Pomodoro Study Technique - What Is It and Does It Work?</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('productivity', 0)">productivity</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/all-about-biometrics.webp" alt = "biometrics" class = "full">

									<a href = "https://cronicle.space/articles/all-about-biometrics/">

										<h3>All About Biometrics</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('technology', 1)">technology</div>

										<div class = "highlight" style = "display: none;"></div>

									</div>

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/what-is-seo.webp" alt = "seo" class = "full">

									<a href = "https://cronicle.space/articles/what-is-seo/">

										<h3>What is SEO? Here's Everything You Need to Know</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('marketing', 2)">marketing</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/cryptocurrencies-losing-value.webp" alt = "cryptocurrencies" class = "full">

									<a href = "https://cronicle.space/articles/cryptocurrencies-losing-value/">

										<h3>Why Cryptocurrencies are Losing Value</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('finance', 3)">finance</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/color-coded-notes.webp" alt = "color notes" class = "full">

									<a href = "https://cronicle.space/articles/color-coded-notes/">

										<h3>Color Coded Notes - A Productive Way to Study</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('productivity', 0)">productivity</div>

										<div class = "highlight" onclick = "topic('growth', 6)">growth</div>

									</div> 

								</div>

								<div class = "panel apanel">

									<img src = "../articles/image/why-learn-coding.webp" alt = "learn coding" class = "full">

									<a href = "https://cronicle.space/articles/why-learn-coding/">

										<h3>Why Every Child Should Learn Coding</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topic('technology', 1)">technology</div>

										<div class = "highlight" onclick = "topic('coding', 11)">coding</div>

									</div> 

								</div>

							</div>
						</div>

					</div>

					<div class = "page">

						<!-- Search -->
						<div class = "search">

							<div class = "col-sm-12">

								<div class = "search-bar">

									<div class = "row">

										<svg width="30" height="30" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">

											<path d="M32.7081 28H30.6414L29.9089 27.325C32.4726 24.475 34.0161 20.775 34.0161 16.75C34.0161 7.775 26.4035 0.5 17.0119 0.5C7.62043 0.5 0.0078125 7.775 0.0078125 16.75C0.0078125 25.725 7.62043 33 17.0119 33C21.2237 33 25.0954 31.525 28.0777 29.075L28.784 29.775V31.75L41.8641 44.225L45.762 40.5L32.7081 28ZM17.0119 28C10.4981 28 5.23985 22.975 5.23985 16.75C5.23985 10.525 10.4981 5.5 17.0119 5.5C23.5258 5.5 28.784 10.525 28.784 16.75C28.784 22.975 23.5258 28 17.0119 28Z" fill="white" fill-opacity="0.5"/>

										</svg>

										<input type = "search" id = "search-series" placeholder = "search series" autocomplete = "off" onkeyup = "searchSeries()">

									</div>

								</div>

								<div class = "row" id = "stbuttons">

									<div class = "tbutton" id = "stechnology" onclick = "activeSeries('stechnology', 0)">

										technology

									</div>

									<div class = "tbutton" id = "sfinance" onclick = "activeSeries('sfinance', 1)">

										finance

									</div>

									<div class = "tbutton" id = "sbanking" onclick = "activeSeries('sbanking', 2)">

										banking

									</div>

								</div>

							</div>

						</div>

						<!-- Series -->
						<div class = "content full">

							<div class = "col-sm-12 panels">

								<div class = "panel spanel">

									<img src = "../articles/image/economic-recovery.webp" alt = "central banks" class = "full">

									<a href = "https://cronicle.space/series/central-banks/">

										<h3>Impacts of Central Banks on Recession</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topicSeries('sfinance', 1)"><span>s</span>finance</div>

										<div class = "highlight" onclick = "topicSeries('sbanking', 2)"><span>s</span>banking</div>

									</div> 

								</div>

								<div class = "panel spanel">

									<img src = "../articles/image/quantum-computing-principles.webp" alt = "quantum computing" class = "full">

									<a href = "https://cronicle.space/series/quantum-computing/">

										<h3>All About Quantum Computing</h3>

									</a>

									<div class = "row">

										<div class = "highlight" style = "margin-right: 5px;" onclick = "topicSeries('stechnology', 0)"><span>s</span>technology</div>

										<div class = "highlight" style = "display: none;"></div>

									</div> 

								</div>

							</div>

						</div>

					</div>

					<div class = "page">

						<!-- Search -->
						<div class = "search">

							<div class = "col-sm-12">

								<div class = "search-bar">

									<div class = "row">

										<svg width="30" height="30" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">

											<path d="M32.7081 28H30.6414L29.9089 27.325C32.4726 24.475 34.0161 20.775 34.0161 16.75C34.0161 7.775 26.4035 0.5 17.0119 0.5C7.62043 0.5 0.0078125 7.775 0.0078125 16.75C0.0078125 25.725 7.62043 33 17.0119 33C21.2237 33 25.0954 31.525 28.0777 29.075L28.784 29.775V31.75L41.8641 44.225L45.762 40.5L32.7081 28ZM17.0119 28C10.4981 28 5.23985 22.975 5.23985 16.75C5.23985 10.525 10.4981 5.5 17.0119 5.5C23.5258 5.5 28.784 10.525 28.784 16.75C28.784 22.975 23.5258 28 17.0119 28Z" fill="white" fill-opacity="0.5"/>

										</svg>

										<input type = "search" id = "search-slides" placeholder = "search slides" autocomplete = "off" onkeyup = "searchSlides()">

									</div>

								</div>

								<div class = "row" id = "dtbuttons">

									<div class = "tbutton" id = "dtechnology" onclick = "activeSlides('dtechnology', 0)">

										technology

									</div>

								</div>

							</div>

						</div>

						<!-- Slides -->
						<div class = "content full">

							<div class = "col-sm-12 dpanels">

								<div class = "panel dpanel">

									<div class = "row">

										<div class = "col-lg-6 img">

											<img src = "../slides/image/html.webp" alt = "html and css" class = "full">

										</div>

										<div class = "col-lg-6 text">

											<a href = "https://cronicle.space/slides/intro-html-css/">

												<h3>Introduction to HTML & CSS</h3>

											</a>

											<div class = "highlight" onclick = "topicSlides('dtechnology', 0)"><span>d</span>technology</div>

											<div class = "highlight" style = "display: none;"></div>

											<p>16 slides</p>

										</div>

									</div>

								</div>

								<div class = "panel dpanel">

									<div class = "row">

										<div class = "col-lg-6 img">

											<img src = "../slides/image/javascript.webp" alt = "javascript" class = "full">

										</div>

										<div class = "col-lg-6 text">

											<a href = "https://cronicle.space/slides/intro-js/">

												<h3>Introduction to JavaScript</h3>

											</a>

											<div class = "highlight" onclick = "topicSlides('dtechnology', 0)"><span>d</span>technology</div>

											<div class = "highlight" style = "display: none;"></div>

											<p>14 slides</p>

										</div>

									</div>

								</div>

								<div class = "panel dpanel">

									<div class = "row">

										<div class = "col-lg-6 img">

											<img src = "../slides/image/website.webp" alt = "online website" class = "full">

										</div>

										<div class = "col-lg-6 text">

											<a href = "https://cronicle.space/slides/online-website/">

												<h3>Getting Your Website Online</h3>

											</a>

											<div class = "highlight" onclick = "topicSlides('dtechnology', 0)"><span>d</span>technology</div>

											<div class = "highlight" style = "display: none;"></div>

											<p>15 slides</p>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class = "page">

						<!-- Search -->
						<div class = "search">

							<div class = "col-sm-12">

								<div class = "search-bar">

									<div class = "row">

										<svg width="30" height="30" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">

											<path d="M32.7081 28H30.6414L29.9089 27.325C32.4726 24.475 34.0161 20.775 34.0161 16.75C34.0161 7.775 26.4035 0.5 17.0119 0.5C7.62043 0.5 0.0078125 7.775 0.0078125 16.75C0.0078125 25.725 7.62043 33 17.0119 33C21.2237 33 25.0954 31.525 28.0777 29.075L28.784 29.775V31.75L41.8641 44.225L45.762 40.5L32.7081 28ZM17.0119 28C10.4981 28 5.23985 22.975 5.23985 16.75C5.23985 10.525 10.4981 5.5 17.0119 5.5C23.5258 5.5 28.784 10.525 28.784 16.75C28.784 22.975 23.5258 28 17.0119 28Z" fill="white" fill-opacity="0.5"/>

										</svg>

										<input type = "search" id = "search-quizzes" placeholder = "search quizzes" autocomplete = "off" onkeyup = "searchQuizzes()">

									</div>

								</div>

								<div class = "row" id = "qtbuttons">

									<div class = "tbutton" id = "qtechnology" onclick = "activeQuizzes('qtechnology', 0)">

										technology

									</div>

									<div class = "tbutton" id = "qschool" onclick = "activeQuizzes('qschool', 0)">

										school

									</div>

									<div class = "tbutton" id = "qfinance" onclick = "activeQuizzes('qfinance', 0)">

										finance

									</div>

								</div>

							</div>

						</div>

						<!-- Quizzes -->
						<div class = "content full">

							<div class = "col-sm-12 qpanels">

								<div class = "panel qpanel">

									<img src = "../quizzes/image/crypto-craze.webp" alt = "crypto" class = "full">

									<a href = "https://cronicle.space/quizzes/crypto-craze/">

										<h3>Crypto Craze Challenge</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qfinance', 2)"><span>q</span>finance</div>

									</div>

								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/web-development.webp" alt = "web development" class = "full">

									<a href = "https://cronicle.space/quizzes/web-development/">

										<h3>Demystifying Web Development</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qtechnology', 0)"><span>q</span>technology</div>

									</div>
									
								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/computer-parts.webp" alt = "computer parts" class = "full">

									<a href = "https://cronicle.space/quizzes/computer-parts/">

										<h3>Parts of a Whole: What Computers are Made of</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qtechnology', 0)"><span>q</span>technology</div>

									</div>
									
								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/sea-tech-unicorns.webp" alt = "tech unicrons" class = "full">

									<a href = "https://cronicle.space/quizzes/sea-tech-unicorns/">

										<h3>Southeast Asia's Tech Unicorns: The Origin</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qtechnology', 0)"><span>q</span>technology</div>
										
									</div>

								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/elementary-science.webp" alt = "elementary science" class = "full">

									<a href = "https://cronicle.space/quizzes/elementary-science/">

										<h3>Elementary Science Assessment</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qschool', 1)"><span>q</span>school</div>

									</div>
									
								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/prealgebra-foundations.webp" alt = "prealgebra" class = "full">

									<a href = "https://cronicle.space/quizzes/prealgebra-foundations/">

										<h3>Foundations of Pre-Algebra</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qschool', 1)"><span>q</span>school</div>
										
									</div>

								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/economics-essentials.webp" alt = "economics" class = "full">

									<a href = "https://cronicle.space/quizzes/economics-essentials/">

										<h3>Economics Essentials Quiz</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qfinance', 2)"><span>q</span>finance</div>

									</div>
									
								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/social-media.webp" alt = "social media" class = "full">

									<a href = "https://cronicle.space/quizzes/social-media/">

										<h3>Social Media: Which Platform is Which?</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qtechnology', 0)"><span>q</span>technology</div>

									</div>
									
								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/world-geography.webp" alt = "world geography" class = "full">

									<a href = "https://cronicle.space/quizzes/world-geography/">

										<h3>World Geography Challenge</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qschool', 1)"><span>q</span>school</div>

									</div>
									
								</div>

								<div class = "panel qpanel">

									<img src = "../quizzes/image/american-history.webp" alt = "american history" class = "full">

									<a href = "https://cronicle.space/quizzes/american-history/">

										<h3>Exploring the Foundations of American History</h3>

									</a>

									<div class = "row">

										<div class = "highlight" onclick = "topicQuizzes('qschool', 1)"><span>q</span>school</div>

									</div>
									
								</div>

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

	<!-- Search Bar Placeholder -->
	<script>

		const input = document.getElementById("search");
		const inputSeries = document.getElementById("search-series");
		const inputSlides = document.getElementById("search-slides");
		const inputQuizzes = document.getElementById("search-quizzes");

		if (screen.width < 768) {

			input.placeholder = "search";
			inputSeries.placeholder = "search";
			inputSlides.placeholder = "search";
			inputQuizzes.placeholder = "search";

		}

	</script>

	<!-- Bootstrap 4.1 JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>