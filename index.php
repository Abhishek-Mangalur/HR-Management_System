<?php
    require("Connection.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="wrapper">
        <form action="adminlogin.php" method="POST">
            <a href="index.php" class="c1">HR</a>
            <a href="Employeepanel.php" class="c1">Emp</a>
            <h1>HR Login</h1>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="inputbox">
                <input type="text" name="uname" placeholder="Username" required>
            </div>
            
            <div class="inputbox">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

</body>

</html>