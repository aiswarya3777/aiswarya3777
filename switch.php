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
        <input type="text" name="first" id="" placeholder="Enter First Number">
        <input type="text" name="second" id="" placeholder="Enter Second Number">
        <input type="text" name="operator" id="" placeholder="Enter Operator"> 
        <button type="submit" name="operation">Submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['operation'])){
    $operator = $_POST['operator'];
    $first = $_POST['first'];
    $second = $_POST['second'];
    switch($operator){
        case "+" : echo $first + $second;
        break;
        case "-" : echo $first - $second;
        break;
        case "*" : echo $first * $second;
        break;
        case "/" : echo $first / $second;
        break;
        default :
        echo "Operation not defined";
    }
}

?>