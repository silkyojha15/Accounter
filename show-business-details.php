<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login-women.php');
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
        
        <title>ACCOUNTER- Business</title>
        
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

		include("header-women.php");

		?>
   <section id="main-content">
        <section class="wrapper">
                          <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Business details</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                   <th>Business Type</th>
                                   <th>Business Category</th>
                                   <th>Business Name</th>
                                   <th>Registration Number</th>
                                  <th>GST Number</th>
                                   <th>Address</th>
                                  <th>District</th>
                                  <th>City</th>
                                  <th>Pin Code</th>
                                  <th>State</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from business_details order by id";
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
                                       <td> <?php echo $row['7']; ?> </td>
                                       <td> <?php echo $row['8']; ?> </td>
                                       <td> <?php echo $row['9']; ?> </td>
                                       <td> <?php echo $row['10']; ?> </td>
                                        <td>
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
                                      <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>  Accounting Dates</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                   <th>Start of Accounting Year</th>
                                   <th>End of Accounting Year</th>
                                   <th>Accounter Accounting Year</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from busi_accounting_dates order by id";
                                   $res=mysqli_query($conn,$sql);
                                   while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
                                   {
                                       ?>
                                       <tr>
                                       <td><?php echo $row['0']; ?> </td>
                                       <td><?php echo $row['1']; ?> </td>
                                       <td><?php echo $row['2']; ?> </td>
                                       <td><?php echo $row['3']; ?> </td>
                                       </tr>
                                       <?php
                                   }

                                        ?> 
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
                                      <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Sales Tax</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                   <th>Sales Tax</th>
                                   <th>Effective From</th>
                                   <th>Tax Name</th>
                                   <th>Rates</th>
                                   <th>Registration Number</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from sales_tax order by ID";
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
                                       <td><?php echo $row['5']; ?> </td>
                                       </tr>
                                       <?php
                                   }

                                        ?> 
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>            
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
    
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="layout/js/jquery.js"></script>
    <script src="layout/js/jquery-1.8.3.min.js"></script>
    <script src="layout/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="layout/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="layout/js/jquery.scrollTo.min.js"></script>
    <script src="layout/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="layout/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="layout/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="layout/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="layout/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="layout/js/sparkline-chart.js"></script>    
	<script src="layout/js/zabuto_calendar.js"></script>	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
   </body>
</html>