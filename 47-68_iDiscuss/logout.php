<?php
session_start();
echo "Logging you out. Please wait...";

session_destroy();
header("Location: /vibhu/47-68_iDiscuss")
?>