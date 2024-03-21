<?php
include($_SERVER['DOCUMENT_ROOT'] . '/AMP/private/config.php');		//MySQL server credentials
date_default_timezone_set('America/New_York');

$date = date('Y-m-d H:i:s');
$ip = getIp();
$os = $_SERVER['HTTP_USER_AGENT'];

$page = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "/pages") + 7, strlen($_SERVER['REQUEST_URI']));


$sql = "INSERT INTO webdata (date, ip, os, page)
VALUES ('".$date."', '".$ip."', '".$os."', '".$page."')";

$conn->query($sql);
$conn->close();


function getIp()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} 
	else {
    $ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
function clean($data)
{
	$data = trim($data);
	$data= htmlspecialchars($data);
	$data = stripslashes($data);
	return $data;
}
?>
<html>
	<head>
		<title>This is a test</title>
	</head>
</html>