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
        
        <title>ACCOUNTER- Estimate</title>
        
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
          	<h3><i class="fa fa-angle-right"></i> ESTIMATE</h3>
                <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Estimate</h4>
                      <form class="form-horizontal tasi-form" method="post" action="add-estimate-reg.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Customer Name <span>*</span></label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control round-form" name="customer" required>
                              </div>
                          </div>
                          <div class="form-group">
							<label class="col-sm-2 col-lg-2 control-label">Billing Address<span>*</span></label>
                              <div class="col-sm-6">
								<textarea name="address" cols="30" rows="10" class="form-control" placeholder="Write your address" required></textarea>
							</div>
						</div>
                          <hr>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Attention to</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control round-form" name="attention">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email Id <span>*</span></label>
                              <div class="col-sm-6">
                                  <input type="email" class="form-control round-form" name="email" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Mobile Number: <span>*</span></label>
                              <div class="col-sm-6">
                                  <input type="number" class="form-control round-form" name="mobile" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Estimate #</label>
                              <div class="col-sm-6">
                                  <input type="number" class="form-control round-form" name="estimate" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Estimate Date <span>*</span></label>
                              <div class="col-sm-6">
                                  <input type="date" class="form-control round-form" name="date" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Expiry Date <span>*</span></label>
                              <div class="col-sm-6">
                                  <input type="date" class="form-control round-form" name="exp_date" required>
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                          <div class="col-md-12 mt">
	                  	<div class="content-panel">
	                          <table class="table table-hover">
	                              <thead>
	                              <tr>
	                                  <th>#</th>
	                                  <th>Product/Service Descrption</th>
	                                  <th>Qty/Unit</th>
                                      <th>Rate</th>
                                      <th>Amount</th>
                                      <th>Discount</th>
                                      <th>Tax</th>
                                      <th>Total</th>
	                              </tr>
	                              </thead>
	                              <tbody>
	                              <tr>
	                                  <td>1</td>
	                                  <td><input type="text" class="form-control round-form" name="product1"></td>
	                                  <td><input type="number" class="form-control round-form" name="qty1" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="rate1" placeholder="0.00"></td>
                                      <td><input type="number" class="form-control round-form" name="amount1" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="discount1" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="tax1" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="total1"placeholder="0.00"></td>
	                              </tr>
	                              <tr>
	                                  <td>2</td>
	                                  <td><input type="text" class="form-control round-form" name="product2" ></td>
	                                  <td><input type="number" class="form-control round-form" name="qty2" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="rate2" placeholder="0.00"></td>
                                      <td><input type="number" class="form-control round-form" name="amount2" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="discount2" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="tax2" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="total2" placeholder="0.00"></td>
	                              </tr>
	                              <tr>
	                                  <td>3</td>
	                                  <td><input type="text" class="form-control round-form" name="product3" placeholder=""></td>
	                                  <td><input type="number" class="form-control round-form" name="qty3"placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="rate3" placeholder="0.00"></td>
                                      <td><input type="number" class="form-control round-form" name="amount3" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="discount3" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="tax3" placeholder="0.00"></td>
	                                  <td><input type="number" class="form-control round-form" name="total3" placeholder="0.00"></td>
	                              </tr>
	                              </tbody>
	                          </table>
                            
                            </div>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
                          <div class="row">
                              <div class="col-md-8 mt">
                              <div class="form-group">
                                  <br>
							<label class="col-sm-2 col-lg-2 control-label">NOTE</label>
                              <div class="col-sm-6">
								<textarea name="message" cols="30" rows="10" class="form-control" placeholder="Write your address"></textarea>
							</div>
						</div>
                              </div>
                          <div class="col-md-4 mt">
	                  	<div class="content-panel">
	                          <table class="table">
	                              <tbody>
	                              <tr>
	                                  <td>Total Amount</td>
	                                  <td><input type="number" class="form-control round-form" name="ttl_amount" disabled placeholder="0.00"></td>
	                              </tr>
	                              <tr>
	                                  <td>Discount</td>
	                                  <td><input type="number" class="form-control round-form" name="discount" disabled placeholder="0.00"></td>
	                              </tr>
	                              <tr>
	                                  <td>Taxable Value</td>
	                                  <td><input type="number" class="form-control round-form" name="taxable_value" disabled placeholder="0.00"></td>
	                              </tr> 
                                    <tr>
	                                  <td>Tax</td>
	                                  <td ><input type="number" class="form-control round-form" name="tax" disabled placeholde="0.00"></td>
	                              </tr>
                                  <tr>
	                                  <td>CESS</td>
	                                  <td><input type="number" class="form-control round-form" name="cess" disabled placeholder="0.00"></td>
	                              </tr>
                                  <tr>
	                                  <td><b>Total</b></td>
	                                  <td><input type="number" class="form-control round-form" name="total" disabled placeholder="0.00"></td>  
	                              </tr> 
	                              </tbody>
	                          </table>
                            </div>
                              <br>
                              <button class="btn btn-success" >Submit</button>
	                  	  </div><! --/content-panel -->
                          </div>
                          <br>
                         
                      </form>
                       </div>
                  </div>
          		</div><!-- col-lg-12-->      	
            
        </section>
        </section>
        
        
<footer class="site-footer">
          <div class="text-center">
              Acccounter by BtechTeam1
              <a href="index.html#" class="go-top">
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