

    <?php

       require_once __DIR__"/../../templades/cabecalho.php"
    ?>


    <main class="main-detalhes">

        <form action="" method="post" enctype="multipart/form-data">

            <!---logo-->
            <img src="https://picsum.photos/100" alt="Logo da Biblioteca" class="logo">
            <div class="form-item">

                <!---nome-->
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome ">

            </div>

            <div class="form-item">

                <!---nome-->
                <label for="email">e-mail</label>
                <input type="email" name="email" id="email ">

            </div>


            <div class="form-item">

                <!---nome-->
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="email ">

            </div>


            <div class="form-item">

                <!---nome-->
             <!--    <label class= "txt-perfil" for="foto">Foto de Perfil</label> -->
                <!-- <input type="file" name="foto" id="foto ">!
 -->
                <label class="upload-btn">
                 Anexar Foto de Perfil
                  <input type="file">
                </label

            </div>

            <button type="submit">Cadastrar</button>

        </form>





    </main>



    <?php

       require_once __DIR__"/../../templades/rodape.php"
    ?>

</body>

</html>