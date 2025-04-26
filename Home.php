<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
   <div class="background-img">
    <div class="Home-page">
        <h1> Joint Heal</h1>
        <p>Restore movement, reduce pain, and enhance your quality of life with expert physiotherapy care.</p>
        <div class="app-btn-container">
            <button id="app-btn"class="app-btn">Book An appointment</button>
        </div>
        
    </div>
   </div>
    
   </div>

    <?php include 'footer.php'; ?>
</body>
</html>