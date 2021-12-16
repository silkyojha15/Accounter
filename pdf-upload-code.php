<?php

 $targetfolder = "documents/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
    echo '<script>alert("File Uploaded")</script>';
    header('Location: upload-pdf.php');
     

 }

 else {

 //echo "Problem uploading file";
    echo '<script>alert("File not Uploaded")</script>'; 
    

 }


 ?>