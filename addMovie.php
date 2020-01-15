<?php

    include("config/db_connect.php");

    $movieID = $movieName = $runTime = "";
    $movieGenre = "";
    $description = "";
    $rating = 0.0;

    if(isset($_POST["submit"])){
        $movieID = $_POST["movieID"];
        $movieName = $_POST["movieName"];
        $runTime = $_POST["runTime"];
        $movieGenre = $_POST["movieGenre"];
        $rating = $_POST["rating"];
        $description = $_POST["description"];

        //Added by CB007892
        $sql = "INSERT INTO movie VALUES('$movieID', '$movieName', '$runTime', '$movieGenre', $rating, '$description')";

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

        <form class="white" action="addMovie.php" method="POST">

            <label>Movie ID</label>
            <input type="text" name="movieID">

            <label>Movie Name</label>
            <input type="text" name="movieName">

            <label>Run Time (hh:mm:ss)</label>
            <input type="text" name="runTime">

            <label>Genre</label>
            <input type="text" name="movieGenre">

            <label>Rating</label>
            <input type="text" name="rating">

            <label>Description</label>
            <input type="text" name="description">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>


        </form>

    </section>

    <?php include("header/footer.php"); ?>

</html>