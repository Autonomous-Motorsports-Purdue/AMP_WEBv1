<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Autonomous Motorsports Purdue (AMP) is an organization focused on educating students about autonomous driving and inspiring innovation through student-led projects.">
    <title>Projects | Autonomous Motorsports Purdue</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AMP/public_html/assets/header.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <nav>
        <a class="nav-home" href="/AMP">
            <img class="nav-logo" src="/AMP/images/amp.png" />
        </a>
        <div class="nav-container" id="mobile-container">
            <a class="nav-links" href="/AMP">Home</a>
            <a class="nav-links" href="/AMP/ourteam">Our Team</a>
            <a class="nav-links" href="/AMP/projects">Projects</a>
            <!--<a class="nav-links" href="/AMP/news">News</a>-->
            <a class="nav-links" href="/AMP/sponsors">Sponsors</a>
            <a class="nav-links" href="/amp/contact">Contact</a>
        </div>
        <a href="javascript:void(0);" class="mobile-icon" onclick="mobileNav()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
    <div class="container-banner">
		<h1>Projects</h1>
		<img id="banner" src="/AMP/images/projects.jpg" alt="Team Workshop">
	</div>
	
	<div class="container-header" id="software">
		<h2>Software</h2>
	</div>
	<div class="container">
		<img class="sub-img" src="/AMP/images/software-view.JPG" alt="Software Track Detection">
		<p>
			Members on the software team work together to code the Autonomous Software Stack for 
			the go-kart. The vehicle utilizes the NVIDIA Jetson as the primary compute unit. In past 
			semesters, students optimized raceline which was the optimal path around the race track.
			<br><br>
			Current projects include improving the Autonomous Navigation Stack and continuing to 
			work on serial communication. Software meets 
			Saturdays at 11 AM in the Bechtel Innovation and Design Center.
		</p>
    </div>
	<div class="container-header" id="electrical">
        <h2>Electrical</h2>
	</div>
	<div class="container">
		<p>
			In the electrical subteam, students develop and test PCB's, wire go-kart components, and code firmware. Some of 
			our past projects include kart PCB design, lithium battery assembly, and ethernet communication. 
			<br><br>
			Our PCB's are STM32 based and designed using KiCAD. Electrical meets 
			Sundays at 2 PM in the Bechtel Innovation and Design Center.
		</p>
		<img class="sub-img" src="/AMP/images/electrical-view.png" alt="Electrical PCB">
    </div>
	<div class="container-header" id="mechanical">
		<h2>Mechanical</h2>
	</div>
	<div class="container">
		<img class="sub-img" src="/AMP/images/mechanical-view.png" alt="Go kart top view">
		<p>
			Members design, test, and manufacture countless parts for the go-kart. In the past couple of years, 
			some of our projects include spoiler design, electrical enclosures, structural mounts, and rebuilding the kart from the ground up. 
			<br><br>
			We primarily use SolidWorks to design and test our parts. Anyone is welcome to join, and no experience is necessary. Mechanical meets 
			Sundays at 2 PM in the Bechtel Innovation and Design Center.
		</p>
    </div>
	<div class="container-header" id="business">
        <h2>Business</h2>
	</div>
	<div class="container">
		<p>
			Students of the business subteam have a variety of projects to choose from. Past projects include 
			networking with sponsors, tracking budgets, and analyzing organization finances.
			<br><br>
			No matter your major, AMP has a place for you. If you are interested in the business subteam, email 
			us through the contact page. 
		</p>
		<!--<img class="sub-img" src="/AMP/images/XXX.jpg" alt="Business Subteam">-->
    </div>
    <br>
	<br>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AMP/public_html/assets/footer.php'; ?>
</body>

</html>