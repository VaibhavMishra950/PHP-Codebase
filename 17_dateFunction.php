<?php
echo "<title>Date() Function in PHP</title>";

// $d = date("dS F Y");
$d = date("dS F Y, g:i A");  // 28th March 2023, 10:49 AM
echo "Todays date is $d <br>";
// Quick Quiz - Post at least 3 examples of dates in php in the comments below

// Prints something like: 28th of March 2023 10:49:59 AM
echo date('l jS \of F Y h:i:s A');
 
$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved <br>";

?>
