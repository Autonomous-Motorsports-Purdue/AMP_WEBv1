<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Autonomous Motorsports Purdue (AMP) is an organization focused on educating students about autonomous driving and inspiring innovation through student-led projects.">
    <title>Autonomous Motorsports Purdue</title>
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
            <a class="nav-links" href="/AMP/news">News</a>
            <a class="nav-links" href="/AMP/sponsors">Sponsors</a>
            <a class="nav-links" href="/amp/contact">Contact</a>
        </div>
        <a href="javascript:void(0);" class="mobile-icon" onclick="mobileNav()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
	
	<div class="container-banner">
		<h1>News</h1>
		<img id="banner" src="/AMP/images/track-sunset.jpg" alt="Sunset at Grand Prix Track">
	</div>
	
	<div class="menu">
		<div id="menu-container">
		</div>
		<form method="GET" class="form-container">
			Sort By
			<select name="sort" class="sort">
				<option value="new">Newest</option>
				<option value="old">Oldest</option>
			</select>
			<input type="text" name="search" placeholder="Search" class="search"/>
			<input type="submit" value="Search" class="form-submit">
		</form>
	</div>
	<br>
	
	<h2>Page Under Construction</h2>
    <br>
	<br>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AMP/public_html/assets/footer.php'; ?>
</body>

</html>