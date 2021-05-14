<?php session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="css/login.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css"  />
</head>
<body>
   <div class="login-form">
       <h2>ADMIN LOGIN</h2>
       <form method="post" action="login_action.php">
           <div class="input">
               <i class="fa fa-user"></i>
               <input type="text" placeholder="username" name="name">
               </div>
            <div class="input">
               <i class="fa fa-unlock-alt"></i>
               <input type="password" placeholder="password" name="pass">

           </div>
           <button type="submit" name="signin">Login</button>
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
   </div>
   
  
    
</body>
</html>