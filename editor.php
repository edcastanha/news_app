

<?
require( __DIR__ . '/header.php');

?>

    <!-- BANNER DO SITE, imagem com uma curta mensagem publicitária do site-->
<div>

    <h1>EDITOR DE POSTAGEM</h1>
</div>
  
    <!-- MAIN -->
    <main class=" container">



		<div id="container">
            <form action="salvarnews.php" autocomplete="FALSE">
<label>Autor:</label>
<p>Edson Lorenço</p>
<label><? echo 'Data:'. timezone_location_get ;?></label>


             <textarea id="txtArtigo" name="txtArtigo"></textarea>
            </form>
	
		</div>

    </main>
		<script src="/ckeditor/ckeditor.js"></script>
		<script>
                CKEDITOR.replace('txtArtigo');
        </script>
	</body>
</html>