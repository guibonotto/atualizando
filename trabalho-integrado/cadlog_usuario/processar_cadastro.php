<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $problema = $_POST['problema'];
  

//validação

    if (empty($nome)|| empty($telefone) || empty($email) || empty($password) || empty($problema)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Configurações do banco de dados 
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $dbname = "kallto-cadastro";

        // Conecta ao banco de dados
        $conn = new mysqli($servidor, $usuario, $senha, $dbname);

        // Verifica se a conexão foi bem-sucedida
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Insere os dados no banco de dados 
        $query = "INSERT INTO  usuarios(nome, telefone, email, password, problema) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $nome, $telefone, $email, $password, $problema);

        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }

        // Fecha a conexão com o banco de dados
        $stmt->close();
        $conn->close();
    }
    function verificartelefoneTelefoneBrasileiro($telefone) {
        // Define o padrão da expressão regular para um número de telefone brasileiro
        $padrao = '/^\(\d{2}\) 9\d{4}-\d{4}$/';
    
        // Tenta fazer a correspondência do número de telefone com o padrão
        if (preg_match($padrao, $telefone)) {
            echo "O número de telefone é válido.";
        } else {
            echo "O número de telefone é inválido.";
        }
    }
} else {
    echo "Acesso inválido ao script.";
}
header("Location: login.html")
?>
