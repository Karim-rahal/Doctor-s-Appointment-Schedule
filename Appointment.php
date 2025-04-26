<?php  

session_start() ;

require 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!isset($_SESSION['email'])){
        echo "<script> 
                document.addEventListener('DOMContentLoaded',function(){
                
                document.getElementById('NotLogged').classList.toggle('show');});</script>";
       
    }
    else{
    $date=$_POST["appointment-date"];
    $time=$_POST["appointment-time"];
    $day_of_week = date('l', strtotime($date));//
    $department_id=$_POST["department"];
    $doctor_id=$_POST["doctor"];
    $user_id=$_SESSION["userID"];
   
              // since account exists and login is successful we validate the input
            $stmt2= $conn->prepare("SELECT * FROM doctors WHERE id=? AND department_id=?");
            $stmt2->bind_param("ii",$doctor_id,$department_id);
            $stmt2->execute();
            $result=$stmt2->get_result();
            if($result->num_rows > 0){
                //doctor and department entered are matching so we continue
                $stmt3=$conn->prepare("SELECT *FROM schedule WHERE doctor_id = ? AND day_of_week = DAYNAME(?) AND ? BETWEEN start_time AND end_time;");
                $stmt3->bind_param("iss",$doctor_id,$date,$time);
                $stmt3->execute();
                $result3=$stmt3->get_result();
                if($result3->num_rows > 0){
                    //doctor is present at this time
                   $stmt4= $conn->prepare("SELECT COUNT(*) FROM appointments WHERE doctor_id = ? AND appointment_date = ? AND appointment_time = ?;");
                   $stmt4->bind_param("iss",$doctor_id,$date,$time);
                   $stmt4->execute();
                   $stmt4->bind_result($count);
                   $stmt4->fetch();
                   $stmt4->close();
                   if($count>0){
                    //doctor is not available
                    echo "<script> 
                    document.addEventListener('DOMContentLoaded',function(){
                    
                    document.getElementById('BookedTime').classList.toggle('show');});</script>";
                   }
                   else{
                    //doctor is available
                    $stmt5= $conn->prepare("INSERT INTO appointments(patient_id,doctor_id,day_of_week,appointment_date,appointment_time) VALUES (?,?,?,?,?);");
                  
                   $stmt5->bind_param("iisss",$user_id,$doctor_id,$day_of_week,$date, $time);
                   if($stmt5->execute()){
                    echo "<script>alert('Appointment Booked Successfully');</script>";
                }else{
                    echo "<script>alert('Failed');</script>";
                }
                    
                   }
                }
                else{
                    echo "<script> 
                document.addEventListener('DOMContentLoaded',function(){
                
                document.getElementById('DoctorNotAvailable').classList.toggle('show');});</script>";
                }

            }
            else{
                echo "<script> 
                document.addEventListener('DOMContentLoaded',function(){
                
                document.getElementById('InvalidDoctor').classList.toggle('show');});</script>";
            }
           
        
   
}
}
?>

<html lang="en">
<head>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/logo-pic-c.png" type="image/png">
        <title>Book An Appointment</title>
        <link rel="stylesheet" href="Home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
       </head>
<body>

<?php include 'navbar.php';?>

<div class="container">
       <div class="app-background-img">
        <div class="App-page">
            
        <div class="app-form-div">
           <h1>Book An Appointment</h1>
           <div class="form-container">
            <form action="Appointment.php" method="POST">
                <select name="department" id="department" class="select-form" required>
                <option value="" class="options placeholder" selected disabled>Select Department</option>
                <option value="1" class="options" <?= (isset($_POST['department']) && $_POST['department'] == "1") ? 'selected' : '' ?>>Musculoskeletal Physiotherapy</option>
                <option value="2" class="options"<?= (isset($_POST['department']) && $_POST['department'] == "2") ? 'selected' : '' ?>>Athletic Training </option>
                <option value="3" class="options"<?= (isset($_POST['department']) && $_POST['department'] == "3") ? 'selected' : '' ?>>Exercise Physiology</option>
                <option value="4" class="options"<?= (isset($_POST['department']) && $_POST['department'] == "4") ? 'selected' : '' ?>>Sports Physiotherapy</option>
                <option value="5" class="options"<?= (isset($_POST['department']) && $_POST['department'] == "5") ? 'selected' : '' ?>>Sports Rehabilitation</option>
                
                
                 </select>
                 <select name="doctor" id="doctor" class="select-form" required>
                    <option value="" class="options placeholder"selected disabled>Select Doctor</option>
                    <option value="1" class="options" <?= (isset($_POST['doctor']) && $_POST['doctor'] == "1") ? 'selected' : '' ?>>Olivia Reed</option>
                    <option value="2" class="options" <?= (isset($_POST['doctor']) && $_POST['doctor'] == "2") ? 'selected' : '' ?>>Emma Carter</option>
                    <option value="3" class="options" <?= (isset($_POST['doctor']) && $_POST['doctor'] == "3") ? 'selected' : '' ?>>James Brooks</option>
                    <option value="4" class="options" <?= (isset($_POST['doctor']) && $_POST['doctor'] == "4") ? 'selected' : '' ?>>Daniel Smith</option>
                    <option value="5" class="options" <?= (isset($_POST['doctor']) && $_POST['doctor'] == "5") ? 'selected' : '' ?>>Micheal Adams</option>
                    
                     </select>
                    
                     <label for="appointment-date"></label>
                    <input type="date" id="appointment-date" name="appointment-date" required min="2025-03-02">
                    <label for="appointment-time"></label>9
                    <input type="time" id="appointment-time" name="appointment-time" required min="09:00" max="16:40" step="1200"> <!-- 2-step is used to put intervals in time input , 1200-> every 20 minutes (from chatgpt) -->
                   <p class='error-msg' id="InvalidDoctor">Invalid Doctor for this Department.</p>
                   <p class='error-msg' id="DoctorNotAvailable">Doctor not available at this time.</p>
                   <p class='error-msg' id="BookedTime">Time slot is already booked. Please choose another time.</p>
                   <p class='form-bottom error-msg' id="NotLogged">Log In to Book <a href="Login.php">Login</a></p>
                   
                    <input type="submit" class="book-btn"value="Book appointment" >
                    
    
               </form>
           </div>
           
        </div>    
        
            
        </div>
       </div>
        
       </div>


<?php include 'footer.php';?>



<script>
        document.getElementById("appointment-date").addEventListener("input", function() {
        let selectedDate=new Date(this.value);
        let day=selectedDate.getDay();  
        
         if (day===0 |day===6) {
            alert("Saturdays and Sundays are off.");
            this.value ='';  
        }
       
    });
    
//the user should not choose the time when there is a lunch break
document.getElementById('appointment-time').addEventListener('input', function(){
    let selectedTime = this.value;
 if(selectedTime >= "12:00" && selectedTime < "12:59"){
        alert("The time between 12:00 and 12:59 is a lunch break.");
        this.value = "";  
    }
});

</script>
</body>
</html>