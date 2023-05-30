<?php

echo "<title>Cookies in PHP</title>";

// Cookies: They are used to store some NON-SENSITIVE information on the user's system
//          so that the user can be shown different things depending upon cookie value.

// Setting a cookie
setcookie("category", "Computers", time() + 86400, "/vibhu");
//         Name        Value         Expires        Path
// time() function returns number of seconds since 1st Jan 1970, 00:00:00 GMT

echo "The cookie is set.";

?>