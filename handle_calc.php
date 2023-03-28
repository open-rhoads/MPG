<!DOCTYPE html>
<?php 
    //display and report all errors (overriding PHP defaults)
    ini_set('display_errors', 1);
    error_reporting(E_ALL);  
    
    //create variables to hold submitted form field values using $_POST
    $miles = $_POST['miles_driven'];
    $gallons = $_POST['gallons_used'];
    $price = $_POST['price_gallon'];

    //declare and calculate miles per gallon
    $mpg = $miles / $gallons;

    //declare and calculate total trip cost
    $cost = $gallons * $price;

    //round all currency values, calculations, and miles with PHP functions
    //I have windows, so using number_format()
    $price = '$'.number_format($price, 2);
    $cost = '$'.number_format($cost, 2);
    $miles = number_format($miles);
    $mpg = number_format($mpg, 2);
?>
<!-- Mikaela Rhoads -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGP & Cost Calculator - Results</title>
    <style type="text/css">
        .number {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        //use echo to display calculated results 
        //to the user in the browser with formatted source code
        echo "
            <header><h1>Trip Calculations</h1>\n\r</header>\n\r
            <main>
                <h2>Values Entered:</h2>\n\r
                <p>Miles Driven: $miles</p>\n\r
                <p>Gallons Used: $gallons</p>\n\r
                <p>price per Gallon: $price</p>\n\r
                <h2>Your Results:</h2>\n\r
                <p>Miles per Gallon: $mpg</p>\n\r
                <p>Cost of the Trip: $cost;</p>\n\r
            </main>\n\r
            <footer>Footer here &copy;</footer>\n\r
        ";
    ?>
</body>
</html>