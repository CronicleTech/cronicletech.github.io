<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Exploring the Foundations of American History | Cronicle</title>

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

				<h1>Exploring the Foundations of American History</h1>

				<p>6 questions • 2 - 3 minutes</p>

				<img src = "image.webp" alt = "american history" class = "full">

				<button class = "next active" onclick = "nextpage(0)">Begin Quiz</button>

			</div>

			<div class = "col-sm-10 question page">

				<h3>Who was the first President of the United States?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 0, 2)">

							<p>Benjamin Franklin</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 1, 2)">

							<p>Thomas Jefferson</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 2, 2)">

							<p>George Washington</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 3, 2)">

							<p>John Adams</p>

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

				<h3>What year did the Declaration of Independence get adopted?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 4, 5)">

							<p>1766</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 5, 5)">

							<p>1776</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 6, 5)">

							<p>1786</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 7, 5)">

							<p>1796</p>

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

				<h3>Which event marked the beginning of the American Revolutionary War?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 8, 9)">

							<p>The Boston Tea Party</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 9, 9)">

							<p>The Battle of Bunker Hill</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 10, 9)">

							<p>The signing of the Treaty of Paris</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 11, 9)">

							<p>The Boston Massacre</p>

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

				<h3>Who is known for his famous speech that begins with "I have a dream" during the Civil Rights Movement?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 12, 14)">

							<p>Malcolm X</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 13, 14)">

							<p>Rosa Parks</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 14, 14)">

							<p>Martin Luther King Jr.</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 15, 14)">

							<p>Abraham Lincoln</p>

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

				<h3>What was the name of the ship that transported the Pilgrims to the New World in 1620?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 16, 16)">

							<p>Mayflower</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 17, 16)">

							<p>Santa Maria</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 18, 16)">

							<p>Titanic</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 19, 16)">

							<p>Santa Claus</p>

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

				<h3>Which amendment to the U.S. Constitution abolished slavery?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 20, 20)">

							<p>13th Amendment</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 21, 20)">

							<p>14th Amendment</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 22, 20)">

							<p>15th Amendment</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 23, 20)">

							<p>19th Amendment</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 6</p>

						<button class = "next" onclick = "nextpage(6)">

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

									1. Who was the first President of the United States?
									
									<br><br>

									a) Benjamin Franklin <br>
									b) Thomas Jefferson <br>
									<span class = "highlight">c) George Washington</span> <br>
									d) John Adams <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(1)">

								<p>

									2. What year did the Declaration of Independence get adopted?
									
									<br><br>

									a) 1766 <br>
									<span class = "highlight">b) 1776</span> <br>
									c) 1786 <br>
									d) 1796 <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(2)">

								<p>

									3. Which event marked the beginning of the American Revolutionary War?

									<br><br>

									a) The Boston Tea Party <br>
									<span class = "highlight">b) The Battle of Bunker Hill</span> <br>
									c) The signing of the Treaty of Paris <br>
									d) The Boston Massacre <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(3)">

								<p>

									4. Who is known for his famous speech that begins with "I have a dream" during the Civil Rights Movement?

									<br><br>

									a) Malcolm X <br>
									b) Rosa Parks <br>
									<span class = "highlight">c) Martin Luther King Jr.</span> <br>
									d) Abraham Lincoln <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(4)">

								<p>

									5. What was the name of the ship that transported the Pilgrims to the New World in 1620?

									<br><br>

									<span class = "highlight">a) Mayflower</span> <br>
									b) Santa Maria <br>
									c) Titanic <br>
									d) Santa Claus <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(5)">

								<p>

									6. Which amendment to the U.S. Constitution abolished slavery?
									
									<br><br>

									<span class = "highlight">a) 13th Amendment</span> <br>
									b) 14th Amendment <br>
									c) 15th Amendment <br>
									d) 19th Amendment <br>

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