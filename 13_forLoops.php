<?php

echo "<title>For Loops in PHP</title>";

for ($index=1; $index < 6; $index++) { 
    // for(initialization;condition; updation)
    echo "The number is $index <br>";
}

// Avoid running into infinite loops
// for ($i=0; $i < 87; ) { 
//     echo $i;
// }

echo "For loop has ended";
?>
