<?php
session_start();

$conn=mysqli_connect("localhost","root","","accounter");
if ( mysqli_connect_errno() ) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($stmt = $conn->prepare('SELECT imo_id, imo_password FROM imo_login WHERE imo_email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	
    $fname=$_POST["fname"];

    $lname=$_POST["lname"];

    $bname=$_POST["bname"];
    echo $bname;
    echo "<br/>";
    $email=$_POST["email"];

    $mob=$_POST["mob"];

    $tele=$_POST["tele"];

    $address=$_POST["address"];  
        
    $ins="insert into new_contact(first_name, last_name, business_name, email, mobile, telephone, address) values('$fname', '$lname', '$bname', '$email','$mob', '$tele', '$address')";



    if(mysqli_query($conn,$ins))
    {
        echo "data inserted";
        header("location:profile-imo.php");
    }
    else
    {
        echo "Data not inserted";
    }    
    

	$stmt->close();
}








$ins="insert into imo_contact(first_name, last_name, business_name, email, mobile, telephone, address) values('$fname', '$lname', '$bname', '$email','$mob', '$tele', '$address')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
    alert("Contact Saved!");
	header("location:profile-imo.php");
}
else
{
 	echo "Data not inserted";
}



?>