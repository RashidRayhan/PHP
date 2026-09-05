<!DOCTYPE html>
<html>
<header>
    <title>Php Concatente String function</title>
</header>
<body>
<?php

//To concatenate, or combine, two strings you can use the . operator:
$x = "Hello";
$y = "World";
$z = $x . $y;
echo "$z"; //output 'HelloWorld'

//You can add a space character
$a = "Hello";
$b = "World";
$c = $a . " " . $b;
echo $c; //output 'Hello World'

//easy way By surrounding the two variables in double quotes with a white space between them, the white space will also be present in the result:
$txt = "Hello";
$txt1 = "World";
$text = "$txt $txt1";
echo $text; //output 'Hello World'




?>
</body>
</html>