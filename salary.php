<?php
    session_start();
    include "Connection.php";
    $user = $_SESSION['user_name'];
    $query = "select * from empdetails where user_name = '$user'";
    $result = mysqli_query($conn,$query);
    $total = mysqli_num_rows($result);
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
</style>
</head>
<body>
    <table border="1">
        <tr height="100px" style="background-color:#363636;color:#ffffff;text-align:center;font-size:24px; font-weight:600;">
            <td colspan='4'>TATA Group of Companies Private Limited</td>
        </tr>

        <tr>
            <td>
                <?php 
                    if($result = mysqli_fetch_assoc($result))
                    {   
                    echo "
                    <tr>
                        <th>Name:</th>
                        <td class='c1'> ".$result['name']."</td>
                        <th>Mobile No:</th>
                        <td class='c1'> ".$result['mob']."</td> 
                    </tr>
                    <tr>
                        <th>Bank Name:</th>
                        <td class='c1'> ".$result['bank']."</td> 
                        <th>A/C No:</th>
                        <td class='c1'> ".$result['ac']."</td> 
                    </tr>
                    <tr>
                        <th>DOB:</th>
                        <td class='c1'> ".$result['dob']."</td>
                        <th>Location:</th>
                        <td class='c1'> ".$result['addr']."</td>
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
    <br/>
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
            <th >Gross Deductions</th>
            <td>Rs.3000</td>
        </tr>
        
        <tr>
            <td></td>
            <td><strong>NET PAY</strong></td>
            <td>Rs.35500</td>
            <td></td>
        </tr>
    </table>
</body>
</html>

<?php
} else{
    header("Location: Employeepanel.php");
    exit();
}
?>
