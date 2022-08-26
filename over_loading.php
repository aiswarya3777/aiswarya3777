<?php
class Shape{
    function __call($name , $parameter){//__call is a magic function
        if($name == 'area'){
            switch(count($parameter)){
                case 1:
                    $cicle = 3.14 * $parameter[0] ** 2;
                    echo $cicle;
                    echo"<br>";
                    break;
                case 2 :
                    $rec = $parameter[0] * $parameter[1];
                    echo $rec;
            }
        }
    }
}
$area = new Shape();
$area->area(2,2);

$area->area(1);
?>