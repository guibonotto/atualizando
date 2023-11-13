<?php
session_start();
include_once("cadlog_usuario/conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if ($btnLogin) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //echo "$email - $senha";
    if ((!empty($email)) and (!empty($senha))) {
        //Gerar a senha criptografa
        //echo password_hash($senha, PASSWORD_DEFAULT);
        //Pesquisar o usuário no BD
        $result_usuario = "SELECT email, senha FROM usuarios WHERE email='$email' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if ($resultado_usuario) {
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            if (password_verify($senha, $row_usuario['senha'])) {
                $_SESSION['email'] = $row_usuario['email'];
                $_SESSION['senha'] = $row_usuario['senha'];
                header("Location: usuario/perfil.php");
            } else {
                $_SESSION['msg'] = "Login e senha incorreto!";
                header("Location: login.php");
            }
        }
    } else {
        $_SESSION['msg'] = "Login e senha incorreto!";
        header("Location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kallto Agrosolutions</title>
    <link rel="stylesheet" href="css/login.css">
    <script>
        function validarFormulario() {
            var email = document.forms["loginForm"]["usuario"].value;
            var senha = document.forms["loginForm"]["senha"].value;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var senhaRegex = /^[a-zA-Z0-9]{6,}$/;

            if (!emailRegex.test(email)) {
                alert("Por favor, insira um endereço de e-mail válido.");
                return false;
            }

            if (!senhaRegex.test(senha)) {
                alert("A senha deve conter pelo menos 6 caracteres alfanuméricos.");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <main>
        <h1>Faça seu login na <br> Kallto AgroSolutions !</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        if (isset($_SESSION['msgcad'])) {
            echo $_SESSION['msgcad'];
            unset($_SESSION['msgcad']);
        }
        ?>
        <form method="POST" action="usuario/perfil.php">
            <label>Email</label>
            <input type="text" name="usuario" placeholder="Digite o seu email"><br><br>

            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite a sua senha"><br><br>

            <button name="btnLogin" value="Acessar">ENTRAR</button>

            <a href="cadastro.html" ><span style="color:yellow"></span><h4>Você ainda não possui uma conta?</h4></a>
        </form>
    </main>
</body>

</html>
