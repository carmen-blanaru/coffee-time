<?php

namespace App\Model;

class ScheduleModel 
{

    
    public static function schedule()
    {
        // the variable contains 2 tables because of the English days names
        //the first table has only the days in english and I will use the function date() on these names in order to recognize them 
        // the second table contains the french days names and the opening hours
        $openingHours = 
            [
               'Monday' =>  ['Lundi' => ' de 7h à 19h'],
               'Tuesday' => ['Mardi' => 'Fermé'],
               'Wednesday' => ['Mercredi' => 'de 7h à 19h'],
               'Thursday' => ['Jeudi' => 'de 7h à 19h'],
               'Friday' => ['Vendredi' => 'de 8h à 20h'],
               'Saturday' => ['Samedi' => 'de 8h à 20h'],
               'Sunday' => ['Dimanche' => 'de 9h à 17h'],
            ];
           
            // these variable  will be used to target the date which will be showed in green and italic style
            //the function date() will recognize the english day of the first table
        $currentDay = date("l");

        $showData = 
        [
            'openingHours' => $openingHours,
            'currentDay' => $currentDay,
        ];

        return $showData;

    }
    
    
}