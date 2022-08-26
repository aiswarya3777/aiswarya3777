<?php
class Magic_method{
    function __toString(){//__toString is inbulit magic method
        return '2';
    }
}
$object = new Magic_method();//we create object and call the object directly
echo $object;

class Magic_method2{
    function __call($name,$parameter){
        echo "<br>This call magic method<br>";
        print_r($parameter);
        echo "<br>".$name;
    }
}
$object = new Magic_method2();
echo $object->magic_method_2('abc',1);//$name = magic_method_2; $parameter = ['abc' , 1]
//here magic_method_2 is our decision whatever we give it go to $name.
?>