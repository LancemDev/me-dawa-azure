<?php
$servername = "me-dawa-server.mysql.database.azure.com";
$username = "iafgzihhqu";
$password = "L6702KW7027C6Q8J$";
$dbname = "me-dawa-database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>