<?php
require("../includes/db_connect.php");
include("../includes/db_session.php");
// session_start();
?>
<html>
<title>MEMBER AREA</title>
<meta charset="UTF-8">
<!-- <meta http-equiv="refresh" content="10;url=logout.php" /> -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<script src="../index.js"></script>
<!-- <script src="authenticate.php"></script> -->
<script src="../logoutScript.js"></script>
<link rel="stylesheet" href="../index.css">
</html>

<?php
include 'header.php';
// We need to use sessions, so you should always start sessions using the below code.
// session_start();
// If the user is not logged in redirect to the login page...
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: index.php');
// 	exit();
// }
?>

<html>
<div class="container">
 <h2 class="alert alert-info">Member Dashboard</h2>
 <?php
 if(isset($_SESSION["username"])) 
 {
 ?> 
 <div class="alert alert-danger">
 Welcome (back) <strong><?php echo $_SESSION["username"]; ?></strong> .If here is no activity till 
10 <strong>Minutes</strong> you will be logged out automatically. <a href="../logout.php" tite="Logout">Click here to Logout.</a>
 
 </div>

 <?php 
    } 
    else
    { 
 header("Location:../index.php");
 }
 ?>
 </div>
</html>
<!-- <script>setTimeout(location.reload.bind(location), 5000);</script> -->