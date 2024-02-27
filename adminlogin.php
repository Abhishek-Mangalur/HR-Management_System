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

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$password' ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['user_name'] === $uname && $row['password'] === $password){
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                header("Location: adminhome.php");
                exit();
            }
        }else{
            header("Location: index.php");
            exit();
        }
    }
?>