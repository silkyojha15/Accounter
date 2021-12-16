<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from daybook where id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-daybook.php");
}
else
{
	echo "Not deleted";
}

?>