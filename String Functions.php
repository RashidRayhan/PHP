<!DOCTYPE html>
<html>
<header>
    <title>Php string function</title>
</header>
<body>
<?php
//PHP strlen() Function
echo strlen("hello world"); //output 11
echo strlen("I love python");

//PHP str_word_count() Function
echo str_word_count("Hello world")  //output 2
echo str_word_count("I really love python"); //output 4

//PHP str_contains() Function
$text = "I love php 8.0";
var_dump(str_contains($text, "8.0")) //output bool(true)

$text = "I love php 8.0";
var_dump(str_contains($text, "Php")); //output bool(true)


//PHP str_starts_with() Function
$txt = "I really love php";
var_dump(str_starts_with($txt, "I really")) //output bool(true)

$txt = "I really love php";
var_dump(str_starts_with($txt, "php")) //output bool(false)


//PHP str_ends_with() Function
$txts = "I only love php!";
var_dump(str_ends_with($txts, "php!")) //output bool(true)

$txts = "I only love php!";
var_dump(str_ends_with($txts, "I only")) //output bool(false)

?>
</body>
</html>