
<?php
require('db.php');
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
 <!-- <link rel="stylesheet" href="2.css" /> -->
</head>
<body background="image2.webp">
    <center>
    <div class="form">
        <h2 style = "color:darkcyan">Welcome <?php echo $_SESSION['Name']; 
        ?></h2>
        <h4>You are now in user dashboard page.</h4>
        <h3><a href="demo1.html">Lets go !</a></h3>
        <h3><a href="logout.php">Logout</a></h3>
    </div>
</center>
</body>
</html>