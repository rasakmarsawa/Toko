<?php
require 'connection.php';

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location:login.php');
}

if (!isset($_SESSION['role'])) {
    header('Location:login.php');
}
?>
