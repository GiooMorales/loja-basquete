<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mochilas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script defer src="main.js"></script>
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
            <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z"></path></svg>
                </span>
            </button>
            </a>
        </ul>

        <a href="login/signin.html">
        <button class="btnlogin" id="entrarBtn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
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

    <!-- Main Content -->
    <main class="main-content">
        <div class="containerprincipal">
            <h2>Mochilas</h2>
            <div class="product-grid">
            <?php
                include '../app/database/dados.php';
                // Filtrar produtos que têm o tipo 'Roupas'
                $produtosMochilas = array_filter($produtos, function($produto) {
                    return $produto['pagina'] === 'mochilas';
                });

                // Exibir os produtos filtrados
                foreach ($produtosMochilas as $index => $produto) {
                    include('../views/components/card.php');
                }
                ?>
            </div>
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
