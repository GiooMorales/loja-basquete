<div class="product-item">
    <a href="../pages/detalhe-produto.php?id=<?= $index; ?>">
        <img src="<?= $produto['imagem']; ?>" alt="<?= $produto['nome']; ?>">
        <h3><?= $produto['nome']; ?></h3>
        <p>R$ <?= number_format($produto['valor'], 2, ',', '.'); ?></p>
        <parcela>ou <?php echo number_format($produto['valortotalcomj'], 2, ',', '.'); ?> em até
            <?php echo ($produto['parcelas_sj']); ?>x sem juros </parcela>

    </a>
    </a>
</div>