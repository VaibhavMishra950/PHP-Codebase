<?php

echo "<title>Working with Files in PHP</title>";


$f = fopen("myfile.txt", "r"); // Returns file pointer on success and FALSE on error.

if (!$f) {
    die("Unable to open this file.");
}

$content = fread($f, filesize("myfile.txt"));
echo "<pre>" . $content . "</pre>";

fclose($f)

?>