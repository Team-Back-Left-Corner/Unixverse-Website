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
</html>
