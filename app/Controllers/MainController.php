<?php

namespace App\Controllers;

use App\Controllers\CoreController;
use App\Model\OriginModel;

class MainController extends CoreController
{
    /**
     * Method for the home page
     */
    public function home()
    {
       
        // For now, this page only needs the view
       $this->show('main/home');
    }

    /**
     * Method to show the coffees and cakes page 
     */
    public function product()
    {
        $this->show('main/coffee');
    }

    /**
     * Methode to show the origin page
     */
    public function origin()
    {
        $originElement = OriginModel::getOriginData();
       // dump($originElement);
        $this->show('main/origin', [
            'origin' => $originElement
        ]);
    }
    /**
     * Method to show the schedule and the adress
     */
    public function information()
    {
        $this->show('main/information');
    }
}