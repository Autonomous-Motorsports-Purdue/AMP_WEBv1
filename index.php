<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Autonomous Motorsports Purdue (AMP) is an organization focused on educating students about autonomous driving and inspiring innovation through student-led projects.">
		<title>Autonomous Motorsports Purdue</title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/AMP/public_html/assets/header.php'; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/style.css">
	</head>
	<body>
		<nav>
			<a class="nav-home" href="/AMP">
				<img class="nav-logo" src="/AMP/images/amp.png">
			</a>
			<div class="nav-container">
				<a class="nav-links" href="/AMP" >Home</a>
				<a class="nav-links" href="/AMP/ourteam" >Our Team</a>
				<a class="nav-links" href="/AMP/projects" >Projects</a>
				<a class="nav-links" href="/AMP/news" >News</a>
				<a class="nav-links" href="/AMP/sponsors" >Sponsors</a>
				<a class="nav-links" href="/amp/contact" >Contact</a>
			</div>
		</nav>
		<div class="container-banner">
			<h1>Autonomous Motorsports Purdue</h1>
			<video id="banner" autoplay loop muted>
			  <source src= "/AMP/images/banner.mp4" type="video/mp4" />
			</video>

		</div>
		<div class="container">
			<h2>Developing Autonomous Racing Solutions</h2>
			<div class="box-left">
				<img class="sub-img" src="images/kart.jpg" alt="Go kart on starting line.">
			</div>
			<div class="box-right">
				<p>
					Autonomous racing is the ultimate engineering challenge. Combining the mechanical design of 
				traditional auto-racing with the cutting-edge software controls of driverless vehicles, 
				autonomous go-karts are the perfect platform to design, build, and test the vehicles of tomorrow.
				<br><br>
					The driver is replaced with a variety of sensors placed throughout the kart. These 
				sensors act as the eyes and ears of the vehicle, feeding the data to a control algorithm 
				that students develop and tune. Machine learning (artificial intelligence) is often used to 
				interpret sensor data. The challenge is who can engineer and build the most effective and fast driverless kart.
				</p>
			</div>
		</div>
		
		<div class="container">
			<h2>Autonomous Karting Series</h2>
			<div class="box-left">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
					labore et dolore magna aliqua. Amet aliquam id diam maecenas ultricies mi eget. Tellus elementum 
					sagittis vitae et leo. Vulputate ut pharetra sit amet aliquam id diam maecenas ultricies. Donec pretium 
					vulputate sapien nec sagittis. Facilisi cras fermentum odio eu feugiat pretium. Aenean sed adipiscing diam 
					donec adipiscing tristique. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Facilisis 
					mauris sit amet massa vitae tortor condimentum.
				<br><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
					labore et dolore magna aliqua. Amet aliquam id diam maecenas ultricies mi eget. Tellus elementum 
					sagittis vitae et leo. Vulputate ut pharetra sit amet aliquam id diam maecenas ultricies. Donec pretium 
					vulputate sapien nec sagittis. Facilisi cras fermentum odio eu feugiat pretium. Aenean sed adipiscing diam 
					donec adipiscing tristique. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean.
				</p>
			</div>
			<div class="box-right">
				<img class="sub-img" src="/AMP/images/aks.jpg" alt="Autonomous Karting Series team picture.">
			</div>
		</div>
		<div class="container">
			<h2>Subteams</h2>
			<a href="/AMP/projects">
				<div class="team-container">
					<h3>Software</h3>
					<img class="subteam-images" src="/AMP/images/view.jpg" />
				</div>
			</a>
			<a href="/AMP/projects">
				<div class="team-container">
					<h3>Electrical</h3>
					<img class="subteam-images" src="/AMP/images/view.jpg" />
				</div>
			</a>
			<a href="/AMP/projects">
				<div class="team-container">
					<h3>Mechanical</h3>
					<img class="subteam-images" src="/AMP/images/view.jpg" />
				</div>
			</a>
			<a href="/AMP/projects">
				<div class="team-container">
					<h3>Business</h3>
					<img class="subteam-images" src="/AMP/images/view.jpg" />
				</div>
			</a>
		</div>
		<br>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/AMP/public_html/assets/footer.php'; ?>

	</body>
</html>