<?php
    include_once('./private/config/db/conn.php');
    $sql = "SELECT * FROM tbentrada_saida";
    $exc = $conn->query($sql);

    // $dia = $_POST['dia'];
    // $entrada = $_POST['entrada'];
    // $saida = $_POST['saida'];

    // $result = mysqli_query($conn, "INSERT INTO tbentrada_saida(entrada, saida) VALUES('$entrada', '$saida')");
?>

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
            <h1>Treino Braço:</h1>
        </div>

        <div class="container-cards-treino">
            <div class="cards-treino">
                <div class="card-treinoBPP">
                    <div>
                        <img src="assets/img/treinoBraco-roscaInclinada.png">
                    </div>
                    <div class="card-treinoBPP-info">
                        <a href="frequencia.php"></a>
                        <h3>Rosca Inclinada <br>com Halter</h3></a>
                        <br>
                        <a href="">
                            <h4>4x 15 a 20</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="cards-treino">
                <div class="card-treinoBPP">
                    <div>
                        <img src="assets/img/treinoBraco-roscaAlternada.png">
                    </div>
                    <div class="card-treinoBPP-info">
                        <a href="frequencia.php"></a>
                        <h3>Rosca Alternada</h3></a>
                        <br>
                        <a href="">
                            <h4>4x 15 a 20</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="cards-treino">
                <div class="card-treinoBPP">
                    <div>
                        <img src="assets/img/treinoBraco-tricepsFrances.png">
                    </div>
                    <div class="card-treinoBPP-info">
                        <a href="frequencia.php"></a>
                        <h3>Triceps Francês na corda</h3></a>
                        <br>
                        <a href="">
                            <h4>3x 12</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="cards-treino">
                <div class="card-treinoBPP">
                    <div>
                        <img src="assets/img/treinoBraco-roscaScott.png">
                    </div>
                    <div class="card-treinoBPP-info">
                        <a href="frequencia.php"></a>
                        <h3>Rosca Scott com <br>Barra W</h3></a>
                        <br>
                        <a href="">
                            <h4>4x 10 a 12</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="cards-treino">
                <div class="card-treinoBPP">
                    <div>
                        <img src="assets/img/treinoBraco-tricepsCordaBaixa.png">
                    </div>
                    <div class="card-treinoBPP-info">
                        <a href="frequencia.php"></a>
                        <h3>Triceps com Corda <br>Polia Baixa</h3></a>
                        <br>
                        <a href="">
                            <h4>4x 10 a 12</h4>
                        </a>
                    </div>
                </div>
            </div>

            <!-- <button>Concluir Treino</button> -->
        </div>

        <div class="container-entrada-saida">
            <div class="card-entrada-saida">
                <br>
                <form method="post" class="entrada-saida" action="grava-entrada-saida.php">
                    <label><h4>Data de hoje</h4></label><br>
                    <input type="text" name="dia" id="dia">
                    <br><br>
                    <label><h3>Horario de entrada</h3></label>
                    <br>
                    <input type="text" name="entrada" id="entrada">
                    <br>
                    <label><h4>Horario de saida</h4></label><br>
                    <input type="text" name="saida" id="saida">
                    <br><br>
                    <input class="concluir" type="submit" value='Concluir treino'>
                </form>






                <!-- <div class="labelInput-entrada-saida">
                    <h4>Horario de entrada:</h4><br>
                    <input type="text" name="entrada" id="entrada" class="usuario-entrada">
                </div>
                <div class="labelInput-entrada-saida">
                    <h4>Horario de saida:</h4><br>
                    <input type="text" name="saida" id="saida" class="usuario-saida">
                </div>
                <div>
                    <button type="button" class="button-entrada-saida">Concluir</button>
                </div> -->
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