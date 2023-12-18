<?php

	session_start();

	

	$_SESSION["name"] = "Kevin Wijaya";
	$_SESSION["email"] = "kevinwijayaa15@gmail.com";

	

	if (!isset($_SESSION["name"])) {

		header("location: https://cronicle.space/login/");

	}

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Dashboard | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

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

	<!-- JavaScript -->
	<script src = "sidenav.js" defer></script>

	<script src = "dashboard.js" defer></script>

	<!-- Main CSS -->
	<link rel = "stylesheet" href = "../main/style.css">

	<link rel = "stylesheet" href = "../../main/dashboard.css">

	<style>

		div.container-fluid {
			padding: 0;
		}

		div.tab-content {
			padding-top: 100px;
		}

		div.space h2 {
			font-size: 1.25em;
			margin: 75px 0 35px 30px;
		}

		div.space div.top {
			animation: fade-right 0.75s ease-out;
		}

		div.space div.bottom {
			animation: fade-up 0.75s ease-out;
		}

		div.space .carousel-control-prev-icon {
			background-image: url(image/previous.svg);
		}

		div.space .carousel-control-next-icon {
			background-image: url(image/next.svg);
		}

		div.space div.panel {
			background-color: #FFFFFF;
			color: #000000;
			border-radius: 15px;
			padding: 15px;
			margin: 0 15px;
		}

		div.space div.panel div.row {
			width: 100%;
		}

		div.space div.panel a h3 {
			color: #1A1C2C;
			font-size: 1.25em;
			margin-bottom: 25px;
		}

		div.space div.panel a h3:hover, div.panel a h3:active, div.panel a h3:focus {
			color: rgba(0, 0, 0, .65);
		}

		div.space div.panel img {
			border-radius: 15px;
		}

		div.space div.panel div.highlight {
			background-color: #8C52FF;
			color: #FFFFFF;
			font-weight: bold;
			font-size: .85em;
			border-radius: 40px;
			padding: 7px 15px;
			width: fit-content;
			transition: 0.5s ease background-color;
		}

		div.space div.panel div.highlight:hover, div.highlight:active, div.highlight:focus {
			background-color: #202337;
			cursor: pointer;
		}

		div.space div.qpanel {
			margin: 0 15px;
		}

		div.space div.qpanel img {
			border-radius: 15px;
		}

		div.space div.qpanel a h3 {
			color: #FFFFFF;
			font-size: 1.15em;
			margin: 35px 0 15px 0;
		}

		div.space div.qpanel a h3:hover, div.qpanel a h3:active, div.qpanel a h3:focus {
			color: rgba(255, 255, 255, 0.75);;
		}

		div.space div.topics {
			max-width: 100%;
			display: grid;
			grid-template-columns: repeat(6, 16.6%);
			margin: 0 15px;
		}

		div.space div.topics div.button {
			margin: 0 15px;
		}

		div.space div.button img {
			background-color: #373A52;
			padding: 20px 65px;
			margin-bottom: 15px;
			border-radius: 20px;
			transition: 0.35s ease background-color;
		}

		div.space div.button p {
			font-size: .75em;
			text-align: center;
		}

		div.space div.button:hover {
			cursor: pointer;
		}

		div.space div.button:hover img, div.button:active img, div.button:focus {
			background-color:  #8956FF;
		}

		div.space div.button:hover p, div.button:active p, div.button:focus p {
			color: #8956FF;
		}

		@media (max-width: 1800px) {

			div.space div.button img {
				padding: 20px 40px;
			}

		}

		@media (max-width: 1550px) {

			div.space div.button img {
				padding: 20px 30px;
			}

		}

		@media (max-width: 1470px) {

			div.tab-content {
				padding-top: 75px;
			}

			div.space div.panel a h3 {
				font-size: 1em;
				margin-bottom: 15px;
			}

		}

		@media (max-width: 1100px) {

			div.space div.panel a h3 {
				font-size: .85em;
			}

		}

		@media (max-width: 992px) {

			div.space div.panel {
				padding: 15px 35px;
				margin-bottom: 35px;
			}

			div.space .carousel-control-prev-icon {
				background-image: url(image/previous-white.svg);
			}

			div.space .carousel-control-next-icon {
				background-image: url(image/next-white.svg);
			}

			div.space div.topics {
				grid-template-columns: repeat(3, 33%);
			}

			div.space div.topics div.button {
				margin-bottom: 50px;
			}

			div.space div.button img {
				padding: 20px 55px;
			}

		}

		@media (max-width: 768px) {

			div.tab-content {
				padding: 100px 35px 75px 35px;
			}

			div.space h2 {
				text-align: center;
			}

			div.space div.topics div.button {
				margin-bottom: 35px;
			}

			div.space div.button img {
				padding: 20px 45px;
			}

			div.space div.qpanel {
				margin-bottom: 35px;
			}

		}

		@media (max-width: 576px) {

			div.space div.panel {
				padding: 15px;
			}

			div.space div.panel a h3 {
				margin: 25px 0;
			}

			div.space div.topics {
				grid-template-columns: repeat(2, 50%);
			}

			div.space div.button img {
				padding: 20px 25px;
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

	<!-- Content -->
	<div class = "container-fluid">

		<div class = "wrapper">

			<button class = "sidenav-toggler"> 

    			<img src = "image/sidenav.svg" alt = "sidenav" width = "20" height = "20">

    		</button>

	    	<div class = "nav flex-column nav-pills" role = "tablist" aria-orientation = "vertical">

		      	<a class = "nav-link active" href = "https://cronicle.space/dashboard/">

		      		My Space

		      	</a>

		      	<a class = "nav-link" href = "https://cronicle.space/dashboard/notes/">

			      	Notes

		      	</a>

		      	<a class = "nav-link" href = "https://cronicle.space/dashboard/contribute/">

		      		Contribute

		      	</a>
		    	
		      	<a class = "nav-link logout" href = "signout.php">

		      		Log Out

		      	</a>

		    </div>

		    <div class = "tab-content">

		    	<div class = "tab-pane space active">

		    		<div class = "top">

			    		<h2>Discover daily</h2>

			    		<div id = "carousel" class = "carousel slide" data-ride = "carousel" data-interval = "3000">
	  					
	  						<div class = "carousel-inner">

							    <div class="carousel-item active">
							    
							    	<div class = "row">

						    			<div class = "col-lg-6">

						    				<div class = "panel">

						    					<div class = "row">

							    					<div class = "col-sm-6">

							    						<img class = "full aimage">

							    					</div>

							    					<div class = "col-sm-6">

							    						<a class = "anchor">

							    							<h3 class = "aheading"></h3>

							    						</a>

							    						<a class = "ahighlight">

							    							<div class = "highlight"></div>

							    						</a>

							    					</div>

							    				</div>

						    				</div>

						    			</div>

						    			<div class = "col-lg-6">

						    				<div class = "panel">

						    					<div class = "row">

							    					<div class = "col-sm-6">

							    						<img class = "full aimage">

							    					</div>

							    					<div class = "col-sm-6">

							    						<a class = "anchor">

							    							<h3 class = "aheading"></h3>

							    							<a class = "ahighlight">

								    							<div class = "highlight"></div>

								    						</a>

							    						</a>

							    					</div>

							    				</div>

						    				</div>

						    			</div>

						    		</div>

							    </div>

							   	<div class="carousel-item">
							    
							    	<div class = "row">

						    			<div class = "col-lg-6">

						    				<div class = "panel">

						    					<div class = "row">

							    					<div class = "col-sm-6">

							    						<img class = "full aimage">

							    					</div>

							    					<div class = "col-sm-6">

							    						<a class = "anchor">

							    							<h3 class = "aheading"></h3>

							    						</a>

							    						<a class = "ahighlight">

							    							<div class = "highlight"></div>

							    						</a>

							    					</div>

							    				</div>

						    				</div>

						    			</div>

						    			<div class = "col-lg-6">

						    				<div class = "panel">

						    					<div class = "row">

							    					<div class = "col-sm-6">

							    						<img class = "full aimage">

							    					</div>

							    					<div class = "col-sm-6">

							    						<a class = "anchor">

							    							<h3 class = "aheading"></h3>

							    							<a class = "ahighlight">

								    							<div class = "highlight"></div>

								    						</a>

							    						</a>

							    					</div>

							    				</div>

						    				</div>

						    			</div>

						    		</div>

							    </div>

							    <div class="carousel-item">
							    
							    	<div class = "row">

						    			<div class = "col-lg-6">

						    				<div class = "panel">

						    					<div class = "row">

							    					<div class = "col-sm-6">

							    						<img class = "full aimage">

							    					</div>

							    					<div class = "col-sm-6">

							    						<a class = "anchor">

							    							<h3 class = "aheading"></h3>

							    						</a>

							    						<a class = "ahighlight">

							    							<div class = "highlight"></div>

							    						</a>

							    					</div>

							    				</div>

						    				</div>

						    			</div>

						    			<div class = "col-lg-6">

						    				<div class = "panel">

						    					<div class = "row">

							    					<div class = "col-sm-6">

							    						<img class = "full aimage">

							    					</div>

							    					<div class = "col-sm-6">

							    						<a class = "anchor">

							    							<h3 class = "aheading"></h3>

							    							<a class = "ahighlight">

								    							<div class = "highlight"></div>

								    						</a>

							    						</a>

							    					</div>

							    				</div>

						    				</div>

						    			</div>

						    		</div>

							    </div>

						 	</div>

							<a class = "carousel-control-prev" href = "#carousel" role = "button" data-slide = "prev">

							    <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
							    <span class = "sr-only">Previous</span>

							</a>
							
							<a class = "carousel-control-next" href = "#carousel" role = "button" data-slide = "next">
							    
							    <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
							    <span class = "sr-only">Next</span>

							</a>

						</div>

					</div>

					<div class = "bottom">

						<h2>Browse Topics</h2>

			    		<div class = "topics">

			    			<a href = "https://cronicle.space/explore/?t=productivity&n=0">

								<div class = "button">

									<img src = "../articles/image/icon productivity.svg" alt = "productivity" class = "full">

									<p>Productivity</p>

								</div>

							</a>

							<a href = "https://cronicle.space/explore/?t=technology&n=1">

								<div class = "button">

									<img src = "../articles/image/icon technology.svg" alt = "technology" class = "full">

									<p>Technology</p>

								</div>

							</a>

							<a href = "https://cronicle.space/explore/?t=marketing&n=2">

								<div class = "button">

									<img src = "../articles/image/icon marketing.svg" alt = "marketing" class = "full">

									<p>Marketing</p>

								</div>
							</a>

							<a href = "https://cronicle.space/explore/?t=finance&n=3">

								<div class = "button">

									<img src = "../articles/image/icon finance.svg" alt = "finance" class = "full">

									<p>Finance</p>

								</div>

							</a>

							<a href = "https://cronicle.space/explore/?t=school&n=4">

								<div class = "button">

									<img src = "../articles/image/icon school.svg" alt = "school" class = "full">

									<p>School</p>

								</div>

							</a>

							<a href = "https://cronicle.space/explore/?t=community&n=5">

								<div class = "button">

									<img src = "../articles/image/icon community.svg" alt = "community" class = "full">

									<p>Community</p>

								</div>

							</a>

						</div>

			    		<h2>Recent Quizzes</h2>

			    		<div class = "row">

			    			<div class = "col-md-4">

			    				<div class = "qpanel">

				    				<img class = "full qimage">

				    				<a class = "qanchor">

				    					<h3 class = "qheading"></h3>

				    				</a>

				    				<p class = "qdesc"></p>

			    				</div>

			    			</div>

			    			<div class = "col-md-4">

			    				<div class = "qpanel">

				    				<img class = "full qimage">

				    				<a class = "qanchor">

				    					<h3 class = "qheading"></h3>

				    				</a>

				    				<p class = "qdesc"></p>

			    				</div>

			    			</div>

			    			<div class = "col-md-4">

			    				<div class = "qpanel">

				    				<img class = "full qimage">

				    				<a class = "qanchor">

				    					<h3 class = "qheading"></h3>

				    				</a>

				    				<p class = "qdesc"></p>

			    				</div>

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