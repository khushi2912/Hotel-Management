<?php ob_start();//to start session .write this in all php files
    session_start();// to use header function
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Payment</title>
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
                                <h3 class="panel-title text-center">Payment</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                    <div class="form-group">
                                      <label for="cardNumber">CARD NUMBER</label>
                                      <input type="tel" class="form-control input-sm" name="cardNumber" placeholder="Valid Card Number" required autofocus />

                                    </div>
                                    <div class="form-group">
                                      <label for="cardExp">Expiration Date</label>
                                        <input type="text" name="cardExp" id="cardExp" class="form-control input-sm" placeholder="MM/YY" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="CVV">CVV</label>
                                      <input type="password" class="form-control input-sm" name="CVV" placeholder="CVV"  required />
                                    </div>
                                    <input type="submit" name="final" value="CONFIRM" class="btn btn-info btn-block">
                                </form>
                                <?php
                                    include("dbconnect.php");
                                    if(isset($_POST['final']))
                                    {
                                        $startdate =strtotime($_SESSION['Arrive']);
                                        $enddate = strtotime($_SESSION['Depart']);
                                        $days = ($enddate - $startdate)/60/60/24;
                                        $roomno=$_SESSION['rno'];
                                        //echo "$roomno";
                                        $fare="SELECT Fare from room where RNo='$roomno'";
                                        $fare1=$conn->query($fare);
                                        while($row=$fare1->fetch_assoc())
                                        {
                                            $fare2=$row['Fare'];
                                        }
                                        $Days=$days+1;
                                        $amount =  $Days * $fare2;
                                        echo "Total amount to be paid "."$amount";

                                        $cardnumber=$_POST['cardNumber'];

                                        $checkin1=$_SESSION['Arrive'];
                                        $checkout1=$_SESSION['Depart'];
                                        
                                        $rid="SELECT RID FROM reservations WHERE RNo='$roomno' AND CheckIn='$checkin1' AND CheckOut='$checkout1'";
                                        $rid1=$conn->query($rid);
                                        while($row=$rid1->fetch_assoc())
                                        {
                                            $rid2=$row['RID'];
                                        }
                                        //echo "$rid2";
                                        $billing="INSERT into bill VALUES(NULL,'$rid2','$amount','$cardnumber')";
                                        $conn->query($billing) or die("couldn't insert");


                                    }
                                ?>
                                <form method="POST">
                                <br><br>
                                    <input type="submit" name="proceed" value="Proceed" class="btn btn-info btn-block">
                                </form>
                                <?php
                                    include("dbconnect.php");
                                    if(isset($_POST['proceed']))
                                    {
                                        header('Location: index.html');
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
