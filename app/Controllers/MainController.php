<?php

// ici, on va créer notre premier contrôleur


class MainController {
    
    public function home() {
        // avec un seul argument, ça fonctionne toujours
        $this->show('home');
    }

    public function about() {
        // mais maintenant, on peut passer d'autres infos
        // un titre par exemple
        $this->show('about', ['title' => 'À propos']);
    }

    
    public function aboutMe() {
        // mais pas que :-)
        $random = mt_rand(1, 34);
        $this->show('author', ['title' => 'Qui suis-je ?', 'heure' => date('H\hi'), 'nombre' => $random]);
    }

    public function err404() {
        // BONNE PRATIQUE : favorisez toujours la génération des variables dans le contrôleur puis leur passage à la vue via les $viewVars
        // allez jeter un oeil au fichier 404.tpl.php pour voir la mauvaise pratique
         $this->show('404');
    }

    // marre des echo ! Affichons du HTML
    // et donnons à notre méthode la possibilité de choisir ce qu'on affiche
    // hep hep hep, minute papillon ! private ? pourquoi ?
    // pour qu'on ne puisse pas appeler cette méthode depuis autre part que l'intérieur de ce contrôleur. Après tout, elle n'existe que pour que les actions puissent facilement déléguer la partie "affichage de la réponse" au visiteur
    private function show($viewName, $viewVars=[]) {
        // avant de require les vues, on déclare la baseUrl, comme ça, on pourra y accéder de partout
        $baseUrl = dirname($_SERVER['SCRIPT_NAME']);
        // après découpage, les fichiers .tpl.php ne contiennent plus que le contenu spécifique de la page => pratique et léger :-)
        require __DIR__."/../views/header.part.php";
        require __DIR__."/../views/$viewName.tpl.php";
        require __DIR__."/../views/footer.part.php";
    }
}