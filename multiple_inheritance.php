<?php
interface parent1{//using interface
    function parent1_display($a);//create function
}
interface parent2{
    function parent2_display();//create function
}

class multiple_inheritance implements parent1,parent2{
    function parent1_display($a){//parent1 function
        echo "parent1<br>";
        echo $this->variable = $a;
    }
    function parent2_display(){//parent2 function
        echo "parent2<br>";
    }

    //child function
    function child1(){
        echo "This is child function";
    }
}
$object_child = new multiple_inheritance();//class name , we call child class name
$object_child->parent1_display(23);
$object_child->parent2_display();
$object_child->child1();
echo $object_child->variable;

?>