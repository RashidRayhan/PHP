<!DOCTYPE html>
<html>
<header>
    <title>This is php math function</title>
</header>
<body>
<?php
//The pi() function returns the value of PI:
echo (pi());    //output 3.1415926535898

//The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo (min(0, 150, -8, -200));   //output -200
echo (max(0, 150, -8, -200));   //output 150

//The abs() function returns the absolute (positive) value of a number:
echo (abs (-6.5));  //output 6.5

//The sqrt() function returns the square root of a number:
echo (sqrt(64));    //output 8

//The round() function rounds a floating-point number to its nearest integer:
echo (round(6.3)); //output 6
echo (round(6.5)); //output 7

//The PHP rand() function generates a random number:
echo (rand()); //output any number come

//Make range the random number with (strt, stop) statment
echo (rand(0, 100)); //output come 0-100 any number and each time


?>
</body>
</html>