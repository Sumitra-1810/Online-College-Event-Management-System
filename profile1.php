<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");

$sql="select * from student_registration where id='".$_SESSION['user_id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/profile.css" type="text/css" rel=stylesheet>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <title>profile</title>
    
</head>
<?php include("nav-bar2.php"); ?>
<body>
   
    
   <div class="team">
      <div class="container">
         <h1>Welcome &nbsp;<?php echo  $data['firstname'];?></h1>
          <div class= "card">
          
           <div class="box">
               <img src="upload/<?php echo $data['upload_id']; ?>" >
                 <h4>FIRST NAME</h4>
                 <div class="store">
                     <?php  echo $data['firstname'];?>
                 </div>
                  <h4>LAST NAME</h4>
                 <div class="store">
                     <?php echo $data['lastname']; ?>
                 </div>
                 <h4>COLLEGE NAME</h4>
                 <div class="store">
                     <?php echo $data['collegename']; ?>
                 </div>
                  <h4>CONTACT NUMBER</h4>
                 <div class="store">
                     <?php echo $data['contactnumber']; ?>
                 </div>
                  <h4>EVENT</h4>
                 <div class="store">
                     <?php echo $data['eventname']; ?>
                 </div>
                 
               <a href="edit_profile.php"><input type="submit" name="sub" value="Edit profile" class="sub"></a>
                 
                 
           </div>
       </div>
      
      
       
   </div>
    </div>
</body>
</html>