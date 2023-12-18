<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>What are 3D Printers and How are They Different From 2D Printers? | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Exploring the Balance: Freedom of Speech, Information, and Authority. Delve into the debate surrounding the free dissemination of information in scientific research, business, and academia. Uncover the benefits of open information and the potential downsides, as we discuss the role of authority in maintaining a balanced approach for societal progress.">

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

					<h1>What are 3D Printers and How are They Different From 2D Printers?</h1>

					<div class = "row subtitle">

						<img src = "../image/main/author khyatee.webp" alt = "Khyatee Atolia" class = "author" width = "50" height = "50">

						<p>Khyatee Atolia</p>

						<p class = "break">|</p>

						<img src = "../image/main/icon calendar.svg" alt = "calendar" width = "20" height = "20" class = "date">

						<p class = "date">2 September 2022</p>

						<p class = "break date">|</p>

						<img src = "../image/main/icon clock.svg" alt = "clock" width = "20" height = "20">

						<p class = "time">3 Minute Read</p>

					</div>
					
				</div>

				<div class = "content">

					<img src = "image.webp" alt = "3d printer" class = "full">

					<p>
					
						2D printers, like the name suggests, work in two dimensions. They are able to print text or images on a flat surface using the x and y dimensions. 3D printers add another dimension- depth. They can move up and down, left and right, and backward and forward. Instead of delivering ink on paper, they can manufacture things from scratch, building things from toys to prosthetics, and even entire houses. They do this by distributing different materials: polymers (including plastics), metal, ceramics, even chocolate—to ‘print’ an item layer by layer in a process that is known as ‘additive manufacturing.’  Additive manufacturing describes the process of creating something in layers, adding material continuously until the final design is complete.

					</p>

					<h2>Types of 3D Printers</h2>

					<p>

						Here are different types of 3D printers. In 2015, the ISO/ASTM 52900 standard was created with the aim to standardize all terminology and classify each of the different types of 3D printers. The 7 most basic types of 3D printers are:

					</p>

					<ul>

						<li>Fused deposition modeling (FDM)</li>
						<li>Stereolithography(SLA)</li>
						<li>Digital Light Processing(DLP)</li>
						<li>Selective Laser Sintering (SLS)</li>
						<li>Selective laser melting (SLM)</li>
						<li>Laminated object manufacturing (LOM)</li>
						<li>Digital Beam Melting (EBM)</li>

					</ul>

					<h2>Steps of 3D Printing</h2>

					<p>

	                    So how do 3D printers print something? Here are the steps of 3D printing:

						<br><br>

						1. The first step of any 3D printing process is 3D modeling. The blueprint of the design is first designed using something known as CAD- Computer Aided Design. An STL file, a raw, unstructured file containing only the surface geometry of your three-dimensional object is generated by CAD software at the end of modeling. This describes the surface and shape of the 3D model. This software allows for high precision and customization, which is crucial for bioprinting.

						<br><br>

						2. The 2nd step is to “slice” it. Since 3D printers cannot conceptualize the concept of three dimensions, engineers need to slice the model into layers in order for the printer to create the final product. It transfers an STL file into G-code. G-code contains printer commands, so what slicing does is it takes the STL file’s geometry data and creates a list of instructions the printer must follow to print the model. This gives a 3D printed object internal lattices and columns that help shape and strengthen the object. Once the model is sliced, it’s sent off to the 3D printer for the actual printing process.

						<br><br>

						3. This file of G-code is then loaded into the RAM of a 3D printer. The printer acts the same as a traditional inkjet printer in the direct 3D printing process, where a nozzle moves back and forth while dispensing the material layer-by-layer. As each layer is printed it solidifies, either by cooling, a chemical reaction or by mixing two different solutions delivered by the printer head. New layers are added to the previous ones to form a cohesive structure. It is important to consider the material type, use the correct nozzle for the material and temperature range, and have accurate calibration.

					</p>

					<h2>Applications of 3D Printers</h2>

					<p>

	                    Some important applications of 3D printers are in the fields of 

					</p>

					<h3>1. Medicine and Drug Development</h3>

					<p>

						The use of 3D printing in order to create biological components is called Bio-printing. 3D printing is already being used to create customized prosthetics and tooth implants that fit better than all preceding technologies. Alongside, scientists are working on the technology to replicate human organs. 3D printing would be used to create biological materials like tissues from stem cells which can later be developed into scaffolds of organs. (Stay tuned for more on this.)				
					
					</p>


					<h3>2. Infrastructure Development and Construction</h3>

					<p>

						Construction 3D printing offers various technologies that use 3D printing to fabricate buildings or construction components. We can build a 500-square-foot home in 24 hours, and they require 95% fewer labor hours and generate ten times less waste than conventional construction projects. The ability to quickly set up an emergency response center or a portable hospital in response to a catastrophe will be aided by 3D design. The same principles can also be used to build military bunkers and even commercial houses. 
						
					</p>

					<h3>3. Prototyping for Engineering Components</h3>

					<p>

						Using 3D printing, engineers can create new prototypes even those with complex internal structures and geometries to address problems without having to mass produce components. The right 3D printer holds the potential to shrink development time from months to days. 3D printing can also play a part in the low-volume production of complex parts. 3D printing for engineering isn’t limited to prototypes. Real, functional parts are also being 3D printed and used in aircraft and even space missions. 

						<br><br>

						3D printing has opened access to a plethora of opportunities in comparatively simple and cheap technology. Additive manufacturing offers enormous value, from improving aircraft performance to offering a more agile approach to spare parts production. Bioprinting itself could be the next big thing for both technologies and medicine. Stay tuned to find out more about bioprinting and its applications. 

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