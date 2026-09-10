
    <?php

       require_once __DIR__"/../../templades/cabecalho.php"
    ?>

    <main>
        <h1>Gerenciador de Livros</h1>
        <button id="btn-adicionar">Adicionar</button>
        <table id="livros-table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Ano</th>
                    <th>categoria</th>
                    <th colspan="2">Opções</th>

                </tr>


                <tr>
                    <th>asd</th>
                    <th>2026</th>
                    <th>categoria1</th>
                    <th><button class="btn-editar">Editar</button></th>
                    <th><button class="btn-deletar">Deletar</button></th>

                </tr>
                
            </thead>
            <tbody id="livros-tbody">
                <!-- Os livros serão adicionados aqui dinamicamente -->
            </tbody>
    </main>

        <?php

        require_once __DIR__"/../../templades/rodape.php"
    ?>
</html>