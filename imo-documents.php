<!DOCTYPE html>
<html>
<head>
<title>IMO Documents</title>
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
      <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; IMO/NGO Details &nbsp;&nbsp;&nbsp; <span class="sr-only">(current)</span></a></li>
     <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Registration Details &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
    <li class="active"><a href="#">&nbsp;&nbsp;&nbsp; Document Upload &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Businesses Details &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
            </ul>
</nav>
            </div>
          <div class="col-sm-1"></div>
        </div>
      <div class="row">
        <br>
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="head">
    <form action="imo-upload.php" method="post" enctype="multipart/form-data">
	<br>
        <center><b><span style="font-size:25px;">Verification of IMO/NGO</span> </b></center>
        <hr>
        <div class="form-group">
  <label>Address Proof<span>*</span></label>
 <select class="form-control drop" name="addproof" required name="addproof">
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
  <label>IMO/NGO Proof<span>*</span></label>
 <select class="form-control drop" name="imoproof" required>
  <option>A society Under Societies Registration Act, 1860</option>
  <option>a public trust or charitable trust Under Indian Trust Act, 1880 </option>
  <option>Multi-state co-operative society Act 2002</option>
  <option> A non- profit company Under Section-8 of Companies Act, 2013</option>
</select>
    <br>
    <input type="file" id="exampleInputFile" required name="imophoto">
</div>
    <div class="form-group">
    <label for="exampleInputFile">Document verification for a society</label>
    <input type="file" id="exampleInputFile" name="certificate1">
    <p class="help-block"> Under Societies Registration Act, 1860</p>
  </div>
    <div class="form-group">
    <label for="exampleInputFile">Document verification for a public trust or charitable trust</label>
    <input type="file" id="exampleInputFile" name="certificate2">
    <p class="help-block"> Under Indian Trust Act, 1880 </p>
  </div>
    <div class="form-group">
    <label for="exampleInputFile">Document for Multi-state co-operative society Act 2002</label>
    <input type="file" id="exampleInputFile" name="certificate3">
    <p class="help-block">Image/PDF format is supported.</p>
  </div>
        <div class="form-group">
    <label for="exampleInputFile">An non-Profit company</label>
    <input type="file" id="exampleInputFile" name="certificate4">
    <p class="help-block">Under Section-8 of Companies Act, 2013</p>
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