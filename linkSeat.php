<?php

    include("config/db_connect.php");

    $screeningID = $theaterID = $seatID = "";

    if(isset($_POST["submit"])){
        $theaterID = $_POST["theaterID"];
        $screeningID = $_POST["screeningID"];
        $seatID = $_POST["seatID"];

        //Added by CB008276
        $sql = "INSERT INTO Theater_Screening_Seat VALUES('$theaterID', '$screeningID', '$seatID')";

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

        <h6 class="center">Link Seat</h6>

        <form class="white" action="linkSeat.php" method="POST">

            <label>Theater ID</label>
            <input type="text" name="theaterID">

            <label>Screening ID</label>
            <input type="text" name="screeningID">

            <label>Seat ID</label>
            <input type="text" name="seatID">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>