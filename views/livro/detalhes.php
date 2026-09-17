<?php

require_once __DIR__ . "/../../templades/cabecalho.php";
require_once __DIR__ . "/../../models/livro.php";

    if (isser($_GET['id'])) {
        $id = $_GET['id'];
        $livros = Livro::buscarPorId($id);
    } else {
        header('Location: /biblioteca/index.php');
        exit();
    }
    if (!$livro){
        header('Location: /biblioteca/index.php');
        exit();
    }
    
?>

</header>


<main class="detalhe">

    <div id="img">
        <?php if ($livro['capa'] == null): ?>

            <img src="/biblioteca/img/sem-imagem.png" alt="">

        <?php else: ?>
            <img src="/biblioteca/img/capa/uploads/<?php echo $livro['capa']; ?>" alt="">
        <?php endif; ?>
    </div>
    

    <div id="texto-detalhe">
        <h2><?= $livro['titulo'] ?> </h2>
        <br>
        <p><?= $livro['ano_pub'] ?></p>
        <p><?= $livro['autor'] ?></p>
        <p>Categoria</p>
    </div>

    <div id="descricao">
        <p>O Senhor dos Anéis, obra de J.R.R. Tolkien, acompanha a jornada do jovem hobbit Frodo Bolseiro.
            <br>Ele recebe a missão de atravessar a Terra-média até a Montanha da Perdição para destruir
            <br>o Um Anel e impedir o retorno do Senhor das Trevas, Sauron.
        </p>
    </div>
    <p></p>

</main>



<?php

require_once "_rodape;"
    ?>

</body>

<?php

require_once __DIR__
"/../../templades/rodape.php"
    ?>

</html>