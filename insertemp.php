<?php
    session_start();
    include "connection.php";
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
    <title>Employee</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <style>
        body{
            background-color: rgb(3,40,48);
            color: #fff;
        }
        
        .div1{
            width: 300px;
            margin: auto;
            font-size: 1.4em;
            width: 300px;
            background-color: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            border-radius: 10px;
            padding: 30px 40px;
        }

        .div2{
            /* max-width: 250px; */
            margin: auto;
        }

        .div21{
            /* max-width: 210px; */
            margin: auto;
            display: flex;
            padding-bottom: 5px;
        }

        .div22{
            /* max-width: 300px; */
            margin: auto;
            display: flex;
            padding-bottom: 5px;
        }

        #i1{
            background: #0DCAF0;
            border-radius: 5px;
            font-size: 1em;
            align-content: center;
            margin-top: 10px;
        }

        #i1:hover{
            cursor: pointer;
            opacity: .7;
        }

        input{
            margin: 5px 0 15px 0;
            width: 300px;
            font-size: 0.8em;
            padding: 4px;
            border: none;
        }

        #opt{
            width: 310px;
            height: 33px;
            margin: 5px 0 10px 0;
            font-size: 0.8em;
        }
    </style>
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
    header("Location: employeepanel.php");
    exit();
}
?>