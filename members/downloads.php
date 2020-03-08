<?php
 session_start();
?>
<html>
    <head>
    <meta charset="UTF-8">
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
<link rel="stylesheet" href="../index.css">
    </head>

    
<?php
include 'header.php';
// We need to use sessions, so you should always start sessions using the below code.
// session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit();
}
?>
    
    <div class="w3-container" id="downloads" style="padding-bottom:32px;">


<div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">DOWNLOADS</span></h5>

                <br>
                <br>
                <p>Currently these are the lists I already made:</p>
<th>
    <li>
    <a href="Lijst1.json" download="First list">List 1</a>
    </li>
                
                </th>
                <!-- <a href="Lijst1.json" download="First list">
                <li>
                    <img src="Lijst1.json" alt="First list" width="104" height="142">
                   
                    
                    </li>     
                </a> -->
               
                </div>
            </div>
</html>