<?php
$host = 'me-dawa-server.mysql.database.azure.com';
$username = 'rootGuest';
$password = 'mysql123lance';
$db_name = 'laravel';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "C:\Users\munya\Downloads\LanceMunyao-ICSDITN291122-letter.pdf", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'me-dawa-server.mysql.database.azure.com', 'rootGuest', 'mysql123lance', 'quickstartdb', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?> 