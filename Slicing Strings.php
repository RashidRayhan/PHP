<!DOCTYPE html>
<html>
<header>
    <title>Php slicing String function</title>
</header>
<body>
<?php
//PHP substr() - Slice a String
$x = "Hello World";
echo substr($x, 5, 6); //output World

//Start the slice at index 6 and go all the way to the end:
$y = "Hello world";
echo substr($y, 6) //output world

//Get the 3 characters, starting from the "o" in world (index -5):
$x = "Hello world";
echo substr($x, -5, 3); //output wor

//Use negative length to specify how many characters to omit, starting from the end of the string:

$y = "Hi, How are your";
echo substr($y, 5, -3); //output  ow are y

?>
</body>
</html>