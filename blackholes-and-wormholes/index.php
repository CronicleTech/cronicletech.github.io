<?php

	session_start();

?>

<!DOCTYPE html>
<html lang = "en-us">
<head>

	<title>Black Holes and Wormholes - Differentiating Fiction From Reality | Cronicle</title>

	<link rel = "shortcut icon" type = "image" href = "../../main/image/logo.webp">

	<!-- Meta Tags -->
	<meta charset = "UTF-8">
	<meta http-equiv='content-language' content='en-us'>

	<meta name = "description" content = "Exploring the Enigma: Black Holes, Wormholes, and the Boundaries of Reality. Join the cosmic journey as we unravel the mysteries of black holes, revealing their powerful forces and mechanisms of observation. Delve into the theoretical realm of wormholes, time travel possibilities, and the intricate interplay between exotic matter, quantum fluctuations, and General Relativity. Discover the thin line between fiction and reality in the captivating world of astrophysics.">

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

					<h1>Black Holes and Wormholes - Differentiating Fiction From Reality </h1>

					<div class = "row subtitle">

						<img src = "../image/main/author khyatee.webp" alt = "Khyatee Atolia" class = "author" width = "50" height = "50">

						<p>Khyatee Atolia</p>

						<p class = "break">|</p>

						<img src = "../image/main/icon calendar.svg" alt = "calendar" width = "20" height = "20" class = "date">

						<p class = "date">3 October 2022</p>

						<p class = "break date">|</p>

						<img src = "../image/main/icon clock.svg" alt = "clock" width = "20" height = "20">

						<p class = "time">4 Minute Read</p>

					</div>
				</div>

				<!-- Content -->
				<div class = "content">

					<img src = "image.webp" alt = "supernova" class = "full">

					<h2 style = "margin-top: 0;">Supernovas: The Beginning</h2>
					
					<p>
						
						What exactly is a black hole? And how do we "see" black holes if they emit no light? And can a black hole really be a “wormhole” or “time machine” as the sci-fi authors claim? 

						<br><br>

						Imagine you are a spectator in the cosmos, you have an all-seeing eye, and choose to zoom in your lens to the center of our galaxy at around 35,000 and 100,000 BCE. A star is nearly at the end of its life- it has depleted nearly all of its supply of hydrogen. It now sustains itself by fusing the heavier and heavier elements, up until it reaches iron. Iron is no longer able to supply enough energy to prop up the star's outer layers- and they start collapsing inward and then explode out. You are witness to a bright burst of light and color- a supernova.  

					</p>
					
					<h2>The Black Hole</h2>

					<p>

						You shield your eyes from the brightness. Yet, a small part of the star remains behind. This remaining star's powerful gravitational force overwhelms everything else and it is crushed to an infinitely small point with infinite density, according to NASA. 

						<br><br>

						In the words of astrophysicist Neta Bahcall, of Princeton University, a black hole is "Basically, an object or a point in space where the gravitational pull is so strong that nothing can escape from it". 

						<br><br>

						The center of this point in space is known as the point of singularity, where all known laws of physics break down. The black hole then keeps increasing its mass by absorbing particles. 

					</p>

					<h3>How Do You “See” a Black Hole?</h3>

					<p>

						Let us consider a cloud of gas that is around the black hole. The black hole's gravity causes the particles in space to orbit the black hole, black holes don't exactly “suck” them in, as popular narratives say. However, the gas particles constantly collide with each other, converting some of the kinetic energy into heat. With the loss of kinetic energy, the particles get closer to the black hole, until eventually, they fall in. 

						<br><br>

						This kinetic energy is converted to thermal energy, and the particles heat up. Just before the gas actually enters the black hole, it heats up enough to begin glowing. Since this light is emitted by the gas before the gas enters the black hole, the light can escape the black hole, and reach our detectors. Therefore, we can indirectly "see" a black hole by seeing the glowing gas cloud that surrounds it.  

					</p>

					<h2>Wormholes: Making Space Travel Possible</h2>

					<p>

						Now, you want to take that black hole and make it into a wormhole to travel through space-time. You know that theoretically and mathematically, they can be possible. 

						<br><br>

						However, you doubt it, the way that it violates the causal structure of the universe, and the rules of space-time, causing several time travel paradoxes. But you want to try, anyway.

						<br><br>

						All you have to do to make that possible is take your black hole and connect it to a white hole. A white hole is a hypothetical object that expands outwards from a space-time singularity and emits energy- basically, a time-reversed black hole. Even if you somehow manage to connect the two in a tunnel, as soon as they form, their enormous gravitational strength rips them apart faster than the speed of light, making them terribly unstable to be of much use.   

					</p>

					<h2>Exotic Matter</h2>

					<p>

						The only known way to stabilize a wormhole is to use some form of exotic matter,  something with a negative mass. Put simply, a positive mass attracts things towards it, using gravity, while an anti-mass would repel things, hence providing repulsion to keep the black holes open as someone passes through it.

						<br><br>

						Initially, the closest known real representative of such exotic matter is a region of negative pressure density produced by the Casimir effect. The exotic matter will be able to counteract the massive effects of gravity, exerting a pressure greater than the pressure of the center of neutron stars, and thus prevent the wormholes from closing the instant they are formed.    

					</p>

					<h2>Quantum Fluctuations: Fiction or Reality?</h2>

					<p>

						We might have a possible candidate for negative mass: the vacuum of space itself. Quantum Fluctuation in empty space is constantly creating a pair of particles and antiparticles only to be annihilated an instant later. And the vacuum of space is boiling with them. We can already manipulate them to create an effect similar to a negative mass. 

						<br><br>

						Of course, there is a possibility that wormholes, although theoretically possible, might be impossible to exist in the real world. General Relativity is a mathematical theory that has a number of solutions, but it is not necessary for all of the solutions to describe reality. Coupled with the fantastic amount of energy required to warp the entire fabric of space-time and sculpt such a thing, the prospects of being able to create wormholes for time travel or space travel remains still in the minds of science fiction authors.    

						<br><br>

						We might have a possible candidate for negative mass: the vacuum of space itself. Quantum Fluctuation in empty space is constantly creating a pair of particles and antiparticles only to be annihilated an instant later. And the vacuum of space is boiling with them.
			
						<br><br>

						We can already manipulate them to create an effect similar to a negative mass. Of course, there is a possibility that wormholes, although theoretically possible, might be impossible to exist in the real world. 

						<br><br>

						General Relativity is a mathematical theory that has a number of solutions, but it is not necessary for all of the solutions to describe reality. Coupled with the fantastic amount of energy required to warp the entire fabric of space-time and sculpt such a thing, the prospects of being able to create wormholes for time travel or space travel remains still in the minds of science fiction authors.

						<br><br>

						We might not know what goes on in the center of black holes just yet, but wormholes and intergalactic travel will likely remain in speculations and popular science fiction just yet. 

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