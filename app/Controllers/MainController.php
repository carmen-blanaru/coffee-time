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
       $title = "Bonjour!";
        // For now, this page only needs the view
       $this->show('main/home', [
           "title" => $title,
       ]);
    }
}