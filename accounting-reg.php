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

$start=$_POST["start"];
echo $start;
echo "<br/>";
$end=$_POST["end"];
echo $end;
echo "<br/>";
$ourdate=$_POST["ourdate"];
echo $ourdate;
echo "<br/>";

date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date=date("d-m-Y h:i:sa");

$ins="insert into busi_accounting_dates(start, end, our_date, date) values('$start', '$end', '$ourdate', '$date')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
	header("location:sales-tax.php");
}
else
{
 	echo "Data not inserted";
}



?>