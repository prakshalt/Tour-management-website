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

  <script src="functions.js"></script>

	<title></title>
   <style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
 
</style>

</head>
<body>

<?php 
      if(isset($_SESSION['username']))
      {
        include('navbarlogin.php');
        include('logoutmodal.html');
      }
      else
      {
        include('navbar.php');
        include('registermodal.html');
        include('loginmodal.html');
        include('loginsuccessmodal.html');
      }
     ?>
<script type="text/javascript">
    //console.log('in');
    var element=document.getElementById('indlink');
    element.classList.add("active");
    var element2=document.getElementById('serviceslink');
    element2.classList.add("active");
  </script>
<h1>India Tour Packages</h1>

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
  		echo "</div><br>";	
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
<?php
include('footer.html');

?>
</body>
</html>