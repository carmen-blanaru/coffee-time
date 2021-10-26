<?php

namespace App\Controllers;

use App\Controllers\CoreController;


class MainController extends CoreController
{
    /**
     * Method for the home page
     */
    public function home()
    {
       
        // For now, this page only needs the view
       return $this->show('main/home');
    }
}