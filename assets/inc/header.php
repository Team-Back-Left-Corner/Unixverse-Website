<?php
	session_name("iste240t54");
	session_start();
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

	$completion_amt = $_SESSION['quiz_one_hs'] + $_SESSION['quiz_two_hs'] + $_SESSION['quiz_three_hs'] + $_SESSION['quiz_four_hs'] + $_SESSION['quiz_five_hs'];
	$course_completion = calculatePercentage($completion_amt, 500);
	$quiz_average = $completion_amt/5;
	$amt_one = percentToDegree($course_completion);
    $amt_two = percentToDegree($quiz_average);
    $amt_three = percentToDegree(50);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8/>
	<title>Unixverse</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/nav.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
include($path ."assets/inc/navbar.php");
?>
