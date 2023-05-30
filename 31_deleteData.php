<?php

echo "<title>Deleting MySQL data from PHP</title>";

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

$sql = "SELECT * FROM `trip` WHERE `sno` = '2'";

$result = mysqli_query($conn, $sql);

echo "Records found: " . mysqli_num_rows($result) . "<br>";

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['sno'] . ". Hello " . $row['name'] . ", welcome to " . $row['dest'] . "<br>";
}

$sql = "DELETE FROM `trip` WHERE `sno` = '2'";
$result = mysqli_query($conn, $sql);
echo "Afected Rows: " . mysqli_affected_rows($conn) . "<br>";

if ($result) {
    echo "Data Deleted Successfully ";
}

?>