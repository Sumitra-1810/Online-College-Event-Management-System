<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>doc</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <style>
    
    body
        {
           margin:0px;
            padding: 0px;
            background: #000;
            
         }
        
      .swiper-container
        {
            width:100%;
            padding-top: 15%;
            padding-bottom: 10%;
        }
        .swiper-wrapper
        {
            background-position: center;
            background-size: cover;
            width:700px;
        }
        
         .swiper-slide
        {
            background-position: center;
            background-size: cover;
            width: 700px;
            height: 450px;
        }
        .overlay
        {
	        position: absolute;
	        left: 50%;
        	top: 50%;
	        transform: translate(-50%,-50%);
	        width:100%;
	        height: 100%;
	        background-color: rgba(92,95,236,0.6);
	        display: flex;
	        justify-content: center;
	        align-items: center;
}
        .btn
        {
	      width:160px;
	      height: 50px;
	      display: flex;
	      justify-content: center;
	      align-items: center;
	      background-color: #FFFFFF;
	      color:#252525;
	      font-weight:bolder;
            font-size:20px;
	      letter-spacing: 1px;
	      font-family: calibri;
	      border-radius: 20px;
	      box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
       }
       .btn:hover
        {
	      color:#FFFFFF;
	      background-color: #f15fa3;
	      transition: all ease 0.3s;
        }
        a
        {
            text-decoration: none;
        }
        
     .overlay
        {
	       visibility: hidden;
        }
    .swiper-slide:hover .overlay
        {
	      visibility: visible;
	      animation:fade 0.5s;
       }
 @keyframes fade{
	0%{
		opacity: 0;
	}
	100%{
		opacity: 1;
	}
} 
   
    </style>
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
  
   <div class="swiper-container">
     
        <div class="swiper-wrapper">
             <div class="swiper-slide" style="background-image: url(image/code1.png);">
    <div class="overlay">
	<!--btn------>	
	<a href="codewar.php" class="btn">Explore</a>	
	</div>
    </div>
            <div class="swiper-slide" style="background-image: url(image/singing.png);"><div class="overlay">
	<!---btn------>	
	<a href="solosinging.php" class="btn">Explore</a>	
	</div></div>
            <div class="swiper-slide" style="background-image: url(image/extempore.png);"><div class="overlay">
	<!---btn------>	
	<a href="extempore.php" class="btn">Explore</a>	
	</div></div>
            <div class="swiper-slide" style="background-image: url(image/debate.png);"><div class="overlay">
	<!---btn------>	
	<a href="debate.php" class="btn">Explore</a>	
	</div></div>
            <div class="swiper-slide" style="background-image: url(image/dance.png);"><div class="overlay">
	<!---btn------>	
	<a href="solodance.php" class="btn">Explore</a>	
	</div></div>
            <div class="swiper-slide" style="background-image: url(image/design.png);"><div class="overlay">
	<!---btn------>	
	<a href="designmania.php" class="btn">Explore</a>	
	</div></div>
            <div class="swiper-slide" style="background-image: url(image/play.png);"><div class="overlay">
	<!---btn------>	
	<a href="playwithwords.php" class="btn">Explore</a>	
	</div></div>
            <div class="swiper-slide" style="background-image: url(image/quiz.png);"><div class="overlay">
	<!---btn------>	
	<a href="quiz.php" class="btn">Explore</a>	
	</div></div>
            <div class="swiper-slide" style="background-image: url(image/mimicry.png);"><div class="overlay">
	<!---btn------>	
	<a href="funtoosh.php" class="btn">Explore</a>	
	</div></div>
        </div>
        
    </div>
   
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
  <div class= "foot">
      <?php include("footer.php");  ?>
  </div>
</body>
</html>