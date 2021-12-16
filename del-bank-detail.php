<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from bank where bank_id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-bank.php");
}
else
{
	echo "Not deleted";
}

?>