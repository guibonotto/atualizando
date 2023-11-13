<?php
include_once("conexao.php");





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Verifique as credenciais (exemplo simples).
    if ($email === "email" && $password === "password") {
        //session_start()
        // Credenciais corretas, redirecione para a página de perfil ou outra página.
        header("Location: perfil.html");
        exit();
    } else {
        // Credenciais incorretas, exiba uma mensagem de erro.
        echo "Credenciais incorretas. Tente novamente.";
        header("login.html");
    }
}
?>

