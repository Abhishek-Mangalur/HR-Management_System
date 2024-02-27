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
    <title>Award</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <form action="processaward.php" method="POST">
        <div class="div1">
            <label for="Name">Award Id</label><br>
            <input type="text" name="a_id" required><br>
            <label for="Name">Award Name</label><br>
            <input type="text" name="a_name" required><br>
            <label for="Name">Date</label><br>
            <input type="date" name="date" style="height: 25px; font-size: 1em;" required><br>
            <label for="Name">Employee Name</label><br>
            <select name="empid" id="opt">  
                <option>Select Options</option>
                <?php
                    $sql = "SELECT * FROM `empdetails`";
                    $result = mysqli_query($conn ,$sql) or die("Query Failed");
                    while($row = mysqli_fetch_assoc($result)){
                ?>

                    <option value="<?php echo  $row['empid']; ?>" >
                        <?php 
                            echo $row['uname'];
                        ?>
                    </option>

                <?php 
                    } 
                ?>
            </select>
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