<?php
// class student{
//     function fun($a){
//         $this->a = $a;
//     }
//     function disp(){
//         echo $this->a;
//     }
// }
// $b = new student();
// $b->fun(2);
// $b->disp();

//construct
class student{
    function __construct($a){
        $this->a = $a;
        echo $this->a;
    }
    
    function __destruct(){//end of the script

    }
}
$b = new student(2);

?>