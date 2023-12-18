<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Demystifying Web Development: HTML, CSS, and JavaScript | Cronicle</title>

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

				<h1>Demystifying Web Development: HTML, CSS, and JavaScript</h1>

				<p>8 questions • 3 - 5 minutes</p>

				<img src = "image.webp" alt = "web development" class = "full">

				<button class = "next active" onclick = "nextpage(0)">Begin Quiz</button>

			</div>

			<div class = "col-sm-10 question page">

				<h3>What does HTML stand for?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 0, 2)">

							<p>Hyperlink and Text Markup Language</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 1, 2)">

							<p>Hyper Transfer Markup Language</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 2, 2)">

							<p>Hypertext Markup Language</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 3, 2)">

							<p>High-Level Text Markup Language</p>

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

				<h3>Which of the following is used to style the appearance of HTML elements?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 4, 6)">

							<p>HTML</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 5, 6)">

							<p>JavaScript</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 6, 6)">

							<p>CSS</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 7, 6)">

							<p>SQL</p>

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

				<h3>Which HTML tag is used to create a hyperlink?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 8, 9)">

							<p>link</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 9, 9)">

							<p>anchor</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 10, 9)">

							<p>href</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 11, 9)">

							<p>url</p>

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

				<h3>What is the purpose of JavaScript in web development?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 12, 14)">

							<p>Create structured documents</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 13, 14)">

							<p>Style web pages</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(true, 14, 14)">

							<p>Add interactivity and functionality</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 15, 14)">

							<p>Define the layout of web pages</p>

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

				<h3>Which of the following CSS properties is used to change the text color of an element?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 16, 19)">

							<p>font-size</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 17, 19)">

							<p>background-color</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 18, 19)">

							<p>text-color</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(true, 19, 19)">

							<p>color</p>

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

				<h3>In JavaScript, how do you declare a variable?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 20, 20)">

							<p>var myVar;</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 21, 20)">

							<p>variable myVar;</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 22, 20)">

							<p>declare myVar;</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 23, 20)">

							<p>int myVar;</p>

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

				<h3>Which HTML element is used to define the structure of an HTML document and contains metadata about the document?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(false, 24, 25)">

							<p>body</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(true, 25, 25)">

							<p>head</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 26, 25)">

							<p>title</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 27, 25)">

							<p>paragraph</p>

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

				<h3>What is the correct way to comment out multiple lines of code in JavaScript?</h3>

				<div class = "row">

					<div class = "col-lg-6">

						<div class = "qbutton first" onclick = "check(true, 28, 28)">

							<p>/* This is a comment */</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton second" onclick = "check(false, 29, 28)">

							<p>// This is a comment //</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton third" onclick = "check(false, 30, 28)">

							<p>' This is a comment '</p>

						</div>

					</div>

					<div class = "col-lg-6">

						<div class = "qbutton fourth" onclick = "check(false, 31, 28)">

							<p># This is a comment #</p>

						</div>

					</div>

				</div>

				<div class = "col-sm-12">

					<div class = "row bottom">

						<p>Question 8</p>

						<button class = "next" onclick = "nextpage(8)">

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

									1. What does HTML stand for?

									<br><br>

									a) Hyperlink and Text Markup Language <br>
									b) Hyper Transfer Markup Language <br>
									<span class = "highlight">c) Hypertext Markup Language</span> <br>
									d) High-Level Text Markup Language <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(1)">

								<p>

									2. Which of the following is used to style the appearance of HTML elements?
									
									<br><br>

									a) HTML <br>
									b) JavaScript <br>
									<span class = "highlight">c) CSS</span> <br>
									d) SQL <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(2)">

								<p>

									3. Which HTML tag is used to create a hyperlink?
									
									<br><br>

									a) link <br>
									<span class = "highlight">b) anchor</span> <br>
									c) href <br>
									d) url <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(3)">

								<p>

									4. What is the purpose of JavaScript in web development?
									
									<br><br>

									a) Create structured documents <br>
									b) Style web pages <br>
									<span class = "highlight">c) Add interactivity and functionality</span> <br>
									d) Define the layout of web pages <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(4)">

								<p>

									5. Which of the following CSS properties is used to change the text color of an element?

									<br><br>

									a) font-size <br>
									b) background-color <br>
									c) text-color <br>
									<span class = "highlight">d) color</span> <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(5)">

								<p>

									6. In JavaScript, how do you declare a variable?
									
									<br><br>	

									<span class = "highlight">a) var myVar;</span> <br>
									b) variable myVar; <br>
									c) declare myVar; <br>
									d) int myVar; <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(6)">

								<p>

									7. Which HTML element is used to define the structure of an HTML document and contains metadata about the document?

									<br><br>

									a) body <br>
									<span class = "highlight">b) head</span> <br>
									c) title <br>
									d) paragraph <br>

								</p>

							</div>

							<div class = "panel" onclick = "answer(7)">

								<p>

									8. What is the correct way to comment out multiple lines of code in JavaScript?
									
									<br><br>

									<span class = "highlight">a) /* This is a comment */</span> <br>
									b) // This is a comment // <br>
									c) ' This is a comment ' <br>
									d) # This is a comment # <br>

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