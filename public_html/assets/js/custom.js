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

function myform() {
    var email = document.getElementById("email").value;
    var x = document.getElementById("myDIV");
    var r = document.getElementById("myDIV2");
    if (email !=""){
        if (x.style.display === "none") {
            x.style.display = "block";
            r.style.display = "none";
            
        } else {
            x.style.display = "none";
            r.style.display = "block";
        }
    }
    else{
        alert('isi Email');
    }
}

function myform2() {
    
    var r = document.getElementById("myDIV2");
    var y = document.getElementById("myDIV3");
    
        if (r.style.display === "block") {
            r.style.display = "none";
            y.style.display = "block";
            return false;
        } else {
            r.style.display = "block";
            y.style.display = "none";
        }
    }
function myform3() {
    var mydiv11 = document.getElementById("mydiv11").value;
    var mydiv12 = document.getElementById("mydiv12").value;
    var mydiv13 = document.getElementById("mydiv13").value;
    var mydiv14 = document.getElementById("mydiv14").value;
    var mydiv15 = document.getElementById("mydiv15").value;
    var mydiv16 = document.getElementById("mydiv16").value;
    var mydiv17 = document.getElementById("mydiv17").value;
    var mydiv18 = document.getElementById("mydiv18").value;
    var y = document.getElementById("myDIV3");
    var z = document.getElementById("myDIV4");
    if (mydiv11 !="" && mydiv12 !="" && mydiv13 !="" && mydiv14 !="" && mydiv15 !="" && mydiv16 !="" && mydiv17 !="" && mydiv18 !=""){
        if (y.style.display === "block") {
            y.style.display = "none";
            z.style.display = "block";
            return false;
            
        } else {
            y.style.display = "block";
            z.style.display = "none";
        }}
    else{
            alert('Isi Data Dengan Lengkap');
        }
    }
function myform4() {
var z = document.getElementById("myDIV4");
var a = document.getElementById("myDIV5");
    if (z.style.display === "block") {
        z.style.display = "none";
        a.style.display = "block";
        return false;
        
    } else {
        z.style.display = "block";
        a.style.display = "none";
    }
    }
function myform5() {
var a = document.getElementById("myDIV5");
var b = document.getElementById("myDIV6");
    if (a.style.display === "block") {
        a.style.display = "none";
        b.style.display = "block";
        return false;
        
    } else {
        a.style.display = "block";
        b.style.display = "none";
    }
    }
function myform6() {
var b = document.getElementById("myDIV6");
var c = document.getElementById("myDIV7");
    if (b.style.display === "block") {
        b.style.display = "none";
        c.style.display = "block";
        return false;
        
    } else {
        b.style.display = "block";
        c.style.display = "none";
    }
    }
function myform7() {
    var mydiv51 = document.getElementById("mydiv51").value;
    var mydiv52 = document.getElementById("mydiv52").value;
    var mydiv53 = document.getElementById("mydiv53").value;
    var mydiv54 = document.getElementById("mydiv54").value;
    var c = document.getElementById("myDIV7");
    var d = document.getElementById("myDIV8");
    if (mydiv51 !="" && mydiv52 !="" && mydiv53 !="" && mydiv54 !="" ) {
        if (c.style.display === "block") {
            c.style.display = "none";
            d.style.display = "block";
            return false;
            
        } else {
            c.style.display = "block";
            d.style.display = "none";
        }
    }
    else{
        alert('Isi Data Dengan Lengkap');
    }
    }
    
function myform8() {
var d = document.getElementById("myDIV8");
var e = document.getElementById("myDIV9");
    if (d.style.display === "block") {
        d.style.display = "none";
        e.style.display = "block";
        return false;
        
    } else {
        d.style.display = "block";
        e.style.display = "none";
    }
    }
function myform9() {
var e = document.getElementById("myDIV9");
var f = document.getElementById("myDIV10");
    if (e.style.display === "block") {
        e.style.display = "none";
        f.style.display = "block";
        return false;
        
    } else {
        e.style.display = "block";
        f.style.display = "none";
    }
    }
function myform10() {
var f = document.getElementById("myDIV10");
var g = document.getElementById("myDIV11");
    if (f.style.display === "block") {
        f.style.display = "none";
        g.style.display = "block";
        return false;
        
    } else {
        f.style.display = "block";
        g.style.display = "none";
    }
    }
function myform11() {
var f = document.getElementById("myDIV11");
var h = document.getElementById("myDIV12");
    if (f.style.display === "block") {
        f.style.display = "none";
        h.style.display = "block";
        return false;
        
    } else {
        f.style.display = "block";
        h.style.display = "none";
    }
    }
function myform12() {
var g = document.getElementById("myDIV12")
    if (g.style.display === "block") {
        g.style.display = "none";
        m.disabled = false;
    } else {
        g.style.display = "block";
        m.disabled = false;
    }
    }
        