<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (isset($viewVars['title'])) echo $viewVars['title']." | "; ?>Mon appli MVC</title>
    <link rel="stylesheet" href="<?=$baseUrl?>/assets/css/style.css">
</head>
<body>
    <header>
        <h1>Ma belle appli MVC</h1>
        <nav>
            <ul>
                <li><a href="<?=$baseUrl?>/">Accueil</a></li>
                <li><a href="<?=$baseUrl?>/apropos">À propos</a></li>
                <li><a href="<?=$baseUrl?>/apropos/auteur">Moi, moi, moi</a></li>
                <li><a href="<?=$baseUrl?>/nimp">Page d'erreur</a></li>
            </ul>
        </nav>
    </header>
    <main>