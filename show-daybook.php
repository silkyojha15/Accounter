<?php  

session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: IMOlogin.php');
	exit;
}
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "accounter");  
      $sql = "SELECT * FROM imo_contact ORDER BY id ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["0"].'</td>  
                          <td>'.$row["1"].'</td>  
                          <td>'.$row["2"].'</td>  
                          <td>'.$row["3"].'</td>  
                          <td>'.$row["4"].'</td>  
                          <td>'.$row["5"].'</td>  
                          <td>'.$row["6"].'</td>  
                          <td>'.$row["7"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('TCPDF-main/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Contact Details");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Contact Details</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">Id</th>  
                <th width="10%">First Name</th>  
                <th width="10%">Last Name</th>  
                <th width="10%">Business Name</th>  
                <th width="15%">Email</th>  
                <th width="10%">Mobile</th>  
                <th width="10%">Telephone</th>  
                <th width="30%">Address</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  
 ?>  
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="">
        
        <title>ACCOUNTER-Daily Journal</title>
        
        <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        
        <!-- Bootstrap core CSS -->
    <link href="layout/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="layout/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="layout/styles/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="layout/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="layout/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="layout/css/style.css" rel="stylesheet">
    <link href="layout/css/style-responsive.css" rel="stylesheet">

    <script src="layout/js/chart-master/Chart.js"></script>
        
	</head>
	<body class="loggedin">
    <section id="container" >

      
      <?php

		include("header-imo.php");

		?>
   <section id="main-content" style="color:black">
        <section class="wrapper">
                          <div class="row mt">
                  <div class="col-md-12"> 
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Daybook</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                   <th>Date</th>
                                   <th>Title or Explanation</th>
                                   <th>Debit Amount</th>
                                   <th>Credit</th>
                                   <th>Comment("if any")</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from daybook order by id";
                                   $res=mysqli_query($conn,$sql);
                                   while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
                                   {
                                       ?>
                                       <tr>
                                       <td><?php echo $row['0']; ?> </td>
                                       <td><?php echo $row['1']; ?> </td>
                                       <td><?php echo $row['2']; ?> </td>
                                       <td><?php echo $row['3']; ?> </td>
                                       <td><?php echo $row['4']; ?> </td>
                                       <td> <?php echo $row['5']; ?></td>
                                        <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <a href="del-daybook.php?id=<?php echo $row['0']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                                       </tr>
                                       <?php
                                   }

                                        ?> 
                              </tbody>
                              <?php  
                     echo fetch_data();  
                     ?>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section>
        <footer class="site-footer">
          <div class="text-center">
              Acccounter by BtechTeam1
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
        </section>
    
 <?php
        include("footer-imo.php");
        ?>
   </body>
</html>