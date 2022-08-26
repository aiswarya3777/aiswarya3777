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
    <input type="text" name="third" id="" placeholder="Enter Third Number">
    <button type="submit" name="greater">Check Highest</button>
   </form> 
</body>
</html>
<?php
if(isset($_POST['greater'])){
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    if($first > $second){
        if($first > $third){
            echo $first;
        }else{
            echo $third;
        }
    }else if($second > $third){
        echo $second;
    }else{
        echo $third;
    }
    
}

?>