<?php

require_once(__DIR__ . '/core/funcoes.php');
require_once(__DIR__ . '/core/postscategoria.php');
require_once(__DIR__ . '/header.php');

//Verificando é temos uma solicitação com ID (GET)
if (isset($_GET['id'])) {
    $dados = new PostsCategoria;

    $id = $_GET['id'];
    //var_dump($id);
    $post = $dados->select_id($id);
    //var_dump($post);
    //Verifica se a POSTAGEM EXIATE, se negativo pularemos para ELSE
    if ($post != null) {
        //var_dump($post);
?>

        <!-- MAIN -->
        <main class=" container">


            <!-- POSTS -->
            <?php
            foreach ($post as $item) {
               //var_dump($item);
            ?>

                <article class="posts">

                    <a href="noticia.php?id=<?php echo $item['id']; ?>"><img src="<?php $URL ?>./img/posts/article1.jpg" alt="Post 1"></a>
                    <div class="fonte">
                        Imagem de <a href="#" target="_blanck">wendy buiter</a> por <a href="#" target="_blanck">Arts Foto</a>
                    </div>
                    <div class="inner">
                        <a href="noticia.php?id=<?php echo $item['id']; ?>">
                            <?php echo $item['titulo']; ?>
                        </a>
                        <h4>
                            <?php echo $item['sloga']; ?>
                        </h4>
                        <p><?php
                            //Função limitará o counteudo em 200, sem contar a ultima palavra.
                            echo (limitarTexto($item['conteudo'], $limite = 200));
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

   
<?php
 require_once('footer.php');
        //RETORNANDO PARA HOME
    } else {
        header(('Location: index.php'));
        exit();
    }
}
