<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="fnametxt" id="fnametxt">
    <input type="text" name="lnametxt" id="lnametxt">
    <button type="submit" id="btn1" name="btn1">click</button>
</form>
</body>
</html>

<?php
class UserDetails{
    public $fname='sheena';
    public $lname='kp';
    public function Update_details($fn,$ln){
        $this->fn1=$fn;
        $this->ln1=$ln;
        if ($this->fname== $this->fn1 && $this->lname== $this->ln1){
              echo " old user";
        }
        else{
           echo "updated<br>";
           echo "firstname is &nbsp;";
           echo $this->fn1;  
           echo "<br>";
           echo "last name is&nbsp; ";
           echo $this->ln1;

           }
        }
    }
    
    
class User1 extends UserDetails{
public $uname="shine";
public $psw="shine";
public $a1="";
public $b1="";
function logIn($a,$b){
     $this->a1=$a;
    $this->b1=$b;
     
    if ($this->a1==$this->uname && $this->b1==$this->psw){
        echo "login<br>";
    }
}

}
$ob1=new User1();
$ob1->logIn('shine','shine');
// $ob2=new UserDetails();
if(isset($_POST['btn1'])){
$fn2=$_POST['fnametxt'];
$ln2=$_POST['lnametxt'];
// echo $fn2;
$ob1->Update_details($fn2,$ln2);
}
?>