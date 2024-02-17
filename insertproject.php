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
            <label for="Name">Project id</label><br>
            <input type="text" name="p_id" required><br>
            <label for="Name">Duration of project</label><br>
            <input type="text" name="dur" required><br>
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>