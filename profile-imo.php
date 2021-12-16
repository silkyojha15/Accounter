<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: IMOlogin.php');
	exit;
}
$conn=mysqli_connect("localhost","root","","accounter");
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $conn->prepare('SELECT imo_password, imo_email FROM imo_login WHERE imo_id = ?');
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
        
        <title>ACCOUNTER- IMO Dashboard</title>
        
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
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12"> 
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Record</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                   <th>SHG NAME</th>
                                   <th>Loan Type</th>
                                   <th>Interest Rate</th>
                                   <th>Loan Amount</th>
                                   <th>Paid Amount</th>
                                   <th>Date</th>
                                  <th>Paid Installments</th>
                                  <th>Total Installments</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
                                   $conn=mysqli_connect("localhost","root","","accounter");
                                   $sql="select * from loan_record order by id";
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
                                       <td> <?php echo $row['6']; ?></td>
                                       <td> <?php echo $row['7']; ?></td>
                                       <td> <?php echo $row['8']; ?></td>
                                       <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <a href="del-record.php?id=<?php echo $row['0']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                                       </tr>
                                       <?php
                                   }

                                        ?> 
                              </tbody>
                              
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>
              <div class="row mt">
                  <div class="col-lg-3"></div>
              		<div class="col-lg-6">
                          <div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>PROFIT/LOSS</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-4 goleft">
										<p><i class="fa fa-database"></i> 80%</p>
									</div>
                                    
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 80,
												color:"#68dff0"
											},
											{
												value : 20,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
                              <div>
                              
                                  
                              </div>
	                      	</div>
                      </div>
                  <div class="col-lg-3">
                      <br>
                      <br>
                      <br>
                      <br>
                  <h4>Revenue = 100%</h4>
                      <h4>Expenses = 20%</h4>
                  <h4>Net Income = 80%</h4>
                  </div>
                  </div>
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
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>
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
              </div>
             <div class="row mt">
                  <div class="col-md-12 ">
	                  	  	  <hr>
                      <div class="col-sm-3 col-md-3">
                        <div class="thumbnail">
                          <img src="images/demo/contact.png" alt="...">
                          <div class="caption">
                            <center><h3>CONTACTS</h3>
                            <p>Add contact details and it becomes easier for you to communicate.</p>
                            <p><a href="add-contact-imo.php" class="btn btn-primary" role="button">ADD</a> <a href="show-imo-contact.php" class="btn btn-default" role="button">SHOW</a></p></center>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-md-3">
                        <div class="thumbnail">
                          <img src="images/demo/business.jfif" alt="...">
                          <div class="caption">
                            <center><h3>LOAN</h3>
                            <p>Check the loan assigned to SHGs and keep track on them.</p>
                            <p><a href="add-business.php" class="btn btn-primary" role="button">ADD</a> <a href="show-imo-business.php" class="btn btn-default" role="button">SHOW</a></p></center>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-md-3">
                        <div class="thumbnail">
                          <img src="images/demo/record.jfif" alt="...">
                          <div class="caption">
                            <center><h3>RECORDS</h3>
                            <p>Maintaining your record is the most important thing. Keep a tab on it.</p>
                            <p><a href="records-imo.php" class="btn btn-primary" role="button">VIEW</a> <a href="show-record.php" class="btn btn-primary" role="button">SHOW</a></p></center>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-md-3">
                        <div class="thumbnail">
                          <img src="images/demo/finance1.png" alt="...">
                          <div class="caption">
                            <center><h3>Daily Journal</h3>
                            <p>Facing Internet connection problem. No issue add records without it.</p>
                            <p><a href="daybook.php" class="btn btn-primary" role="button">VIEW</a> <a href="show-daybook.php" class="btn btn-default" role="button">SHOW</a></p></center>
                          </div>
                        </div>
                      </div>
                            
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
        <!-- /row -->
             
              
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

  <?php
      include("footer-imo.php")  ;
    ?>
<script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
	</body>
</html>