<?php

    include("config/db_connect.php");

    $paymenID = $paymentType = $description = $paymentDate = $reservationID = "";
    $price = 0.0;

    if(isset($_POST["submit"])){
        $paymentID = $_POST["paymentID"];
        $paymentType = $_POST["paymentType"];
        $description = $_POST["description"];
        $price = $_["price"];
        $paymentDate = $_POST["paymentDate"];
        $reservationID = $_POST["reservationID"];

        $sql = "INSERT INTO payment VALUES('$paymenID', '$paymentType', '$description', $price , '$paymentDate', '$reservationID')";

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

        <h6 class="center">Add Payment</h6>

        <form class="white" action="addPayment.php" method="POST">

            <label>Payment ID</label>
            <input type="text" name="paymentID">

            <label>Payment Type</label>
            <input type="text" name="paymentType">

            <label>Description</label>
            <input type="text" name="description">

            <label>Price</label>
            <input type="text" name="price">

            <label>Payment Date</label>
            <input type="text" name="paymentDate">

            <label>Reservation ID</label>
            <input type="text" name="reservationID">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>