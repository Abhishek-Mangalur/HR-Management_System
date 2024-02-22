<?php

    include "connection.php";
    if(isset($_POST['submit'])){
        $a_id=$_POST['a_id'];
        $a_name=$_POST['a_name'];
        $date=$_POST['date'];

        $check = "SELECT * FROM award WHERE a_id = '$a_id' ";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0){
            echo "<script>alert('Award ID Already Exists..!')</script>";
            echo "<script>window.open('insertaward.php','_self')</script>";
        }
        else if(mysqli_num_rows($result) == 0){
            $sql="INSERT INTO award(a_id, a_name, date) VALUES('$a_id', '$a_name', '$date')";
            if(mysqli_query($conn, $sql))
            {
                echo "<script>alert('New Award Added..!')</script>";
                echo "<script>window.open('adminhome.php','_self')</script>";
            }
            else
            {
                echo "error".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>