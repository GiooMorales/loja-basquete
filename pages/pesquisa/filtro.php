<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <script defer src="main.js"></script>
</head>
<body>

<nav>
    <div class="nav-logo">
        <a href="../../index.php">
            <img src="../../public/img/logo.png" alt="Logo"> <!-- imagem da logo -->
        </a>
    </div>
    <ul class="nav-links">
        <li class="link"><a href="../../index.php">Início</a></li>
        <li class="link"><a href="vestuario.php">Vestuário</a></li>
        <li class="link"><a href="#">Bolas</a></li>
        <li class="link"><a href="#">Mochilas</a></li>
        <a href="pesquisa.php">
            <button class="btnsearch">
                <span>
                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z"></path>
                    </svg>
                </span>
            </button>
        </a>
    </ul>
    <a href="#">
        <button class="btnlogin">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
            </svg>
            <div class="textlogin">Entrar</div>
        </button>
    </a>
</nav>

<tbody>
<main class="main-content">
        <div class="containerprincipal">

                <?php
                include 'dados.php';

                $produtosRoupas = array_filter($produtos, function($produto) {
                    return $produto['search'] === 'on';
                });

                foreach ($produtos as $index => $produto) {
                    include('index.php');
                }
                ?>
                </div>

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

            </div>
            </div>
        </tbody>
    </table>
</body>
</html>