<?php
session_start();
require 'db.php';

if (isset($_SESSION['userID'])) {
    $userId = $_SESSION['userID'];

    $stmt = $conn->prepare("SELECT a.id, d.name AS doctor_name, a.day_of_week, a.appointment_date, a.appointment_time
            FROM appointments a
            JOIN doctors d ON a.doctor_id = d.id
            WHERE a.patient_id = ?");
    if ($stmt === false) {
        die('MySQL prepare error: ' . $conn->error);
    }

    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();

   
    
    if ($result->num_rows > 0) {
        include "navbar.php";
        echo'<div class="appointment-table">';
        echo"<h2>Your Upcoming Appointments</h2>";
        
        echo"<table class='appointment-timetable'>
                <thead>
                    <tr class='appointment-header'>
                        <th class='doctor-column'>Doctor</th>
                        <th class='day-column'>Day</th>
                        <th class='date-column'>Date</th>
                        <th class='time-column'>Time</th>
                    </tr>
                </thead>
                <tbody>";

        while($appointment = $result->fetch_assoc()){
            echo"<tr class='appointment-row'>
                    <td class='doctorName'>".htmlspecialchars($appointment['doctor_name'])."</td>
                    <td class='day'>".htmlspecialchars($appointment['day_of_week'])."</td>
                    <td class='date'>".htmlspecialchars($appointment['appointment_date'])."</td>
                    <td class='time'>".htmlspecialchars($appointment['appointment_time'])."</td>
                  </tr>";
        }

        echo"</tbody>
             </table>";
    } else{
        include "navbar.php";

        echo"
        <div class='noAppointments'> 
        <p style=' font-family: 'DM Sans','serif';'>You have no upcoming appointments.</p>
        </div>
        ";
    }

    echo'</div>';
    include "footer.php";
   
}
else{
    echo"<p>Please log in to view your appointments.</p>";
}
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
    
    </body>
    </html>
