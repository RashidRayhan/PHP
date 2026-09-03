<!DOCTYPE html>
<html>
    <header>
        <title>Php datatype workreport</tittle>
    </header>
<body>
<?php
    //integer data type
    $x = 5;
    var_dump($x); //Output int(5)

    //String Data Type
    $y = "Hello work";
    var_dump($y); //output srt(10)"Hello world"


    //Float Data Type
    $y = 25.99;
    var_dump($y); //output float(25.99)

    //Bool Data Type
    $x = false;
    var_dump($x); // output bool(false)

    //Array Data Type
    $cars =array("Volvo", "BMW", "Audi");
    var_dump($cars); //output rray(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(4) "Audi" }

    //Object Data Type
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar); //Output object(Car)#1 (2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }

//NULL Data Type
    $x = "Hello world!";
    $x = null;
    var_dump($x); //Output Null
?>
</body>
</html>