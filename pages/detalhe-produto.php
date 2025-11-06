<?php
include '../app/database/dados.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id < 0 || $id >= count($produtos)) {
    echo "Produto não encontrado.";
    exit;
}

$produto = $produtos[$id];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['nome']; ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <nav>
        <div class="nav-logo">
            <a href="../index.php">
                <img src="../public/img/logo.png" alt="Logo"> <!-- imagem da logo -->
            </a>
        </div>

        <ul class="nav-links">
            <li class="link"><a href="../index.php">Início</a></li>
            <li class="link"><a href="vestuario.php">Vestuário</a></li>
            <li class="link"><a href="bola.php">Bolas</a></li>
            <li class="link"><a href="mochilas.php">Mochilas</a></li>

            <a href="./pesquisa/">
                <button class="btnsearch">
                    <span>
                        <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z">
                            </path>
                        </svg>
                    </span>
                </button>
            </a>
        </ul>

        <a href="login/signin.html">
            <button class="btnlogin" id="entrarBtn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                </svg>
                <div class="textlogin">Entrar</div>
            </button>
        </a>

        <div class="perfilesair">
            <div class="perfil" id="perfilBtn">
                <img src="../public/img/perfil.png">
            </div>


            <button class="cssbuttons-io-button" id="sairBtn">
                Sair
                <div class="icoon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </button>
        </div>

    </nav>

    <compra>
        <div class="container">
            <div class="product-details">
                <h1><?php echo $produto['nome']; ?></h1>
                <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                <div class="descricao">
                    <h3>Descrição</h3>
                    <p><?php echo $produto['descricao']; ?></p>
                </div>
            </div>
        </div>
        <div class="compra-produto">
            <preco>R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></preco>
            <parcela>ou <?php echo number_format($produto['valortotalcomj'], 2, ',', '.'); ?> em até
                <?php echo ($produto['parcelas_sj']); ?>x sem juros </parcela>
            <script>var valorProduto = <?php echo $produto['valor']; ?>;</script>
            <label for="parcelas">Selecione o número de parcelas:</label>
            <select id="parcelas">
                <option value="1">1x</option>
                <option value="2">2x</option>
                <option value="3">3x</option>
                <option value="4">4x</option>
                <option value="5">5x</option>
                <option value="6">6x</option>
                <option value="7">7x</option>
                <option value="8">8x</option>
                <option value="9">9x</option>
                <option value="10">10x</option>
                <option value="11">11x</option>
                <option value="12">12x</option>
            </select>
            <btncalc onclick="calcularParcelamento()">Calcular</btncalc>
            <div id="resultado"></div>
            <p>Juros mensal: <?php echo $produto['juros']; ?>%</p>
            <button class="buttonbuy" <?php echo '$id'; ?>>Comprar</button>
        </div>
    </compra>

    <script>
        function calcularParcelamento() {
            var parcelas = parseInt(document.getElementById("parcelas").value);
            var valorTotal = valorProduto;
            var valorPorParcela = valorProduto / parcelas;

            if (parcelas > 6) {
                for (var i = 6; i < parcelas; i++) {
                    valorTotal *= 1.015; // Aumenta 1,5% cada mês
                }
                valorPorParcela = valorTotal / parcelas;
            }

            document.getElementById("resultado").innerHTML = "Valor por parcela: R$" + valorPorParcela.toFixed(2).replace('.', ',') +
                "<br>Total a pagar: R$" + valorTotal.toFixed(2).replace('.', ',');
        }

        document.addEventListener('DOMContentLoaded', function () {
            var comprarBtn = document.getElementById('comprarBtn');
            comprarBtn.addEventListener('click', function () {
                var nome = localStorage.getItem('nome');
                var usuario = localStorage.getItem('usuario');
                var senha = localStorage.getItem('senha');

                if (nome && usuario && senha) {
                    // Redireciona para o carrinho
                    window.location.href = 'carrinho.html';
                } else {
                    // Redireciona para a página de login
                    window.location.href = 'login.html';
                }
            });
        });

        // Função para verificar se o usuário está logado
        function checkLoginStatus() {
            const token = localStorage.getItem('token');
            const entrarBtn = document.getElementById('entrarBtn');
            const perfilBtn = document.getElementById('perfilBtn');
            const sairBtn = document.getElementById('sairBtn');

            if (token) {
                entrarBtn.style.display = 'none';
                perfilBtn.style.display = 'block';
            } else {
                entrarBtn.style.display = 'block';
                perfilBtn.style.display = 'none';
                sairBtn.style.display = 'none';

            }
        }

        document.addEventListener('DOMContentLoaded', checkLoginStatus);
    </script>

    <!-- Footer -->
    <footer class="footer">
        <div class="containerfooter">
            <p>Giovani Oliveira</p>
            <p>&copy; 2024. Todos os direitos reservados.</p>
            <ul>
                <li><a href="#">Privacidade</a></li>
                <li><a href="#">Termos</a></li>
                <li><a href="#">Suporte</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>