<?php

// ==================================================
// Ce fichier permet de centraliser
// la gestion des règles de sécurités
// On pourrait à terme stocker ces règles dans une BDD
// et mettre en place un formulaire pour les modifier
// 
// Compléter ce fichier avec vos propres routes à sécuriser
//===================================================

// ACL : Access Control List
// Permet de centraliser la gestion des autorisations
$acl = [
    // 'Ressource' => 'les personnes (rôles) qui peuvent y accéder'
    // 'main-home' => ['admin'], Pas besoin de restreindre l'accès à cette route...Si ?
    'user-list' => ['admin'],
    'user-add' => ['admin'],
    'user-create' => ['admin'],

    // ...
];


// Liste des routes à protéger contre les attaques de type CSRF
// Pour générer les tokens à envoyer aux vues, on peut utiliser la méthode
// generateToken du CoreController
$csrfTokenToCheck = [

    // Routes en POST
    'user-create',

    // Routes en GET
    'user-delete'
    // etc.
];
