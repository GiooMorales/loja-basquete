# Loja Baska 🏀

Aplicação web construída em PHP puro que simula uma loja de artigos de basquete. O catálogo é mantido em memória através de arrays PHP e as interações de login/cadastro acontecem no front-end via `localStorage`, o que torna o projeto leve e fácil de executar em qualquer ambiente com PHP instalado.

## ✨ Principais funcionalidades
- **Página inicial** com hero banner, navegação e vitrine de produtos em destaque (`index.php`).
- **Catálogo por categoria** (`pages/vestuario.php`, `pages/bola.php`, `pages/mochilas.php`) alimentado pelo array de produtos em `app/database/dados.php`.
- **Busca com filtros** (tipo e linha) em `pages/pesquisa/`, reaproveitando o componente `views/components/card.php` e respeitando campos `search`, `tipo` e `linha` dos produtos.
- **Detalhe do produto** (`pages/detalhe-produto.php`) com simulação de parcelamento e juros progressivos acima de 6x.
- **Fluxo de autenticação no front-end** (`public/js/signin.js` e `public/js/signup.js`) usando `localStorage` para guardar credenciais fictícias e tokens.
- **Upload de imagens** (protótipo em `pages/adicionar_produto.php`), salvando arquivos em `uploads/`.

## 🗂️ Estrutura do projeto

```
loja-basquete/
├── app/
│   └── database/dados.php      # Catálogo de produtos (arrays PHP)
├── pages/                      # Páginas internas (categorias, busca, detalhe, login…)
├── public/
│   ├── css/                    # Estilos globais e específicos
│   ├── js/                     # Scripts de interação (login, vitrine, etc.)
│   └── img/                    # Assets utilizados na loja
├── uploads/                    # Destino de imagens enviadas pelo formulário de produto
└── index.php                   # Landing page inicial
```

## 🚀 Como executar

1. Certifique-se de ter o PHP 8 (ou superior) disponível no PATH.
2. Clone o repositório e acesse a pasta do projeto:
   ```bash
   git clone https://github.com/<seu-usuario>/loja-basquete.git
   cd loja-basquete
   ```
3. Inicie o servidor embutido do PHP apontando para o diretório raiz:
   ```bash
   php -S localhost:8000
   ```
4. Abra `http://localhost:8000` no navegador.

> 💡 Caso esteja usando o servidor embutido, evite rodá-lo a partir de dentro de `pages/` ou `public/`; mantenha o documento raiz em `index.php`.

## 🔧 Personalização
- **Cadastrar ou editar produtos:** ajuste os itens do array em `app/database/dados.php` (campos como `pagina`, `tipo`, `linha` e `search` controlam onde cada produto aparece).
- **Adicionar imagens:** coloque novos arquivos em `public/img/` e referencie-os no catálogo.
- **Alterar estilos:** edite `public/css/style.css` para ajustes globais ou os demais arquivos CSS específicos.
- **Fluxo de login:** os scripts `public/js/signin.js` e `public/js/signup.js` usam `localStorage`. Integrações reais podem substituir esse mecanismo por chamadas a uma API.

## ✅ Boas práticas e próximos passos
- Proteja formulários de upload (`pages/salvar_produto.php`) antes de usar em produção; hoje o caminho de destino está fixado e não há validação de tipo/tamanho de arquivo.
- Considere trocar o armazenamento em arrays por uma base de dados ou arquivo JSON para persistência entre reinicializações.
- Padronize o cálculo de parcelamento e juros no lado do servidor para evitar inconsistências.
- Substitua o fluxo de login front-end por autenticação real se for publicar o projeto.

## 📄 Licença

Este projeto foi desenvolvido para fins educacionais. Adapte a licença conforme necessário antes de distribuir ou monetizar a aplicação.
