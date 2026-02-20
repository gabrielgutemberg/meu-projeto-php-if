<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha primeira página</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container">

        <!-- LINGUAGEM PHP -->
        <?php
        $curso = "Sistemas";
        $estudante = "Gabriel lucas 1123";

        ?>

        <!-- CABEÇALHO DA MINHA PÁGINA  -->
        <header>
            <!-- IMAGEM -->
            <img src="assets/ifto-logo.png" alt="ifto-logo">

            <!-- TÍTULO -->
            <h1>Esse é meu primeiro projeto WEB</h1>
            <!-- PARÁGRAFO DE DESCRIÇÃO -->
            <p>Me chamo <?php echo $estudante; ?> aluno do 3° período de <?php echo $curso ?></p>
        </header>

        <!-- MENU DE NAVEGAÇÃO -->
        <nav>
            <!-- LISTA DESORDENADA -->
            <ul>
                <li>
                    <a href="tags.html">Google</a>
                </li>
                <li>
                    <a href="https://google.com">link test 2</a>
                </li>
            </ul>

        </nav>
        <div class="carti1">
        <img src="assets/carticareca.jpg" alt="carti-careca" class="imgcarti">
        <h2>testando o h2</h2>
        <h3>titulo test h3</h3>
        <h4>titulo test h4</h4>
        <h5>titulo test h5</h5>
        <h6>titulo test h6</h6>

        </div>
    </div>
    
</body>

</html>