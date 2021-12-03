<?php

namespace App\Model;

class OriginModel
{

    public static function getOriginData()
    {
        return self::$originData;
    }

    
    public static $originData = 
    [
        0 => [
        
            'url-image' => "pexels-monstera-7411976.jpg",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, vel est dolores, odit ducimus similique voluptates, excepturi doloremque totam  asperiores quasi. Aspernatur aliquid et accusantium aliquam in. Quibusdam, ratione impedit!Orci varius natoque penatibus et magnis dis parturient montes, nascetur  ridiculus mus. Donec egestas eros ut orci lacinia, eget gravida enim posuere. Cras tincidunt urna sit amet purus faucibus ornare. Nam euismod elit vulputate purus   venenatis, eget cursus est feugiat. Mauris sit amet pulvinar lorem, ac porta velit. Sed a placerat urna. Nam vitae fermentum quam. Donec nec magna in lectus lacinia  sagittis. Nam fermentum hendrerit sollicitudin. Integer eu arcu sit amet nulla facilisis imperdiet."
        ],
        1 => [
            
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, vel est dolores, odit ducimus similique voluptates, excepturi doloremque totam     asperiores quasi. Aspernatur aliquid et accusantium aliquam in. Quibusdam, ratione impedit!Orci varius natoque penatibus et magnis dis parturient montes, nascetur  ridiculus mus. Donec egestas eros ut orci lacinia, eget gravida enim posuere. Cras tincidunt urna sit amet purus faucibus ornare. Nam euismod elit vulputate purus   venenatis, eget cursus est feugiat. Mauris sit amet pulvinar lorem, ac porta velit. Sed a placerat urna. Nam vitae fermentum quam. Donec nec magna in lectus lacinia  sagittis. Nam fermentum hendrerit sollicitudin. Integer eu arcu sit amet nulla facilisis imperdiet.",
            'url-image' => "pexels-pixabay-235925.jpg", 
        ],
        2 => [
            
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, vel est dolores, odit ducimus similique voluptates, excepturi doloremque totam     asperiores quasi. Aspernatur aliquid et accusantium aliquam in. Quibusdam, ratione impedit!Orci varius natoque penatibus et magnis dis parturient montes, nascetur  ridiculus mus. Donec egestas eros ut orci lacinia, eget gravida enim posuere. Cras tincidunt urna sit amet purus faucibus ornare. Nam euismod elit vulputate purus   venenatis, eget cursus est feugiat. Mauris sit amet pulvinar lorem, ac porta velit. Sed a placerat urna. Nam vitae fermentum quam. Donec nec magna in lectus lacinia  sagittis. Nam fermentum hendrerit sollicitudin. Integer eu arcu sit amet nulla facilisis imperdiet.",
            'url-image' => "pexels-michael-burrows-7125540.jpg", 
        ],

    ];

    /*public static function originData()
    {
        $originData = 
    [
        0 => [
        
            'url-image' => "pexels-monstera-7411976.jpg",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, vel est dolores, odit ducimus similique voluptates, excepturi doloremque totam  asperiores quasi. Aspernatur aliquid et accusantium aliquam in. Quibusdam, ratione impedit!Orci varius natoque penatibus et magnis dis parturient montes, nascetur  ridiculus mus. Donec egestas eros ut orci lacinia, eget gravida enim posuere. Cras tincidunt urna sit amet purus faucibus ornare. Nam euismod elit vulputate purus   venenatis, eget cursus est feugiat. Mauris sit amet pulvinar lorem, ac porta velit. Sed a placerat urna. Nam vitae fermentum quam. Donec nec magna in lectus lacinia  sagittis. Nam fermentum hendrerit sollicitudin. Integer eu arcu sit amet nulla facilisis imperdiet."
        ],
        1 => [
            
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, vel est dolores, odit ducimus similique voluptates, excepturi doloremque totam     asperiores quasi. Aspernatur aliquid et accusantium aliquam in. Quibusdam, ratione impedit!Orci varius natoque penatibus et magnis dis parturient montes, nascetur  ridiculus mus. Donec egestas eros ut orci lacinia, eget gravida enim posuere. Cras tincidunt urna sit amet purus faucibus ornare. Nam euismod elit vulputate purus   venenatis, eget cursus est feugiat. Mauris sit amet pulvinar lorem, ac porta velit. Sed a placerat urna. Nam vitae fermentum quam. Donec nec magna in lectus lacinia  sagittis. Nam fermentum hendrerit sollicitudin. Integer eu arcu sit amet nulla facilisis imperdiet.",
            'url-image' => "pexels-pixabay-235925.jpg", 
        ],
        2 => [
            
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, vel est dolores, odit ducimus similique voluptates, excepturi doloremque totam     asperiores quasi. Aspernatur aliquid et accusantium aliquam in. Quibusdam, ratione impedit!Orci varius natoque penatibus et magnis dis parturient montes, nascetur  ridiculus mus. Donec egestas eros ut orci lacinia, eget gravida enim posuere. Cras tincidunt urna sit amet purus faucibus ornare. Nam euismod elit vulputate purus   venenatis, eget cursus est feugiat. Mauris sit amet pulvinar lorem, ac porta velit. Sed a placerat urna. Nam vitae fermentum quam. Donec nec magna in lectus lacinia  sagittis. Nam fermentum hendrerit sollicitudin. Integer eu arcu sit amet nulla facilisis imperdiet.",
            'url-image' => "pexels-michael-burrows-7125540.jpg", 
        ],

    ];
    $odd = [];
    $even = [];

    foreach ($originData as $key => $value) {
        if( 0 == $key%2) {
            $even[] = $value;
        } else {
            $odd[] = $value;
        }
    }
        return $value;
    }*/

     
    
}

