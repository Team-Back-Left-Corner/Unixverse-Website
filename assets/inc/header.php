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

	$high_scores = [(int)$_SESSION['quiz_one_hs'],(int)$_SESSION['quiz_two_hs'],(int)$_SESSION['quiz_three_hs'],(int)$_SESSION['quiz_four_hs'],(int)$_SESSION['quiz_five_hs']];

	$completion_amt = 0;
	$highest_score = 0;
	$attempted_quizzes = 0;
	foreach ($high_scores as $hs) {
		if($hs != 0){
			$attempted_quizzes+=1;
		}
		if($hs > $highest_score){
			$highest_score = $hs;
		}
		$completion_amt += $hs;
	}

	$course_completion = ($attempted_quizzes/5 * 100);
	$quiz_average = $completion_amt/5;
	$amt_one = percentToDegree($course_completion);
    $amt_two = percentToDegree($quiz_average);
    $amt_three = percentToDegree($highest_score);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8/>
	<title>Unixverse</title>
	<link rel="stylesheet" href="<?php echo $path;?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo $path;?>assets/css/nav.css">
	<link rel="stylesheet" href="<?php echo $path;?>assets/css/footer.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
include($path ."assets/inc/navbar.php");
?>
