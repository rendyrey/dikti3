<?php
$servername = 'lensadata.id';
$username = 'lensadat_root';
$password = 'lensadata246';
$database = 'lensadat_kominfo';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
