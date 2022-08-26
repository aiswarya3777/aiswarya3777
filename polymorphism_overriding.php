<?php
//parent class
class parent1{
    function over_ride(){//same function in child
        echo "over ride parent1";
    }
}
//child class
class child1 extends parent1{
    function over_ride(){//same function name in parent
        echo "over ride child";
    }
}
//parent
$parent1 = new parent1();
$parent1->over_ride();
echo "<br>";
//child
$child1 = new child1();
$child1->over_ride();
?>