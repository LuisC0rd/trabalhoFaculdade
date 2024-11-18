<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Titan</title>
    <link rel="icon" href="img/">
    <link rel="stylesheet" href="assets/css/norus.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="topo">
            <div id="bnt_home">
                <span id="iconMenu" class="material-symbols-outlined" onclick="clickMenu()">menu</span>
            </div>

            <a href="index.php"><img class="norusicone" src=""></a>

            <div id="btn_mob" class="topo">
                <a href="treino.php"><img class="bnt-home" src="assets/img/btnHalter2.png"></a>
            </div>
        </div>
        <menu>
            <div class="cabeçalho">
                <!-- <div class="cabeçalhoMob">
                    <a href="signin.php"><img class="bnt_home" src="img/btnPerfil.png"></a>
                    <h3>Entre e Cadastre-se</h3>
                </div> -->
                <div class="cabeçalho-link">
                    <li><a href="norusesportes.php">Seu treino</a></li>
                    <li><a href="frequencia.php">Sua frequência</a></li>
                    <li><a href="carrinho.html">Mensalidades</a></li>
                </div>
            </div>
        </menu>
    </header>
    <main>
        <section id="carrosel" class="conteudo">
            <article class="cont-home">
                <div class="destaque" id="destaque">
                    <div class="cont-destaque">
                        <img id="lebron" src="assets/img/painel1.png">
                    </div>
                    <div class="cont-destaque">
                        <img id="olim" class="carroMob" src="assets/img/painel2.png">
                    </div>
                </div>
            </article>
        </section>
        <section>
            <div class="container-treino">
                <div class="card-treino">
                    <a href="treino.php"><img class="bnt-optins" src="assets/img/btnHalter2.png"></a>
                    <h2><a href="treino.php">Meu treino</a></h2>
                </div>

                <div class="card-treino">
                    <a href="frequencia.php"><img class="bnt-optins" src="assets/img/btnCale2.png"></a>
                    <h2><a href="frequencia.php">Minha frequência</a></h2>
                </div>

                <div class="card-treino">
                    <a href="carrinho.php"><img class="bnt-optins" src="assets/img/btnPlano.png"></a>
                    <h2><a href="carrinho.html">Meu plano</a></h2>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container-footer">
            <div class="footer">
                <div class="redirectPage">
                    <a href="index.php"><img class="bnt-footer" src="assets/img/btnCasa.png"></a>
                    <h4>Inicio</h4>
                </div>

                <div class="redirectPage">
                    <a href="frequencia.php"><img class="bnt-footer" src="assets/img/btnCale2.png"></a>
                    <h4><a href="frequencia.php">Frequência</a></h4>
                </div>

                <div class="redirectPage">
                    <a href="treino.php"><img class="bnt-footer" src="assets/img/btnHalter2.png"></a>
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