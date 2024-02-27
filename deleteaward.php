<?php
    include "connection.php";
    error_reporting(0);

    $a_id = $_GET['rn'];
    $query = "DELETE FROM award WHERE a_id = '$a_id'";

    $data = mysqli_query($conn,$query);
    if($data){
        echo "<script>window.open('adminhome.php','_self')</script>";
    }else{
        echo "Failed";
    }
    header('Location: adminhome.php');
?>