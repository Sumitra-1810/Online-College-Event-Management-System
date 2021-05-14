<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
    .swiper-container {
      width: 79.5%;
     padding-top: 5%;
            padding-bottom: 10%;
        margin-left:20%;
        margin-top:-4.5%;
        
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
    </style>
</head>
<?php include("dashboard.php"); ?>
<body>
    <!-- Swiper -->
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background-image: url(image/k6.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(image/k10.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(image/k12.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(image/k6.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(image/k12.jpg);"></div>
			
		</div>
		
		<!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
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
    
</body>
</html>