<?php error_reporting(0);
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
    <title>update</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<?php include("dashboard.php"); ?>
<body>
   <section class="background ">
     <div class="forminfo animated lightSpeedIn">
             
              <form method="POST" action="update_action.php" enctype="multipart/form-data">
                 
                  <div class="head">  <p>Edit profile</p></div>
                  <input type="hidden" name="id" value="<?php echo $_REQUEST["id"]; ?>" >
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
             
                 
               
   
                
           
   
                
            
            
            
             
        <p>
           
            <input type="submit" name="sub" value="SUBMIT" class="sub">
        </p>
                
        
            
              
                
                        
             
         </form>
                     
                  </div>
                  
    </section>
            
               
               </body>
 

    
</html>