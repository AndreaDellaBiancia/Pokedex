<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= $_SERVER['BASE_URI'] ?>/">
    <link rel="stylesheet" href="./../public/css/reset.css ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css ">
    <title>Pokedex</title>
</head>

<body>
    <div class="container">
        <header>

            <h1 class="main-title">Pokédex</h1>

            <ul class="nav">
                <li class="nav_item"><a class="nav_link" href="<?= $router->generate('home') ?> ">Liste</a></li>
                <li class="nav_item"><a class="nav_link" href="<?= $router->generate('typeList') ?> ">Types</a></li>
            </ul>

        </header>

        <main>