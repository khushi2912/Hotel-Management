<?php ob_start();//to start session .write this in all php files
    session_start();// to use header function
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Family Details</title>
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
                                <h3 class="panel-title text-center">Family Details</h3>
                            </div>
                            <div class="panel-body">    
                                <form role="form" method="POST" action="reservation3.php">
                                    <div class="form-group">
                                        <input type="text" name="firstnamef" id="firstnamef" class="form-control input-sm" placeholder="First Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="lastnamef" id="lastnamef" class="form-control input-sm" placeholder="Last Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="aadharf" id="Aadhar" class="form-control input-sm" placeholder="Aadhar" required>
                                    </div>                    
                                    
                                    <div class="form-group">
                                        <input type="text" name="age" id="age" class="form-control input-sm" placeholder="Age" required>
                                    </div>

                                    <input type="submit" name="submit1" value="Proceed" class="btn btn-info btn-block">
                                </form>
                            </div>
                            <?php
                            include("dbconnect.php");
                            if(isset($_POST['submit1']))
                            {
                                $fname=$_POST['firstnamef'];
                                $lname=$_POST['lastnamef'];
                                $aadhar=$_POST['aadharf'];
                                $age=$_POST['age'];
                                $aadhar1=$_SESSION['aadharc'];
                                $CID="SELECT CID from customer where Aadhar='$aadhar1'";
                                $CID2=$conn->query($CID);
                                while($row=$CID2->fetch_assoc())
                                {
                                    $CID3=$row['CID'];
                                }

                                $query1="INSERT INTO family VALUES('$aadhar','$CID3','$fname','$lname','$age')";
                                $conn->query($query1) or die("Error");
                                //echo "Customer Added";
                                // add or die();
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>cx5
        </div>
    </section>
</body>
</html>