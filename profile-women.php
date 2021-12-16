<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login-women.php');
	exit;
}
$conn=mysqli_connect("localhost","root","","accounter");
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $conn->prepare('SELECT women_password, women_email FROM women_login WHERE women_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="">
        
        <title>ACCOUNTER- Dashboard</title>
        
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
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-11 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>10</h3>
                  			</div>
					  			<p>10 Contacts added at the last 24hs. Whoohoo!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+5</h3>
                  			</div>
					  			<p>Few of your documents are uploaded at the server database. </p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>25</h3>
                  			</div>
					  			<p>You have added 25 new invoices details.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>More than 10 notification sent to your mail.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax & enjoy.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>PROFIT/LOSS</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-4 col-xs-4 goleft">
										<p><i class="fa fa-database"></i> 70%</p>
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 70,
												color:"#68dff0"
											},
											{
												value : 30,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	

                      	<div class="col-md-7 col-sm-4 mb">
                      		<div class="white-panel" STYLE="COLOR:BLACK">
                      			<div class="white-header">
						  			<h5 STYLE="COLOR:BLACK">INVOICES</h5>
                      			</div>
								<div class="row table-responsive">
								<table class="table table-advance table-hover" >
                                    <a href="add-invoice.php"><button value="submit" class="btn btn-primary">Add Invoice</button></a>
                                <thead>
                              <tr>
                                  <th>ID</th>
                                   <th>Name</th>
                                   <th>Mobile Number</th>
                                   <th>Invoice Number</th>
                                   <th>Invoice Date</th>
                                  <th>Total</th>
                              </tr>
                              </thead>
                                    <tbody>
                                  <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from add_invoice order by invoice_id";
                                   $res=mysqli_query($conn,$sql);
                                   while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
                                   {
                                       ?>
                                       <tr>
                                       <td><?php echo $row['0']; ?> </td>
                                        <td><?php echo $row['1']; ?> </td>
                                       <td><?php echo $row['5']; ?> </td>
                                       <td> <?php echo $row['6']; ?></td>
                                       <td> <?php echo $row['7']; ?> </td>
                                       <td> <?php echo $row['13']; ?> </td>
                                        </tr>
                                       <?php
                                   }

                                        ?> 
                              </tbody>
                          </table>
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->
                          </div>
                        <div class="row">
                      	<div class="col-sm-11 mb">
                      		<div class="white-panel" STYLE="COLOR:BLACK">
                      			<div class="white-header">
						  			<h5 STYLE="COLOR:BLACK">CONTACTS</h5>
                      			</div>
								<div class="row table-responsive">
								<table class="table table-advance table-hover" >
                                  <a href="add-contact.php"><button value="submit" class="btn btn-primary">Add Contact</button></a>  
                                    
                                <thead>
                              <tr><br>
                                  <th>ID</th>
                                   <th>First Name</th>
                                   <th>Business Name</th>
                                   <th>Email</th>
                                   <th>Mobile Number</th>
                                   <th>Address</th>
                              </tr>
                              </thead>
                                    <tbody>
                                <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from new_contact order by num";
                                   $res=mysqli_query($conn,$sql);
                                   while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
                                   {
                                       ?>
                                       <tr>
                                       <td><?php echo $row['0']; ?> </td>
                                       <td><?php echo $row['1']; ?> </td>
                                       <td><?php echo $row['3']; ?> </td>
                                       <td><?php echo $row['4']; ?> </td>
                                       <td> <?php echo $row['5']; ?></td>
                                       <td> <?php echo $row['7']; ?> </td>
                                       </tr>
                                       <?php
                                   }

                                        ?>
                              </tbody>
                          </table>
	                      		</div>
                      		</div>
                      	</div>
                      </div>
<!-- /row -->
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>OVERALL EXPENSES</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
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