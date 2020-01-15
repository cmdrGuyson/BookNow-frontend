<?php

    include("config/db_connect.php");

    $reservationID = $reservationDate = $reservationDescription = $customerID = "";

    if(isset($_POST["submit"])){
        $reservationDate = $_POST["reservationDate"];
        $reservationID = $_POST["reservationID"];
        $reservationDescription = $_POST["reservationDescription"];
        $customerID = $_POST["customerID"];

        $sql = "INSERT INTO reservation VALUES('$reservationID', '$reservationDate', '$reservationDescription', '$customerID')";

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

        <h6 class="center">Add Reservation</h6>

        <form class="white" action="addReservation.php" method="POST">

            <label>Reservation ID</label>
            <input type="text" name="reservationID">

            <label>Reservation Date</label>
            <input type="text" name="reservationDate">

            <label>Reservation Description</label>
            <input type="text" name="reservationDescription">

            <label>Customer ID</label>
            <input type="text" name="customerID">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>