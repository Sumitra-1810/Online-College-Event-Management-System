<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>PHOTO GALLERY</title>
<link rel="stylesheet" href="css/gallary.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
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
<br> 

 <div class="home">
  <p>"A picture is a poem without words"</p>    


<div class="image">
 <a href="../project/image/gallery1.jpg" data-lightbox="gallary1">
     <img src="../project/image/gallery1.jpg" height="320px" width="320px;"></a>
  <a href="../project/image/k10.jpg" data-lightbox="gallary1">
      <img src="../project/image/k10.jpg" height="320px" width="320px;"></a>
   <a href="../project/image/k6.jpg"  data-lightbox="gallary1">
       <img src="../project/image/k6.jpg" height="320px" width="320px;"></a>
  <a href="../project/image/k8.jpg"  data-lightbox="gallary1">
      <img src="../project/image/k8.jpg" height="320px" width="320px;"></a>
</div>
<br>
<div class="image">
<a href="../project/image/k4.jpg"  data-lightbox="gallary1">
    <img src="../project/image/k4.jpg" height="320px" width="320px;"></a>
  <a href="../project/image/k5.jpg"  data-lightbox="gallary1">
      <img src="../project/image/k5.jpg" height="320px" width="320px;"></a>
  <a href="../project/image/g9.jpg"  data-lightbox="gallary1">
      <img src="../project/image/g9.jpg" height="320px" width="320px;"></a>
  <a href="../project/image/k9.jpg"  data-lightbox="gallary1">
      <img src="../project/image/k9.jpg" height="320px" width="320px;"></a>
</div>
<br>
<div class="image">
<a href="../project/image/3g.jpeg"  data-lightbox="gallary1">
    <img src="../project/image/3g.jpeg" height="320px" width="320px;"></a>
  <a href="../project/image/4g.jpeg"  data-lightbox="gallary1">
      <img src="../project/image/4g.jpeg" height="320px" width="320px;"></a>
  <a href="../project/image/5g.jpeg"  data-lightbox="gallary1">
      <img src="../project/image/5g.jpeg" height="320px" width="320px;"></a>
  <a href="../project/image/k11.jpeg"  data-lightbox="gallary1">
      <img src="../project/image/k11.jpeg" height="320px" width="320px;"></a>
 </div>
 <br>
 <div class="image">
<a href="../project/image/d4.jpg"  data-lightbox="gallary1">
    <img src="../project/image/d4.jpg" height="320px" width="320px;"></a>
  <a href="../project/image/ga3.jpg"  data-lightbox="gallary1">
      <img src="../project/image/ga3.jpg" height="320px" width="320px;"></a> 
  <a href="../project/image/k9.jpg"  data-lightbox="gallary1">
      <img src="../project/image/k9.jpg" height="320px" width="320px;"></a> 
  <a href="../project/image/g4.jpg"  data-lightbox="gallary1">
      <img src="../project/image/g4.jpg" height="320px" width="320px;"></a>
  
 </div>
  <br>
    </div>
  
<div class="foot">
    <?php include("footer.php"); ?>   
</div>
</body>
</html>