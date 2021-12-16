<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from new_business where id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-imo-business.php");
}
else
{
	echo "Not deleted";
}

?>