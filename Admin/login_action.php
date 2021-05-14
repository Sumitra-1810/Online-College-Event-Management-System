<?php session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");

$name=$_REQUEST['name'];
$password=$_REQUEST['pass']; 

$sql="select * from admin where name='$name' && password='$password' ";

$run=mysqli_query($conn,$sql);

if($data=mysqli_fetch_assoc($run))
{
  $_SESSION['id']=$data['id'];    
  header("location:home.php");
}
else
{
    $_SESSION["Success"]=1;
    header("location:login.php");
}
?>