<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
$id=$_REQUEST['id'];
$sql= "update student_registration set status=0 where id='".$id."' ";
if(mysqli_query($conn,$sql))
{
  header("location: student-data.php") ;
}
else
{
    mysqli_error($conn);
}
?>