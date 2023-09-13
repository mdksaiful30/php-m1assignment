<!--
Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade.
Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Grade Calculator</h2>
            <form method="post" action="">
                <label for="score1">Test Score 1:</label>
                <input type="text" name="score1" required><br><br>

                <label for="score2">Test Score 2:</label>
                <input type="text" name="score2" required><br><br>

                <label for="score3">Test Score 3:</label>
                <input type="text" name="score3" required><br><br>

                <input type="submit" name="calculate" value="Calculate">
            </form>

            <?php
            // Function to calculate the average
            function calculateAverage($scores) {
                return array_sum($scores) / count($scores);
            }

            // Function to determine the letter grade
            function determineGrade($average) {
                if ($average >= 90) {
                    return 'A';
                } elseif ($average >= 80) {
                    return 'B';
                } elseif ($average >= 70) {
                    return 'C';
                } elseif ($average >= 60) {
                    return 'D';
                } else {
                    return 'F';
                }
            }

            if (isset($_POST['calculate'])) {
                // Retrieve input scores
                $score1 = (float)$_POST['score1'];
                $score2 = (float)$_POST['score2'];
                $score3 = (float)$_POST['score3'];

                // Validate the input scores
                if (is_numeric($score1) && is_numeric($score2) && is_numeric($score3)) {
                    // Calculate the average
                    $scores = [$score1, $score2, $score3];
                    $average = calculateAverage($scores);

                    // Determine the letter grade
                    $grade = determineGrade($average);

                    // Display the results
                    echo "<p>Average Score: $average</p>";
                    echo "<p>Letter Grade: $grade</p>";
                } else {
                    echo "<p>Please enter valid numeric scores for all three tests.</p>";
                }
            }
            ?>
        </div>
    </div>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
