<?php

echo "<title>Creating table in MySQL from PHP</title>";


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

$sql = "CREATE TABLE `trip` (`sno` INT NOT NULL AUTO_INCREMENT ,
     `name` VARCHAR(30) NOT NULL ,
     `dest` VARCHAR(30) NOT NULL , 
     PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql);

// Check for the success of database creation.
if($result){
    echo "Table created successfully.<br>";
}
else{
    echo "An error occoured during table creation.<br>";
}

?>