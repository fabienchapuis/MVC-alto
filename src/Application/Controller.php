<?php 

namespace App\Application;





class Controller
{
    /**
     * @var Template
     */
    protected $twig;

    public function __construct()
    {
        $this->twig = new Template();
    }
}

