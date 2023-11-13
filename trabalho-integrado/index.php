<!DOCTYPE html>
<html>
<head>
<title>Kallto AgroSolutions</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <header>
    <div id="itens-cabecalho">
        <img src="img/logo.png" width="80px" height="80px" id="primeira-foto">
        <h1>KALLTTO</h1>
        <ul>
                <a href="index.php">Página Inicial</a>
                <a href="sobre.html">Sobre</a>
                <a href="servicos.html">Serviços</a>
                <a href="contato.html">Contato</a>
                <a href="cadastro.html">CADASTRE-SE</a>
        </ul>
    </div>
    </header>
    <main>

        <div id="servicos">
            <img src="img/fundoagricola2.jpg" width="100%" height="800px" margin="0">
        </div>

        <div class="cards-container">
    <div class="card">
        <img src="img/homem-plantando.jfif" alt="Imagem 1">
        <p>TENHA UMA MELHOR QUALIDADE DENTRO DA SUA FAZENDA</p>
    </div>
    <div class="card">
        <img src="img/homem-ppcnt.jfif" alt="Imagem 2">
        <p>MONITORE TUDO QUE ESTÁ ACONTECENDO DENTRO DO CAMPO</p>
    </div>
    <div class="card">
        <img src="img/mulher-milharal.jpg" alt="Imagem 3">
        <p>TENHA INCRÍVEIS RESULTADOS COM NOSSA AJUDA</p>
    </div>
</div>

                <div id="logokallto">
            <h2>Conheça a Solução Tech para sua fazenda<br> Entre em Contato conosco!</h2>
            <img src="img//logo.png" width="450px" height="450px" margin-left="80px">
        </div>
        <form id="meuFormulario" action="cadlog_usuarioo/processar_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s]+"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required pattern="[0-9]+"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha (pelo menos 8 caracteres, incluindo letras e números):</label>
        <input type="password" id="senha" name="senha" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required><br><br>

        <label for="problema">Digite sua necessidade:</label>
        <input type="text" id="problema" name="problema" required><br><br>

        <input type="submit" value="Cadastrar" id="cadastrarbotao">
    </form>

    <script>
        document.getElementById('meuFormulario').addEventListener('submit', function(event) {
            if (!validarFormulario()) {
                event.preventDefault(); // Impede o envio do formulário se a validação falhar
            }
        });

        function validarFormulario() {
            var nome = document.getElementById('nome').value;
            var telefone = document.getElementById('telefone').value;
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;
            var problema = document.getElementById('problema').value;

            var nomeRegex = /[A-Za-zÀ-ÖØ-öø-ÿ\s]+/;
            var telefoneRegex = /^[0-9]+$/;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var senhaRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

            if (!nomeRegex.test(nome)) {
                alert('Nome inválido');
                return false;
            }

            if (!telefoneRegex.test(telefone)) {
                alert('Telefone inválido');
                return false;
            }

            if (!emailRegex.test(email)) {
                alert('Email inválido');
                return false;
            }

            if (!senhaRegex.test(senha)) {
                alert('Senha inválida. Deve conter pelo menos 8 caracteres, incluindo letras e números.');
                return false;
            }

            // Adicione aqui mais validações conforme necessário

            return true; // Retorne true se a validação for bem-sucedida
        }
        </script>
        <footer>
                <p> &copy; Kallto AgroSolutions 2023<br> Todos os direitos reservados.</p>
        </footer>
</body>
</html>
