<?php
session_start();

$conn=mysqli_connect("localhost","root","","accounter");
if ( mysqli_connect_errno() ) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the email and password fields!');
}
if ($stmt = $conn->prepare('SELECT imo_id, imo_password FROM imo_login WHERE imo_email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    
    if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	
	if ($_POST['password'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['mail'] = $_POST['email'];
		$_SESSION['id'] = $id;
		header('Location: imo-details.php');
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect email!';
}
    

	$stmt->close();
}

?>