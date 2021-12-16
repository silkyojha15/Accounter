<?php

$bname=$_POST["bname"];
$reg=$_POST["reg"];
$owner=$_POST["owner"];
$btype=$_POST["btype"];
$start=$_POST["start"];
$end=$_POST["end"];
$ownerproof=$_POST["ownerproof"];
$bankproof=$_POST["bankproof"];


// File Uploading 1

$filename=$_FILES["ownerphoto"]["name"];
//echo $filename;
//echo "<br/>";
$filetype=$_FILES["ownerphoto"]["type"];
//echo $filetype;
//echo "<br>";
$filesize=$_FILES["ownerphoto"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname=$_FILES["ownerphoto"]["tmp_name"];
//echo $filetmpname;
//echo "<br>"; 
$filestore="images/demo/imo_business/".$filename;

// File Uploading 2

$filename2=$_FILES["bankphoto"]["name"];
//echo $filename;
//echo "<br/>";
$filetype2=$_FILES["bankphoto"]["type"];
//echo $filetype;
//echo "<br>";
$filesize2=$_FILES["bankphoto"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname2=$_FILES["bankphoto"]["tmp_name"];
//echo $filetmpname;
//echo "<br>"; 
$filestore2="images/demo/imo_business/".$filename2;

// File Uploading 3

$filename3=$_FILES["certificate1"]["name"];
//echo $filename;
//echo "<br/>";
$filetype3=$_FILES["certificate1"]["type"];
//echo $filetype;
//echo "<br>";
$filesize3=$_FILES["certificate1"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname3=$_FILES["certificate1"]["tmp_name"];
//echo $filetmpname;
//echo "<br>"; 
$filestore3="images/demo/imo_business/".$filename3;


$conn=mysqli_connect("localhost","root","","accounter");

date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date=date("d-m-Y h:i:sa");

$sql="insert into new_business(business_name ,reg_no,owner_name, business_type, year_start, year_end, owner_proof, img_owner_proof, bank_proof, img_bank_proof, certificate, date) 
values('$bname','$reg','$owner','$btype','$start','$end','$ownerproof','$filename','$bankproof','$filename2','$filename3','$date')";

if(mysqli_query($conn,$sql))
{
	echo "Data inserted";
	move_uploaded_file($filetmpname,$filestore);
    move_uploaded_file($filetmpname2,$filestore2);
    move_uploaded_file($filetmpname3,$filestore3);
    
    header("location:dashboard-imo.php");
}
else
{
 	echo "Data not inserted";
}



?>