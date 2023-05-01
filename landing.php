<<<<<<< HEAD
<?php
		session_name("iste240t54");
		session_start();

		if(empty($_SESSION['uname'])){
			die("Need Auth :(");
		}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

	<div class="sidebar">
	<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1612.42 539.29">
			<defs>
				<style>
				.cls-1 {
					fill: none;
					stroke: #000;
					stroke-miterlimit: 10;
					stroke-width: 4px;
				}
				</style>
			</defs>
			<g>
				<path d="m94.38,182.8l-22.03,102.86c-6.53,29.93,7.71,37.84,24.41,37.84,19.76,0,29.95-7.2,36.35-37.84l22.03-102.86h53.95l-22.43,104.61c-11.55,54.19-34.26,75.24-95.84,75.24-48.65,0-85.03-18.66-71.99-79.49l21.44-100.36h54.11Z"/>
				<path d="m208.84,358.64l37.25-175.84h63.73c24.33,63.86,31.94,89.48,37.92,112.38h.85c1.47-16.1,8.53-50.59,14.7-79.68l7.02-32.71h49.18l-37.25,175.84h-60.21c-7.96-25.3-33.17-101.19-38.69-123.91h-.76c-2.56,21.15-8.99,50.15-15.49,81.14l-8.98,42.77h-49.27Z"/>
				<path d="m513.29,182.8l-37.25,175.84h-54.2l37.25-175.84h54.2Z"/>
			</g>
			<g>
				<path d="m801.67,359.05l-39.25-179.25h5l23.25,106.25c8.25,38,12.75,57.75,14.25,66.5h.25c5-8.75,19.25-30.25,41-63.25l72-109.5h5.5l-117.5,179.25h-4.5Z"/>
				<path d="m1049.92,266.05h-107l-18.5,88.5h120.5l-2.25,4.5h-124.25l38-179.25h117l-1,4.5h-112l-16.25,77.25h107l-1.25,4.5Z"/>
				<path d="m1102.42,270.05l-18.75,89h-5l38-179.25h66.25c28.5,0,48.5,15,48.5,40.25,0,22.5-11.75,43.75-50.25,48,22,4.5,34.25,19,27,52-5.25,23-6,34.25-5.5,39h-5c0-8,1-17.75,5.5-38,7.75-34.5-3.5-51-43.25-51h-57.5Zm1-4.5h58.25c32,0,64.75-9.25,64.75-45,0-22.25-16.5-36.25-44.75-36.25h-61l-17.25,81.25Z"/>
				<path d="m1249.91,310.55c2.5,28.25,23.25,47.5,62.25,47.5,43.5,0,62.25-21.5,62.25-46.75,0-21.75-13.75-34-52-44.5-35.25-9.75-51.5-19-51.5-43,0-30,25.75-47.5,60-47.5,47.5,0,59.75,31,60.25,48h-4.5c-2.75-20.75-16.25-43.5-56.5-43.5-26,0-54.25,12.25-54.25,42.75,0,19.5,11.25,28.75,48,38.75,43.75,12,55.5,26.75,55.5,48.25,0,30.5-21.75,52-68,52-40,0-64.25-19.25-66.25-52h4.75Z"/>
				<path d="m1542.91,266.05h-107l-18.5,88.5h120.5l-2.25,4.5h-124.25l38-179.25h117l-1,4.5h-112l-16.25,77.25h107l-1.25,4.5Z"/>
			</g>
			<path class="cls-1" d="m366.34,1.48l213.89,194.8c29.64,26.99,68.8,34.15,93.7,17.14l47.58-28.77-30.77,45.58c-17.02,24.9-9.86,64.06,17.14,93.7l194.8,213.89-213.89-194.8c-29.64-26.99-68.8-34.15-93.7-17.14l-43.58,26.77,26.77-43.58c17.02-24.9,9.86-64.06-17.14-93.7L366.34,1.48Z"/>
			<g>
				<path d="m994.76,404.15h17.41c7.89,0,12.45,3.33,12.45,9.74,0,5.1-3.56,7.58-6.64,8.36,3.42.83,8.33,3.15,8.33,9.77,0,8.12-6.9,11.39-13.45,11.39h-18.1v-39.25Zm16.35,16.63c6.39,0,9.86-2.19,9.86-6.76,0-5.34-4.35-6.76-9.59-6.76h-13.19v13.52h12.92Zm-12.92,19.51h13.41c5.14,0,11.06-1.58,11.06-8.07,0-5.55-4.57-8.33-11.97-8.33h-12.5v16.4Z"/>
				<path d="m1063.31,424.22h-24.41v16.06h26.83l-.56,3.12h-29.7v-39.25h29.1v3.12h-25.67v13.82h24.41v3.12Z"/>
				<path d="m1086.53,443.41v-15.42c0-.33-.11-.56-.33-.83l-16.54-23h4.12c4.98,7.02,12.83,17.56,14.59,20.6,1.93-3.09,9.35-13.58,14.38-20.6h3.93l-16.44,23.01c-.17.28-.27.44-.27.88v15.36h-3.43Z"/>
				<path d="m1149.94,423.67c0,11.21-7.63,20.56-20.21,20.56s-20.35-9.07-20.35-20.62c0-10.94,8.13-20.29,20.36-20.29s20.2,9.35,20.2,20.34Zm-36.9-.22c0,8.98,5.89,17.61,16.71,17.61s16.54-7.62,16.54-17.28c0-8.76-6.04-17.28-16.87-17.28-9.96,0-16.38,7.77-16.38,16.95Z"/>
				<path d="m1159.21,443.41v-39.25h4.17c7.66,9.88,24.65,31.32,26.74,35.02h.11c-.33-5.63-.28-11.22-.28-17.55v-17.48h3.31v39.25h-3.99c-6.97-8.89-23.86-30.94-26.92-35.55h-.11c.28,5.16.28,10.71.28,17.64v17.91h-3.31Z"/>
				<path d="m1205.36,404.15h15.28c12.39,0,19.86,8.09,19.86,19.02,0,12.59-8.64,20.23-19.92,20.23h-15.22v-39.25Zm3.43,36.14h10.74c11.84,0,17.31-7.68,17.31-17,0-10.05-6.97-16.02-16.71-16.02h-11.34v33.02Z"/>
				<path d="m1294.14,424.22h-24.41v16.06h26.83l-.56,3.12h-29.7v-39.25h29.1v3.12h-25.67v13.82h24.41v3.12Z"/>
				<path d="m1305.18,404.15h15.28c12.39,0,19.86,8.09,19.86,19.02,0,12.59-8.64,20.23-19.92,20.23h-15.22v-39.25Zm3.43,36.14h10.74c11.84,0,17.31-7.68,17.31-17,0-10.05-6.97-16.02-16.71-16.02h-11.34v33.02Z"/>
				<path d="m1352.94,404.15v22.37c0,11.32,6.93,14.54,13.49,14.54,8.29,0,13.1-4.03,13.1-14.54v-22.37h3.43v22.11c0,13.22-6.65,17.97-16.69,17.97s-16.75-5.17-16.75-17.43v-22.65h3.43Z"/>
				<path d="m1429.14,432.43c-2.46,6.66-7.1,11.8-17.69,11.8-12.51,0-19.76-8.82-19.76-20.34s8.07-20.56,19.93-20.56c10.96,0,15.93,5.79,17.68,12.17h-3.6c-2.17-5.11-5.87-9-14.14-9-9.89,0-16.22,7.22-16.22,17.27s6.42,17.29,16.27,17.29c8.35,0,11.58-3.71,14.03-8.63h3.49Z"/>
				<path d="m1442.86,429.93l-5.94,13.48h-3.65l17.45-39.25h3.81l18.06,39.25h-3.77l-6.16-13.48h-19.8Zm18.45-3.18c-5.4-11.81-7.92-17.24-8.8-19.72h-.06c-.77,2.38-3.78,9.5-8.25,19.72h17.1Z"/>
				<path d="m1483.95,407.33h-15.58v-3.18h34.63v3.18h-15.57v36.08h-3.49v-36.08Z"/>
				<path d="m1513.27,404.15v39.25h-3.43v-39.25h3.43Z"/>
				<path d="m1563.32,423.67c0,11.21-7.63,20.56-20.21,20.56s-20.35-9.07-20.35-20.62c0-10.94,8.13-20.29,20.36-20.29s20.2,9.35,20.2,20.34Zm-36.9-.22c0,8.98,5.89,17.61,16.71,17.61s16.54-7.62,16.54-17.28c0-8.76-6.04-17.28-16.87-17.28-9.96,0-16.38,7.77-16.38,16.95Z"/>
				<path d="m1572.59,443.41v-39.25h4.17c7.66,9.88,24.65,31.32,26.74,35.02h.11c-.33-5.63-.28-11.22-.28-17.55v-17.48h3.31v39.25h-3.99c-6.97-8.89-23.86-30.94-26.92-35.55h-.11c.28,5.16.28,10.71.28,17.64v17.91h-3.31Z"/>
			</g>
		</svg>
	<ul>
		<li><a href="#">Sections</a></li>
		<li><a href="#">Quizzes</a></li>
		<li><a href="#">About us</a></li>
		<li><a href="#">Leave a comment!</a></li>
	</ul>
	</div>
	<div class="mainpage">
		Hello, <?php echo $_SESSION['name'];?>! Ready to get started?<br/>
		<a href="clearSession.php">[Log out]</a>
	</div>
</body>
</html>
=======
<?php
	$path = "./";
	include($path . "assets/inc/header.php");
?>

	<div class="dashboard">

		<div class="hello-msg">
			<h1>Hello, <?php echo $_SESSION['name'];?>! Ready to get started?</h1>
			<!-- <a href="clearSession.php">[Log out]</a> -->
		</div>
		
		<div class="progress-bars">
			<div style="display:inline-block;">

			<style>
				.one {
					--amt: 270deg; 
					background: conic-gradient(rgba(255,171,248,1) <?php echo $amt_one; ?>deg, rgb(187, 187, 187) 0deg);
				}
				.two {
					--amt: 90deg; 
					background: conic-gradient(rgba(255,171,248,1) <?php echo $amt_two; ?>deg, rgb(187, 187, 187) 0deg);
				}
				.three {
					--amt: 180deg; 
					background: conic-gradient(rgba(255,171,248,1) <?php echo $amt_three; ?>deg, rgb(187, 187, 187) 0deg);
				}
			</style>

				<h3>Course completion:</h3>
				<div class="circular-progress one">
							<span class="progress-value"><?php echo $course_completion;?>%</span>
				</div>
			</div>
			<div style="display:inline-block;">
				<h3>Quiz Score Average:</h3>
				<div class="circular-progress two">
							<span class="progress-value"><?php echo $quiz_average;?>%</span>
				</div>
			</div>
			<div style="display:inline-block;">
				<h3>Highest Quiz Score:</h3>
				<div class="circular-progress three">
							<span class="progress-value"><?php echo $highest_score;?>%</span>
				</div>
			</div>
		</div>

		<div class="chapters">
			<div class="chapter-column">
				<div class="chapter">
					<h3>Chapter 1 Unix file system and nav:</h3>
					<p> This chapter will teach you the basics of Unix-based file systems. File systems are a crucial aspect of Unix-based operating systems, providing a structured way to organize and store files.</p>
					<ul>
						<li><a class="link" href="#">Section 1 Files and system basics</a></li>
						<li><a class="link" href="#">Section 2 Directory structure / Navigation</a></li>
					</ul>
					<div style="display:flex;margin-left:20px;">
						<a href="quizzes/chapter_one_quiz.php" class="button-link">Chapter Quiz</a>
						<h4 style="margin-left:20px;">Current Score: <?php echo $_SESSION['quiz_one_hs'];?>%</h4>
					</div>
				</div>
				<div class="chapter">
					<h3>Chapter 2 File permissions:</h3>
					<p> In this chapter, the focus is on file and directory permissions in Unix-based systems. There are three basic types of access modes: read, write, and execute. </p>
					<ul>
						<li><a class="link" href="#">Section 1 Access modes</a></li>
						<li><a class="link" href="#">Section 2 Linux file ownership</a></li>
						<li><a class="link" href="#">Section 3 CHMOD</a></li>
					</ul>
					<div style="display:flex;margin-left:20px;">
						<a href="quizzes/chapter_two_quiz.php" class="button-link">Chapter Quiz</a>
						<h4 style="margin-left:20px;">Current Score: <?php echo $_SESSION['quiz_two_hs'];?>%</h4>
					</div>
				</div>
				<div class="chapter">
					<h3>Chapter 3 Connecting to a remote host:</h3>
					<p> This chapter covers various protocols used for remote file access and management, including SSH, FTP, SFTP, and Filezilla.</p>
					<ul>
						<li><a class="link" href="#">Section 1 SSH</a></li>
						<li><a class="link" href="#">Section 2 FTP and SFTP</a></li>
						<li><a class="link" href="#">Section 3 Filezilla</a></li>
					</ul>
					<div style="display:flex;margin-left:20px;">
						<a href="quizzes/chapter_three_quiz.php" class="button-link">Chapter Quiz</a>
						<h4 style="margin-left:20px;">Current Score: <?php echo $_SESSION['quiz_three_hs'];?>%</h4>
					</div>
				</div>
			</div>
			<div class="chapter-column">
			<div class="chapter">
					<h3>Chapter 4 Built in tools:</h3>
					<p> This chapter provides an introduction to three popular terminal-based text editors: Nano, Vim, and Emacs. </p>
					<ul>
						<li><a class="link" href="#">Section 1 Nano</a></li>
						<li><a class="link" href="#">Section 2 Vim</a></li>
						<li><a class="link" href="#">Section 3 Emacs</a></li>
					</ul>
					<div style="display:flex;margin-left:20px;">
						<a href="quizzes/chapter_four_quiz.php" class="button-link">Chapter Quiz</a>
						<h4 style="margin-left:20px;">Current Score: <?php echo $_SESSION['quiz_four_hs'];?>%</h4>
					</div>
				</div>
				<div class="chapter">
					<h3>Chapter 5 Networking commands:</h3>
					<p> This chapter covers networking commands in Unix-based systems.</p>
					<ul>
						<li><a class="link" href="#">Section 1 ifconfig, ping</a></li>
						<li><a class="link" href="#">Section 2 arp + traceroute</a></li>
					</ul>
					<div style="display:flex;margin-left:20px;">
						<a href="quizzes/chapter_five_quiz.php" class="button-link">Chapter Quiz</a>
						<h4 style="margin-left:20px;">Current Score: <?php echo $_SESSION['quiz_five_hs'];?>%</h4>
					</div>
				</div>
			</div>
		</div>

	</div>
	
</body>
<?php include($path . "assets/inc/footer.php");?>
</html>
>>>>>>> 50381015d5b04d94fb93f5138fed2d4822a4f7ee
