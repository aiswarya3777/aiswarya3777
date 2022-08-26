<?php
class Product{
    function display($price,$name){//class declaration
        // echo "this is oop class declartion";
       echo $this->price = $price;//propert declaration in the class
       echo $this->name = $name."<br>";
    }
}
$pen = new Product();//object creation pen is object of a class
$pen->display(10,'Aiswarya');//object calling class function
// $pen.price;
// echo $pen;

$book = new Product();
$book->display(20,'swetha');

$eraser = new Product();
$eraser->display(5,'Najila')

?>