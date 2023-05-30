<?php

echo "<title>Working with Files in PHP</title>";

$a = readfile("myfile.txt");  // Readfile function automatically prints the file content
// The number of characters in given file will be returned to $a.

echo "<br>No. of characters in above file are: $a";


?>