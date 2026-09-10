
    <?php

         require_once __DIR__"/../../templades/cabecalho.php"
    ?>


    <main class="cadastro-livro">

        <form class="livro" action="" method="post" enctype="multipart/form-data">

            <div class="titulo">

                <!---nome-->
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo_livro ">

            </div>

            <div class="ano-publicacao">

                <!---nome-->
                <label for="ano_publicacao">Ano de Publicação</label>
                <input type="number" name="ano_publicacao" id="ano_publicacao ">

            </div>


            <div class="autor">

                <!---nome-->
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor ">

            </div>

            
            <div class="resumo">

                <!---nome-->
                <label for="resumo">Resumo</label>
                <input type="text" name="resumo" id="resumo ">

            </div>

            
            <div class="categoria">

                <!---nome-->
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value="ficcao">Ficção</option>
                    <option value="nao-ficcao">Não Ficção</option>
                    <option value="romance">Romance</option>
                    <option value="aventura">Aventura</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="biografia">Biografia</option>
                    <option value="auto-ajuda">Autoajuda</option>
                    <option value="infantil">Infantil</option>
                </select>

            </div>









            <button type="submit">Cadastrar</button>

        </form>





    </main>


    <?php

       require_once __DIR__"/../../templades/rodape.php"
    ?>


</body>

</html>