<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    

</head>
<body>

<div class="container">

    <header class="menu">
    <a href="<?php $URL ?>"><h1 class="logo-cabecalho">News App</h1></a>
       <button class="btn-menu cg-gradiente" value="MENU"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fas fa-times"></i></i></a>
            <ul>
                <li><a href="#">Dashboard</a></li>                
                <li><a href="#">Autores</a></li>
                <li><a href="#">Categorias</a></li>                
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </nav>
</header>
    

</div>
    
</body>
</html>