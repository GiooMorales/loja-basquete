<?php
// Captura os parâmetros de filtro e sanitiza
$tiposFiltro = filter_input(INPUT_GET, 'tipo', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];
$linhasFiltro = filter_input(INPUT_GET, 'linha', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];
$termoPesquisa = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING) ?? '';

// Função para filtrar os produtos
function filtrarProdutos($produtos, $tiposFiltro, $linhasFiltro, $termoPesquisa)
{
    return array_filter($produtos, function ($produto) use ($tiposFiltro, $linhasFiltro, $termoPesquisa) {
        $tipoMatch = empty($tiposFiltro) || (isset($produto['tipo']) && in_array($produto['tipo'], $tiposFiltro));
        $linhaMatch = empty($linhasFiltro) || (isset($produto['linha']) && in_array($produto['linha'], $linhasFiltro));
        $termoMatch = empty($termoPesquisa) || stripos($produto['nome'], $termoPesquisa) !== false;
        $searchMatch = isset($produto['search']) && $produto['search'] === 'on';
        return $tipoMatch && $linhaMatch && $termoMatch && $searchMatch;
    });
}

// Inclui os dados dos produtos
include_once 'dados.php';

// Filtra os produtos
$resultado = filtrarProdutos($produtos, $tiposFiltro, $linhasFiltro, $termoPesquisa);

// Verifica se há filtros aplicados
$filtrosAplicados = !empty($tiposFiltro) || !empty($linhasFiltro) || !empty($termoPesquisa);

// Se não houver filtros aplicados, limite o número de produtos a 9
if (!$filtrosAplicados) {
    $resultado = array_slice($resultado, 0, 9);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <div class="nav-logo">
            <a href="../../index.php" onclick="if(window.location.pathname.includes('index.php')) { window.scrollTo({top: 0, behavior: 'smooth'}); return false; }">
                <img src="../../public/img/logo.png" alt="Logo"> <!-- imagem da logo -->
            </a>
        </div>

        <ul class="nav-links">
            <li class="link"><a href="../../index.php">Início</a></li>
            <li class="link"><a href="../vestuario.php">Vestuário</a></li>
            <li class="link"><a href="../bola.php">Bolas</a></li>
            <li class="link"><a href="../mochilas.php">Mochilas</a></li>

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

        <form method="GET" action="">
            <input type="text" name="search" placeholder="Digite o nome do produto"
                value="<?= htmlspecialchars($termoPesquisa) ?>"><br>
            <button type="submit">Pesquisar</button>
        </form>

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
                <img src="../../public/img/perfil.png">
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

    <main class="main-content">
        <div class="filter-section">
            <form method="GET">
                <h3>Tipo de Produto:</h3>
                <input type="checkbox" name="tipo[]" value="roupas"> Roupas<br>
                <input type="checkbox" name="tipo[]" value="calcados"> Calçados<br>
                <input type="checkbox" name="tipo[]" value="acessorios"> Acessórios<br>


                <h3>Linha:</h3>
                <input type="checkbox" name="linha[]" value="casual"> Casual<br>
                <input type="checkbox" name="linha[]" value="esportiva"> Esportiva<br>


                <button type="submit">Filtrar</button>

            </form>
        </div>

        <div class="product-grid">
            <?php
            if (!empty($resultado)) {
                foreach ($resultado as $index => $produto) {
                    include ('card.php');
                }
            } else {
                echo "<p>Nenhum produto encontrado</p>";
            } ?>
        </div>
    </main>

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

    <script>
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

</body>

</html>