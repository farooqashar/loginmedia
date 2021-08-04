<?php 

$server = "192.168.64.2";
$serverUsername = "root";
$serverPassword = "";
$dbName = "login";

$conn = new mysqli($server,$serverUsername,$serverPassword,$dbName);

if (!$conn) {
    die("Connection to database failed." . mysqli_connect_error());
}