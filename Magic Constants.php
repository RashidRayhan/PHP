<!DOCTYPE html>
<html>
<header>
<title>This is php Magic COnstants</title>
</header>
<body>
<?php
//If used inside a class, the class name is returned. __CLASS__
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();

//The directory of the file. This constant returns the directory name of the file:
echo __DIR__;

//The file name including the full path.
echo __FILE__;

//If inside a function, the function name is returned.
function message(){
    return __FUNCTION__;
}
echo message;

//The current line number of the file.
echo __LINE__;

//If used inside a function that belongs to a class, both class and function name is returned.
class fruits{
    public function myValue();
    return __MEDTHOD__;
}
$apple = new fruits();
echo $apple->myvalue; //output fruits

//If used inside a namespace, the name of the namespace is returned.
echo myValue; //output MyArea

//If used inside a trait, the trait name is returned.
trait message1{
    public function mess(){
        return __trait__;
    }
}
    class welcome{
        use message1;
    }
$obj = new welcome();
$obj = mess;
//output Messge1
?>
</body>
</html>
<?php
namespace myArea;
function myValue(){
    return __NAMESPACE__
}
