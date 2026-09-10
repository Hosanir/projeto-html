

        <?php

         require_once __DIR__"/../../templades/cabecalho.php"
        ?>
        <main class="login">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="login-item">

                        <!---nome-->
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email ">

                    </div>


                    <div class="login-item">

                        <!---nome-->
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha ">
                        <img id="olho_fechado" src="../img/invisivel.png" alt="">
                    

                    </div>

        </div>



                    <button class=bt-login"submit">Login</button>


                </form>
        </main>


        
        <?php
    require_once __DIR__"/../../templades/rodape.php"
        ?>
    

    </body>
</html>