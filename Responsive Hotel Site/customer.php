<html>
    <head></head>
    <body>
     <!--<div style="font-size:20px;color:red;border:2px solid black;height:500px;width:500px;border-radius:20px">-->
        <?php
        //For Database Connection make a different file and include that file. No Duplicate Code.
        include('dbconnect.php');
        //Use if isset from the submit name
       // if(isset($_POST['submit']))
        //{
            // Use mysqli_real_escape_string for inserting into database
        //$username=$_POST['username'];
        //$password=$_POST['password'];
        //No need for error Reporting
        //error_reporting(0);
        $query = "SELECT * FROM 'customer'";
        if($is_query_run = mysql_query($query))
        {
            while($query_executed = mysql_fetch_assoc($is_query_run))
            {
                echo $query_executed['CID'].' ';
                echo $query_executed['Fname'].' ';
                echo $query_executed['Lname'].' ';
                echo $query_executed['Email'].' ';
                echo $query_executed['Address'].' ';
                echo $query_executed['Phone'].' ';
                echo $query_executed['DOB'].' ';
                echo $query_executed['Aadhar'].'<br>';
            }
        }
        else
        {
            echo "Error in execution";
        }
        ?>
    </body>
</html>