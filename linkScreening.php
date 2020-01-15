<?php

    include("config/db_connect.php");

    $screeningID = $theaterID = "";

    if(isset($_POST["submit"])){
        $screeningID = $_POST["screeningID"];
        $theaterID = $_POST["theaterID"];

        $sql = "INSERT INTO Theater_Screening VALUES('$screeningID', '$theaterID')";

        if(mysqli_query($conn, $sql)){
        echo "ENTRY ADDED!";
        }else{
        echo "QUERY ERROR: " . mysqli_error($conn);
        }
    }

    

//$firstName = $_POST["firstName"];
//$lastName = $_POST["lastName"];

?>

<!DOCTYPE html> 
<html>

    <?php include("header/header.php"); ?>
    
    <section class="container">

        <h6 class="center">Link Screening</h6>

        <form class="white" action="linkScreening.php" method="POST">

            <label>Screening ID</label>
            <input type="text" name="screeningID">

            <label>Theater ID</label>
            <input type="text" name="theaterID">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>