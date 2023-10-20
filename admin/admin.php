<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.html'); // Redireciona para a página de login se o usuário não estiver autenticado
}

//MYSQL
include("conecta.php");

// Consulta para obter todos os contatos da tabela
$sql = "SELECT * FROM contatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Link</th></tr>';
    
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['nome'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['link'] . '</td>';
        echo '</tr>';
    }
    
    echo '</table>';
} else {
    echo "Nenhum contato encontrado.";
}

$conn->close();
?>