
<?php

    require_once __DIR__."/templates/_cabecalho.php"
    $conn = new PDO("mysql:host=localhost;dbname=biblioteca;charset=utf8mb4", "root","");
    $query = "SELECT * FROM livros";
    $resultado = $conn->query($query);

    echo "<pre>";
    var_dump(
        $resultado);
    echo "</pre>";
?>
    <main>
        <img src="https://picsum.photos/900/200" alt="Imagem da Biblioteca" id="jumbo">

        <h2>Biblioteca </h2>
        <div class="card-container">

        */ como colocar todos os card dos livros na pagina index automaticamnte lincando as informacoes 
        do banco de dados, para isso é necessario criar um foreach que percorra o array de livros e exiba cada card com as informações correspondentes.
         Aqui está um exemplo de como fazer isso:*/
            <?php foreach ($resultado as $livro): ?>
                
            <a href="detalhes.html">
            
                <div class="card">
                    <div class="card-img">
                        <?php if ($livro['capa'] == null): ?>

                            <img src="/biblioteca/img/sem-imagem.png" alt="">
                        <?php else: ?>
                            */para colocar una imagem automatica que funcione referenciando o livro coloquei a pasta  uploads 
                            dentro da pasta img e dentro da pasta uploads coloquei as imagens dos livros, e no banco de dados 
                            na tabela livros na coluna capa coloquei o nome do arquivo da imagem correspondente a cada livro, 
                            assim quando o foreach percorrer o array de livros ele vai verificar se a coluna capa é nula ou não, 
                            se for nula ele vai exibir a imagem padrão sem-imagem.png, caso contrário ele vai exibir a imagem 
                            correspondente ao livro que está sendo percorrido no foreach.
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
    </main>

    <?php

        require_once __DIR__ . "/templates/_rodape.php"
    ?>


</body>

</html>