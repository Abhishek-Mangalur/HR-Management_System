<?php

    include "connection.php";
    error_reporting(0);

    $empid = $_GET['rn'];
    $query = "DELETE FROM empdetails WHERE empid = '$empid'";

    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "<script>window.open('adminhome.php','_self')</script>";
    }
    else{
        echo "Failed";
    }
    header('Location: adminhome.php');

?>