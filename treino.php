<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Titan</title>
    <link rel="icon" href="img/">
    <link rel="stylesheet" href="assets/css/norus.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div class="topo">
            <div id="bnt_home">
                <span id="iconMenu" class="material-symbols-outlined" onclick="clickMenu()">menu</span>
            </div>

            <a href="index.php"><img class="norusicone" src=""></a>

            <div id="btn_mob" class="topo">
                <a href="treino.php"><img class="bnt-home" src="assets/img/btnHalter.png"></a>
            </div>
        </div>
        <menu>
            <div class="cabeçalho">
                <div class="cabeçalho-link">
                    <li><a href="norusesportes.php">Seu treino</a></li>
                    <li><a href="frequencia.php">Sua frequência</a></li>
                    <li><a href="mesalidades.php">Mensalidades</a></li>
                </div>
            </div>
        </menu>
    </header>

    <main>
        <div class="titulo-treino">
            <h1>Escolha seu treino de hoje:</h1>
        </div>
    
        <div class="container-cards-treino">
            <div class="cards-treino">
                <div class="card-treino">
                    <img class="bnt-optins" src="assets/img/btnTreinoBraco.png">
                    <h2><a href="treinoBraco.php">Treino de braço</a></h2>
                </div>
            </div>

            <div class="cards-treino">
                <div class="card-treino">
                    <img class="bnt-optins" src="assets/img/btnTreinoPeito.png">
                    <h2><a href="frequencia.php">Treino de tronco</a></h2>
                </div>
            </div>
            
            <div class="cards-treino">
                <div class="card-treino">
                    <img class="bnt-optins" src="assets/img/btnTreinoPerna.png">
                    <h2><a href="frequencia.php">Treino de perna</a></h2>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container-footer">
            <div class="footer">
                <div class="redirectPage">
                    <a href="index.php"><img class="bnt-footer" src="assets/img/btnCasa2.png"></a>
                    <h4>Inicio</h4>
                </div>

                <div class="redirectPage">
                    <a href="frequencia.php"><img class="bnt-footer" src="assets/img/btnCale2.png"></a>
                    <h4><a href="frequencia.php">Frequência</a></h4>
                </div>

                <div class="redirectPage">
                    <img class="bnt-footer" src="assets/img/btnHalter.png">
                    <h4><a href="treino.php">Treino</a></h4>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="assets/js/acoes.js"></script>

</body>

</html>