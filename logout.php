// Logout.php

<?php
session_start();

// Unset the session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: index.php");
exit;
?>
