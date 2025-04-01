<?php

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

$cert_path = __DIR__ . '/cacert.pem';

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $cert_path, NULL, NULL);

$mysqli->real_connect($host, $user, $pass, $db, 3306, NULL, MYSQLI_CLIENT_SSL);

if ($mysqli->connect_errno) {
    echo "Холболтын алдаа гарлаа: " . $mysqli->connect_error;
} else {
    $conn = $mysqli;
}
?>
