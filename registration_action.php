<?php session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");

$first_name=$_REQUEST['fname'];
if($first_name=="")
{
   $_SESSION['error'][0]="please enter first name";
     header("location:reg.php");
}

$last_name=$_REQUEST['lname'];
if($last_name=="")
{
   $_SESSION['error'][1]="please enter last name";
     header("location:reg.php");
}
$college_name=$_REQUEST['college'];
if($college_name=="")
{
   $_SESSION['error'][2]="please enter college name";
     header("location:reg.php");
}
$course=$_REQUEST['course'];
if($college_name=="")
{
   $_SESSION['error'][3]="please enter course";
     header("location:reg.php");
}
$year=$_REQUEST['year'];
if($year=="------------------------------------Choose Option-------------------------------------")
{
   $_SESSION['error'][4]="please select year";
     header("location:reg.php");
}
$email=$_REQUEST['email'];
if($email=="")
{
   $_SESSION['error'][5]="please enter email.";
     header("location:reg.php");
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $_SESSION[error][6]="Invalid email format";
     header("location:reg.php");
}
$password=$_REQUEST['pass'];
if($password=="")
{
   $_SESSION['error'][7]="password should be at least 8 characters in length and should include at least one upper case letter,one lower case letter, one number,and one special character.";
     header("location:reg.php");
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

$confirm_password=$_REQUEST['pass'];
$contact_number=$_REQUEST['contact'];
if($contact_number=="")
{
   $_SESSION['error'][9]="please enter contact number";
     header("location:reg.php");
}
if(strlen($contact_number)!=10)
{
 $_SESSION['error'][10]="please enter valid contact number";
     header("location:reg.php");   
}

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
        $_SESSION['error'][11]="extenssion not allowed,please choose a JPEG or PNG file.";
        header("location:reg.php"); 
    }
    else
    {
        move_uploaded_file($file_tmp,"upload/".$file_name);
    }
    
}
else
{
    $_SESSION['error'][12]="please upload id";
     header("location:reg.php");
}



$event_name=$_REQUEST['event'];
$chk="";  
foreach($event_name as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
if($event_name=="")
{
   $_SESSION['error'][13]="please select event";
     header("location:reg.php");
 
}
if(!empty($_SESSION['error']))
{
   header("location:reg.php");   
}
else
{
   $sql="insert into student_registration(`firstname`,`lastname`,`collegename`,`course`,`year`,`email`,`password`,`confirmpassword` , `contactnumber`, `eventname`,`upload_id`) values('".$first_name."','".$last_name."','".$college_name."','".$course."','".$year."','".$email."','".md5($password)."','".md5($confirm_password)."','".$contact_number."','".$chk."','".$file_name."')";

if(mysqli_query($conn,$sql))
 {
    $_SESSION["Success"]=1;
    header("location:reg.php");
}
else
{
    echo mysqli_error($conn);
} 
}
?>
