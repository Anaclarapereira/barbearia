<?php
include "../connection.php";

?>
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
                    <li><a href="#sobre">Cadastro</a></li>
                    <li><a href="Agenda/preparar_criar_agenda.php">Agenda do Barbeiro</a></li>
                    <li><a href="contato.php">Agendamentos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mt-3">
        <h2>Cadastro da Agenda do Barbeiro</h2>
        <form action="criar_agenda.php" method="post">
            <div class="mb-3 mt-3">
                <label class="form-check-label">
                    Barbeiro
                </label>
                <select class="form-select" name="id_usuario">
                    <option>Selecione um barbeiro</option>
                    <?php
                    $sql = 'SELECT * FROM usuarios WHERE id_grupo = 2';
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id_usuario']."'>".$row['nome']."</option>";
                        }
                    }
                    ?>

                </select>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-check-label">
                    Dia da semana
                </label>
                <select class="form-select" name="dia_da_semana">
                    <option>Selecione o dia da semana</option>
                    <option value="0">Domingo</option>
                    <option value="1">Segunda-feira</option>
                    <option value="2">Terça-feira</option>
                    <option value="3">Quarta-feira</option>
                    <option value="4">Quinta-feira</option>
                    <option value="5">Sexta-feira</option>
                    <option value="6">Sábado-feira</option>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_inicio">Horário início:</label>
                <input type="time" class="form-control" name="horario_inicio" placeholder="Enter email"
                    name="horario_inicio">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_saida_intervelo">Horário saída intervalo:</label>
                <input type="time" class="form-control" name="horario_saida_intervelo" placeholder="Enter email"
                    name="horario_saida_intervelo">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_volta_intervela">Horário volta intervalo:</label>
                <input type="time" class="form-control" name="horario_volta_intervela" placeholder="Enter email"
                    name="horario_volta_intervela">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_fim">Horário fim:</label>
                <input type="time" class="form-control" name="horario_fim" placeholder="Enter email" name="horario_fim">
            </div>


            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Barbearia Classic. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>
