<?php
$conn=mysqli_connect("localhost","root","","accounter");
if(!$conn)
{
	echo "Connection failed";
}
else
{
	//echo "Connection established";
}

$fname=$_POST["fname"];
echo $fname;
echo "<br/>";
$lname=$_POST["lname"];
echo $lname;
echo "<br/>";
$email=$_POST["email"];
echo $email;
echo "<br/>";
$bname=$_POST["bname"];
echo $bname;
echo "<br/>";
$btype=$_POST["btype"];
echo $btype;
echo "<br/>";
$blevel=$_POST["blevel"];
echo $blevel;
echo "<br/>";
$password=$_POST["password"];
echo $password;
echo "<br/>";
date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date=date("d-m-Y h:i:sa");

$ins="insert into women_registration(first_name, last_name, email, business_name, business_type, business_level, password, date) values('$fname', '$lname', '$email', '$bname', '$btype', '$blevel', '$password', '$date')";



if(mysqli_query($conn,$ins))
{
	$sql2="insert into women_login(women_email, women_password) values('$email','$password')";
	mysqli_query($conn,$sql2);
    $sql2="insert into business_details(business_type, business_category) values('$btype','$bname')";
	header("location:login.php");
}
else
{
 	echo "Data not inserted";
}



?>