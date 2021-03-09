<?php
 
 require( __DIR__ . '/header.php');
include_once( __DIR__ . '/core/selectposts.php');
include_once( __DIR__ . '/core/funcoes.php');

$db = new ListaPosts;
$noticias = $db->selecao_all();

//var_dump($noticias);
?>
    <!-- BANNER DO SITE, imagem com uma curta mensagem publicitária do site-->

    <div class="banner">
        <div class="title">
            <h2> News App! </h2>
            <h3> Fique atualizando, saiba o que acontece aqui e no mundo em tempo real! </h3>
        </div>
        <div class="fonte-banner">
            Imagem de <a href="https://pixabay.com/get/ge1779442242149887b35d4e44d0df3568b942dfa45fa680bd319cf38ae39b82018562218e72ab153200c5671f1662c97_1920.jpg" target="_blanck">Pixabay</a> por
            <a href="https://pixabay.com/pt/users/tayebmezahdia-4194100/" target="_blanck">Tayeb MEZAHDIA</a>
        </div>
    </div>

    <!-- MAIN -->
    <main class=" container">


        <!-- POSTS -->
        <?php 
        foreach($noticias as $post)
        { 
            ?>

        <article class="posts">

            <a href="noticia.php?id=<?php echo $post['id'];?>"><img src="./img/posts/article1.jpg" alt="Post 1"></a>
            <div class="fonte">
                Imagem de <a href="#" target="_blanck">wendy buiter</a> por <a href="#" target="_blanck">Arts Foto</a>
            </div>
            <div class="inner">
                <a href="noticia.php?id=<?php echo $post['id'];?>">
                <?php echo $post['titulo']; ?>
                </a>
                <h4>
                <?php echo $post['sloga']; ?>
                </h4>
            <p><?php
            //Função limitará o counteudo em 200, contando a ul
            echo (limitarTexto($post['conteudo'], $limite = 200));
            ?></p>

            </div>
        </article>
<?php
}
?>

   <!-- final main -->

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
 ?>