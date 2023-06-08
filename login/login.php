<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$login=false;
$showalert=false;
$con= mysqli_connect("localhost","root","","myproj");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname= $_REQUEST['full_name'];
    // $email= $_REQUEST['email'];
    $pass= $_REQUEST['user_pass'];
    $log="select * from users where uname='$uname' and upassword='$pass'";
    $res= mysqli_query($con,$log);
    $chk= mysqli_num_rows($res);
    if($chk==1)
    {
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['USERNAME']=$uname;
        header("location:welcome.php");
    }
    else
    {
        $showalert=true;
    }

}
?>
<body>
<?php
if($login)
{
    echo '<p> login success</p>';
}
if($showalert)
{
    echo '<p> Error </p>';
}

?>
    <form action="/login/login.php" method="post">
        Name: <input type="text" name="full_name" id="">
        <br>
   
    Password : <input type="password" name="user_pass">
    <input type="submit" name="user_sub">
    </form>
</body>
</html>