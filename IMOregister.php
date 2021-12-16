<!DOCTYPE html>
<html>
<head>
<title>IMO Registration</title>
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
        font-family: Bahnschrift; 
        border: solid 1px teal;
        border-radius: 15px;
        box-shadow: 10px 10px 5px 5px;
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
        <h1 id="heading">Registration for NGOs/Self-Help Groups</h1>
        <br><br>
		<div class="row">
	<div class="col-sm-3">
            </div>
	<div class="col-sm-6 register" id="head">
	<form method="post" action="imo_regcode.php" enctype= "multipart/form-data">
	<br>
  <div class="form-group">
    <label >NGO/SHG Name:<span>*</span></label>
    <input type="text" class="form-control" name="name" required>
  </div>

    <div class="form-group">
    <label>Email <span>*</span>(You'll use this to sign-in)</label>
    <input type="email" class="form-control"  name="email" required>
  </div>
     <div class="form-group">
    <label>Confirm Email<span>*</span></label>
    <input type="email" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Registration Number <span>*</span></label>
    <input type="Text" class="form-control" name="register_no" required>
  </div>
  <div class="form-group">
  <label>NGO/SHG Type</label>
 <select class="form-control" name="type">
  <option>Universal</option>
  <option>National</option>
  <option>Local</option>
</select>
</div>
  <div class="form-group">
    <label >Password<span>*</span></label>
    <input type="password" class="form-control"  name="password" required>
  </div>
    <div class="form-group">
    <label >Confirm Password <span>*</span></label>
    <input type="password" class="form-control" required >
  </div>
    <div class="form-group">
    <label>Number of Business Registered </label>
    <input type="Number" class="form-control" name="num">
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