<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Economics Essentials Quiz | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "">

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

	<script src = "../quizzes.js" defer></script>

	<!-- Main CSS -->
	<link rel = "stylesheet" href = "../../main/style.css">

	<link rel = "stylesheet" href = "../../main/quiz.css">
	
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
	<div class = "container quiz">

		<div class = "row" style = "max-width: 100%;">

			<div class = "col-sm-1"></div>

			<div class = "col-sm-10 cover page">

				<h1>Economics Essentials Quiz</h1>

				<p>9 questions • 3 - 5 minutes</p>

				<img src = "image.webp" alt = "economics" class = "full">

				<button class = "next active" onclick = "nextpage(0)">Begin Quiz</button>

			</div>

			<div class = "col-sm-10 question page">

				<h3>What is the term for the total value of all goods and services produced within a country's borders in a given year?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 0, 0)">

							<p>GDP</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 1, 0)">

							<p>ATM</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 2, 0)">

							<p>VIP</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 3, 0)">

							<p>CEO</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 1</p>

						<button class = "next" onclick = "nextpage(1)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>Which economic system relies on supply and demand to determine prices and allocation of resources?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 4, 4)">

							<p>Capitalism</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 5, 4)">

							<p>Communism</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 6, 4)">

							<p>Socialism</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 7, 4)">

							<p>Anarchy</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 2</p>

						<button class = "next" onclick = "nextpage(2)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>What does "inflation" refer to in economics?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 8, 10)">

							<p>Decrease in prices</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 9, 10)">

							<p>Increase in unemployment</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 10, 10)">

							<p>Rise in the general price level</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 11, 10)">

							<p>Expansion of exports</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 3</p>

						<button class = "next" onclick = "nextpage(3)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>Which of the following is NOT a factor of production?
                </h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 12, 14)">

							<p>Land</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 13, 14)">

							<p>Labor</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 14, 14)">

							<p>Money</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 15, 14)">

							<p>Capital</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 4</p>

						<button class = "next" onclick = "nextpage(4)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>When a country exports more than it imports, what is the result?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 16, 17)">

							<p>Trade deficit</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 17, 17)">

							<p>Trade surplus</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 18, 17)">

							<p>Budget surplus</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 19, 17)">

							<p>Economic recession</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 5</p>

						<button class = "next" onclick = "nextpage(5)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>What is the main function of the Federal Reserve in the United States?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 20, 22)">

							<p>Collect taxes</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 21, 22)">

							<p>Regulate the stock market</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 22, 22)">

							<p>Control the money supply</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 23, 22)">

							<p>Conduct foreign policy</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 6</p>

						<button class = "next" onclick = "nextpage(6)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>Which term describes the highest point of economic activity in a business cycle?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 24, 26)">

							<p>Recession</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 25, 26)">

							<p>Depression</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 26, 26)">

							<p>Peak</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 27, 26)">

							<p>Trough</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 7</p>

						<button class = "next" onclick = "nextpage(7)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>What is the term for the amount of money a company earns after deducting all expenses?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 28, 28)">

							<p>Profit</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 29, 28)">

							<p>Revenue </p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 30, 28)">

							<p>Loss</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 31, 28)">

							<p>Debt</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 8</p>

						<button class = "next" onclick = "nextpage(8)">

							Next Question

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 question page">

				<h3>When a government spends more money than it collects in taxes, what is this called?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 32, 33)">

							<p>Fiscal surplus</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 33, 33)">

							<p>Fiscal deficit</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 34, 33)">

							<p>Fiscal equilibrium</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 35, 33)">

							<p>Fiscal responsibility</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 9</p>

						<button class = "next" onclick = "nextpage(9)">

							Check Results

						</button>

					</div>

				</div>

			</div>

			<div class = "col-sm-10 end page">

				<div class = "row" style = "max-width: 100%;">

					<div class = "col-sm-1"></div>

					<div class = "col-sm-10">

						<div class = "top">

							<h2>Quiz Summary</h2>

							<p class = "subtitle">Accuracy</p>

							<div class = "progress">
							
								<div class = "progress-bar" id = "progress"></div>
							
							</div>

						</div>

						<div class = "bottom">

							<p class = "subtitle">Performance Statistics</p>

							<div class = "row result" style = "max-width: 100%;">

								<div class = "col-md-4">

									<p class = "number" id = "correct"></p>

									<p>Correct</p>

								</div>

								<div class = "col-md-4">

									<p class = "number" id = "incorrect"></p>

									<p>Incorrect</p>

								</div>

								<div class = "col-md-4">

									<p class = "number" id = "time"></p>

									<p>Ellapsed Time</p>

								</div>

							</div>

							<a href = "https://cronicle.space/quizzes/">

								<button class = "next active">Return Home</button>

							</a>

							<p>Review Questions</p>

							<p class = "question">Click on the questions to see answers.</p>

							<div class = "panel" onclick = "answer(0)">

								<p>

									1. What is the term for the total value of all goods and services produced within a country's borders in a given year?

									<br><br>

									<span class = "highlight">a) GDP </span> <br>
                                    b) ATM <br>
                                    c) VIP <br>
                                    d) CEO <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(1)">

								<p>

									2. Which economic system relies on supply and demand to determine prices and allocation of resources?

									<br><br>

									<span class = "highlight">a) Capitalism</span> <br>
									b) Communism <br>
									c) Socialism <br>
									d) Anarchy  <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(2)">

								<p>

									3. What does "inflation" refer to in economics?

									<br><br>

									a) Decrease in prices <br>
									b) Increase in unemployment</span> <br>
									<span class = "highlight">c)  Rise in the general price level</span> <br>
									d) Expansion of exports <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(3)">

								<p>

									4. Which of the following is NOT a factor of production?

									<br><br>

									a) Land <br>
									b) Labor <br>
									<span class = "highlight"> c)Money </span> <br>
									d) Capital <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(4)">

								<p>

									5. When a country exports more than it imports, what is the result?

									<br><br>

									a) Trade deficit <br>
									<span class = "highlight"> b) Trade surplus </span> <br>
									c) Budget surplus <br>
									d) Economic recession <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(5)">

								<p>

									6.What is the main function of the Federal Reserve in the United States?

									<br><br>

									a) Collect taxes <br>
									b) Regulate the stock market <br>
									<span class= "highlight">c) Control the money supply </span> <br>
									d) Conduct foreign policy <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(6)">

								<p>

									7. Which term describes the highest point of economic activity in a business cycle?

									<br><br>

									a) Recession <br>
									b) Depression <br>
									<span class = "highlight">c) Peak </span> <br>
									d) Trough <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(7)">

								<p>

									8. What is the term for the amount of money a company earns after deducting all expenses?

									<br><br>

									<span class = "highlight">a) Revenue </span><br>
									b) Profit <br>
									c) Loss <br>
									d) Debt <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(8)">

								<p>

									9. When a government spends more money than it collects in taxes, what is this called?

									<br><br>

									a) Fiscal surplus <br>
									<span class = "highlight">b) Fiscal deficit </span><br>
									c) Fiscal equilibrium <br>
									d)  Fiscal responsibility <br>

								</p>

							</div>

						</div>

					</div>

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