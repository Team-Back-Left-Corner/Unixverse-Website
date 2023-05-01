<?php
    if(empty($_SESSION['uname'])){
        die("Need Auth :(");
    }

	// This is a function for calculating the percentage of a certain score.
	function calculatePercentage($number, $total)
	{
		if ($total == 0) {
			return 0;
		}
		return ($number / $total) * 100;
	}

	function percentToDegree($percent)
	{
		return $percent / 100 * 360;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8" />
	<title>Unixverse</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel='stylesheet' type='text/css' href='assets/css/style.php' />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

	<div class="navbar">

		<div class="logo">
			<img src="assets/img/unixverse.png">
		</div>

		<div class="nav-links">
			<ul>
				<li><a href="#">Sections</a></li>
				<li><a href="#">Quizzes</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Leave a comment</a></li>
				<li><a href="clearSession.php">Log out</a></li>
			</ul>
		</div>

	</div>