<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: IMOlogin.php');
	exit;
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
        
        <title>ACCOUNTER-Loan Promotion Scheme</title>
        
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
   <section id="main-content">
        <section class="wrapper">
                          <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Loan Promotion Scheme Details</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                   <th>Loan Amount</th>
                                   <th>Paid Amount</th>
                                   <th>Interest Rate</th>
                                   <th>Overall Interest Rate</th>
                                   <th>Amount-Distributed</th>
                                   <th>Total Amount Distributed</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from loan_promotion order by loan_id";
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
                                       <td> <?php echo $row['6']; ?> </td>
                                        <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <a href="del-loan-promotion.php?id=<?php echo $row['0']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                                       </tr>
                                       <?php
                                   }

                                        ?> 
                              </tbody>
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