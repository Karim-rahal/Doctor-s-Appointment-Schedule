<?php  session_start();
require 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $question=$_POST["question"];
    if($question!== ""){
    $stmt=$conn->prepare("INSERT faq (question) VALUES (?)");
    $stmt->bind_param("s",$question);
     if($stmt->execute()){
        echo"Question submitted successfully.";
       
    }
    else{
        echo"Error submitting question.";
    }
}
exit;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="icon" href="images/logo-pic-c.png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&family=Phudu:wght@300..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
   </head>
<body>
<?php include 'navbar.php'?>
<div class="container">
    <div class="faq-container">
    <div class="faq">
        <h1>FAQ Page</h1>
        <div class="question">
            <h3>
                <img src="images/plus-circle.svg" class="plus-icon" id="icon-1" alt="plus">
                 What is physiotherapy?
                </h3>
        </div>
        <div class="answer answer-1" >
            <p>Physiotherapy is a healthcare profession focused on assessing, diagnosing, and treating movement disorders caused by injury, illness, or disability. It uses exercises, manual therapy, and other techniques to improve movement, reduce pain, and promote recovery.</p>
        </div>
        <div class="question">
            <h3><img src="images/plus-circle.svg" class="plus-icon" id="icon-2" alt="plus"> What conditions can physiotherapy treat?</h3>
        </div>
        <div class="answer answer-2">
            <p >Physiotherapy can help treat a wide range of conditions, including back and neck pain, sports injuries, arthritis, neurological disorders, post-surgical rehabilitation, and chronic pain.</p>
        </div>
        <div class="question">
            <h3><img src="images/plus-circle.svg" class="plus-icon" id="icon-3" alt="plus"> How long will my physiotherapy treatment take?</h3>
        </div>
        <div class="answer answer-3">
            <p >The length of treatment varies depending on the condition and individual needs. Initial assessments usually last 45-60 minutes, and subsequent sessions can range from 30-60 minutes, typically requiring 5-10 sessions.</p>
        </div>
        <div class="question">
            <h3><img src="images/plus-circle.svg" class="plus-icon" id="icon-4" alt="plus"> Do I need a referral to see a physiotherapist?</h3>
        </div>
        <div class="answer answer-4">
            <p >In many places, a referral is not required to see a physiotherapist. However, some insurance plans or specific medical conditions may require a referral from a doctor.</p>
        </div>
        <div class="question">
            <h3><img src="images/plus-circle.svg" class="plus-icon" id="icon-5" alt="plus"> Will physiotherapy be painful?Do I need a referral to see a physiotherapist?</h3>
        </div>
        <div class="answer answer-5">
            <p >Physiotherapy may cause mild discomfort, especially when addressing stiff joints or tight muscles. However, your physiotherapist will work with you to ensure the treatments are comfortable and adjust techniques to minimize pain.</p>
        </div>
        <div class="question">
            <h3> <img src="images/plus-circle.svg" class="plus-icon" id="icon-6" alt="plus"> What can I expect during my first physiotherapy session?</h3>
        </div>
        <div class="answer answer-6">
            <p >During your first session, your physiotherapist will assess your condition, discuss your medical history, and create a personalized treatment plan. This may involve physical tests, exercises, or manual therapy.</p>
        </div>
        <div class="question">
            <h3><img src="images/plus-circle.svg" class="plus-icon" id="icon-7" alt="plus"> How can physiotherapy help with sports injuries?</h3>
        </div>
        <div class="answer answer-7">
            <p >In many places, a referral is not required to see a physiotherapist. However, some insurance plans or specific medical conditions may require a referral from a doctor.Physiotherapy can help treat sports injuries by improving strength, flexibility, and range of motion, while also addressing issues like muscle imbalances, joint stability, and rehabilitation after surgery.</p>
        </div>
    </div>
    <div class="faq-adds">
        <h3>Ask A Question</h3>
        <form action="faq.php" id="faqForm" method="POST">
            <textarea name="question" id="Question" required></textarea>
            <label for="Question" class="Question-label"></label>
            <br>
            <input type="submit" name="Askquestion" value="Ask Question">
            <div id="faqResponse" style="margin-top:10px;font-weight:bold;"></div>

        </form>
    </div>
   </div>
   
</div>
   </div>
<?php include 'footer.php'?>

<script>
//for showing the answers
for(var i=1;i<8;i++){
    document.getElementById("icon-"+i).addEventListener("click",function(event){
        event.stopPropagation();
        document.querySelector(".answer-"+this.id.split("-")[1]).classList.toggle("show-answer");
    
    
    })}</script>
</body>
</html>