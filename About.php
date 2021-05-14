<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aboutus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css"  />
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
 <link rel="stylesheet" href="css/aboutus2.css" />
</head>

<body class="animated slideInRight">
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
<div class="body1">    
    
         <div class="home">
       <h1 class=" animated animate__flipInX">ABOUT KANORIA</h1>
    </div> 
     <br>
     
     <div class="image">
         
         <img src="../project/image/kanoria%20logo1.png" alt="logo" height="400px" width="400px;">
     </div>    
     
       
    <div class="paragraph animated animate__lightSpeedInRight">                
      <pre>
  Kanoria PG Mahila Mahavidyalaya was established in 1965 by Late Bhagirath Kanoria in aesthetic 
  environs at Jawahar Lal Nehru Marg as the first institution of higher education for women through 
  grant-in-aid from the Government of Rajasthan. In its 54 years old journey our college has achieved 
  many milestones. It is a leading college not only of the city but also of the state of Rajasthan 
  in imparting excellent education,enabling holistic development and inculcating leadership and 
  social values. The college has earned a prestigious reputation of harnessing a progressive outlook 
  towards education by introducing new courses at UG and PG level, from time-to-time,skill enhancement
  and (21st Century for skills) career oriented courses, ICT enabled teaching facilities, outreach 
  activities and discipline. About 6500 students enroll every year in 24 subjects in Science, Arts 
  and Commerce streams for Bachelor's programme and 11 Master's programme.Maintaining a lead in 
  premier  educational location, the college has clocked an enviable growth keeping abreast with the needs 
  and  aspirations of times.</pre><br>
<pre> 
  Sprawling lush green lawns adorned with ornamental trees beautify the campus and make it conducive
  to learning.
  A well maintained botanical garden, nursery and the abounding greenery also protect the biodiversity
  of the area. 
  Infrastructure facilities and amenities in the college add the effective and efficient conduct of all 
  educational programmes.</pre><br>  
<pre>
  The pivot around which all initiatives and efforts center is the 'student' as the future of the college. 
  The college offers degree programs at the undergraduate and post graduate level in Arts, 
  Commerce and Science. 
  Additionally, Skill Enhancement Courses, Diploma and certificate courses provides 
  students opportunities to step out in the world skilled, well-groomed and prepared to create an identity for 
  themselves.</pre>
   
    </div>
       
<br><br><br>

    </div>
    
<div class="foot">
        <?php include("footer.php"); ?>   
    </div>
</body>
</html>