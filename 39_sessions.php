<?php

echo "<title>Sessions in PHP</title>";

// verify the user login info
session_start();
$_SESSION['username'] = "Vibhu";
$_SESSION['category'] = "Computers";

echo "Session saved successfully.";

?>