<?php

    include("config/db_connect.php");

    $employeeID = $firstName = $lastName = $gender = $dateOfBirth = $contactNumber = $theaterID = "";

    if(isset($_POST["submit"])){
        $employeeID = $_POST["employeeID"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = $_POST["gender"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $contactNumber = $_POST["contactNumber"];
        $theaterID = $_POST["theaterID"];

        //Added by CB008211
        $sql = "INSERT INTO employee VALUES('$employeeID', '$firstName', '$lastName', '$gender', '$dateOfBirth', '$contactNumber', '$theaterID')";

        if(mysqli_query($conn, $sql)){
        echo "ENTRY ADDED!";
        }else{
        echo "QUERY ERROR: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html> 
<html>

    <?php include("header/header.php"); ?>
    
    <section class="container">

        <h6 class="center">Add Employee</h6>

        <form class="white" action="addEmployee.php" method="POST">

            <label>Employee ID</label>
            <input type="text" name="employeeID">

            <label>First Name</label>
            <input type="text" name="firstName">

            <label>Last Name</label>
            <input type="text" name="lastName">

            <label>Gender</label>
            <input type="text" name="gender">

            <label>Date of Birth</label>
            <input type="text" name="dateOfBirth">

            <label>Contact Number</label>
            <input type="text" name="contactNumber">

            <label>Theater ID</label>
            <input type="text" name="theaterID">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>