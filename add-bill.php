<!DOCTYPE html>
<html>
<head>
<title>Add Bill</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    
<style> 
    #details{
        background-image: url(images/demo/backgrounds/bg4.gif);
        background-size: cover;
    }
    h2{
        text-align: center;
        font-family: Bahnschrift;
    }
    #head{
        font-size: 18px;
        background: #7acbcd; 
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
    <form action="add-cont-reg.php" method="post">
	<br>
        <center><b><span style="font-size:25px;">NEW BILL</span> </b></center>
        
        <hr>
        <Fieldset><label>Bill Details</label></Fieldset>
        <hr>
    <div class="form-group">
    <label>Contact First Name: <span>*</span></label>
    <input type="text" class="form-control drop" required name="fname">
  </div>
  <div class="form-group">
    <label>Contact Last Name: <span>*</span></label>
    <input type="Text" class="form-control drop" required name="lname">
  </div>
  <div class="form-group">
    <label >Business Name <span>*</span></label>
    <input type="text" class="form-control" required name="bname">
  </div>
    <div class="form-group">
    <label >Reference <span>*</span></label>
    <input type="text" class="form-control" required name="bname">
  </div>
    <div class="form-group">
    <label >Bill Date <span>*</span></label>
    <input type="date" class="form-control" required name="bname">
  </div>
    <div class="form-group">
    <label >Due On: <span>*</span></label>
    <input type="date" class="form-control" required name="bname">
  </div>
    <div class="form-group">
    <label >Currency <span>*</span></label>
    <input type="text" class="form-control" required name="bname">
        <p>By default currency is Rupees</p>
  </div>
        <div class="form-group">
    <label >Total Value <span>*</span></label>
    <input type="number" class="form-control" required name="bname">
        
  </div>
        <div class="form-group">
    <label >Category <span>*</span></label>
    <input type="text" class="form-control" required name="bname">
  </div>
    <div class="form-group">
    <label > Comments</label>
        <textarea height="20" width="50"></textarea>
        </div>
    <div class="form-group">
    <label for="exampleInputFile">Attachment</label>
    <input type="file" id="exampleInputFile" required name="certificate1">
    <p class="help-block">Image format is also supported.</p>
  </div>
     <hr>
        <fieldset><label>Recurring Option</label></fieldset>
        <hr>
        <div class="form-group">
  <label>This Bill recurs</label>
 <select class="form-control drop" name="bankproof" required>
  <option>Does Not Recure</option>
  <option>Recure Twice</option>
</select>
        </div>
  <button type="submit" class="btn btn-success btn-lg btn-block">Save and Continue</button><br>

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