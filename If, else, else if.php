<!DOCTYPE html>
<html>
<header>
    <tittle>This is if, else, else if statement syantxt</tittle>
</header>
<body>
<?php
if (5 > 3){
    echo "Nice Number";
}
$t = 20;
if ($t < 40){
    echo "40 is bigger then t number";
}
if (5 < 4) {
    echo "Hello";
}
echo ", I am rashid";

//An if statement usually contain conditions that compare two values.
$T = 14;
if ($T == 14) {
    echo "T is equal to 14";
}

//Identical
$x = 100;
$y = 100;
if ($x == $y) {
    echo "$x is identical number is $y";
}

#not equal
$a = 100;
$b = 50;

if ($a != $b) {
    echo "$a is not equal $b";
}

//use '&&' statment
$c = 100;
$d = 50;
$e = 180;
if ($c > $d && $d < $e) {
    echo "Both condition are true";
}

//Use 'and' statment
$f = 100;
$g = 80;
$h = 120;
if ($f > $g and $f < $h) {
    echo "$f is greater then $g and less then $h";
}
//Use 'Or' '||' statment
$i = 10;
if ($i == 6 || $i == 7 || $i == 8 || $i == 9 || $i == 10) {
    echo "$i is there 6-10 number";
}

//if...else Statements
$j = 25;
$k = 20;
if ($j < $k) {
    echo "$j is bigger then $k";
} else {
    echo "$j is not bigger then $k";
}

//The if...elseif...else statement executes different codes for more than two conditions.
//result output
$l = 80;
if ($l >= 80) {
    echo "A+";
} elseif ($l >= 70) {
    echo "A";
} elseif ($l >= 60) {
    echo "B";
} elseif ($l >= 50) {
    echo "C";
} else {
    echo "F";
}

//You can have if statements inside if statements, this is called nested if statements.
$aa = 20;
if ($aa > 10) {
    echo "$aa is bigger then 10";
    if ($aa > 30) {
        echo "$aa is not bigger then 30";
    } else {
        echo " but also $aa is euniqe number";
    }
}
?>
</body>
</html>