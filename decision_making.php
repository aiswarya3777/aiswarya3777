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
        <input type="text" name="mark" id="" placeholder="Enter mark">
        <button type="submit" name="get_grade">Get Grade</button>
    </form>
</body>
</html>

<?php
// $var1 = 40;
// $var2 = 30;
// echo "<br>";
// echo $var1;
// echo "<br>";
// echo $var2;
// echo "<br>";
// if($var2>$var1){
//     echo $var2." is greater";
// }else{
//     echo $var1." is greater";
// }
// echo isset($_POST['get_grade']);// button there or not
if(isset($_POST['get_grade'])){
   
    $mark = $_POST['mark'];
    if($mark < 50 && $mark >40){
        echo "D";
    }else if($mark > 50 && $mark < 60){
        echo "C";
    }else if($mark > 60 && $mark < 70){
        echo "B";
    }else if($mark > 90 && $mark < 100){
        echo "A+";
    }else{
        echo "Failed";
    }
}

?>