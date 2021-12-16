<!DOCTYPE html>
<html>
<head>
<title>Accounting Dates</title>
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
    <li class="active"><a href="#">&nbsp;&nbsp;&nbsp; Accounting Dates &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
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
    <form method="post" action="accounting-reg.php">
	<br>
            <center><b><span style="font-size:25px;">Accounting Dates</span> </b></center>
        <hr>
        <div class="form-group">
  <label>When did you officially started your business?<span>*</span></label>
     <input type="date" class="form-control drop" required name="start">
    <p style="color:gray; font-size: 15px;">The day your company started.</p>
  </div>
   <div class="form-group">
    <label>When did your first accounting year end?<span>*</span></label>
    <input type="Date" class="form-control drop" required name="end">
    <p style="color:gray; font-size: 15px;">This should be one year after the end of the month you started the business.</p>
  </div>
    <div class="form-group">
  <label>What date you want to keep your books from?<span>*</span></label>
     <input type="date" class="form-control drop" required name="ourdate">
    <p style="color:gray; font-size: 15px;">We will call this your Accounter Start Date.</p>
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
                Update records daily. This improves accuracy and prevents administrative overload.
            </p>
            <br>
            </center>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>