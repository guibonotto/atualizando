<html>
    <head>
        <title>Kallto AgroSolutions</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="teste.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <header>
        <h1>KALLTO</h1>
        <img src="img/logokallto.jpg" width="100px" height="100px"id="imgcabecalho">
        <ul>
            <a href="#">Página Inicial</a>
            <a href="#">Serviços</a>
            <a href="#">Nossos clientes</a>
            <a href="#">Entre em contato</a>
        </ul>
        </header>
    <body>
        <main>
            <div>
                <div id="logokallto">
            <h2>Conheça a Solução Tech para sua fazenda</h1>
            <img src="img/logokallto.jpg" width="450px" height="450px" margin-left="80px">
        </div>
        <form action="processar_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="numero">Telefone</label>
            <input type="number" id="telefone" name="telefone" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>

            <label for="problema">Digite sua necessidade:</label>
            <input type="text" id="problema" name="problema" required><br><br>

            <input type="submit" value="Cadastrar" id="cadastrarbotao">
        </form>
            </div>
        </main>
        <footer>
                <p> &copy; Kallto AgroSolutions 2023<br> Todos os direitos reservados.</p>
        </footer>
    </body>
</html>