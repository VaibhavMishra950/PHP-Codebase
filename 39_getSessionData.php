<?php

echo "<title>Get Session Data in PHP</title>";

session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
    echo "<br>Your fav category is: " . $_SESSION['category'];
}
else{
    echo "You need to login again";
}

?>