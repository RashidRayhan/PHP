<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is php switch and match statment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<?php
// use switch statment
$Color = "red";
switch ($Color) {
    case "red":
        echo "Your Favourit Color is red";
        break;
    case "blue":
        echo "Your favourit color is Blue";
        break;
    case "green":
        echo "Your favourit color is green";
        break;
    case "black":
        echo "Your favourit color is black";
        break;
    default:
        echo "Your favourit is not one of red, blue, green, black";
}
echo "<br>";
$number = 6;
switch ($number) {
    case 0:
        echo "Today is sunday";
        break;
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    default:
        echo "Today is Saturday";
}
echo "<br>";
$favourit_name = "Reshan";
switch ($favourit_name) {
    case "Rahman":
        echo "My name is Abdur Rahman";
        break;
    case "karim":
        echo "My brother name is karim";
        break;
    case "Reshan":
        echo "My favourite name is Reshan";
        break;
    default:
        echo "None of them any name";
}
echo "<br>";
// use match statment

$favourit_color = "black";

$text = match($favourit_color ){
    "red" => "My favourit color is red",
    "blue" => "My favourit color is blue",
    "yellow" => "My favourit color is yellow",
    "black" => "My favourit color is black",
    default => "None of them my favourit color",
};
echo $text;
echo "<br>";
//Match Multiple Values
$d = 6;

$txt = match($d) {
        1, 2, 3 => "1st day of week",
        4, 5, 6 => "End day of week",
        default => "This is weekend",
};
echo $txt;
echo "<br>";
//This will throw an UnhandledMatchError exception:
$favcolor = "pink";

try {
    $text1 = match($favcolor) {
        "red" => "This is Red color",
        "bule" => "This is Bule color",
        "black" => "This is black color",
    };
} catch (\UnhandledMatchError $e) {
    var_dump($e);
}
echo $text1;







?>
</body>
</html>
