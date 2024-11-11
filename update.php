<link rel="stylesheet" href="update.css">
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM infromações WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $infromações = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome']; // Recebe o novo nome
    $endereço = $_POST['endereço']; // Recebe o endereço
    $data_nascimento = $_POST['data_nascimento']; // Recebe a data de nascimento
    $telefone = $_POST['telefone']; // Recebe o telefone
    $sql = "UPDATE informações.infromações SET nome='$nome', endereço='$endereço', data_nascimento='$data_nascimento', telefone='$telefone' WHERE id= $id" ;  // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Usuário</title>
</head>
<body>
    <h1>Atualizar Usuário</h1>
    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $infromações['nome']; ?>" required>
        <label>Endereço:</label>
        <input type="text" name="endereço" value="<?php echo $infromações['endereço']; ?>" required>
        <label>Data de nascimento:</label>
        <input type="date" name="nascimento" value ="<?php echo $infromações['data_nascimento']; ?> " required>
        <label>Telefone:</label>
        <input type="tel" name="telefone" value="<?php echo $infromações['telefone']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>