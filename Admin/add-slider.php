
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>slider</title>
</head>
<body>
   <form method="post" action="slider-action.php" enctype="multipart/form-data" >
        <p class="name">add iamge</p>
                 <p><input type="file" name="id" accept="image/jpeg" class="field"></p>
                   <?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
              {
                   echo $_SESSION['error'][0];
                   unset($_SESSION['error'][0]);
            }?>  
             <?php if(isset($_SESSION['error'][1]) and $_SESSION['error'][1]!="")
              {
                   echo $_SESSION['error'][1];
                   unset($_SESSION['error'][1]);
            }?>
                   <input type="submit" name="sub" value="SUBMIT" class="sub">
   </form>
    
</body>
</html>