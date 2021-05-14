<?php 

session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
$sql="select image from add-image where id='".$_SESSION['id']."' ";
$result=mysqli_query($conn,$sql);
if($data=mysqli_fetch_array($result))
{
  echo $data;
}



?>