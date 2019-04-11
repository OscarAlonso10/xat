<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xat";

// Create connection
$conn = mysqli_connect('localhost','root','','xat');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>