<?php session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt=$conn->prepare("SELECT id,password,full_name,plan FROM users WHERE email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->store_result();
     $stmt->bind_result($userId,$hashed,$full_name,$plan);
    
    if ($stmt->fetch() && password_verify($password, $hashed)) {
        $_SESSION['email'] = $email;
        $_SESSION['userID'] = $userId;
        $_SESSION['FullName'] = $full_name;
        $_SESSION['plan'] = $plan;
        header('Location: Home.php');
       
    } else {
        echo"<script>document.addEventListener('DOMContentLoaded',function(){
                
                document.getElementById('Invalid').classList.toggle('show');});</script>";
      
    }
}
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
  
    <div class="SignUp-Container">
    <p class="top-left-btn"><a href="Home.php">Back Home</a></p>
    <h1>Log In</h1>
        <div class="LogIn">
            
        <form action="Login.php" method="POST" >
            
                     <input type="email" id="email" name="email"class="input logInEmail" placeholder="Email:example@123" required autocomplete="off">
                     <label for="email" ></label>
                     <input type="password" id="password" name="password"class="input logInPass" required  autocomplete="off" 
                     placeholder="Password" required>
                     <label for="password" ></label>
                   
                     <p class='error-msg' id="Invalid">Invalid Credentials.</p>
                    <input type="submit" class="log-btn"value="Log In" >
                    <br>
                    <p class="form-bottom log-bottom">If you don't have an account  <a href="Signup.php">Sign Up</a></p>

        </form>
        </div>
    </div>
</body>
</html>