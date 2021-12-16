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

$invoice=$_POST["invoice"];

$date=$_POST["date"];

$ttl_amount=$_POST["ttl_amount"];

$discount=$_POST["discount"];

$taxable_value=$_POST["taxable_value"];

$tax=$_POST["tax"];

$cess=$_POST["cess"];

$total=$_POST["total"];

date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date1=date("d-m-Y h:i:sa");


$ins="insert into add_invoice(customer_name, address, attention, email,moblie, invoice_num,invoice_date, total_amount, discount, taxable_value, tax, cess, total, date) values('$customer', '$address', '$attention', '$email','$mobile', '$invoice', '$date', '$ttl_amount', '$discount', '$taxable_value', '$tax', '$cess', '$total', '$date1')";



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