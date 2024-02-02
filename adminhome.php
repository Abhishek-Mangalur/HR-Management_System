<?php
    include "Connection.php";
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="style1.css">
</head>


<body>
    <div class="div">    
        <div class="div1" id="div11">
            <h2 class="hrms"><u>HRMS</u></h2>
        </div>
        <div class="div2" id="div21">
            <a href="logout.php" class="b1">Logout</a>
        </div>
        
        <div class="div3" id="div31">
            <div class="div31" id="div311">
                <ul class="items">
                    <li class="litems"><a href="" class="a11" id="b1">Home</a></li>
                    <li>
                        <a href="#" class="a1">Employee &#x25BE;</a>
                        <ul class="dropdown">
                            <li><a href="insertemp.php" class="a2">Add Employee</a></li>
                            <li><a href="displayemp.php" class="a2">View Employees</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="a1">Department &#x25BE;</a>
                        <ul class="dropdown">
                            <li><a href="insertdept.php" class="a2">Add Department</a></li>
                            <li><a href="displaydept.php" class="a2">View Departments</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="a1">Projects &#x25BE;</a>
                        <ul class="dropdown">
                            <li><a href="insertproject.php" class="a2">Add Project</a></li>
                            <li><a href="displayproject.php" class="a2">View Projects</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="a1">Award &#x25BE;</a>
                        <ul class="dropdown">
                            <li><a href="insertaward.php" class="a2">Add Awards</a></li>
                            <li><a href="displayaward.php" class="a2">View Awards</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="div32" id="div322">
                <div class="division" id="division1">
                    <h3>Total Employees</h3>
                    <div class="divs">
                        <?php 
                        $query = "SELECT * from empdetails";
                        $query_run = mysqli_query($conn, $query);
                        
                        if($dept_total = mysqli_num_rows($query_run))
                        {
                            echo '<h4 class="mb-0">'.$dept_total.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No Data </h4>';
                        }
                        ?>
                    </div>
                </div>
                <div class="division" id="division2">
                    <h3>Total Departments</h3>
                    <div class="divs">
                        <?php 
                        $query = "SELECT * from department";
                        $query_run = mysqli_query($conn, $query);
                        
                        if($dept_total = mysqli_num_rows($query_run))
                        {
                            echo '<h4 class="mb-0">'.$dept_total.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No Data </h4>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="div42" id="div422">
                
                <div class="division" id="division3">
                    <h3>Projects</h3>
                    <div class="divs">
                        <?php 
                        $query = "SELECT * from project";
                        $query_run = mysqli_query($conn, $query);
                        
                        if($dept_total = mysqli_num_rows($query_run))
                        {
                            echo '<h4 class="mb-0">'.$dept_total.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No Data </h4>';
                        }
                        ?>
                    </div>
                </div>
                <div class="division" id="division4">
                    <h3>Awards</h3>
                    <div class="divs">
                        <?php 
                        $query = "SELECT * from award";
                        $query_run = mysqli_query($conn, $query);
                        
                        if($dept_total = mysqli_num_rows($query_run))
                        {
                            echo '<h4 class="mb-0">'.$dept_total.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No Data </h4>';
                        }
                        ?>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>

<?php
} else{
    header("Location: index.php");
    exit();
}
?>