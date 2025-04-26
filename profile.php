<?php
session_start();
include 'db.php';

$userId = $_SESSION['userID'];
if (!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT email, full_name, father_name, phone, age, gender,plan FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found.";
    exit();
}

$user = $result->fetch_assoc();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    </head>
    
    <body>
    <?php include 'navbar.php'; ?>


    <div class="profile-page">
    <div >

    <div class="profile-container">
      <h2 class="profile-header">My Profile</h2>
    <div class="fullName">
    <label>Full Name: </label> <?php echo htmlspecialchars($user['full_name']); ?> 
    </div>
    <hr>

    <div class="fatherName">
    <label>Father's Name: </label> <?php echo htmlspecialchars($user['father_name']); ?> 
    </div>
    <hr>

    <div class="Age">
    <label>Age: </label> <?php echo htmlspecialchars($user['age']); ?>
    </div>
    <hr>

    <div class="gender">
    <label>Gender: </label><?php echo htmlspecialchars($user['gender']); ?> 
    </div>
    <hr>

    <div class="phoneNb">
    <label>Phone Number: </label> <?php echo htmlspecialchars($user['phone']); ?> 
    </div>
    <hr>

   <div class="email">
   <label>Email: </label> <?php echo htmlspecialchars($user['email']); ?> 
   </div>
   <hr>
   <div class="email">
   <label>Plan: </label> <?php echo htmlspecialchars($user['plan']); ?> 
   </div>

    </div>
    <div class="edit-container">
      <a href="editProfile.php" class="edit-button">Edit Profile</a>
    </div>

    </div>
   </div>
   
    <?php include 'footer.php'; ?>
    </body>
    
    </html>