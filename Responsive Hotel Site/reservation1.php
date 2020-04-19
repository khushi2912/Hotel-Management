<?php ob_start();
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Book a Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <!--<link rel="stylesheet" href="css/cs-skin-border.css">
    <link rel="stylesheet" href="css/superfish.css">
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/style.css">
-->
    
<style>
body {
	font: 11px/1.4em Verdana, Arial, Helvetica, sans-serif;
}
h1 {
	color: #99CC00;
	margin: 0px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 18px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
#container1 {
    background-color: transparent;
	background-size:650px 750px;
	background-repeat:no-repeat;
	background-position:center;
}

.con2 {
  background: url("img/interesting-facts-about-French-Polynesia-1568x1080.jpg");
  height: 128vh;
  
  background-size: cover;
  background-position: center center; }

.centered-form {
    margin-top: 121px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 1px 4px 9px;
}
</style>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

   <!-- <div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a>VACATION</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.html">Home</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="login.html">Admin</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>-->
    <section class="con2">
        <div class="container">
            <div class="container" id="container1">
                <div class="row centered-form">
                    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Reservation Form</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" >
                                    <div class="form-group">
                                        <input type="text" name="firstnamec" id="firstnamec" class="form-control input-sm" placeholder="First Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="lastnamec" id="lastnamec" class="form-control input-sm" placeholder="Last Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <center>Enter DOB in yyyy-mm-dd format only.</center>
                                            </div>
                                        </div>
                    
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="dob" id="dob" class="form-control input-sm" placeholder="DOB" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="aadharc" id="aadharc" class="form-control input-sm" placeholder="Aadhar" required>
                                    </div>
                                
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Your Email" required>
                                    </div>

                                    <input type="submit" name="submitc" value="Proceed" class="btn btn-info btn-block">
                                </form>

                                <?php
                                    include("dbconnect.php");
                                    if(isset($_POST['submitc']))
                                    {
                                        $fname=$_POST['firstnamec'];
                                        $lname=$_POST['lastnamec'];
                                        $phone=$_POST['phone'];
                                        $add=$_POST['address'];
                                        $dob=$_POST['dob'];
                                        $_SESSION['aadharc']=$_POST['aadharc'];
                                        $aadhar=$_POST['aadharc'];
                                        $mail=$_POST['email'];
                                        $query1="INSERT INTO customer VALUES(NULL,'$fname','$lname','$mail','$add','$phone','$dob','$aadhar')";
                                        $conn->query($query1) or die("Couldn't insert");
                                        header('Location: reservation2.php');
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>