<?php
	session_name("iste240t54");
	session_start();
    include('../dbcon.php');
	include("header.php");
?>

<div class="dashboard">
    <h1>Quiz One Results: </h1>
            
            <?php
                
                $total = 5; // Total number of questions

                $answers = [$_POST['question-1-answers'], $_POST['question-2-answers'], 
                            $_POST['question-3-answers'], $_POST['question-4-answers'], 
                            $_POST['question-5-answers']];

                // $answer1 = $_POST['question-1-answers']; 
                // $answer2 = $_POST['question-2-answers'];
                // $answer3 = $_POST['question-3-answers'];
                // $answer4 = $_POST['question-4-answers'];
                // $answer5 = $_POST['question-5-answers'];
            
                $totalCorrect = 0;
                
                if ($answers[0] == "B") { $totalCorrect++; }
                if ($answers[1] == "B") { $totalCorrect++; }
                if ($answers[2] == "A") { $totalCorrect++; }
                if ($answers[3] == "C") { $totalCorrect++; }
                if ($answers[4] == "B") { $totalCorrect++; }

                $totalPercentage = calculatePercentage($totalCorrect, $total);

                //Check the percentage
                if((int)$_SESSION['quiz_one_hs'] < $totalPercentage){
                    echo "New high score!";
                    $_SESSION['quiz_one_hs'] = $totalPercentage;
                }

                $sql = "UPDATE `unixverse_users` SET `quiz_one_hs` = ? WHERE `id` = ?;";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $totalPercentage, $_SESSION['id']);
                $stmt->execute();
                $results = $stmt->get_result();

                echo "$totalCorrect / 5 correct" . " or " . calculatePercentage($totalCorrect, $total) . "%";



            ?>

            <a href="landing.php" class="button-link"/>Return to Dashboard</a>
</div>