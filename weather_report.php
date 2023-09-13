<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
<h2>Weather Report</h2>

<?php
// Define the temperature variable
$temperature = 38; // Change this value to the desired temperature

// Determine the weather message based on the temperature range
if ($temperature < 0) {
    echo "<p>It's freezing!</p>";
} elseif ($temperature >= 0 && $temperature < 20) {
    echo "<p>It's cold.</p>";
} elseif ($temperature >= 20 && $temperature < 30) {
    echo "<p>It's cool.</p>";
} elseif ($temperature >= 30 && $temperature < 40) {
    echo "<p>It's warm.</p>";
} else {
    echo "<p>It's hot!</p>";
}
?>
</body>
</html>
