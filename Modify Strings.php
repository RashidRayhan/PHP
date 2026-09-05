<!DOCTYPE html>
<html>
<header>
    <title>Php Modify String function</title>
</header>
<body>
<?php
//PHP strtoupper() Function
$x = "hello world";
echo strtoupper($x); //output 'HELO WORLD'

//PHP strtolower() Function
$y = "HELLO WORLD";
echo strtolower($y); //output 'hello world'

//PHP str_replace() Function
$z = "Hello World";
echo str_replace("Hello", "Hi, Mrs", $z); //output 'Hi, Mrs World'

//PHP strrev() Function
$a = "Hello world";
echo strrev($a); //output 'dlrow olleH'

//PHP trim() Function
$b = "  Hello world";
echo trim($b); //output 'Hello world' remove whitespace

//PHP explode() Function
$txt = "Hello world";
$text = explode(" ", $txt);
print_r($text); //output Array ( [0] => Hello [1] => world )


?>
</body>
</html>