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
    <div >
    <h1>User Details</h1>
    <?php
require("includes/common.php");
$sql = "SELECT * FROM users";
$result = $con->query($sql);

// Display the data on the webpage
if ($result->num_rows > 0) {
  echo "<table style='border: 1px solid black; text-align: center; font-size: 20px;'><tr><th>ID</th><th>Email ID</th><th>First Name</th> <th>Last Name</th><th>Phone Number</th> <th>Registration Time </th> <th>Password</th></tr>";
  while($row = $result->fetch_assoc()) {
      echo "<tr><td style='border: 1px solid black;'>" . $row["id"]. "</td><td style='border: 1px solid black;'>" . $row["email_id"]. "</td><td style='border: 1px solid black;'>" . $row["first_name"]. "</td><td style='border: 1px solid black;'>" . $row["last_name"]. "</td><td style='border: 1px solid black;'>" . $row["phone"]. "</td><td style='border: 1px solid black;'>" . $row["registration_time"]. "</td><td style='border: 1px solid black;'>" . $row["password"];
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
