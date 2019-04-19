<?php
session_start();
?>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

 

	<title></title>
   <style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
</style>

</head>
<body>
<?php
  if(isset($_SESSION['username']))
      {
        require('navbarlogin.php');
      }
      else
      {
        require('navbar.php');
        
      }
        require('loginmodal.html');
require('registermodal.html');
require('loginsuccessmodal.html');
//
 require('logoutmodal.html');
 ?>
 
 
<div style="text-align:center;"><span class="fa fa-check-circle" style="font-size:100px;color:green;margin:0;"></span></div>
<h2 style='font-size:50px;background-color:#FFCC00; text-align:center;margin:0;'>Thank you for booking with us!</h2>
<h4 style="text-align: center;">An email will be sent to you for the same on your registered address.</h4>
</body>
 <script src="functions.js"></script>
 </html>