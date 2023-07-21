
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <link rel="stylesheet" href="files.css">
    <script src="../logoutScript.js"></script>
    <?php 
include 'filesLogic.php';
include 'header.php';
?>
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form class="form" action="" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <p>Must be a json file!</p>
          <br>
          <input type="file" name="myfiles"> <br>
          <button type="submit" name="savebtn">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>