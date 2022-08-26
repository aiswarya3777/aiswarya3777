<?php
// function recursive($a){
//     if($a<5){
//         echo $a;
//         recursive(++$a);//we call function call within a function
//     }
// }
// recursive(0)

//to find factorial of a number
// function fact($n){
//     if($n == 1){
//         return $n;
//     }else{
//         return $n * fact($n-1);
//     }
// }
// echo "The factorial is ".fact(4)

// function call(&$a){
// $a .= "Welcome to babte";
// } 
// $b ="hello";
// call($b);
// echo $b;

function call(&$a){
 $a = $a + 1;
}
$a = 10;
call($a);
echo $a;
?>