<?php session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");

$email=$_REQUEST['email'];
$password=md5($_REQUEST['pass']); 

$sql="select * from student_registration where email='$email' && password='$password' ";

$run=mysqli_query($conn,$sql);

if($data=mysqli_fetch_assoc($run))
{
  $_SESSION["user_id"]=$data['id'];    
  header("location:profile1.php");
}
else
{
    $_SESSION["Success"]=1;
    header("location:login.php");
}
?>