<?php

require_once(__DIR__ . '/core/selectpostsid.php');


//Verificando é temos uma solicitação com ID (GET)
if (isset($_GET['id'])) {
    $dados = new Posts;

    $id = $_GET['id'];

    $post = $dados->select_id($id);

    //Verifica se a POSTAGEM EXIATE, se negativo pularemos para ELSE
    if ($id == $post['id']) {
?>



            <!-- MAIN -->
            <main class=" container">


                <!-- POSTS -->
                <article>
                    <h1><?php echo $post['titulo'] ?></h1>

                    <strong>Postagem de <?php echo date('d/m/Y H:i:s',strtotime($post['criado'])); ?></strong></br>

                    <h4><?php echo $post['sloga'] ?></h4>

                    <p>
                        <?php echo $post['conteudo'] ?>
                    </p>



                </article>





            </main>

            <!-- NEWSLETTER, boletim informativo ou mensagem eletrônica destinado a assinantes do site-->

            <section class="newsletter container">
                <h2>Inscreva-se agora!</h2>
                <h3>Receba todas as novidas</h3>
                <form>
                    <input class="bt-black" type="email" placeholder="Seu email" />
                    <button class="bt-white">Cadastrar</button>
                </form>
            </section>

            <!-- RODAPE -->

            <footer class="rodape cg-gradiente">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
                <p class="copyright">
                    Copyright <a href="#" target="_blanck"><i class="far fa-copyright"></i></a> News App 2021. Todos os direitos reservados.
                </p>
            </footer>


            <!-- A função desse script e gerar a abertura e o fechamento do menu-->

            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script>
                $(".btn-menu").click(function() {
                    $(".menu").show();
                });
                $(".btn-close").click(function() {
                    $(".menu").hide();
                });
            </script>
        </body>

</html>

<?php
//RETORNANDO PARA HOME
    } else {
        header(('Location: index.php'));
        exit();
    }
}
