<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$u=$_POST['userid'];
$p=$_POST['pass'];
$db="rachidb";
$c=mysqli_connect($db);
$query="SELECT * FROM login where username ='$u' and password='$p' ";
$result=mysqli_query($c,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
         
         $_SESSION['login_user'] = $u;
header("location:welcome.php");
}
else{$error="wrong details";
     echo"$error";}
}
?>
<html>
<head>
<title>
login
</title>
</head>
<body>
<form name"login" method="post" action="login.php">
username: <input type="text" name="userid"><br>
password : <input type="password" name="pass"><br>
<input type="submit" value="login">
</form>
</body>
</html>
