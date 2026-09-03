<!DOCTYPE html>
<html>
<body>
<?php
$x = 5; //Global Scope variables
function mytest(){
    // using x inside this function will not work
    echo "Variable x inside function is: $x <br/>";
}
mytest();

echo "The vaiables x inside function is: $x";

function my_test(){
    $y = 5; //Local scope
    echo "Varibale y inside function is: $y <br>";
}
my_test();
// using x outside the function will not work
echo "Variable y outside the funcation is: $y";

function Mytest(){
    static $z = 0; //Static variables
    echo $z;
    $z++;
}
Mytest();
Mytest();
Mytest();

//PHP global Keyword
$a = 30;
$b = 40;

function my_Test(){
    global $a, $b;
    $b = $a + $b;
}
my_test();
echo $b;

//PHP $GLOBALS Superglobal
$x = 20;
$y = 10;
function My_test(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
My_test();
echo $y;
?>

</body>
</html>