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
<h1>Plant Paradise Admin Panel</h1>
<form method="POST">
<button type= "submit" class= "btn" name= "logOut">Logout</button>
</form>
</div>
<div class="container">


<div class="lside">
<a href="adminPanel.php">Home</a>
<a href="orderDetails.php">Order Details</a>
<a href="productDetails.php">Product Details</a>
<a href="userDetails.php">User Details</a>
</div>




<div class="rside">
    <div>
    <h1>Hello <?php echo $_SESSION['AdminLoginId'] ?> Welcome to Admin Panel</h1>
    </div>


    
</div>
</div>




</div>




</body>
</html>

<?php


// Check if the user is logged in, redirect to login page if not


if (isset($_POST['logOut'])) {
  session_start();
  session_unset(); 
  session_destroy(); 
  header('location:index.php');
}
?>