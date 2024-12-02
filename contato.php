<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode configurar o envio de e-mails ou armazenar as informações em um banco de dados.
    echo "<h2>Obrigado por entrar em contato, $nome!</h2>";
    echo "<p>Recebemos sua mensagem e entraremos em contato o mais breve possível.</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Barbearia Classic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <h1>Barbearia Realeza</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Início</a></li>
                    <li><a href="#sobre">Cadastro</a></li>
                    <li><a href="#servicos">Agenda do Barbeiro</a></li>
                    <li><a href="contato.php">Agendamentos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Formulário de Contato -->
    <section id="contato">
        <div class="container">
            <h2>Entre em contato</h2>
            <form action="contato.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Barbearia Classic. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>
