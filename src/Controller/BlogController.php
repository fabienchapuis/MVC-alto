<?php

namespace App\Controller;

use App\Application\Controller;
use App\Application\DatabaseConfig;

class BlogController extends Controller
{

    


    //Method
    function index()
    {
        $db = new DatabaseConfig();
        $db->connect();

       var_dump( $db->db);
        return $this->twig->render('index.html.twig');
    }

    function posts()
    {
        return $this->twig->render('list.html.twig');
    }
}
