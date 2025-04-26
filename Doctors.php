<?php  session_start() ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
<?php include 'navbar.php'?>
<div class="container">
        <div class="doctors-background-img">
            <h1 class="Home-page">Doctors</h1>
          
            <p><a href="TimeTable.php">Doctors' Schedule</a></p>
        </div>

        <div class="Doctors-content">
            
            
            <div class="img-doctor">
                <img src="images/doctor1.png" alt="Dr. Olivia Reed">
                <h3>Dr. Olivia Reed</h3>
                <p>Musculoskeletal Physiotherapy</p>
            </div>
            <div class="img-doctor">
                <img src="images/doctor2.png" alt="Dr. Dabiel Smith">
                <h3>Dr. Dabiel Smith</h3>
                <p>Exercise Physiology</p>
            </div>
            <div class="img-doctor">
                <img src="images/doctor3.png" alt="Dr. James Brooks">
                <h3>Dr. James Brooks</h3>
                <p>Athletic Training</p>
            </div>
            <div class="img-doctor">
                <img src="images/doctor4.png" alt=">Dr. Emma Carter">
                <h3>Dr. Emma Carter</h3>
                
                <p>Sports Physiotherapy</p>
            </div>
            
            <div class="img-doctor">
                <img src="images/doctor5.png" alt="Dr. Micheal Adams">
                <h3>Dr. Micheal Adams</h3>
                <p>Sports Rehabilitation</p>
            </div>
            
            
        </div>
    </div>

<?php include 'footer.php'?>
</body>
</html>