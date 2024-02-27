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
    <title>Employee</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <form action="process.php" method="post">
        <div class="div1">
            <label for="Name">Employee Id</label><br>
            <input type="text" name="eid" required><br>
            <label for="Name">Password</label><br>
            <input type="password" name="password" required><br>
            <label for="Name">Name</label><br>
            <input type="text" name="name" required><br>
            <label for="Name">Location</label><br>
            <input type="text" name="addr" required><br>
            <label for="Name">Email</label><br>
            <input type="email" name="email" required><br>
            <label for="Name">Department Name</label><br>
            <select name="dept" id="opt">  
                <option>Select Options</option>
                <?php
                    $sql = "SELECT * FROM `department`";
                    $result = mysqli_query($conn ,$sql) or die("Query Failed");
                    while($row = mysqli_fetch_assoc($result)){
                ?>

                    <option value="<?php echo  $row['d_id']; ?>" >
                        <?php 
                            echo $row['d_name'];
                        ?>
                    </option>

                <?php 
                    } 
                ?>
            </select><br>
            <label for="Name">Age</label><br>
            <input type="text" name="age"required><br>
            <label for="Name">Bank Name</label><br>
            <input type="text" name="bnkname" required><br>
            <label for="Name">A/c No</label><br>
            <input type="text" name="acno" required><br>
            <label for="Name">Salary</label><br>
            <input type="number" name="salary" required><br>
            <label for="Name">DOB</label><br>
            <input type="text" name="dob" required><br>
            <label for="Name">Mobile No</label><br>
            <input type="number" name="mob" required><br>
            <label for="Name">Designation</label><br>
            <input type="text" name="desig" required><br>
            <div class="div2">
                <div class="div21">
                    <label for="Name">Gender:</label>&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Male">&nbsp;
                    <label for="Name">Male</label>&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female">&nbsp;
                    <label for="Name">Female</label><br>
                </div>

                <div class="div22">
                    <label for="Name">Education:</label>&nbsp;&nbsp;
                    <input type="checkbox" name="education[]" value="B.Tech">&nbsp;
                    <label for="Name">B.Tech</label>&nbsp;&nbsp;
                    <input type="checkbox" name="education[]" value="M.Tech">&nbsp;
                    <label for="Name">M.Tech</label><br>
                </div>
            </div>

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