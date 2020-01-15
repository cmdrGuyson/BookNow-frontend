<?php 

$conn = mysqli_connect("localhost", "root", "", "movie_ticket_reservation_system");

if(!$conn){
    echo "Connection error: " . mysqli_connect_error();
}

?>

