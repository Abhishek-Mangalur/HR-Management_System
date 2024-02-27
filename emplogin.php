<?php
    session_start();
    include "connection.php";

    if(isset($_POST['uname']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname = validate($_POST['uname']);
        $password = validate($_POST['password']);

        $sql = "SELECT * FROM empdetails WHERE empid ='$uname' AND passwords ='$password' ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['empid'] === $uname && $row['passwords'] === $password) {
                $_SESSION['empid'] = $row['empid'];
                $_SESSION['id'] = $row['id'];
                header("Location: emphome.php");
                exit();
            }else{
                header("Location: employeepanel.php");
                exit();
            }
        }
    }
?>