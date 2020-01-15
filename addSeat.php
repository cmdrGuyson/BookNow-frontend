<?php

    include("config/db_connect.php");

    $seatID = $seatType = "";
    $seatRow = '';
    $seatNumber = 0;

    if(isset($_POST["submit"])){
        $seatID = $_POST["seatID"];
        $seatRow = $_POST["seatRow"];
        $seatNumber = $_POST["seatNumber"];
        $seatType = $_POST["seatType"];

        //Added by CB008276
        $sql = "INSERT INTO seat VALUES('$seatID', $seatNumber, '$seatRow', '$seatType')";

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

        <h6 class="center">Add Seat</h6>

        <form class="white" action="addSeat.php" method="POST">

            <label>Seat ID</label>
            <input type="text" name="seatID">

            <label>Seat Number</label>
            <input type="text" name="seatNumber">

            <label>Seat Row</label>
            <input type="text" name="seatRow" maxlength=1>

            <label>Seat Type</label>
            <input type="text" name="seatType">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>