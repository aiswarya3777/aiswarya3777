<!-- abstarct -->

<?php
abstract class Employee{
    function employee_detail(){
        echo "Employee Details";
    }
    // function employee_mail(); this is wrong
    abstract function employee_mail();//this is decalration
}

class employee_child extends Employee{
    function display($a){
        echo "display<br>";
        echo $this->a = $a;
    }
    function  employee_mail(){//we should call abstract declared method
        echo "employee mail<br>";
    }
   
}

$employee = new employee_child();// we call child function here to make object 
$employee->display(50);//we call the function
$employee->employee_mail();

?>