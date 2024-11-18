<?php
    include_once('./private/config/db/conn.php');
    $sql = "SELECT * FROM tbentrada_saida";
    $exc = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Titan</title>
    <link rel="icon" href="assets/img/">
    <link rel="stylesheet" href="assets/css/norus.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
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
                <a href="treino.php"><img class="bnt-home" src="assets/img/btnHalter2.png"></a>
            </div>
        </div>
        <menu>
            <div class="cabeçalho">
                <!-- <div class="cabeçalhoMob">
                    <a href="signin.php"><img class="bnt_home" src="assets/img/btnPerfil.png"></a>
                    <h3>Entre e Cadastre-se</h3>
                </div> -->
                <div class="cabeçalho-link">
                    <li><a href="treino.php">Seu treino</a></li>
                    <li><a href="frequencia.php">Sua frequência</a></li>
                    <li><a href="carrinho.php">Mensalidades</a></li>
                </div>
            </div>
        </menu>
        <hr>
    </header>
    <main>
        <section>
            <!-- <div class="container-calendario">
                <div class="calendario">
                    <div class="mes">
                        <br>
                        <h2>Novembro</h2>
                        <br>
                        <table>
                            <tr class="semana">
                                <td><h4>DOM.</h4></td>
                                <td><h4>SEG.</h4></td>
                                <td><h4>TER.</h4></td>
                                <td><h4>QUA.</h4></td>
                                <td><h4>QUI.</h4></td>
                                <td><h4>SEX.</h4></td>
                                <td><h4>SAB.</h4></td>
                            </tr>
                            <tr class="diasSemana">
                                <td class="nulo"> </td>
                                <td class="nulo"> </td>
                                <td class="nulo"> </td>
                                <td class="nulo"> </td>
                                <td class="nulo"> </td>
                                <td class="falta 01/11/2024">01</td>
                                <td id="02/11/2024">02</td>
                            </tr>
                            <tr class="diasSemana">
                                <td id="03/11/2024">03</td>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                            </tr>
                            <tr class="diasSemana">
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                            </tr>
                            <tr class="diasSemana">
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                            </tr>
                            <tr class="diasSemana">
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> -->
            <div class="container-historico">
                <div class="titulo-historico">
                    <h1>Histórico de presença</h1>
                </div>
                <div class="historico">
                    
                    <?php
                        if ($exc->num_rows > 0) {
                            while ($row = $exc->fetch_assoc()) {
                                $dia = $row["dia"];
                                $entrada = $row["entrada"];
                                $saida = $row["saida"];

                                echo "<div class='card-historico'>";
                                echo "<h3>Dia: $dia</h3>";
                                echo "<h4>Horario de entrada: $entrada</h4>";
                                echo "<h4>Horario de saida: $saida</h4>";
                                echo "</div>";
                                ?>
                                <script>
                                    let presenca = document.getElementById("<?=$dia?>");
                                    
                                    presenca.setAttribute('style', 'background-color: #901618')
                                </script>
                                <?php
                            }
                            echo "</table>";
                        } else {
                            echo "<tr>";
                            echo "<td colspan = '4'>";
                            echo "Marca de carro";
                            echo "<td>";
                            echo "</tr>";
                            echo "</table>";
                        }
                    ?>
                </div>
            </div>

        </section>
    </main>
    <footer>
        <div class="container-footer">
            <div class="footer">
                <div class="redirectPage">
                    <a href="index.php"><img class="bnt-footer" src="assets/img/btnCasa2.png"></a>
                    <h4>Inicio</h4>
                </div>

                <div class="redirectPage">
                    <a href="frequencia.php"><img class="bnt-footer" src="assets/img/btnCale.png"></a>
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