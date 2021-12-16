<?php

$addproof=$_POST["addproof"];
$imo=$_POST["imoproof"];


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
$filestore="images/demo/imo_upload/".$filename;

// File Uploading 2

$filename2=$_FILES["imophoto"]["name"];
//echo $filename;
//echo "<br/>";
$filetype2=$_FILES["imophoto"]["type"];
//echo $filetype;
//echo "<br>";
$filesize2=$_FILES["imophoto"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname2=$_FILES["imophoto"]["tmp_name"];
//echo $filetmpname;
//echo "<br>"; 
$filestore2="images/demo/imo_upload/".$filename2;

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
$filestore3="images/demo/imo_upload/".$filename3;

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
$filestore4="images/demo/imo_upload/".$filename4;

// File Uploading 5

$filename5=$_FILES["certificate3"]["name"];
//echo $filename;
//echo "<br/>";
$filetype5=$_FILES["certificate3"]["type"];
//echo $filetype;
//echo "<br>";
$filesize4=$_FILES["certificate3"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname5=$_FILES["certificate3"]["tmp_name"];
//echo $filetmpname;
//echo "<br>";
$filestore5="images/demo/imo_upload/".$filename5;

// File Uploading 6

$filename6=$_FILES["certificate4"]["name"];
//echo $filename;
//echo "<br/>";
$filetype6=$_FILES["certificate4"]["type"];
//echo $filetype;
//echo "<br>";
$filesize6=$_FILES["certificate4"]["size"];
//echo $filesize;
//echo "<br>";
$filetmpname6=$_FILES["certificate4"]["tmp_name"];
//echo $filetmpname;
//echo "<br>";
$filestore6="images/demo/imo_upload/".$filename6;

$conn=mysqli_connect("localhost","root","","accounter");

date_default_timezone_set("Asia/Kolkata");
//for making time correct. note:It should be done before saving date
$date=date("d-m-Y h:i:sa");

$sql="insert into imo_upload(add_proof,imo_proof,img1, img2, img3, img4, img5, img6, date) 
values('$addproof','$imo','$filename','$filename2','$filename3','$filename4','$filename5', '$filename6','$date')";

if(mysqli_query($conn,$sql))
{
	echo "Data inserted";
	move_uploaded_file($filetmpname, $filestore);
    move_uploaded_file($filetmpname2,$filestore2);
    move_uploaded_file($filetmpname3,$filestore3);
    move_uploaded_file($filetmpname4,$filestore4);
    
    move_uploaded_file($filetmpname5,$filestore5);
    move_uploaded_file($filetmpname6,$filestore6);
    
    header("location:profile-imo.php");
}
else
{
 	echo "Data not inserted";
}



?>