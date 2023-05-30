<?php

echo "<title>ForEach Loops in PHP</title>";


$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops
foreach ($arr as $hehe) {
    echo "$hehe <br>";
}

?>
