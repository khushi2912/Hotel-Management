<?php
    include("dbconnect.php");
    if(isset($_POST['submit']))
    {
        $RID=$_POST['RID'];
        $rating=$_POST['rating'];
        $comment=$_POST['comment'];
        $query1="INSERT INTO feedback VALUES('$RID','$rating','$comment')";
        $conn->query($query1);
        $sql = "SELECT * FROM feedback where RID='$RID'";
        $name = $conn->query($sql);
        echo "<table style='border:3px solid black;margin:auto;position:relative;top:15%'><tr><th class='table_style'>FID</th><th class='table_style'>RID</th><th class='table_style'>Rating</th><th class='table_style'>Comment</th></tr>";
        while($row = $name->fetch_assoc())
        {
            echo "<tr><td class='table_style'>".$row["FID"]."</td><td class='table_style'>".$row["RID"]."</td><td class='table_style'>".$row["Rating"]."</td><td class='table_style'>".$row["Comment"]."</td></tr>";
        }
        echo "</table>";
    }
?>