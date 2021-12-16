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
        
        <title>ACCOUNTER- Contact</title>
        
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
          	<h3><i class="fa fa-angle-right"></i> Contact</h3>
                <div class="row mt">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> New Contact</h4>
    <form action="add-cont-imo.php" method="post" class="form-horizontal tasi-form">
	<br>
    <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">First Name: <span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control round-form"  required name="fname">
  </div>
        </div>
  <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Last Name: <span>*</span></label>
    <div class="col-sm-4">
    <input type="Text" class="form-control drop" required name="lname">
  </div>
        </div>
  <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">SHG Name <span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" required name="bname">
  </div>
        </div>
        <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">SHG Member Name 1 (Leader)<span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" required name="bname">
  </div>
        </div>
            <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">SHG Member Name 2<span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" required name="bname">
  </div>
        </div>
                <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">SHG Member Name 3<span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" required name="bname">
  </div>
        </div>
        <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">SHG Member Name 4<span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" required name="bname">
  </div>
        </div>
     <div class="form-group">
   <label class="col-sm-2 col-sm-2 control-label">Email<span>*</span></label>
        <div class="col-sm-4">
    <input type="email" class="form-control" required name="email">
  </div>
        </div>
     <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Mobile Number:<span>*</span></label>
    <div class="col-sm-4">
    <input type="number" class="form-control" required name="mob">
  </div>
        </div>
      <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Telephone Number </label>
    <div class="col-sm-4">
    <input type="number" class="form-control" name="tele">
  </div>
        </div>
    <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Address </label>
    <div class="col-sm-4">
    <textarea name="address" cols="30" rows="10" class="form-control" placeholder="Write your address" required></textarea>
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