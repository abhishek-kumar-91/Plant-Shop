<?php

session_start();
?>

<!DOCTYPE html>  
<html>
  <head>
    <title>AdminPanel</title>  
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="adminpanel.css">  
</head>

<body>

<div class="wrapper">

<div class="header">
<h1>Hello <?php echo $_SESSION['AdminLoginId'] ?> Welcome to Admin Panel</h1>

<button type= "submit" class= "btn" name= "submit">Logout</button>
</div>
<div class="container">


<div class="lside">
<a href="adminPanel.php">Home</a>
<a href="orderDetails.php">Order Details</a>
<a href="productDetails.php">Product Details</a>
<a href="userDetails.php">User Details</a>
</div>




<div class="rside">
    <div class="orderdetails" id = "orderDetails">
    <h1>Product Details</h1>
    <?php
require("includes/common.php");
$sql = "SELECT * FROM products";
$result = $con->query($sql);

// Display the data on the webpage
if ($result->num_rows > 0) {
  echo "<table style='border: 1px solid black; text-align: center; font-size: 30px;'><tr><th>ID</th><th>Name</th><th>Price</th></tr>";
  while($row = $result->fetch_assoc()) {
      echo "<tr><td style='border: 1px solid black;'>" . $row["id"]. "</td><td style='border: 1px solid black;'>" . $row["name"]. "</td><td style='border: 1px solid black;'>" . $row["price"];
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Close the database connection
$con->close();
?>
    </div>


    
</div>
</div>




</div>




</body>
</html>
