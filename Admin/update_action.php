

<?php session_start();

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");

$id=$_REQUEST["id"];


$first_name=$_REQUEST['fname'];
if($first_name=="")
{
   $_SESSION['error'][0]="please enter first name";
     header("location:update.php");
}

$last_name=$_REQUEST['lname'];
if($last_name=="")
{
   $_SESSION['error'][1]="please enter last name";
     header("location:update.php");
}
$college_name=$_REQUEST['college'];
if($college_name=="")
{
   $_SESSION['error'][2]="please enter college name";
     header("location:update.php");
}
$course=$_REQUEST['course'];
if($college_name=="")
{
   $_SESSION['error'][3]="please enter course";
     header("location:update.php");
}
$year=$_REQUEST['year'];
if($year=="------------------------------------Choose Option-------------------------------------")
{
   $_SESSION['error'][4]="please select year";
     header("location:update.php");
}
$email=$_REQUEST['email'];
if($email=="")
{
   $_SESSION['error'][5]="please enter email.";
     header("location:update.php");
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $_SESSION[error][6]="Invalid email format";
     header("location:update.php");
}
/*$password=$_REQUEST['pass'];
if($password=="")
{
   $_SESSION['error'][7]="password should be at least 8 characters in length and should include at least one upper case letter,one lower case letter, one number,and one special character.";
     header("location:edit_profile.php");
}
$uppercase=preg_match('@[A-Z]@',$password);
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
     header("location:update.php");
}
if(strlen($contact_number)!=10)
{
 $_SESSION['error'][10]="please enter valid contact number";
     header("location:update.php");   
}



/*$event_name=$_REQUEST['event'];
$chk="";  
foreach($event_name as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
   
if($event_name=="")
{
   $_SESSION['error'][13]="please select event";
     header("location:reg.php");
 
}*/
if(!empty($_SESSION['error']))
{
   header("location:update.php");   
}
else
{
   
    $sql="update  student_registration set firstname='".$first_name."',lastname='".$last_name."',collegename ='".$college_name."', course ='".$course."', year='".$year."', email='".$email."', contactnumber='".$contact_number."' where id='".$id."' " ;
    
   

if(mysqli_query($conn,$sql))
 {
   
    header("location:student-data.php");
   
}
else
{
    echo mysqli_error($conn);
} 
}
?>


