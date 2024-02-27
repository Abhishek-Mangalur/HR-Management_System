<?php
    include "connection.php";
    error_reporting(0);

    $d_id = $_GET['rn'];
    $query = "DELETE FROM department WHERE d_id = '$d_id'";

    $data = mysqli_query($conn,$query);
    if($data){
        echo "<script>window.open('adminhome.php','_self')</script>";
    }else{
        echo "Failed";
    }
    header('Location: adminhome.php');
?>