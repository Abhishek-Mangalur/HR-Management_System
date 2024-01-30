<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="hrms";
    $con=mysqli_connect($servername, $username, $password, $database);
    if(!$con)
    {
        die("Error connecting to database: ".mysqli_connect_error());
    }
?>