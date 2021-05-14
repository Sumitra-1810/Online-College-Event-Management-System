<?php error_reporting(0);?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <!---------------------------------------------to apply animation-------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
     <!---------------------------------------------to apply animation------------------------------------------------------------------->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css"  />
    <!---------------------------------------------link of login.css-------------------------------------------------------------------->  
    <link rel="stylesheet" href="css/login1.css">
</head>
 
<body >
  <div class="pos">
   <?php include("nav-bar.php"); ?>
    </div>
    <form method ="post" action="login_action.php">
                        <div class="login-box animated lightSpeedIn" >
                                 <h1>Login</h1>
                            <div class="textbox">
                                  <i class="fa fa-envelope"></i>   <input type="text" placeholder="Email" name="email"  required="required"/>
                         </div>
                          
     
                           <div class="textbox">
                                 <i class="fa fa-lock"></i>   <input type="password" placeholder="password" name="pass" id="myinput"  required="required"/>
                                 <span class="eye" onclick="myfunction()">
                                 <i id="hide1" class="fa fa-eye"></i>
                                 <i id="hide2" class="fa fa-eye-slash"></i>
                               </span>
                              
                           </div> 
                            
                             <a href="home.php"><input type="submit" name="sub" value="Login" class="btn"></a>                         
                            
                            
                       </div>
             <?php         
             if($_SESSION["Success"]==1)
             {
                ?>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                   <?php echo "<script>swal({title: 'Oops!',  text: 'wrong email id and password ',  icon: 'error',
                            button: 'Try again',})</script>";
                  unset($_SESSION["Success"]);
             }?> 
                     
                       

              </form>
              
              <script>
                    function myfunction()
                  {
                      var x=document.getElementById("myinput");
                      var y=document.getElementById("hide1");
                      var z=document.getElementById("hide2");
                      
                      if(x.type === 'password')
                          {
                              x.type= "text";
                              y.style.display="block";
                              z.style.display="none";
                          }
                      else
                      {
                              x.type= "password";
                              y.style.display="none";
                              z.style.display="block";
                       }
                      
                      
                  }
    </script>
   
</body>
   
</html>