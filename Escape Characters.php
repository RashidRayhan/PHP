<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Escape Character String</title>
</head>
<body>
<?php
//In PHP, an escape character is a backslash \ followed by the character you want to insert.
$x = "Hello, mr \"Chiter\" tuhin";
echo $x; //output Hello, mr "Chiter" tuhin

//	Single Quote
$x = "Hello, mr \'Chiter\' tuhin";
echo $x; //output Hello, mr 'Chiter' tuhin

//PHP variables
$y = "This is php variables name \$myvar";
echo $y; //This is php variables name $myvar

//New Line \n
$z = "This is start \nnew line from here";
echo $z; //
/*
\'	Single Quote	
\"	Double Quote	
\$	PHP variables	
\n	New Line	
\r	Carriage Return	
\t	Tab	
\f	Form Feed	
\ooo	Octal value	
\xhh	Hex value
*/


?>  
</body>
</html>