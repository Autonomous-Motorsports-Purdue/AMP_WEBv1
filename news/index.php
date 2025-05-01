<?php
include($_SERVER['DOCUMENT_ROOT'] . '/AMP/private/config.php');		//MySQL server credentials
date_default_timezone_set('America/New_York');

$sort = "";
$date = date('Y/m/d H:i:s');
$pages = array("AKS 2023 Inaugural Competition");
$lastmod = array("03/21/2024");
$summary = array("This is a temp placeholder.");

http_response_code(403);		//Disallow page viewing
die('Forbidden');

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	$sort = clean($_GET["sort"]);
	$search = clean($_GET["search"]);
	//$pages = scandir($_SERVER['DOCUMENT_ROOT'] . '/AMP/public_html/pages');
	//print_r($pages);
	
}
/*

$sql = "INSERT INTO webdata (date, ip, os, page)
VALUES ('Test9', 'Test88', 'Test777', 'Test6666')";

$conn->query($sql);

$conn->close();
*/

function clean($data)
{
	$data = trim($data);
	$data= htmlspecialchars($data);
	$data = stripslashes($data);
	return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Autonomous Motorsports Purdue (AMP) is an organization focused on educating students about autonomous driving and inspiring innovation through student-led projects.">
		<title>News | Autonomous Motorsports Purdue</title>
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
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET" class="form-container">
				
				Sort By
				<select name="sort" class="sort">
					<?php
						if(strcmp($sort, "old") == 0)
						{
					?>
					<option value="old">Oldest</option>
					<option value="new">Newest</option>
					<?php
						}
						else
						{
					?>
					<option value="new">Newest</option>
					<option value="old">Oldest</option>
					<?php
						}
					?>
					
				</select>
				<input type="text" name="search" placeholder="Search" class="search"/>
				<input type="submit" value="Search" class="form-submit">
			</form>
		</div>
		<br>
		<br>
		<br>
		<div class="search-heading">No articles found matching "X"</div>
		<br>
		<br>
		<a href="#" class="strip-links">
			<div class="news-header">
				<img src="/AMP/images/banner.jpg" class="news-container" />
				<div class="news-content">
					<h4>Heading FX9</h4>
					<span class="news-detail">Published By: <?php echo "John Smith"; ?>&nbsp; - &nbsp;<?PHP echo "01/01/1970"; ?></span>
					<hr class="news-ignore">
					<span class="news-summary">This is the news summary. This is the news content in the container.</span>
				</div>
			</div>
		</a>	
		<h2>Page Under Construction</h2>
		<br>
		<br>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/AMP/public_html/assets/footer.php'; ?>
	</body>

</html>