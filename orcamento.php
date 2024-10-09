<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $cpf = $_POST['cpf'];
    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $turno = $_POST['turno'];
    $vara_processual = $_POST['vara_processual'];
    $descricao_processo = $_POST['descricao_processo'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "advocacia");

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Query para inserir dados
    $sql = "INSERT INTO orcamentos (cpf, nome_completo, email, telefone, Turno_contato, vara_processual, descricao_processo) 
            VALUES ('$cpf', '$nome_completo', '$email', '$telefone', '$turno', '$vara_processual', '$descricao_processo')";

    if ($conn->query($sql) === TRUE) {
        echo "Orçamento criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechar conexão
    $conn->close();
}
?>

<!-- Formulário HTML para inserir dados -->
<form method="POST" action="orcamento.php">
    CPF: <input type="text" name="cpf" required><br>
    Nome completo: <input type="text" name="nome_completo" required><br>
    Email: <input type="email" name="email" required><br>
    Telefone: <input type="text" name="telefone" required><br>
    Turno para contato: <input type="text" name="turno" required><br>
    Vara processual: <input type="text" name="vara_processual" required><br>
    Descrição do processo: <textarea name="descricao_processo" required></textarea><br>
    <input type="submit" value="Criar Orçamento">
</form>