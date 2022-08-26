<?php
class Employee{
    static $name='asdad';
    static function emp(){
        echo "this is static";
    }
}
Employee::emp();
echo Employee::$name;
?>