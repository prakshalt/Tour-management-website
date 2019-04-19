$(document).ready(function(){
  
   $("#logoutmodalyes").click(function(){
    logout();
  });
   $("#bookloginmodalyes").click(function(){
    $("#loginModal").modal();
  });
   $("#signupinlogin").click(function(){
   	$("#dismissloginmodal").trigger("click");
   $("#registrationModal").modal();
  });
   $("#successok").click(function(){
   // if(document.getElementById('successp').innerHTML=="")
   var pval=$("#successpara").text();
  // pval=toString(pval);
  // console.log(pval);
   sval="Registration successful!";
   sval2="Login successful!"
   //console.log(sval);
    if(pval==sval)
    {
        $("#logininnav").trigger("click");
        clearregmodal();
    }
    if(pval==sval2)
    {
      document.location.reload(true);
     // window.location.replace("http://localhost/wt_oep/oep/login.php");
    }
   });

   $("#closeregmodal").click(function(){
    clearregmodal();
   });
   $("#closeregmodal2").click(function(){
    clearregmodal();
   });
  /* $("#registerbtn").click(function(){
  //console.log("hi");  
   var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log("hi");
       // Typical action to be performed when the document is ready:
    
    //$("#closeregmodal").trigger("click");
     
    //  console.log(xhttp.responseText);
      //alert("Registration Successful");
       $("#rsm").modal();
       //alert("Registration Successful");
       return false;
       //$("#registrationsuccessModal").modal();
    }
};

var username=document.getElementById('username').value;
var pwd=document.getElementById('password').value;
//console.log(username+password);
xhttp.open("POST", "register.php", true);
xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhttp.send('username='+username+'&password='+pwd);
});
*/
});

function clearregmodal(){
var username=document.getElementById('username');
var pwd=document.getElementById('password');
var cpwd=document.getElementById('cpsw');
username.value="";
pwd.value="";
cpwd.value="";
}
function show_int()
{
    window.location.href="http://localhost/wt_oep/oep/international.php";
}
function setpackage(pid){
  console.log(pid);
  var dataString ='pid=' + pid;
  $.ajax({
type: "POST",
url: "setpackage.php",
data: dataString,
cache: false,
success: function(html) {
  //alert(html);
  //console.log("in logout()");
//  document.location.reload(true);
  window.location.href="http://localhost/wt_oep/oep/packagedetail.php";
}
});
}
function search()
{
  alert('hi');
}
function show_ind()
{
    window.location.href="http://localhost/wt_oep/oep/india.php";
}

function logout(){
  console.log("Inside loginvalidate()");
$.ajax({
type: "POST",
url: "logout.php",
cache: false,
success: function(html) {
  //alert(html);
  console.log("in logout()");
  document.location.reload(true);
 // window.location.replace("http://localhost/wt_oep/oep/index.php");
}
});
}
function clearloginmodal(){
var username=document.getElementById('lusername');
var pwd=document.getElementById('lpassword');
username.value="";
pwd.value="";
}
function loginvalidate(){
  console.log("Inside loginvalidate()");
var username=document.getElementById('lusername').value;
var pwd=document.getElementById('lpassword').value;
var p1=document.getElementById('successpara');
var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var dataString = 'username='+username+'&password='+pwd;
if (username == '' || pwd == '')
{
p1.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>Please fill out all fields";
$("#rsm").modal();
} 
else if(reg.test(username)==false)
{
p1.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>Enter valid email address";
$("#rsm").modal();
}
else
{
$.ajax({
type: "POST",
url: "loginvalidate.php",
data: dataString,
cache: false,
success: function(html) {
  //alert(html);
 $("#dismissloginmodal").trigger("click");
 if(html=="false")
 {
  p1.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>Incorrect username or password";
 }
 else if(html=="no user")
 {
  p1.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>NO such user exists";
 }
 else
 {
  p1.innerHTML="<span class='fa fa-check-circle' style='font-size:30px;color:green'></span>Login successful!"; 
 }
 
  $("#rsm").modal();
  document.location.reload(true);
//alert(html);
}
});
}
return false;
}
function myFunction() {
var username=document.getElementById('username').value;
var pwd=document.getElementById('password').value;
var cpwd=document.getElementById('cpsw').value;
var p=document.getElementById('successp');
var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'username='+username+'&password='+pwd;
if (username == '' || pwd == '' || cpwd=='')
{
p.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>Please fill out all fields";
$("#rsm").modal();
} 
else if(reg.test(username)==false)
{
p.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>Enter valid email address";
$("#rsm").modal();
}
else if(pwd!=cpwd)
{
p.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>Passwords do not match";
$("#rsm").modal();
}
else
{
$.ajax({
type: "POST",
url: "register.php",
data: dataString,
cache: false,
success: function(html) {
 $("#closeregmodal").trigger("click");
 if(html=="already")
 {
  p.innerHTML="<span class='fa fa-exclamation-circle' style='font-size:30px;color:red'></span>Already registered with this account";
 }
 else
 {
  p.innerHTML="<span class='fa fa-check-circle' style='font-size:30px;color:green'></span>Registration successful!"; 
 }
 
  $("#rsm").modal();
//alert(html);
}
});
}
return false;
}
