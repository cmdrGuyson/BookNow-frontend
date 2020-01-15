<?php

    /* CONNECT TO DATABASE */
   include("config/db_connect.php");

    /* Query to retrieve data from Employee Table */
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);
    $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);


    //print_r($employees);

    
?>

<!DOCTYPE html>
<html>

    <?php include("header/header.php"); ?>
    
    <h6 class="center">Employees</h6>
    <div class="container">
        <div class="row">
        <?php foreach($employees as $employee){ ?>
            <div class="col s6 md3 ">
                <div class="card ">
                    <div class="card-content center">
                        <div><b><?php echo htmlspecialchars($employee["employeeID"]);?></b></div>
                        <div><?php echo htmlspecialchars($employee["firstName"]);?> <?php echo htmlspecialchars($employee["lastName"]);?></div>
                        <div><?php echo htmlspecialchars($employee["gender"]);?></div>
                        <div><?php echo htmlspecialchars($employee["dateOfBirth"]);?></div>
                        <div><?php echo htmlspecialchars($employee["contactNumber"]);?></div>
                        <div><?php echo htmlspecialchars($employee["theaterID"]);?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>

    </div>

    <?php include('header/footer.php'); ?>

</html>