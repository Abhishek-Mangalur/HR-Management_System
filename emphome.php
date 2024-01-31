<?php
    session_start();
    include "Connection.php";
    $user = $_SESSION['user_name'];
    $query = "select * from empdetails where user_name = '$user'";
    $result = mysqli_query($conn,$query);
    $total = mysqli_num_rows($result);
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
<div class="div">
        <div id="div2">
            <h2>Hello <?php echo $_SESSION['name']; ?></h2><br><br>
        </div>
        <div id="div3">
            <a href="logout.php" id="a31">Logout</a>
        </div>
        <div id="div4">
            <a href="salary.php" id="a41">Salary</a>
        </div>
        <div id="div6">
            <div class="divs" id="div61">
            </div>
            <div class="divs" id="div62">
                <div class="div7">
                    <h1><u>Profile</u></h1><br>
                    <?php 
                        if($result = mysqli_fetch_assoc($result))
                        {
                            echo "
                                Employee id: ".$result['empid']." <br><br>
                                Location: ".$result['addr']." <br><br>
                                Department: ".$result['dept']." <br><br>
                                Gender: ".$result['gender']." <br><br>
                                Age: ".$result['age']." <br><br>
                                Email: ".$result['email']." <br><br>
                                Education: ".$result['edu']." <br><br>
                            ";
                        
                    }
                    else{
                        echo "No data found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
} else{
    header("Location: Employeepanel.php");
    exit();
}
?>