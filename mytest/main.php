<?php
    include ('./dbconfig.php');

    $query1 = "SELECT * from mytest where id='1'";
    $row1 = mysqli_fetch_array($mysqli->query($query1));
    // print_r($row1);
    // echo $row1['name'];


    $query2 = "SELECT * from mytest where id='1'";
    $row2 = mysqli_fetch_assoc($mysqli->query($query2));
    print_r($row2);


?>
