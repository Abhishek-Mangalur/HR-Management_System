<?php

    include "Connection.php";
    $query = "select * from project";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $result = $data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

    <table class="tbl">
        <thead>
            <tr>
                <th scope="col" class="table1">Sl no</th>
                <th scope="col" class="table1">Project name</th>
                <th scope="col" class="table1">Project id</th>
                <th scope="col" class="table1">Duration</th>
                <th scope="col" class="table1">Delete</th>
            </tr>

            <?php 
            if($result){
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                        <td class='c1'>".$result['id']."</td>
                        <td class='c1'>".$result['p_name']."</td>
                        <td class='c1'>".$result['p_id']."</td>
                        <td class='c1'>".$result['dur']."</td>
                        <td class='c1'><a href='deleteproj.php?rn=$result[id]' onclick='return
                        checkdelete()' class='btn2'>Delete</a></td>
                    </tr>
                    ";
                }
            }
            else{
                echo "No data found";
            }
            ?>
        </thead>
    </table>
</body>
</html>