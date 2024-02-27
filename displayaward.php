<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
        include "connection.php";
        $query = "select * from award";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        $result = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <table class="tbl">
        <thead>
            <tr>
                <th scope="col" class="table1">Sl No</th>
                <th scope="col" class="table1">Award Name</th>
                <th scope="col" class="table1">Employee Id</th>
                <th scope="col" class="table1">Date</th>
                <th scope="col" class="table1">Delete</th>
            </tr>

            <?php 
            if($result){
                $i=1;
                while($result = mysqli_fetch_assoc($data)){
                    echo "
                    <tr>
                        <td class='c1'>".$i++."</td>
                        <td class='c1'>".$result['a_name']."</td>
                        <td class='c1'>".$result['empid']."</td>
                        <td class='c1'>".$result['dates']."</td>
                        <td class='c1'><a href='deleteaward.php?rn=$result[a_id]' onclick='showPrompt()' class='btn2'>Delete</a></td>
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
            alert("Award Deleted Successfully..!");
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