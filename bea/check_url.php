<?php
session_start();

$url = $_SERVER['REQUEST_URI'];
$file = basename($url);

if (!file_exists($file)) {
    include('404.php');
    exit();
}

?>