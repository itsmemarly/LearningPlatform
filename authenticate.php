<?php
session_start();
// Verander connectie informatie
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'learningPlatform';
//Proberen te verbinden met de bovenstaande informatie
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	//Errors? Laat error zien op de pagina.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Checken of data van de gebruiker klopt.
if ( !isset($_POST['username'], $_POST['password']) ) {
	//Kon de verzonden data niet vinden.
	die ('Please fill both the username and password field!');
}

// Voorbereiden om te verbinden met SQL.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

    //Binden van parameters
    //s staat voor string
    //i staat voor int
    //b staat voor blob etc.
    //Username is een string dus s
	$stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Bewaar het resultaat zodat we in de database kunnen zien of het account bestaat.
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        //Account bestaat: Nu kunnen we het wachtwoord checken.
        //password_hash in registratie
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header("Location: home.php");
         
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }

	$stmt->close();
}
?>