<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt_oep";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$userid=$_SESSION['userid'];
$pid=$_SESSION['pid'];
$count=$_REQUEST['pass_count'];
$mnumber=$_REQUEST['mnumber'];
$address=$_REQUEST['address'];
$sql = "INSERT INTO bookings (userid, packageid, mnumber,address)
VALUES (".$userid.", '".$pid."', ".$mnumber.",'".$address."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT bid FROM bookings WHERE userid=".$userid." AND mnumber=".$mnumber;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "bid: " . $row["bid"]."<br>";
        $bid=$row['bid'];
    }
} else {
    echo "fail";
}
$stmt = $conn->prepare("INSERT INTO bookinginfo (bid,name, gender,bdate) VALUES (?, ?, ?,?)");
$stmt->bind_param("isss", $bid,$name, $gender, $bdate);

for($i=0;$i<$count;$i++)
{
	 $name=$_REQUEST['name'.$i];
	$gender=$_REQUEST['gender'.$i];
	 $bdate=$_REQUEST['bdate'.$i];
	 $stmt->execute();
	 //echo $name.$gender.$bdate.$mnumber.$address;
}
echo "success";
$stmt->close();
$conn->close();
?>
