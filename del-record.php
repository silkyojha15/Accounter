<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from loan_recod where id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-record.php");
}
else
{
	echo "Not deleted";
}

?>