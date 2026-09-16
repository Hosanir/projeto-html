<?php
require_once __DIR__ . "/templates/_cabecalho.php";

require_once __DIR__ . "/models/livros.php";



?>

    <main>
        <img src="https://picsum.photos/900/200" alt="Imagem da Biblioteca" id="jumbo">

        <h2>Biblioteca </h2>
           <?php if (count($resultado ?? []) == 0): ?>
                <div class="card-container">
                    <?php foreach ($resultado as $livro): ?>
                        
                    <a href="/biblioteca/views/livro/detalhes.php?id=<?=$livro["id_livro"]?>">
                    
                        <div class="card">
                            <div class="card-img">
                                <?php if ($livro['capa'] == null): ?>

                                    <img src="/biblioteca/img/sem-imagem.png" alt="">
                                <?php else: ?>
                                    <img src="/biblioteca/img/capa/uploads/<?php echo $livro['capa']; ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="card-text">
                                <h>Livro 1</h3>
                                    <p>Descrição do Livro 1</p>
                            </div>

                        </div>

                    </a>
                    <?php endforeach; ?>
            
                </div>
            <?php endif; ?>
    </main>

    <?php

        require_once __DIR__ . "/templates/_rodape.php"
    ?>


</body>

</html>