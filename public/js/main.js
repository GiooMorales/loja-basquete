
    // Função para verificar se o usuário está logado
    function checkLoginStatus() {
        const token = localStorage.getItem('token');
        const entrarBtn = document.getElementById('entrarBtn');
        const perfilBtn = document.getElementById('perfilBtn');

        if (token) {
            entrarBtn.style.display = 'none';
            perfilBtn.style.display = 'block';
        } else {
            entrarBtn.style.display = 'block';
            perfilBtn.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', checkLoginStatus);
