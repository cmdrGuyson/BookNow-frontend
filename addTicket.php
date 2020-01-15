<?php

    include("config/db_connect.php");

    $screeningID = $reservationID = $seatID = $theaterID = "";

    if(isset($_POST["submit"])){
        $screeningID = $_POST["screeningID"];
        $reservationID = $_POST["reservationID"];
        $seatID = $_POST["seatID"];
        $theaterID = $_POST["theaterID"];

        $sql = "INSERT INTO ticket VALUES('$screeningID', '$seatID', '$reservationID', '$theaterID')";

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

        <h6 class="center">Add Ticket</h6>

        <form class="white" action="addTicket.php" method="POST">

            <label>Screening ID</label>
            <input type="text" name="screeningID">

            <label>Seat ID</label>
            <input type="text" name="seatID">

            <label>Reservation ID</label>
            <input type="text" name="reservationID">

            <label>Theater ID</label>
            <input type="text" name="theaterID">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>