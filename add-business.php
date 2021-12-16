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
<title>Add Business</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    
<style> 
    #details{
        background-image: url(images/demo/backgrounds/bg6.png);
        background-size: cover;
    }
    h2{
        text-align: center;
        font-family: Bahnschrift;
    }
    #head{
        font-size: 18px;
        background: #fed769; 
        border-radius: 15px;
        font-family: Bahnschrift;
        box-shadow: 10px 10px 5px 2px;
    }
    #progress
    {
        font-size: 17px;
        font-family: Bahnschrift;
    }
    p
    {
        font-size: 18px;
        font-family: Bahnschrift;    
        color: black;
    }
    .drop{
        font-size: 16px;
    }
</style>
</head>
<body>
<div class="container-fluid" id="details">
  <div class="container">
    <div class="row" >
        <center> <img src="images/demo/logo.png" class="img-responsive"></center>
      </div>
      <div class="row">
        <br>
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="head">
    <form action="new-busi-reg.php" method="post" enctype="multipart/form-data">
	<br>
        <center><b><span style="font-size:25px;">NEW BUSINESS DETAILS</span> </b></center>
        
        <hr>
    <div class="form-group">
    <label>Business Name: <span>*</span></label>
    <input type="text" class="form-control drop" required name="bname">
  </div>
  <div class="form-group">
    <label>Registration Number: <span>*</span></label>
    <input type="Text" class="form-control drop" required name="reg">
  </div>
  <div class="form-group">
    <label >Registered Under: <span>*</span>&nbsp;(Name of the Enterpreneur)</label>
    <input type="text" class="form-control" required name="owner">
  </div>
    <div class="form-group">
  <label>Type of Business<span>*</span></label>
     <select class="form-control drop" name="btype" required>
  <option>Private Limited Company</option>
  <option>Limited Liaibility Partnership</option>
  <option>Registered Partnership</option>
  <option>One Person Company </option>
  <option>Public Limited Company</option>
</select>
        </div>
    <div class="form-group">
    <label >Accounting Year Start <span>*</span></label>
    <input type="date" class="form-control drop" required name="start">
  </div>
    <div class="form-group">
    <label >Accounting Year End <span>*</span></label>
    <input type="Date" class="form-control drop" required name="end">
  </div>
    <div class="form-group">
  <label>Owner Proof<span>*</span></label>
 <select class="form-control drop" name="ownerproof" required name="addproof">
  <option>AaDhar Card</option>
  <option>PAN Card</option>
  <option>Passport</option>
  <option>Government ID</option>
  <option>Other</option>
</select>
    <br>
    <input type="file" id="exampleInputFile" required name="ownerphoto">
</div>
      <div class="form-group">
  <label>Bank Proof<span>*</span></label>
 <select class="form-control drop" name="bankproof" required>
  <option>Bank Statement</option>
  <option>Bank Passbook</option>
  <option>Account Statement</option>
  <option>Written Document</option>
  <option>Other</option>
</select>
          <input type="file" id="exampleInputFile" required name="bankphoto">
        </div>
        <div class="form-group">
    <label for="exampleInputFile">Certificate of formation</label>
    <input type="file" id="exampleInputFile" required name="certificate1">
    <p class="help-block">Image format is also supported.</p>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block">Save and Continue</button><br>
    <center><button type="reset" class="btn btn-default btn-primary">Reset</button></center>
<br>

	</form>    
        </div>
        <div class="col-sm-3"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <center> <img src="images/demo/bulb.jpg" class="img-responsive img-circle">
                <br>
            <p>
                Keep records organised to make auditing easier. Audit regularly so you can catch mistakes early.
            </p>
            <br>
            </center>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>