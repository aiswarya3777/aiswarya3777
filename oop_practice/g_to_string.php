<?php
class Magic_method{
    function __toString(){
        return '2';
    }
}
$obj = new Magic_method();
echo $obj;

class Magic_method2{
    function __call($name,$parameter){
        print_r($parameter);
        echo $name;
    }
}
$obj2 = new Magic_method2();
echo $obj2->Magic_method2('abc',1);
?>