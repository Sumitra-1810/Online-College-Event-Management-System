<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");

$sql="select * from admin where id='".$_SESSION['id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/profile1.css" type="text/css" rel=stylesheet>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <title>profile</title>
    
</head>
<?php include("dashboard.php"); ?>
<body>
   
    
   <div class="team">
      <div class="container">
         <h1>Welcome Admin</h1>
          <div class= "card">
          
           <div class="box">
             <h4>ID</h4>
                 <div class="store">
                     <?php  echo $data['id'];?>
                 </div>
             
                 <h4>FULL NAME</h4>
                 <div class="store">
                     <?php  echo $data['name'];?>
                 </div>
                <h4>EMAIL</h4>
                 <div class="store">
                     <?php echo $data['email']; ?>
                 </div>
                 
                 
                 
               <a href="edit_profile.php"><input type="submit" name="sub" value="Edit profile" class="sub"></a>
                 
                 
           </div>
       </div>
      
      
       
   </div>
    </div>
</body>
</html>