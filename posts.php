<?php

include_once('../core/selectpostsid.php');


//Verificando é temos uma solicitação com ID (GET)
if (isset($_GET['id'])) {
    $dados = new Posts;

    $id = $_GET['id'];

    $post = $dados->select_id($id);

    //Verifica se a POSTAGEM EXIATE, se negativo pularemos para ELSE
    if ($id == $post['id']) {
?>

<!DOCTYPE html>
<html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=, initial-scale=1.0">
            <title>News App</title>
            <meta name="description" content="Portal de Noticias online">
            <meta name="keywords" content="News , Noticias, Point">
            <meta name="robots" content="index, follow">
            <meta name="author" content="Edson Lourenço">
            <link rel="stylesheet" type="text/css" href="./css/indexstyle.css" />
            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
            <link rel="icon" href="<?php $URL ?>views/img/icon.png">
        </head>

        <body>

            <!-- CABEÇALHO DO SITE, cabeçalho com menu e icone do site-->
            <header class="container">
                <a href="/">
                    <h1 class="logo-cabecalho">News App</h1>
                </a>
                <button class="btn-menu cg-gradiente" value="MENU"><i class="fa fa-bars fa-lg"></i></button>
                <nav class="menu">
                    <a class="btn-close"><i class="fas fa-times"></i></i></a>
                    <ul>
                        <li><a href="http://localhost/news_app">Home</a></li>
                        <li><a href="#">Categorias</a></li>
                        <li><a href="?view=login">Login</a></li>
                    </ul>
                </nav>
            </header>

            <!-- BANNER DO SITE, imagem com uma curta mensagem publicitária do site-->



            <!-- MAIN -->
            <main class=" container">


                <!-- POSTS -->
                <article>
                    <h1><?php echo $post['titulo'] ?></h1>

                    <strong>Postagem de <?php echo date('d/m/Y H:i:s',strtotime($post['criado'])); ?></strong></br>
                    <span><?php echo $post['sloga'] ?></span>

                    <p><?php echo $post['conteudo'] ?>
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
