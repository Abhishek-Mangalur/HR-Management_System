<?php
    session_start();
    include "connection.php";
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <form action="processdept.php" method="POST">
        <div class="div1">
            <label for="Name">Department Name</label><br>
            <input type="text" name="d_name" required><br>
            <label for="Name">Department id</label><br>
            <input type="text" name="d_id" required><br>
            <label for="Name">No. of Employees</label><br>
            <input type="text" name="d_emp" required><br>
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>

<?php
} else{
    header("Location: index.php");
    exit();
}
?>