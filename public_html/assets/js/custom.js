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
var mydiv21 =  document.getElementById('mydiv21').value;
var mydiv22 =  document.getElementById('mydiv22').value;
var mydiv23 =  document.getElementById('mydiv23').value;
var mydiv24 =  document.getElementById('mydiv24').value;
var z = document.getElementById("myDIV4");
var a = document.getElementById("myDIV5");
if (mydiv21 !=""&&mydiv22 !=""&&mydiv23 !=""&&mydiv24 !=""){
        if (z.style.display === "block") {
            z.style.display = "none";
            a.style.display = "block";
            return false;
            
        } else {
            z.style.display = "block";
            a.style.display = "none";
        }}
    else{
        alert('Isi Data Dengan Lengkap');
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
var mydiv61 = document.getElementById("mydiv61").value;
var mydiv62 = document.getElementById("mydiv62").value;
var mydiv63 = document.getElementById("mydiv63").value;
var mydiv64 = document.getElementById("mydiv64").value;
var mydiv65 = document.getElementById("mydiv65").value;
var mydiv66 = document.getElementById("mydiv66").value;
var e = document.getElementById("myDIV9");
var f = document.getElementById("myDIV10");
if(mydiv61 !=""&& mydiv62 !=""&& mydiv63 !=""&& mydiv64 !=""&& mydiv65 !=""&& mydiv66 !=""){
        if (e.style.display === "block") {
            e.style.display = "none";
            f.style.display = "block";
            return false;
            
        } else {
            e.style.display = "block";
            f.style.display = "none";
        }
    }else{
        alert('Isi Data Dengan Lengkap');
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
var mydiv92= document.getElementById("mydiv92"); 
var mydiv93= document.getElementById("mydiv93"); 
var mydiv94= document.getElementById("mydiv94"); 
var f = document.getElementById("myDIV11");
var h = document.getElementById("myDIV12");
if(mydiv92!=""&& mydiv93!=""&& mydiv94!=""){
    if (f.style.display === "block") {
        f.style.display = "none";
        h.style.display = "block";
        return false;
        
    } else {
        f.style.display = "block";
        h.style.display = "none";
    }}
    else{
        alert('Isi Data Dengan Lengkap');
    }
    }
function myform12() {
var mydiv101 = document.getElementById("mydiv101");
var mydiv102 = document.getElementById("mydiv102");
var mydiv103 = document.getElementById("mydiv103");
var mydiv104 = document.getElementById("mydiv104");
var mydiv106 = document.getElementById("mydiv106");
var mydiv107 = document.getElementById("mydiv107");
var mydiv108 = document.getElementById("mydiv108");
var mydiv109 = document.getElementById("mydiv109");
var mydiv1010 = document.getElementById("mydiv1010");
var mydiv1011 = document.getElementById("mydiv1011");
var mydiv1012 = document.getElementById("mydiv1012");
var mydiv1013 = document.getElementById("mydiv1013");
var mydiv1014 = document.getElementById("mydiv1014");
var mydiv1015 = document.getElementById("mydiv1015");
var g = document.getElementById("myDIV12")
if (mydiv101 !="" &&    mydiv102 !="" && mydiv103 !="" && mydiv104 !="" && mydiv106 !="" && mydiv107 !="" && mydiv108 !="" && mydiv109 !="" && mydiv1010 !="" && mydiv1011 !="" && mydiv1012 !="" && mydiv1013 !="" && mydiv1014 !="" && mydiv1015 !=""  ) {
    

    if (g.style.display === "block") {
        g.style.display = "none";
    } else {
        g.style.display = "block";
    }}
    else{
        alert('Isi Data Dengan Lengkap');
        return false;
    }
    }
        