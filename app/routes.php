<?php

// ici on liste les routes nécessaires pour notre appli 

// Route pour la page d'accueil 

$this->addRoute(
    'GET',
    '/accueil',
    'MainController',
    'home',
    'main-home'

);
