<?php

    include "connection.php";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $date=$_POST['date'];
        $sql="insert into award(name, date) values('$name', '$date')";
        if(mysqli_query($conn, $sql))
        {
            echo "<script>alert('new record inserted')</script>";
            echo "<script>window.open('adminhome.php','_self')</script>";
        }
        else
        {
            echo "error".mysqli_error($conn);
        }
        mysqli_close($conn);
        header('Location: adminhome.php');
    }
?>