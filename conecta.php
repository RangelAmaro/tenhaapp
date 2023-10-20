<?php
$db_server = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'tenhaap';

$conn = new mysqli($db_server, $db_user, $db_password, $db_name);

// Verifique a conexão
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>