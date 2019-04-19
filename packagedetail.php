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
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 30px; /* Increase font size */
}

#myBtn:hover {
  background-color: #FC0; /* Add a dark-grey background on hover */
}
</style>

</head>
<?php
  require('loginmodal.html');
require('registermodal.html');
require('loginsuccessmodal.html');
//
 require('logoutmodal.html');
?>
<?php
  if(isset($_SESSION['username']))
      {
        require('navbarlogin.php');
      }
      else
      {
        require('navbar.php');
        
      }
require('bookmodal.html');
  if(isset($_SESSION['pid']))
  {
 $pid=$_SESSION['pid'];
 //echo $pid;
$myfile = fopen("packages/".$pid.".txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  $line=fgets($myfile);
   if(substr($line,0,5)=="type:")
  {
  	$incs=substr_replace($line, "", 0,5);
  	echo "<input type='hidden' id='type' value='".$incs."'>";
  }
   if(substr($line,0,6)=="title:")
  {
  	$incs=substr_replace($line, "", 0,6);
  	echo "<h2 style='font-size:50px;background-color:#FFCC00; text-align:center;margin:0;'>".$incs."</h2>";
  }
  if(substr($line,0,6)=="image:")
  {
  	$incs=substr_replace($line, "", 0,6);
  	echo "<img class='d-block w-100' src='".$incs."' alt='image'>";
  }
  if(substr($line,0,6)=="price:")
  {
  	$incs=substr_replace($line, "", 0,6);
  	echo "<h2 style='font-size:50px;background-color:#FFCC00; text-align:center;margin:0;'>".$incs."</h2>";
  	  if(isset($_SESSION['username'])){
  	  	echo "<div class='container'>
  <div class='row'>
    <div class='col text-center'>
     <button type='button' class='btn btn-outline-warning mt-4 mb-4' data-toggle='modal' data-target='#bookModal' id='booknow' style='font-size:40px;'>Book now</button>
    </div>
  </div>
</div>
</div>";
  	  }
  	  else
  	  {
  	  	echo "<div class='container'>
  <div class='row'>
    <div class='col text-center'>
     <button type='button' class='btn btn-outline-warning mt-4 mb-4' data-toggle='modal' data-target='#bookloginModal' id='bookloginnow' style='font-size:40px;'>Book now</button>
    </div>
  </div>
</div>
</div>";
  	  }
  	 
  }
  if(substr($line,0,11)=="inclusions:")
  {
  	$incs=trim(substr_replace($line, "", 0,11));
  	$inc_array=explode(",",$incs);
  	echo "<div class='container'>
  	<h1>Inclusions</h1>
  <div class='row'>";
  //print_r($inc_array);
  foreach($inc_array as $x) {
  	if($x=="taxi")
    {
    	echo "<div class='col text-center'>
     		<span class='fa fa-taxi' style='font-size: 30px;' ></span>
     		<p style='font-size: 30px'>Taxi</p>
    </div>";
    }
    if($x=="flights")
    {
    	echo "<div class='col text-center'>
     		<span class='fa fa-plane' style='font-size: 30px;' ></span>
     		<p style='font-size: 30px'>Flights</p>
    </div>";
    }
    if($x=="hotels")
    {
    	echo "<div class='col text-center'>
     		<span class='fa fa-hotel' style='font-size: 30px;' ></span>
     		<p style='font-size: 30px'>Hotels</p>
    </div>";
    }
    if($x=="visa")
    {
    	echo "<div class='col text-center'>
     		<span class='fa fa-book' style='font-size: 30px;' ></span>
     		<p style='font-size: 30px'>Visa</p>
    </div>";
    }
    if($x=="food")
    {
    	echo "<div class='col text-center'>
     		<span class='fa fa-cutlery' style='font-size: 30px;' ></span>
     		<p style='font-size: 30px'>Food</p>
    </div>";
    }
    
}
echo "</div></div>";
  }


 // $line=fgets($myfile);
   if(substr($line,0,9)=="overview:")
  {
  	$incs=substr_replace($line, "", 0,9);
  	echo "<div class='container-fluid bg-dark'>
  	<h1 style='color:#FFCC00;'>Overview</h1>
  <div class='row'>";
  //print_r($inc_array);
    	echo "<div class='col text-center'>
     		<p style='font-size: 20px;color:white;'>".$incs."</p>
    </div>";
  
    echo "</div></div>";
  }


   //$line=fgets($myfile);
   if(substr($line,0,10)=="itinerary:")
  {
  		//echo "in it";
  		$cnt=0;
  		while(!feof($myfile)) {
  		if($cnt%2==0)
  		{
  		$line=fgets($myfile);
  			echo "<div class='container-fluid'>";
  
  		if(substr($line,0,3)=="Day")
  		{
  				echo"<h1 >".$line."</h1>
  				<div class='row'>";
  				/*echo "	<span class='fa-stack fa-3x align'>
  				<i class='fa fa-circle-o fa-stack-2x'></i>
  				<strong class='fa-stack-1x' style='color:red;'>".substr($line,4,1)."</strong>
				</span>";*/
  				$line=fgets($myfile);
  			
    			echo "<div class='col text-center'>
     			<p style='font-size: 20px'>".$line."</p>
    			</div>";
  
    			echo "</div>";
  		}
  		echo "</div>";
  		$line=fgets($myfile);
  		//$line=fgets($myfile);
  	}
  	if($cnt%2==0)
  		{
  		$line=fgets($myfile);
  			echo "<div class='container-fluid bg-dark'>";
  
  		if(substr($line,0,3)=="Day")
  		{
  				echo"<h1 style='color:#FFCC00;'>".$line."</h1>
  				<div class='row'>";
  				
  				$line=fgets($myfile);
  			
    			echo "<div class='col text-center'>
     			<p style='font-size: 20px; color:white;' >".$line."</p>
    			</div>";
    			/*echo "	<span class='fa-stack fa-3x'>
  				<i class='fa fa-circle-o fa-stack-2x' style='color:white'></i>
  				<strong class='fa-stack-1x' style='color:red;'>".substr($line,4,1)."</strong>
				</span>";*/
  
    			echo "</div>";
  		}
  		echo "</div>";
  		$line=fgets($myfile);
  		//$line=fgets($myfile);
  	}
  	$cnt=$cnt+1;
  }
  			//echo $line;
  }
}
fclose($myfile);
}

require('footer.html');
?>
 <script type="text/javascript">
    var element2=document.getElementById('serviceslink');
    element2.classList.add("active");
    var type=document.getElementById('type');
    var typestr=type.value.trim();
   // console.log(typestr+"  hi");
    if(typestr=="in")
    {
    //	console.log("in in");
    	var element=document.getElementById('indlink');
   		element.classList.add("active");
    }
    if(typestr=="int")
    {
    //	console.log("in int");
    	 var element=document.getElementById('intlink');
   		 element.classList.add("active");
    }
 

 	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

  </script>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-circle-up"></span></button>
  </html>