<?php
interface Parent1{
    function parentone($a);
}

interface Parent2{
    function parenttwo();
}

class multiple_inheritance{
    function parentone($a){
        echo "parentone<br>";
       echo $this->variable = $a."<br>";
    }
    function parenttwo(){
        echo "parenttwo<br>";
    }
    function child1(){
        echo "this is child<br>";
    }
}
$obj = new multiple_inheritance();
$obj->parentone(20);
$obj->parenttwo();
$obj->child1();
echo $obj->variable;
?>