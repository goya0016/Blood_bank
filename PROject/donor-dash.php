<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Connector_files/bootstrap.css">
    <script src="Connector_files/jquery-1.8.2.min.js"></script>
    <script src="Connector_files/bootstrap.js"></script>
    
    
    
</head>
<body>
     
<!--
      As a link 
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
</nav>
-->

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  
  <div class="container"><h2>Welcome</h2>
    <a class="navbar-brand" href="#">
    Welcome:<?php echo $_SESSION["email"]; ?>
    </a>
  </div>
  
</nav>
   
   
<!--
<div class="col-md-7 mb-3">
    <img src="Pics/dog1.jfif" class="rounded float-right" alt="...">
        </div>
-->
   
   
    
<!--
<div class="card col-md-6" style="width: 18rem;">
  <img src="Pics/zeldrisss.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lionel Messi</h5>
    <p class="card-text">Always ready for your Help</p>
    <a href="http://localhost/PROject/donor-profile.php" class="btn btn-primary">Profile</a>
  </div>
</div>
 
 <div class="card2 col-md-6" style="width: 18rem;">
  <img src="Pics/dog1.jfif" class="card-img-top4" alt="...">
  <div class="card-body5">
    <h5 class="card-title7">Card title</h5>
    <p class="card-text8">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="http://localhost/PROject/INDEX.php" class="btn btn-primary">Logout</a>
  </div>
</div>
-->
    <div class="container">
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="Pics/gon-n-kil.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <center>
        <a href="http://localhost/PROject/donor-profile.php" class="btn btn-primary">Profile</a>
        </center>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="Pics/Pain.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <center>
        <a href="http://localhost/PROject/INDEX.php" class="btn btn-primary">Logout</a>
          </center>
      </div>
    </div>
  </div>
</div>
    </div>
     
     
</body>
</html>