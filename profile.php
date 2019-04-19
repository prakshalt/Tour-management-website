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
th{
	font-size: 25px;
}
</style>

</head>
<?php

?>
<?php
  if(isset($_SESSION['username']))
      {
        require('navbarlogin.php');
          require('loginmodal.html');
require('registermodal.html');
require('loginsuccessmodal.html');
//
 require('logoutmodal.html');
      }
      else
      {
        header('Location: http://localhost/wt_oep/oep/index.php');
        
      }
      echo "<h2 style='background-color:#FC0;font-size:40px;margin:0;text-align:center;'>My tours</h1>";
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt_oep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  bookings.bid,bookings.mnumber, bookings.address,bookinginfo.name,bookinginfo.gender,bookinginfo.bdate,packages.title FROM bookings INNER JOIN bookinginfo ON bookings.bid=bookinginfo.bid INNER JOIN packages ON bookings.packageid=packages.packageid WHERE bookings.userid=".$_SESSION['userid'];
$result = $conn->query($sql);

echo "<table class='table table-striped'>
		<thead class='thead-dark'>
		<th scope='col'>Booking ID</th>
		<th scope='col'>Name</th>
		<th scope='col'>Gender</th>
		<th scope='col'>Birthdate</th>
		<th scope='col'>Mobile number</th>
		<th scope='col'>Address</th>
		<th scope='col'>Tour</th>
		</thead>
		<tbody>

";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
        echo "<td>".$row["bid"]."</td><td>" . $row["name"]. "</td><td>" . $row["gender"]. "</td><td>".$row["bdate"]."</td><td>" . $row["mnumber"].   "</td><td>".$row["address"]."</td><td>".$row["title"]."</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
$conn->close();

 ?>