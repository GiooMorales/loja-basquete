<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Baska - Sua Loja de Basquete</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/botaoperfil.css">
    <style>
        /* Remove sombra da logo na topbar */
        .nav-logo img {
            box-shadow: none !important;
        }

        /* Ajusta o botão de sair */
        .cssbuttons-io-button {
            background: rgb(245, 20, 20) !important;
            color: white !important;
            padding: 0.5em 1em !important;
            font-size: 14px !important;
            border-radius: 0.5em !important;
            height: auto !important;
            min-height: 2.5em !important;
            display: flex !important;
            align-items: center !important;
            gap: 0.5em !important;
        }

        .cssbuttons-io-button .icoon {
            position: relative !important;
            background: white !important;
            height: 1.5em !important;
            width: 1.5em !important;
            border-radius: 0.3em !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2) !important;
            right: auto !important;
            margin-left: 0 !important;
        }

        .cssbuttons-io-button:hover {
            background: rgb(220, 20, 20) !important;
        }

        .cssbuttons-io-button .icoon svg {
            width: 1em !important;
            height: 1em !important;
            color: rgb(245, 20, 20) !important;
        }

        .hero-section {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            min-height: 70vh;
            background-color: #ffffff;
        }

        .hero-content h4 {
            color: #2f2d2d;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .hero-content h1 {
            color: #000;
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .hero-content h1 span {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 2px #000000;
        }

        .hero-content p {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }

        .hero-image img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
            display: block;
            background-color: #ffffff;
        }

        .products-section {
            padding: 4rem 2rem;
            background-color: #f8f9fa;
        }

        .products-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 3rem;
        }

        @media (max-width: 768px) {
            .hero-section {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 2rem 1rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-image img {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
<nav>
      <div class="nav-logo">
            <a href="index.php" ">
                <img src="public/img/logo.png" alt="Logo"> <!-- imagem da logo -->
            </a>
</div>

        <ul class="nav-links">
            <li class="link"><a href="index.php">Início</a></li>
            <li class="link"><a href="pages/vestuario.php">Vestuário</a></li>
            <li class="link"><a href="pages/bola.php">Bolas</a></li>
            <li class="link"><a href="pages/mochilas.php">Mochilas</a></li>

            <a href="pages/pesquisa/">
            <button class="btnsearch">
                <span>
            <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z"></path></svg>
                </span>
            </button>
            </a>
        </ul>

        <a href="pages/login/signin.html">
        <button class="btnlogin" id="entrarBtn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
            </svg>
            <div class="textlogin">Entrar</div>
        </button>
    </a>

<div class="perfilesair">
        <div class="perfil" id="perfilBtn">
      <img src="public/img/perfil.png">
</div>


        <button class="cssbuttons-io-button" id="sairBtn">
   Sair
  <div class="icoon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>
</div>

</nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h4>Bem-vindo à</h4>
            <h1>Loja <span>Baska</span></h1>
            <p>
                Sua loja especializada em produtos de basquete! Aqui você encontra tudo que precisa 
                para o jogo: jerseys oficiais da NBA, tênis de alta performance, bolas profissionais, 
                mochilas e acessórios. Qualidade e estilo para você que ama basquete.
            </p>
            <p>
                Explore nossa coleção completa e encontre os melhores produtos para elevar seu jogo 
                ao próximo nível. Entrega rápida e garantia de qualidade em todos os produtos.
            </p>
        </div>
        <div class="hero-image">
            <img src="public/img/Lacerda.png" alt="Loja Baska">
        </div>
    </section>

    <!-- Produtos em Destaque -->
    <section class="products-section">
        <div class="products-container">
            <h2 class="section-title">Produtos em Destaque</h2>
            <div class="product-grid">
                <?php
                include 'app/database/dados.php';
                
                // Filtrar produtos que aparecem na página inicial
                $produtosInicial = array_filter($produtos, function($produto) {
                    return isset($produto['pagina']) && $produto['pagina'] === 'inicial';
                });

                // Limitar a 6 produtos
                $produtosInicial = array_slice($produtosInicial, 0, 6);

                if (!empty($produtosInicial)) {
                    foreach ($produtosInicial as $index => $produto) {
                        // Ajusta o caminho da imagem para funcionar na raiz
                        $imagem = str_replace('../public/', 'public/', $produto['imagem']);
                        
                        echo "<div class='product-item'>";
                        echo "<a href='pages/detalhe-produto.php?id=" . array_search($produto, $produtos) . "'>";
                        echo "<img src='" . $imagem . "' alt='" . $produto['nome'] . "'>";
                        echo "<h3>" . $produto['nome'] . "</h3>";
                        echo "<p>R$ " . number_format($produto['valor'], 2, ',', '.') . "</p>";
                        echo "<parcela>ou R$ " . number_format($produto['valortotalcomj'], 2, ',', '.') . " em até ";
                        echo $produto['parcelas_sj'] . "x sem juros</parcela>";
                        echo "</a>";
                        echo "</div>";
                    }
                } else {
                    echo "<p style='text-align: center; grid-column: 1 / -1;'>Nenhum produto encontrado.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="containerfooter">
            <p>Giovani Oliveira</p>
            <p>&copy; 2024 Loja Baska. Todos os direitos reservados.</p>
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
            sairBtn.style.display = 'block';
        } else {
            entrarBtn.style.display = 'block';
            perfilBtn.style.display = 'none';
            sairBtn.style.display = 'none';
        }
    }

    // Função para fazer logout
    function fazerLogout() {
        localStorage.removeItem('token');
        localStorage.removeItem('userLogado');
        window.location.href = 'index.php';
    }

    document.addEventListener('DOMContentLoaded', function() {
        checkLoginStatus();
        
        // Adiciona evento de clique no botão de sair
        const sairBtn = document.getElementById('sairBtn');
        if (sairBtn) {
            sairBtn.addEventListener('click', fazerLogout);
        }
    });
    </script>
</body>
</html>
