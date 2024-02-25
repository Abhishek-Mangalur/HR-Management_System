<?php

    include "connection.php";
    if(isset($_POST['submit'])){
        $p_name=$_POST['p_name'];
        $p_id=$_POST['p_id'];
        $d_id=$_POST['d_id'];
        $dur=$_POST['dur'];

        $check = "SELECT * FROM project WHERE  p_id = '$p_id' ";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0){
            echo "<script>alert('Project ID Already Exists..!')</script>";
            echo "<script>window.open('insertproject.php','_self')</script>";
        }else if (mysqli_num_rows($result) == 0){
            $sql="INSERT INTO project(p_name, p_id, d_id, dur) VALUES('$p_name', '$p_id', '$d_id', '$dur')";
            if(mysqli_query($conn, $sql))
            {
                echo "<script>alert('New Project Added..!')</script>";
                echo "<script>window.open('adminhome.php','_self')</script>";
            }
            else
            {
                echo "<script>alert('exits')</script>";
                echo "<script>window.open('adminhome.php','_self')</script>";
            }
            mysqli_close($conn);
        }
    }

?>