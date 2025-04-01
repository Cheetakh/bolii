<?php

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

// SSL сертификатын зам - GitHub-д нэмсэн `cacert.pem` файл
$cert_path = __DIR__ . '/cacert.pem';

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $cert_path, NULL, NULL);

// SSL client-ээр холбогдоно
$mysqli->real_connect($host, $user, $pass, $db, 3306, NULL, MYSQLI_CLIENT_SSL);

if ($mysqli->connect_errno) {
    echo "Холболтын алдаа гарлаа: " . $mysqli->connect_error;
} else {
    // Амжилттай холбогдвол $conn хувьсагч болгон дамжуулах
    $conn = $mysqli;
}
?>
