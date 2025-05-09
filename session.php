<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['id_user'])) {
    header("Location: log-in.php");
    exit;
}
?>
