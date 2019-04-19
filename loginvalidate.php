<?php
session_start();
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
$sql="Select userid,password from users where email='".$username."'";
//echo $sql;
//echo $username.$password;
if($res = $conn->query($sql)){ 
    if($res->num_rows > 0){ 
    		while($row = $res->fetch_assoc()) {
                if($row["password"]==$password)
                {
                    echo "true";
                    $_SESSION['username']=$username;
                    $_SESSION['userid']=$row["userid"];
                }
                else
                {
                    echo "false";
                }
    }
    	}
    else
    {
    	echo "no user";
    }
}

$conn->close();
//$newURL='index.php';
//header('Location: '.$newURL);
//die();
?>
