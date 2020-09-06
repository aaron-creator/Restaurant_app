<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Kitchen Portal</title>

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
        <a class="navbar-brand" href="kitchen.php">
          <span class="fa fa-pie-chart"></span> Kitchen Portal
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
<div class="order-details">
<br>
<div class="row">

            <div class="col col-12 col-sm-3">
            </div>

            <div class="col col-12 col-sm-6">
                

            </div>

            <div class="col col-12 col-sm-3">
            </div>
</div>


</body>

</html>


                
<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="restaurant";
$connection = new mysqli($servername,$dbusername,$dbpassword,$dbname);
if(isset($_POST["submit"])){
    $sql = "DELETE FROM `cart` WHERE `id`=id ";
    $connection->query($sql);
}
    
    $sql = "SELECT `id`, `table_no`, `item_name`, `price`, `unit` FROM `cart` order by id desc";
    $result = $connection->query($sql);
    
    if($result->num_rows > 0) {
    // output data of each row
        echo "Cart items Remaining";
        echo "<table class: 'table'>
            <br>";
        while($row = $result->fetch_assoc()) {
            $id=  $row["id"];          
            $table_no= $row["table_no"];
            $item_name= $row["item_name"];
            $item_price= $row["price"];
            $item_units= $row["unit"];
            $total=$item_price*$item_units;
            echo "<table class: 'table'>
            <br>
            <tr><td>Table No :</td> <td>$table_no</td></tr>
            <tr><td>Item Name :</td> <td>$item_name</td></tr>
            <tr><td>Item Price :</td> <td>$item_price</td></tr>
            <tr><td>Item Units :</td> <td>$item_units</td></tr>
            <tr><td>Total Price :</td> <td>$total</td></tr>
            <tr><td>Order Status:</td> <td><input type='submit' value='Completed' class='btn btn-success' name='submit'></td></tr>";

        }
        
    } 
   
?>