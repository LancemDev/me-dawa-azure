<?php


$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "https://1drv.ms/u/s!AtSaJh0u6lj7geNRd0OoESu4kc5fNg?e=5TSv0y", NULL, NULL);
mysqli_real_connect($conn, "me-dawa-server.mysql.database.azure.com", "rootGuest@me-dawa-server", "mysql123lance", "me-dawa-database", 3306, MYSQLI_CLIENT_SSL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    echo "Connection to MySQL server " . mysqli_get_host_info($conn) . "<br>";
}

echo $dbname;
?>