<?php

    include("config/db_connect.php");

    $theaterID = $theaterName = $location = $theaterDescription = "";

    if(isset($_POST["submit"])){
        $theaterID = $_POST["theaterID"];
        $theaterName = $_POST["theaterName"];
        $location = $_POST["location"];
        $theaterDescription = $_POST["theaterDescription"];

        //Added by CB008211
        $sql = "INSERT INTO theater VALUES('$theaterID', '$theaterName', '$theaterDescription', '$location')";

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

        <h6 class="center">Add Theater</h6>

        <form class="white" action="addTheater.php" method="POST">

            <label>Theater ID</label>
            <input type="text" name="theaterID">

            <label>Theater Name</label>
            <input type="text" name="theaterName">

            <label>Description</label>
            <input type="text" name="theaterDescription">

            <label>Location</label>
            <input type="text" name="location">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>