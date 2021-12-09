<?php

namespace App\Model;

class CakeModel
{
    public static function getCakeImage()
    {
        return self::$cakeImage;
    }

    public static $cakeImage = 
    [
        0 => [
        
            'url-image' => "cupcake-gebfe05d09_1920.jpg",
            'texte' => "Cupcakes"
        ],
        1 => [
            
            'texte' => "Gâteau à la fraise",
            'url-image' => "strawberry-roll-gff3fdb7b4_1920.jpg", 
        ],
        2 => [
            
            'texte' => "Cheesecake à la vanille",
            'url-image' => "cake-ga0580d8b0_1920.jpg", 
        ],

    ];
}