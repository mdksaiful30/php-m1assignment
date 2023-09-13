<!--
Task 2: Temperature Converter
Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.
-->

<?php

$temperature = $conversion = $convertedtemperature = "";

if(isset($_POST['temperature']) && isset($_POST['conversion'])){
    $temperature = $_POST['temperature'];
    $conversion = $_POST['conversion'];

    if($conversion == "celsiustofahrenheit"){
        $convertedtemperature = ($temperature * 9 / 5 + 32);
    }
    else if($conversion == "fahrenheittocelsius"){
        $convertedtemperature = ($temperature - 32) * 5 / 9;
    }
    else
    {
        echo "Invalid Conversion";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Temperature Converter</h1>
            <form action="temperature_converter.php" method="POST">
                <div class="form-group">
                    <label for="name">Tempareture</label>
                    <input type="number" class="form-control" name="temperature" placeholder="Enter Temperature Value" required>
                </div>

                <div class="form-group">
                    <label for="name">Select Conversion</label>
                    <select class="form-control" name="conversion">
                        <option value="celsiustofahrenheit">Celsius to Fahrenheit</option>
                        <option value="fahrenheittocelsius">Fahrenheit to Celsius</option>
                    </select>
                </div>

                <div class="form-group">
                    <h3>
                        <?php
                        if(!empty($convertedtemperature)){
                            if($conversion == "celsiustofahrenheit"){
                                echo "Temperature in Fahrenheit is : " . $convertedtemperature;
                            }
                            else if($conversion == "fahrenheittocelsius"){
                                echo "Temperature in Celsius is : " . $convertedtemperature;
                            }
                        }
                        else
                        {
                            echo "Invalid Conversion";
                        }

                        ?>
                    </h3>
                </div>
                <button type="submit" class="btn btn-primary">Temperature Converter</button>
            </form>
        </div>
    </div>
</div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
