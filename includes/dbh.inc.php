<?php

$servername = "localhost";
$dBUsername = "DHloginsystem";
$dBPassword = "1234";
$dBname = "DHloginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBname);

if (!$conn) {
    echo('Database not created yet');
    die("Connection failed: ".mysqli_connect_error());
}