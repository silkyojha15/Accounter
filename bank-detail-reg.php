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

$bankname=$_POST["bankname"];

echo "<br/>";
$customerno=$_POST["end"];

$accountno=$_POST["accountno"];
$name=$_POST["name"];
$ifsc=$_POST["ifsc"];
$branch=$_POST["branch"];



$ins="insert into bank(bank_name, customer_number, account_number, name, ifsc, branch) values('$bankname', '$customerno', '$accountno', '$name', '$ifsc', '$branch')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
	header("location:show-bank.php");
}
else
{
 	echo "Data not inserted";
}



?>