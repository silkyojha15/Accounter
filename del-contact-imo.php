<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from imo_contact where id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-imo-contact.php");
}
else
{
	echo "Not deleted";
}

?>