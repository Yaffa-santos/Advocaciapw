<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $numero_oab = $_POST['numero_oab'];
    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "advocacia");

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Query para inserir dados
    $sql = "INSERT INTO contas (numero_oab, nome_completo, email, cpf) 
            VALUES ('$numero_oab', '$nome_completo', '$email', '$cpf')";

    if ($conn->query($sql) === TRUE) {
        echo "Nova conta criada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechar conexão
    $conn->close();
}
?>

<!-- Formulário HTML para inserir dados -->
<form method="POST" action="conta_criar.php">
    Número da OAB: <input type="text" name="numero_oab" required><br>
    Nome completo: <input type="text" name="nome_completo" required><br>
    Email: <input type="email" name="email" required><br>
    CPF: <input type="text" name="cpf" required><br>
    <input type="submit" value="Criar Conta">
</form>