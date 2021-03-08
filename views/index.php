<?

include_once(header.php);

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

    <!-- postsS, postss oferecidos pelo site-->
<div class="slide">
<article class="posts">
            <a href="#"><img src="<?php $URL ?>views/img/posts/article1.jpg" alt="Post 1"></a>
            <div class="fonte">
              Imagem de <a href="#" target="_blanck">wendy buiter</a> por <a href="#" target="_blanck">Arts Foto</a>
          </div>
            <div class="inner">
                <a href="#">Noticia 1</a>
                <h4>Slogan da News 01</h4>
                <p>O velho e bom Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae dolor ratione, illum possimus optio itaque, sit libero reprehenderit unde tempora maxime! Obcaecati, vitae. Libero expedita natus repellat molestias obcaecati delectus?.</p><br/>
            </div>
        </article>
        <article class="posts">
            <a href="#"><img src="<?php $URL ?>views/img/posts/article2.jpg" alt="Post 2"></a>
            <div class="fonte">
                Imagem de <a href="#" target="_blanck">wendy buiter</a> por <a href="#" target="_blanck">Arts Foto</a>
            </div>
            <div class="inner">
              <a href="#">Noticia 2</a>
              <h4>Slogan da News 02</h4>
              <p>O velho e bom Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae dolor ratione, illum possimus optio itaque, sit libero reprehenderit unde tempora maxime! Obcaecati, vitae. Libero expedita natus repellat molestias obcaecati delectus?.</p><br/>
          </div>
        </article>
        
        </article>

</div>

    <main class=" container">
       
    </main>

    <!-- NEWSLETTER, boletim informativo ou mensagem eletrônica destinado a assinantes do site-->

    <section class="newsletter container">
        <h2>Inscreva-se agora!</h2>
        <h3>Receba todas as novidas</h3>
        <form>
            <input class="bt-black" type="email" placeholder="Seu email"/>
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
    $(".btn-menu").click(function(){
        $(".menu").show();
    });
    $(".btn-close").click(function(){
        $(".menu").hide();
    });
</script>
</body>
</html> 
