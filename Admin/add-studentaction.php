<?php session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");

$first_name=$_REQUEST['fname'];
if($first_name=="")
{
   $_SESSION['error'][0]="please enter first name";
     header("location:add-student.php");
}

$last_name=$_REQUEST['lname'];
if($last_name=="")
{
   $_SESSION['error'][1]="please enter last name";
     header("location:add-student.php");
}

$course=$_REQUEST['course'];
if($course=="")
{
   $_SESSION['error'][3]="please enter course";
     header("location:add-student.php");
}
$year=$_REQUEST['year'];
if($year=="")
{
   $_SESSION['error'][4]="please enter year/semester";
     header("location:add-student.php");
}
$gender=$_REQUEST['gender'];
if($year=="")
{
   $_SESSION['error'][8]="please enter gender";
     header("location:add-student.php");
}
$email=$_REQUEST['email'];
if($email=="")
{
   $_SESSION['error'][5]="please enter email.";
     header("location:add-student.php");
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $_SESSION[error][6]="Invalid email format";
     header("location:add-student.php");
}
$password=$_REQUEST['pass'];
if($password=="")
{
   $_SESSION['error'][7]="password should be at least 8 characters in length and should include at least one upper case letter,one lower case letter, one number,and one special character.";
     header("location:add-student.php");
}
/*$uppercase=preg_match('@[A-Z]@',$password);
$lowercase=preg_match('@[a-z]@',$password);
$number=preg_match('@[0-9]@',$password);
$specialChars=preg_match('@[^\w]@',$password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password)<8 )
{
    $_SESSION['error'][7]="password should be at least 8 characters in length and should include at least one upper case letter,one lower case letter, one number,and one special character.";
    header("location:register1.php");
}*/


$contact_number=$_REQUEST['contact'];
if($contact_number=="")
{
   $_SESSION['error'][9]="please enter contact number";
     header("location:add-student.php");
}
if(strlen($contact_number)!=10)
{
 $_SESSION['error'][10]="please enter valid contact number";
     header("location:add-student.php");   
}


if(!empty($_SESSION['error']))
{
   header("location:add-student.php");   
}
else
{
  $sql="INSERT INTO `student`( `first_name`, `last_name`, `email`, `gender`, `course`, `contact_number`, `year_sem`, `password`) VALUES ('".$first_name."','".$last_name."','".$email."','".$gender."','".$course."','".$contact_number."','".$year."','".$password."')";

if(mysqli_query($conn,$sql))
 {
    $_SESSION["Success"]=1;
    header("location:a-student-data.php");
}
else
{
    echo mysqli_error($conn);
} 
}
?>