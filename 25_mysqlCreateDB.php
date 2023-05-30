<?php

echo "<title>Creating Database in MySQL from PHP</title>";


$host = 'localhost';
$user = 'root';
$pass = '0003';

// Creating a connection
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    die("An Error Occoured: " . mysqli_connect_error());
}
echo "Connection Successfull <br>";


// Creating a Database
$sql = "CREATE DATABASE phptest";
$result = mysqli_query($conn, $sql);

// Check for the success of database creation.
if($result){
    echo "Database created successfully.<br>";
}
else{
    echo "An error occoured during database creation.<br>";
}

?>