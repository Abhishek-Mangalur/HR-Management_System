<?php

    include 'Connection.php';
    if(isset($_POST['submit']))
    {
        $p_name=$_POST['p_name'];
        $p_id=$_POST['p_id'];
        $dur=$_POST['dur'];
        $sql="insert into project(p_name, p_id, dur) values('$p_name', '$p_id', '$dur')";
        if(mysqli_query($conn, $sql))
        {
            echo "<script>alert('new record inserted')</script>";
            echo "<script>window.open('adminhome.php','_self')</script>";
        }
        else
        {
            // echo "error".mysqli_error($conn);
            // echo "<script>alert('Project id is already exists')</script>";
            echo "<script>alert('exits')</script>";
            echo "<script>window.open('adminhome.php','_self')</script>";
        }
        mysqli_close($conn);
        header('Location: adminhome.php');
    }

?>