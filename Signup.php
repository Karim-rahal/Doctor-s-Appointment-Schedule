<?php session_start();
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $NewPass =$_POST['New-password'];
    $ConfPass=$_POST['Conf-password'];

    if($NewPass===$ConfPass){
        $password = password_hash($ConfPass, PASSWORD_DEFAULT);
        $gender=$_POST['Gender'];
        $FullName=$_POST['FullName'];
        $FatherName=$_POST['FatherName'];
        $PhoneNumber=$_POST['Phone-Number'];
        $age=intval($_POST['age']);
        try{

        
        $stmt = $conn->prepare("INSERT INTO users(email,password,full_name,father_name,phone,age,gender) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssis", $email, $password,$FullName,$FatherName,$PhoneNumber,$age,$gender);
        $stmt->execute();
       
            header('Location: Login.php');
        }
         catch(mysqli_sql_exception $e) {
            if ($e->getCode()===1062) {//Chatgpt have us this condition to check for the error of existence for unique atrributes like email here
                echo "<script> 
                document.addEventListener('DOMContentLoaded',function(){
                
                document.getElementById('emailExists').classList.toggle('show');});</script>";
            }
       
        }
    }
    else{
        echo "<script> 
                document.addEventListener('DOMContentLoaded',function(){
                
                document.getElementById('passDontMatch').classList.toggle('show');});</script>";
        
        
    }
    

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
  
    <div class="SignUp-Container" >
    <p class="top-left-btn"><a href="Home.php">Back Home</a></p>
    <h1 >Sign Up</h1>
        <div class="SignUp">
            
        <form action="Signup.php" method="POST" >
            
                    <input type="text" id="FullName" name="FullName"class="input" placeholder="Full Name" required autocomplete="off"
                    value="<?=isset($_POST['FullName'])?htmlspecialchars($_POST['FullName']):''?>">
                     <label for="FullName" ></label>
                     <input type="text" id="FatherName" name="FatherName"class="input" placeholder="Father's Name" required autocomplete="off"
                     value="<?=isset($_POST['FatherName'])?htmlspecialchars($_POST['FatherName']):''?>">
                     <label for="FatherName" ></label>
                     <input type="tel" id="Phone-Number" name="Phone-Number"class="input" required  autocomplete="off" pattern="(71|76|81|03|78)[0-9]{6}" 
                     placeholder="Phone Number" required
                     value="<?=isset($_POST['Phone-Number'])?htmlspecialchars($_POST['Phone-Number']):''?>">
                     <label for="Phone-Number"></label>
                     <select name="Gender" id="Gender" class="select-form" required>
                    <option value="" class="options placeholder"selected disabled >Select Gender</option>
                    <option value="male" class="options"<?=(isset($_POST['Gender'])&&$_POST['Gender']=='male') ?'selected':''?>>Male</option>
                    <option value="female" class="options"<?= (isset($_POST['Gender']) && $_POST['Gender'] == 'female') ? 'selected':'' ?>>Female</option>
                    </select>
                    <input type="number" name="age" min="13" max="70" class="input" required placeholder="Age"
                    value="<?=isset($_POST['age'])?htmlspecialchars($_POST['age']):''?>">
                    <label for="age"></label>
                     <input type="email" id="email" name="email"class="input" placeholder="Email:example@123" required autocomplete="off"
                     value="<?=isset($_POST['email'])?htmlspecialchars($_POST['email']):''?>">
                     <label for="email" ></label>
                     <input type="password" id="password" name="New-password"class="input" required  autocomplete="off" 
                     placeholder="New Password" required>
                     <label for="New-password" ></label>
                     <input type="password" id="password" name="Conf-password"class="input" required  autocomplete="off" 
                     placeholder="Confirm Password" required>
                     <label for="Conf-password" ></label>
                     <p class='error-msg' id="emailExists">Email already exists.</p>
                     <p class='error-msg passMatch' id="passDontMatch">Passwords don't match.</p>

                    <input type="submit" class="reg-btn"value="Register" >
                    <br>
                    <p class="form-bottom">If you have an account  <a href="Login.php">Log in</a></p><br>
                    
                    

        </form>
        </div>
    </div>
</body>
</html>