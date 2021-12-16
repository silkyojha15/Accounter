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

$loan_amount=$_POST["loan_amount"];

$paid_amount=$_POST["paid_amount"];

$ir=$_POST["ir"];
$overall_ir=$_POST["overall_ir"];
$shg=$_POST["shg"];
$shgname=$_POST["shgname"];
$regno=$_POST["regno"];
$amt_giv=$_POST["amt_giv"];
$amt_rcv=$_POST["amt_rcv"];
$num=$_POST["num"];
$amt_dst=$_POST["amt_dst"];


date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date=date("d-m-Y h:i:sa");

$ins="insert into loan_promotion(loan_amount, paid_amount, int_rate, overall_int_rate, amt_dst, ttl_amt, date) values('$loan_amount', '$paid_amount', '$ir','$overall_ir','$shg','$amt_dst', '$date')";



if(mysqli_query($conn,$ins))
{
	//$sql="insert into loan_promotion(shg_name, reg_no, amt_gvn, amt_rcv, num) values('$shgname', '$regno', '$amt_giv','$amt_rcv','$num')";
    //echo "data inserted";
	
    header("location:working-capital-scheme.php");
}
else
{
 	echo "Data not inserted";
}



?>