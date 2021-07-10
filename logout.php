<?php

if (!isset($_SESSION['username'])) {

    header('location: cust_login.php');
}

?>

<?php
session_start();
session_destroy();
header('location: cust_login.php');
?>