<?php
$server   = "localhost";
$database = "andreasa_college";
$username = "andreasa_Andrea1";
$password = "****";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging error: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
?>
