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
            <h2>Even-Odd Checker</h2>
            <form method="post" action="">
                <label for="number">Enter a number:</label>
                <input type="text" name="number" required>
                <input type="submit" name="check" value="Check">
            </form>

            <?php
            if (isset($_POST['check'])) {
                $number = (int)$_POST['number'];

                if (is_numeric($number)) {
                    if ($number % 2 == 0) {
                        echo "<p>$number is an even number.</p>";
                    } else {
                        echo "<p>$number is an odd number.</p>";
                    }
                } else {
                    echo "<p>Please enter a valid number.</p>";
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
