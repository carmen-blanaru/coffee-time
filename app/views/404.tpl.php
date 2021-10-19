<?php
    $messages = [
        "J'en connais un(e) qui a essayé de taper n'importe quoi dans la barre d'adresse !",
        "Enfin... sauf erreur, nous sommes ici sur la page d'erreur.",
        "Pas de bol...",
        "Errare humanum est ! Fluctuat nec mergitur ! Carpe diem ! Ok, j'arrête...",
        "Ce n'est pas forcément de votre faute, mais ce n'est pas de la nôtre... donc si, c'est de votre faute."
    ];

    $complement = $messages[mt_rand(0, count($messages) -1)];
    // MAUVAISE PRATIQUE : effectuer des opérations de "logique métier" une fois dans la vue
    // -> la vue, c'est la dernière étape de votre requête, il n'est plus temps d'aller chercher des données en base ou même de calculer le total d'un panier passé en $viewVars par exemple
    // faîtes tout ça dans la méthode du contrôleur et passez toutes les données à la vue
    // la vue, c'est JUSTE un html à trous, rien d'autre
?>
<p>Nous sommes ici sur la page d'erreur. <?=$complement?></p>