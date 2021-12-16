<!DOCTYPE html>
<html>
<head>
<title>Sales Tax</title>
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
    <li class="active"><a href="#">&nbsp;&nbsp;&nbsp; Sales Tax Details &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
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
    <form method="post" action="sales-reg.php">
	<br>
     <center><b><span style="font-size:25px;">Sales Tax Details</span> </b></center>
        <hr>
        <div class="form-group">
  <label>Registered for Sales Tax<span>*</span>&nbsp; (If not Registered than do not require to fill details)</label>
 <select class="form-control drop" required name="salestax">
  <option>Registered</option>
  <option>Not Registered</option>
</select>
</div>
   <div class="form-group">
    <label>Effective From:<span>*</span></label>
    <input type="date" class="form-control drop" required name="effrom">
  </div>
    <div class="form-group">
    <label>Main Sales Tax name:</label>
    <input type="text" class="form-control drop" name="name">
        <p style="color:gray; font-size: 15px;">e.g. VAT, GST, etc. (or just Sales Tax if that's what it is)</p>
  </div>
     <div class="form-group">
         <label>Rates</label>
    <input type="number" class="form-control drop" name="rates">
       <p style="color:gray; font-size: 15px;">Enter 0 if tax is not always charged. Leave the box Blank if it is not required.</p> 
  </div>
  <div class="form-group">
    <label>Registration Number</label>
    <input type="Text" class="form-control drop" name="reg">
      <p style="color:gray; font-size: 15px;">Leave boxes blank if no registration number is required.</p>
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
                Detail Expenses weekly to aviod missing expenses or being overwhelmed at tax time.
            </p>
            <br>
            </center>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>