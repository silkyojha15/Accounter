<!DOCTYPE html>
<html>
<head>
<title>Accounter</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">

</head>
<body >
<div id="top">
    <?php
		include("header.php");
    ?>
<div class="container-fuild">
            <div class="row">
                <div class="col-md-12">
                <center><h1>CONTACT US!</h1></center>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                		<form action="mail_handler.php" method="post">
						<div class="row form-group">
							<div class="col-md-6">
								
								NAME:<input type="text" name="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								
								LAST NAME:<input type="text" name="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								
								EMAIL:<input type="email" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>
                            
                        <div class="row form-group">
							<div class="col-md-12">
								
								ADDRESS:<input type="text" name="address" class="form-control" placeholder="Your city name">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								
								SUBJECT OF COMPLAINT/FEEDBACK:<input type="text" name="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								
								DETAILS:<textarea name="message" name="message" cols="30" rows="10" class="form-control" placeholder="Write your COMPLAINT"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="SUBMIT" name="submit" class="btn btn-primary">
						</div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    <?php
		include("footer.php");
    ?>
    </div>   
</body>
</html>