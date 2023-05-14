<?php

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "me-dawa-server.mysql.database.azure.com", "iafgzihhqu", "mysql123lance", "me-dawa-database", 3306, MYSQLI_CLIENT_SSL);

?> 