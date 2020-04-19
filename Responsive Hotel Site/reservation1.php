<?php ob_start();//to start session .write this in all php files
    session_start();// to use header function
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Book a Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    
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
                        <form role="form" method="POST" action="reservation2.php">
                            <div class="form-group">
                                <input type="text" name="firstnamec" id="first_name" class="form-control input-sm" placeholder="First Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="lastnamec" id="last_name" class="form-control input-sm" placeholder="Last Name" required>
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
                                        <input type="text" name="city" id="city" class="form-control input-sm" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        DOB<input type="date" name="dob" id="dob" class="form-control input-sm" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="aadharc" id="Aadhar" class="form-control input-sm" placeholder="Aadhar" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" name="email" id="last_name" class="form-control input-sm" placeholder="Your Email" required>
                            </div>

                            <input type="submit" name="submitc" value="Proceed" class="btn btn-info btn-block">
                        </form>
                        <?php
                            include("dbconnect.php");
                            echo "hey"; 
                            if(isset($_POST['submitc']))
                            {
                                $fname=$_POST['firstnamec'];
                                $lname=$_POST['lastnamec'];
                                //$_SESSION['first_name']=$fname;
                                //$_SESSION['firstnamec']=$_POST['firstnamec'];
                                //$_SESSION['lastnamec']=$_POST['lastnamec'];
                                //$_SESSION['phone']=$_POST['phone'];
                                //$_SESSION['address']=$_POST['address'];
                                //$_SESSION['city']=$_POST['city'];
                                //$_SESSION['dob']=$_POST['dob'];
                                $_SESSION['aadharc']=$_POST['aadharc'];
                                //$lname=$_POST['last_name'];
                                $phone=$_POST['phone'];
                                $add=$_POST['address'];
                                //$city=$_POST['city'];
                                $dob=$_POST['dob'];
                                $aadhar=$_POST['aadharc'];
                                $mail=$_POST['email'];
                                echo "$fname.$lname.$phone.$add.$city.$dob.$aadhar.$mail";
                                $query1="INSERT INTO customer VALUES(NULL,'$fname','$lname','$mail','$add','$phone','$dob','$aadhar')";
                                $conn->query($query1) or die("Couldn't insert");
                                //echo "Customer Added";
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