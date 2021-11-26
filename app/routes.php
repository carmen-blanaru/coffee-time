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
