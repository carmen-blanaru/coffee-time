<?php 

namespace App\Controllers;

class FooterController extends CoreController
{
    public function contact()
    {
        $this->show('footer/contact');
    }

    public function legalMention()
    {
        $this->show('footer/legal-mention');
    }

    public function cgu()
    {
        $this->show('footer/cgu');
    }
}