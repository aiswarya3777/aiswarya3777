<?php
// class xyz{
//     function names($a){
//         $this->a = $a;
//     }
//     function disp(){
//         echo $this->a;
//     }
// }
// $obj = new xyz();
// $obj->names(2);
// $obj->disp();

class Student{
    function __construct($a){
        $this->a = $a;
        echo $this->a;
    }
    function __distruct(){
        
    }
}
$obj = new Student(85);
?>