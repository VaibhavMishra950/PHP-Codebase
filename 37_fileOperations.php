<?php

echo "<title>Working with Files in PHP</title>";

// Write Mode
// $f = fopen("myfile2.txt", "w");
// fwrite($f, "This is content one\n");
// echo "Written Successfully <br>";
// fwrite($f, "This is content two\n");
// echo "Written Successfully <br>";
// fwrite($f, "This is content three\n");
// echo "Written Successfully <br>";
// fclose($f);

// Append Mode
$f = fopen("myfile2.txt", "a");
fwrite($f, "This is content is being appended\n");
echo "Appended Successfully <br>";
fclose($f);
?>