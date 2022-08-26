<?php
class parent1{
    function view(){
        echo "parent1";
    }
}
class child1 extends parent1{
    function view(){
        echo "<br>child1";
    }
}

$parent1  = new parent1();
$parent1->view();

$child1 = new child1();
$child1->view();
?>