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

$imotype=$_POST["imotype"];
$imoname=$_POST["imoname"];
//echo $bname;
//echo "<br/>";
$no=$_POST["reg_no"];
//echo $no;
//$gst=$_POST["gstnum"];
//echo $gst;
//echo "<br/>";
$oadd=$_POST["oadd"];
//echo $badd;
//echo "<br/>";
$distt=$_POST["distt"];
//cho $distt;
echo "<br/>";
$city=$_POST["city"];
//echo $city;
//echo "<br/>";
$pin=$_POST["pin"];
//echo $pin;
echo "<br/>";
$state=$_POST["state"];
//echo $state;
//echo "<br/>";



$ins="insert into imo_details(imo_type, name, reg_no,  off_address, district, city, pin, state) values('$imotype', '$imoname', '$no', '$oadd', '$distt', '$city', '$pin', '$state')";



if(mysqli_query($conn,$ins))
{
	echo "data inserted";
	header("location:imo-registration-details.php");
}
else
{
 	echo "Data not inserted";
}



?>