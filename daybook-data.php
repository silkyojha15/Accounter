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

$date=$_POST["date"];

$title=$_POST["title"];

$dbtamt=$_POST["dbtamt"];

$crdamt=$_POST["crdamt"];

$comment=$_POST["comment"];


$ins="insert into daybook(date, title, debit, credit,comment) values('$date', '$title', '$dbtamt', '$crdamt','$comment')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
	header("location:daybook.php");
}
else
{
 	echo "Data not inserted";
}



?>