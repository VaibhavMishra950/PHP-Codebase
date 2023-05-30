<?php

echo "<title>Include and Require in PHP</title>";

// include '_dbconnect.php';  // It shows warning and continues the execution in case of error.
require '_dbconnect.php';  // It shows error and stops the execution in case of error.

$sql = "SELECT * FROM `trip`";

$result = mysqli_query($conn, $sql);

echo "Records found: " . mysqli_num_rows($result) . "<br>";

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['sno'] . ". Hello " . $row['name'] . ", welcome to " . $row['dest'] . "<br>";
}

?>