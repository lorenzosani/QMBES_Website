<?php
$servername = "localhost";
$username = "qmbes";
$password = '}2Bmz5><zaC-Rw6"';
$database = "qmbes";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


if (! $conn ) {
    die( 'Could not connect: '  .  mysql_error ());
}

?>