<?php  session_start();
require 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $message=$_POST["message"];
    if($message!== ""){
    $stmt=$conn->prepare("INSERT messages (message) VALUES (?)");
    $stmt->bind_param("s",$message);
     if($stmt->execute()){
        echo"Message submitted successfully.";
    }
    else{
        "Error submitting Message.";
    }
}
exit;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
<?php include 'navbar.php'?>
<div class="container">
    <div class="contact-us">
        <div class="contact-us-content">
            <h1>Get In Touch</h1>
            <p>Have questions or need to book an appointment? Our team is here to help! Whether you're looking for physiotherapy, sports rehabilitation, or general wellness support, feel free to reach out. Contact us today, and let’s get you on the path to recovery and peak performance!</p>
            <br>
            <h2>Phone Number</h2>
            <ul class="Right-Menu-List">
                <li class="Menu-List"><h2 class="noExtraSpace contactUs">+961 71 168 748</h2></li>
                <li class="Menu-List"> <p class="noExtraSpace" style=" font-size: 30px;">Email us: </p> <a href="mailto:karim.rahal.2017@gmail.com" class="contact-text contact-email"> jointheal@info</a></li>
           
            </ul>
           
        </div>
        <div class="contact-us-content leave-message">
            <h2 >Leave a message here</h2>
            <form  id="messageForm" method="POST">
                <textarea name="message" id="Message" required></textarea>
                <label for="Message" class="message-label"></label>
                <br>
                <input type="submit" name="submit" value="Send Message" >
                <div id="messageResponse" style="margin-top:10px;margin-left:40px;font-weight:bold;"></div>

            </form>
        </div>
    </div>
   
   </div>
    
   </div>
<?php include 'footer.php'?>
</body>
</html>