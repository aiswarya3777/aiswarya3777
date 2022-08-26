<?php
class Parent1 {
    public $first_name = "Aiswarya";
    public $last_name = "k";
    public $address = "Address Aiswarya";
    function update($first_name,$last_name,$address ){
      echo  $this->first_name;
      echo  $this->last_name;
      echo  $this->address;
    }
}
class Child1 extends Parent1{
    public $user_name = "user";
    public $password = "123";
    function login($a,$b){
       echo $this->user_name;
       echo $this->password; 
        if($a == $user_name && $b == $password){
            echo "successfull";
        }else{
            echo "failed";
        }
    }
}
$object = new Child1();
$object->login("user","123");
?>