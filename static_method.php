<?php
class Employee{
    static $a = 10;//this is prop ie variables in class
    static function emp(){
        echo "This is static function";
        // echo Employee::$a; //This is the methodfor calling static variable
    }
}
// $obj = new Employee();
// $obj->emp();
Employee ::emp();// without creating object we can call it with scope resolution
echo Employee ::$a; // we call the static variable using scope resolution
?>