<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
session_start();
if(isset($_FILES['id']) and ($_FILES['id']!=""))
{
    $file_name=$_FILES['id']['name'];
    $file_size=$_FILES['id']['size'];
    $file_tmp=$_FILES['id']['tmp_name'];
    $file_type=$_FILES['id']['type'];
    $text=explode('.',$_FILES['id']['name']);
    $var=end($text);
    $file_ext=strtolower($var);
 $extensions=array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)===false)
    {
        $_SESSION['error'][0]="extenssion not allowed,please choose a JPEG or PNG file.";
        header("location:add-slider.php"); 
    }
    else
    {
        move_uploaded_file($file_tmp,"slider-img".$file_name);
    }
}
    

else
{
    $_SESSION['error'][1]="please upload id";
     header("location:add-slider.php");
}
if(!empty($_SESSION['error']))
{
   header("location:add-slider.php");   
}
else
{
$sql="INSERT INTO `add-image`(`image`) VALUES ('".$file_name."')";
if(mysqli_query($conn,$sql))
 {
   
    header("location:home.php");
}
else
{
    echo mysqli_error($conn);
} 
}
?>
