<?php
include_once('header.php');
require_once(__DIR__ . '/core/selectpostsid.php');


//Verificando é temos uma solicitação com ID (GET)
if (isset($_GET['id'])) {
    $dados = new Posts;

    $id = $_GET['id'];

    $post = $dados->select_id($id);

    //Verifica se a POSTAGEM EXIATE, se negativo pularemos para ELSE
    if ($post['id'] != null) {
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



<?php
require_once 'footer.php';
//RETORNANDO PARA HOME
    } else {
        header(('Location: index.php'));
        exit();
    }
}
