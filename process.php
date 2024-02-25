<?php

    include "connection.php";
    if(isset($_POST['submit']))
    {
        $empid=$_POST['eid'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $addr=$_POST['addr'];
        $email=$_POST['email'];
        $dept=$_POST['dept'];
        $age=$_POST['age'];
        $dob=$_POST['dob'];
        $mob=$_POST['mob'];
        $desig=$_POST['desig'];
        $bank=$_POST['bnkname'];
        $ac=$_POST['acno'];
        $salary=$_POST['salary'];
        $gender=$_POST['gender'];
        $education=$_POST['education'];
        $chk="";
        foreach($education as $chk1)
        {
            $chk.=$chk1." ";
        }

        $check = "SELECT * FROM empdetails WHERE empid = '$empid' ";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0){
            echo "<script>alert('Employee ID Already Exists..!')</script>";
            echo "<script>window.open('insertemp.php','_self')</script>";
        }else if (mysqli_num_rows($result) == 0){
            $sql="INSERT INTO empdetails(empid, passwords, uname, addr, email, dept, age, dob, mob, desig, bank, ac, salary, gender, edu) VALUES('$empid', '$password', '$name', '$addr', '$email', '$dept', '$age', '$dob', '$mob', '$desig', '$bank', '$ac', '$salary', '$gender', '$chk')";
            if(mysqli_query($conn, $sql))
            {
                echo "<script>alert('New Employee Added..!')</script>";
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