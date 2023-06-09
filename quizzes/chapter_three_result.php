<?php
    $path = "../";
    include($path . '../dbcon.php');
	include($path . "assets/inc/header.php");
?>

<div class="dashboard">
    <h1>Quiz Two Results: </h1>
            
            <?php
                
                $total = 4; // Total number of questions

                error_reporting (E_ALL ^ E_NOTICE); // This stops error reporting for unfilled answers

                $answers = [$_POST['question-1-answers'], $_POST['question-2-answers'], 
                            $_POST['question-3-answers'], $_POST['question-4-answers']];
            
                $totalCorrect = 0;
                
                if ($answers[0] == "D") { $totalCorrect++; }
                if ($answers[1] == "B") { $totalCorrect++; }
                if ($answers[2] == "C") { $totalCorrect++; }
                if ($answers[3] == "A") { $totalCorrect++; }

                $totalPercentage = calculatePercentage($totalCorrect, $total);

                //Check the percentage
                if((int)$_SESSION['quiz_three_hs'] < $totalPercentage){
                    echo "New high score!<br>";
                    $_SESSION['quiz_three_hs'] = $totalPercentage;
                }

                $sql = "UPDATE `unixverse_users` SET `quiz_three_hs` = ? WHERE `id` = ?;";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $totalPercentage, $_SESSION['id']);
                $stmt->execute();
                $results = $stmt->get_result();

                echo "$totalCorrect / 4 correct" . " or " . calculatePercentage($totalCorrect, $total) . "%<br>";



            ?>

            <a href="<?php echo $path;?>landing.php" class="button-link"/>Return to Dashboard</a>
</div>