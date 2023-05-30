<?php

echo "<title>Get Cookies in PHP</title>";

// $_COOKIE is a super global variable which stores all the cookies recieved in request

$cat = $_COOKIE['category'];
echo "The value of 'category' cookie is: $cat";


?>