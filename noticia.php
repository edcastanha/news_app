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

        <div class="banner">
        <div class="title">
            <h2><?php echo $post['titulo'] ?></h2>
            <h3><?php echo $post['sloga'] ?></h3>
        </div>
        <div class="fonte-banner">
            Imagem de <a href="https://pixabay.com/get/ge1779442242149887b35d4e44d0df3568b942dfa45fa680bd319cf38ae39b82018562218e72ab153200c5671f1662c97_1920.jpg" target="_blanck">Pixabay</a> por
            <a href="https://pixabay.com/pt/users/tayebmezahdia-4194100/" target="_blanck">Tayeb MEZAHDIA</a>
        </div>
    </div>
            <!-- POSTS -->
            <div class="artigo">
                <h1><?php echo $post['titulo'] ?></h1>

                <strong>Postagem de <?php echo date('d/m/Y H:i:s', strtotime($post['criado'])); ?></strong>

                <h4><?php echo $post['sloga'] ?></h4>

                <p>
                    <?php echo $post['conteudo'] ?>
                </p>



            </div>





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
