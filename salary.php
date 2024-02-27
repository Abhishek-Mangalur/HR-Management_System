<?php
    session_start();
    include "connection.php";
    $user = $_SESSION['empid'];
    $query = "select * from empdetails where empid = '$user'";
    $result = mysqli_query($conn,$query);
    $total = mysqli_num_rows($result);
    if(isset($_SESSION['id']) && isset($_SESSION['empid']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
    <link rel="website icon" type="png" href="https://hrteamservices.com/wp-content/uploads/2021/06/cropped-HR-Team-Favicon.png">
    <style>
        body{
            background-color: #bebdbd;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        table td{
            line-height:25px;padding-left:15px;
        }

        table th{
            background-color:#fbc403; color:#363636;
        }
        #a1{
            height: 100px;
            background-color:#363636;
            color:#ffffff;
            text-align:center;
            font-size:24px;
            font-weight:600;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr id="a1">
            <td colspan='4'>TATA Group of Companies Private Limited</td>
        </tr>

        <tr>
            <td>
                <?php 
                    if($result = mysqli_fetch_assoc($result)){   
                        echo "
                        <tr>
                            <th>Name:</th>
                            <td class='c1'> ".$result['uname']."</td>
                            <th>Location:</th>
                            <td class='c1'> ".$result['addr']."</td> 
                        </tr>
                        <tr>
                            <th>Bank Name:</th>
                            <td class='c1'> ".$result['bank']."</td> 
                            <th>A/C No:</th>
                            <td class='c1'> ".$result['ac']."</td> 
                        </tr>
                        <tr>
                            <th>Serial No:</th>
                            <td class='c1'> XXXXXX8945 </td>
                            <th>Transaction Id:</th>
                            <td class='c1'> XXXXXXL5NeI </td>
                        </tr>
                        <tr>
                            <th>STD Days:</th>
                            <td class='c1'> 30 </td>
                            <th>Working Days:</th>
                            <td class='c1'> 30 </td>
                        </tr>
                        <tr>
                            <th>Dapartment:</th>
                            <td class='c1'> ".$result['dept']."</td>
                            <th>Designation:</th>
                            <td class='c1'> ".$result['desig']."</td> 
                        </tr>
                        ";
                    }
                ?>
            </td>
        </tr>
    </table>

    <tr></tr>
    <br>
    <table border="1">
        <tr>
            <th>Earnings</th>
            <th>Amount</th>
            <th>Deductions</th>
            <th>Amount</th>
        </tr>

        <tr>
            <td>Basic</td>
            <td>29000</td>
            <td>Provident fund</td>
            <td>1900</td>
        </tr>

        <tr>
            <td>House Rent Allowance</td>
            <td>2000</td>
            <td>Professional tax</td>
            <td>600</td>
        </tr>

        <tr>
            <td>Special Allowance</td>
            <td>400</td>
            <td>Income tax</td>
            <td>500</td>
        </tr>

        <tr>
            <td>Conveyance</td>
            <td>3000</td>
        </tr>

        <tr>
            <td>ADD Special allowance</td>
            <td>2000</td>
        </tr>

        <tr>
            <td>Shift Allowance</td>
            <td>1000</td>
        </tr>

        <tr>
            <td>Bonus</td>
            <td>500</td>
        </tr>

        <tr>
            <td>Medical Allowance</td>
            <td>600</td>
        </tr>

        <tr>
            <th>Gross Earnings</th>
            <td>Rs.38500</td>
            <th>Gross Deductions</th>
            <td>Rs.3000</td>
        </tr>
        
        <tr>
            <td><strong>NET PAY</strong></td>
            <td>Rs.35500</td>
            <td><strong>Mode of Payment</strong></td>
            <td>Online</td>
        </tr>
    </table>
</body>
</html>

<?php
}else{
    header("Location: employeepanel.php");
    exit();
}
?>