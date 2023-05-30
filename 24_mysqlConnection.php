<?php

echo "<title>Connecting PHP with MySQL</title>";


// Creating Variables
$host = 'localhost';
$user = 'root';
$pass = '0003';

// Creating a connection
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("An Error Occoured: " . mysqli_connect_error());
}
echo "Connection Successfull <br>";
?>