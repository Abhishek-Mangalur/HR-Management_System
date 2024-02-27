<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
        include "connection.php";
        $query = "select * from empdetails";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        $result = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <table class="tbl">
        <thead>
            <tr>
                <th scope="col" class="table1">Sl No</th>
                <th scope="col" class="table1">Name</th>
                <th scope="col" class="table1">Department</th>
                <th scope="col" class="table1">Location</th>
                <th scope="col" class="table1">Email</th>
                <th scope="col" class="table1">Delete</th>
            </tr>

            <?php 
            if($result){
                $i=1;
                while($result = mysqli_fetch_assoc($data)){
                    echo "
                    <tr>
                        <td class='c1'>".$i++."</td>
                        <td class='c1'>".$result['uname']."</td>
                        <td class='c1'>".$result['dept']."</td>
                        <td class='c1'>".$result['addr']."</td>
                        <td class='c1'>".$result['email']."</td>
                        <td class='c1'><a href='deleteemp.php?rn=$result[empid]' onclick='showPrompt()' class='btn2'>Delete</a></td>
                    </tr>
                    ";
                }
            }else{
                echo "No data found";
            }
            ?>
        </thead>
    </table>

    <script>
        function showPrompt(){
            alert("Employee Deleted Successfully..!");
        }
    </script>
</body>
</html>

<?php
} else{
    header("Location: index.php");
    exit();
}
?>