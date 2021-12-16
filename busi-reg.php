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

$btype=$_POST["btype"];
echo $btype;
echo "<br/>";
$category=$_POST["bcategory"];
echo $category;
echo "<br/>";
$bname=$_POST["bname"];
echo $bname;
echo "<br/>";
$no=$_POST["reg_no"];
echo $no;
$gst=$_POST["gstnum"];
echo $gst;
echo "<br/>";
$badd=$_POST["badd"];
echo $badd;
echo "<br/>";
$distt=$_POST["bdistt"];
echo $distt;
echo "<br/>";
$city=$_POST["bcity"];
echo $city;
echo "<br/>";
$pin=$_POST["pin"];
echo $pin;
echo "<br/>";
$state=$_POST["state"];
echo $state;
echo "<br/>";



$ins="insert into business_details(business_type, business_category, business_name, registration_number, gst_number, address, district, city, pincode, state) values('$btype', '$category', '$bname', '$no','$gst', '$badd', '$distt', '$city', '$pin', '$state')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
	header("location:accounting-dates.php");
}
else
{
 	echo "Data not inserted";
}



?>