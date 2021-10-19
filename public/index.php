<?php

// ici le front controller

// on récupère les dépendances composer en allant chercher le fichier vendor/autoload
// Ce fichier sera toujours le même quel que soit le projet, quelles que soient les dépendances que vous installez
// ici, on commence par remonter dans le dossier parent car vendor se situe à côté de public, où on se trouve actuellement
require __DIR__.'/../vendor/autoload.php';

// maintenant que j'utilise des contrôleurs, je vais les inclure ici au fur et à mesure de leur création
require __DIR__.'/../app/Controllers/MainController.php';

$router = new AltoRouter();

// étape importante à c/c dans chaque projet utilisant AltoRouter
// déterminer quelle partie de l'url ne doit pas être prise en charge par le routeur (cas où votre projet est dans un sous-dossier)
$router->setBasePath(dirname($_SERVER['SCRIPT_NAME']));

// on écrit quelques routes en faisant correspondre chaque url à une action
// pour les actions, ce sont pour l'instant de simples strings, on choisit juste son séparateur préféré et on s'y tient (::, @ et # sont 3 bons candidats)
$router->map('GET', '/', 'MainController::home');
$router->map('GET', '/apropos', 'MainController::about');
// nouvelle route
$router->map('GET', '/apropos/auteur', 'MainController::aboutMe');

// on demande au routeur si l'url par laquelle on est arrivé correspond à une route
$match = $router->match();

// petit test très simple pour savoir si ça a marché
if ($match) {
    // echo un message, c'est bien...
    // dispatcher l'action, c'est mieux !

    // l'info se trouve dans la case target du tableau $match
    $action = $match['target'];

    // mais c'est une chaîne de caractère, il faut la transformer en un contrôleur + une action
    // pour ça, on utilise explode() qui découpe une chaîne en morceaux en fonction d'un séparateur (celui qu'on a décidé d'utiliser plus haut, dans les routes)
    $morceaux = explode("::", $action);

    // on donne des jolis noms à ces morceaux
    $nomDuControleur = $morceaux[0];
    $nomDeLaMethode = $morceaux[1];

    // et c'est parti, on crée le contrôleur et on lance la méthode
    $controller = new $nomDuControleur(); // PHP remplace dynamiquement la variable par sa valeur et instancie donc toujours le bon contrôleur
    $controller->$nomDeLaMethode(); // même principe, on appelle la méthode dynamiquement, en fonction de ce que contient la variable

} else {
    // ici, plus tard, c'est maintenant !
    $controller = new MainController(); // pas besoin de dynamisme ici, c'est toujours le même contrôleur qu'on instancie, et toujours la même méthode qu'on lance ;-)
    $controller->err404();
}