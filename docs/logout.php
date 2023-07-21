<?php
 session_start();
 session_destroy();

 if(isset($_GET["session_expired"])) 
 {
 $url .= "?session_expired=" . $_GET["session_expired"];
 }
 header("Location: index.php");
?>