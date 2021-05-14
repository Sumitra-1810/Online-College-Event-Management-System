<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
$sql="select * from student_registration where id='".$_REQUEST["id"]."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view profile</title>
    <link rel="stylesheet" href="css/view.css">
</head>
<?php include("dashboard.php"); ?>
<body>
    <div class="team">
      <div class="container">
        
          <div class= "card">
          
           <div class="box">
               <img src="../upload/<?php echo $data['upload_id']; ?>" >
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
              </div>
          </div>
    </div>
</div>
</body>
</html>

