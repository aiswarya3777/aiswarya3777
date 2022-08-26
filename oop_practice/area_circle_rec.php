<?php
class Shape{
    function __call($name,$parameter){
        if($name == 'area'){
            switch(count($parameter)){
                case 1 :
                    $cir = 3.14 * $parameter[0] ** 2;
                    echo $cir."<br>";
                    break;
                case 2 :
                    $rec = $parameter[0] * $parameter[1];
                    echo $rec;
                    break;
            }
        }
    }
}
$obj = new Shape();
$obj->area(10);
$obj->area(10,10);
?>