<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: IMOlogin.php');
	exit;
}
extract($_POST);
if(isset($save))
{
	if($sp>$cp)
	{
	$p=$sp-$cp;
	$pp=($p*100)/$cp;
	$res= "Profit=".$p."<br>";
	$res.= " Profit % =".$pp."";
	}
	else
	{
	$l=$cp-$sp;
	$lp=($l*100)/$cp;
	$res= "Loss=".$l."<br>";
	$res.= " Loss % =".$lp."";
	}
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
        
        <title>ACCOUNTER-Profit/Loss Calculator</title>
        
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
       <form method="post">
                  <div class="col-md-12">
                      <div class="content-panel table-responsive">
                          <table class="table table-striped table-advance table-bordered">
                              <h4><i class="fa fa-angle-right"></i> Profit-Loss</h4>
	                  	  	  <hr>
                              <h4>Enter Data:</h4>
                              
                              <tr>
                                <th><center>Revenue</center></th>
                                <th><center>Expenses</center></th>
                                  
                              </tr>
                              <tr>
                                  <td>
                                    <div class="input-group">
                                  <div class="input-group-addon">Rs.</div>
                                  <input class="form-control"   type="number" name="sp" value="<?php  echo @$sp;?>">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                                  <td>
                                    <div class="input-group ">
                                  <div class="input-group-addon">Rs.</div>
                                  <input  class="form-control"  type="number" name="cp" value="<?php  echo @$cp;?>">
                                  <div class="input-group-addon">.00</div>
                                    </div>
                              </td>
                              <tr>
                                <td ><center><b>Profit/Loss:</b></center></td>
                                <td>
                                    <span  readonly="readonly" disabled="disabled"><?php echo @$res;?></span></td>
                                </tr>
                              <tr>
                                  <td></td>
                              <td colspan="2"><input type="submit" 
				name="save" value="Check"/></td>
                              </tr>
                                </table>
                        </div>
                    </div>
           </form>
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