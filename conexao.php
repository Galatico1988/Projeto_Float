<?php
$host = "mysql.railway.internal";
$user = "root";
$pass = "uYbOgZGxOSIZVefbqwOsXZIKDasRtjrd";
$db   = "railway";
$port = "3306";

$ocon = mysqli_connect($host, $user, $pass, $db, $port);

if (!$ocon) {
    header('Content-Type: application/json');
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Falha na conexão: " . mysqli_connect_error()
    ]);
    exit;
}
?>
