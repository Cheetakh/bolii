<?php

$host = getenv("DB_HOST");
$db   = getenv("DB_NAME");
$pass = getenv("DB_PASS");
$user = getenv("DB_USER");

$cert_path = __DIR__ . '/cacert.pem';

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $cert_path, NULL, NULL);
$mysqli->real_connect($host, $db, $pass, $user, 3306, NULL, MYSQLI_CLIENT_SSL);

if ($mysqli->connect_errno) {
    echo "Холболтын алдаа гарлаа: " . $mysqli->connect_error;
} else {
    // Амжилттай холбогдвол $conn хувьсагч болгон дамжуулах
    $conn = $mysqli;
}
?>
