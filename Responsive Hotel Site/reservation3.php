<?php ob_start();//to start session .write this in all php files
    session_start();// to use header function
  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Room Booking</title>
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
      background-size: 650px 750px;
      background-repeat: no-repeat;
      background-position: center;
    }

    .con2 {
      background: url("img/interesting-facts-about-French-Polynesia-1568x1080.jpg");
      height: 128vh;

      background-size: cover;
      background-position: center center;
    }

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
                <h3 class="panel-title text-center">Room Information</h3>
              </div>
              <div class="panel-body">
                <form role="form" method="POST">
                  <div class="form-group">
                    <label for="room">Choose a Room:</label>
                    <select id="room" name="room">
    									<option value="room1">Deluxe</option>
    									<option value="room2">Super Deluxe</option>
    									<option value="room3">Executive Suite</option>
                    </select>
                  </div>

                  <!--<div class="form-group">
                    <label for="beds">Choose no. of Beds:</label>
                    <select id="beds" name="beds">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>-->
                  
                  <div class="form-group">
                    <label for="Arrive">Arrival:</label>
                    <input type="date" name="Arrive" id="Arrive" class="form-control input-sm" placeholder="Arrival" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="Depart">Departure:</label>
                    <input type="date" name="Depart" id="Depart" class="form-control input-sm" placeholder="Departure" required>
                  </div>
                  
                  <button name="Check" class="btn btn-info btn-block">Check Availability</button>

                  <input type="text" name="rno" id="rno" class="form-control input-sm" placeholder="Room No" required>

                  <input type="submit" value="Proceed" class="btn btn-info btn-block">
                </form>
                <?php
                  include("dbconnect.php");
                  if(isset($_POST['submitc']))
                  {
                    $roomt=$_POST['room'];
                    $query2="SELECT room.RNO,room.Beds,room.Fare,room.Status,reservation.CheckOut FROM room LEFT OUTER JOIN reservation ON room.RNO=reservation.RNO WHERE room.RType=CASE when $roomt = 'Deluxe' then " ;

              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
