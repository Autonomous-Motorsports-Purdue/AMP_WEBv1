<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Autonomous Motorsports Purdue (AMP) is an organization focused on educating students about autonomous driving and inspiring innovation through student-led projects.">
    <title>Autonomous Motorsports Purdue</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AMP/public_html/assets/header.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
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
        <h1>Autonomous Motorsports Purdue</h1>
        <video id="banner" autoplay loop muted>
            <source src="/AMP/images/banner.mp4" type="video/mp4" />
        </video>

    </div>
	
	
	
	<div class="container-header">
		<h2>Developing Autonomous Racing Solutions</h2>
	</div>
	<div class="container">
		<img class="sub-img" src="/AMP/images/kart.jpg" alt="Go kart on starting line">
		<p>
			Autonomous racing is the ultimate engineering challenge. Combining the mechanical design of
			traditional auto-racing with the cutting-edge software controls of driverless vehicles,
			autonomous go-karts are the perfect platform to design, build, and test the vehicles of tomorrow.
			<br><br>
			The driver is replaced with a variety of sensors placed throughout the kart. These
			sensors act as the eyes and ears of the vehicle, feeding the data to a control algorithm
			that students develop and tune. Machine learning (artificial intelligence) is often used to
			interpret sensor data.
		</p>
    </div>
    
	<div class="container-header">
        <h2>Autonomous Karting Series</h2>
	</div>
	<div class="container">
		<p>
			AMP is a founding member of the Autonomous Karting Series (AKS), and hosts the AKS Purdue Grand Prix: 
			An event where various universities design and build a driverless go-kart and compete against each 
			other. Competing karts are tested for their performance and reliability. 
			<br><br>
			AKS offers a collaborative platform for teams to learn and apply their skills in an ambitious project. 
			The goal of AKS is to make kart-scale, head-to-head autonomous racing accessible to college students.
		</p>
			<img class="sub-img" src="/AMP/images/aks.jpg" alt="Autonomous Karting Series team picture.">
    </div>
	<div class="container-header">
		<h2>Subteams</h2>
	</div>
    <div class="container" id="media-center">
        
        <div class="container-body">
            <a class="team-container" href="/AMP/projects/#software">
                <div>
                    <h3>Software</h3>
                    <img class="subteam-images" src="/AMP/images/subteam-software.png" />
                </div>
            </a>
            <a class="team-container" href="/AMP/projects/#electrical">
                <div>
                    <h3>Electrical</h3>
                    <img class="subteam-images" src="/AMP/images/subteam-electrical.jpg" />
                </div>
            </a>
            <a class="team-container" href="/AMP/projects/#mechanical">
                <div>
                    <h3>Mechanical</h3>
                    <img class="subteam-images" src="/AMP/images/subteam-mechanical.JPG" />
                </div>
            </a>
            <a class="team-container" href="/AMP/projects/#business">
                <div>
                    <h3>Business</h3>
                    <img class="subteam-images" src="/AMP/images/subteam-business.jpg" />
                </div>
            </a>
        </div>
    </div>
    <br>
	<br>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AMP/public_html/assets/footer.php'; ?>
</body>

</html>