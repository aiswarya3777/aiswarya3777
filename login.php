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
        <input type="text" name="user_name" id="" placeholder="User Name">
        <input type="password" name="password" id="" placeholder="Password">
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
<?php
$actual_username = 'test@gmail.com';
$actual_password = '123456';
if(isset($_POST['login'])){
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    if($username == $actual_username && $password == $actual_password ){
        echo "<script>alert('Login successfull')</script>";
    }else{
        echo "<script>alert('Login Failed')</script>";
    }
}
?>