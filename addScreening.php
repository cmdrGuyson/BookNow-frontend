<?php

    include("config/db_connect.php");

    $startTime = $endTime = $screeningID = $movieID = $screeningDate = "";

    if(isset($_POST["submit"])){
        $screeningID = $_POST["screeningID"];
        $startTime = $_POST["startTime"];
        $endTime = $_POST["endTime"];
        $movieID = $_POST["movieID"];
        $screeningDate = $_POST["screeningDate"];

        //Added by CB007892
        $sql = "INSERT INTO screening VALUES('$screeningID', '$startTime', '$endTime', '$screeningDate', '$movieID')";

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

        <h6 class="center">Add Screening</h6>

        <form class="white" action="addScreening.php" method="POST">

            <label>Screening ID</label>
            <input type="text" name="screeningID">

            <label>Start Time (hh:mm:ss)</label>
            <input type="text" name="startTime">

            <label>End Time (hh:mm:ss)</label>
            <input type="text" name="endTime">

            <label>Screening Date</label>
            <input type="text" name="screeningDate">

            <label>Movie ID</label>
            <input type="text" name="movieID">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>