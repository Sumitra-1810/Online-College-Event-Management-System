<?php error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
$sql="select * from student_registration where id='".$_SESSION["user_id"]."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg</title>
    <link rel="stylesheet" href="css/form1.css">
    <!---------------------------------------------to apply animation-------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    </head>
<body>
  <?php
    if(isset($_SESSION["user_id"]))
    {        
      include("nav-bar2.php"); 
    }
    else
     {
         include("nav-bar.php");     
     }
        
    ?>  
   <section class="background ">
     <div class="forminfo animated lightSpeedIn">
             
              <form method="POST" action="edit_action.php" enctype="multipart/form-data">
                  <div class="head">  <p>Edit profile</p></div>
              <p class="name">FIRST NAME</p>
             <p> <input type="text" name="fname" placeholder="First Name"  class="field" value="<?php echo  $data['firstname']; ?>"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
              {
                   echo $_SESSION['error'][0];
                   unset($_SESSION['error'][0]);
            }?>
    </div>
            
              <p class="name">LAST NAME</p>
             <p> <input type="text" name="lname"  placeholder="Last Name" class="field" value="<?php echo  $data['lastname']; ?>"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][1]) and $_SESSION['error'][1]!="")
              {
                   echo $_SESSION['error'][1];
                   unset($_SESSION['error'][1]);
            }?>
    </div>
                 
                
             
                  <p class="name">COLLEGE NAME</p>
                 <p><input type="text" name="college"  placeholder="College" class="field" value="<?php echo  $data['collegename']; ?>"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][2]) and $_SESSION['error'][2]!="")
              {
                   echo $_SESSION['error'][2];
                   unset($_SESSION['error'][2]);
            }?>
    </div>
                 
                 <p class="name">COURSE</p>
                 <p><input type="text" name="course"  placeholder="Course" class="field" value="<?php echo  $data['course']; ?>"></p>
     <div class="start">
             <?php if(isset($_SESSION['error'][3]) and $_SESSION['error'][3]!="")
              {
                   echo $_SESSION['error'][3];
                   unset($_SESSION['error'][3]);
            }?>
    </div>
              
                 
                 <p class="name">YEAR/SEMESTER</p>
                  <p><input type="text" class="field" name="year" value="<?php echo  $data['year']; ?>">
                  
          
             </p>
    <div class="start">
             <?php if(isset($_SESSION['error'][4]) and $_SESSION['error'][4]!="")
              {
                   echo $_SESSION['error'][4];
                   unset($_SESSION['error'][4]);
            }?>
    </div>
                 
                 <p class="name">EMAIL</p>
                 <p><input type="text" readonly name="email"  placeholder="Email" class="field" value="<?php echo  $data['email']; ?>"></p>
     <div class="start">
             <?php if(isset($_SESSION['error'][5]) and $_SESSION['error'][5]!="")
              {
                   echo $_SESSION['error'][5];
                   unset($_SESSION['error'][5]);
            }?>
             
         <?php if(isset($_SESSION['error'][6]) and $_SESSION['error'][6]!="")
              {
                   echo $_SESSION['error'][6];
                   unset($_SESSION['error'][6]);
            }?>
             </div>
    
           
             
                 
                
             
               
               <p class="name">CONTACT NUMBER</p>
                 <p><input type="text" name="contact"  placeholder="contact" class="field" value="<?php echo  $data['contactnumber']; ?>"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][9]) and $_SESSION['error'][9]!="")
              {
                   echo $_SESSION['error'][9];
                   unset($_SESSION['error'][9]);
            }?>
            <?php if(isset($_SESSION['error'][10]) and $_SESSION['error'][10]!="")
              {
                   echo $_SESSION['error'][10];
                   unset($_SESSION['error'][10]);
            }?>
    </div>
             
                 
                 <p class="name">UPLOAD IMAGE</p>
                 <p><input type="file" name="id" accept="image/jpeg" class="field" value="<?php echo  $data['upload_id']; ?>"></p>
         <div class="start">
             <?php if(isset($_SESSION['error'][11]) and $_SESSION['error'][11]!="")
              {
                   echo $_SESSION['error'][11];
                   unset($_SESSION['error'][11]);
            }?>  
             <?php if(isset($_SESSION['error'][12]) and $_SESSION['error'][12]!="")
              {
                   echo $_SESSION['error'][12];
                   unset($_SESSION['error'][12]);
            }?>
   
                
           
    </div>
                
            
            
            
             
        <p>
            <input type="submit" name="sub" value="SUBMIT" class="sub">
        </p>
                
        <?php         
             if($_SESSION["Success"]==1)
             {
                ?>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                   <?php echo "<script>swal({title: 'Registration Successfull!',  text: '',  icon: 'success',
                            button: 'OK',})</script>";
                  unset($_SESSION["Success"]);
             }
                  
               
                 
                 
           ?>    
            
              
                
                        
             
         </form>
                     
                  </div>
                  
    </section>
            
               
               </body>
 
</html>