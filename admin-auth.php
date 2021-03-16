<?php
session_start();
if($_SESSION['SESS_ADMIN'] != 0) {
    header("location: access-denied.php");
    exit();
} 
?>