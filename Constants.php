<!DOCTYPE html>
<html>
<header>
<title>This is php Constants statment </title>
</header>
<body>
<?php

// defines rules are followed define(CONSTANT_NAME, value); constant_name will as you want and add their vaule as well for example:
define ("Greeting_name", "Welcome to php function");
echo Greeting_name; //output welcome to php function

//This example declares a constant inside a function, and output it outside the function:
function mytest(){
    define ("greet", "See our php source file in github");
}
mytest();
echo greet; // output See our php source file in github

//Create a constant named "GREETING" with const: (CONSTANT_NAME, value); constant_name will as you want and add their vaule as well for example
const GREETING = "Welcome constant statment";
echo GREETING; //output Welcome constant statment

//You can also create Array constants with define() or const:
//define
define ("car", array("Volvo", "BMW", "Ford"));
echo car[0]; //output Volvo

//const
const animal = array("Dog", "horse", "tiger");
echo animal[1]; //output horse


?>
</body>

</html>