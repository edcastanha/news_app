<?php
define("URL","http://localhost/news_app/");
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
    <link rel="stylesheet" type="text/css" href="<?php $URL ?>views/css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" href="<?php $URL ?>views/img/icon.png">
</head>
<body>
    <!-- CABEÇALHO DO SITE, cabeçalho com menu e icone do site-->
    <header class="container">
        <a href="<?php $URL ?>"><h1 class="logo-cabecalho">News App</h1></a>
       <button class="btn-menu cg-gradiente" value="MENU"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fas fa-times"></i></i></a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/controles/">Categorias</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>