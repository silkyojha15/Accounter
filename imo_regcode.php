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

$name=$_POST["name"];
echo $name;
echo "<br/>";
$email=$_POST["email"];
echo $email;
echo "<br/>";
$register=$_POST["register_no"];
echo $register;
echo "<br/>";
$type=$_POST["type"];
echo $type;
echo "<br/>";
$password=$_POST["password"];
echo $password;
echo "<br/>";
$num=$_POST["num"];
echo $num;
echo "<br/>";

date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date=date("d-m-Y h:i:sa");

$ins="insert into imo_registration(imo_name, imo_email, registration_no, type, password, num, date) values('$name','$email', '$register', '$type', '$password', '$num', '$date')";



if(mysqli_query($conn,$ins))
{
	$sql2="insert into imo_login(imo_email, imo_password) values('$email','$password')";
	mysqli_query($conn,$sql2);
	header("location:IMOlogin.php");
    echo "data inserted";
}
else
{
 	echo "Data not inserted";
}



?>