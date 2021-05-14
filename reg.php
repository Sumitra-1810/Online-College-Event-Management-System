<?php error_reporting(0);?>
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
  <?php include("nav-bar.php"); ?>
   <section class="background ">
     <div class="forminfo animated lightSpeedIn">
             <?php session_start(); ?>
              <form method="POST" action="registration_action.php" enctype="multipart/form-data">
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
                 
                
             
                  <p class="name">COLLEGE NAME</p>
                 <p><input type="text" name="college"  placeholder="College" class="field"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][2]) and $_SESSION['error'][2]!="")
              {
                   echo $_SESSION['error'][2];
                   unset($_SESSION['error'][2]);
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
                  <p><select class="field" name="year">
                  <option>------------------------------------Choose Option-------------------------------------</option>
                <option>1st year</option> 
                <option>2nd year</option> 
                <option>3rd year</option> 
                <option>1st semester</option> 
                <option>2nd semester</option> 
                <option>3rd semester</option>
                <option>4th semester</option>
                <option>5th semester</option>
                <option>6th semester</option>
            </select>
             </p>
    <div class="start">
             <?php if(isset($_SESSION['error'][4]) and $_SESSION['error'][4]!="")
              {
                   echo $_SESSION['error'][4];
                   unset($_SESSION['error'][4]);
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
             
                 
                 <p class="name">UPLOAD IMAGE</p>
                 <p><input type="file" name="id" accept="image/jpeg" class="field"></p>
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
               <p class="name">EVENT</p>
             <table>
               <tr>
               
                   <td> <input type="checkbox" name="event[]" value="Code-War">Code-War</td>
                   <td><input type="checkbox" name="event[]" value="design-Mania">Design-Mania</td>
                   <td><input type="checkbox" name="event[]" value="Singing">Singing</td>
                  
             
                   </tr>
                   <tr>
              
                   <td><input type="checkbox" name="event[]" value="Dance">Dance</td>
                   <td><input type="checkbox" name="event[]" value="Debate(hindi)">Debate(hindi)</td>
                   <td><input type="checkbox" name="event[]" value="Debate(English)">Debate(English)</td>
                   
                   </tr>
             <tr>
                   <td><input type="checkbox" name="event[]" value="Quiz">Quiz</td>
                   <td><input type="checkbox" name="event[]" value="Play with words">Play with words</td>
                   <td><input type="checkbox" name="event[]" value="Fantoosh-The mimicry contest">Fantoosh-The mimicry contest</td>
                   </tr>
             <tr>
                   <td><input type="checkbox" name="event[]" value="Parwaaz(hindi)">Parwaaz(hindi)</td>
                   <td><input type="checkbox" name="event[]" value="Parwaaz(english)">Parwaaz(english)</td>
                   
                   </tr>
                   <tr>
                    <div class="start">
             <?php if(isset($_SESSION['error'][13]) and $_SESSION['error'][13]!="")
              {
                   echo $_SESSION['error'][13];
                   unset($_SESSION['error'][13]);
            }?>
    </div>
                   </tr>
            
             </table>
               
                
            
            
            
             
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