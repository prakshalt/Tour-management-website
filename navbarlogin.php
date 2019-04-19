<!DOCTYPE html>
<html>
<head>
  
  <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="Brand.svg" width="60" height="30" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" id='homelink'>
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown" id='serviceslink'>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <h4 class="dropdown-header">Packages</h4>
           <a class="dropdown-item" href="international.php" id='intlink'>International Packages</a>
           <a class="dropdown-item" href="india.php" id='indlink'>India Packages</a>
        </div>
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu">
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>-->
      </li>
      <li class="nav-item" id='contactus'>
        <a class="nav-link" href="contactus.php" >Contact us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">

      <a class="nav-link" id="logoutlink" style="color: white;" href="#" data-toggle="modal" data-target="#logoutmodal">Logout <span class="sr-only">(current)</span></a>
     <a class="nav-link" href="profile.php"><span class="fa fa-user-circle-o" style="font-size:36px;color: #FFCC00;"></span></a>
     <p style="color: white;">
     <?php 
     // if(isset($_SESSION['username']))
      //  echo $_SESSION['username'];
     ?></p>
    
    </div>
  </div>
</nav>
</body>
</html>