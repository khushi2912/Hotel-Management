<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Feedbacks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/superfish.css">
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/style.css">

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

    .table_style {
        width: 100px;
        height: 30px;
    }
    </style>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a>VACATION</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="customer.php">Customers</a></li>
							<li>
								<a class="fh5co-sub-ddown">Employees</a>
								<ul class="fh5co-sub-menu">
									<li><a href="employees.php">View employees</a></li>
									<li><a href="#">Add employee</a></li>
									<li><a href="#">Update employee detail</a></li>
									<li><a href="#">Remove employee</a></li>
								</ul>
							</li>
							<li><a href="reservations.php">Reservations</a></li>
							<li><a href="bills.php">Bills</a></li>
							<li><a class="active" href="feedback.php">Feedbacks</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
    <section class="con2">
        <div class="container">
            <div class="container" id="container1">
                <div class="row centered-form">
                    <!--<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">-->
                        <div class="panel panel-default" style="width:80%;height:400px;text-align:center;margin-left:90px">
                            <?php
                                include("dbconnect.php");
                                $sql = "SELECT * FROM feedback";
                                $name = $conn->query($sql);
                                echo "<table style='border:3px solid black;margin:auto;position:relative;top:15%'><tr><th class='table_style'>F_No</th><th class='table_style'>Rating</th><th class='table_style'>Comment</th></tr>";
                                while($row = $name->fetch_assoc())
                                {
                                    echo "<tr><td class='table_style'>".$row["F_No"]."</td><td class='table_style'>".$row["Rating"]."</td><td class='table_style'>".$row["Comment"]."</td></tr>";
                                }
                                echo "</table>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
