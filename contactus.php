<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="functions.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
h1{
	margin-top: 40px;
	text-align: center;
	background-color: #FC0;
	margin-bottom: 40px;
}
</style>

	<title>Tours</title>
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
     ?>
<!---------------------------------End of navbar,start of carousel--------------------------------->
 <script type="text/javascript">
    //console.log('in');
    var element=document.getElementById('contactus');
    element.classList.add("active");
  </script>
<!-------------------------------------------------Start of login modal---------------------------------->
  <!-- Modal -->
  <?php
  require('loginmodal.html');
  require('logoutmodal.html');
  ?>
<!-------------------------------------------------End of login modal---------------------------------->
<!-------------------------------------------------Start of Register modal---------------------------------->
<!-- Modal -->
  <?php 

require('registermodal.html');
  ?>
<!-------------------------------------------------End of Register modal---------------------------------->
<?php
require('loginsuccessmodal.html');

?>
<h1>Contact us</h1>
<div class='container'>
  <div class='row'>
    <div class='col text-center'>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.5087391160155!2d72.9175419147281!3d22.560068285189168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e1285d628d5%3A0xe6cee346bfaa35d0!2sG+H+Patel+College+of+Engineering+%26+Technology!5e0!3m2!1sen!2sin!4v1553877151802!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;margin-bottom: 40px;" allowfullscreen></iframe>
</div>
</div>
</div>
<div class='container'>
  <div class='row'>
    <div class='col text-center'>
<p><b>Email address</b>:	prakshaltrivedi1312@gmail.com</p>
<p><b>Contact number:</b> Number here </p>
<p><b>Write to us:</b>P.O. box address here</p>
</div>
</div>
</div>
<?php
require('footer.html');

?>
</body>
</html>