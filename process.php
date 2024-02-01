<?php

    include 'Connection.php';
    if(isset($_POST['submit']))
    {
        $empid=$_POST['eid'];
        $user_name=$_POST['username'];
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
        $gender=$_POST['gender'];
        $education=$_POST['education'];
        $chk="";
        foreach($education as $chk1)
        {
            $chk.=$chk1." ";
        }
        $sql="insert into empdetails(empid, user_name, password, name, addr, email, dept, age, dob, mob, desig, bank, ac, gender, edu) values('$empid', '$user_name', '$password', '$name', '$addr', '$email', '$dept', '$age', '$dob', '$mob', '$desig', '$bank', '$ac', '$gender', '$chk')";
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