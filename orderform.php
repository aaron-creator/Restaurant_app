<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-image:url('college.jpg')" ;>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item add">
                <h4><b>ORDER DETAILS</b></h4>
            </li>
        </ul>
    </nav>
    <br><br><br> <br>
    <div class="container">
        <center>
            <h1> Enter Details </h1>
        </center>
        <br>
        <div class="row">


            <div class="col col-12 col-sm-3">

            </div>
            <div class="col col-12 col-sm-6">
                <form action="" method="POST">
                    <table class="table table-borderless table-striped">
                        <tr>
                            <td>Table No</td>
                            <td><input type="number" class="form-control" name="table-no"></td>
                        </tr>

                        <tr>
                            <td>Item Name</td>
                            <td><input type="text" class="form-control" name="item-name"></td>
                        </tr>
                        
                        <tr>
                        <td>Item Price</td>
                        <td><input type="number" class="form-control" name="item-price"></td>
                        </tr>
                        
                        <tr>
                            <td>Item units</td>
                            <td><input type="number" class="form-control" name="item-units"></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                <center> <input type="submit" value="Place Order" class="btn btn-success" name="submit"> </center>
                            </td>  
                        </tr>
                    </table>
                </form>
            </div>

            <div class="col col-12 col-sm-3">
            </div>
</body>

</html>
<?php

if(isset($_POST["submit"])) {

    $table_no=$_POST["table-no"];
	$item_name=$_POST["item-name"];
	$item_price=$_POST["item-price"];
    $item_units=$_POST["item-units"];
    
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="restaurant";
    $connection = new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $sql="INSERT INTO `cart`(`table_no`, `item_name`, `price`, `unit`) VALUES ('$table_no','$item_name','$item_price','$item_units')";
    $result= $connection->query($sql);
    if($result===TRUE)
    {
        $total=$item_price*$item_units;
        echo "<table class: 'table'>
        <tr><td>Table No :</td> <td>$table_no</td></tr>
        <tr><td>Item Name :</td> <td>$item_name</td></tr>
        <tr><td>Item Price :</td> <td>$item_price</td></tr>
        <tr><td>Item Units :</td> <td>$item_units</td></tr>
        <tr><td>Total Price :</td> <td>$total</td></tr>";

    }
    else
    {
        echo "Error",$connection->error;
    }
    
}    
?>