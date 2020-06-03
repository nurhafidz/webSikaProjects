function myFunction() {
    $.ajax({
        url: "admin/view_notification.php",
        type: "POST",
        processData:false,
        success: function(data){
            $("#notification-count").remove();					
            $("#notification-latest").show();$("#notification-latest").html(data);
        },
        error: function(){}           
    });
 }
 
 $(document).ready(function() {
    $('body').click(function(e){
        if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
        }
    });
});
     

function validate(){

    var a = document.getElementById("makepassword").value;
    var b = document.getElementById("confirm_password").value;
    if (a!=b) {
    alert("Passwords do no match");
    return false;
    }
    }