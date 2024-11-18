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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
        <div class="cabeçalho-link">
          <li><a href="norusesportes.php">Seu treino</a></li>
          <li><a href="frequencia.php">Sua frequência</a></li>
          <li><a href="mesalidades.php">Mensalidades</a></li>
        </div>
      </div>
    </menu>
  </header>

  <main>
    <div class="container">
      <div class="card">
        <h1>Pagamento da fatura: 01/11</h1>

        <div id="msgError"></div>
        <div id="msgSuccess"></div>

        <div>
          <h4>Nome do titular do cartão:</h4>
          <div class="label-float">
            <input type="text" id="nome" placeholder="Informe seu nome*" required />
            <label id="labelNome" for="nome"></label>
          </div>
        </div>

        <div>
          <h4>CPF:</h4>
          <div class="label-float">
            <input type="text" id="usuario" placeholder="Informe seu CPF*" required />
            <label id="labelUsuario" for="usuario"></label>
          </div>
        </div>

        <div>
          <h4>Número do cartão:</h4>
          <div class="label-float">
            <input type="text" id="cartao" placeholder="Informe os numeros do cartão*" required />
            <label id="labelCartao" for="cartao"></label>
          </div>
        </div>

        <div>
          <h4>CVC do cartão:</h4>
          <div class="label-float">
            <input type="text" id="nome" placeholder="Informe o CVC do cartão*" required />
            <label id="labelNome" for="nome"></label>
          </div>
        </div>

        <div>
          <h4>E-mail:</h4>
          <div class="label-float">
            <input type="text" id="email" placeholder="Informe seu e-mail*" required />
            <label id="labelEmail" for="email"></label>
          </div>
        </div>

        <div>
          <h4>Digite sua senha:</h4>
          <div class="label-float">
            <input type="password" id="senha" placeholder="Senha*" required />
            <label id="labelSenha" for="senha"></label>
            <i class="bi bi-eye-fill" id="btn-show" onclick="verSenha()"></i>
          </div>
        </div>

        <div>
          <h4>Confirme sua senha:</h4>
          <div class="label-float">
            <input type="password" id="confirmSenha" placeholder="Confirmar senha*" required />
            <label id="labelConfirmSenha" for="confirmSenha"></label>
            <i class="bi bi-eye-fill" id="btn-show" onclick="verConfirmSenha()"></i>
          </div>
        </div>

        <div class="btnValidacao">
          <button onclick="validacao()">validar</button>
        </div>

        <div class="pagamento">
          <strong class="product-title">
            <h3>Mensalidade 01/11/2024</h3>
          </strong>
          <div class="product-price-container">
            <span class="product-price">
              <h4>Preço: R$120,00</h4>
            </span>
            <button type="button" class="button-hover-background">pagar</button>
          </div>
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
          <img class="bnt-footer" src="assets/img/btnHalter2.png">
          <h4><a href="treino.php">Treino</a></h4>
        </div>
      </div>
    </div>
  </footer>


  <script src="assets/js/loja.js" async></script>
  <script src="assets/js/acoes.js"></script>
  <script src="assets/js/signin.js"></script>
</body>

</html>