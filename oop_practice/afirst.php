<?php
class Product{
    function display($name,$price){
        echo $this->name = $name;
        echo $this->price = $price."<br>";
    }
}
$pen = new Product();
$pen->display('pen',10);

$book = new Product();
$book->display('book',20);
?>