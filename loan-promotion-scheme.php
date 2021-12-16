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
        
        <title>ACCOUNTER- Loan Promotion Scheme</title>
        
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
          	<h3><i class="fa fa-angle-right"></i> Loan Promotion Scheme</h3>
            <hr>
                <div class="row mt">
                    <div class="col-lg-12" style="font-size:16px;">
                    <div class="form-panel">
                    <p>This scheme is for providing loans to new and smaller organizations with experience of at least 6 months in thrift & credit. The organization can avail a maximum loan up to Rs. 10 lakhs.</p>
                        
                    <h4><b>PURPOSE OF LOAN</b></h4>
                    
                    <p>Organisations availing loan from RMK shall on-lend to the end beneficiaries for the following purposes:-
                    Income generating activities such as setting up of small business, asset creation, agriculture, petty shop, livestock rearing, transport services, etc.
                    </p>
                    </div>
                        </div>
                </div>
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
            <a href="show-loan-promotion.php"><button type="submit" class="btn btn-success">Show Loan Data</button></a><br>
        </div>
                <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Loan Details</h4>
    <form action="loan-promotion-data.php" method="post" class="form-horizontal tasi-form" style="font-size:15px;" enctype="multipart/form-data">
	<br>
    <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Loan Amount: <span>*</span></label>
        
    <div class="col-sm-4">
    <input type="text" class="form-control"  required name="loan_amount">
        
        <p>(Total amount taken from RMK)</p>
  </div>
        </div>
  <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Paid Amount: <span>*</span></label>
    <div class="col-sm-4">
    <input type="Text" class="form-control drop" required name="paid_amount">
        <p>(Total amount paid to the RMK)</p>
  </div>
        </div>
  <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Interest Rate: <span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" required name="ir">
        <p>(Interest Rate on the loan)</p>
  </div>
        </div>
     <div class="form-group">
   <label class="col-sm-2 col-sm-2 control-label">Overall Interest Rate:<span>*</span></label>
        <div class="col-sm-4">
    <input type="percent" class="form-control" required name="overall_ir">
            <p>(Interest Rate to the businesses)</p>
  </div>
        </div>
     <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Amount Distributed to SHG/ Enterpreneurs<span>*</span></label>
    <div class="col-sm-4">
    <select class="form-control" name="shg">
              <option>Yes</option>
              <option>No</option>
            </select>
        <br>
        <p>If yes, then fill the following details.</p>
  </div>
         </div>
        
         <div class="form-group">
             <label class="col-sm-2 col-sm-2 control-label"></label>
             <label class="col-sm-2 col-sm-2 control-label"><b style="font-size:15px">SHG Details</b></label><hr>
        </div>
        <div class="form-group">
             <label class="col-sm-2 col-sm-2 control-label"></label>
             <label class="col-sm-2 col-sm-2 control-label">SHG Name:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="shgname">
              </div>
        </div>
        <div class="form-group">
             <label class="col-sm-2 col-sm-2 control-label"></label>
             <label class="col-sm-2 col-sm-2 control-label">Registered Number:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="regno">
                <p>(Registration Number of Business)</p>
              </div>
        </div>
        <div class="form-group">
             <label class="col-sm-2 col-sm-2 control-label"></label>
             <label class="col-sm-2 col-sm-2 control-label">Amount Given:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="amt_giv">
                <p>(The total amount given to the SHG)</p>
              </div>
        </div>
        <div class="form-group">
             <label class="col-sm-2 col-sm-2 control-label"></label>
             <label class="col-sm-2 col-sm-2 control-label">Amount Received:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="amt_rcv">
                <p>(The total Amount recieved from the SHG)</p>
              </div>
        </div>
        <div class="form-group">
             <label class="col-sm-2 col-sm-2 control-label"></label>
             <label class="col-sm-2 col-sm-2 control-label">No. of installement Paid:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="num">
                <p>(Total 30 monthly installment)</p>
              </div>
        </div>
        <div class="form-group">
             <label class="col-sm-2 col-sm-2 control-label"></label>
             <label class="col-sm-2 col-sm-2 control-label">Upload Final Transaction File:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control"  name="file">
                <p>(The file to show the last installment paid.)</p>
              </div>
        </div>
    <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Total Amount Distributed:</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="amt_dst">
        <p>(The total amount distributed to the SHG)</p>
  </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
  <button type="submit" class="btn btn-success">Save and Continue</button><br>
        </div>
        </div>
	</form>    
      </div>
                  </div>
          		</div><!-- col-lg-12-->      	
        <div class="row mt">
                    <div class="col-lg-12" style="font-size:16px;">
                    <div class="form-panel">
                        
                    <h4><b>RATE OF INTEREST</b></h4>
                    
                    <p>Interest rate w.e.f.17.11.2015 are as follows;</p>
                    <p>RMK to NGO - 6% p.a. on reducing balance</p>
                    <p>NGO to SHG/ Individual Beneficiary - any rate on or above 6% p.a. subject to maximum ceiling of 10% p.a. on reducing balance.</p>

                    
                    
                    </div>
                        </div>
                </div>
            <div class="row mt">
                    <div class="col-lg-12" style="font-size:16px;">
                    <div class="form-panel">
                    <h4><b>REPAYMENT</b></h4>
                    
                    <p>Loan amount availed under this scheme, to be repaid within three years i.e. in 30 monthly instalments with an initial gestation period of 6 months.</p>    
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

</body>
</html>