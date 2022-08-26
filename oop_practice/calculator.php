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
        <label for="">First Number</label>
        <input type="text" name="first_num" id=""><br>
        <input type="text" name="op" id="">
        <label for="">Second Number</label>
        <input type="text" name="second_num" id=""><br>
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>

<?php
class Calculator{
    function add($num1,$num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $res = $this->num1 + $this->num2;
        echo "The Sum is ".$res;
    }
    function sub($num1,$num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $res = $this->num1 - $this->num2;
        echo $res;
    }
    function mul($num1,$num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $res = $this->num1 * $this->num2;
        echo $res;
    }
    function div($num1,$num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $res = $this->num1 / $this->num2;
        echo $res;
    }

}
class UseCalculator extends Calculator{
    
    function answer(){
        $n1 = $_POST['first_num'];
        $n2 = $_POST['second_num'];
        $op = $_POST['op'];
        $obj = new Calculator();
        if(isset($_POST['btn'])){
            switch($op)
            {
                case '+':
                    $obj->add($n1,$n2);
                    break;
                case '-':
                    $obj->sub($n1,$n2);
                    break;
                case '*':
                    $obj->mul($n1,$n2);
                    break;
                case '/':
                    $obj->div($n1,$n2);
                    break;
            }
        }
    }
}

$obj1 = new UseCalculator();
$obj1->answer();
?>





