<?php
//If connection failed, show the error
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "me-dawa-server.mysql.database.azure.com", "iafgzihhqu", "mysql123lance", "laravel", 3306, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}else{
    echo "we are getting some progress bruuv";
}

?> 