<?php
    session_start();
    include "Connection.php";
    $query = "select * from empdetails";
    $result = mysqli_query($conn,$query);
    $total = mysqli_num_rows($result);
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <form action="process.php" method="post">
        <div class="div1">
            <label for="Name">Employee id</label><br>
            <input type="text" name="eid"><br>
            <label for="Name">Username</label><br>
            <input type="text" name="username" required><br>
            <label for="Name">Password</label><br>
            <input type="password" name="password" required><br>
            <label for="Name">Name</label><br>
            <input type="text" name="name"><br>
            <label for="Name">Location</label><br>
            <input type="text" name="addr"><br>
            <label for="Name">Email</label><br>
            <input type="email" name="email" required><br>
            <label for="Name">Department</label><br>
            <input type="text" name="dept"><br>
            <label for="Name">Age</label><br>
            <input type="text" name="age"><br>
            <label for="Name">Bank Name</label><br>
            <input type="text" name="bnkname"><br>
            <label for="Name">A/c No</label><br>
            <input type="text" name="acno"><br>
            <label for="Name">DOB</label><br>
            <input type="text" name="dob"><br>
            <label for="Name">Mobile No</label><br>
            <input type="number" name="mob"><br>
            <label for="Name">Designation</label><br>
            <input type="text" name="desig"><br>
        </div>
        <div class="div2">
            <div class="div21">
                <label for="Name">Gender:</label>
                <input type="radio" name="gender" value="Male">
                <label for="Name">Male</label>
                <input type="radio" name="gender" value="Female">
                <label for="Name">Female</label><br>
            </div>
            <div class="div22">
                <label for="Name">Education:</label>
                <input type="checkbox" name="education[]" value="B.Tech">
                <label for="Name">B.Tech</label>
                <input type="checkbox" name="education[]" value="M.Tech">
                <label for="Name">M.Tech</label><br>
            </div>
        </div>

        <div class="div3">
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>

<?php
} else{
    header("Location: Employeepanel.php");
    exit();
}
?>