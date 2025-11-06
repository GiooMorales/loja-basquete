<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form action="salvar_produto.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Nome do Produto" required>
        <input type="number" step="0.01" name="preco" placeholder="Preço" required>
        <textarea name="descricao" placeholder="Descrição" required></textarea>
        <input type="file" name="imagem" required>
        <input type="submit" value="Adicionar Produto">
    </form>
</body>
</html>
