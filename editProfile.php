<?php
session_start();
require 'db.php';

$userId=$_SESSION['userID'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $FullName = $_POST['FullName'];
    $FatherName = $_POST['FatherName'];
    $PhoneNumber = $_POST['Phone-Number'];
    $gender = $_POST['Gender'];
    $age = intval($_POST['age']);

 
    $stmt=$conn->prepare("UPDATE users SET full_name=?, father_name=?, phone=?, gender=?, age=? WHERE id=?");
    $stmt->bind_param("ssssii", $FullName, $FatherName, $PhoneNumber, $gender, $age, $userId);

    if( $stmt->execute()) {
       $success="Profile Updated Successfully!";
    }
    else{
        $error="Error updating profile!". $conn->error;;
    }
}

$sql="SELECT email, password, full_name, father_name, phone, age, gender FROM users WHERE id= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found.";
    exit();
}

$user = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    </head>
<body>

<div class="SignUp-container editProfile-container">
    <p class="top-left-btn"><a href="profile.php">Back to Profile</a></p>
    <h1 style=" font-family: 'DM Sans','serif';">Edit Profile</h1>

    <div class="SignUp editProfile-box">
        <form action="editProfile.php" method="POST">
            <input type="text" name="FullName" class="input" placeholder="Full Name" required
                   value="<?= htmlspecialchars($user['full_name']) ?>">
            <label for="FullName"></label>

            <input type="text" name="FatherName" class="input" placeholder="Father's Name" required
                   value="<?= htmlspecialchars($user['father_name']) ?>">
            <label for="FatherName"></label>

            <input type="tel" name="Phone-Number" class="input" placeholder="Phone Number" required
                   pattern="(71|76|81|03|78)[0-9]{6}"
                   value="<?= htmlspecialchars($user['phone']) ?>">
            <label for="Phone-Number"></label>

            <select name="Gender" id="Gender" class="select-form" required>
                <option value="" disabled>Select Gender</option>
                <option value="male" <?= $user['gender']=='male'? 'selected':'' ?>>Male</option>
                <option value="female" <?= $user['gender']=='female'? 'selected':'' ?>>Female</option>
            </select>

            <input type="number" name="age" min="13" max="70" class="input" placeholder="Age" required
                   value="<?= htmlspecialchars($user['age']) ?>">
            <label for="age"></label>

            <input type="email" class="input" placeholder="Email" disabled
                   value="<?= htmlspecialchars($user['email']) ?>">
            <label for="email"></label>

            <input type="submit" class="saveChanges-btn" value="Save Changes">
            <?php if (isset($success)): ?>
               
            <p class="success-msg-2"><?= htmlspecialchars($success) ?></p>
        <?php elseif (isset($error)): ?>
            <p class="error-msg-2"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

           
        </form>
    </div>
</div>

</body>
</html>

