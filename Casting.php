<!DOCTYPE html>
<html>
<header>
    <title>This is php casting statment</title>
</header>
<body>
<?php
//Convert Cast to String
$a = 23544;          //integer
$b = 123.343;        //floating
$c = "Hello World";  //String
$d = True;          //bool
$e = NULL;          //unset

$a = (string) $a;   //output string(5) "23544"
$b = (string) $b;   //Output string(7) "123.343"
$c = (string) $c;   //output string(11) "Hello World"
$d = (string) $d;   //output string(1) "1"
$e = (string) $e;   //output string(0) ""

//data type of all those
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//Convert cast to integer
$f = 23;    //integer
$g = 23.5;  //Float
$h = "Hello"//string
$i = true;  //bool
$j = NULL; //NULL

//Convert integer
$f = (int) $f;  //output int(23)
$g = (int) $g;  //output int (23)
$h = (int) $h;  //output int(0)
$i = (int) $i;  //output int (1)
$j = (int) $j;  //output int(0)

//All datatype
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);
var_dump($j);


//note: float and bool are same path you can try at home to pratice more
//Convrt Cast to Array
$k = 25; //integer
$l = 25.5; //float
$m = "hi"; //string
$n = true; // bool
$o = NULL;  //NULL

//Convert them array
$k = (array) $k;    //output array(1) { [0]=> int(25) }
$l = (array) $l;    //Output array(1) { [0]=> float(25.5)}
$m = (array) $m;    //output array(1) { [0]=> string(2) "hi"}
$n = (array) $n;    //output array(1) { [0]=> bool(true) }
$o = (array) $o;    //output array(0) { [0]=> }

//datatype
var_dump($k);
var_dump($l);
var_dump($m);
var_dump($n);
var_dump($o);

//Convert object into array:
class car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a" . $this->color . " " . $this->model . "!";
    }
}
$my_car = new car("Red", "Volvo");
$my_car = (array) $my_car;
var_dump($my_car);
/*output array(2) {
 ["color"]=>
  string(3) "red"
  ["model"]=>
  string(5) "Volvo"
}
*/



?>
</body>
</html>