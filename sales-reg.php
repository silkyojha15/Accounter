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

$salestax=$_POST["salestax"];
echo $salestax;
echo "<br/>";
$effrom=$_POST["effrom"];
echo $effrom;
echo "<br/>";
$name=$_POST["name"];
echo $name;
echo "<br/>";
$rates=$_POST["rates"];
echo $rates;
echo "<br/>";
$reg=$_POST["reg"];
echo $reg;
echo "<br/>";


$ins="insert into sales_tax(sale_tax, effective_from, tax_name, rates, reg_number) values('$salestax', '$effrom', '$name', '$rates', '$reg')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
	header("location:documents.php");
}
else
{
 	echo "Data not inserted";
}



?>