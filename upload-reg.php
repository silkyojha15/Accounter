<?php

$addproof=$_POST["addproof"];
$bankproof=$_POST["bankproof"];


// File Uploading 1

$filename=$_FILES["addphoto"]["name"];
//echo $filename;
//echo "<br/>";
$filetype=$_FILES["addphoto"]["type"];
//echo $filetype;
//echo "<br>";
$filesize=$_FILES["addphoto"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname=$_FILES["addphoto"]["tmp_name"];
//echo $filetmpname;
//echo "<br>"; 
$filestore="images/demo/women_upload/".$filename;

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
$filestore2="images/demo/women_upload/".$filename2;

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
$filestore3="images/demo/women_upload/".$filename3;
// File Uploading 4

$filename4=$_FILES["certificate2"]["name"];
//echo $filename;
//echo "<br/>";
$filetype4=$_FILES["certificate2"]["type"];
//echo $filetype;
//echo "<br>";
$filesize4=$_FILES["certificate2"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname4=$_FILES["certificate2"]["tmp_name"];
//echo $filetmpname;
//echo "<br>";
$filestore4="images/demo/women_upload/".$filename4;

$conn=mysqli_connect("localhost","root","","accounter");

date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date=date("d-m-Y h:i:sa");

$sql="insert into women_upload(add_proof,bank_proof,img1, img2, img3, img4, date) 
values('$addproof','$bankproof','$filename','$filename2','$filename3','$filename4','$date')";

if(mysqli_query($conn,$sql))
{
	echo "Data inserted";
	move_uploaded_file($filetmpname, $filestore);
    move_uploaded_file($filetmpname2,$filestore2);
    move_uploaded_file($filetmpname3,$filestore3);
    move_uploaded_file($filetmpname4,$filestore4);
    
    header("location:dashboard-women.php");
}
else
{
 	echo "Data not inserted";
}



?>