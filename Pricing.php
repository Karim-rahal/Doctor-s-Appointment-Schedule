<?php  session_start();
require 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userPlan= $_SESSION['plan'] ;
    $plan="none";
    if(isset($_SESSION["userID"])){
        $userId=$_SESSION["userID"];
        if(isset($_POST["Basic"])){
            $plan="basic";
        }
        else if(isset($_POST["Advanced"])){
            $plan="advanced";
        }
        else if(isset($_POST["Premium"])){
            $plan= "premium";
        }
        else{

        }
       
        if(($plan!=="none"&& $userPlan==="none")||(($plan=== "premium"||$plan=="advanced")&& $userPlan=== "basic")||($plan==="premium"&&$userPlan==="advanced")){
            echo "<script>
           
                
             alert('You are updating $userPlan to $plan.');
        
             </script>";
             
             
            $stmt=$conn->prepare("UPDATE users SET plan=? WHERE id=?");
            $stmt->bind_param("si",$plan,$userId);
            $stmt->execute();
            if($stmt->affected_rows>0){
                $_SESSION["plan"]= $plan;
                echo "<script>
                document.addEventListener('DOMContentLoaded',function(){
                    
                 showSuccess('Updated from $userPlan to $plan.');});
            
            </script>";
            
            
        }
    }
        
        else{
            echo "<script>
            document.addEventListener('DOMContentLoaded',function(){
                
             showError('You cannot update from $userPlan to $plan.');});
        
        </script>";
        

        }
    }
    else{
        echo "<script>
         document.addEventListener('DOMContentLoaded',function(){
                
                showError('You are not logged in to purchase.');});
        
        </script>";
    
    }
}









?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body >
    
<?php include 'navbar.php'?>
<div class="container">
    <div class="freeze-screen" id="error" style="display: none;">
        <div class="alert-msg">
            <p class="errorMessage" id="errorMessage">This is an error message!</p>
            <form action="Pricing.php">
                <input type="submit" class="ok-Btn" name="okBtn" value="Ok">
            </form>
        </div>
    </div>
   

   <div class="pricing-background-img">
    <h1 class="Home-page">Pricing Plans</h1>
   </div>
   
   <h1 class="plans-h1">Our Pricing Plans</h1><br>
   <div class="plans">
   
    <div class="one-plan">
        <div class="price">
            <h1><sup>$</sup>49</h1>
            <p>Per Session</p>
        </div>
        <div class="features">
            <div class="features-header">
                <p>Basic plan</p>
                <h2>Services Included</h2>
               
               
            </div>
            <p>1 Physiotherapy Session (45 min)</p>
            <p>Initial Assessment & Consultation</p>
            <p>Personalized Home Exercise Plan</p>
            <p>No Follow-up Support</p>
             <p>No Additional Therapies</p>
             <br>
             <br>
             <br>
             <form action="Pricing.php" method="POST">
            
            <input type="submit" class="purchase-btn "value="PURCHASE NOW" name="Basic">

            </form>
        </div>
    </div>
   
   
    
    <div class="one-plan">
      <div class="price">
        <h1><sup>$</sup>199</h1>
        <p>Per Month</p>
    </div>
    <div class="features">
        <div class="features-header">
            <p>Advanced Plan</p>
            <h2>Services Included</h2>
           
        </div>
        <p>4 Physiotherapy Sessions (1 per week)</p>
        <p>Full Body Movement Assessment</p>
         <p>Manual Therapy & Exercise Therapy</p>
        <p> Free Kinesiology Taping (if needed)</p>
         <p>Email Support for Questions</p>
         <form action="Pricing.php" method="POST">
         
         <input type="submit" class="purchase-btn "value="PURCHASE NOW" name="Advanced">
         </form>
    </div>
</div>
        <div class="one-plan">
            <div class="price">
                <h1><sup>$</sup>399</h1>
                <p>Per Month</p>
            </div>
            <div class="features">
                <div class="features-header">
                    <p>Premium Plan</p>
                    <h2>Services Included</h2>
                </div>
                <p >8 Physiotherapy Sessions (2 per week)</p>
                <p>Full Rehabilitation Program</p>
                <p>Access to Electrotherapy & Shockwave Therapy</p>
                <p>Personalized Nutrition & Wellness Guidance</p>
                <p>Priority Booking & VIP Support</p>
                <form action="Pricing.php" method="POST">
                
                <input type="submit" class="purchase-btn "value="PURCHASE NOW" name="Premium">
                </form>
                
            </div>
        
        </div>
 </div>
   </div>
<?php include 'footer.php'?>
</body>
</html>