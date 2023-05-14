<?php

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'me-dawa-server.mysql.database.azure.com', 'iafgzihhqu@me-dawa-server', 'mysql123lance', 'laravel', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?> 