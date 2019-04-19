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
/*.card img:hover {
  opacity: 0.5;
}*/
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
        require('navbarlogin.php');
      }
      else
      {
        require('navbar.php');
        
      }
      require('carousel.html');
     ?>
<!---------------------------------End of navbar,start of carousel--------------------------------->
 <script type="text/javascript">
    //console.log('in');
    var element=document.getElementById('homelink');
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
    echo "hi";
    header("location: http://localhost/wt_oep/oep/navbar.php");
} 
//echo "Connected successfully<br>";
mysqli_select_db($conn,"wt_oep");
$sql="Select title,smalldesc,price,image,packageid from packages where type='int'";
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
       <button type='button' class='btn btn-outline-warning mt-4 mb-4' id='".$row['packageid']."' onClick='setpackage(this.id)' >View details</button>
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
?>
<!--------------------------------------------------End of card group----------------------------------------------------------------------->
<div class="container">
  <div class="row">
    <div class="col text-center">
     <button type="button" class="btn btn-outline-warning mt-4 mb-4" onclick="show_int()">See more</button>
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
$sql="Select title,smalldesc,price,image,packageid from packages where type='in'";
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
      <button type='button' class='btn btn-outline-warning mt-4 mb-4' id='".$row['packageid']."' onclick='setpackage(this.id)' >View details</button>
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
?>

<div class="container">
  <div class="row">
    <div class="col text-center">
     <button type="button" class="btn btn-outline-warning mt-4 mb-4" onclick="show_ind()">See more</button>
    </div>
  </div>
</div>
</div>
<hr>
<!-----------------------End of India packages------------------------------------>
<!-----------------------Start of footer---------------------------->
<?php
require('footer.html');

?>
<!---------------------------------End of footer-------------------------------->	


</body>
</html>