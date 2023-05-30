<?php

echo "<title>Inserting data into MySQL from PHP</title>";


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
echo "Connection Successfull <br>";

$name = "Vikrant";
$dest = "Russia";

$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$dest')";

$result = mysqli_query($conn, $sql);

// Check for the success of database creation.
if($result){
    echo "Data Inserted successfully.<br>";
}
else{
    echo "An error occoured during data insertion.<br>";
}

?>