<?php
$db_server = 'localhost';
$db_user = 'u693436268_tenhaappleads';
$db_password = 'QqarO~7>8xH?';
$db_name = 'u693436268_tenhaappleads';

$conn = new mysqli($db_server, $db_user, $db_password, $db_name);

// Verifique a conexão
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
