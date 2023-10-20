<?php
//MYSQL
include("conecta.php"); 

// Captura os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$link = $_POST['link'];
$dt = date('Y-m-d H:i:s'); // Obtém a data e hora atual


// Insira os dados no banco de dados
$sql = "INSERT INTO contatos (nome, email, link, dt) VALUES ('$nome', '$email', '$link', '$dt')";
if ($conn->query($sql) === TRUE) {
    // Sucesso ao inserir os dados no banco
    echo "Formulário enviado com sucesso!";
} else {
    echo "Erro ao enviar o formulário: " . $conn->error;
}

$conn->close();
?>