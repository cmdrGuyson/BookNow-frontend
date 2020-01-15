<?php

    include("config/db_connect.php");

    $customerID = $firstName = $lastName = $address = $contactNumber = "";

    if(isset($_POST["submit"])){
        $customerID = $_POST["customerID"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = $_POST["address"];
        $contactNumber = $_POST["contactNumber"];


        //Added By CB008211
        $sql = "INSERT INTO customer VALUES('$customerID', '$firstName', '$lastName', '$address', '$contactNumber')";

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

        <h6 class="center">Add Customer</h6>

        <form class="white" action="addCustomer.php" method="POST">

            <label>Customer ID</label>
            <input type="text" name="customerID">

            <label>First Name</label>
            <input type="text" name="firstName">

            <label>Last Name</label>
            <input type="text" name="lastName">

            <label>Address</label>
            <input type="text" name="address">

            <label>Contact Number</label>
            <input type="text" name="contactNumber">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>