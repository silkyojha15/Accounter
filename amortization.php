<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: IMO-login.php');
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
        
        <title>ACCOUNTER-Working Capital Scheme</title>
        
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
        <section class="wrapper" style="color:black;">
            <div class="row mt">
                <div class="col-md-12">
                <h3>Amortization</h3>
                </div>
            </div>
            
            <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel ">
                          <h4>Amortization is the paying off of debt with a fixed repayment schedule in regular installments over a period of time.</h4>
                          <h4>For total number of payments which are entered as years and months </h4>
                      </div>
                </div>
            </div>
                          
   <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel table-responsive">
                          <table class="table table-striped table-advance ">
                        <h4><i class="fa fa-angle-right"></i> Amortization Calculator</h4>
	                  	  	  
                <tr><td>Principal Amount:</td>
                  <td><input id="principal" onchange="calculate();"></td>
                </tr>
                 <tr><td>Rate (%):</td>
	           <td><input id="rate" onchange="calculate();"></td>
                              </tr>
                <tr><td>Total Number of Payments:</td>
	           <td><input id="num" onchange="calculate();"></td>
                              </tr>
                    <tr><td>Payment Type: (Years=0 or Months=1)</td>
	           <td><input id="years" onchange="finance.AM();"></td>
                              </tr>
                  <tr><th><h4>Approximate Monthly Payment:</h4></th>
	           <td><button onclick="calculate();" class="btn btn-primary">Calculate</button>
        <button class="btn btn-primary" type="reset">Reset</button></td>
                              </tr>
                      <tr><td>Total payment:</td>
	  <td><span class="output" id="payment"></span></td></tr>           
                              
                              </table>
        </div>
       </div>
        </div>
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

   <?php
        include("footer-imo.php");
        ?>

         <script>

function calculate() {
  
  var principal = document.getElementById("principal");
  var rate = document.getElementById("rate");
  var num = document.getElementById("num");
  var years = document.getElementById("years");
  var payment = document.getElementById("payment");
    
    var Finance = require('financejs');

  var finance = new Finance();
    
   finance.AM(20000, 7.5, 5, 0);S
   
    
    payment.innerHTML = "x";
}