<!DOCTYPE html>
<html>
<head>
<title>Documents Upload</title>
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
<body>
<div class="container-fluid" id="details">
  <div class="container">
    <div class="row" >
        <center> <img src="images/demo/logo.png" class="img-responsive"></center>
       <h2> Welcome </h2>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        <nav id="progress">
  <ul class="pagination">
    
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Business Details &nbsp;&nbsp;&nbsp; <span class="sr-only">(current)</span></a></li>
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Accounting Dates &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Sales Tax Details &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
    <li class="active"><a href="#">&nbsp;&nbsp;&nbsp; Documents Upload &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
  </ul>
</nav>
            </div>
          <div class="col-sm-1"></div>
        </div>
      <div class="row">
        <br>
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="head">
    <form action="upload-reg.php" method="post" enctype="multipart/form-data">
	<br>
        <center><b><span style="font-size:25px;">Verification of Business</span> </b></center>
        <hr>
        <div class="form-group">
  <label>Address Proof<span>*</span></label>
 <select class="form-control drop" name="addproof" required>
  <option>Phone Bill</option>
  <option>Electricity Bill</option>
  <option>Domicile Proof</option>
  <option>Business License</option>
  <option>Permits from local , state or federal government</option>
</select>
    <br>
    <input type="file" id="exampleInputFile" required name="addphoto">
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
    <br>
    <input type="file" id="exampleInputFile" required name="bankphoto">
</div>
    <div class="form-group">
    <label for="exampleInputFile">Certificate of formation</label>
    <input type="file" id="exampleInputFile" required name="certificate1">
    <p class="help-block">Image format is also supported.</p>
  </div>
        <div class="form-group">
    <label for="exampleInputFile">VAT registration Certificate</label>
    <input type="file" id="exampleInputFile" name="certificate2">
    <p class="help-block">Image/PDF format is also supported.</p>
  </div>

  <button type="submit" class="btn btn-success btn-lg btn-block">Save and Continue</button><br>
    <center><button type="reset" class="btn btn-default btn-primary">Reset</button></center>
<br>
        <p class="help-block">These documents will we verified within 10-12 business days. You can check the status on dashboard.</p>
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
                Ensure clients pay on time to protect cash flow.
            </p>
            <br>
            </center>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>