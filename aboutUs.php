<?php  session_start() ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
<?php include 'navbar.php'?>
<div class="container">
   <div class="aboutUs-background-img">
    <h1 class="Home-page">About US</h1>
    </div>
    <div class="cards">
        <div class="cards-content">
            <img src="images/heart-pulse.svg" alt="heart-icon" class="img-icon">
            <h1>Our next level of care</h1>
            <p>We offer advanced, personalized treatments to support your recovery, pain relief, and performance goals. With expert care and cutting-edge therapies, we help you achieve optimal health and well-being.</p>
        </div>
        <div class="cards-content">
            <img src="images/journal-medical.svg" alt="heart-icon" class="img-icon">
            <h1>Care that goes beyond</h1>
            <p>We are committed to providing exceptional care that extends beyond treatment, focusing on your long-term health, recovery, and well-being.</p>        
            <br>
            <br>
        
        </div>
        <div class="cards-content">
            <img src="images/prescription2.svg" alt="heart-icon" class="img-icon">
            <h1>Your health and wellness</h1>
            <p>We prioritize your well-being with personalized treatments designed to restore, strengthen, and enhance your overall health.</p>
            <br>
            <br>
        </div>
        </div>
        <div class="article-about">
            <div class="half-article">
                <h1>The services we provide</h1>
                <p>We offer a wide range of physiotherapy and sports medicine services designed to help you recover, prevent injuries, and enhance performance. Our expert team provides personalized treatments tailored to your specific needs, ensuring the best possible care.</p>
                <p>From rehabilitation and pain management to advanced therapies and wellness programs, we are committed to supporting your journey to better health. Whether you're an athlete or seeking relief from chronic pain, we’re here to help you move and feel your best.</p>
               <br>
               <br>
               <br>
               <div class="read-btn"> <a href="OurServices.php">Read More</a></div>
               
            
            </div>
            <div class="half-article article-img">

            </div>

        </div>

       
        
   </div>
<?php include 'footer.php'?>
</body>
</html>