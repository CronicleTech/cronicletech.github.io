<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Parts of a Whole: What Computers are Made of | Cronicle</title>

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

				<h1>Parts of a Whole: What Computers are Made of</h1>

				<p>9 questions • 3 - 5 minutes</p>

				<img src = "image.webp" alt = "computer parts" class = "full">

				<button class = "next active" onclick = "nextpage(0)">Begin Quiz</button>

			</div>

			<div class = "col-sm-10 question page">

				<h3>Which of the computer parts below are not considered as hardwares?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 0, 0)">

							<p>Photo app</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 1, 0)">

							<p>Keyboard</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 2, 0)">

							<p>Game controller</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 3, 0)">

							<p>Webcam</p>

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

				<h3>The set of programs that tell a computer what to do is called …</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 4, 6)">

							<p>Input</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 5, 6)">

							<p>Output</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 6, 6)">

							<p>Software</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 7, 6)">

							<p>Hardware</p>

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

				<h3>Which of the following are not examples of application software?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 8, 9)">

							<p>Word processors</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 9, 9)">

							<p>Mobile phone</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 10, 9)">

							<p>Internet browsers</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 11, 9)">

							<p>Mobile games</p>

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

				<h3>What is the purpose of a web browser?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 12, 15)">

							<p>Playing games</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 13, 15)">

							<p>Sending emails</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 14, 15)">

							<p>Creating documents</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(true, 15, 15)">

							<p>Browsing websites</p>

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

				<h3>Which device is used to provide power to a computer and regulate the electricity it receives?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 16, 18)">

							<p>Monitor</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 17, 18)">

							<p>Keyboard</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 18, 18)">

							<p>Power Supply Unit</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 19, 18)">

							<p>CPU cooler</p>

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

				<h3>What is the primary function of a CPU in a computer?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 20, 21)">

							<p>Storing data</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 21, 21)">

							<p>Processing instructions</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 22, 21)">

							<p>Displaying graphics</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 23, 21)">

							<p>Providing power</p>

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

				<h3>What kind of application is designed for creating and editing images?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 24, 26)">

							<p>Video editor</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 25, 26)">

							<p>Spreadsheet</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 26, 26)">

							<p>Photo editor</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 27, 26)">

							<p>Antivirus software</p>

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

				<h3>What does RAM stand for in the context of computer hardware?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 28, 28)">

							<p>Random Access Memory</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 29, 28)">

							<p>Read-only Memory</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 30, 28)">

							<p>Remote Access Module</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 31, 28)">

							<p>Randomly Attached Module</p>

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

				<h3>Which of the following is an input device commonly used for pointing a computer screen?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 32, 35)">

							<p>Monitor</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 33, 35)">

							<p>Keyboard</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 34, 35)">

							<p>Printer</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(true, 35, 35)">

							<p>Mouse</p>

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

									1. Which of the computer parts below are not considered as hardwares?

									<br><br>

									<span class = "highlight">a) Photo app</span> <br>
									b) Keyboard <br>
									c) Game controller <br>
									d) Webcam

								</p>

							</div>

							<div class = "panel" onclick = "answer(1)">

								<p>

									2. The set of programs that tell a computer what to do is called …

									<br><br>

									a) Input <br>
									b) Output <br>
									<span class = "highlight">c) Software</span> <br>
									d) Hardware <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(2)">

								<p>

									3. Which of the following are not examples of application software?

									<br><br>

									a) Word processors <br>
									<span class = "highlight">b) Mobile phone</span> <br>
									c) Internet browsers <br>
									d) Mobile games <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(3)">

								<p>

									4. What is the purpose of a web browser?

									<br><br>

									a) Playing games <br>
									b) Sending emails <br>
									c) Creating documents <br>
									<span class = "highlight">d) Browsing websites</span> <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(4)">

								<p>

									5. Which device is used to provide power to a computer and regulate the electricity it receives?

									<br><br>

									a) Monitor <br>
									b) Keyboard <br>
									<span class = "highlight">c) Power Supply Unit</span> <br>
									d) CPU cooler <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(5)">

								<p>

									6. What is the primary function of a CPU in a computer?

									<br><br>

									a) Storing data <br>
									<span class = "highlight">b) Processing instructions</span> <br>
									c) Displaying graphics <br>
									d) Providing power <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(6)">

								<p>

									7. What kind of application is designed for creating and editing images?

									<br><br>

									a) Video editor <br>
									b) Spreadsheet <br>
									<span class = "highlight">c) Photo editor</span> <br>
									d) Antivirus software <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(7)">

								<p>

									8. What does RAM stand for in the context of computer hardware?

									<br><br>

									<span class = "highlight">a) Random Access Memory</span> <br>
									b) Read-only Memory <br>
									c) Remote Access Module <br>
									d) Randomly Attached Module <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(8)">

								<p>

									9. Which of the following is an input device commonly used for pointing a computer screen?

									<br><br>

									a) Monitor <br>
									b) Keyboard <br>
									c) Printer <br>
									<span class = "highlight">d) Mouse</span> <br>


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