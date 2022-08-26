<?php
class Football{
    public $goalCount = 0;
    public function shootGoal(){
       echo $this->goalCount ++."<br>";
        if($this->goalCount == 7){
            echo "You can ask your wish <br>";
           echo $this->goalCount = 0;
        }
    }
}
$obj = new Football();
$obj->shootGoal();
$obj->shootGoal();
$obj->shootGoal();
$obj->shootGoal();
$obj->shootGoal();
$obj->shootGoal();
$obj->shootGoal();
?>