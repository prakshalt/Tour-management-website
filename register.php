<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully<br>";
mysqli_select_db($conn,"wt_oep");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$sql="Select email from users where email='".$username."'";
//echo $sql;
//echo $username.$password;
if($res = $conn->query($sql)){ 
    if($res->num_rows > 0){ 
    		echo "already";
    	}
    else
    {
    	$sql1 = "INSERT INTO users ( email, password)
		VALUES ('$username','$password')";

		if ($conn->query($sql1) === TRUE) {
    		//echo "New record created successfully";
		} else {
    		//echo "Error: " . $sql1 . "<br>" . $conn->error;
		}
    }
}

$conn->close();
//$newURL='index.php';
//header('Location: '.$newURL);
//die();
?>
