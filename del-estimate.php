<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from add_estimate where estimate_id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-estimate.php");
}
else
{
	echo "Not deleted";
}

?>