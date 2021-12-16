<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login-women.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Business Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    
<style> 
    #details{
        background-image: url(images/demo/backgrounds/registerbg.jpg);
        background-size: cover;
    }
    h2{
        text-align: center;
        font-family: Bahnschrift;
    }
    #head{
        font-size: 18px;
        background: #dcdbe0; 
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
<body class="loggedin">
<div class="container-fluid" id="details">
  <div class="container">
    <div class="row" >
        <center> <img src="images/demo/logo.png" class="img-responsive"></center>
       <h2> Welcome <?=$_SESSION['mail']?>!</h2>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        <nav id="progress">
  <ul class="pagination">
    
    <li class="active"><a href="#">&nbsp;&nbsp;&nbsp; Business Details &nbsp;&nbsp;&nbsp; <span class="sr-only">(current)</span></a></li>
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Accounting Dates &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Sales Tax Details &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Documents Upload &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
  </ul>
</nav>
            </div>
          <div class="col-sm-1"></div>
        </div>
      <div class="row">
        <br>
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="head">
    <form method="post" action="busi-reg.php">
	<br>
        <center><b><span style="font-size:25px;">Business Details</span> </b>
        <p>Ignore, if already filled. Goto <a href="profile-women.php"><i class="fas fa-user-circle"></i>Profile</a></p></center>
        
        <hr>
        <div class="form-group">
  <label>Confirm your Business Type<span>*</span></label>
 <select class="form-control drop" name="btype" required>
  <option>Private Limited Company</option>
  <option>Limited Liaibility Partnership</option>
  <option>Registered Partnership</option>
  <option>One Person Company </option>
  <option>Public Limited Company</option>
</select>
</div>
        <div class="form-group">
  <label>Business Category <span>*</span></label>
     <select class="form-control drop" name="bcategory" required>
      <option selected>--select--</option>
      <option>Accounting and Bookkeeping</option>
      <option>Administration</option>
      <option>Agriculture</option>
      <option>Apparel & Fashion</option>
      <option>Architecture and Planning</option>
      <option>Arts & Crafts</option>
      <option>Automotive</option>
      <option>Bio Technology</option>
      <option>Builder</option>
      <option>Business/ Management Consulting</option>
      <option>Childcare</option>
      <option>Cleaning</option>
      <option>Communications</option>
      <option>Design</option>
      <option>Education</option>
      <option>Energy</option>
      <option>Engineering</option>
      <option>Events</option>
      <option>Entertainment</option>
      <option>Films and TV</option>
      <option>Financial Services</option>
      <option>Food and Beverages</option>
      <option>Health and Social Care</option>
      <option>Hospitality</option>
      <option>IT Contractor</option>
      <option>Marketing and Advertising</option>
      <option>Music</option>
      <option>Performing Arts</option>
      <option>Photography</option>
      <option>Retails</option>
      <option>Software Development</option>
      <option>Social Clubs</option>
      <option>Web Design</option>
    </select>
    </div>
   <div class="form-group">
    <label>Business Name: <span>*</span></label>
    <input type="text" class="form-control drop" name="bname" required>
  </div>
    <div class="form-group">
    <label>Company Registration Number <span>*</span></label>
    <input type="text" class="form-control drop" name="reg_no" required>
  </div>
     <div class="form-group">
    <label>Company GST Number: <span>*</span></label>
    <input type="text" class="form-control drop" required name="gstnum">
  </div>
  <div class="form-group">
    <label>Business Address: <span>*</span></label>
    <input type="Text" class="form-control drop" required name="badd">
    <input type="Text" class="form-control drop" >
    <input type="Text" class="form-control drop">
  </div>
  <div class="form-group">
    <label >District <span>*</span></label>
    <input type="text" class="form-control" name="bdistt" required>
  </div>
    <div class="form-group">
    <label > City <span>*</span></label>
    <input type="text" class="form-control drop" required name="bcity">
  </div>
    <div class="form-group">
    <label >Pin Code <span>*</span></label>
    <input type="Number" class="form-control drop" required name="pin">
  </div>
    <div class="form-group">
  <label>State <span>*</span></label>
     <select class="form-control drop" required name="state">
      <option selected>--select--</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
    <option value="Daman and Diu">Daman and Diu</option>
    <option value="Delhi">Delhi</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Puducherry">Puducherry</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
        </select>
        </div>
  <button type="submit" class="btn btn-success btn-lg btn-block">Save and Continue</button><br>
    <center><button type="reset" class="btn btn-default btn-primary">Reset</button></center>
        <br>
        
        <center><button type="logout" class="btn btn-default btn-primary"><a href="women-logout.php" style="color:white;">Log Out</a></button></center>
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
                Keep income separate from borrowed funds so that you have an accurate<br> view of what is profit and what needs to be paid back.
            </p>
            <br>
            </center>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>