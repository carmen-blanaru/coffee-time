<?php

// ici on liste les routes nécessaires pour notre appli 

// Route pour la page d'accueil 

$this->addRoute(
    'GET',
    '/',
    'MainController',
    'home',
    'main-home'

);

$this->addRoute(
    'GET',
    '/origine',
    'MainController',
    'origin',
    'main-origin'
);

$this->addRoute(
    'GET',
    '/produit',
    'MainController',
    'product',
    'main-product'
);

$this->addRoute(
    'GET',
    '/information',
    'MainController',
    'information',
    'main-information'
);
$this->addRoute(
    'GET',
    '/mentions-legales',
    'FooterController',
    'legalMention',
    'footer-legalMention'
);
$this->addRoute(
    'GET',
    '/cgu',
    'FooterController',
    'cgu',
    'footer-cgu'
);