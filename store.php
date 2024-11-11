<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $nome = $_POST['nome']; // Recebe o nome
    $endereco = $_POST['endereço']; // Recebe o endereço
    $data_nascimento = $_POST['data_nascimento']; // Recebe a data de nascimento
    $telefone = $_POST['telefone']; // Recebe o telefone
    $sql = "INSERT INTO infromações (nome, endereço, data_nascimento, telefone) VALUES ('$nome', '$endereco', '$data_nascimento', '$telefone')";

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}


?>