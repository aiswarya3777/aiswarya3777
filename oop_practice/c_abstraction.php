<?php
abstract class Employee{
    function emp_det(){
        echo "aiswarya<br>web developer<br>aiswarya3777@gmail.com";

    }
    abstract function employee_full();
}
class Employee_child extends Employee{
    function dispaly($a){
        echo $this->value = $a."<br>";
    }
    function employee_full(){
        echo "aiswarya3777@gmail.com";
    }
}
 $employee = new Employee_child();
 $employee->dispaly(50);
 $employee->employee_full();
?>