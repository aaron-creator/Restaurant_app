<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pizza Restaurant</title>
  <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

<div class="w3l-top-header">
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <a class="navbar-brand" href="index.php">
          <span class="fa fa-pie-chart"></span> Pizza pan
        </a>
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

<div class="order-details">
<br>
<div class="container">
  <div class="row">
      <div class="col col-12 col-sm-3">
      </div>

        <div class="col col-12 col-sm-6">
          <form method="POST">
              <table class="table table-borderless table-striped">
                  <tr>
                      <td>Table No</td>
                      <td><input type="number" class="form-control" name="table-no"></td>
                  </tr>
                  
                  <tr>
                      <td></td>
                      <td>
                          <center> <input type="submit" value="View Cart" class="btn btn-success" name="submit"> </center>
                      </td>  
                  </tr>
              </table>
          </form>
        </div>

      <div class="col col-12 col-sm-3">
      </div>

   </div>
   <div class="col col-12 col-sm-6">
       
                   
<?php
if(isset($_POST["submit"]))
{   
    $tableno=$_POST["table-no"];
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="restaurant";
    $connection = new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $sql = "SELECT `id`, `table_no`, `item_name`, `price`, `unit` FROM `cart` WHERE `table_no`= '$tableno' ";
    $result = $connection->query($sql);
    
    if($result->num_rows > 0) {
    // output data of each row
        echo "Cart items Remaining";
        echo "<table class: 'table'>
            <br>";
        while($row = $result->fetch_assoc()) {

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
            <tr><td>Total Price :</td> <td>$total</td></tr>";

        }
        
    } 
    else
    {
    echo "0 results";
    }
}
?>
   </div>
</div>
</body>

</html>


 