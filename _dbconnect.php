<?php

// Creating Variables
$host = 'localhost';
$user = 'root';
$pass = '0003';
$db = 'phptest';

// Creating a connection
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("An Error Occoured: " . mysqli_connect_error());
}
else{
    echo "Connection Successfull <br>";
}

?>