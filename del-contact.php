<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from new_contact where num='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-contact.php");
}
else
{
	echo "Not deleted";
}

?>