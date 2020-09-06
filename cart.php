<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Pizza Restaurants</title>

  <!-- Web-Fonts -->
  <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
  <!-- //Web-Fonts -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
<!--header-->
<div class="w3l-top-header">
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <a class="navbar-brand" href="index.php">
          <span class="fa fa-pie-chart"></span> Pizza pan
        </a>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item @@services-active">
              <a class="nav-link effect-3" href="services.php">Menu<span class="sr-only">(current)</span></a>
            </li>
            <li class="px-4 fill-none">
              <a href="cart.php" class="btn btn-style btn-secondary">Cart <span class="fa fa-shopping-cart mr-2"></span></a>
              </li>
		  </ul>
		  
        </div>
      </nav>
    </div>
  </header>
</div>
<!--/header-->


<!-- footers 20 -->
<section class="w3l-footers-20">
<div class="footers20">
    <div class="container">
        <div class="footers20-content">
            <div class="d-grid grid-col-4 grids-content">
                <div class="column">
                    <h4>Opening hours</h4>
                    <p>Monday - Friday</p>
                    <p class="mt-2">09:00 am to 10:00 pm</p>
                </div>
                
            </div>
            <div class="d-grid grid-col-3 grids-content1 bottom-border">
                <div class="columns copyright-grid">
                    <p class="copy-footer-29">© 2020 Pizza Pan. All rights reserved </p>
                </div>
                <div class="columns text-right social-grid">
                    <ul class="social">
                        <li><a href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                        <li><a href="#url"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
                        <li><a href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</body>

</html>
<?php
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
     $sql = "SELECT `id`, `name`, `address`, `mobile`, `email`, `place`, `username`, `password` FROM `addfisherman` WHERE `username`='$name' ";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

         $_SESSION["id"]= $row["id"];

       header('Location:map.php');
      }
    } else {
      echo "0 results";
    }
}
?>