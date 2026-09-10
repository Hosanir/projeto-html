
        <?php

         require_once __DIR__"/../../templades/_rodape.php"
        ?>
        <header>
            <!---logo-->
            <img src="https://picsum.photos/100" alt="Logo da Biblioteca" class="logo">

            <!-- menu -->
            <nav>
                <a href="index.html">inicio</a>
                <a href="cadastro.html">cadastro</a>
                <a href="login.html">login </a>

            </nav>

        </header>
        <main>
            <h1>Gerenciador de Categorias</h1>
            <button id="btn-adicionar">Adicionar</button>
            <table id="livros-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th colspan="2">Opções</th>

                    </tr>


                    <tr>
                        <th>asd</th>
                        <th><button class="btn-editar">Editar</button></th>
                        <th><button class="btn-deletar">Deletar</button></th>

                    </tr>
                    
                </thead>
                <tbody id="livros-tbody">
                    <!-- Os livros serão adicionados aqui dinamicamente -->
                </tbody>
        </main>

            
    <?php

     require_once __DIR__"/../../templades/_rodape.php"
    ?>
    </body>


</html>
