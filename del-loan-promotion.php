<?php
$id=$_REQUEST["id"];
//echo $id;

$conn=mysqli_connect ("localhost","root","","accounter");

$sql="delete from loan_promotion where loan_id='$id'";
if(mysqli_query($conn,$sql))
{
	
	header("location:show-loan-promotion.php");
}
else
{
	echo "Not deleted";
}

?>