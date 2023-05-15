<?php
//If connection failed, show the error

try{
    $conn = new PDO("sqlsrv:server = tcp:me-dawa-server.mysql.database.azure.com, 3306; Database = laravel", "iafgzihhqu", "mysql123lance");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "we are getting some progress bruuv";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


?> 