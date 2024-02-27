<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
        include "connection.php";
        $query = "select * from department";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        $result = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style3.css">
</head>

<body>

    <table class="tbl">
        <thead>
            <tr>
                <th scope="col" class="table1">Sl No</th>
                <th scope="col" class="table1">Dept Name</th>
                <th scope="col" class="table1">Dept Id</th>
                <th scope="col" class="table1">No. of Emp</th>
                <th scope="col" class="table1">Delete</th>
            </tr>

            <?php 
            if($result){
                $i=1;
                while($result = mysqli_fetch_assoc($data)){
                    echo "
                    <tr>
                        <td class='c1'>".$i++."</td>
                        <td class='c1'>".$result['d_name']."</td>
                        <td class='c1'>".$result['d_id']."</td>
                        <td class='c1'>".$result['d_emp']."</td>
                        <td class='c1'><a href='deletedept.php?rn=$result[d_id]' onclick='showPrompt()' class='btn2'>Delete</a></td>
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
            alert("Department Deleted Successfully..!");
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