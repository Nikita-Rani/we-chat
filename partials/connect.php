<?php
// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "user123";


// create a connection
$conn = mysqli_connect($servername, $username ,$password, $database);

// die if connection was not succesful
if(!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
}
?>