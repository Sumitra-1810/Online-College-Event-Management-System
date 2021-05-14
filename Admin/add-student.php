<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg</title>
    <link rel="stylesheet" href="css/supdate.css">
    <!---------------------------------------------to apply animation-------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    </head>
<body>
  <?php include("dashboard.php"); ?>
   <section class="background ">
     <div class="forminfo animated lightSpeedIn">
             <?php session_start(); ?>
              <form method="POST" action="add-studentaction.php" enctype="multipart/form-data">
                  <div class="head">  <p>Student Registration</p></div>
              <p class="name">FIRST NAME</p>
             <p> <input type="text" name="fname" placeholder="First Name"  class="field"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
              {
                   echo $_SESSION['error'][0];
                   unset($_SESSION['error'][0]);
            }?>
    </div>
            
              <p class="name">LAST NAME</p>
             <p> <input type="text" name="lname"  placeholder="Last Name" class="field"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][1]) and $_SESSION['error'][1]!="")
              {
                   echo $_SESSION['error'][1];
                   unset($_SESSION['error'][1]);
            }?>
    </div>
                 
                <p class="name">COURSE</p>
                 <p><input type="text" name="course"  placeholder="Course" class="field"></p>
     <div class="start">
             <?php if(isset($_SESSION['error'][3]) and $_SESSION['error'][3]!="")
              {
                   echo $_SESSION['error'][3];
                   unset($_SESSION['error'][3]);
            }?>
    </div>
              
                 
                 <p class="name">YEAR/SEMESTER</p>
                  <p><input type="text" class="field" name="year" placeholder="year/semester"></p>
                 
             
    <div class="start">
             <?php if(isset($_SESSION['error'][4]) and $_SESSION['error'][4]!="")
              {
                   echo $_SESSION['error'][4];
                   unset($_SESSION['error'][4]);
            }?>
    </div>
                 <p class="name">GENDER</p>
                  <p><input type="text" class="field" name="gender" placeholder="M or F"></p>
                 
             
    <div class="start">
             <?php if(isset($_SESSION['error'][8]) and $_SESSION['error'][8]!="")
              {
                   echo $_SESSION['error'][8];
                   unset($_SESSION['error'][8]);
            }?>
    </div>
                 
                 <p class="name">EMAIL</p>
                 <p><input type="text" name="email"  placeholder="Email" class="field"></p>
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
    
           
             
                 
                  <p class="name">PASSWORD</p>
                <p> 
                <input type="password" name="pass"  placeholder="Password" class="pass">
   
             <input type="password" name="pass"  placeholder="Confirm Password" class="pass">
             </p>
              <div class="start">
             <?php if(isset($_SESSION['error'][7]) and $_SESSION['error'][7]!="")
              {
                   echo $_SESSION['error'][7];
                   unset($_SESSION['error'][7]);
            }?>
    </div>
     
             
               
               <p class="name">CONTACT NUMBER</p>
                 <p><input type="text" name="contact"  placeholder="contact" class="field"></p>
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