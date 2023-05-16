<?php
require("includes/common.php");

?>



<!DOCTYPE html>  
<html>
  <head>
    <title>Admin</title>  
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="admin.css">  

</head>
<body>
    <div class="wrapper">
        <div class="container">
<form method = "POST">
        <h2>Admin Login</h2>
        <label for="email">userName:</label>
        <input type="text" id="email" name="adminEmail" class = "inp"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="adminPassword" class = "inp"><br>

        <input type="submit" value="Submit" name="signin" class= "btn">
      </form>
      </div>
      </div>
<?php

if(isset($_POST['signin']))
{
    $query = "SELECT * FROM `adminlogin` WHERE `Admin_name` = '$_POST[adminEmail]' AND `Admin_password` = '$_POST[adminPassword]' ";
    $result = mysqli_query($con,$query,);
    if(mysqli_num_rows($result) == 1) 
    {
        session_start();
        $_SESSION['AdminLoginId'] = $_POST['adminEmail'];
        header("location: adminPanel.php");
    }else{
        echo "<script>alert('incorrect password');</script>";
    }
}
?>

</body>

</html>





