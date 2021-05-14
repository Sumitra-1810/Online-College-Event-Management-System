<?php 
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
$id=$_REQUEST['id'];
$sql="select * from add-image where id=1" ;
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <style>
       html, body {
      position: relative;
      height: 100%;
    }
    body {
      background-color:#fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
     padding-top: 5%;
            padding-bottom: 10%;
    }
        .swiper-wrapper
        {
            background-position: center;
            background-size: cover;
           height:100%
        }
    .swiper-slide {
      background-position: center;
     background-size: cover;
       
           width:100%;
    height:500px;
           

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .text
{
    
    position:relative;
   
     z-index: 2;
   
}
.text h1
{
    padding-bottom:4%;
   margin-top:-8%;
 font-family: sans-serif;
    text-align: center;
    color:  #ee0092;
    font-size: 40px;
    
}
.text p
{
    height: auto;
    background-image:linear-gradient(#ee0092,#5b0077);
    opacity:90%;
    width: 98%;
    color: #fff;
    margin-left:1%;
    border-radius: 25px;
        
    text-align: justify;
    padding: 50px 75px 30px 50px;
    overflow: hidden;
    font-size: 20px;
    
}
.text1 h1
{
    padding-top:4%;
    padding-bottom: 4%;
 font-family: sans-serif;
    text-align: center;
    color: #ee0092;
    font-size: 40px;
    
}
.text1 p
{
    height: auto;
    background-image:linear-gradient(#ee0092,#5b0077);
    opacity:90%;
    
    color:#fff;
    width: 98%;
     margin-left:1%;
    text-align: justify;
    padding: 50px 75px 30px 77px;
   
    border-radius: 20px;
    overflow: hidden;
    font-size: 20px;
    
}
.btn 
{
    
    top:15%;
    left:50%;
    background: red;
    width: 10%;
    height: 50px;
    color: #fff;
    font-size: 20px;
  
    border-radius: 7px;
    border: 0px;
    cursor: pointer;
   margin-top: 2%;
   margin-left:45%;
}
        .btn a
        {
            text-decoration: none;
            color:#fff;
        }
.btn1
{
    
    top:15%;
    left:50%;
    background: red;
    width: 10%;
    height: 50px;
    color: #fff;
    font-size: 20px;
  
    border-radius: 7px;
    border: 0px;
    cursor: pointer;
   margin-top: 2%;
   margin-left:45%;
}
        .btn1 a
        {
            text-decoration: none;
            color:#fff;
        }

    </style>
    
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
    <!-- Swiper -->
	<div class="swiper-container">
		<div class="swiper-wrapper">
            
			<div class="swiper-slide" style="background-image: url(../project/image/k10.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(../project/image/k12.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(../project/image/k6.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(../project/image/k12.jpg);"></div>
			
		</div>
		
		<!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
	
	<div class="text">
    <h1>Kasturi Are Going To Be Online</h1>
        <P>Kasturi-2021' a vibrant, intriguing, and exciting four-day (in the month of january) annual event is all set to be organised online by kanoria pg mahila mahavidyalaya.It was fascinating event of four-days, which gave immense opportunities to students to showcase their talent. The teams from different colleges of the state marked their presence in various inter-college competitions, involving their intellectual, physical, creative, knowledge and literary skills. There were several intra-college competitions as well, allowing students to participate in traditional activities such as mandana, rangoli and many more.<br/>
        <br/> It’s a chance for the leaders of tomorrow to polish up their skill sets along with their academic knowledge.  KASTURI will be a platform for your expression, interaction and articulation. 
       
      
       </P>
    </div>
    <div class="text1">
    <h1>About Kanoria</h1>
   <P>Kanoria PG Mahila Mahavidyalaya was established in 1965 by Late Bhagirath Kanoria in aesthetic environs at Jawahar Lal Nehru Marg as the first institution of higher education for women through grant-in-aid from the Government of Rajasthan. In its 54 years old journey our college has achieved many milestones. It is a leading college not only of the city but also of the state of Rajasthan in imparting excellent education, enabling holistic development and inculcating leadership and social values. The college has earned a prestigious reputation of harnessing a progressive outlook towards education by introducing new courses at UG and PG level, from time-to-time, skill enhancement and (21st Century for skills) career oriented courses, ICT enabled teaching facilities, outreach activities and discipline. About 6500 students enroll every year in 24 subjects in Science, Arts and Commerce streams for Bachelor's programme and 11 Master's programme. Maintaining a lead in premier educational location, the college has clocked an enviable growth keeping abreast with the needs and aspirations of times.
       <br/> <button class="btn"> <a href="About.php">View More</a></button></P>
       
         <h1>Events</h1>
   <P>This time we are organizing 13 competitive events spread into 4 days from 8/1/2021 to 11/1/2021. For every event, cash prizes are same i.e. First Prize – 5000/, Second Prize – 3000/- and Third Prize 2000/-. 
       <br/> <button class="btn1"> <a href="event.php">View More</a></button>
       </P>
       
      
    <h1>Our Sponser</h1>
     <?php include("sponser.php"); ?>
        
        
    </div>
	


	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
        
	</script>
	<div class="footer">
	    <?php include("footer.php");  ?>
	</div>
</body>
</html>