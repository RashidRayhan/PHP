<!DOCTYPE html>
<html>
<header>
    <title>This is php number formate</title>
</header>
<body>
<?php
// Php number
$a = 25;
$b = 2.5;
$c = "25";
var_dump($a); //output int
echo "<br>";
var_dump($b); //output float
echo "<br>";
var_dump($c); //output number float

//The is_int() function checks if the type of a variable is integer.
$x = 6687;
$y = 3434.57;
var_dump(is_int($x)); //output bool(true)
var_dump(is_int($y)); //output bool(false)

//The is_float() function checks if the type of a variable is float.
$z = 56.75;
var_dump(is_float($z)); //output bool(true)

//The PHP is_infinite() function checks whether a value is infinite or not. A value is infinite if it is outside the allowed range for a PHP float on this platform.

$aa = 2.4E34343;
var_dump(is_infinite($aa)); //output bool(true)

//The is_nan() function is used to check if a value is "Not A Number" (NAN).
$x = acos(8);
var_dump($x);

// Check if value is not a number (NaN)
var_dump(is_nan($x)); //ouput float(MaN)


//The is_numeric() function is used to check whether a variable is a number or a numeric string.
$a1 = 58345;
$a2 = "454454";
$a3 = "343453" + 2323;
$a4 = "hello";
var_dump(is_numeric($a1)); //output bool(true)
echo "<br>";
var_dump(is_numeric($a2)); //output bool(true)
echo "<br>";
var_dump(is_numeric($a3)); //output bool(true)
echo "<br>";
var_dump(is_numeric($a4)); //output bool(false)

//The intval() function is used to get the integer value of a variable.
$bb = 23434.3434;
 echo intval($bb); //output 23434

echo "<br>";
$cc = "23423.23423";
echo intval($cc); //output 23423





?>
</body>
</html>