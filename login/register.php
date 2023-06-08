<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$showalert=false;
$con= mysqli_connect("localhost","root","","myproj");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname= $_REQUEST['full_name'];
    // $email= $_REQUEST['email'];
    $pass= $_REQUEST['user_pass'];
    $ins="INSERT INTO `USERS` (`UNAME`,`UPASSWORD`,`DATE`) VALUES('$uname','$pass',current_timestamp())";
    $res= mysqli_query($con,$ins);
    if($res)
    {
        $showalert=true;
    }

}
?>
<body>
    <form action="" method="post">
        Name: <input type="text" name="full_name" id="">
        <br>
    Mail: <input type="email" name="email">
    <br>
    Password : <input type="password" name="user_pass">
    <input type="submit" name="user_sub">
    </form>
<?php 
if($showalert)
{
    echo '<p> register   success</p>';
}
?>
</body>
</html>