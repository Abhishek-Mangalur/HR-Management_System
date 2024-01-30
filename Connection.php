<?php

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "hrms";

    $conn = mysqli_connect("localhost", "root", "", "hrms");

    if(!$conn){
        echo "Connection failed!";
    }
?>
