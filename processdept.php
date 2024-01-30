<?php

    include 'Connection.php';
    if(isset($_POST['submit']))
    {
        $d_name=$_POST['d_name'];
        $d_id=$_POST['d_id'];
        $d_emp=$_POST['d_emp'];
        $sql="insert into department(d_name, d_id, d_emp) values('$d_name', '$d_id', '$d_emp')";
        if(mysqli_query($conn, $sql))
        {
            echo "<script>alert('new record inserted')</script>";
            echo "<script>window.open('displaydept.php','_self')</script>";
        }
        else
        {
            echo "error".mysqli_error($conn);
        }
        mysqli_close($conn);
        header('Location: adminhome.php');
    }
