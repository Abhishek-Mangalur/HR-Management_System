<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $d_name=$_POST['d_name'];
        $d_id=$_POST['d_id'];
        $d_emp=$_POST['d_emp'];

        $check = "SELECT * FROM department WHERE  d_id = '$d_id' ";
        $result = mysqli_query($conn, $check);
        
        if (mysqli_num_rows($result) > 0){
            echo "<script>alert('Department ID Already Exists..!')</script>";
            echo "<script>window.open('insertdept.php','_self')</script>";
        }
        else if (mysqli_num_rows($result) == 0){
            
            $sql="INSERT INTO department(d_name, d_id, d_emp) VALUES('$d_name', '$d_id', '$d_emp')";
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('New Department Added..!')</script>";
                echo "<script>window.open('adminhome.php','_self')</script>";
            }
            else{
                echo "error".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>