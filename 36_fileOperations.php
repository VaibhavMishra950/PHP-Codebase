<?php

echo "<title>Working with Files in PHP</title>";


$f = fopen("myfile.txt", "r");

// echo fgets($f);  // Returns first LINE
// echo fgets($f);
// echo var_dump(fgets($f));

// Reading a file line by line.
// while($a = fgets($f)) {
//     echo $a . "<br>";
// }


// echo fgetc($f);  // returns first CHARACTER
// Reading a file character by character.
while ($a = fgetc($f)) {
    echo $a;
}

fclose($f);


?>