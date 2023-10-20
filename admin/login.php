<?php
session_start();
//MYSQL
include("conecta.php");

// Captura as credenciais do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verifica as credenciais no banco de dados
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['usuario'] = $usuario; // Inicia uma sessão para o usuário autenticado
        header('Location: admin.php'); // Redireciona para a página de administração
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

$conn->close();
?>