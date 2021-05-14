<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/contactus1.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
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
<body>
 
  <section class="contactus">
      <div class="content">
          <h2>CONTACT US</h2>
          <p>Email us and keep upto date with our latest news</p>
      </div>
      <div class="contain">
          <div class="info">
              <div class="box">
                  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="text">
                      <h3>Address</h3>
                      <p>JLN Marg Jaipur</p>
                  </div>
              </div>
               <div class="box">
                  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                  <div class="text">
                      <h3>Phone</h3>
                      <p>907-9866-322</p>
                  </div>
              </div>
               <div class="box">
                  <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                  <div class="text">
                      <h3>Email</h3>
                      <p>kanoriacollege@gmail.com</p>
                  </div>
              </div>
          </div>
          <div class="contact-form">
              <form>
                <h2>Send Message</h2>
                 <div class="input">
                  <input type="text" name="fn" required="required">
                     <span>First Name</span>
                  </div>  
                   <div class="input">
                  <input type="text" name="ln" required="required">
                     <span>Last Name</span>
                  </div>  
                   
                    <div class="input">
                  <input type="text" name="fullname"required="required" >
                     <span>Email</span>
                  </div>  
                     <div class="input">
                  <textarea required="required"></textarea>
                     <span>Type Your Message...</span>
                  </div>
                   <div class="input">
                  <input type="submit" name="send" value="Send">
                     
                  </div>  
                    
                      
                  
              </form>
          </div>
      </div>
  </section>
  <div class="footer">
   <?php include("footer.php"); ?>
    </div>
   
    
</body>
</html>