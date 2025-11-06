<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    // Processar a imagem
    $imagem = $_FILES['imagem']['name'];
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/trabaifernandinfeito/uploads/";
    $target_file = $target_dir . basename($imagem);

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target_file)) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro ao enviar a imagem.";
    }
}
?>
