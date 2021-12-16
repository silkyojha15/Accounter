<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from add_invoice where invoice_id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-invoice.php");
}
else
{
	echo "Not deleted";
}

?>