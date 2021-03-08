<?php
require_once(__DIR__ . '/header.php');
require_once(__DIR__ . '/core/postscategoria.php');


//Verificando é temos uma solicitação com ID (GET)
if (isset($_GET['id'])) {
    $dados = new PostsCategoria;

    $id = $_GET['id'];
var_dump($id);
    $post = $dados->select_id($id);

    //Verifica se a POSTAGEM EXIATE, se negativo pularemos para ELSE
    if ($id == $post['id']) {
?>

            <!-- MAIN -->
            <main class=" container">


               <!-- POSTS -->
        <?php 
        foreach($dados as $post)
        { 
            ?>

        <article class="posts">

            <a href="/?id=<?php echo $post['id'];?>"><img src="<?php $URL ?>./img/posts/article1.jpg" alt="Post 1"></a>
            <div class="fonte">
                Imagem de <a href="#" target="_blanck">wendy buiter</a> por <a href="#" target="_blanck">Arts Foto</a>
            </div>
            <div class="inner">
                <a href="<?php echo $post['id'];?>">
                <?php echo $post['titulo']; ?>
                </a>
                <h4>
                <?php echo $post['sloga']; ?>
                </h4>
            <p><?php
            //Função limitará o counteudo em 200, sem contar a ultima palavra.
            echo (limitarTexto($post['conteudo'], $limite = 200));
            ?></p>

            </div>
        </article>
<?php
}
?>

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
