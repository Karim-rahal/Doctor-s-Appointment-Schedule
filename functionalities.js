
//FAQ plus icon to show answer is written internally in faq.html since the event listener is affecting the other event listeners 


/*Clicking on Menu Image to get a right div*/
document.getElementById("MenuImage").addEventListener("click", function (event) {
    event.stopPropagation(); // Prevent closing when clicking the button
    document.getElementById("Right-Menu").classList.toggle("show");


});
/*Clicking on More to get a more choices*/
document.getElementById("MoreMenu").addEventListener("click", function (event) {
    event.stopPropagation(); // Prevent closing when clicking the button
    document.getElementById("DropdownMenu-More").classList.toggle("show");
});
/*Close the menu when clicking outside*/
document.addEventListener("click", function (event) {
    const RightMenu = document.getElementById("Right-Menu");
    const menuIcon = document.getElementById("MenuImage");

    if (!RightMenu.contains(event.target) && event.target !== menuIcon) {
        RightMenu.classList.remove("show");
    }
});
document.addEventListener("click", function (event) {
    const dropdownMenu = document.getElementById("DropdownMenu-More");
    const menuIcon = document.getElementById("MoreMenu");

    if (!dropdownMenu.contains(event.target) && event.target !== menuIcon) {
        dropdownMenu.classList.remove("show");
    }
});
//*Close the right div by clicking X image*//
document.getElementById("X-Circle").addEventListener("click", function (event) {
    event.stopPropagation(); //Prevent closing when clicking the button
    document.getElementById("Right-Menu").classList.toggle("show");
});
const appbtn=document.getElementById("app-btn");
if(appbtn)
{appbtn.addEventListener("click", function() {
    window.location.href = "Appointment.php"; 
});
}
//Error message appearance

//These are done by jquery
function showError(message) {
    $('#errorMessage').text(message).css('color', 'red');
    $('#error').css('display', 'flex');
    $('body').addClass('error-active');
}

function showSuccess(message) {
    $('#errorMessage').text(message).css('color', 'green');
    $('#error').css('display', 'flex');
    $('body').addClass('error-active');
}
//AJAX


$(document).ready(function(){
    $('#faqForm').on('submit',function(e){
        e.preventDefault(); 

        $.ajax({
            url:'faq.php',
            type:'POST',
            data:{
                question:$('#Question').val()
            },
            success:function(response){
                $('#faqResponse').text(response).css('color', 'green');
                $('#faqForm')[0].reset();
            },
            error:function(){
                $('#faqResponse').text('Something went wrong.').css('color','red');
            }
        });
    });
});
$(document).ready(function(){
    $('#messageForm').on('submit',function(e){
        e.preventDefault(); 

        $.ajax({
            url:'contactUs.php',
            type:'POST',
            data:{
                message:$('#Message').val()
            },
            success:function(response){
                $('#messageResponse').text(response).css('color', 'green');
                $('#messageForm')[0].reset();
            },
            error:function(){
                $('#messageResponse').text('Something went wrong.').css('color','red');
            }
        });
    });
});






