<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <form action="processproject.php" method="POST">
        <div class="div1">
            <label for="Name">Project Name</label><br>
            <input type="text" name="p_name" required><br>
            <label for="Name">Project Id</label><br>
            <input type="text" name="p_id" required><br>
            <label for="Name">Duration of project</label><br>
            <input type="text" name="dur" required><br>
            <label for="Name">Department Name</label><br>
            
            <select name="d_id" id="opt">  
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
            </select>

            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>