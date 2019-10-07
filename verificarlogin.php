<?php
session_start();
if (!$_SESSION['root'])
{
    header('location:index.php');
    exit();
    
}
?>