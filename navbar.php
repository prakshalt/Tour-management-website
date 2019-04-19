<!DOCTYPE html>
<html>
<head>
    <script src="functions.js"></script>
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
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#" id='registerinnav' data-toggle="modal" data-target="#registrationModal">Register <span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id='logininnav' data-toggle="modal" data-target="#loginModal">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id='contactus'>
        <a class="nav-link" href="contactus.php"  >Contact us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" onclick="search()">Search</button>
    </form>
  </div>
</nav>
</body>
</html>