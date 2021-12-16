<!DOCTYPE html>
<html>
<head>
<title>IMO Authorized Business</title>
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
    <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp; Document Upload &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
    <li class="active"><a href="#">&nbsp;&nbsp;&nbsp; Businesses Details &nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
   
  </ul>
</nav>
            </div>
          <div class="col-sm-1"></div>
        </div>
      <div class="row">
        <br>
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="head">
    <form action="dashboard-imo.php" method="post">
	<br>
        <center><b><span style="font-size:25px;">IMO Authorized Business Details</span> </b></center>
        
        <hr>
    <div class="form-group">
    <label>Number of Autorized Businesses: <span>*</span></label>
    <input type="number" class="form-control drop" required>
  </div>
    <div class="form-group">
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="option1"> Private Limited Company
      <br>
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="option2"> Limited Liaibility Partnership
    <br>
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3"> Registered Partnership
    <br>
</label>
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3"> One Person Company
    <br>
</label>
    <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3"> Public Limited Company
    <br>
</label>
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