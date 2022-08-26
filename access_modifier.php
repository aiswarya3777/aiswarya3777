<!-- //single inheritance -->

<?php
class parent1{//parent , public- can access anywhere
public $name = 'Aiswarya';
protected $email = 'aiswarya@gmail.com';
private $password = '1234';
public function access_modifier(){
    echo $this->name;
    echo $this->email;
    echo $this->password;
   }
}

class child1 extends parent1{//child
    function access(){
        echo $this->name;
        echo $this->email;
        echo $this->password; //this is private so canot visible
    }
}
$object_access = new child1();
$object_access->access();//here we call the function
?>