<?php

echo "<title>Destroy Sessions in PHP</title>";

session_start();
session_unset();
session_destroy();

echo "You have been logged out."

?>