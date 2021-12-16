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
        
        <title>ACCOUNTER-Trial Balance</title>
        
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
        <section class="wrapper" style="color:black; font-size:15px;">
   <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel table-responsive">
                          <table class="table table-striped table-advance table-bordered">
                              <h4><i class="fa fa-angle-right"></i> Trial Balance</h4>
	                  	  	  <hr>
                              <h4>Enter Data:</h4>
                              <br>
                              <tr>
                                <th>Ledger Accounts</th>
                                <th>Debit Amount</th>
                                <th>Credit Amount</th>
                              </tr>
                              <tr>
                                <td>Cash</td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                              </tr>
                              <tr>
                                <td>Loans Outstanding</td>
                                <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                </tr>
                              <tr>
                                <td>Loans Payable</td>
                                <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                              <tr>
                                <td>Inerest Income</td>
                                <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                              <tr>
                                <td>Salaries</td>
                                <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                </tr>
                              <tr>
                                <td>Rent Expenses</td>
                                <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                </tr>
                              <tr>
                                <td>Totals</td>
                                <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input type="text" class="form-control" name="crdamt">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                </tr>
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


</body>
</html>