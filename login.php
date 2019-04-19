<?php
session_start();
?>
<?php 
     	if(isset($_SESSION['username']))
     	{

     	}
     	else
     	{
     		die();
     	}
     ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script type="text/javascript">
$(document).ready(function(){
   $("#logoutmodalyes").click(function(){
   //	console.log("yes");
   	logout();
  });
});
function logout(){
  //console.log("Inside loginvalidate()");
$.ajax({
type: "POST",
url: "logout.php",
cache: false,
success: function(html) {
  //alert(html);
  window.location.replace("http://localhost/wt_oep/oep/index.php");
}
});
return false;
}



 </script>
  <style>
  /*.modal-header, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }*/
  </style>
<style type="text/css">
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	.navbar-dark .navbar-nav .nav-link {
    color: white;
	}
	.navbar-dark .navbar-nav .nav-item.active .nav-link {
		color: #FFCC00;
	}
	.btn .btn-danger .btn-default{
		padding-right: 100px;
	}
h1{
	margin-top: 40px;
	text-align: center;
	margin-bottom: 40px;
}
	/*li.active{
    background-color: #FFCC00;
	}*/
</style>
<title>Tours</title>
</head>
<body>
	<?php 
      if(isset($_SESSION['username']))
      {
      		include('navbarlogin.php');
      }
      else
      {
        
      }
     ?>
<!--------------------------------End of navbar--------------------------------------------->
<!----------------------------------Start of logout modal----------------------------------->
<div class="modal fade" id="logoutmodal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content  bg-dark">
        <div class="modal-body" style="padding:40px 50px;">
             <p style="color: white;text-align: center;font-size: 30px;" id="successp">Are you sure you want to log out?</p>
        </div>
        <div class="modal-footer">
          <button type="submit" id="logoutmodalyes" class="btn btn-block" data-dismiss="modal" style="background-color: #FFCC00;">Yes</button><br>
            <button type="submit" id="logoutmodalno" class="btn btn-block" data-dismiss="modal" style="background-color: #FFCC00;">No</button>
          
        </div>
      </div>
      
    </div>
  </div>
  <!----------------------------------End of logout modal------------------------------------------->
  <!---------------------------------------------Start of international packages--------------------------------->
<div>
<h1>International Tour Packages</h1>
<!------------------------------------------------Start of card group------------------------------>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$cnt=0;

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully<br>";
mysqli_select_db($conn,"wt_oep");
$sql="Select title,smalldesc,price,image from packages where type='int'";
//echo $sql;
//echo $username.$password;
if($res = $conn->query($sql)){ 
    if($res->num_rows > 0){ 
        while($row = $res->fetch_assoc()) {
          if($cnt<3)
          {


         if($cnt%3==0)
          { 
              echo "<div class='row'>"; 
          }
               echo "<div class='col-md-4'>
               <div class='card'>
    <img class='card-img-top' src='".$row['image']."' alt='Card image cap'>
    <div class='card-body'>
      <h5 class='card-title'>".$row['title']."</h5>
      <p class='card-text'>".$row['smalldesc']."</p>
      <p class='card-text'><small class='text-muted'>Starting with ₹".$row['price']."</small></p>
    </div>
  </div>
  </div>";    
  
      $cnt=$cnt+1;
      if($cnt%3==0)
  {
      echo "</div>";  
  }
    }
  }
      }
    else
    {
      //echo "no user";
    }
}

$conn->close();
?><!--------------------------------------------------End of card group----------------------------------------------------------------------->
<div class="container">
  <div class="row">
    <div class="col text-center">
     <button type="button" class="btn btn-outline-warning mt-4 mb-4">See more</button>
    </div>
  </div>
</div>
</div>
<hr>
<!------------------------------------------------------------End of international packages------------------------------------------------->
<!-------------------------------------------------------------Start of India packages------------------------------------------------------>
<div>
<h1>India Tour Packages</h1>
<!-----------------------------------------------------------Start of card group----------------------------------------------------------->
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/kashmir2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">11 days Kashmir Tour</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Starting with ₹80,000</small></p>
    </div>
  </div>
  
  <div class="card">
    <img class="card-img-top" src="images/goa1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">4 days Goa Tour</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Starting with ₹20,000</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/kerala1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">8 days Kerala Tour</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Starting with ₹60,000</small></p>
    </div>
  </div>
</div>
<!---------------------------End of card group------------------------>
<div class="container">
  <div class="row">
    <div class="col text-center">
     <button type="button" class="btn btn-outline-warning mt-4 mb-4">See more</button>
    </div>
  </div>
</div>
</div>
<!-----------------------End of India packages------------------------------------>
<!-----------------------Start of footer---------------------------->
<div class="container-fluid bg-dark">
	<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook" style="color: #FFCC00;font-size: 40px;margin-right: 20px;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter" style="color: #FFCC00;font-size: 40px;margin-right: 20px;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram" style="color: #FFCC00;font-size: 40px;margin-right: 20px;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus" style="color: #FFCC00;font-size: 40px;margin-right: 20px;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope" style="color: #FFCC00;font-size: 40px;margin-right: 20px;"></i></a></li>
					</ul>
				</div>
				</hr>
	</div>	
	<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p style=""><u><a href="#">Tours Corporation</a></u> is a company owned by Prakshal</p>
					<p class="h6">&copy All right Reversed.</a></p>
				</div>
				</hr>
	</div>	
</div>
<!---------------------------------End of footer-------------------------------->	