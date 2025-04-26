<?php  session_start() ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
<?php include 'navbar.php'?>
<div class="container">
    <div class="time-table">
    <h2>DOCTORS TIMETABLE</h2>
    <div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="time-col"> 9:00 - 10:00</td>
                <td class="doctor" data-specialty="Musculoskeletal Physiotherapy">Dr. Olivia Reed</td>
                <td class="doctor" data-specialty="Athletic Training">Dr. James Brooks</td>
                <td class="doctor" data-specialty="Exercise Physiology">Dr. Daniel Smith</td>
                <td class="doctor" data-specialty="Sports Physiotherapy">Dr. Emma Carter</td>
                <td class="doctor" data-specialty="Sports Rehabilitation">Dr. Michael Adams</td>
            </tr>
            <tr>
                <td class="time-col">10:00 - 11:00</td>
                <td class="doctor" data-specialty="Athletic Training">Dr. James Brooks</td>
                <td class="doctor" data-specialty="Musculoskeletal Physiotherapy">Dr. Olivia Reed</td>
                <td class="doctor" data-specialty="Sports Physiotherapy">Dr. Emma Carter</td>
                <td class="doctor" data-specialty="Exercise Physiology">Dr. Daniel Smith</td>
                <td class="doctor" data-specialty="Sports Rehabilitation">Dr. Michael Adams</td>
            </tr>
            <tr>
                <td class="time-col">11:00 - 12:00</td>
                <td class="doctor" data-specialty="Exercise Physiology">Dr. Daniel Smith</td>
                <td class="doctor" data-specialty="Sports Physiotherapy">Dr. Emma Carter</td>
                <td class="doctor" data-specialty="Sports Rehabilitation">Dr. Michael Adams</td>
                <td class="doctor" data-specialty="Athletic Training">Dr. James Brooks</td>
                <td class="doctor" data-specialty="Musculoskeletal Physiotherapy">Dr. Olivia Reed</td>
            </tr>
            <tr>
                <td class="time-col" class="lunch-row">12:00 - 1:00</td>
                <td colspan="5" class="lunch-break">Lunch Break</td>
            </tr>
            <tr>
                <td class="time-col">1:00 - 2:00</td>
                <td class="doctor" data-specialty="Sports Rehabilitation">Dr. Michael Adams</td>
                <td class="doctor" data-specialty="Sports Physiotherapy">Dr. Emma Carter</td>
                <td class="doctor" data-specialty="Athletic Training">Dr. James Brooks</td>
                <td class="doctor" data-specialty="Musculoskeletal Physiotherapy">Dr. Olivia Reed</td>
                <td class="doctor" data-specialty="Exercise Physiology">Dr. Daniel Smith</td>
            </tr>
            <tr>
                <td class="time-col">2:00 - 3:00</td>
                <td class="doctor" data-specialty="Sports Physiotherapy">Dr. Emma Carter</td>
                <td class="doctor" data-specialty="Exercise Physiology">Dr. Daniel Smith</td>
                <td class="doctor" data-specialty="Athletic Training">Dr. James Brooks</td>
                <td class="doctor" data-specialty="Sports Rehabilitation">Dr. Michael Adams</td>
                <td class="doctor" data-specialty="Musculoskeletal Physiotherapy">Dr. Olivia Reed</td>
            </tr>
            <tr>
                <td class="time-col">3:00 - 4:00</td>
                <td class="doctor" data-specialty="Exercise Physiology">Dr. Daniel Smith</td>
                <td class="doctor" data-specialty="Sports Rehabilitation">Dr. Michael Adams</td>
                <td class="doctor" data-specialty="Sports Physiotherapy">Dr. Emma Carter</td>
                <td class="doctor" data-specialty="Musculoskeletal Physiotherapy">Dr. Olivia Reed</td>
                <td class="doctor" data-specialty="Athletic Training">Dr. James Brooks</td>
            </tr>
            <tr>
                <td class="time-col">4:00 - 5:00</td>
                <td class="doctor" data-specialty="Athletic Training">Dr. James Brooks</td>
                <td class="doctor" data-specialty="Musculoskeletal Physiotherapy">Dr. Olivia Reed</td>
                <td class="doctor" data-specialty="Sports Rehabilitation">Dr. Michael Adams</td>
                <td class="doctor" data-specialty="Exercise Physiology">Dr. Daniel Smith</td>
                <td class="doctor" data-specialty="Sports Physiotherapy">Dr. Emma Carter</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div> 
</div>
<?php include 'footer.php'?>
</body>
</html>