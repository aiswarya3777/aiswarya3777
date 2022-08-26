<?php
class Parent1{
    public $name = 'Aiswarya public';
    protected $name2 = 'Aiswarya protected';
    private $name3 = 'Aiswarya private';
    function names(){
        echo $this->name;
        echo $this->name2;
        echo $this->name3;
    }
}
class Child1 extends Parent1{
    function ex_names(){
        echo $this->name;
        echo $this->name2;
        echo $this->name3;
    }
}
$names = new Child1();
$names->ex_names();
?>