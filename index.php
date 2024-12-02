<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Realeza</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Resetando margens e paddings para uma boa base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Estilo do cabeçalho */
        header {
            background-color: #222;
            color: white;
            padding: 10px 0;
        }

        header .container {
            width: 90%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 2em;
            color: #fff;
        }

        /* Estilo do menu de navegação */
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            padding: 10px 15px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        /* Estilo da seção de imagem */
        #imagem-grande {
            margin-top: 20px;
        }

        .imagem-grande {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Seções de conteúdo */
        section {
            padding: 40px 0;
        }

        h2 {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilo da lista de barbeiros */
        .barbeiros-lista {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .barbeiro {
            background-color: #fff;
            padding: 20px;
            width: 18%;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .barbeiro h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        /* Estilo da galeria de imagens */
        #galeria .imagens {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        #galeria .imagens img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Rodapé */
        footer {
            background-color: #222;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        footer p {
            font-size: 1em;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <h1>Barbearia Realeza</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Início</a></li>
                    <li><a href="Usuario/index.html">Cadastro</a></li>
                    <li><a href="Agenda/index.php">Agenda do Barbeiro</a></li>
                    <li><a href="Agendamento/index.php">Agendamentos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Imagem Grande Antes da Seção Sobre -->
    <section id="imagem-grande">
        <div class="container">
            <img src="images/home.jpg" alt="Barbearia" class="imagem-grande">
        </div>
    </section>

    <!-- Seção sobre -->
    <section id="sobre">
        <div class="container">
            <h2>Sobre a Barbearia</h2>
            <p>Na Barbearia Realeza, oferecemos um atendimento de qualidade em um ambiente aconchegante e moderno. Venha nos visitar e descubra o que temos a oferecer para o seu estilo!</p>
        </div>
    </section>

    <!-- Seção de serviços -->
    <section id="servicos">
        <div class="container">
            <h2>Serviços</h2>
            <ul>
                <li>Corte de cabelo</li>
                <li>Barba e Bigode</li>
                <li>Shave a seco</li>
                <li>Tratamentos capilares</li>
            </ul>
        </div>
    </section>

    <!-- Seção de barbeiros -->
    <section id="barbeiros">
        <div class="container">
            <h2>Conheça Nossos Barbeiros</h2>
            <div class="barbeiros-lista">
                <div class="barbeiro">
                    <h3>Karol</h3>
                    <p>Especialista em cortes modernos e estilos exclusivos.</p>
                </div>
                <div class="barbeiro">
                    <h3>Nathaly</h3>
                    <p>Expert em cortes femininos e cuidados com a barba.</p>
                </div>
                <div class="barbeiro">
                    <h3>Gb do corte</h3>
                    <p>Especialista em cortes clássicos e cabelo com estilo.</p>
                </div>
                <div class="barbeiro">
                    <h3>Matheus</h3>
                    <p>Barbeiro profissional com vasta experiência em cuidados masculinos.</p>
                </div>
                <div class="barbeiro">
                    <h3>Anderson</h3>
                    <p>Cortes precisos e personalização para todos os tipos de cabelo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Informações de Contato -->
    <section id="contato-info">
        <div class="container">
            <p><strong>Agende seu Atendimento:</strong> (21) 9997-6789 (WhatsApp)</p>
        </div>
    </section>

    <!-- Seção de galeria de imagens -->
    <section id="galeria">
        <div class="container">
            <h2>Veja alguns de nossos clientes</h2>
            <div class="imagens">
                <img src="images/cliente1.jpg" alt="Cliente cortando cabelo">
                <img src="images/cliente2.jpg" alt="Cliente cortando cabelo">
                <img src="images/cliente3.jpg" alt="Cliente cortando cabelo">
                <img src="images/cliente4.jpg" alt="Cliente cortando cabelo">
            </div>
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
