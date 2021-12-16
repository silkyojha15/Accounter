<!DOCTYPE html>
<html>
<head>
<title>Women LogIn</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<style>
    #container{
       background-image: url(images/demo/backgrounds/account.jpg);
        background-size: cover;
    }
    #box{
        background:#d4bda6 ;
                font-family: Bahnschrift; 
        border: 2px;
        border-radius: 15px;
        box-shadow: 10px 10px 5px 2px;
    }
    #heading{
        font-family: Arial Rounded MT Bold;
        text-align: center;	}
    #head{
        font-size: 18px;
    }
</style>
</head>
<body >
<div id="container">
		<?php

		include("header.php");

		?>
    <div class="container">
       
        <div class="row">
             
            <div class="col-sm-3"></div>
            <div class="col-sm-5" id="box">
                <br>
            <center><h3 id="heading">Ready to digitalize Accounting process?</h3></center>
                
            <form method="post" action="authenticate.php">
        
	<br>
            <div class="form-group">
                <i class="fas fa-user"></i>
            <label id="head">Email:</label>
            <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
            <i class="fas fa-lock"></i>
            <label id="head">Password:</label>
            <input type="password" name="password" class="form-control" value="">
            </div>
            
            <button type="submit" name="login" value="login" class="btn btn-success btn-lg btn-block">Log In</button>
            </form>
                <br>
                <br>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>

<?php
   include("footer.php");
    ?>
</body>
</html>