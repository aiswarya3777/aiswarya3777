<?php
class Shape{
    function __call($name,$parameter){
        if($name == 'area'){
            switch(count($parameter)){
                case 1:
                    $circle = 3.14*$parameter[0]**2;
                    echo $circle."<br>";
                    break;

                case 2:
                    $rectangle = $parameter[0] * $parameter[1];
                    echo $rectangle;
                    
            }
        }
    }
}
$obj = new Shape();
$obj->area(10);
$obj->area(1,2);
?>