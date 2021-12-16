<!DOCTYPE html>
<html>
<head>
<title>Women Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">

</head>
<style>
    #container{
       background-image: url(images/demo/backgrounds/registerbg.jpg);
        background-size: cover;
    }
	.register{
		background: #d1d698;
        padding: 10px 10px 10px 10px;
        font-family: Bahnschrift; 
        border: solid 1px teal;
        border-radius: 15px;
        box-shadow: 10px 10px 5px 2px;
	}
	#heading{
        font-family: Arial Rounded MT Bold;
        text-align: center;	
	}
    #head{
        font-size: 18px;
    }
</style>
<body >
<div id="container">
		<?php

		include("header.php");

		?>
	<div class="container">
        <h1 id="heading">Registration for Enterprenuer</h1>
        <br><br>
		<div class="row register">
		
	<div class="col-sm-5">
		<h2 >Start managing you Expenses Digitally</h2>
		<p id="head">No charges required. Free services Available.</p>
		<br>
		<hr>
		<br>
		<h3>Trust worthy</h3>
		<p id="head">Security is our first priority</p>
		<br>
		<h3>Help always on hand</h3>
		<p id="head">Queries solved in no-time</p>
		<br>
		<h3>Runs Smoothly</h3>
		<p id="head">Fast and efficient work model</p>
		<br>
		<br>
		<hr>
		<h2>You Spend. We Calculate.</h2>
        <br><br><br><br><br>
			
	</div>
	<div class="col-sm-1"><br>
            </div>
	<div class="col-sm-6" id="head">
	<form method="post" action="regcode.php">
	<br>
  <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control" name="fname">
  </div>
   <div class="form-group">
    <label>Last Name:</label>
    <input type="text" class="form-control" name="lname">
  </div>
    <div class="form-group">
    <label>Email (You'll use this to sign-in)</label>
    <input type="email" class="form-control" name="email">
  </div>
     <div class="form-group">
    <label>Confirm Email</label>
    <input type="email" class="form-control">
  </div>
  <div class="form-group">
    <label>Business Name</label>
    <input type="Text" class="form-control" name="bname">
  </div>
  <div class="form-group">
  <label>Business Type</label>
 <select class="form-control" name="btype">
  <option>Private Limited Company</option>
  <option>Limited Liaibility Partnership</option>
  <option>Registered Partnership</option>
  <option>One Person Company </option>
  <option>Public Limited Company</option>
</select>
</div>
  <div class="form-group">
  <label>Business Level</label>
 <select class="form-control" name="blevel">
  <option>Universal</option>
  <option>National</option>
  <option>Local</option>
</select>
</div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" name="password" >
  </div>

  <div class="checkbox">
    <label>  
      <input type="checkbox"> Join our mailing list (get offers and updates)
	</label>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button><br>
    <center><button type="reset" class="btn btn-default btn-lg">Reset</button></center>
<br>
        <center><p id="head">By clicking the above button you agree to our
<a>Terms of Service</a> and <a>Privacy Policy.</a> </p></center>
	</form>
	</div>
</div>
	</div>
 
    </div>
    <?php
     include("footer.php"); 
    ?>
</body>
</html>