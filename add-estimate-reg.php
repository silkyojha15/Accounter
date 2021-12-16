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

$customer=$_POST["customer"];

$address=$_POST["address"];

$attention=$_POST["attention"];

$email=$_POST["email"];

$mobile=$_POST["mobile"];

$estimate=$_POST["estimate"];

$date=$_POST["date"];

$exp_date=$_POST["exp_date"];

$ttl_amount=$_POST["ttl_amount"];

$discount=$_POST["discount"];

$taxable_value=$_POST["taxable_value"];

$tax=$_POST["tax"];

$cess=$_POST["cess"];

$total=$_POST["total"];

date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date1=date("d-m-Y h:i:sa");


$ins="insert into add_estimate(customer_name, address, attention, email,moblie, estimate_num,estimate_date,exp_date, total_amount, discount, taxable_value, tax, cess, total, date) values('$customer', '$address', '$attention', '$email','$mobile', '$estimate', '$date','$exp_date', '$ttl_amount', '$discount', '$taxable_value', '$tax', '$cess', '$total', '$date1')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
	header("location:profile-women.php");
}
else
{
 	echo "Data not inserted";
}



?>